<div class="alert alert-block alert-success">
	<button type="button" class="close" data-dismiss="alert">
		<i class="ace-icon fa fa-times"></i>
	</button>

	<i class="ace-icon fa fa-check green"></i>

	Selamat Datang di
	<strong class="green">
		Bengkel Seni
		<small>(v1.0)</small>
	</strong>,
 salam bahagia dan selamat bekerja.
</div>


<div class="hr hr32 hr-dotted"></div>

<div class="row">
	<div class="col-sm-12">
		<div class="widget-box">
			<div class="widget-header widget-header-flat">
				<i class="ace-icon fa fa-warning bigger-110"></i>
				<h4 class="widget-title">Introduction</h4>
			</div>

			<div class="widget-body">
				<div class="widget-main">
					<?php foreach ($data->result() as $row) { ?>
					<div class="hr"></div>
					<div class="row">
						<div class="col-md-6">
							<h1 style="color: green">
								<?php echo $row->judul; ?>
								<br>
								<small><?php echo $row->tgl; ?></small>
							</h1>
							<h5><p align="justify"><?php echo $row->isi; ?></p></h5>
						</div>
						<div class="box-content-row">
							<div class="col-lg-5 col-md-12 hidden-xs center-text responsive">
								<p></p>
								<img width="220" style="margin-bottom:  1px;" class="thumbnail" src="<?php echo base_url() ?>assets/berita_img/<?php echo $row->image; ?>">
							</div>
						</div>
					</div>
					<?php } ?>
				</div>
			</div>
		</div>
	</div><!-- /.col -->
</div>