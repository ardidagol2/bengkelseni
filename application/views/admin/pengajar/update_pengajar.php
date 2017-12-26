<!-- PAGE CONTENT BEGINS -->
<!-- <form class="form-horizontal" role="form"> -->
	<?php echo form_open_multipart("admin/pengajar/simpan", 'class="form-horizontal"'); ?>
	<div class="control-group">
		<div class="row">
			<div class="col-xs-12 col-sm-12">

				<div class="form-group">
					<label class="col-sm-3 control-label no-padding-right" for="form-field-1" > ID Pengajar </label>

					<div class="col-sm-9">
						<input readonly="" type="text" name="id_pengajar" id="form-field-1" placeholder="ID Pengajar" class="col-xs-9 col-sm-5"  value="<?php echo $id_pengajar ?>"  required />
					</div>
				</div>

				<div class="form-group">
					<label class="col-sm-3 control-label no-padding-right" for="form-field-1-1"> Nama Pengajar </label>

					<div class="col-sm-9">
						<input type="text" name="nama" id="form-field-1-1" placeholder="Nama Pengajar" class="col-xs-9 col-sm-5" value="<?php echo $nama_pengajar; ?> "  required />
					</div>
				</div>

				<div class="form-group">
					<label class="col-sm-3 control-label no-padding-right" for="form-field-2"> Tempat Lahir </label>

					<div class="col-sm-9">
						<input type="text" name="tempat" id="form-field-2" placeholder="Tempat Lahir" class="col-xs-9 col-sm-5" value="<?php echo $tempat; ?> "  required />
					</div>
				</div>

				<div class="form-group">
					<label class="col-sm-3 control-label no-padding-right" for="form-field-4">Tanggal lahir</label>

					<div class="col-sm-9">
						<input class="col-xs-9 col-sm-5" type="date" name="tanggal_lahir" id="form-field-4" value="<?php echo $tanggal; ?>" required />
					</div>
				</div>

				<div class="form-group">
					<label class="col-sm-3 control-label no-padding-right" for="form-field-5">Alamat</label>

				<div class="col-sm-9">
						<div class="clearfix">
							<textarea name="alamat" class="col-xs-9 col-sm-5"><?php echo $alamat; ?></textarea>
						</div>
					</div>
				</div>

				<div class="form-group">
					<label class="col-sm-3 control-label no-padding-right" for="form-input-readonly"> Telepon </label>

					<div class="col-sm-9">
						<input data-rel="tooltip" type="text" name="telp" class="col-xs-9 col-sm-5" placeholder="Telepon" value="<?php echo $telp; ?> "  required />
					</div>
				</div>

				<div class="form-group">
					<label class="col-sm-3 control-label no-padding-right" for="form-input-readonly"> Email </label>

					<div class="col-sm-9">
						<input data-rel="tooltip" type="email" name="email" class="col-xs-9 col-sm-5" id="form-field-6" placeholder="E-mail" value="<?php echo $email; ?> "  required />
					</div>
				</div>

				<div class="form-group">
					<label class="col-sm-3 control-label no-padding-right" for="form-field-7">Bidang Ajar</label>

					<div class="col-sm-9">
						<input class="col-xs-2" readonly title="Pilih untuk Ganti!!" type="text" value="<?php echo $bidang_seni; ?> "/>
						<select class="col-xs-9 col-sm-3" name="bidang_seni" required>
							<option value="">-Pilih-</option>
							<option value="seni Lukis">Seni Lukis</option>
							<option value="Seni Tari">Seni Tari</option>
						</select>
					</div>
				</div>
			</div>
		</div>

		<div class="space-4"></div>

		<div class="clearfix form-actions">
			<div class="col-md-offset-3 col-md-9">
				<button class="btn btn-info" type="Submit">
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