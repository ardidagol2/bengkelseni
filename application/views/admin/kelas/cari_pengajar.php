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
					  null, null, null, null, null, null, null, null, null,
					  { "bSortable": false }
					],
					"aaSorting": [],


					select: {
						style: 'multi'
					}
			    } );
			})
	</script>
			
<div class="space-6"></div>

<a class="btn btn-success" href="<?php echo base_url(); ?>admin/kelolapengajar">Tambah Data</a>

<div class="row">
	<div class="col-xs-12">

		<div class="clearfix">
			<div class="pull-right tableTools-container"></div>
		</div>
		<div class="table-header">
			Hasil Untuk "Data pengajar"
		</div>

		<!-- div.table-responsive -->

		<!-- div.dataTables_borderWrap -->
		<div>
			<table id="dynamic-table" class="table table-striped table-bordered table-hover">
				<thead>
					<tr>
						<th>No</th>
						<th>id</th>
						<th>Nama pengajar</th>
						<th class="hidden-480">Tempat Lahir</th>
						<th class="hidden-480">Tanggal Lahir</th>
						<th class="hidden-480">Alamat</th>
						<th class="hidden-480 center">Telephone</th>
						<th class="hidden-480">E-mail</th>
						<th></th>
					</tr>
				</thead>

				<tbody>
					<tr>
					<?php
					$n=1;
					foreach ($data->result() as $row) {
						?>
						<td><?php echo $n++; ?></td>
						<td><?php echo $row->id_pengajar; ?></td>
						<td><?php echo $row->nama_pengajar; ?></td>
						<td><?php echo $row->tempat; ?></td>
						<td><?php echo $row->tgl_lahir; ?></td>
						<td><?php echo $row->alamat; ?></td>
						<td><?php echo $row->telp; ?></td>
						<td><?php echo $row->email; ?></td>
					</tr>
					<?php } ?>		
				</tbody>
			</table>
		</div>
	</div>
</div>