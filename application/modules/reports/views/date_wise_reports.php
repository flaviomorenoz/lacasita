<div id="page-wrapper">
	<div class="row">
		<div class="col-md-12">
			<?php echo $this->session->flashdata('message'); ?>
			<div class="panel panel-default">
                <div class="panel-heading">
                    <?php if(!empty($pagetitle)) echo $pagetitle;?>
                </div>
				<div class="panel-body">
					<div class="row"> 
                		<div class="col-md-12 reports cleafix">
                		<?php 
                		$attributes = array('name'=>'report_form','id'=>'report_form');
                		echo form_open(URL_REPORTS_INDEX,$attributes);?>
							<div class="form-group col-md-2">
								<label>
								<?php echo get_languageword('from_date').required_symbol();?></label>
								<?php 
									$val=''; 
									if(isset($_POST['datewise_reports'])) { $val=$_POST['from_date']; }
									$element = array('name'=>'from_date',
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

				if(isset($_POST['to_date']))

				{

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
						echo form_dropdown('customer_name', $customers, $val, 'class="form-control chzn-select"');
					?>
				</div>
				
				<div class="form-group col-md-2">
					<label><?php echo get_languageword('store');?></label>
					<?php 
						$val='';
						if(isset($_POST['alias'])){
							$val=$_POST['alias'];
						}
						echo form_dropdown('alias', $stores, $val, 'class="form-control chzn-select"');
					?>
				</div>
				
				<div class="form-group col-md-2">

					<button type="submit" name="datewise_reports" value="datewise_reports" class="btn btn-primary btn-lg">
						<?php echo get_languageword('submit');?>
					</button>

				</div>

				<?php if(isset($_POST['datewise_reports']) && isset($total_pedido)) {?>

				<div class="form-group col-md-3">

					<div class="order-summary">
					
					<strong><?php echo 'Total costo de pedido: '.$this->config->item('site_settings')->currency_symbol.$total_pedido;?></strong>
					
					</div>

				</div>

				<?php } ?>

				<?php if(isset($_POST['datewise_reports']) && isset($total_payable_amount)) {?>

				<div class="form-group col-md-3">

					<div class="order-summary">
					
						<strong><?php echo 'Total costo de envío: '.$this->config->item('site_settings')->currency_symbol.$total_payable_amount;?></strong>
					
					</div>

				</div>

				<?php } ?>

				<?php if(isset($_POST['datewise_reports']) && isset($total_cost)) {?>

				<div class="form-group col-md-3">

					<div class="order-summary">
					
						<strong>
							<?php echo 'Costo Total: '.$this->config->item('site_settings')->currency_symbol.$total_cost;?>
						</strong>
					
					</div>

				</div>

				<?php } ?>

				<?php echo form_close();?>

			</div>
			<div>
				<?php
					//echo "customer_name:" . $customer_name . "<br>"; 
					//echo "alias:" . $alias . "<br>";
					//echo $mi_query;
				?>
			</div>
		</div>
						<!---->

        <div class="table-responsive">

			<table id="example" class="display responsive nowrap" width="100%" cellspacing="0" style="font-size:12px;">

			  	<thead>

					<tr>

						<th>Item</th>
						<th>Nº Pedido</th>
						<th>Estado</th>
						<th><?php echo get_languageword('customer_name');?></th>
						<th><?php echo get_languageword('phone');?></th>
						<th><?php echo get_languageword('no_of_items');?></th>
						<th><?php echo get_languageword('order_cost');?></th>
						<th>Costo de envío</th>
						<th>Costo Total</th>

						<th><?php echo get_languageword('booked_date');?></th>
						<th><?php echo get_languageword('payment');?></th>
						<!--<th><?php echo get_languageword('paid_amount');?></th>-->
						<th><?php echo get_languageword('service_location');?></th>
						<th>Detalle</th>
					</tr>

				</thead>

				<?php if(isset($records) && !empty($records)) {?>

				<tbody>

				<?php 

				$i=0;

				foreach($records as $r):

				$i++;?>

				<tr>
				<td><?php echo $i; ?></td>
				<td><?php echo $r->order_id;?></td>
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
				<td><?php echo $order_status;?></td>
				<td><?php echo $r->customer_name;?></td>
				<td><?php echo $r->phone;?></td>
				<td><?php echo $r->no_of_items;?></td>
				<td><?php echo $r->total_cost - $r->delivery_fee;?></td>
				<td><?php echo $r->delivery_fee; ?></td>
				<td><?php echo $currency.($r->total_cost);?></td>

				<td><?php if(isset($r->order_date)) echo get_date($r->order_date).' - '.$r->order_time;?></td>
				<?php 
					$paymen_cart_pay='';
					if ($r->payment_card == '') {
						$paymen_cart_pay = 'Online';
					}else{
						$paymen_cart_pay = $r->payment_card;
					}
				?>
				<td><?php echo $paymen_cart_pay; ?></td>

				<!--<td><?php echo $r->paid_amount;?></td>-->

				<td><?php echo $r->alias; ?></td>

				<td>
					<button onclick="showModal('<?php echo site_url('reports/view_order/details_reports/'.$r->order_id.'/'.$r->status); ?>');" class="btn btn-primary pull-right btn-icon icon-right" >
						<i class="<?php echo CLASS_ICON_VIEW ?>" ></i>
					</button>
				</td>
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

<script type="text/javascript">

    $(document).ready(function (){

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

                },				

            },

			 submitHandler: function(validator, form, submitButton) {

				form.submit();

			}

        })

    });

</script>

<?php } ?>
<?php include 'modal.php'; ?>

