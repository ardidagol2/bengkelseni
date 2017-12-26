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
					  null, null,null, null, null, 
					  { "bSortable": false }
					],
					"aaSorting": [],


					select: {
						style: 'multi'
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

<a class="btn btn-success" href="<?php echo base_url(); ?>admin/kelastari">Back</a>

<div class="row">
	<div class="col-xs-12">

		<div class="clearfix">
			<div class="pull-right tableTools-container"></div>
		</div>
		<div class="table-header">
			Hasil Untuk "Data Berita"
		</div>

		<!-- div.table-responsive -->

		<!-- div.dataTables_borderWrap -->
		<div>
			<table id="dynamic-table" class="table table-striped table-bordered table-hover">
				<thead>
					<tr>
						<th>ID</th>
						<th>Judul</th>
						<th>Isi</th>
						<th>Tanggal</th>
						<th class="hidden-480">Gambar</th>
						<th></th>
					</tr>
				</thead>

				<tbody>
					<tr>
					<?php
					$n=1;
					foreach ($data->result() as $row) {
						?>
						<td><?php echo $row->id; ?></td>
						<td><?php echo $row->judul; ?></td>
						<td><?php echo $row->isi; ?></td>
						<td><?php echo $row->tgl; ?></td>
						<td><img height="120" src="<?php echo base_url(); ?>assets/berita_img/<?php echo $row->image; ?>"></td>
						<td>
							<div class="hidden-sm hidden-xs btn-group">
								<!-- <a class="btn btn-xs btn-info" href="<?php echo base_url(); ?>admin/kelastari/edit/<?php echo $row->id; ?>" onclick="return confirm('Anda yakin ingin mengubah data..??')">
								<i class="ace-icon fa fa-pencil bigger-120"></i>
								</a>-->
								
								<a class="btn btn-xs btn-danger" href="<?php echo base_url(); ?>admin/kelastari/hapus/<?php echo $row->id; ?>" onclick="return confirm('Anda yakin ingin menghapus data..??')">
									<i class="ace-icon fa fa-trash-o bigger-120"></i>
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
