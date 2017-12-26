<li class="active">
		<a class="aja" href="<?php echo base_url(); ?>admin/home">
			<i class="menu-icon fa fa-tachometer"></i>
			<span class="menu-text"> Dashboard </span>
		</a>

		<b class="arrow"></b>
	</li>

<li class="">
	<a href="#" class="dropdown-toggle">
		<i class="menu-icon fa fa-desktop"></i>
		<span class="menu-text">
			Bengkel Tari
		</span>

		<b class="arrow fa fa-angle-down"></b>
	</a>

	<b class="arrow"></b>

	<ul class="submenu">
		<li class="">
			<a class="aja" href="<?php echo base_url(); ?>admin/kelastari">
				<i class="menu-icon fa fa-caret-right"></i>
				Kelas Bengkel Tari
			</a>

			<b class="arrow"></b>
		</li>

		<li class="">
			<a class="aja" href="<?php echo base_url(); ?>admin/pilihanmenari">
				<i class="menu-icon fa fa-caret-right"></i>
				Pilihan Menari
			</a>

			<b class="arrow"></b>
		</li>
	</ul>
</li>

<li class="">
	<a href="#" class="dropdown-toggle">
		<i class="menu-icon fa fa-list"></i>
		<span class="menu-text"> Bengkel Lukis </span>

		<b class="arrow fa fa-angle-down"></b>
	</a>

	<b class="arrow"></b>

	<ul class="submenu">
		<li class="">
			<a class="aja" href="<?php echo base_url(); ?>admin/kelaslukis">
				<i class="menu-icon fa fa-caret-right"></i>
				Kelas Bengkel Lukis
			</a>

			<b class="arrow"></b>
		</li>

		<li class="">
			<a class="aja" href="<?php echo base_url(); ?>admin/belireparasi">
				<i class="menu-icon fa fa-caret-right"></i>
				Pembelian &amp; Reparasi
			</a>

			<b class="arrow"></b>
		</li>
	</ul>
</li>

<li class="">
	<a class="aja" href="<?php echo base_url(); ?>admin/pendaftaran/view">
		<i class="menu-icon fa fa-list-alt"></i>
		<span class="menu-text"> Pendaftaran </span>
	</a>

	<b class="arrow"></b>
</li>

<li class="">
	<a href="#" class="dropdown-toggle">
		<i class="menu-icon fa fa-tag"></i>
		<span class="menu-text"> Operasional </span>

		<b class="arrow fa fa-angle-down"></b>
	</a>

	<b class="arrow"></b>

	<ul class="submenu">
		<li class="">
			<a class="aja" href="<?php echo base_url(); ?>admin/siswa">
				<i class="menu-icon fa fa-caret-right"></i>
				Data Siswa
			</a>

			<b class="arrow"></b>
		</li>

		<li class="">
			<a class="aja" href="<?php echo base_url(); ?>admin/pengajar">
				<i class="menu-icon fa fa-caret-right"></i>
				Data Pengajar
			</a>

			<b class="arrow"></b>
		</li>

		<li class="">
			<a class="aja" href="<?php echo base_url(); ?>admin/kelas">
				<i class="menu-icon fa fa-caret-right"></i>
				Data Kelas
			</a>

			<b class="arrow"></b>
		</li>

		<li class="">
			<a class="aja" href="<?php echo base_url(); ?>admin/pembayaran">
				<i class="menu-icon fa fa-caret-right"></i>
				Data Pembayaran
			</a>

			<b class="arrow"></b>
		</li>
	</ul>
</li>
<?php if (($this->session->userdata('group_user') == 'Administrator') or ($this->session->userdata('group_user') == 'administrator')) { ?>

<li class="">
	<a href="#" class="dropdown-toggle">
		<i class="menu-icon fa fa-file-o"></i>

		<span class="menu-text">
			Administrasi

			<span class="badge badge-primary">4</span>
		</span>

		<b class="arrow fa fa-angle-down"></b>
	</a>

	<b class="arrow"></b>

	<ul class="submenu">
		<li class="">
			<a class="aja" href="<?php echo base_url(); ?>admin/user">
				<i class="menu-icon fa fa-caret-right"></i>
				Data User
			</a>

			<b class="arrow"></b>
		</li>

		<li class="">
			<a class="aja" href="<?php echo base_url(); ?>admin/konfirmasi/konfirmasi_menari">
				<i class="menu-icon fa fa-caret-right"></i>
				Konfirmasi Menari
			</a>

			<b class="arrow"></b>
		</li>

		<li class="">
			<a class="aja" href="<?php echo base_url(); ?>admin/konfirmasi/konfirmasi_reparasi">
				<i class="menu-icon fa fa-caret-right"></i>
				Konfirmasi Pembelian &amp; Reparasi
			</a>

			<b class="arrow"></b>
		</li>

		<li class="">
			<a class="aja" href="<?php echo base_url(); ?>admin/konfirmasi">
				<i class="menu-icon fa fa-caret-right"></i>
				Konfirmasi Pendaftaran
			</a>

			<b class="arrow"></b>
		</li>
	</ul>
<?php }else{ ?>
	<ul></ul>
</li>

<?php } ?>

<script>
	$(document).ready(function () {
        $('ul.main-menu li.active').removeClass('active');
		$('ul.main-menu li a').each(function () {
        if ($($(this))[0].href == String(window.location))
            $(this).parent().addClass('active');
    	});
	});
</script>