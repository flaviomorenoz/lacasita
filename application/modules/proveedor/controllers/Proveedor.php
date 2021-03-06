<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Proveedor extends MY_Controller{

    function __construct(){
        parent::__construct();
        
        $this->load->model('proveedor/proveedor_model');
        
        session_start();
        
        $this->load->library('pagination');
        //per page limit
        
        $this->perPage = 4;        
    }

    function agregar_proveedor(){
        if(!(isset($_SESSION["USUARIO"]) && strlen($_SESSION["USUARIO"])>0)){
                    $this->salir();
        }else{
            $result = $this->proveedor_model->listar_proveedores();
            //print_r($result);
            //die();
            $this->data['content']  = "proveedor/proveedor";
            $this->data['result'] = $result;
            $this->_render_page('inventario/inv_templo', $this->data);
        }
    }
}
?>