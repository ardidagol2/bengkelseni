<!-- PAGE CONTENT BEGINS -->
<!-- <form class="form-horizontal" role="form"> -->
	<?php echo form_open_multipart('admin/siswa/simpan', 'class="form-horizontal"') ?>
	<div class="control-group">
		<div class="row">
			<div class="col-xs-12 col-sm-6">

				<div class="form-group">
					<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> NIS </label>

					<div class="col-sm-9">
						<input type="text" id="form-field-1" placeholder="No Induk Siswa" name="nis" class="col-xs-10" value="<?php  echo $this->model_siswa->get_kodeunik('siswa'); ?>" readonly required />
					</div>
				</div>

				<div class="form-group">
					<label class="col-sm-3 control-label no-padding-right" for="form-field-1-1"> Nama Siswa </label>

					<div class="col-sm-9">
						<input type="text" id="form-field-1-1" name="nama_siswa"  placeholder="Nama Siswa" class="col-xs-10" required />
					</div>
				</div>

				<div class="form-group">
					<label class="col-sm-3 control-label no-padding-right"  for="form-field-2"> Tempat Lahir </label>

					<div class="col-sm-9">
						<input type="text" id="form-field-2" name="tempat" placeholder="Tempat Lahir" class="col-xs-10" required />
					</div>
				</div>

				<div class="form-group">
					<label class="col-sm-3 control-label no-padding-right"  for="form-field-4">Tanggal Lahir</label>

					<div class="col-sm-9">
						<input class="col-xs-10" type="date" name="tgl_lahir" id="form-field-4" required />
					</div>
				</div>

				<div class="form-group">
					<label class="col-sm-3 control-label no-padding-right"  for="form-field-5">Alamat</label>

					<div class="col-sm-9">
						<div class="clearfix">
							<textarea class="col-xs-10"  name="alamat" required=""></textarea>
						</div>
					</div>
				</div>

				<div class="form-group">
					<label class="col-sm-3 control-label no-padding-right"  for="form-field-5">Telepon</label>

					<div class="col-sm-9">
						<div class="clearfix">
							<input class="col-xs-10" type="text" name="telp" id="form-field-5" placeholder="Telepon" required />
						</div>
					</div>
				</div>
			</div>

			<div class="col-xs-12 col-sm-6">
				<div class="form-group">
					<label class="col-sm-4 control-label">E-mail</label>

					<div class="col-sm-8">
						<div class="clearfix">
							<input class="form-control" type="text" name="email" id="form-field-5" placeholder="Email" required />
						</div>
					</div>
				</div>

				<div class="form-group">
					<label class="col-sm-4 control-label no-padding-right" for="form-field-6">Bidang Seni</label>

					<div class="col-sm-8">
						<select class="form-control" name="bidang_seni" required>
							<option value="">-- Pilih --</option>
							<option value="Seni Lukis">Seni Lukis</option>
							<option value="Seni Tari">Seni Tari</option>
						</select>
					</div>
				</div>

				<div class="form-group">
					<label class="col-sm-4 control-label no-padding-right" name="status_siswa" for="form-field-6">Status Belajar</label>

					<div class="col-sm-8">
						<select class="form-control" name="status" required="">
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
				<button class="btn btn-info" type="submit">
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