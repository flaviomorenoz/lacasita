<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cart extends MY_Controller{

    function __construct(){
        parent::__construct();
        $this->load->model('cart_model');
    }
    
    function index(){
    	// pagina inicial
    	$this->load->view("index");
    }

    function create(){
    	// pagina inicial
    }
}

?>