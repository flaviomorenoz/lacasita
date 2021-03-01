<?php if(isset($order_id)) {?>
<section class="fc-identity fc-bottom fc-menu-wrapper">
		<div class="container">
			<div class="search-wrapper contact-overlay">
				<div class="row">
			<div class="col-md-12 col-sm-12 col-xs-12 text-center">
				<div class="cs-sucess-msg"> <span class="pe pe-7s-like2"></span> <span><?php echo get_languageword('order_successful');?></span></div>
				<img class="img-responsive center-block suc-img" src="<?php echo base_url();?>assets/front/images/success.png" alt="success-page">    
				<h4 class="fc-order-no"><?php echo get_languageword('your_order_no_is');?> : <span><?php if(isset($order_id)) echo $order_id;?></span></h4>
				
				
				<p class="fc-success-text"><?php echo get_languageword('your_order_is_received_we_will_contact_you_soon');?></p>
				<p class="fc-success-text">Revise su correo donde se mando el detalle de la orden</p>
			</div>
		</div>
			</div>
			<div class="mb-2">&nbsp;</div>
		</div>
</section>
<?php } ?>