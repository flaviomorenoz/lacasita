<!--Check Out Page Section-->
<div class="container pt-8 pb-8">
	<div class="row">
	<?php echo $this->session->flashdata('message'); ?>
	
	<?php echo form_open('',array('name'=>'cart-form','id'=>'cart-form'));?>
		<div class="col-sm-9">
			<div class="cs-card cart-card mt-2 card-show">
      			<div class="card-header bordered clearfix">
      				<span class="badge" style="background: transparent; border:1px solid #bdbaba; color: #666666">1</span> 
      				Datos del Comprador
      			</div>
      			<div class="cs-card-content card-items-list address-y-flow clearfix">
      				<div class="row">
      				   <div class="col-md-12">
      					<div class="form-group">
      						<!--<label>Nombres y Apellidos</label>-->
      						<input type="text" class="form-control" id="customer_name" name="customer_name" placeholder="Nombres y Apellidos" required>
      					</div>
      					<div class="form-group">
      						<!--<label>Teléfono</label>-->
      						<input type="text" class="form-control" id="phone" name="phone" placeholder="Teléfono o Celular" required>
      					</div>
      					<div class="form-group">
      						<!--<label>Correo</label>-->
      						<input type="text" class="form-control" id="email"  name="email" placeholder="Correo" required>
      					</div>
      				   </div>
      				</div>
      			</div>
      		</div>
      		<!-- direccion -->
			<div class="cs-card cart-card mt-2 card-show">
      			<div class="card-header bordered clearfix">
      				<span class="badge" style="background: transparent; border:1px solid #bdbaba; color: #666666">2</span> 
      				<?php echo get_languageword('delivery_details');?> 
      			</div>
      			<div class="cs-card-content card-items-list clearfix">
      				
      				<div class="row">
      				    <div class="col-md-12">
      					<div class="form-group">
      						<?php 
					 			$cities = $this->base_model->get_cities();
					 			$val=array();
					 			echo form_dropdown('city_id',$cities,$val,'class="form-control form-control-lg chzn-select" placeholder="city" id="city_id" required="required" onchange="get_city();get_localities()"');	
					 		?>
      					</div>
      					<div class="form-group">
							<?php 
								$val=array();
								echo form_dropdown('locality','',$val,'class="form-control form-control-lg chzn-select" placeholder="locality" id="locality" required="required" onchange="get_locality();get_pincode2()"');
							?>  
                    	</div>

                    	<div class="form-group" style="display: none">
						<?php 
						$element = array('type'=>'text',
										'name'=>'city_name',
										'id'=>'city_name',
										'readonly'=>true,
										'class'=>'form-control form-control-lg',
										'placeholder'=>get_languageword('city_name'),
										);
							
						echo form_input($element);
						?>  
	                    </div>

	                    <div class="form-group" style="display: none">
						<?php 
						$element = array('type'=>'text',
										'name'=>'locality_name',
										'id'=>'locality_name',
										'readonly'=>true,
										'class'=>'form-control form-control-lg',
										'placeholder'=>get_languageword('locality_name')
										);
							
						echo form_input($element);
						?>  
	                    </div>

                    	<div class="form-group" style="display: none">
						<?php 
						$element = array('type'=>'text',
										'name'=>'pincode',
										'id'=>'pincode',
										'readonly'=>true,
										'class'=>'form-control form-control-lg',
										'placeholder'=>get_languageword('pincode')
										);
							
						echo form_input($element);
						?>  
	                    </div>
	                    <div class="form-group" style="display: none">
						<?php 
						$element = array('type'=>'text',
										'name'=>'delivery_fee',
										'id'=>'delivery_fee',
										'readonly'=>true,
										'class'=>'form-control form-control-lg',
										'placeholder'=>get_languageword('delivery_fee')
										);
							
						echo form_input($element);
						?>  
	                    </div>
	                    <div class="form-group" style="display: none">
						<?php 
						$element = array('type'=>'text',
										'name'=>'delivery_from_time',
										'id'=>'delivery_from_time',
										'readonly'=>true,
										'class'=>'form-control form-control-lg',
										'placeholder'=>get_languageword('delivery_from_time')
										);
							
						echo form_input($element);
						?>  
	                    </div>
	                    <div class="form-group" style="display: none">
						<?php 
						$element = array('type'=>'text',
										'name'=>'delivery_to_time',
										'id'=>'delivery_to_time',
										'readonly'=>true,
										'class'=>'form-control form-control-lg',
										'placeholder'=>get_languageword('delivery_to_time')
										);
							
						echo form_input($element);
						?>  
	                    </div>
	                    <div class="form-group" style="display: none">
						<?php 
						$element = array('type'=>'text',
										'name'=>'delivery_time_units',
										'id'=>'delivery_time_units',
										'readonly'=>true,
										'class'=>'form-control form-control-lg',
										'placeholder'=>get_languageword('delivery_time_units')
										);
							
						echo form_input($element);
						?>  
	                    </div>
						<div class="form-group" >
						<?php 
						$element = array('type'=>'text',
										'name'=>'street',
										'id'=>'street',
										'class'=>'form-control form-control-lg',
										'placeholder'=>get_languageword('street') ,
										'required'=>'required'
										);
							
						echo form_input($element);
						?>  
	                    </div>
	                    <div class="form-group">
						<?php 
						$element = array('type'=>'text',
										'name'=>'house_no',
										'id'=>'house_no',
										'class'=>'form-control form-control-lg',
										'placeholder'=>get_languageword('house_no'),
										'required'=>'required'
										);
							
						echo form_input($element);
						?>  
	                    </div>
						<div class="form-group">
						<?php 
						$element = array('type'=>'text',
										'name'=>'landmark',
										'id'=>'landmark',
										'class'=>'form-control form-control-lg',
										'placeholder'=>get_languageword('landmark'),
										'required'=>'required'
										);
							
						echo form_input($element);
						?>  
	                    </div>
                      </div>
      				</div>
      			</div>
      		</div>
			
			
			<!--POINTS-->
			<?php 
			$pay_no=3;
			if(isset($redeem_points) && !empty($redeem_points)) {
			$pay_no=4;
			$redm_sentnc='';
			
			$redeem_points = explode("=",$redeem_points);
			if(!empty($redeem_points)) {
				$redm_sentnc .= get_languageword('would_you_like_to_redeem_your_earned_points?');
				
				$redm_sentnc .= '<br>';
				$redm_sentnc .= get_languageword('you_have_').$redeem_points[1].' '.get_languageword('points');
			
				if($redeem_points[1] > $redeem_points[2]) {
					
					$redm_sentnc .= ',';
					$redm_sentnc .= get_languageword('you_can_redeem_maximum_of_').$redeem_points[2].' '.get_languageword('points');
				}
			}
				
			?>
			<div class="cs-card cart-card mt-2 payment-card-hide">
      			<div class="card-header bordered">
      				<span class="badge" style="background: transparent; border:1px solid #bdbaba; color: #666666">3</span>
      				<?php echo get_languageword('redeem_points');?>
      			</div>
      			<div class="cs-card-content card-items-list">
      				<div class="row">
					<div class="col-lg-6 col-md-7 col-sm-12">
                        <div class="pb-delivery-address pb-radeem-points">
                            <div class="address">
                               
                            <div class="points-radeem"> <i class="pe pe-7s-wallet"></i> <b><?php echo $redeem_points[2];?> <?php echo get_languageword('points');?> </b> </div>
                            <div class="points-radeem-text"> <?php echo $redm_sentnc;?>  </div>
							
                            </div>
                            <input id="user_points" class="pb-radio-custom pb-radio-address" name="user_redeem_points" type="checkbox" value="<?php echo $redeem_points[0];?>" onclick="check_points();">
							
                            <label for="user_points" class="pb-radio-custom-label pb-radio-address-label"> <?php echo get_languageword('redeem');?> </label>
                        </div>
                    </div>
                    
					</div>
      			</div>
      		</div>
			<?php } ?>
			<!--POINTS-->
			
			
      		<!--Payment-->
      		<div class="cs-card cart-card mt-2 payment-card-hide">
      			<div class="card-header bordered">
      				<span class="badge" style="background: transparent; border:1px solid #bdbaba; color: #666666"><?php echo $pay_no;?></span>
      				<?php echo get_languageword('payment');?></div>
      			<div class="cs-card-content card-items-list">
      				<div class="row">
        				<?php 
        				 $admn_prvd_paymnts = $this->config->item('site_settings')->payment_methods;
        				 
        				 if($admn_prvd_paymnts != '')
        				 $admn_prvd_paymnts = explode(',',$admn_prvd_paymnts);
        				 ?>	
				
				        <?php if(count($admn_prvd_paymnts) > 0) {?>
				  
    				   <?php if(in_array('online',$admn_prvd_paymnts) && !empty($this->config->item('paypal_settings'))) {?>
    				   
    				    <!--<div class="col-md-5 col-sm-12" onclick="show_cards()">-->
            <!--                <div class="pb-radio-netbanking">-->
            <!--                    <input id="online" class="pb-radiobox-popular pb-radio-address" name="payment_type" type="radio" value="online">-->
            <!--                    <label for="online" class="pb-radiobox-popular-label pb-radio-address-label"> &nbsp; <img style="display: initial !important" src="<?php echo FRONT_IMAGES;?>p-paypal.png" alt="Paypal" class="pb-netbanking-icons" title="Paypal"></label>-->
            <!--                </div>-->
            <!--            </div>-->
    				   <?php } if(in_array('cash_on_delivery',$admn_prvd_paymnts) && !empty($card_types)) {?>
				   </div>
				   <!-- <div class="row"> -->
				   <!-- <div class="col-md-5 col-sm-12" onclick="show_cards()"> -->
                        <!-- <div class="pb-radio-netbanking"> -->
                            <!-- <input id="cash" class="pb-radiobox-popular pb-radio-address" name="payment_type" type="radio" value="cash"> -->
                            <!-- <label for="cash" class="pb-radiobox-popular-label pb-radio-address-label"> &nbsp; <?php //echo get_languageword('cash_on_delivery');?> </label> -->
                        <!-- </div> -->
                    <!-- </div> -->
				   
				   <?php } if(in_array('card_on_delivery',$admn_prvd_paymnts) && !empty($card_types)) {?>
				   
				   <!-- </div> -->
				   <div class="row">
    				    <div class="col-md-5 col-sm-12">
                            <div class="pb-radio-netbanking" onclick="show_cards();">
                                <input id="cashCard" class="pb-radiobox-popular pb-radio-address" name="payment_type" type="radio" value="cashCard">
                                <label for="cashCard" class="pb-radiobox-popular-label pb-radio-address-label"> &nbsp; <?php echo get_languageword('card_on_delivery');?> </label>
                            </div>
        					 <?php if(!empty($card_types)) { ?>
        						<li class="dm-noborder dm-itemcards" style="display:none;">
        							<?php foreach ($card_types as $key => $value) { ?>
        							<div class="dm-cardtype">
        								<label>
        									<input type="radio" name="payment_card" onclick="getmontosolicitado('<?php echo $value->alt_text;?>')" value="<?php echo $value->alt_text;?>" id="<?php echo $value->card_image_id;?>"  /> <?php echo $value->alt_text ?>
        									<?php
        									$img_src = "";
        									if(!empty($value->image_name) && file_exists(CARD_IMG_UPLOAD_PATH_URL.$value->image_name)) {
        										$img_src = CARD_IMG_PATH.$value->image_name;
        									}
        									?>
        									<img class="pb-netbanking-icons" src="<?php echo $img_src;?>" alt="<?php echo $value->alt_text; ?>">
        								</label>
        							</div>
        							<?php } ?>
        							<p><i style="margin: 0 auto">
        						        Indicar si pagara con efectivo o alguna de las tarjetas mostradas para el envío del POS.
        						    </i></p>
        						</li>
        					<?php } ?>
    					</div>
    					<div class="col-md-5 col-sm-12" style="display: none" id="monto_apagar">
        					<div class="cs-card-content">
                      			<ul class="list-left-right cart-total-details">
                      				<li class="clearfix">
                      					<div class="list-left">Monto de cantidad a pagar</div>
                      					<div class="list-right">
                      					    <input type="number" name="payable_amount" class="form-control" min="0">
                      					</div>
                      				</li>
                      			</ul>
                      		</div>
                  		</div>
				   <?php } ?>
				    <?php }  else echo '<h4>'.get_languageword('no_payment_methods_available').'</h4>';?>
                    <div class="clearfix"></div>
      			</div>
      	    </div>
      	</div>
	</div>
		
		<!--CART SUMMARY DIV-->
		<div class="col-sm-3" id="item-sidebar">
      	    <div class="cs-card card-y-auto cart-card ml-lg-2 item-sidebar" >
      	    <div class="card-header bordered"><?php echo get_languageword('your_cart');?></div>
    		    <div id="cart-divs">
			<div>
      		<div class="cs-card-content card-items-list">
			
			<?php 
			$total_pay=0;
			$currency_symbol = $this->config->item('site_settings')->currency_symbol;
			$cart_total=0;
			 
			if (!empty($this->cart->contents())) { ?>
			
      			<ul class="list-left-right">
				
				<?php foreach ($this->cart->contents() as $items) { 
				
				$cart_total += $items['subtotal'];
				if (isset($items['options']['extra_costs_total'])) {
					$cart_total += $items['options']['extra_costs_total'];
				}
				?>
      				<li class="clearfix">
      					<div class="list-left">
      						<div class="cart-item-title"><?php echo $items['name'];?></div>
							<?php if ($items['options']['description'] != '-'): ?>
      							<p style="font-size: 12px;line-height: 1.5rem;font-style: italic;">
      								<?php echo $items['options']['description'];?>		
      							</p>
      						<?php endif ?>
							<?php 
							if ((isset($items['options']['addons_cost_per_item']) || isset($items['options']['item_option_name'])) && $items['options']['is_offer'] == 0) { ?>
							
      						<div class="cart-item-cutomize mt-08">
							<a href="javascript:void(0);" class="btn-cutomize" onclick="get_item_popup('<?php echo $items['id'];?>')"><?php echo get_languageword('view');?></a>
							</div>
							
							<?php } else if ($items['options']['is_offer'] == 1) { ?>
							
							<div class="cart-item-cutomize mt-08">
							<a href="javascript:void(0);" onclick="get_offer_popup('<?php echo $items['id'];?>','cart')" class="btn-cutomize"><?php echo get_languageword('view');?></a>
							</div>
							<?php } ?>
      					</div>
						
						<?php 
						$itm_total=$items['subtotal'];
						if (isset($items['options']['extra_costs_total'])) 
							$itm_total += $items['options']['extra_costs_total'];
						
						?>
      					<div class="list-right">
      						<div class="card-item-price"><?php echo $currency_symbol;?><span><?php echo number_format($itm_total,2);?></span></div>
      						<div class="card-item-actions mt-08">
      							<span><?php echo $items['qty'];?></span>
      						</div>
      					</div>
      				</li>
	
              <!--li class="clearfix">
                <div class="list-left">
                  <div class="cart-item-title">Veg Burger</div>
                  <div class="cart-item-cutomize"></div>
                </div>
                <div class="list-right">
                  <div class="card-item-price">$25</div>
                  <div class="card-item-actions">
                    <i class="pe-7s-less"></i><span>1</span><i class="pe-7s-plus"></i>
                  </div>
                </div>
              </li-->
			  
				<?php } ?>
      			</ul>
			<?php } ?>
      		</div>
			
			<?php 
			
			$deliverfee=0;
			if (isset($delivery_fee) && $delivery_fee>0)
				$deliverfee = $delivery_fee;
				
			$no_ofpoints=0;
			if (isset($no_of_points) && $no_of_points>0)
				$no_ofpoints=$no_of_points;
			
			$points_dscnt=0;
			if (isset($points_discount) && $points_discount>0)
				$points_dscnt=$points_discount;
			
			$total_pay = $cart_total+$deliverfee-$points_dscnt;
			?>
		
      		<div class="cs-card-content">
      			<ul class="list-left-right cart-total-details">
      				<li class="clearfix">
      					<div class="list-left">Total de artículos</div>
      					<div class="list-right"><?php echo $currency_symbol;?><?php echo number_format($cart_total,2);?></div>
      				</li>
      				
      				<li class="clearfix">
      					<div class="list-left">Costo de envío</div>
      					<div class="list-right"><p id="delivery_fee2"></p> </div>
      					<input type="hidden" id="total_cost2" value="<?php echo number_format($total_pay,2);?>"  >

      				</li>
					
					<?php if (isset($no_of_points) && $no_of_points>0) { ?>
					<li class="clearfix">
      					<div class="list-left">Nº.de Puntos</div>
      					<div class="list-right"><?php echo $no_ofpoints;?></div>
      				</li>
					
					<li class="clearfix">
      					<div class="list-left">Descuento de Puntos</div>
      					<div class="list-right"><?php echo $currency_symbol;?><?php echo $points_dscnt;?> </div>
      				</li>
					
					<input type="hidden" name="no_of_redeemed_points" value="<?php echo $no_ofpoints;?>">
					<?php } ?>
      			</ul>
				
      			<ul class="list-left-right">
      				<li class="clearfix">
      					<div class="list-left">
      						<strong class="text-success" id="" ><?php echo get_languageword('total');?></strong>
      					</div>
      					<div class="list-right">
      						<strong class="text-success" id="total_show1">
      						<?php echo $currency_symbol;?><?php echo number_format($total_pay,2);?></strong>
      						<strong class="text-success" id="total_show2" style="display: none">
      							<p style="color: #3c763d; font-weight: bold; font-size: 16px" id="total_cost3"></p>
      						</strong>
      					</div>
      				</li>
      			</ul>
				
      		</div>
			
			</div>
    		    </div>
		        <button type="submit" name="submit_type" value="save_order" class="btn btn-primary btn-block btn-checkout" id="book_order" > <?php echo get_languageword('continue');?> </button>
		    </div>
       </div>
		<!--CART SUMMARY DIV-->
	  <?php echo form_close();?>
	</div>
	<div class="clearfix"></div>
</div>


<script>
// A $( document ).ready() block.
$( document ).ready(function() {
	
	<?php if (!empty($this->cart->contents())) {?>
		/*load_cart_summary_div();*/
	<?php } ?>

});

    function getmontosolicitado(value){
        if (value == "Efectivo" || value == "efectivo" ){
           $("#monto_apagar").show(); 
        }else{
             $("#monto_apagar").hide();
        }
	}
</script>


<script type="text/javascript">
function get_locality(){
	let name = $('#locality option:selected').text();
	$("#locality_name").val(name);
}
function get_city(){
	let name = $('#city_id option:selected').text();
	$("#city_name").val(name);
}


$('#book_order').click(function() {
    //Validacion de datos del comprador
	var nombres = $("#customer_name").val().trim();
    var celular = $("#phone").val().trim();
    var correo =$("#email").val().trim();
    if(nombres.length == '' || celular.length == '' || correo.length == '')
	{
		checkNotify('CART','<?php echo "Por favor, proporcione sus datos personales" ?>','error');
		return false;
	}
	
	// Validacion de detalles de la entrega
	var ciudad = $("#city_id").val().trim();
    var localidad = $("#locality").val().trim();
    var direccion =$("#street").val().trim();
    var numero =$("#house_no").val().trim();
    var puntoref =$("#landmark").val().trim();
    if(ciudad.length == '' || localidad.length == '' || direccion.length == '' || numero.length == '' || puntoref.length == '')
	{
		checkNotify('CART','<?php echo "Por favor, proporcione una dirección de entrega" ?>','error');
		return false;
	}
	
	// Validacion de medio de pago
	var pymnt_option = $("input[name='payment_type']").is(":checked");
	if(pymnt_option==false)
	{
		checkNotify('CART','<?php echo "Por favor, seleccione un método de pago" ?>','error');
		return false;
	}
});


// Cards
function show_cards()
{
	var payment_type = $("input[name='payment_type']:checked").val();
	
	if (payment_type=='cashCard') {
		$(".dm-itemcards").show();
	} else {
		$(".dm-itemcards").hide();
	}
}

</script> 
<script type="text/javascript">
	//Radio selects on "div" click
    $(".pb-delivery-address").on('click', function () {
        $('input[type=radio]', this).prop("checked", true);
    });
    $(".btn-nxt-step").on('click',function(){
    	$('.card-show').removeClass("card-show").addClass("card-hide");
    	$('.payment-card-hide').removeClass("card-hide").addClass("card-show");
    });
</script>