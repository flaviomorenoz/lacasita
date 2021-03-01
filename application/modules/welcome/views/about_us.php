<!--About Us Page-->
<section class="fc-identity fc-bottom fc-menu-wrapper">
   <div class="container">
        <div class="row">
       		<div class="col-sm-6">
       			<img src="<?php echo FRONT_IMAGES;?>about-screen3.png" class="img-responsive">
       		</div>
       		<div class="col-sm-6" style="text-align: justify;">
       		    <div class="section-header text-left">
                    <h1 style="text-transform: uppercase !important;"><?php if (isset($pagetitle)) echo $pagetitle; ?></h1>
                </div>
         
                <div class="about-text-more">
         		    <?php if (isset($record->description)) echo $record->description;?>
                </div>
       	    </div>
       </div>
       <br>
        <div class="row">
            <div class="col-md-12">
                <div class="section-header text-left" style="margin-bottom:15px">
                    <h1 style="text-transform: uppercase !important;">MISIÓN</h1>
                </div>
                <div class="about-text-more">
                    Servir la mejor Salchipapa del País usando en todo momento ingredientes de calidad, en un ambiente limpio, agradable, y con una atención personalizada.
                </div>    
            </div>
            <div class="col-md-12">
                <div class="section-header text-left" style="margin-bottom:15px">
                    <h1 style="text-transform: uppercase !important;">VISIÓN</h1>
                </div>
                <div class="about-text-more">
                    <ul>
                        <li>Dominar la industria de comida rápida, a través de la satisfacción del cliente</li>
                        <li>Ser reconocidos por nuestros colaboradores como una de las mejores empresas para trabajar.</li>
                        <li>Promover la innovación y creatividad en nuestros platos. </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-12">
                <div class="section-header text-left" style="margin-bottom:15px">
                    <h1 style="text-transform: uppercase !important;">VALORES</h1>
                </div>
                <div class="about-text-more">
                    <ul>
                        <li>La máxima calidad y seguridad en los productos, desde su compra hasta la preparación en el restaurante.</li>
                        <li>La satisfacción del cliente es nuestro principal objetivo.</li>
                        <li>La Casita de la Salchipapa presta una atención permanente a la limpieza e higiene en sus instalaciones.</li>
                    </ul>   
                </div>
            </div>
        </div>
       <?php //$this->load->view('dishes-block');?>
  </div>
</section>

<?php $this->load->view('home/our_services');?>