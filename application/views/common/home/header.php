<!DOCTYPE html>
<html>
<head>
	<meta name="keywords" content="<?php if(isset($this->config->item('seo_settings')->meta_keyword)) echo $this->config->item('seo_settings')->meta_keyword;?>">
	<meta name="description" content="<?php if(isset($this->config->item('seo_settings')->meta_description)) echo $this->config->item('seo_settings')->meta_description;?>">
	
    <link rel="icon" href="<?php echo get_fevicon();?>">

    <title><?php if(isset($this->config->item('site_settings')->site_title)) echo $this->config->item('site_settings')->site_title;?></title>
	<meta charset="UTF-8">
		<link href="<?php echo CSS_FRONT_MAIN;?>" rel="stylesheet">
	<link href="<?php echo CSS_CHOSEN_MIN;?>" rel="stylesheet" />
	
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css" media="all" /> -->
	<!-- <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css" media="all" /> -->
	<!-- <link rel="stylesheet" type="text/css" href="assets/css/animate.min.css" media="all" /> -->
	<link rel="stylesheet" type="text/css" href="assets/css/font-pizzaro.css" media="all" />
	<link rel="stylesheet" type="text/css" href="assets/css/style.css" media="all" />
	<link rel="stylesheet" type="text/css" href="assets/css/colors/red.css" media="all" />
	<!-- <link rel="stylesheet" type="text/css" href="assets/css/colors/orange.css" media="all" /> -->
	<link rel="stylesheet" type="text/css" href="assets/css/jquery.mCustomScrollbar.min.css" media="all" />
	<!-- Demo Purpose Only. Should be removed in production -->
	<link rel="stylesheet" href="assets/css/config.css">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800%7CYanone+Kaffeesatz:200,300,400,700" rel="stylesheet">
	<!-- <script type="text/javascript" src="assets/js/jquery.min.js"></script> -->
   	<!-- PNOTIFY CSS-->
    <link href="<?php echo PNOTIFY_ALL_CSS;?>" rel="stylesheet">
    <script src="<?php echo JS_FRONT_JQUERY_MIN;?>"></script>
</head>
<body class="home-v3 page-template-template-homepage-v3 woocommerce-active">
	<div id="page" class="hfeed site">
		<header id="masthead" class="site-header header-v3 " style="background-image: none; z-index: 1; ">
            <div class="col-full">
               <a class="skip-link screen-reader-text" href="#site-navigation">Skip to navigation</a>
               <a class="skip-link screen-reader-text" href="#content">Skip to content</a>
               <div class="site-branding">
                  <a href="<?php echo site_url(); ?>" class="custom-logo-link" rel="home">
                    <img class="logo-custom" src="<?php echo get_site_logo();?>">
                  </a>
               </div>
               <nav id="site-navigation" class="main-navigation" aria-label="Primary Navigation">
                  <button class="menu-toggle" aria-controls="site-navigation" aria-expanded="false">
                  	<span class="close-icon"><i style="font-size: 2rem;" class="po po-close-delete"></i></span>
                  	<span class="menu-icon"><i style="font-size: 2rem;" class="po po-menu-icon"></i></span>
                  	<span class=" screen-reader-text">Menu</span></button>
                  <div class="primary-navigation">
                     <ul id="menu-home-3-and-4-main-menu" class="menu nav-menu" aria-expanded="false">
                        <li class="menu-item"><a href="<?php echo URL_MENU;?>"><?php echo get_languageword('menu');?></a></li>
                        <li class="menu-item"><a href="<?php echo URL_ABOUT_US;?>"><?php echo get_languageword('about_us');?></a></li>
                        <li class="menu-item"><a href="<?php echo URL_CONTACT_US;?>"><?php echo get_languageword('contact_us');?></a></li>
                     </ul>
                  </div>
                  <div class="handheld-navigation">
						<span class="phm-close">Cerrar</span>
		                <ul  class="menu">
                        	<li class="menu-item"><a href="<?php echo URL_MENU;?>"><?php echo get_languageword('menu');?></a></li>
                        	<li class="menu-item"><a href="<?php echo URL_ABOUT_US;?>"><?php echo get_languageword('about_us');?></a></li>
                        	<li class="menu-item"><a href="<?php echo URL_CONTACT_US;?>"><?php echo get_languageword('contact_us');?></a></li>
		                </ul>
                  </div>
               </nav>
               <ul class="site-header-cart menu">
               		<?php if (!$this->ion_auth->logged_in()): $login_popup='login'; ?> 
                        <li class="mini-cart"><a class="btn btn-outline-primary" href="javascript:void(0);" style="font-weight: 800; color:#fff;" onclick="show_popup('<?php echo $login_popup;?>')"><?php echo get_languageword('login');?></a></li>	  
					<?php else: ?>
						<li class="mini-cart">
		                    <div class="mini-cart-toggle">
		                        <a href="#" class="dropdown-toggle" style="display: flex; align-items: center;color: white; font-weight: 800;" >
		                        	<img style="height: 4rem; width: 4rem; margin-right: 1rem;"  src="<?php echo get_user_image();?>" class="nav-profile-img"><?php echo get_languageword('my_account');?>
		                    	</a>
		                    	<div class="widget woocommerce widget_shopping_cart" style="padding: 0">
                           			<div class="widget_shopping_cart_content">
                              			<ul class="cart_list product_list_widget ">
				                    		<li class="mini_cart_item">
				                    			<a href="<?php echo URL_USER_PROFILE;?>">
				                    				<i class="pe pe-7s-user"></i> 
				                    				<?php echo get_languageword('my_profile');?>
				                    			</a>
				                    		</li>
		                                    <li class="mini_cart_item">
		                                    	<a href="<?php echo URL_USER_MY_ORDERS;?>">
		                                    		<i class="pe pe-7s-box1"></i>
		                                    		<?php echo get_languageword('my_orders');?>
		                                    	</a>
		                                    </li>
											<li class="mini_cart_item" style="display: none">
												<a href="<?php echo URL_USER_MY_POINTS;?>">
													<i class="pe pe-7s-wallet"></i>
													<?php echo get_languageword('my_points');?>
												</a>
											</li>
		                                    <li class="mini_cart_item">
		                                    	<a href="<?php echo URL_AUTH_LOGOUT;?>">
		                                    		<i class="pe pe-7s-next-2"></i>
		                                    		<?php echo get_languageword('logout');?>
		                                    	</a>
		                                    </li>
		                                </ul>
									</div>
								</div>
							</div>
						</li>
					<?php endif;?>
               </ul>
               <ul class="site-header-cart menu">
	                <li class="mini-cart">
	                	<a class="cart-contents" href="<?php echo URL_CART_INDEX;?>" style="float: none" >
		                    <span id="items_cnt" class="count">
		                    	<?php echo count($this->cart->contents());?>
		                    </span>
		                </a>
	                </li>
	            </ul>
            </div>
        </header>
