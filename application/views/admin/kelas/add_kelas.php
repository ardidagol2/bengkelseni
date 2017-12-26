	<script>
	jQuery(function($) {
				//initiate dataTables plugin
				$('.input-daterange').datepicker({autoclose:true});
				$('.date-picker').datepicker({
					autoclose: true,
					todayHighlight: true
				})
				var myTable = 
				$('#dynamic-table')
				//.wrap("<div class='dataTables_borderWrap' />")   //if you are applying horizontal scrolling (sScrollX)
				.DataTable( {
					// bAutoWidth: false,
					"aoColumns": [
					{"bSortable": false},
					  null, null, null
					],
					"aaSorting": [],
					select: {
						style: 'multi'
					}
			    } );
			})
	</script>
			

<!-- PAGE CONTENT BEGINS -->
<!-- <form class="form-horizontal" role="form"> -->
<?php echo form_open_multipart('admin/kelas/simpan', 'class="form-horizontal"') ?>
	<div class="control-group">
		<div class="row">
			<div class="col-xs-12 col-sm-6">

				<div class="form-group">
					<label class="col-sm-2 control-label no-padding-right" for="form-field-1"> Kode Kelas </label>

					<div class="col-sm-10">
						<input type="text" readonly name="kode_kelas" id="form-field-1" placeholder="No Pendaftaran" class="col-xs-10" value="<?php echo $this->model_kelas->get_kodeunik('kelas'); ?>" required />
					</div>
				</div>

				<div class="form-group">
					<label class="col-sm-2 control-label no-padding-right" for="form-field-1-1"> Bidang Seni </label>

					<div class="col-sm-10">
						<input type="text" name="bidang_seni" id="form-field-1-1" placeholder="Bidang Seni" class="col-xs-10" required />
					</div>
				</div>

				<div class="form-group">
					<label class="col-sm-2 control-label no-padding-right" for="form-field-2"> Jenis Kelas </label>

					<div class="col-sm-10">
						<input type="text" name="jenis_kelas" id="form-field-2" placeholder="Jenis Kelas" class="col-xs-10" required />
					</div>
				</div>

				<div class="form-group">
					<label class="col-sm-2 control-label no-padding-right" for="form-field-4">Hari Belajar</label>

					<div class="col-sm-10">
						<input class="col-xs-10" type="text" name="hari_belajar" id="form-field-4" placeholder="Hari Belajar" required />
					</div>
				</div>

				<div class="form-group">
					<label class="col-sm-2 control-label no-padding-right" for="form-field-5">Nama Kelas</label>

					<div class="col-sm-10">
						<div class="clearfix">
							<input class="col-xs-10" type="text" name="nama_kelas" id="form-field-5" placeholder="Nama Kelas" required />
						</div>
					</div>
				</div>

				<div class="form-group">
					<label class="col-sm-2 control-label no-padding-right">Waktu Belajar</label>

					<div class="col-sm-10">
						<div class="radio">
							<label>
								<input name="waktu" type="radio" class="ace" value="Pagi | 09.00 - 11.00" checked="" />
								<span class="lbl"> Pagi | 09.00 - 11.00</span>
							</label>
						</div>

						<div class=" radio">
							<label>
								<input name="waktu" type="radio" class="ace" value="Siang | 13.00 - 15.00" />
								<span class="lbl"> Siang | 13.00 - 15.00</span>
							</label>
						</div>

						<div class="radio">
							<label>
								<input name="waktu" type="radio" class="ace" value="Sore | 15.30 - 17.30" />
								<span class="lbl"> Sore | 05.30 - 17.30</span>
							</label>
						</div>
					</div>
				</div>

				<div class="form-group">
					<label class="col-sm-2 control-label no-padding-right" for="form-field-select-3">Pilih Pengajar</label>

					<div class="col-sm-8">
						<select class="chosen-select col-xs-10" id="form-field-select-3" name="pengajar" data-placeholder="Pilih Salah Satu">
							<option value=""> </option>
							<?php foreach ($data2->result() as $row) { ?>
								<option value="<?php echo $row->id_pengajar; ?>"><?php echo $row->nama_pengajar; ?></option>
							<?php } ?>
						</select>
					</div>
				</div>
				
			</div>

			<div class="col-xs-12 col-sm-6">
				
				<div class="form-group">
					<!-- <label class="col-sm-2 control-label no-padding-right" for="form-field-6">Pilih Siswa</label> -->

					<div class="col-sm-11">
						<!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bs-modal-siswa-add">Browse</button> -->
						<!-- div.table-responsive -->

						<!-- div.dataTables_borderWrap_table-responsive -->
						<div>
							<input type="hidden" name="kode_kls[]" value="<?php echo $this->model_kelas->get_kodeunik('kelas'); ?>">
							<table id="dynamic-table" class="table table-striped table-bordered table-hover">
								<thead>
									<tr>
										<th></th>
										<th>NIS</th>
										<th>Nama Siswa</th>
										<th class="hidden-480">Status Belajar</th>
									</tr>
								</thead>

								<tbody>
									<tr>
									<?php $no=1;
									foreach ($data1->result() as $row) {
										?>
										<td><input type="checkbox" name="nama[]" value="<?php echo $row->nis; ?>"></td>
										<td><?php echo $row->nis; ?></td>
										<td><?php echo $row->nama_siswa; ?></td>
										<td class="hidden-480"><?php echo $row->status_siswa; ?></td>
									</tr>
									<?php } ?>		
								</tbody>
							</table>
						</div>
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

<!-- Modal -->
<div class="modal fade bs-modal-siswa-add" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-md">
        <div class="modal-content">

            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
              </button>
              <h4 class="modal-title" id="myModalLabel">Tambah Siswa</h4>
            </div>
            <div class="modal-body">
				<div class="space-6"></div>
				<div class="row">
					<div class="col-xs-12">
						<div class="clearfix">
							<div class="pull-right tableTools-container"></div>
						</div>
						<div class="table-header">
							Hasil Untuk "Data user"
						</div>

						<!-- div.table-responsive -->

						<div class="dataTables_borderWrap">
						<div>
							<table id="dynamic-table" class="table table-striped table-bordered table-hover" id="tabeinput">
								<thead>
									<tr>
										<th>NIS</th>
										<th>Nama Siswa</th>
										<th class="hidden-480">Status Belajar</th>
										<th></th>
									</tr>
								</thead>

								<tbody>
									<tr>
									<?php $no=1;
									foreach ($data1->result() as $row) {
										?>
										<td><?php echo $row->nis; ?></td>
										<td><?php echo $row->nama_siswa; ?></td>
										<td class="hidden-480"><?php echo $row->status_siswa; ?></td>
									</tr>
									<?php } ?>		
								</tbody>
							</table>
						</div></div>
					</div>
				</div>
            </div>

            <div class="modal-footer">
            	<a class="btn btn-default" onclick="teimainput()" data-dismiss="modal">Close</a>
            	<button type="select" class="btn btn-primary">Pilih</button>
            </div>
        </div>
    </div>
</div>
<!-- End Modal -->

</form>

		<script src="<?php echo base_url(); ?>assets/js/chosen.jquery.min.js"></script>
<script>
	function displayresult(frm)
	{
		var selectpengajar = "";
		for(i = 0; i < frm.pengajar.length; i++)
		{
			if (frm.pengajar[i].checked)
			{
				selectpengajar += frm.pengajar[i].value + ", ";
			}
		}
		document.getElementById('result').value = selectpengajar;
	}

	function displayalert(frm)
	{
		var selectpengajar = "";
		for(i = 0; i < frm.pengajar.length; i++)
		{
			if (frm.pengajar[i].checked)
			{
				selectpengajar += frm.pengajar[i].value +", ";
			}
		}
		if (selectpengajar=="")
		{
			alert("Pilih Pengajar");
			frm.pengajar[0].focus;
			return false;
		}
		else
		alert("Buah favorit kamu : " + selectpengajar);
	}

	jQuery(function($) {

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

	function teimainput() {
		var x = document.forms['biodata']['nim'].value;
		var y = document.forms['biodata']['nim'].value;
		var z = document.forms['biodata']['nim'].value;

		var table = document.getElementById["tabeinput"];

		var row = table.insertRow(1);
		var cell1 = row.insertCell(0);
		var cell2 = row.insertCell(1);
		var cell3 = row.insertCell(2);

		cell1.innerHTML = x;
		cell2.innerHTML = y;
		cell3.innerHTML = z;

	}
</script>