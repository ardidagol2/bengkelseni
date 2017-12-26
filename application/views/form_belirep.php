<!-- PAGE CONTENT BEGINS -->
<!-- <form class="form-horizontal" role="form"> -->
<?php echo form_open_multipart('belireparasi/simpan', 'class="form-horizontal"'); ?>
	<div class="control-group">
		<div class="row">
			<div class="col-xs-12 col-sm-7">

				<div class="form-group">
					<label class="col-sm-2 control-label no-padding-right" for="form-field-1"> No. Pelayanan </label>

					<div class="col-sm-9">
						<input type="text" name="no" id="form-field-1" placeholder="No. Pelayanan" class="col-xs-10" readonly value="<?php echo $this->model_reparasi->get_kodeunik('reparasi'); ?>" />
					</div>
				</div>

				<div class="form-group">
					<label class="col-sm-2 control-label no-padding-right" for="form-field-1-1"> Nama </label>

					<div class="col-sm-9">
						<input type="text" name="nama" id="form-field-1-1" placeholder="Nama" class="col-xs-10" />
					</div>
				</div>

				<div class="form-group">
					<label class="col-sm-2 control-label no-padding-right" for="form-field-2"> No. Identitas </label>

					<div class="col-sm-9">
						<input type="text" name="noid" id="form-field-2" placeholder="No. Identitas" class="col-xs-10" />
					</div>
				</div>

				<div class="form-group">
					<label class="col-sm-2 control-label no-padding-right" for="form-field-4">Telp</label>

					<div class="col-sm-9">
						<input type="text" name="telp" id="form-field-4" placeholder="Telp" class="col-xs-10" />
					</div>
				</div>

				<div class="form-group">
					<label class="col-sm-2 control-label no-padding-right" for="form-field-5">E-mail</label>

					<div class="col-sm-9">
						<div class="clearfix">
							<input type="email" name="email" id="form-field-5" placeholder="E-mail" class="col-xs-10" />
						</div>
					</div>
				</div>

				<div class="form-group">
					<label class="col-sm-2 control-label no-padding-right" for="form-field-5">Alamat</label>

					<div class="col-sm-9">
						<div class="clearfix">
							<textarea class="col-xs-10" name="alamat"></textarea>
						</div>
					</div>
				</div>

				<div class="form-group">
					<label class="col-sm-2 control-label no-padding-right" for="form-field-6">Pelayanan</label>

					<div class="col-sm-9">
						<select class="col-xs-10" name="pelayanan" class="multiselect" multiple>
							<option value="">-Pilih-</option>
							<option value="1">-Pilih-</option>
							<option value="2">-Pilih-</option>
							<?php
							// if (condition) {
							// 	echo "<option value="">-Pilih-</option>";
							// }else{
							// 	echo "<option value="">-Pilih-</option>";
							// }
							?>
						</select>
					</div>
				</div>

				<div class="form-group">
					<label class="col-sm-2 control-label no-padding-right" for="form-field-6">Pembelian Item</label>

					<div class="col-sm-9">
						<table class="table table-bordered table-hover">
							<thead>
								<tr>
									<th>Pilih Item</th>
									<th>Banyak Item</th>
									<th>Harga</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td><input type="checkbox" id="item" class="checkbox" name="pilihitem" value="kuas">Kuas</td>
									<td><input type="text" id="jml" name="pilihitem"></td>
									<td><input type="text" id="harga" readonly name="pilihitem"></td>
								</tr>
								<tr>
									<td><input type="checkbox" id="item" class="checkbox" name="pilihitem" value="kuas">Kuas</td>
									<td><input type="text" id="jml1" name="pilihitem"></td>
									<td><input type="text" id="harga1" readonly name="pilihitem"></td>
								</tr>
								<tr>
									<td><input type="checkbox" id="item" class="checkbox" name="pilihitem" value="kuas">Kuas</td>
									<td><input type="text" id="jml2" name="pilihitem"></td>
									<td><input type="text" id="harga2" readonly name="pilihitem"></td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>

			<div class="col-xs-12 col-sm-5">
				<div class="form-group">
					<label class="col-sm-4 control-label">Panjang Lukisan</label>

					<div class="col-sm-8">
						<div class="clearfix">
							<input type="text" name="panjang_lukisan" id="form-field-5" placeholder="Panjang Lukisan" class="form-control" />
						</div>
					</div>
				</div>

				<div class="form-group">
					<label class="col-sm-4 control-label">Estimasi Pembayaran</label>

					<div class="col-sm-8">
						<div class="clearfix">
							<input type="text" name="estimasi" id="form-field-5" placeholder="Estimasi Pembayaran" class="form-control" />
						</div>
					</div>
				</div>

				<div class="form-group">
					<label class="col-sm-4 control-label no-padding-right" for="form-field-6">Cara Pembayaran</label>

					<div class="col-sm-8">
						<select name="cara_pembayaran">
							<option value="Pembelian Alat Tulis">Pembelian Alat Tulis</option>
							<option value="Reparasi Lukisan">Reparasi Lukisan</option>
						</select>
					</div>
				</div>

				<div class="form-group">
					<label class="col-sm-4 control-label">Perkiraan Biaya</label>

					<div class="col-sm-8">
						<div class="clearfix">
							<input type="text" name="total_biaya" id="form-field-5" placeholder="Perkiraan Biaya" class="form-control" />
						</div>
					</div>
				</div>

				<div class="space-14"></div>
					<div class="form-group">
					<input type="file" class="form-control" name="fupload">
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

<script>
	window.onload=function(){
        $('#jam').on('change', function() {
            var jam = document.getElementById('jam').value;
            var hasil = parseInt(jam)*1000000;
            $('#estimasi').val(hasil);
        });
    }

    window.onload=function(){
    	$('#jml').on('change',function(){
    		var jml = document.getElementById('jml').value;
    		var hasil = parseInt(jml)*5000;
    		$('#harga').val(hasil);
    	})
    	$('#jml1').on('change',function(){
    		var jml = document.getElementById('jml1').value;
    		var hasil = parseInt(jml)*5000;
    		$('#harga1').val(hasil);
    	})
    	$('#jml2').on('change',function(){
    		var jml = document.getElementById('jml2').value;
    		var hasil = parseInt(jml)*5000;
    		$('#harga2').val(hasil);
    	})
    	var tot = 
    	$('#total').val()
    }

    jQuery(function($){
    	$('.multiselect').multiselect({
		 enableFiltering: true,
		 enableHTML: true,
		 buttonClass: 'btn btn-white btn-primary',
		 templates: {
			button: '<button type="button" class="multiselect dropdown-toggle" data-toggle="dropdown"><span class="multiselect-selected-text"></span> &nbsp;<b class="fa fa-caret-down"></b></button>',
			ul: '<ul class="multiselect-container dropdown-menu"></ul>',
			filter: '<li class="multiselect-item filter"><div class="input-group"><span class="input-group-addon"><i class="fa fa-search"></i></span><input class="form-control multiselect-search" type="text"></div></li>',
			filterClearBtn: '<span class="input-group-btn"><button class="btn btn-default btn-white btn-grey multiselect-clear-filter" type="button"><i class="fa fa-times-circle red2"></i></button></span>',
			li: '<li><a tabindex="0"><label></label></a></li>',
	        divider: '<li class="multiselect-item divider"></li>',
	        liGroup: '<li class="multiselect-item multiselect-group"><label></label></li>'
		 }
		});
    })
</script>