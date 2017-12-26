<!-- PAGE CONTENT BEGINS -->
<form class="form-horizontal" role="form" method="post" action="<?php echo base_url();; ?>admin/user/simpan">
	<div class="control-group">
		<div class="row">
			<div class="col-xs-12 col-sm-6">

				<div class="form-group">
					<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> ID Karyawan </label>

					<div class="col-sm-9">
						<input readonly type="text" id="form-field-1" name="id" placeholder="Username" class="ID Karyawan" value="<?php echo $id; ?>" required />
					</div>
				</div>

				<div class="form-group">
					<label class="col-sm-3 control-label no-padding-right" for="form-field-1-1"> Nama </label>

					<div class="col-sm-9">
						<input type="text" id="form-field-1-1" name="nama" placeholder="Nama Karyawan" class="col-xs-10" value="<?php echo $nama; ?>" required />
					</div>
				</div>

				<div class="form-group">
					<label class="col-sm-3 control-label no-padding-right" for="form-field-2"> Alamat </label>

					<div class="col-sm-9">
						<div class="clearfix">
							<textarea id="form-field-2" name="alamat" class="col-xs-10" required><?php echo $alamat; ?></textarea>
						</div>
					</div>
				</div>

				<div class="form-group">
					<label class="col-sm-3 control-label no-padding-right" for="form-field-3"> Telepon </label>

					<div class="col-sm-9">
						<input class="col-xs-10" type="text" id="form-field-3" name="telp" placeholder="Telepon" value="<?php echo $telp; ?>" required />
					</div>
				</div>

				<div class="form-group">
					<label class="col-sm-3 control-label no-padding-right" for="form-field-4"> E-mail </label>

					<div class="col-sm-9">
						<div class="clearfix">
							<input class="col-xs-10" type="email" id="form-field-4" name="email" placeholder="E-mail" value="<?php echo $email; ?>" required />
						</div>
					</div>
				</div>

				<div class="form-group">
					<label class="col-sm-3 control-label no-padding-right" for="form-field-5">Username</label>

					<div class="col-sm-9">
						<div class="clearfix">
							<input class="col-xs-10" type="text" id="form-field-5" name="username" placeholder="Username" value="<?php echo $username; ?>" required />
						</div>
					</div>
				</div>

				<div class="form-group">
					<label class="col-sm-4 control-label no-padding-right" for="form-field-8">User Group</label>

					<div class="col-sm-8">
						<select class="form-control" id="form-field-8" name="user_group" required>
							<option value="">-Pilih-</option>
							<option value="Administrator">Administrator</option>
							<option value="User">User</option>
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