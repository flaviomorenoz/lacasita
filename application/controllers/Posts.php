<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Posts extends CI_Controller {
    
    function __construct() {
        //die("Llego aqui");
        parent::__construct();
        //load pagination library
        $this->load->library('pagination');
        //load post model
        $this->load->model('post');
        //per page limit
        $this->perPage = 4;
        //die("Final de construct");
    }
    
    public function index(){

        $data = array();
        
        //error_reporting(E_ALL & ~E_NOTICE);
		//ini_set('display_errors', '1');

        //get rows count
        $conditions['returnType'] = 'count';
        $totalRec = $this->post->getRows($conditions);
        
        //pagination config
        $config['base_url']    = base_url().'posts/index/';  // 'posts/index/'
        $config['uri_segment'] = 3;
        $config['total_rows']  = $totalRec;
        $config['per_page']    = $this->perPage;
        
        //styling
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="active"><a href="javascript:void(0);">';
        $config['cur_tag_close'] = '</a></li>';
        $config['next_link'] = 'Next';
        $config['prev_link'] = 'Prev';
        $config['next_tag_open'] = '<li class="pg-next">';
        $config['next_tag_close'] = '</li>';
        $config['prev_tag_open'] = '<li class="pg-prev">';
        $config['prev_tag_close'] = '</li>';
        $config['first_tag_open'] = '<li>';
        $config['first_tag_close'] = '</li>';
        $config['last_tag_open'] = '<li>';
        $config['last_tag_close'] = '</li>';
        
        //initialize pagination library

        $this->pagination->initialize($config);
        
        //define offset
        $page = $this->uri->segment(3);
        $offset = !$page?0:$page;
        
        //get rows
        $conditions['returnType'] = '';
        $conditions['start'] = $offset;
        $conditions['limit'] = $this->perPage;
        
        $data['posts'] = $this->post->getRows($conditions);
        
        //load the list page view
        $this->load->view('index', $data);  // posts/index
    }
    
}