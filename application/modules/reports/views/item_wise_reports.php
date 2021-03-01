<div id="page-wrapper">


            <div class="row">

				<div class="col-md-12">

					<?php echo $this->session->flashdata('message'); ?>



					<!-- Advanced Tables -->
			<?php

				$attributes = array('name'=>'report_form','id'=>'report_form', 'style'=>'display:block');

				echo form_open(URL_REPORTS_ITEM_WISE,$attributes);?>

                    <div class="panel panel-default">

                        <div class="panel-heading">

                             <?php if(!empty($pagetitle)) echo $pagetitle;?>
                            <button type="submit" name="item_wise_reports" value="item_wise_reports" class="btn btn-success pull-right" style="top: -7px;
    position: relative;"><?php echo get_languageword('submit');?></button>
                        </div>

                        <div class="panel-body">

						
						<!---->
						<div class="row">
						


                <div class="col-md-12 reports clearfix">

				
			
               	<div class="form-group col-md-2">
					<label><?php echo get_languageword('from_date').required_symbol();?></label>
				<?php 
				$val='';
				if(isset($_POST['from_date'])){
					$val=$_POST['from_date'];
				}
				$element =array('name'=>'from_date',
					// 'id'=>'dpd1',
					'value'=>$val,
					'class'=>'form-control dta',
					'placeholder' => 'dd-mm-yyyy');
					echo form_input($element);
				?>
				</div>
				<div class="form-group col-md-2">
					<label><?php echo get_languageword('to_date').required_symbol();?></label>
				<?php 
				$val='';
				if(isset($_POST['to_date'])){
					$val=$_POST['to_date'];
				}
				$element =array('name'=>'to_date',
					// 'id'=>'dpd2',
					'value'=>$val,
					'class'=>'form-control dta',
					'placeholder' => 'dd-mm-yyyy');
					echo form_input($element);
				?>
				</div>
				

				<div class="form-group col-md-2">

				 <label><?php echo get_languageword('menu');?></label>

				<?php 

				$val='';

				if(isset($_POST['item_wise_reports']))

				{

					$val=$_POST['menu_id'];

				}

				echo form_dropdown('menu_id',$menus,$val,'class="chzn-select" onchange="get_items(this.value)" id="menu_id"');

				?>

				</div>

				

				<div class="form-group col-md-2">

				 <label><?php echo get_languageword('item');?></label>

				<?php 

				$item_options=array();

				$val='';

				if(isset($_POST['item_wise_reports']))

				{

					$val=$_POST['item_id'];

				}

				echo form_dropdown('item_id',$item_options,$val,'class="chzn-select" id="item_id"');

				?>

				</div>
				<div class="form-group col-md-2">
					<label>Estado de Pedido</label>
					<?php 
					$val='';

						if(isset($_POST['order_status']))

						{

							$val=$_POST['order_status'];

						}


						$status = array(
						''=>Todos,
						'new'=>Nuevo,
						'process'=>get_languageword('processing'),
						'out_to_deliver'=>get_languageword('out_to_deliver'),
						'delivered'=>get_languageword('delivered'),
						'cancelled'=>get_languageword('cancelled')
						);
						echo form_dropdown('order_status',$status,$val,'class="form-control chzn-select"');
					 ?>
				</div>
				
				<div class="form-group col-md-2">
					<label><?php echo get_languageword('customer');?></label>
				<?php 
				$val='';
				if(isset($_POST['customer_name'])){
					$val=$_POST['customer_name'];
				}
					echo form_dropdown('customer_name',$customers,$val,'class="form-control chzn-select"');
				?>
				</div>
				
				


				<?php 
				$currency_symbol = $this->config->item('site_settings')->currency_symbol;

				if(isset($_POST['item_wise_reports']) && isset($profit)) {?>

				<div class="form-group col-md-12">
					<div class="col-md-6">
						<p class="order-summary" style="margin: 0; padding: 0"><strong><?php echo get_languageword('total_items_amount').'   '.$currency_symbol.$profit->total_items_amount;?></strong></p>
					</div>
					<div class="col-md-6">
						<p class="order-summary" style="margin: 0; padding: 0"><strong><?php echo get_languageword('total_orders_amount').'   '.$currency_symbol.$profit->total_orders_amount;?></strong></p>
					</div>
				</div>

				<?php } ?>
				<?php echo form_close();?>

				</div>

						
						</div>
						<!----->
						
						
                            <div class="table-responsive">

							

		

			<table id="example" class="display responsive nowrap" width="100%" cellspacing="0">

			  	<thead>
					<tr>
						<th>Item</th>
						<th>Nº Pedido</th>
						<th>Estado</th>
						<th><?php echo get_languageword('customer_name');?></th>
						<th>Nombre de Producto</th>
						<th><?php echo get_languageword('item_cost');?></th>
						<th><?php echo get_languageword('no_of_items');?></th>
						<th><?php echo get_languageword('order_cost');?></th>
						<th><?php echo get_languageword('payment');?></th>
						<th><?php echo get_languageword('paid_amount');?></th>
						<th><?php echo get_languageword('booked_date');?></th>
					</tr>

				</thead>

				<?php if(isset($records) && !empty($records)) {?>

				<tbody>

				<?php 

				$i=0;

				foreach($records as $r):

				$i++;?>

				<tr>

				<td><?php echo $i;?></td>
				<td><?php echo $r->order_id; ?></td>
				<?php 
					$order_status = '';
				    if ($r->status=="delivered"){
				    	$order_status = 'Entregado';
				    }elseif ($r->status == "process") {
				    	$order_status = 'En Proceso';
				    }elseif ($r->status == 'cancelled') {
				    	$order_status = 'Cancelado';
				    }elseif ($r->status == "new") {
				    	$order_status = 'Nuevo';
				    }elseif ($r->status == "out_to_deliver") {
				    	$order_status = 'En Camino';
				    } 
				 ?>
				<td><?php echo $order_status ?></td>
				<td><?php echo $r->customer_name ?></td>
				<td><?php echo $r->item_name ?></td>
				<td><?php if(isset($r->item_cost)) echo $r->item_cost;?></td>
				<td><?php if(isset($r->no_of_items)) echo $r->no_of_items;?></td>
				<td><?php if(isset($r->total_cost)) echo $r->total_cost;?></td>				
				<?php 
					$paymen_cart_pay='';
					if ($r->payment_card == '') {
						$paymen_cart_pay = 'Online';
					}else{
						$paymen_cart_pay = $r->payment_card;
					}
				?>
				<td><?php echo $paymen_cart_pay;?></td>
				<td><?php echo $r->paid_amount;?></td>
				<td><?php if(isset($r->order_date)) echo get_date($r->order_date).' - '.$r->order_time;?></td>
				</tr>

				<?php endforeach;?>

				</tbody>

				<?php } ?>

				<tbody>



				</tbody>

			</table>

			</div>

			</div>

			</div>

		 </div>

                        </div>

                  

                    <!--End Advanced Tables -->

                </div>

				

				

<!-- Form Validation Plugins /Start -->

<?php if(!empty($css_js_files) && in_array('form_validation', $css_js_files)) { ?>



<link href="<?php echo CSS_ADMIN_OR_BOOTSTRAP_VALIDATOR;?>" rel="stylesheet">

<script type="text/javascript" src="<?php echo JS_ADMIN_BOOTSTRAP_VALIDATOR;?>"></script>
	<link href="<?php echo DATEPICKER_CSS;?>" rel="stylesheet"/>
<script type="text/javascript" src="<?php echo BOOTSTRAP_DATEPICKER_JS;?>"></script>

<script type="text/javascript">

    $(document).ready(function () {

		    	$('.dta').datepicker().on('changeDate', function(ev)
	{
		$('.datepicker').hide();
		
	});	

        $('#report_form').bootstrapValidator({

            // To use feedback icons, ensure that you use Bootstrap v3.1.0 or later

            /* feedbackIcons: {

                valid: 'glyphicon glyphicon-ok',

                invalid: 'glyphicon glyphicon-remove',

                validating: 'glyphicon glyphicon-refresh'

            }, */

			framework: 'bootstrap',

            excluded: ':disabled',

            fields: {

                from_date: {

                    validators: {

                        notEmpty: {

                            message: '<?php echo get_languageword('from_date_required');?>'

                        }

                    }

                },

                to_date: {

                    validators: {

                        notEmpty: {

                            message: '<?php echo get_languageword('to_date_required');?>'

                        }

                    }

                }
                

                

            },

			 submit: function(validator, form, submitButton) {

				form.submit();

			}

        })

    });

	





function get_items(menu_id)

{

	$("#item_id").empty();

	$("#item_id").trigger('liszt:updated');

	if(menu_id > 0)

	{

		$.ajax({			 

			 type: 'POST',			  

			 async: false,

			 cache: false,	

			 url: "<?php echo base_url();?>offers/get_items2",

			 data: '<?php echo $this->security->get_csrf_token_name();?>=<?php echo $this->security->get_csrf_hash();?>&menu_id='+menu_id,

			 success: function(data) 

			 {

				if(data != '' && data != 0)

				{

					$('#item_id').empty();

					$('#item_id').append(data);

				}

				else if(data==999)

				{

					window.location = '<?php echo SITEURL;?>';

				} 

				<?php if(isset($_POST['item_wise_reports'])) {?>

				var item_id = '<?php echo $_POST['item_id'];?>';

				$("#item_id").val(item_id);

				<?php } ?>

				$("#item_id").trigger("liszt:updated");

			 }		  		

		});

	}

}	



$(document).ready(function(){

	<?php if(isset($_POST['item_wise_reports'])) {?>

	var menu_id = $("#menu_id option:selected").val();

	get_items(menu_id);

	<?php } ?>

});	

</script>

<?php } ?>