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
						<div class="col-md-12 reports clearfix">
			<?php
				$attributes = array('name'=>'report_form','id'=>'report_form');
				echo form_open(URL_REPORTS_CLIENT_WISE,$attributes);?>
               
				<div class="form-group col-md-3">
					<label><?php echo get_languageword('customer').required_symbol();?></label>
				<?php 
				$val='';
				if(isset($_POST['client_wise_reports'])){
					$val=$_POST['user_id'];
				}
					echo form_dropdown('user_id',$customers,$val,'class="form-control chzn-select"');
				?>
				</div>
				<div class="form-group col-md-3">
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
				<div class="form-group col-md-3">
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
				
				<div class="form-group col-md-3">
				<button type="submit" name="client_wise_reports" value="client_wise_reports" class="btn btn-primary btn-lg">
					<?php echo get_languageword('submit');?>
				</button>
				</div>
				
				<?php if(isset($_POST['client_wise_reports']) && isset($total_profit)) {?>
				<div class="form-group col-md-3">
				
				<div class="order-summary"><strong><?php echo get_languageword('total_amount').' '.$this->config->item('site_settings')->currency_symbol.$total_profit;?></strong>
				</div>
				
				</div>
				<?php } ?>
				<?php echo form_close();?>
				</div>
				
						</div>
						<!---->
						
						
                            <div class="table-responsive">
							
			
			<table id="example" class="display responsive nowrap" width="100%" cellspacing="0">
			  	<thead>
					<tr>
						<th><?php echo get_languageword('s_no');?></th>
						<th>Nº Orden</th>
						<th>Estado</th>
						<th>Nombre de Cliente</th>
						<th><?php echo get_languageword('no_of_items');?></th>
						<th><?php echo get_languageword('order_cost');?></th>
						<th><?php echo get_languageword('booked_date');?></th>
						<th><?php echo get_languageword('payment');?></th>
						<th><?php echo get_languageword('paid_amount');?></th>
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
				<td><?php echo $order_status; ?></td>
				<td><?php echo $r->customer_name; ?></td>
				<td><?php if(isset($r->no_of_items)) echo $r->no_of_items;?></td>
				<td><?php if(isset($r->total_cost)) echo $r->total_cost;?></td>
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
				<td><?php echo $r->paid_amount;?></td>
				<td>
                    <?php echo form_open(URL_VIEW_ORDER) ?>
                    	<input type="hidden" name="order_id" value="<?php echo $r->order_id ?>">
                    	<input type="hidden" name="order_type" value="<?php echo $r->status ?>">
                    	<button type="submit" name="view_order" class="<?php echo CLASS_VIEW_BTN ?>">
                    		<i class="<?php echo CLASS_ICON_VIEW ?>" ></i>
                    	</button>
                   	<?php echo form_close() ?>
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
</script>
<?php } ?>