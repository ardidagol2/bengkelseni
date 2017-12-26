<?php  $this->load->view('inc/nav.php'); ?>


<div class="bg-faded p-4 my-4">
  <hr class="divider">
  <h2 class="text-center text-lg text-uppercase my-0">Formulir
    <strong>Pendaftaran</strong>
  </h2>
  <hr class="divider">
  <!-- PAGE CONTENT BEGINS -->
<!-- <form class="form-horizontal" role="form"> -->
<?php echo form_open_multipart('pendaftaran/simpan1', 'class="form-horizontal"') ?>
  <!-- <div class="control-group"> -->
    <div class="row">
      <div class="col-xs-12 col-lg-7">

        <div class="form-group col-lg-9">
          <label class="text-heading" for="form-field-1"> No. Pendaftaran </label>

          <div class="col-lg-9">
            <input type="text" name="no" id="form-field-1" placeholder="No Pendaftaran" class="form-control" readonly value="<?php echo $this->model_pendaftaran->get_kodeunik('pendaftaran'); ?>" />
          </div>
        </div>

        <div class="form-group">
          <label class="text-heading" for="form-field-1-1"> Nama </label>

          <div class="col-lg-9">
            <input type="text" name="nama" id="form-field-1-1" placeholder="nama Siswa" class="form-control" />
          </div>
        </div>

        <div class="form-group">
          <label class="text-heading" for="form-field-2"> No. Identitas </label>

          <div class="col-lg-9">
            <input type="text" name="noid" id="form-field-2" placeholder="No Identitas" class="form-control" />
          </div>
        </div>

        <div class="form-group">
          <label class="text-heading" for="form-field-4">Telepon</label>

          <div class="col-lg-9">
            <input type="text" name="telp" id="form-field-4" placeholder="Telepon" class="form-control" />
          </div>
        </div>

        <div class="form-group">
          <label class="text-heading" for="form-field-5">E-mail</label>

        <div class="col-lg-9">
            <div class="clearfix">
              <input type="text" name="email" id="form-field-5" placeholder="E-mail" class="form-control" />
            </div>
          </div>
        </div>

        <div class="form-group">
          <label class="text-heading" for="form-field-5">Alamat</label>

        <div class="col-lg-9">
            <div class="clearfix">
              <textarea name="alamat" class="form-control"></textarea>
            </div>
          </div>
        </div>

        <div class="form-group">
          <label class="text-heading" for="form-field-6">Pilih Bidang Seni</label>

          <div class="col-lg-9">
            <select class="form-control" name="pilihseni">
              <option value="">-Pilih-</option>
              <option value="Clasic">Clasic</option>
              <option value="Tematic">Tematic</option>
            </select>
          </div>
        </div>

        
      </div>
        
      <div class="col-xs-12 col-lg-5">
        <div class="form-group">
          <label class="text-heading" for="form-input-readonly"> Biaya Pendidikan </label>

          <div class="col-lg-9">
            <input hidden data-rel="tooltip" type="text" name="biaya" value="4000000" title="Biaya Pendidikan" data-placement="bottom" />
            <input readonly data-rel="tooltip" type="text" class="form-control" id="form-input-readonly" value="Rp. 4,000,000.00" title="Biaya Pendidikan" data-placement="bottom" />
          </div>
        </div>

        <div class="space-4"></div>

        <div class="form-group">
          <label class="text-heading" for="form-field-6">Pilih Kelas</label>

          <div class="col-lg-9">
            <select class="form-control" name="jenis_kelas">
              <option value="">-Pilih-</option>
              <option value="A">A</option>
              <option value="B">B</option>
              <?php
              // if (condition) {
              //  echo "<option value="">-Pilih-</option>";
              // }else{
              //  echo "<option value="">-Pilih-</option>";
              // }
              ?>
            </select>
          </div>
        </div>

        <div class="form-group">
          <label class="text-heading" for="form-field-6">Pilih Hari Belajar</label>

          <div class="col-lg-9">
            <select class="form-control" name="hari_belajar">
              <option value="">-Pilih-</option>
              <option value="Senin">Senin</option>
              <option value="Selasa">Selasa</option>
              <option value="Rabu">Rabu</option>
              <option value="Kamis">Kamis</option>
              <option value="Jumat">Jumat</option>
              <option value="Sabtu">Sabtu</option>
              <option value="Minggu">Minggu</option>
            </select>
          </div>
        </div>
        <div class="form-group">
          <label class="control-label bolder blue">Waktu Belajar</label>

          <div class="radio">
            <label>
              <input name="waktu" type="radio" class="ace" value="Pagi | 09. - 11.00" checked="" />
              <span class="lbl"> Pagi | 09.00 - 11.00</span>
            </label>
          </div>

          <div class="radio">
            <label>
              <input name="waktu" type="radio" class="ace" value="Siang | 13.00 - 15.00" />
              <span class="lbl"> Siang | 13.00 - 15.00</span>
            </label>
          </div>

          <div class="radio">
            <label>
              <input name="waktu" type="radio" class="ace" value="Sore | 05.30 - 17-30" />
              <span class="lbl"> Sore | 05.30 - 17.30</span>
            </label>
          </div>
        </div>

        <div class="space-24"></div>

        <div class="form-group">
          <label class="text-heading" for="form-field-6">Cara Pembayaran</label>

          <div class="col-lg-8">
            <select class="form-control" name="cara_bayar">
              <option value="">-Pilih-</option>
              <option value="Transfer">Transfer</option>
              <option value="Cash">Cash</option>
            </select>
          </div>
        </div>

        <div class="form-group">
          <div class="col-lg-8">
            <input type="file" name="fupload" class="form-control">
          </div>
        </div>
      </div>
    </div>

    <hr>

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
  <!-- </div> -->
</form>
</div>
