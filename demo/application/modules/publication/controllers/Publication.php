<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Publication extends MY_Controller{
    
    function __construct(){
        parent::__construct();
        check_access('admin');
    }

    function index(){
        if ($this->input->post()) {
            $param1 = $this->input->post('param1');
            $param2 = $this->input->post('param2');
        }
        
        $this->data['ajaxrequest'] = array(
            'url' => base_url('publication/ajax_get_list') ,
            'disablesorting' => '0,3',
        );
        
        $this->data['css_js_files'] = array('data_tables');
        $this->data['activemenu']     = "publication";
        $this->data['message']         = $this->session->flashdata('message');
        $this->data['pagetitle']     = 'Publicaciones';
        $this->data['content']         = "publication";
        $this->_render_page(TEMPLATE_ADMIN, $this->data);
    }

    function ajax_get_list()
    {
        if ($this->input->is_ajax_request()) {
            $data = array();
            $no = $_POST['start'];

            $draw = intval($this->input->get("draw"));
            $start = intval($this->input->get("start"));
            $length = intval($this->input->get("length")); 
            $query   = $this->db->query("SELECT * FROM cr_publication");            
            $records = $query->result();

            if (!empty($records)) {

                foreach ($records as $record) {
                    $no++;
                    $row = array();

                    $row[] = '<input type="checkbox" name="check_rows[]" class="check_rows" value="'.$record->publication_id.'"> ';
                    $row[] = '<span><img src="uploads/banner/'.$record->publication_imagen.'" class="img-responsive center-block"/></span>';

                    $checked = '';
                    $value =  'Inactivo';
                    $class = 'badge danger';
                    if ($record->publication_status == '1') {
                        $checked = ' checked';
                        $class = 'badge success'; 
                        $value = 'Activo';
                    }
                    
                    $row[] = '<span class="'.$class.'">'.$value.'</span>';
                    
                    $dta ='';
                    $dta .= '<span>';
                    $dta .= form_open(base_url('publication/edit/'));
                    $dta .= '<input type="hidden" name="id" value="'.$record->publication_id.'">';
                    $dta .= '<button type="submit" name="edit_publication" class="'.CLASS_EDIT_BTN.'"><i class="'.CLASS_ICON_EDIT.'" ></i></button>';
                    $dta .= form_close();
                    $dta .= '</span>';
                    
                    $str = $dta;
                    
                    $row[] = $str;
                    
                    $data[] = $row;
                
                }
            }

            $output = array(
            "draw" => $query->num_rows(),
            "recordsTotal" => $query->num_rows(),
            "recordsFiltered" => $query->num_rows(),
            "data" => $data,
            );

            echo json_encode($output);
        }
    }

    function edit(){

        if (isset($_POST['addedit_page'])) {
                
            $msg='';
            $status=0;
            $id = $this->input->post('id');

            $data = array();
            $data['publication_status']      = $this->input->post('status');
            $data['publication_imagen']        = $_FILES["publication_imagen"]["name"];
            move_uploaded_file($_FILES["publication_imagen"]["tmp_name"], "uploads/banner/".$_FILES["publication_imagen"]["name"] );

            $this->db->where('publication_id', $id);
            $this->db->update('cr_publication', $data);

            $msg .= get_languageword('details_saved_successfully');
            $status = 0;
            if ($msg != '') {
                $this->prepare_flashmessage($msg, $status);
            }
            redirect(base_url('publication'), REFRESH);
            // echo json_encode($data);
        }
        
        // $pagetitle = get_languageword('add_page');
        if (isset($_POST['edit_publication'])) {
            $id = $this->input->post('id');
            
            if ($id > 0) {
                $pagetitle = 'Editar Publicación';
                $this->data['record'] =    $id;
            } else {
                redirect(base_url('publication'), REFRESH);
            }
        }
        
        $this->data['css_js_files']  = array('form_validation','ckeditor');
        $this->data['pagetitle']     = $pagetitle;
        $this->data['activemenu']      = "publication";
        $this->data['activesubmenu'] = 'publication';
        $this->data['content']          = 'edit';
        $this->_render_page(TEMPLATE_ADMIN, $this->data);    
    }



}