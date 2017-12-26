<?php echo form_open_multipart('admin/kelas/simpan_detail', 'class="form-horizontal"') ?>
	<div class="control-group">
		<div class="row">
			<div class="col-xs-12 col-sm-6">

				<div class="form-group">
					<label class="col-sm-3 control-label no-padding-right" for="form-field-select-3">Pilih Kelas</label>

					<div class="col-sm-8">
						<select class="chosen-select col-xs-10" id="form-field-select-3" name="kode_kelas" data-placeholder="Pilih Salah Satu">
							<input type="text" name="kode_kelas" class="col-xs-10" placeholder="Kode Kelas" readonly value="<?php echo $kode; ?>">
					</div>
				</div>

				<div class="form-group">
					<label class="col-sm-3 control-label no-padding-right" for="form-field-2"> Nama Siswa </label>

					<div class="col-sm-8">
						<select class="chosen-select col-xs-10" id="form-field-select-3" name="nis" data-placeholder="Pilih Salah Satu">
							<option value=""> -pilih- </option>
							<?php foreach ($data2->result() as $row) { ?>
								<option value="<?php echo $row->nis; ?>"><?php echo $row->nama_siswa; ?></option>
							<?php } ?>
						</select>
					</div>
				</div>

				<div class="form-group">
					<label class="col-sm-3 control-label no-padding-right" for="form-field-4">Nama Pengajar</label>

					<div class="col-sm-8">
						<select class="chosen-select col-xs-10" id="form-field-select-3" name="id_pengajar" data-placeholder="Pilih Salah Satu">
							<option value=""> -pilih- </option>
							<?php foreach ($data3->result() as $row) { ?>
								<option value="<?php echo $row->id_pengajar; ?>"><?php echo $row->nama_pengajar; ?></option>
							<?php } ?>
						</select>
					</div>
				</div>
			</div>
		</div>
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
	</div>
<?php echo form_close(); ?>