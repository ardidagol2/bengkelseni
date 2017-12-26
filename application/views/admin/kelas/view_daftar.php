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
					  null, null, null, null, null, null, /*null,*/
					  { "bSortable": false }
					],
					"aaSorting": [],


					select: {
						style: 'multi'
					}
			    } );

			    $.fn.dataTable.Buttons.defaults.dom.container.className = 'dt-buttons btn-overlap btn-group btn-overlap';
				
				new $.fn.dataTable.Buttons( myTable, {
					buttons: [
					  {
						"extend": "colvis",
						"text": "<i class='fa fa-search bigger-110 blue'></i> <span class='hidden'>Show/hide columns</span>",
						"className": "btn btn-white btn-primary btn-bold",
						columns: ':not(:first):not(:last)'
					  },
					  {
						"extend": "copy",
						"text": "<i class='fa fa-copy bigger-110 pink'></i> <span class='hidden'>Copy to clipboard</span>",
						"className": "btn btn-white btn-primary btn-bold"
					  },
					  {
						"extend": "csv",
						"text": "<i class='fa fa-database bigger-110 orange'></i> <span class='hidden'>Export to CSV</span>",
						"className": "btn btn-white btn-primary btn-bold"
					  },
					  {
						"extend": "excel",
						"text": "<i class='fa fa-file-excel-o bigger-110 green'></i> <span class='hidden'>Export to Excel</span>",
						"className": "btn btn-white btn-primary btn-bold"
					  },
					  {
						"extend": "pdf",
						"text": "<i class='fa fa-file-pdf-o bigger-110 red'></i> <span class='hidden'>Export to PDF</span>",
						"className": "btn btn-white btn-primary btn-bold"
					  },
					  {
						"extend": "print",
						"text": "<i class='fa fa-print bigger-110 grey'></i> <span class='hidden'>Print</span>",
						"className": "btn btn-white btn-primary btn-bold",
						autoPrint: false,
						message: 'This print was produced using the Print button for DataTables'
					  }		  
					]
				} );
				myTable.buttons().container().appendTo( $('.tableTools-container') );
				
				//style the message box
				var defaultCopyAction = myTable.button(1).action();
				myTable.button(1).action(function (e, dt, button, config) {
					defaultCopyAction(e, dt, button, config);
					$('.dt-button-info').addClass('gritter-item-wrapper gritter-info gritter-center white');
				});
				
				var defaultColvisAction = myTable.button(0).action();
				myTable.button(0).action(function (e, dt, button, config) {
					
					defaultColvisAction(e, dt, button, config);
					
					
					if($('.dt-button-collection > .dropdown-menu').length == 0) {
						$('.dt-button-collection')
						.wrapInner('<ul class="dropdown-menu dropdown-light dropdown-caret dropdown-caret" />')
						.find('a').attr('href', '#').wrap("<li />")
					}
					$('.dt-button-collection').appendTo('.tableTools-container .dt-buttons')
				});
			
				////
			
				setTimeout(function() {
					$($('.tableTools-container')).find('a.dt-button').each(function() {
						var div = $(this).find(' > div').first();
						if(div.length == 1) div.tooltip({container: 'body', title: div.parent().text()});
						else $(this).tooltip({container: 'body', title: $(this).text()});
					});
				}, 500);
				
				myTable.on( 'select', function ( e, dt, type, index ) {
					if ( type === 'row' ) {
						$( myTable.row( index ).node() ).find('input:checkbox').prop('checked', true);
					}
				} );
				myTable.on( 'deselect', function ( e, dt, type, index ) {
					if ( type === 'row' ) {
						$( myTable.row( index ).node() ).find('input:checkbox').prop('checked', false);
					}
				} );
			})
	</script>
			
<!-- Modal -->
<?php 
$info = $this->session->flashdata('pesan');
if (!empty($info))
{
	echo $info;
}
 ?>

<div class="space-6"></div>

<a class="btn btn-success" href="<?php echo base_url(); ?>admin/kelas/tambah">Tambah Data Kelas</a>
<a class="btn btn-primary" href="<?php echo base_url(); ?>admin/kelas">Tampil Kelas</a>

<div class="space-24"></div>

<?php echo form_open_multipart('admin/kelas/simpan_detail', 'class="form-horizontal"') ?>
	<div class="control-group">
		<div class="row">
			<div class="col-xs-12 col-sm-6">

				<div class="form-group">
					<label class="col-sm-3 control-label no-padding-right" for="form-field-select-3">Pilih Kelas</label>

					<div class="col-sm-8">
						<select class="chosen-select col-xs-10" id="form-field-select-3" name="kode_kelas" data-placeholder="Pilih Salah Satu">
							<option value=""> -pilih- </option>
							<?php foreach ($data1->result() as $row) { ?>
								<option value="<?php echo $row->kode_kelas; ?>"><?php echo $row->nama_kelas; ?></option>
							<?php } ?>
						</select>
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

<div class="row">
	<div class="col-xs-12">

		<div class="clearfix">
			<div class="pull-right tableTools-container"></div>
		</div>
		<div class="table-header">
			Hasil Untuk "Data kelas Bengkel Seni"
		</div>

		<div>
			<table id="dynamic-table" class="table table-striped table-bordered table-hover">
				<thead>
					<tr>
						<th>NIS</th>
						<th class="hidden-480">Nama Siswa</th>
						<th class="hidden-480">kode Kelas</th>
						<th class="hidden-480">Nama Kelas</th>
						<th class="hidden-480">Nama Pengajar</th>
						<th></th>
					</tr>
				</thead>

				<tbody>
					<tr>
					<?php
					$n=1;
					foreach ($data->result() as $row) {
						// $siswa = $this->model_kelas->tampil_siswa($row->nama_siswa);
						// $kelas = $this->model_kelas->tampil_kelas($row->nama_kelas);
						// $pengajar = $this->model_kelas->tampil_pengajar($row->nama_pengajar);
						?>
						<td><?php echo $row->nis; ?></td>
						<td><?php echo $row->nama_siswa; ?></td>
						<td><?php echo $row->kode_kelas; ?></td>
						<td><?php echo $row->nama_kelas; ?></td>
						<td><?php echo $row->nama_pengajar; ?></td>

						<td>
							<div class="hidden-sm hidden-xs btn-group">
								<a class="btn btn-xs btn-danger" href="<?php echo base_url(); ?>admin/kelas/hapus_detail/<?php echo $row->nis; ?>" onclick="return confirm('Anda yakin ingin menghapus data..??')">
								<i class="ace-icon fa fa-trash bigger-120"></i>
								</a>
							</div>
						</td>
					</tr>
					<?php } ?>		
				</tbody>
			</table>
		</div>
	</div>
</div>

<script>
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
</script>