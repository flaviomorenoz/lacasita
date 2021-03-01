<script type="text/javascript">
	function showModal(url){
		jQuery('#modal_ajax .modal-body').html('<div style="text-align:center;margin-top:200px;"><img src="<?php echo base_url() ?>assets/images/loader-1.gif" style="height:25px;" /></div>');
		jQuery('#modal_ajax').modal('show', {backdrop: 'true'});
		
		$.ajax({
			url: url,
			success: function(response)
			{
				jQuery('#modal_ajax .modal-body').html(response);
			}
		});
		$('#example1').DataTable();
	}
</script>
    
<!-- (Ajax Modal)-->
<div class="modal fade" id="modal_ajax">
    <div class="modal-dialog modal-xl" >
        <div class="modal-content" style="width: auto !important">
            <div class="modal-header">
                <button type="button" style="margin: 0px;" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Detalle</h4>                       
            </div>
            <div class="modal-body" style="height:auto; overflow:auto;">

            </div>
        </div>
    </div>
</div>