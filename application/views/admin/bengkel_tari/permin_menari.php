<!-- PAGE CONTENT BEGINS -->
<!-- <form class="form-horizontal" role="form"> -->
<?php echo form_open_multipart('admin/pilihanmenari/simpan', 'class="form-horizontal"'); ?>
	<div class="control-group">
		<div class="row">
			<div class="col-xs-12 col-sm-6">

				<div class="form-group">
					<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> No. Pendaftaran </label>

					<div class="col-sm-9">
						<input class="col-xs-10" type="text" name="no" id="form-field-1" placeholder="No. Pendaftaran" readonly value="<?php echo $this->model_pilihantari->get_kodeunik('minta_menari'); ?>" required />
					</div>
				</div>

				<div class="form-group">
					<label class="col-sm-3 control-label no-padding-right" for="form-field-1-1"> Nama </label>

					<div class="col-sm-9">
						<input class="col-xs-10" type="text" name="nama" id="form-field-1-1" placeholder="Nama" required />
					</div>
				</div>

				<div class="form-group">
					<label class="col-sm-3 control-label no-padding-right" for="form-field-2"> No. Identitas </label>

					<div class="col-sm-9">
						<input class="col-xs-10" type="text" name="noid" id="form-field-2" placeholder="No. Identitas" required />
					</div>
				</div>

				<div class="form-group">
					<label class="col-sm-3 control-label no-padding-right" for="form-field-4">Telp</label>

					<div class="col-sm-9">
						<input class="col-xs-10" type="text" name="telp" id="form-field-4" placeholder="Telp" required />
					</div>
				</div>

				<div class="form-group">
					<label class="col-sm-3 control-label no-padding-right" for="form-field-5">E-mail</label>

					<div class="col-sm-9">
						<div class="clearfix">
							<input class="col-xs-10" type="email" name="email" id="form-field-5" placeholder="E-mail" required />
						</div>
					</div>
				</div>

				<div class="form-group">
					<label class="col-sm-3 control-label no-padding-right" for="form-field-5">Alamat</label>

					<div class="col-sm-9">
						<div class="clearfix">
							<textarea class="autosize-transition col-xs-10" name="alamat" placeholder="Alamat" required></textarea>
						</div>
					</div>
				</div>

				<div class="form-group">
					<label class="col-sm-3 control-label no-padding-right" for="form-field-6">Tanggal menari</label>

					<div class="col-sm-9">
						<input type="date" id="date-picker-1" name="tanggal" class="date-time-picker" required />
					</div>
				</div>

				<div class="space-4"></div>

				<div class="form-group">
					<label class="col-sm-3 control-label no-padding-right" for="form-field-6">Jenis Tarian</label>

					<div class="col-sm-9">
						<input class="col-xs-10" type="text" name="jenis_tari" id="form-field-5" placeholder="Jenis Tarian" required />
					</div>
				</div>
			</div>

			<div class="col-xs-12 col-sm-6">
				<div class="form-group">
					<label class="col-sm-4 control-label">Lama Waktu Menari</label>

					<div class="col-sm-8">
						<select class="form-control" id="jam" name="lama_tari" required>
							<option value="">-Pilih-</option>
							<option value="1">1 Jam</option>
							<option value="2">2 Jam</option>
							<option value="3">3 Jam</option>
							<option value="4">4 Jam</option>
							<option value="5">5 Jam</option>
							<option value="6">6 Jam</option>
							<option value="7">7 Jam</option>
						</select>
						<span>*) 1 jam senilai Rp. 1,000,000.00</span>
					</div>
				</div>

				<div class="form-group">
					<label class="col-sm-4 control-label">Estimasi Pembayaran</label>

					<div class="col-sm-8">
						<div class="clearfix">
							<input class="form-control" type="text" name="estimasi" id="estimasi" placeholder="Estimasi Pembayaran" readonly />
						</div>
					</div>
				</div>

				<div class="form-group">
					<label class="col-sm-4 control-label">Cara Pembayaran</label>

					<div class="col-sm-8">
						<select class="col-xs-9" name="cara_bayar" required>
							<option value="">-Pilih-</option>
							<option value="Transfer">Transfer</option>
							<option value="Cash">Cash</option>
						</select>
					</div>
				</div>

				<div class="space-14"></div>
				<div class="form-group">
					<label class="col-sm-3"></label>
					<div class="col-sm-8">
						<input type="file" class="col-xs-9" id="id-input-file-2" name="file">
					</div>
				</div>

				<div class="space-14"></div>
				<div class="form-group">
					<div class="col-sm-8">
						<span class="lbl col-xs-9">Transfer Bank Mandiri <br> No. Rekening 3-234-123-44444-4 <br>A/n Bengkel Seni Lima Saudara</span>
					</div>
				</div>
			</div>
		</div>

		<div class="space-4"></div>

		<div class="clearfix form-actions">
			<div class="col-md-offset-4 col-md-9">
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

<script>
	window.onload=function(){
        $('#jam').on('change', function() {
            var jam = document.getElementById('jam').value;
            var hasil = parseInt(jam)*1000000;
            $('#estimasi').val(hasil);
        });
    }

    jQuery(function($){
    	$('#id-input-file-1 , #id-input-file-2').ace_file_input({
			no_file:'No File ...',
			btn_choose:'Choose',
			btn_change:'Change',
			droppable:false,
			onchange:null,
			thumbnail:false //| true | large
			//whitelist:'gif|png|jpg|jpeg'
			//blacklist:'exe|php'
			//onchange:''
			//
		});

		autosize($('textarea[class*=autosize]'));

    });
</script>