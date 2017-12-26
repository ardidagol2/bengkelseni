<!-- PAGE CONTENT BEGINS -->
<form class="form-horizontal" role="form" method="post" action="<?php echo base_url(); ?>admin/pembayaran/simpan">
	<div class="control-group">
		<div class="row">
			<div class="col-xs-12 col-sm-12">

				<div class="form-group">
					<label class="col-sm-3 control-label no-padding-right" for="form-field-1" > No Pembayaran </label>

					<div class="col-sm-9">
						<input readonly="" type="text" id="form-field-1" name="no_bayar" placeholder="ID Pengajar" class="col-xs-9 col-sm-5"  value="<?php echo $this->model_pembayaran->get_kodeunik('pembayaran'); ?>" required />
					</div>
				</div>

				<div class="form-group">
					<label class="col-sm-3 control-label no-padding-right" for="form-field-1-1"> Tanggal </label>

					<div class="col-sm-9">
						<input type="date" id="form-field-1-1" name="tgl" class="col-xs-9 col-sm-5" required />
					</div>
				</div>

				<div class="form-group">
					<label class="col-sm-3 control-label no-padding-right" for="form-field-7">Nama Siswa</label>

					<div class="col-sm-9">
						<select  name="nis" class="chosen-select col-xs-9 col-sm-5" id="form-field-select-3" data-placeholder="Choose a State...">
							<option value="">--  Nama Siswa -- </option>
							<?php foreach ($data1->result()  as $row) { ?> 
								<option value="<?php echo $row->nis; ?> ">
									<?php echo $row->nama_siswa; ?>
								</option>
							<?php } ?>
						</select>
					</div>
				</div>

				<div class="form-group">
					<label class="col-sm-3 control-label no-padding-right" for="form-field-4">Nama Bayar</label>

					<div class="col-sm-9">
						<input class="col-xs-9 col-sm-5" type="text" id="form-field-4" name="nama" required/>
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
						<input data-rel="tooltip" type="text" class="col-xs-9 col-sm-5" id="jml" name="jumlah" placeholder="Jumlah Bayar" required />
					</div>
				</div>

				<div class="form-group">
					<label class="col-sm-3 control-label no-padding-right" for="form-input-readonly"> Total </label>

					<div class="col-sm-9">
						<input data-rel="tooltip" type="text" class="col-xs-9 col-sm-5" id="total" name="total" placeholder="Total Bayar"  required />
					</div>
				</div>

				<div class="form-group">
					<label class="col-sm-3 control-label no-padding-right" for="form-field-2"> Sisa Bayar </label>

					<div class="col-sm-9">
						<input type="text" id="tot" placeholder="Sisa Bayar" name="sisa" class="col-xs-9 col-sm-5" required value="4000000" readonly="" />
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
    		var hasil = 400000 - parseInt(jml);
    		$('#total').val(jml);
    		$('#tot').val(hasil);
    	});
    }
</script>