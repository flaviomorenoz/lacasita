<?php  
   $oferta_listaT1 = $this->db->get_where('cr_publication', array('publication_type' => 1, 'publication_status' => 1))->result();
   $oferta_listaT0 = $this->db->get_where('cr_publication', array('publication_type' => 0, 'publication_status' => 1))->result();
   $oferta_listaT2 = $this->db->get_where('cr_publication', array('publication_type' => 2, 'publication_status' => 1))->result();
   $oferta_listaT3 = $this->db->get_where('cr_publication', array('publication_type' => 3, 'publication_status' => 1))->result();
?>
   
<div id="content" class="site-content" tabindex="-1" 
   style="background-size:cover; background-position:center top; background-image:url( <?php echo get_home_page_img();?>); padding-top:380px">

   <div class="col-full">

            <div style="position:relative; top:0px; text-align:center;">
               <div class="title-text">
                  <div class="row" style="display:flex; color:white; align-content: center">
                     <div class="col" style="margin:auto;">
                        <div style="float:left"><img src="uploads/logo/logo-sm.png" width="35"></div>
                        <div style="float:left; margin-left:5px;">Av. Universitaria 567-B - San Miguel</div>
                     </div>
                  </div>

                  <div class="row" style="display:flex; color:white; align-content: center">
                     <div class="col" style="margin:auto;">
                        <div style="float:left"><img src="uploads/logo/logo-sm.png" width="35"></div>
                        <div style="float:left; margin-left:5px;">Av. Manuel Villaran 964 - Surquillo</div>
                     </div>
                  </div>

                  <div class="row" style="display:flex; color:white; align-content: center">
                     <div class="col" style="margin:auto;">
                        <div style="float:left"><img src="uploads/logo/logo-sm.png" width="35"></div>
                        <div style="float:left; margin-left:5px;">Av. Ayacucho 412 - Surco</div>
                     </div>
                  </div>


               </div>
            </div>

               <div id="primary" class="content-area">
                  <main id="main" class="site-main">
                     <div class="tiles">

                        <div class="row">
                           <!--<?php foreach ($oferta_listaT1 as $row): ?>
                           <div class="col-xs-12 col-sm-6">
                              <div class="banner top-left animate-in-view" data-animation="zoomIn">
                                 <a href="#">
                                    <div class="banner-bg" style="background-size: cover; background-position: center center; background-image: url('uploads/banner/<?php echo $row->publication_imagen; ?>'); height: 485px;">
                                    </div>
                                 </a>
                              </div>
                           </div>
                           <?php endforeach ?>-->
                           <?php foreach ($oferta_listaT0 as $row): ?>

                           <div class="col-xs-12 col-sm-6">
                              <div class="section-store-search animate-in-view" data-animation="zoomIn" 
                                 style="background-size: cover;
                                 border-style:solid;
                                 top:-200px;
                                 left:0px; 
                                 background-image: url( uploads/banner/default_search.jpg ); min-height: 210px;">

                                 <div class="store-locator">
                                    <div class="store-info">
                                       <span class="icon"><i class="po po-marker-hand-drawned"></i></span>
                                       <div class="title-text">
                                          <h2 class="title">DESCUBRE</h2>
                                          <h3 class="sub-title"><span>NUESTROS <br>MENÚ</span></h3>
                                       </div>
                                    </div>
                                    <div class="store-search-form">
                                       <?php echo form_open(URL_MENU);?>
                                          <div class="input-group">
                                              <input type="text" name="search_item" class="form-control" placeholder="Buscar..." aria-describedby="basic-addon2" required>
                                             <span class="input-group-btn">
                                             <input type="submit" class="button btn btn-default" value="Buscar" id="basic-addon2">
                                             </span>
                                          </div>
                                       <?php echo form_close();?>
                                    </div>
                                 </div>
                              </div>
                            
                           </div>
                           <?php endforeach ?>

                           <div class="col-xs-12 col-sm-6">
                              <div class="banner center animate-in-view" data-animation="zoomIn">
                                 <a href="#">
                                    <div class="banner-bg" style="background-size: cover; background-position: center center; background-image: url('uploads/banner/<?php echo $row->publication_imagen; ?>'); height: 210px;">
                                    </div>
                                 </a>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="banners">
                        <div class="row">
                           <?php foreach ($oferta_listaT2 as $row): ?>
                           <div class="banner col-sm-4 animate-in-view" data-animation="fadeInLeft">
                              <a href="#">
                                 <div class="banner-bg" style="background-size: cover; background-position: center center; background-image: url('uploads/banner/<?php echo $row->publication_imagen; ?>'); height: 370px;">
                                 </div>
                              </a>
                           </div>
                           <?php endforeach ?>
                        </div>
                     </div>
                     <div class="banners">
                        <div class="row">
                           <?php foreach ($oferta_listaT3 as $row): ?>
                           <div class="banner col-sm-6 center animate-in-view" data-animation="fadeInDown">
                              <a href="#">
                                 <div class="banner-bg" style="background-size: cover; background-position: center center; background-image: url('uploads/banner/<?php echo $row->publication_imagen; ?>'); height: 214px;">
                                 </div>
                              </a>
                           </div>
                           <?php endforeach ?>
                        </div>
                     </div>
                  </main>
                  <!-- #main -->
               </div>
               <!-- #primary -->
   </div>
</div>