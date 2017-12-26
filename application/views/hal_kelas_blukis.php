<?php  $this->load->view('inc/nav.php'); ?>


<div class="bg-faded p-4 my-4">
<hr class="divider">
<h2 class="text-center text-lg text-uppercase my-0">
  <strong>Bengkel Seni Lima Saudara</strong>
</h2>
<hr class="divider">
<div class="row">
  <div class="col-lg-4">
    <img class="img-fluid mb-4 mb-lg-0" src="assets/dash/img/slide-2.jpg" alt="">
  </div>
  <div class="col-lg-8">
    <h5><p>Bengkel Tari telah menghasilkan lulusan yang mahir dibidang seni menari sejak tahun 2017. Dalam kegiatan pembelajarannya hanya menerima 10 orang peserta dalam 1 kelas, durasi belajar 1 kali dalam seminggu dengan waktu 2 jam selama 3 bulan dan akan dilakukan ujian unruk mendapatkan sertifikat keahlian menari internal. Jika tisak lulus dalam ujian pertama maka diberikan kesempatan untuk mengulang dengan keringanan potongan 75. Biaya pendidikan dalam bengkel Tari sebesar Rp. 4.000.000.- sampai dengan ujian tidak termasuk peralatan materi, pembayaran bisa langsung ke Office atau via Transfer Bank Mandiri No. Rekening 3-234-123-44444-4 a/n Benkel Seni Lima Saudara dan kirim scan transfer ke <a href="<?php echo base_url(); ?>pendaftaran">Formulir Pendaftaran</a>. Kmai juga menerima permintaan menari yang bisa diakses pada <a href="<?php echo base_url(); ?>pilihanmenari">Permintaan Menari</a>.</p></h5>
  </div>
</div>
</div>

<?php foreach ($data->result() as $row) { ?>
<div class="bg-faded p-4 my-4">
  <h2 class="text-center text-lg text-uppercase my-0">
    <strong><?php echo $row->judul; ?></strong>
  </h2>
    <hr class="divider">
    <div class="row">
      <div class="col-lg-4">
        <img class="img-fluid mb-4 mb-lg-0" src="<?php echo base_url(); ?>assets/berita_img/<?php echo $row->image; ?>" alt="<?php echo base_url(); ?>assets/berita_img/<?php echo $row->image; ?>">
      </div>
      <div class="col-lg-8">
        <h5><p><?php echo $row->isi; ?></p></h5>
      </div>
    </div>
  </div>
<?php } ?>

</div>
