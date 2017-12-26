<!-- PAGE CONTENT BEGINS -->
<!-- <form class="form-horizontal" role="form"> -->
<?php echo form_open_multipart('admin/dashboard/simpan', 'class="form-horizontal"') ?>
	<div class="control-group">
		<div class="row">
			<div class="col-xs-12 col-sm-7">

				<div class="form-group">
					<label class="col-sm-3 control-label no-padding-right" for="form-field-1-1"> Judul </label>

					<div class="col-sm-9">
						<input type="text" hidden name="id" id="form-field-1-1" value="<?php echo $this->model_dashboard->get_kodeunik('berita'); ?>" />
						<input type="text" name="judul" id="form-field-1-1" placeholder="Judul" class="col-xs-9" required />
					</div>
				</div>

				<div class="form-group">
					<label class="col-sm-3 control-label no-padding-right" for="form-field-2"> Tanggal </label>

					<div class="col-sm-9">
						<input type="date" name="tgl" id="form-field-2" class="col-xs-9" required />
					</div>
				</div>

				<div class="form-group">
					<label class="col-sm-3 control-label no-padding-right" for="form-field-5">Isi</label>

				<div class="col-sm-9">
						<div class="clearfix">
								<!-- <div class="wysiwyg-editor" id="editor1"></div> -->
							<!-- <textarea name="alamat" class="md-input" style="resize: none;" data-provide="markdown" data-iconlibrary="fa" rows="15" required=""></textarea> -->
							<textarea name="isi" data-provide="markdown" data-iconlibrary="fa" rows="10"></textarea>
						</div>
					</div>
				</div>

				<div class="form-group">
					<label class="col-sm-3 control-label no-padding-right" for="form-field-5">Image</label>

					<div class="col-sm-8">
						<input type="file" name="file" id="id-input-file-1" class="form-control">
					</div>
				</div>
			</div>
		</div>

		<div class="space-4"></div>

		<div class="clearfix form-actions">
			<div class="col-md-offset-3 col-md-9">
				<button class="btn btn-info" type="submit">
					<i class="ace-icon fa fa-check bigger-110"></i>
					Submit
				</button>

				&nbsp; &nbsp; &nbsp;
				<button class="btn" type="reset">
					<i class="ace-icon fa fa-undo bigger-110"></i>
					Reset
				</button>

				&nbsp; &nbsp; &nbsp;
				<a class="btn" type="button" href=" <?php echo base_url(); ?>admin/pendaftaran/report" target="_blank">
					<i class="ace-icon fa fa-print bigger-110"></i>
					Print
				</a>
			</div>
		</div>
		<div class="space-24"></div>
	</div>
</form>

<script type="text/javascript">
jQuery(function($){
	
	$('textarea[data-provide="markdown"]').each(function(){
        var $this = $(this);

		if ($this.data('markdown')) {
		  $this.data('markdown').showEditor();
		}
		else $this.markdown()
		
		$this.parent().find('.btn').addClass('btn-white');
    })
	
});
</script>