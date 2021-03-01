
			<div>
			<?php 
			$this->load->library(array('session','cart'));
		
			$currency_symbol = $this->config->item('site_settings')->currency_symbol;
			$cart_total=0;
			 
			if (count($this->cart->contents())>0) { ?>
			
      		<div class="cs-card-content card-items-list">
			
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
							<a href="javascript:void(0);" class="btn-cutomize" href="javascript:void(0);" onclick="get_cart_itm_adns_options('<?php echo $items['id'];?>')"><?php echo get_languageword('customize');?></a>
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
      							<i class="pe-7s-less" onclick="update_qty('<?php echo $items['rowid'];?>','decr')"></i><span><?php echo $items['qty'];?></span><i class="pe-7s-plus" onclick="update_qty('<?php echo $items['rowid'];?>','incr')"></i>
      						</div>
							
      					</div>
      				</li>
					
			  
				<?php } ?>
			  
			  
      			</ul>
				
			
				
      		</div>
			
      		<div class="cs-card-content">
      			<ul class="list-left-right cart-total-details">
      				<li class="clearfix">
      					<div class="list-left"><strong class="text-success" style="font-size:16px"><?php echo get_languageword('total');?></strong></div>
      					<div class="list-right"><strong class="text-success" style="font-size:16px"><?php echo $currency_symbol;?><?php echo number_format($cart_total,2);?></strong></div>
      				</li>
					
      				
      			</ul>
				
      		</div>
			
			<?php } else { ?>
			<div class="p-20"><h5><?php echo get_languageword('no_items_in_your_cart');?></h5></div>
			<?php } ?>
			
			</div>
			
      		