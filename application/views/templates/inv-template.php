<?php
$pagetitle = "La Casita de las Salchipapas";
?>
<!--<img src="logo.png" height="60px">-->
<!DOCTYPE html>
<html>
<head>
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
	<link rel="stylesheet" href="assets/css/config.css" />
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800%7CYanone+Kaffeesatz:200,300,400,700" rel="stylesheet" />
	<!-- <script type="text/javascript" src="assets/js/jquery.min.js"></script> -->
   	<!-- PNOTIFY CSS-->
    <link href="<?php echo PNOTIFY_ALL_CSS;?>" rel="stylesheet" />
    <script src="<?php echo JS_FRONT_JQUERY_MIN;?>"></script>
	<style type="text/css">
		body{
			background-color:#FFD68A;
		}
		.fuerte{
			font-size:16px;
			color:rgb(60,60,60);
			font-weight: bold;
		}
		.espaciado{
			margin-bottom:7px;
		}
	</style>
</head>

<body>

	<div class="row" style="background-color: rgb(250,150,0)">
		<h2 style="text-align: center">Modulo de Inventario<img src="<?= base_url("images/logo.png") ?>" height="55px"></h2>

	</div>
	<div class="row" style="margin-left: -10px;">
		<div class="col-sm-12 col-md-2">
			<?php $this->load->view('inv_navigation'); ?>
		</div>
		<div class="col-sm-12 col-md-10">
			<div id="page-wrapper" class="bg-silver">

				<?php $this->load->view($content); ?>
				
			</div>
		</div>
	</div>

</body>
</html>
