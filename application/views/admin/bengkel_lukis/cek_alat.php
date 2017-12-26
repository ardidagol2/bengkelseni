						<?php 
						$cari = $_GET['pilih'];
						if ($cari == "Alat") {
						?>
						
						<table class='table table-bordered table-hover'>
							<thead>
								<tr>
									<th></th>
									<th width='30%'>Item</th>
									<th>Banyak Item</th>
									<th>Harga</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td><input type='checkbox' id='item' class='checkbox' name='pilihitem' value='kuas'></td>
									<td>Kuas</td>
									<td><input class='col-sm-12' type='text' id='jml' name='pilihitem'></td>
									<td><input class='col-sm-12' type='text' id='harga' readonly name='pilihitem'></td>
								</tr>
								<tr>
									<td><input type='checkbox' id='item' class='checkbox' name='pilihitem' value='Kertas Lukis'></td>
									<td>Kertas Lukis</td>
									<td><input class='col-sm-12' type='text' id='jml1' name='pilihitem'></td>
									<td><input class='col-sm-12' type='text' id='harga1' readonly name='pilihitem'></td>
								</tr>
								<tr>
									<td><input type='checkbox' id='item' class='checkbox' name='pilihitem' value='kuas'></td>
									<td>Kuas</td>
									<td><input class='col-sm-12' type='text' id='jml2' name='pilihitem'></td>
									<td><input class='col-sm-12' type='text' id='harga2' readonly name='pilihitem'></td>
								</tr>
							</tbody>
						</table>
						<?php }elseif ($cari == "Reparasi") {
						?>
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
									<td><input class="col-sm-12" type="text" id="jml" name="pilihitem"></td>
									<td><input class="col-sm-12" type="text" id="harga" readonly name="pilihitem"></td>
								</tr>
								<tr>
									<td><input type="checkbox" id="item" class="checkbox" name="pilihitem" value="Kertas Lukis"></td>
									<td>Kertas Lukis</td>
									<td><input class="col-sm-12" type="text" id="jml1" name="pilihitem"></td>
									<td><input class="col-sm-12" type="text" id="harga1" readonly name="pilihitem"></td>
								</tr>
								<tr>
									<td><input type="checkbox" id="item" class="checkbox" name="pilihitem" value="kuas"></td>
									<td>Kuas</td>
									<td><input class="col-sm-12" type="text" id="jml2" name="pilihitem"></td>
									<td><input class="col-sm-12" type="text" id="harga2" readonly name="pilihitem"></td>
								</tr>
							</tbody>
						</table>
						<?php }elseif ($cari == "Reparasi & Alat") {
						?>
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
									<td><input class="col-sm-12" type="text" id="jml" name="pilihitem"></td>
									<td><input class="col-sm-12" type="text" id="harga" readonly name="pilihitem"></td>
								</tr>
								<tr>
									<td><input type="checkbox" id="item" class="checkbox" name="pilihitem" value="Kertas Lukis"></td>
									<td>Kertas Lukis</td>
									<td><input class="col-sm-12" type="text" id="jml1" name="pilihitem"></td>
									<td><input class="col-sm-12" type="text" id="harga1" readonly name="pilihitem"></td>
								</tr>
								<tr>
									<td><input type="checkbox" id="item" class="checkbox" name="pilihitem" value="kuas"></td>
									<td>Kuas</td>
									<td><input class="col-sm-12" type="text" id="jml2" name="pilihitem"></td>
									<td><input class="col-sm-12" type="text" id="harga2" readonly name="pilihitem"></td>
								</tr>
							</tbody>
						</table>
						<?php } ?>