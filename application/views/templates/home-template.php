<?php 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>
<?php $this->load->view('common/home/header'); ?>

<?php $this->load->view($content); ?>
 
<?php $this->load->view('common/home/footer'); ?>