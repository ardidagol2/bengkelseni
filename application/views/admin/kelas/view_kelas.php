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
<a class="btn btn-primary" href="<?php echo base_url(); ?>admin/kelas/daftar">Daftar Siswa</a>

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
						<th>Kode Kelas</th>
						<th>Bidang Seni</th>
						<th>Jenis Kelas</th>
						<th class="hidden-480">Hari Belajar</th>
						<th class="hidden-480">Nama Kelas</th>
						<th class="hidden-480">Waktu</th>
						<th></th>
					</tr>
				</thead>

				<tbody>
					<tr>
					<?php
					$n=1;
					foreach ($data->result() as $row) {
						?>
						<td><?php echo $row->kode_kelas; ?></td>
						<td><?php echo $row->bidang_seni; ?></td>
						<td><?php echo $row->jenis_kelas; ?></td>
						<td><?php echo $row->hari_belajar; ?></td>
						<td><?php echo $row->nama_kelas; ?></td>
						<td><?php echo $row->waktu; ?></td>

						<td>
							<div class="hidden-sm hidden-xs btn-group">
								<a class="btn btn-xs btn-info" href="<?php echo base_url(); ?>admin/kelas/edit/<?php echo $row->kode_kelas; ?>" onclick="return confirm('Anda yakin ingin mengubah data..??')">
								<i class="ace-icon fa fa-pencil bigger-120"></i>
								</a>

								<!-- <a class="btn btn-xs btn-danger" href="<?php echo base_url(); ?>admin/kelas/hapus/<?php echo $row->kode_kelas; ?>" onclick="return confirm('Anda yakin ingin menghapus data..??')">
									<i class="ace-icon fa fa-trash-o bigger-120"></i>
								</a> -->
							</div>
						</td>
					</tr>
					<?php } ?>		
				</tbody>
			</table>
		</div>
	</div>
</div>