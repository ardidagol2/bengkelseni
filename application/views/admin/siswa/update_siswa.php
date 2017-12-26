<!-- PAGE CONTENT BEGINS -->
<!-- <form class="form-horizontal" role="form"> -->
	<?php echo form_open_multipart('admin/siswa/simpan', 'class="form-horizontal"') ?>
	<div class="control-group">
		<div class="row">
			<div class="col-xs-12 col-sm-6">

				<div class="form-group">
					<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> NIS </label>

					<div class="col-sm-9">
						<input type="text" id="form-field-1" name="nis" value="<?php echo $nis; ?>" placeholder="NIS" class="col-xs-10" readonly />
					</div>
				</div>

				<div class="form-group">
					<label class="col-sm-3 control-label no-padding-right" for="form-field-1-1"> Nama Siswa </label>

					<div class="col-sm-9">
						<input type="text" id="form-field-1-1" placeholder="Nama Siswa" name="nama_siswa" class="col-xs-10" value="<?php echo $nama_siswa; ?>" />
					</div>
				</div>

				<div class="form-group">
					<label class="col-sm-3 control-label no-padding-right" for="form-field-2"> Tempat Lahir </label>

					<div class="col-sm-9">
						<input type="text" id="form-field-2" placeholder="Tempat Lahir" name="tempat" class="col-xs-10" value="<?php echo $tempat; ?>"/>
					</div>
				</div>

				<div class="form-group">
					<label class="col-sm-3 control-label no-padding-right" for="form-field-4">Tanggal Lahir</label>

					<div class="col-sm-9">
						<input class="col-xs-10" type="text" id="form-field-4" name="tgl_lahir" value="<?php echo $tgl_lahir; ?>" />
					</div>
				</div>

				<div class="form-group">
					<label class="col-sm-3 control-label no-padding-right" for="form-field-5">Alamat</label>

					<div class="col-sm-9">
						<div class="clearfix">
							<textarea class="col-xs-10" name="alamat" ><?php echo $alamat; ?></textarea>
						</div>
					</div>
				</div>

				<div class="form-group">
					<label class="col-sm-3 control-label no-padding-right" for="form-field-5">Telepon</label>

					<div class="col-sm-9">
						<div class="clearfix">
							<input class="col-xs-10" type="text" id="form-field-5" name="telp" placeholder="Telepon" value="<?php echo $telp; ?>" />
						</div>
					</div>
				</div>
			</div>

			<div class="col-xs-12 col-sm-6">
				<div class="form-group">
					<label class="col-sm-4 control-label">E-mail</label>

					<div class="col-sm-8">
						<div class="clearfix">
							<input class="form-control" name="email" type="email" id="form-field-5" placeholder="Email" value=" <?php echo $email; ?>" />
						</div>
					</div>
				</div>

				<div class="form-group">
					<label class="col-sm-4 control-label no-padding-right" for="form-field-6">Bidang Seni</label>

					<div class="col-sm-8">
						<input class="form-control" name="bidang_seni" type="text" value="<?php echo $bidang_seni; ?>" readonly />
						<select class="form-control" name="bidang_seni2" onchange="bidang_seni.value=this.value">
							<option value="">-- Pilih --</option>
							<option value="Seni Lukis">Seni Lukis</option>
							<option value="Seni Tari">Seni Tari</option>
						</select>
					</div>
				</div>

				<div class="form-group">
					<label class="col-sm-4 control-label no-padding-right" name="status_siswa" for="form-field-6">Status Belajar</label>

					<div class="col-sm-8">
						<input class="form-control" name="status" type="text" value="<?php echo $status_siswa; ?>" readonly />
						<select class="form-control" name="status1" onchange="status.value=this.value">
							<option value="">--Pilih--</option>
							<option value="Aktif">Aktif</option>
							<option value="Remidial">Remidial</option>
							<option value="Lulus">Lulus</option>
						</select>
					</div>
				</div>
			</div>
		</div>

		<div class="space-4"></div>

		<div class="clearfix form-actions">
			<div class="col-md-offset-3 col-md-9">
				<button class="btn btn-info" type="simpan">
					<i class="ace-icon fa fa-check bigger-110"></i>
					Submit
				</button>

				&nbsp; &nbsp; &nbsp;
				<button class="btn" type="reset">
					<i class="ace-icon fa fa-undo bigger-110"></i>
					Reset
				</button>
			</div>
		</div>

		<div class="space-24"></div>
	</div>
</form>