<?php  $this->load->view('inc/nav.php'); ?>

<?php  $this->load->view('inc/slider.php'); ?>

<div class="bg-faded p-4 my-4">
        <?php foreach ($data->result() as $row) { ?>
        <hr class="divider">
        <h2 class="text-center text-lg text-uppercase my-0"><strong><?php echo $row->judul; ?></strong>
        </h2>
        <hr class="divider">
        <img class="img-fluid float-left mr-4 d-none d-lg-block" src="assets/dash/img/intro-pic.jpg" alt="">
        <p><?php echo $row->isi; ?></p>
      </div>
      <?php } ?>