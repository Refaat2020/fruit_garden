<div class="modal fade"  id="discountmodal">

	<div class="modal-dialog">
		
		<div class="modal-content">

			<div class="modal-header">

				<h4 class="modal-title"><?php echo $title; ?></h4>

				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
		          <span aria-hidden="true">&times;</span>
		        </button>
			</div>

			<div class="modal-body">
				<p><?php echo $message; ?></p>
			</div>

			<div class="modal-footer">

				<!-- <a class="btn btn-sm btn-primary btn-no" href='<?php echo $module_site_url ."/delete_all/";?>'>
				<?php echo get_msg( 'subcat_yes_all_label' ) ?></a> -->

				<!-- <a class="btn btn-sm btn-primary btn-no" href='<?php echo $module_site_url ."/delete/";?>'>
				<?php echo get_msg( 'subcat_no_only_label' ); ?></a> -->

				<a class="btn btn-sm btn-primary btn-no" href='<?php echo $module_site_url ."/delete/";?>'>
					<?php echo get_msg('btn_yes'); ?>
				</a>

				<a href='#' class="btn btn-sm btn-primary" data-dismiss="modal">
				<?php echo get_msg( 'btn_cancel' )?></a>
			</div>

		</div><!-- /.modal-content -->

	</div><!-- /.modal-dialog -->

</div><!-- /.modal -->