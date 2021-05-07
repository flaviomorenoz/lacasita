<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Post extends CI_Model{
    /*
     * Get posts
     */
    function getRows($params = array()){
        
        $this->db->select('*');
        $this->db->from('posts');
            
        //->get_compiled_select(); die($cSql);
        
        //error_reporting(E_ALL & ~E_NOTICE); ini_set('display_errors', '1');

        /*$this->db->select('id'); $this->db->from('posts'); $result = $this->db->get(); //->result_array();
        echo ($result->num_rows()); die();*/
        
        if(array_key_exists("id",$params)){
            $this->db->where('id',$params['id']);
            $query = $this->db->get();
            $result = $query->row_array();
        }else{
            //set start and limit
            if(array_key_exists("start",$params) && array_key_exists("limit",$params)){
                $this->db->limit($params['limit'],$params['start']);
            }elseif(!array_key_exists("start",$params) && array_key_exists("limit",$params)){
                $this->db->limit($params['limit']);
            }
            
            if(array_key_exists("returnType",$params) && $params['returnType'] == 'count'){
                $result = $this->db->count_all_results();
            }else{
                $query = $this->db->get();
                $result = ($query->num_rows() > 0) ? $query->result_array() : FALSE;
            }
        }

        //return fetched data
        return $result;
    }
}