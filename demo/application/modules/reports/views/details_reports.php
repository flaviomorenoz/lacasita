 <?php 
$currency = $this->config->item('site_settings')->currency_symbol;
$count = count($order_products)+count($order_offers);
?>

 <div class="row">
	<div class="col-md-12">
		<div class="row">
			<div class="col-md-6">
				<ul class="table-list ul">
					   
							<li><span><?php echo get_languageword('order_no');?>:</span>
								<?php if(isset($order->order_id)) echo $order->order_id;?>
							</li>
							
							
							<li><span><?php echo get_languageword('order_date');?>:</span>
								<?php if(isset($order->order_date) && $order->order_date != '') echo get_date($order->order_date);?>
							</li>
							
							
							<li><span><?php echo get_languageword('order_time');?>:</span> 
							<?php if(isset($order->order_time) && $order->order_time != '') 
								if (str_replace('PM', '', $order->order_time)) {
								echo date("h:i A", strtotime( str_replace('PM', '', $order->order_time)));
								}else {
								echo date("h:i A", strtotime( str_replace('AM', '', $order->order_time)));
								}
							?></li>
							
							
							<li><span><?php echo get_languageword('delivery_cost');?>:</span>
								<?php if(isset($order->delivery_fee)) echo $currency.$order->delivery_fee;?>
							</li>
							
							
							<li><span><?php echo get_languageword('order_cost');?>:</span>
								<?php if(isset($order->total_cost)) echo $currency.($order->total_cost - $order->delivery_fee);?>
							</li>
							
							<li><span>Costo de Total:</span><?php if(isset($order->total_cost)) echo $currency.($order->total_cost);?></li>

							<?php if ( $order->payable_amount > 0) {?>
								<li><span>Monto Enviado:</span><?php echo $currency.($order->payable_amount); ?></li>
								<li><span>Vuelto:</span><?php echo $currency.($order->payable_amount - $order->total_cost); ?></li>
							<?php } ?>
							

							<li><span><?php echo get_languageword('paid_amount');?>:</span><?php if(isset($order->paid_amount)) echo $currency.$order->paid_amount;?></li>
							
							
							
							
							
							<!-- <li><span><?php //echo get_languageword('is_points_redeemed');?>:</span><?php //if(isset($order->is_points_redeemed)) echo $order->is_points_redeemed;?></li> -->
							

						<?php if($order->is_points_redeemed=='Yes') {?>
						
						<li><span><?php echo get_languageword('no_of_points_redeemed');?>:</span>
							<?php if(isset($order->no_of_points_redeemed)) echo $order->no_of_points_redeemed;?>
						</li>
						
						
						<li><span><?php echo get_languageword('points_value');?>:</span>
							<?php if(isset($order->points_value)) echo $currency.$order->points_value;?>
						</li>
						
						<?php }?>
			 				
							
						<li><span><?php echo get_languageword('booked_date');?>:</span>
							<?php if(isset($order->date_created)) echo date("d/m/Y h:i A", strtotime($order->date_created)) ;?>
						</li>
							
							
							
						<li><span><?php echo get_languageword('status');?>:</span>
							<?php if(isset($order->status)) 

								$order_status = '';
				          		if ($order->status=="delivered"){
				          			$order_status = 'Entregado';
				          		}elseif ($order->status == "process") {
				          			$order_status = 'En Proceso';
				          		}elseif ($order->status == 'cancelled') {
				          			$order_status = 'Cancelado';
				          		}elseif ($order->status == "new") {
				          			$order_status = 'Nuevo';
				          		}elseif ($order->status == "out_to_deliver") {
				          			$order_status = 'En Camino';
				          		} 
				          		echo $order_status;
							?></li>
						
						
						
						 </ul>
								 
                           
						
                      </div>
					  
					  
							
							
						<div class="col-md-6">
						
						<ul class="table-list ul">
						 
						<li><span><?php echo get_languageword('customer_name');?>:</span>
							<?php if(isset($order->customer_name)) echo $order->customer_name;?>
						</li>
						
						
						
						<li><span><?php echo get_languageword('phone');?>:</span>
							<?php if(isset($order->phone)) echo $order->phone;?>
						</li>

						
						
						<li><span><?php echo get_languageword('house_number');?>:</span>
							<?php if(isset($order->house_no)) echo $order->house_no;?>
						</li>
						
						
						<li><span><?php echo get_languageword('street');?>:</span>
							<?php if(isset($order->street)) echo $order->street;?>
						</li>
						
						
						
						
						<li><span><?php echo get_languageword('landmark');?>:</span>
							<?php if(isset($order->landmark)) echo $order->landmark;?>
						</li>
						
						
						
						<li><span><?php echo get_languageword('locality');?>:</span>
							<?php if(isset($order->locality)) echo $order->locality;?>
						</li>
						
						
						<li><span><?php echo get_languageword('city');?>:</span> 
							<?php if(isset($order->city)) echo $order->city;?>
						</li>
						
						
						<li><span><?php echo get_languageword('zipcode');?>:</span> 
							<?php if(isset($order->pincode)) echo $order->pincode;?>
						</li>
						
						
						<?php if($order->is_admin_sent_to_km=='Yes') {?>
						
						<li><span><?php echo get_languageword('kitchen_manager');?>:</span> <?php if(isset($order->kitchen_manager)) echo $order->kitchen_manager;?></li>
						
						<?php } ?>
						
						
						<?php if($order->dm_id > 0) {?>
					   
						<li><span><?php echo get_languageword('delivery_manager');?>:</span> <?php if(isset($order->delivery_manager)) echo $order->delivery_manager;?></li>	
						
						<?php } ?>
						
						
						
						 </ul>
						</div> 	
					</div>
						
						
						<!--ORDER ITEMS-->
						<h3><?php echo get_languageword('order_items');?></h3>
						
						
						<div class="table-responsive table1">
					<table cellspacing="10" width="100%" id="example" class="display responsive nowrap" border="1">
					<thead>
					<tr>
						<th>Item</th>
						<!-- <th>Nº Pedido</th> -->
						<!-- <th>Estado</th> -->
						<!-- <th>Nombre del cliente</th> -->
						<th><?php echo get_languageword('item_name');?></th>
						<th><?php echo get_languageword('option');?></th>
						<th><?php echo get_languageword('item_cost');?></th>
						<th><?php echo get_languageword('item_quantity');?></th>
						<th><?php echo get_languageword('total_cost');?></th>
					</tr>
					</thead>
					
					<?php if(isset($order_products) && !empty($order_products)) { ?>
					<tbody>
					<?php 
						$i=0;
						foreach($order_products as $product):
						$i++;?>
					<tr>
						<td><?php echo $i;?></td>
						<td><?php echo $product->item_name;?></td>
						<td><?php echo $product->size_name;?></td>
						<td><?php echo $currency.$product->item_cost;?></td>
						<td><?php echo $product->item_qty;?></td>
						<td><?php echo $currency.$product->final_cost;?></td>
					</tr>
					<?php endforeach; ?>
					</tbody>
					<?php } ?>	
					</table>
				</div>
						<!--ORDER ITEMS-->
						
						
						
						
						
						
						
						
				<?php if(isset($order_addons) && !empty($order_addons)) { ?>
						<!--ORDER ADDONS-->
						<h3><?php echo get_languageword('order_addons');?></h3>
						
						<div class="table-responsive table1">
					<table cellspacing="10" width="100%" id="example" class="display responsive nowrap" border="1">
					<thead>
					<tr>
						<th>#</th>
						<th><?php echo get_languageword('item_name');?></th>
						<th><?php echo get_languageword('item_cost');?></th>
						<th><?php echo get_languageword('item_quantity');?></th>
						<th><?php echo get_languageword('total_cost');?></th>
					</tr>
					</thead>
					
					<?php if(isset($order_addons) && !empty($order_addons)) { ?>
					<tbody>
					<?php 
						$i=0;
						foreach($order_addons as $addon):
						$i++;?>
					<tr>
						<td><?php echo $i;?></td>
						<td><?php echo $addon->addon_name;?></td>
						<td><?php echo $currency.$addon->price;?></td>
						<td><?php echo $addon->quantity;?></td>
						<td><?php echo $currency.$addon->final_cost;?></td>						
					</tr>
					<?php endforeach; ?>
					</tbody>
					<?php } ?>	
					</table>
				</div>
						<!--ORDER ADDONS-->					<?php } ?>
						
						
				<?php if(isset($order_offers) && !empty($order_offers)) { ?>
						<h3><?php echo get_languageword('order_offers');?></h3>
						<div class="table-responsive table1">
					<table cellspacing="10" width="100%" id="example1" class="display responsive nowrap" border="1">
					<thead>
					<tr>
						<th>#</th>
						<th><?php echo get_languageword('offer_name');?></th>
						<th><?php echo get_languageword('offer_cost');?></th>
						<th><?php echo get_languageword('offer_quantity');?></th>
						<th><?php echo get_languageword('total_cost');?></th>
						<th><?php echo get_languageword('no_of_products');?></th>
					</tr>
					</thead>
					
					<?php if(isset($order_offers) && !empty($order_offers)) { ?>
					<tbody>
					<?php 
						$i=0;
						foreach($order_offers as $offer):
						$i++;?>
					<tr>
						<td><?php echo $i;?></td>
						<td><?php echo $offer->offer_name;?></td>
						<td><?php echo $currency.$offer->offer_cost;?></td>
						<td><?php echo $offer->offer_quantity;?></td>
						<td><?php echo $currency.$offer->offer_final_cost;?></td>
						<td><?php echo $offer->no_of_products;?></td>						
					</tr>
					<?php endforeach; ?>
					</tbody>
					<?php } ?>	
					</table>
				</div>						<?php } ?>
						<!--ORDER OFFERS-->

            </div>
    </div>


<script type="text/javascript">
	// $('#example1').DataTable();
</script>
