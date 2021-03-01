<?php 
	$this->db->where('publication_id',$record);
    $query = $this->db->get('cr_publication');       
    $records = $query->row();
?>

<div id="page-wrapper">
	<div class="row">
		<div class="col-md-12">
			<?php echo $this->session->flashdata('message'); ?>
					<!-- Form Elements -->
			<div class="panel panel-default">
						
				<div class="panel-heading">
					<?php if(isset($pagetitle)) echo $pagetitle;?>
					<a title="<?php echo get_languageword('go_to_list'); ?>" class="btn btn-primary btn-xs pull-right" href="<?php echo base_url('publication'); ?>">
						<i class="fa fa-list"></i>
					</a>
				</div>
				<div class="panel-body">
						 
					<div class="row">
						<?php
							$attributes = array('name'=>'page_form','id'=>'page_form');
							echo form_open_multipart(base_url('publication/edit'),$attributes);
						?>	
						<div class="col-md-6">
						<div class="form-group">
							<label>Imangen de Publicación</label>
							<input type="file" name="publication_imagen" onchange="photo(this,'menu_image')">

							<?php 
								$src = "";
								$style="display:none;";
								if(isset($records->publication_imagen) && $records->publication_imagen != "") {
										$src = base_url().'uploads/banner/'.$records->publication_imagen;
										$style="";
								}
							?>
							<img id="menu_image" src="<?php echo $src;?>"> 
						</div>

						<div class="form-group">
							<label><?php echo get_languageword('status').required_symbol();?></label>
							<select name="status" class="chzn-select form-control chzn-done">
								<option value="1" <?php if($records->publication_status == '1') echo 'selected'  ?> >Activo</option>
								<option value="0" <?php if($records->publication_status == '0') echo 'selected'  ?> >Inactivo</option>
							</select>
						</div>
						
					
						<div class="form-group pull-right">
							<?php 
							echo form_hidden('id',$records->publication_id);?>
							<button type="submit" name="addedit_page" value="addedit_page" class="btn btn-primary"><?php echo get_languageword('save');?></button>
							<a class="btn btn-warning" href="<?php echo base_url('publication');?>"><?php echo get_languageword('cancel');?></a>
						</div>
						</div>
					
						</div>
						<?php echo form_close();?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>