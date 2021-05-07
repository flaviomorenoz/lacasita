<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Reports extends MY_Controller
{

    function __construct()
    {
        parent::__construct();
        check_access('admin');
    }

    function view_order($page_name = "" , $param2 = "" , $param3 = ""){
        $page_data["param2"]        =   $param2;
        $page_data["param3"]        =   $param3;
        
        if ($param2 != '') {
            
            $order_id = $param2;
            $order_type = $param3;
            
            $order=array();
            $order_products = array();
            $order_addons     = array();
            $order_offers   = array();
            
            if ($order_id > 0 && $order_type != '') {
                
                $active_submenu=$order_type;
                $this->data['actv_submenu'] = $active_submenu;
        
                //order
                
                $order = $this->base_model->get_query_result("SELECT o.*,k.username as kitchen_manager,sk.username as sent_km_user,d.username as delivery_manager FROM ".TBL_PREFIX.TBL_ORDERS." o LEFT JOIN ".TBL_PREFIX.TBL_USERS." k ON o.km_id=k.id LEFT JOIN ".TBL_PREFIX.TBL_USERS." sk ON o.sent_km_id=sk.id LEFT JOIN ".TBL_PREFIX.TBL_USERS." d ON o.dm_id=d.id WHERE o.order_id=".$order_id." ");
                
                if (!empty($order)) {
                    $order = $order[0];
                    
                    //order items
                    $order_products = $this->base_model->fetch_records_from(TBL_ORDER_PRODUCTS, array('order_id'=>$order_id,'is_deleted'=>0));
                    if (!empty($order_products)) {
                        //order addons
                        $order_addons = $this->base_model->fetch_records_from(TBL_ORDER_ADDONS, array('order_id'=>$order_id));
                    }
                    
                    //order offers
                    $order_offers = $this->base_model->fetch_records_from(TBL_ORDER_OFFERS, array('order_id'=>$order_id));
                    
                } else {
                    redirect(URL_ORDERS_INDEX.'new');
                }
            } else {
                redirect(URL_ORDERS_INDEX.'new');
            }
        } else {
            redirect(URL_ORDERS_INDEX.'new');
        }
        
        
        $this->data['order']            = $order;
        $this->data['order_products']    = $order_products;
        $this->data['order_addons']        = $order_addons;
        $this->data['order_offers']        = $order_offers;
        
        if ($order->status == 'new' || $order->status == 'process') {
            $kitchen_managers = $this->base_model->get_users_options(3);
            $this->data['kitchen_managers'] = $kitchen_managers;
    
       
            $dm_options=array();
            $order_city_id = $order->city_id;
            
            if ($order_city_id > 0) {
                
                $dm_users = $this->base_model->get_query_result("select id,username from ".TBL_PREFIX.TBL_USERS." where FIND_IN_SET($order_city_id,assigned_cities) and active=1 ");
                
                if (!empty($dm_users)) {
                    
                    $dm_options = array(''=>get_languageword('select'));
                    
                    foreach ($dm_users as $dm):
                        $dm_options[$dm->id] = $dm->username;
                    endforeach;
                    
                } 
            }
            $this->data['delivery_managers'] = $dm_options; 

            
        }
        
        
        
        $this->data['css_js_files'] = array('form_validation');
        $this->data['activemenu']     = "orders";
        $this->data['message']         = $this->session->flashdata('message');
        $this->data['pagetitle']     = get_languageword('view_order');
        $this->load->view($page_name.'.php' ,$this->data);
    }


    /**
     * Date wise Reports
     *
     * @return array
     **/ 
    function index()
    {
        if (isset($_POST['datewise_reports'])) {
            
            $from_date      = $this->input->post('from_date');
            $to_date        = $this->input->post('to_date');
            $order_status   = $this->input->post('order_status');
            $customer_name  = $this->input->post('customer_name');
            //$alias          = $this->input->post('alias'); 
            $alias          = $_POST["alias"];

            
            if ($from_date != '' && $to_date != '') {
                
                $from_date = date('Y-m-d', strtotime($from_date));
                $to_date = date('Y-m-d', strtotime($to_date));
                
                if (strtotime($from_date) > strtotime($to_date)) {
                    $this->prepare_flashmessage(get_languageword('please_select_valid_dates'), 1);
                    redirect(URL_REPORTS_INDEX);
                }

                $cadAlias = "";
                if(isset($alias) && strlen($alias)>0){
                    $cadAlias = " and c.alias = '" . $alias . "'";
                }

                $query="select o.order_id, o.customer_name,o.status,o.phone,o.no_of_items,o.total_cost,".
                    "o.delivery_fee,o.order_date,o.order_time,o.payment_card,o.payment_gateway,o.paid_amount,c.alias".
                    " from ".TBL_PREFIX.TBL_ORDERS." o".
                    " left join cr_service_provide_locations cspl on o.pincode = cspl.pincode".
                    " left join cr_stores c on cspl.id_store = c.id".
                    " where o.customer_name like '%".$customer_name."%'  and o.status like '%".
                    $order_status."%' and o.order_date between '".$from_date."' and '".$to_date."'".
                    $cadAlias;
                
                $this->data['mi_query']     = $query; //die($query);
                
                $records = $this->db->query($query)->result();
                
                if (!empty($records)) {
                    
                    $profit = "select SUM(o.total_cost-o.payable_amount) as total_pedido,SUM(o.total_cost) as total_cost, SUM(o.payable_amount) as payable_amount from ".TBL_PREFIX.TBL_ORDERS." o where o.customer_name like'%".$customer_name."%' and o.status like '%".$order_status."%' and o.order_date and o.order_date between '".$from_date."' and '".$to_date."' ";
                    $profit = $this->db->query($profit)->result();
                    
                    if (!empty($profit)) {
                        $this->data['total_pedido'] = $profit[0]->total_pedido;
                        $this->data['total_payable_amount'] = $profit[0]->payable_amount;
                        $this->data['total_cost'] = $profit[0]->total_cost;
                    }
                }
                
                $this->data['records'] = $records;
            } else {
                redirect(URL_REPORTS_INDEX);
            }
        }
        
        /**
        * 
        * get customers
        **/
        $customers  = array('');
        $query      = "select u.id,CONCAT(u.first_name,' ',u.last_name) as customer_name from ".TBL_PREFIX.TBL_USERS." u inner join ".TBL_PREFIX.TBL_USERS_GROUPS." ug on u.id=ug.user_id where u.active=1 and ug.group_id=2 ";
        $users      = $this->db->query($query)->result();
        
        if (!empty($users)) {
            
            $customers = array(''=>Todos);
            foreach($users as $c):
                $customers[$c->customer_name]=$c->customer_name;
            endforeach;
            
        } else {
            $customers = array(''=>get_languageword('no_customers_available'));
        }
        
        $stores         = array();
        $cSql           = "select * from cr_stores";
        $result_stores  = $this->db->query($cSql)->result();

        if(!empty($result_stores)){
            $stores = array(''=>Todos);
            foreach($result_stores as $r):
                $stores[$r->alias] = $r->alias;
            endforeach;
        }

        $this->data['customers']    = $customers;
        $this->data['stores']       = $stores;
        $this->data['css_js_files'] = array('data_tables','datepicker','form_validation');
        
        $this->data['activemenu']       = "reports";
        $this->data['actv_submenu']     = 'date_wise';
        
        $this->data['message']          = $this->session->flashdata('message');
        $this->data['pagetitle']        = get_languageword('date_wise_reports');
        $this->data['content']          = PAGE_DATE_WISE_REPORTS;
        //die("content:".PAGE_DATE_WISE_REPORTS);
        $this->_render_page(TEMPLATE_ADMIN, $this->data);
    }
    
    /**
     * CUSTOMER WISE REPORTS
     *
     * @return array
     **/     
    function customer_wise_reports()
    {
        if (isset($_POST['client_wise_reports'])) {
            $from_date = $this->input->post('from_date');
            $to_date = $this->input->post('to_date');
            $user_id = $this->input->post('user_id');
            
            if ($from_date != '' && $to_date != '') {
                
                $from_date = date('Y-m-d', strtotime($from_date));
                $to_date = date('Y-m-d', strtotime($to_date));

                if (strtotime($from_date) > strtotime($to_date)) {
                    
                    $this->prepare_flashmessage(get_languageword('please_select_valid_dates'), 1);
                    redirect(URL_REPORTS_INDEX);
                    
                }

                $query="select o.order_id,o.status,o.customer_name, o.no_of_items,o.total_cost,o.order_date,o.order_time,o.payment_card,o.payment_gateway,o.paid_amount from ".TBL_PREFIX.TBL_ORDERS." o where o.user_id like '%".$user_id."%' and o.order_date between '".$from_date."' and '".$to_date."' ";
                
                $records = $this->db->query($query)->result();
                
                if (!empty($records)) {
                    
                    $profit = "select SUM(o.paid_amount) as total_profit from ".TBL_PREFIX.TBL_ORDERS." o where o.user_id like '%".$user_id."%' and o.order_date between '".$from_date."' and '".$to_date."' ";
                    $profit = $this->db->query($profit)->result();
                    
                    if (!empty($profit)) {
                        $this->data['total_profit'] = $profit[0]->total_profit;
                    }
                }
                $this->data['records'] = $records;
            } else {
                redirect(URL_REPORTS_CLIENT_WISE);
            }
        }
        
        /**
        * 
        * get customers
        **/
        $customers=array();
        $query = "select u.id,CONCAT(u.first_name,' ',u.last_name) as customer_name from ".TBL_PREFIX.TBL_USERS." u inner join ".TBL_PREFIX.TBL_USERS_GROUPS." ug on u.id=ug.user_id where u.active=1 and ug.group_id=2 ";
        $users = $this->db->query($query)->result();
        
        if (!empty($users)) {
            
            $customers = array(''=>Todos);
            foreach($users as $c):
                $customers[$c->id]=$c->customer_name;
            endforeach;
            
        } else {
            $customers = array(''=>get_languageword('no_customers_available'));
        }
        $this->data['customers']    = $customers;
        
        $this->data['css_js_files'] = array('data_tables','form_validation');
        
        $this->data['activemenu']     = "reports";
        $this->data['actv_submenu'] = 'customer_wise';
        
        $this->data['message']         = $this->session->flashdata('message');
        $this->data['pagetitle']     = get_languageword('customer_wise_reports');
        $this->data['content']         = PAGE_CLIENT_WISE_REPORTS;
        $this->_render_page(TEMPLATE_ADMIN, $this->data);
    }
    
    
    /**
     * LOCATION WISE REPORTS
     *
     * @return array
     **/ 
    function location_wise_reports()
    {
        if (isset($_POST['location_wise_reports'])) {
            
            $pincode = $this->input->post('locality');
            
            if ($pincode > 0) {
                
                $query="select o.customer_name,o.phone,o.no_of_items,o.total_cost,o.order_date,o.order_time,o.payment_card,o.payment_gateway,o.paid_amount from ".TBL_PREFIX.TBL_ORDERS." o where o.status='delivered' and o.pincode=".$pincode." ";
                
                $records = $this->db->query($query)->result();
                
                if (!empty($records)) {
                    
                    $profit = "select SUM(o.paid_amount) as total_profit from ".TBL_PREFIX.TBL_ORDERS." o where o.status='delivered' and o.pincode=".$pincode." ";
                    $profit = $this->db->query($profit)->result();
                    if(!empty($profit)) {
                        $this->data['total_profit'] = $profit[0]->total_profit;
                    }
                }
                $this->data['records'] = $records;
            } else {
                redirect(URL_REPORTS_LOCATION_WISE);
            }
        }
        
        /**
        * 
        * get cities
        **/
        $cities_options=array();
        $cities = "select * from ".TBL_PREFIX.TBL_CITIES." where status='Active' ";
        $cities = $this->db->query($cities)->result();
        
        if (!empty($cities)) {
            $cities_options = array(''=>get_languageword('select'));
            foreach($cities as $c):
                $cities_options[$c->city_id]=$c->city_name;
            endforeach;
            
        } else {
            $cities_options = array(''=>get_languageword('no_cities_available'));
        }
        $this->data['cities_options']    = $cities_options;
        
        $this->data['css_js_files'] = array('data_tables','form_validation');
        
        $this->data['activemenu']     = "reports";
        $this->data['actv_submenu'] = 'location_wise';
        
        $this->data['message']         = $this->session->flashdata('message');
        $this->data['pagetitle']     = get_languageword('location_wise_reports');
        $this->data['content']         = PAGE_LOCATION_WISE_REPORTS;
        $this->_render_page(TEMPLATE_ADMIN, $this->data);
    }
    
    
    /**
     * AJAX CALL
     * GET LOCALITIES OF SELECTED CITY
     *
     * @return array
     **/ 
    function get_localities()
    {
        if ($this->input->post('city_id')) {
            
            $localities = '';
            $city_id = $this->input->post('city_id');
            
            if ($city_id > 0) {
                
                $records = $this->base_model->fetch_records_from(TBL_SERVICE_PROVIDE_LOCATIONS, array('city_id'=>$city_id,'status'=>'Active'));
                
                if (!empty($records)) {
                    $localities .= '<option value="">'.get_languageword('select').'</option>';
                    foreach ($records as $record):
                        $localities .= '<option value="'.$record->pincode.'">'.$record->locality.' - '.$record->pincode.'</option>';
                    endforeach;
                    
                } else {
                    $localities .= '<option value="">'.get_languageword('no_records_available').'</option>';
                }
                
                echo $localities;
            } else {
                return 0;
            }
        } else {
            echo 999;
        }
    }
    
    
    /**
     * ITEM WISE REPORT
     *
     * @return array
     **/ 
    function item_wise_reports()
    {
        if (isset($_POST['item_wise_reports'])) {
            $from_date = $this->input->post('from_date');
            $to_date = $this->input->post('to_date');
            $item_id = $this->input->post('item_id');
            $menu_id = $this->input->post('menu_id');
            $order_status = $this->input->post('order_status');
            $customer_name = $this->input->post('customer_name');

            if ($menu_id == 99999999) {
                $menu_id = "";
            }
            
            
            if ($from_date != '' && $to_date != '') {
                $from_date = date('Y-m-d', strtotime($from_date));
                $to_date = date('Y-m-d', strtotime($to_date));

                if (strtotime($from_date) > strtotime($to_date)) {
                    
                    $this->prepare_flashmessage(get_languageword('please_select_valid_dates'), 1);
                    redirect(URL_REPORTS_INDEX);
                    
                }

                $query="select o.order_id,o.status,o.customer_name,o.phone,o.no_of_items,o.total_cost,o.order_date,o.order_time,o.payment_card,o.payment_gateway,o.paid_amount,r.item_name,r.item_cost from ".TBL_PREFIX.TBL_ORDERS." o inner join ".TBL_PREFIX.TBL_ORDER_PRODUCTS." r on o.order_id=r.order_id where o.customer_name like '%".$customer_name."%'  and o.status like '%".$order_status."%' and r.menu_id like '%".$menu_id."%' and r.item_id like '%".$item_id."%' and o.order_date between '".$from_date."' and '".$to_date."'";
                
                $records = $this->db->query($query)->result();
                
                if (!empty($records)) {
                    
                    $profit = "select SUM(o.paid_amount) as total_orders_amount,SUM(r.item_cost) as total_items_amount from ".TBL_PREFIX.TBL_ORDERS." o inner join ".TBL_PREFIX.TBL_ORDER_PRODUCTS." r on o.order_id=r.order_id where o.customer_name like '%".$customer_name."%' and o.status like '%".$order_status."%' and r.menu_id like '%".$menu_id."%' and r.item_id like '%".$item_id."%' and o.order_date between '".$from_date."' and '".$to_date."'";
                    $profit = $this->db->query($profit)->result();
                    
                    if (!empty($profit)) {
                        $this->data['profit'] = $profit[0];
                    }
                }
                $this->data['records'] = $records;
            } else {
                redirect(URL_REPORTS_ITEM_WISE);
            }
        }
        /**
        * 
        * get customers
        **/
        $customers=array();
        $query = "select u.id,CONCAT(u.first_name,' ',u.last_name) as customer_name from ".TBL_PREFIX.TBL_USERS." u inner join ".TBL_PREFIX.TBL_USERS_GROUPS." ug on u.id=ug.user_id where u.active=1 and ug.group_id=2 ";
        $users = $this->db->query($query)->result();
        
        if (!empty($users)) {
            
            $customers = array(''=>Todos);
            foreach($users as $c):
                $customers[$c->customer_name]=$c->customer_name;
            endforeach;
            
        } else {
            $customers = array(''=>get_languageword('no_customers_available'));
        }
        $this->data['customers']    = $customers;
        /**
        * 
        * get menus
        **/
        $menu_options=array();
        $menu = "select * from ".TBL_PREFIX.TBL_MENU." where status='Active' ";
        $menu = $this->db->query($menu)->result();
        
        if (!empty($menu)) {
            $menu_options = array('99999999'=>'Todos');
            foreach($menu as $c):
                $menu_options[$c->menu_id]=$c->menu_name;
            endforeach;
            
        } else {
            $menu_options = array(''=>'No se encontro menu');
        }

        $this->data['menus']    = $menu_options;

        // $this->data['menus']   = prepare_dropdown(TBL_MENU, 1, 'menu_id', 'menu_name', '', array('status' => 'Active'));
        
        
        $this->data['css_js_files'] = array('data_tables','form_validation');
        
        $this->data['activemenu']     = "reports";
        $this->data['actv_submenu'] = 'item_wise';
        
        $this->data['message']         = $this->session->flashdata('message');
        $this->data['pagetitle']     = get_languageword('item_wise_reports');
        $this->data['content']         = PAGE_ITEM_WISE_REPORTS;
        $this->_render_page(TEMPLATE_ADMIN, $this->data);
    }
}