<!-- PAGE CONTENT BEGINS -->
<!-- <form class="form-horizontal" role="form" method="post" action="<?php base_url(); ?>admin/pembayaran/simpan"> -->
	<?php echo form_open_multipart('admin/pembayaran/simpan', 'class="form-horizontal"') ?>
	<div class="control-group">
		<div class="row">
			<div class="col-xs-12 col-sm-12">

				<div class="form-group">
					<label class="col-sm-3 control-label no-padding-right" for="form-field-1" > No Pembayaran </label>

					<div class="col-sm-9">
						<input readonly="" type="text" id="form-field-1" name="no_bayar" placeholder="ID Pengajar" class="col-xs-9 col-sm-5"  value="<?php echo $no; ?>" required />
					</div>
				</div>

				<div class="form-group">
					<label class="col-sm-3 control-label no-padding-right" for="form-field-1-1"> Tanggal </label>

					<div class="col-sm-9">
						<input type="date" id="form-field-1-1" name="tgl" class="col-xs-9 col-sm-5" value=" <?php echo $tgl; ?>" required />
					</div>
				</div>

				<div class="form-group">
					<label class="col-sm-3 control-label no-padding-right" for="form-field-7">Nama Siswa</label>

					<div class="col-sm-9">
						<input type="text" id="form-field-1-1" name="nis" class="col-xs-9 col-sm-5" value=" <?php echo $nis; ?>" required />
					</div>
				</div>

				<div class="form-group">
					<label class="col-sm-3 control-label no-padding-right" for="form-field-4">Nama Bayar</label>

					<div class="col-sm-9">
						<input class="col-xs-9 col-sm-5" type="text" id="form-field-4" name="nama" value=" <?php echo $nama; ?>" required/>
					</div>
				</div>

				<div class="form-group">
					<label class="col-sm-3 control-label no-padding-right" for="form-field-5">Status Belajar</label>

				<div class="col-sm-9">
						<select name="status" id="status">
							<option value=""></option>
							<option value="Aktif">Aktif</option>
							<option value="Tidak Aktif">Tidak Aktif</option>
							<option value="Remidial">Remidial</option>
						</select>
					</div>
				</div>

				<div class="form-group">
					<label class="col-sm-3 control-label no-padding-right" for="form-input-readonly"> Jenis Bayar </label>

					<div class="col-sm-9">
						<select name="jenis" id="jenis">
							<option value=""></option>
							<option value="Transfer">Transfer</option>
							<option value="Cash">Cash</option>
						</select>
					</div>
				</div>

				<div class="form-group">
					<label class="col-sm-3 control-label no-padding-right" for="form-input-readonly"> Jumlah </label>

					<div class="col-sm-9">
						<input data-rel="tooltip" type="text" class="col-xs-9 col-sm-5" id="jml" name="jumlah" placeholder="Jumlah Bayar"  required />
					</div>
				</div>

				<div class="form-group">
					<label class="col-sm-3 control-label no-padding-right" for="form-input-readonly"> Total </label>

					<div class="col-sm-9">
						<input data-rel="tooltip" type="text" class="col-xs-9 col-sm-5" id="total" name="total" placeholder="Total Bayar" value=" <?php echo $total; ?>"  required />
					</div>
				</div>

				<div class="form-group">
					<label class="col-sm-3 control-label no-padding-right" for="form-field-2"> Sisa Bayar </label>

					<div class="col-sm-9">
						<input type="text" id="sisa" placeholder="Sisa Bayar" name="sisa" class="col-xs-9 col-sm-5" required value=" <?php echo $sisa; ?>" readonly="" />
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

<script>
	window.onload=function(){
    	$('#jml').on('change',function(){
    		var jml = document.getElementById('jml').value;
    		var sisa = document.getElementById('sisa').value;
    		var total = document.getElementById('total').value;
    		var hasil = parseInt(sisa) - parseInt(jml);
    		var hasil1 = parseInt(jml) + parseInt(total);
    		$('#total').val(hasil1);
    		$('#sisa').val(hasil);
    	});
    }
</script>