<!-- PAGE CONTENT BEGINS -->
<!-- <form class="form-horizontal" role="form"> -->
<?php echo form_open_multipart('admin/belireparasi/simpan', 'class="form-horizontal"'); ?>
	<div class="control-group">
		<div class="row">
			<div class="col-xs-12 col-sm-7">

				<div class="form-group">
					<label class="col-sm-2 control-label no-padding-right" for="form-field-1"> No. Pelayanan </label>

					<div class="col-sm-9">
						<input type="text" name="no" id="form-field-1" placeholder="No. Pelayanan" class="col-xs-10" readonly value="<?php echo $this->model_reparasi->get_kodeunik('reparasi'); ?>" required />
					</div>
				</div>

				<div class="form-group">
					<label class="col-sm-2 control-label no-padding-right" for="form-field-1-1"> Nama </label>

					<div class="col-sm-9">
						<input type="text" name="nama" id="form-field-1-1" placeholder="Nama" class="col-xs-10" required />
					</div>
				</div>

				<div class="form-group">
					<label class="col-sm-2 control-label no-padding-right" for="form-field-2"> No. Identitas </label>

					<div class="col-sm-9">
						<input type="text" name="noid" id="form-field-2" placeholder="No. Identitas" class="col-xs-10" required />
					</div>
				</div>

				<div class="form-group">
					<label class="col-sm-2 control-label no-padding-right" for="form-field-4">Telp</label>

					<div class="col-sm-9">
						<input type="text" name="telp" id="form-field-4" placeholder="Telp" class="col-xs-10" required />
					</div>
				</div>

				<div class="form-group">
					<label class="col-sm-2 control-label no-padding-right" for="form-field-5">E-mail</label>

					<div class="col-sm-9">
						<div class="clearfix">
							<input type="email" name="email" id="form-field-5" placeholder="E-mail" class="col-xs-10" required />
						</div>
					</div>
				</div>

				<div class="form-group">
					<label class="col-sm-2 control-label no-padding-right" for="form-field-5">Alamat</label>

					<div class="col-sm-9">
						<div class="clearfix">
							<textarea class="autosize-transition col-xs-10" name="alamat"></textarea>
						</div>
					</div>
				</div>

				<div class="form-group">
					<label class="col-sm-2 control-label no-padding-right" for="form-field-6">Pelayanan</label>
					
					<div class="col-sm-9">
						<!-- <select name="pilih" id="set">
							<option value=""></option>
							<option value="Alat">Pembelian Alat Lukis</option>
							<option value="Reparasi">Reparasi Lukisan</option>
							<option value="Reparasi">Reparasi &amp; Alat Lukis</option>
						</select> -->
						<div class="radio">
							<label>
								<input type="radio" id="set" class="ace" name="pilih[]" onclick="tampilhidden(0)" value="alat">
								<span class="lbl"> Pembelian Alat Lukis</span>
							</label>
						</div>

						<div class="radio">
							<label>
								<input type="radio" id="set" class="ace" name="pilih[]" onclick="tampilhidden(1)" value="reparasi">
								<span class="lbl"> Reparasi Lukisan</span>
							</label>
						</div>
					</div>
				</div>

				<fieldset title="Pembelian" id="templatehid" style="visibility: visible;">
					<div class="form-group">
						<label class="col-sm-2 control-label no-padding-right" for="form-field-6">Pembelian Item</label>

						<div class="col-sm-9">
							<div id="hs_jenis_alat"></div>
							<table class="table table-bordered table-hover">
								<thead>
									<tr>
										<th></th>
										<th width="30%">Item</th>
										<th>Banyak Item</th>
										<th>Harga</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td><input type="checkbox" id="item" class="checkbox" name="pilihitem" value="kuas"></td>
										<td>Kuas Lukis</td>
										<td><input class="textbox col-sm-12" type="text" id="jml" name=""></td>
										<td><input class="col-sm-12" type="text" id="harga" readonly name="pilih"></td>
									</tr>
									<tr>
										<td><input type="checkbox" id="item" class="checkbox" name="pilihitem" value="Kertas Lukis"></td>
										<td>Kertas Lukis</td>
										<td><input class="textbox col-sm-12" type="text" id="jml1" name=""></td>
										<td><input class="col-sm-12" type="text" id="harga1" readonly name="pilih"></td>
									</tr>
									<tr>
										<td><input type="checkbox" id="item" class="checkbox" name="pilihitem" value="kuas"></td>
										<td>Papan Lukis</td>
										<td><input class="textbox col-sm-12" type="text" id="jml2" name=""></td>
										<td><input class="col-sm-12" type="text" id="harga2" readonly name="pilih"></td>
									</tr>
									<tr>
										<td><input type="checkbox" id="item" class="checkbox" name="pilihitem" value="kuas"></td>
										<td>Cat Air</td>
										<td><input class="textbox col-sm-12" type="text" id="jml3" name=""></td>
										<td><input class="col-sm-12" type="text" id="harga3" readonly name="pilih"></td>
									</tr>
									<tr>
										<td><input type="checkbox" id="item" class="checkbox" name="pilihitem" value="kuas"></td>
										<td>Kanvas</td>
										<td><input class="textbox col-sm-12" type="text" id="jml4" name=""></td>
										<td><input class="col-sm-12" type="text" id="harga4" readonly name="pilih"></td>
									</tr>
									<tr>
										<td><input type="checkbox" id="item" class="checkbox" name="pilihitem" value="kuas"></td>
										<td>1 Set Alat Lukis</td>
										<td><input class="textbox col-sm-12" type="text" id="jml5" name=""></td>
										<td><input class="col-sm-12" type="text" id="harga5" readonly name="pilih"></td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
				</fieldset>
			</div>

			<div class="col-xs-12 col-sm-5">
				<div class="form-group">
					<label class="col-sm-4 control-label">Panjang Lukisan (cm)</label>

					<div class="col-sm-8">
						<div class="clearfix">
							<select class="chosen-select col-xs-9" id="form-field-select-3 fore" name="panjang_lukisan" data-placeholder="Pilih Salah Satu" required="">
								<option value=""> </option>
								<option value="A0">A0 -> 84.1 x 118.9</option>
								<option value="A1">A1 -> 59.4 x 84.1</option>
								<option value="A2">A2 -> 42.0 x 59.4</option>
								<option value="A3">A3 -> 29.7 x 42.0</option>
								<option value="A3+">A3+ -> 31.8 x 48.0</option>
								<option value="A4">A4 -> 21.0 x 29.7</option>
								<option value="A5">A5 -> 14.8 x 21.0</option>
								<option value="A6">A6 -> 10.5 x 14.8</option>
								<option value="A7">A7 -> 7.4 x 10.5</option>
								<option value="A8">A8 -> 5.2 x 7.4</option>
								<option value="A9">A9 -> 3.7 x 5.2</option>
								<option value="A10">A10 -> 2.6 x 3.7</option>
								<option value="B0">B0 -> 100.0 x 141.4</option>
								<option value="B1">B1 -> 70.7 x 100.0</option>
								<option value="B2">B2 -> 50.0 x 70.7</option>
								<option value="B3">B3 -> 35.3 x 50.0</option>
								<option value="B4">B4 -> 25.0 35.3</option>
								<option value="B5">B5 -> 17.6 x 25.0</option>
								<option value="B6">B6 -> 12.5 x 17.6</option>
								<option value="B7">B7 -> 8.8 x 12.5</option>
								<option value="B8">B8 -> 6.2 x 8.8</option>
								<option value="B9">B9 -> 4.4 x 6.2</option>
								<option value="B10">B10 -> 3.1 x 4.4</option>
								<option value="C0">C0 -> 91.7 x 129.7</option>
								<option value="C1">C1 -> 64.8 x 91.7</option>
								<option value="C2">C2 -> 45.8 x 64.8</option>
								<option value="C3">C3 -> 32.4 x 4.8</option>
								<option value="C4">C4 -> 22.9 x 32.4</option>
								<option value="C5">C5 -> 16.2 x 22.9</option>
								<option value="C6">C6 -> 11.4 x 16.2</option>
								<option value="C7">C7 -> 8.1 x 11.4</option>
								<option value="C8">C8 -> 5.7 x 8.1</option>
								<option value="2R">2R -> 6.0 x 9.0</option>
								<option value="3R">3R -> 8.9 x 12.7</option>
								<option value="4R">4R -> 10.2 x 15.2</option>
								<option value="5R">5R -> 12.7 x 17.8</option>
								<option value="6R">6R -> 15.2 x 20.3</option>
								<option value="8R">8R -> 20.3 x 25.4</option>
								<option value="8R+">8R+ -> 20.3 x 30.5</option>
								<option value="10R">9R -> 25.4 x 38.1</option>
								<option value="10R+">10R -> 27.9 x 43.2</option>
								<option value="11R">11R -> 27.9 x 35.6</option>
								<option value="11R+">11R+ -> 27.9 x 38.1</option>
								<option value="12R">12R -> 30.5 x 38.1</option>
								<option value="12R+">12R+ -> 30.5 x 46.5</option>
						</select>
						</div>
					</div>
				</div>

				<!-- <div class="form-group">
					<label class="col-sm-4 control-label">Estimasi Pembayaran</label>

					<div class="col-sm-8">
						<div class="clearfix">
							<input type="text" name="estimasi" id="estimasi" placeholder="Estimasi Pembayaran" class="form-control" required readonly="" />
						</div>
					</div>
				</div> -->

				<div class="form-group">
					<label class="col-sm-4 control-label no-padding-right" for="form-field-6">Cara Pembayaran</label>

					<div class="col-sm-8">
						<select class="col-xs-12" name="cara_pembayaran" required>
							<option value="">-Pilih-</option>
							<option value="Transfer">Transfer</option>
							<option value="Cash">Cash</option>
						</select>
					</div>
				</div>

				<div class="form-group">
					<label class="col-sm-4 control-label">Perkiraan Biaya</label>

					<div class="col-sm-8">
						<div class="clearfix">
							<input type="text" name="total_biaya" id="form-field-5" placeholder="Perkiraan Biaya" class="form-control" required readonly="" />
						</div>
					</div>
				</div>

				<div class="space-14"></div>
					<div class="form-group">
					<input type="file" class="form-control" id="id-input-file-2" name="file">
				</div>

				<div class="space-14"></div>
				<span class="lbl">Transfer Bank Mandiri <br> No. Rekening 3-234-123-44444-4 <br>A/n Bengkel Seni Lima Saudara</span>

				<div class="space-24"></div>
				<div class="space-24"></div>
				<div class="space-24"></div>
				<fieldset title="Pembelian" id="templatehid1" style="visibility: hidden;">
					<div class="form-group">
						<label class="col-sm-2 control-label no-padding-right" for="form-field-6">Pembelian Item</label>

						<div class="col-sm-9">
							<div id="hs_jenis_alat"></div>
							<table class="table table-bordered table-hover">
								<thead>
									<tr>
										<th></th>
										<th width="30%">Item</th>
										<th>Banyak Item</th>
										<th>Harga</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td><input type="checkbox" id="item" class="checkbox" name="pilihitem" value="kuas"></td>
										<td>Kuas</td>
										<td><input class="col-sm-12" type="text" id="jml6" name="pilihitem"></td>
										<td><input class="col-sm-12" type="text" id="harga6" readonly name="pilihitem"></td>
									</tr>
									<tr>
										<td><input type="checkbox" id="item" class="checkbox" name="pilihitem" value="Kertas Lukis"></td>
										<td>Kertas Lukis</td>
										<td><input class="col-sm-12" type="text" id="jml7" name="pilihitem"></td>
										<td><input class="col-sm-12" type="text" id="harga7" readonly name="pilihitem"></td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
				</fieldset>
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
	/*$(document).ready(function($){
		$("input[name='pilihitem']").click(function(){
			if($(this).is(':checked')){
				$('input.textbox.text').attr("disabled", false);
			}
			elseif($(this).not(':checked')){
				var ok = confirm('Are you sure?');
				if(ok){
					var remove = '';
					$('input.textbox.text').attr('value', remove);
					$('input.textbox.text').attr('disabled', true);
				};
			};
		});
	});*/

	window.onload=function(){
        $('#jam').on('change', function() {
            var jam = document.getElementById('jam').value;
            var hasil = parseInt(jam)*1000000;
            $('#estimasi').val(hasil);
        });

	    // $('#pilihitem').on('checked',)
	    // function enabledisable() {
	    // 	if(document.pilihitem.checked){
	    // 		document.pilih.disabled = true;
	    // 	} else {
	    // 		document.pilih.disabled = false
	    // 	}
	    // }
    }

    function tampilhidden(param){
    	if (param==0) {
    		document.getElementById("templatehid").style.visibility = "visible";
    		document.getElementById("templatehid1").style.visibility = "hidden";
    	}else if (param==1){
    		document.getElementById("templatehid").style.visibility = "hidden";
    		document.getElementById("templatehid1").style.visibility = "visible";
    	}
    }

    window.onload=function(){
    	$('#jml').on('change',function(){
    		var jml = document.getElementById('jml').value;
    		var hasil = parseInt(jml)*5000;
    		$('#harga').val(hasil);
    	});
    	$('#jml1').on('change',function(){
    		var jml = document.getElementById('jml1').value;
    		var hasil = parseInt(jml)*5000;
    		$('#harga1').val(hasil);
    	});
    	$('#jml2').on('change',function(){
    		var jml = document.getElementById('jml2').value;
    		var data1 = document.getElementById('harga').value;
    		var data2 = document.getElementById('harga1').value;
    		var hasil = parseInt(jml)*5000;
    		var tot = parseInt(data1) + parseInt(data2) + parseInt(hasil);
    		$('#harga2').val(hasil);
    		$('#total').val(tot);
    	});
    	$('#jml3').on('change',function(){
    		var jml = document.getElementById('jml3').value;
    		var hasil = parseInt(jml)*145000;
    		$('#harga3').val(hasil);
    	});
    	$('#jml4').on('change',function(){
    		var jml = document.getElementById('jml4').value;
    		var hasil = parseInt(jml)*65000;
    		$('#harga4').val(hasil);
    	});
    	$('#jml5').on('change',function(){
    		var jml = document.getElementById('jml5').value;
    		var hasil = parseInt(jml)*500000;
    		$('#harga5').val(hasil);
    	});
    	$('#jml6').on('change',function(){
    		var jml = document.getElementById('jml6').value;
    		var hasil = parseInt(jml)*65000;
    		$('#harga6').val(hasil);
    	});
    	$('#jml7').on('change',function(){
    		var jml = document.getElementById('jml7').value;
    		var hasil = parseInt(jml)*500000;
    		$('#harga7').val(hasil);
    	});

    	/*$('#fore').on('change', function(){
    		var selek = document.getElementById('fore').value;
    		var harga = 100000;
    		if ((selek == 'A7')) {
    			$('#estimasi').val(harga);
    		}else{
    			$('#total').val(selek);
    		}
    	});*/
    }

    jQuery(function($){

		autosize($('textarea[class*=autosize]'));

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

		if(!ace.vars['touch']) {
			$('.chosen-select').chosen({allow_single_deselect:true}); 
			//resize the chosen on window resize

			$(window)
			.off('resize.chosen')
			.on('resize.chosen', function() {
				$('.chosen-select').each(function() {
					 var $this = $(this);
					 $this.next().css({'width': $this.parent().width()});
				})
			}).trigger('resize.chosen');
			//resize chosen on sidebar collapse/expand
			$(document).on('settings.ace.chosen', function(e, event_name, event_val) {
				if(event_name != 'sidebar_collapsed') return;
				$('.chosen-select').each(function() {
					 var $this = $(this);
					 $this.next().css({'width': $this.parent().width()});
				})
			});


			$('#chosen-multiple-style .btn').on('click', function(e){
				var target = $(this).find('input[type=radio]');
				var which = parseInt(target.val());
				if(which == 2) $('#form-field-select-4').addClass('tag-input-style');
				 else $('#form-field-select-4').removeClass('tag-input-style');
			});
		}
    });
</script>