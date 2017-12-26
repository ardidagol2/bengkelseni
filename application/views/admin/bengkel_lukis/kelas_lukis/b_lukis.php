<div class="row">
	<div class="col-sm-12">
		<div class="widget-box">
			<div class="widget-header widget-header-flat">
				<i class="ace-icon fa fa-warning bigger-110"></i>
				<h4 class="widget-title">Bengkel Seni Lima Saudara</h4>
			</div>

			<div class="widget-body">
				<div class="widget-main">
					<div class="row">
						<div class="col-sm-12">
							<h5><p>Bengkel Lukis telah menghasilkan lulusan yang mahir dibidang seni Lukis sejak tahun 2017. Dalam kegiatan pembelajarannya hanya menerima 10 orang peserta dalam 1 kelas, durasi belajar 1 kali dalam seminggu dengan waktu 2 jam selama 3 bulan dan akan dilakukan ujian unruk mendapatkan sertifikat keahlian melukis internal. Jika tidak lulus dalam ujian pertama maka diberikan kesempatan untuk mengulang dengan keringanan potongan 75. Biaya pendidikan dalam bengkel Lukis sebesar Rp. 4.000.000.- sampai dengan ujian tidak termasuk peralatan materi, pembayaran bisa langsung ke Office atau via Transfer Bank Mandiri No. Rekening 3-234-123-44444-4 a/n Benkel Seni Lima Saudara dan kirim scan transfer ke <a href="<?php echo base_url(); ?>index.php/admin/pendaftaran">Formulir Pendaftaran</a>. Kmai juga menerima pembelian peralatan lukis dan reparasi lukisan yang bisa diakses pada <a href="<?php echo base_url(); ?>index.php/admin/belireparasi">Pembelian dan Reparasi</a>.</p></h5>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div><!-- /.col -->
</div>

<hr />
<div class="row">
	<div class="col-sm-12">
		<?php foreach ($data->result() as $row) { ?>
		<div class="row">
			<div class="col-xs-12">
				<div class="widget-box">
					<div class="widget-header widget-header-flat">
						<h4 class="widget-title smaller">
							<i class="ace-icon fa fa-home"></i>
							<?php echo $row->judul; ?>
						</h4>
					</div>

					<div class="widget-body">
						<div class="widget-main">
							<?php echo $row->isi; ?>
							<div>
								<ul class="ace-thumbnails clearfix">
									<li>
										<div>
											<img width="150" height="150" alt="150x150" src="<?php echo base_url(); ?>assets/berita_img/<?php echo $row->image; ?>" />
											<div class="text">
												<div class="inner">
													<span><?php echo $row->judul; ?></span>

													<br />
													<a href="<?php echo base_url(); ?>assets/berita_img/<?php echo $row->image; ?>" data-rel="colorbox">
														<i class="ace-icon fa fa-search-plus"></i>
													</a>

													<a href="#">
														<i class="ace-icon fa fa-user"></i>
													</a>

													<a href="#">
														<i class="ace-icon fa fa-share"></i>
													</a>
												</div>
											</div>
										</div>
									</li>
								</ul>
							</div>
						</div>
					</div>
					<div class="clearfix form-actions">
						<div class="col-md-offset-3 col-md-9">
							&nbsp; &nbsp; &nbsp;
							&nbsp; &nbsp; &nbsp;
							&nbsp; &nbsp; &nbsp;
							<a class="btn btn-info" href="<?php echo base_url(); ?>admin/kelaslukis/tambah">
								<i class="ace-icon fa fa-check bigger-110"></i>
								Tambah
							</a>

							&nbsp; &nbsp; &nbsp;
							<a class="btn" href="<?php echo base_url(); ?>admin/kelaslukis/view">
								<i class="ace-icon fa fa-file bigger-110"></i>
								View All
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="space-6"></div>
		<?php } ?>
	</div>
</div>

