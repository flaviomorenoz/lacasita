<footer id="colophon" class="site-footer footer-v3">
    <div class="col-full">
        <div class="footer-row row vertical-align">
            <div class="footer-logo">
                <img style="height: 10rem; position: absolute;" src="<?php echo get_site_logo();?>">
            </div>
            <ul id="menu-footer-menu" class="footer-menu">
                <li><a href="<?php echo SITEURL;?>">Inicio</a></li>
                <li><a href="<?php echo URL_FAQS;?>">FAQs</a></li>
                <li><a href="<?php echo URL_CONTACT_US;?>">Contacto</a></li>
                <li><a href="<?php echo URL_SITE_MAP;?>">Mapa del Sitio</a></li>
            </ul>
            <div class="footer-social-icons">
                <span class="social-icon-text">Siguenos en</span>
                <ul class="social-icons list-unstyled">
                    <?php if(isset($this->config->item('social_networks')->facebook) && $this->config->item('social_networks')->facebook != '') { ?>
                    <li><a href="<?php echo $this->config->item('social_networks')->facebook;?>" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                    <?php } if(isset($this->config->item('social_networks')->twitter) && $this->config->item('social_networks')->twitter != '') { ?>
                    <li><a href="<?php echo $this->config->item('social_networks')->twitter;?>" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                    <?php } if(isset($this->config->item('social_networks')->instagram) && $this->config->item('social_networks')->instagram != '') {?>
                    <li><a href="<?php echo $this->config->item('social_networks')->instagram;?>" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                    <?php } if(isset($this->config->item('social_networks')->google_plus) && $this->config->item('social_networks')->google_plus != '') { ?>
                    <li><a href="<?php echo $this->config->item('social_networks')->google_plus;?>" target="_blank"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                    <?php } if(isset($this->config->item('social_networks')->tumblr) && $this->config->item('social_networks')->tumblr != '') {?>
                    <li><a href="<?php echo $this->config->item('social_networks')->tumblr;?>" target="_blank"><i class="fa fa-tumblr" aria-hidden="true"></i></a></li>
                    <?php } if(isset($this->config->item('social_networks')->pinterest) && $this->config->item('social_networks')->pinterest != '') {?>
                    <li><a href="<?php echo $this->config->item('social_networks')->pinterest;?>" target="_blank"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
                    <?php } if(isset($this->config->item('social_networks')->linked_in) && $this->config->item('social_networks')->linked_in != '') {?>
                    <li><a href="<?php echo $this->config->item('social_networks')->linked_in;?>" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                    <?php } ?>
                </ul>
            </div>
        </div>
        <div class="site-info">
           <p class="copyright">La Casita de la Salchipapa ©</p>
        </div>
        <!-- .site-info -->
        <div class="footer-payment-icons">
           <ul class="list-payment-icons">
              <li><i class="fa fa-cc-paypal"></i></li>
              <li><i class="fa fa-cc-visa"></i></li>
              <li><i class="fa fa-cc-mastercard"></i></li>
           </ul>
        </div>
        <div class="pizzaro-handheld-footer-bar">
            <ul class="columns-3">
                <?php if (!$this->ion_auth->logged_in()): $login_popup='login'; ?>
                <li class="my-account"><a href="javascript:void(0);" onclick="show_popup('<?php echo $login_popup;?>')">Mi Cuenta</a></li>
                <?php else: ?>
                <li class="my-account"><a href="<?php echo URL_USER_PROFILE;?>">Mi Cuenta</a></li>
                <?php endif;?>
                <li class="search">
                    <a href="#">Buscar</a>
                    <div class="site-search">
                        <div class="widget woocommerce widget_product_search">
                            <?php echo form_open(URL_MENU);?>
                                <label class="screen-reader-text" for="woocommerce-product-search-field">Buscar:</label>
                                <input type="text" name="search_item" class="search-field" placeholder="Buscar Producto..." aria-describedby="basic-addon2" required>
                                <input type="submit" value="Buscar" id="basic-addon2">
                            <?php echo form_close();?>
                        </div>
                    </div>
                </li>
                <li class="cart">
                    <a class="footer-cart-contents" href="<?php echo URL_CART_INDEX;?>">
                        <span id="items_cnt" class="count"><?php echo count($this->cart->contents());?></span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</footer>
<section class="ct-subfoot">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <div class="copy-text">
                    <?php if(isset($this->config->item('site_settings')->rights_reserved_content)) 
                        echo $this->config->item('site_settings')->rights_reserved_content;
                    ?>   
                </div>
            </div>
            <div class="col-sm-6 hidden-xs">
                <ul class="copyright-links">
                    <?php if(!$this->ion_auth->logged_in()) {?>
                    <li class="dropdown ct-lang">
                        <a href="#" onclick="show_popup('login')" class="dropdown-toggle ct-toggle ct-padding"> 
                            <?php echo get_languageword('login');?>
                        </a>
                    </li>
                    <li class="dropdown ct-lang">
                        <a href="#" onclick="show_popup('signup')" class="dropdown-toggle ct-toggle ct-padding">
                            <?php echo get_languageword('register');?>
                        </a>
                    </li>
                    <?php } ?>
                </ul>
            </div>
            
        </div>
   </div>
</section>
</div>
    <!-- <script type="text/javascript" src="assets/js/tether.min.js"></script> -->
    <!-- <script type="text/javascript" src="assets/js/bootstrap.min.js"></script> -->
    <!-- <script type="text/javascript" src="assets/js/owl.carousel.min.js"></script> -->
    <!-- <script type="text/javascript" src="assets/js/social.share.min.js"></script> -->
    <script type="text/javascript" src="assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script type="text/javascript" src="assets/js/scripts.min.js"></script>
    <!-- <script type="text/javascript" src="assets/js/switchstylesheet.js"></script> -->
    <!-- aqui -->
    <?php $this->load->view('common/popup_script');?>
    <script src="<?php echo JS_FRONT_BOOTSTRAP_MIN;?>"></script>
    <script src="<?php echo JS_FRONT_SEARCH_BOX;?>"></script>
    <script src="<?php echo JS_FRONT_BOOTSTRAP_OFFCANVAS;?>"></script>
    <!--CHOSEN JS-->
    <script type="text/javascript" src="<?php echo JS_CHOSEN_JQUERY_MIN;?>"></script>
    <!--PNOTIFY JS-->
    <script type="text/javascript" src="<?php echo PNOTIFY_MIN_JS;?>"></script>
    <script type="text/javascript" src="<?php echo PNOTIFY_ANIMATE_JS;?>"></script>
    <script type="text/javascript" src="<?php echo PNOTIFY_BUTTON_JS;?>"></script>
    <script type="text/javascript" src="<?php echo PNOTIFY_CALLBACK_JS;?>"></script>
    <script type="text/javascript" src="<?php echo PNOTIFY_CONFIRM_JS;?>"></script>
    <script type="text/javascript" src="<?php echo PNOTIFY_DESKTOP_JS;?>"></script>

    <script src="<?php echo JS_FRONT;?>ResizeSensor.min.js" type="text/javascript"></script>
    <script src="<?php echo JS_FRONT;?>theia-sticky-sidebar.min.js" type="text/javascript"></script>

    <script>
    jQuery(document).ready(function() {
        jQuery('#item-sidebar').theiaStickySidebar({
            additionalMarginTop: 30
        });
    });
    </script>
    <script>
        $(document).ready(function() {
             $(".chzn-select").chosen();
        });
        function checkNotify(title,text,type)
        {
            var notification = new PNotify({
                title: title,
                text: text,
                type: type
            });

            notification.open();
        }
    </script>
    <script src="<?php echo JS_FUNCTIONS;?>"></script>
    <script>
        var add_cart_target_url = '<?php echo base_url();?>cart/add_cart_item';
        var update_cart_target_url = '<?php echo base_url();?>cart/update_cart_item';
        var remove_cart_target_url = '<?php echo base_url();?>cart/remove_cart_item';
        var currency_symbol = '<?php echo $this->config->item('site_settings')->site_title;?>';
    </script>
</body>
</html>