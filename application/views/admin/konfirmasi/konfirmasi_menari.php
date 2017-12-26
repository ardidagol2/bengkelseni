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
					  null, null, null, null, null, null, null, null, null, null, null,
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

<div class="row">
	<div class="col-xs-12">

		<div class="clearfix">
			<div class="pull-right tableTools-container"></div>
		</div>
		<div class="table-header">
			Hasil Untuk "Data Pendaftaran"
		</div>

		<!-- div.table-responsive -->

		<!-- div.dataTables_borderWrap -->
		<div>
			<table id="dynamic-table" class="table table-striped table-bordered table-hover">
				<thead>
					<tr>
						<th>No</th>
						<th>Nama</th>
						<th>No Identitas</th>
						<th class="hidden-480">Telepon</th>
						<th class="hidden-480">E-mail</th>
						<th class="hidden-480">Alamat</th>
						<th class="hidden-480">Tanggal Tari</th>
						<th class="hidden-480 center">Jenis Tari</th>
						<th class="hidden-480 center">Lama Tari</th>
						<th class="hidden-480 center">Cara Bayar</th>
						<th class="hidden-480 center">Bukti</th>
						<th></th>
					</tr>
				</thead>

				<tbody>
					<tr>
					<?php
					$n=1;
					foreach ($data->result() as $row) {
						?>
						<td><?php echo $row->no_permin; ?></td>
						<td><?php echo $row->nama; ?></td>
						<td><?php echo $row->no_id; ?></td>
						<td><?php echo $row->telp; ?></td>
						<td><?php echo $row->email; ?></td>
						<td><?php echo $row->alamat; ?></td>
						<td><?php echo $row->tgl_tari; ?></td>
						<td><?php echo $row->jenis_tari; ?></td>
						<td><?php echo $row->lama_tari; ?></td>
						<td><?php echo $row->cara_bayar; ?></td>
						<td class="hidden-480">
							<img class="thumbnails" src="<?php echo base_url(); ?>assets/struk_tf/<?php echo $row->file; ?>">
						</td>

						<td>
							<div class="hidden-sm hidden-xs btn-group">
								<?php
								if (empty($row->file) && $row->cara_bayar == 'Transfer') {
									echo "<button class=\"btn btn-xs btn-danger\" mailto=".$row->email.">Konfirmasi</button>";
									echo "<a href='kirimmenari' class='btn btn-xs btn-danger'>konfir</a>";
								}else{
									echo "<button class=\"btn btn-xs btn-success\" disabled >Confirmed</button>";
								}
								?>

							</div>
						</td>
					</tr>
					<?php } ?>		
				</tbody>
			</table>
		</div>
	</div>
</div>
