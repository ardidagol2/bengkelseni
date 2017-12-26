<li class="active">
		<a href="<?php echo base_url(); ?>">
			<i class="menu-icon fa fa-tachometer"></i>
			<span class="menu-text"> Home </span>
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
			<a href="<?php echo base_url(); ?>kelastari">
				<i class="menu-icon fa fa-caret-right"></i>
				Kelas Bengkel Tari
			</a>

			<b class="arrow"></b>
		</li>

		<li class="">
			<a href="<?php echo base_url(); ?>pilihanmenari">
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
			<a href="<?php echo base_url(); ?>kelaslukis">
				<i class="menu-icon fa fa-caret-right"></i>
				Kelas Bengkel Lukis
			</a>

			<b class="arrow"></b>
		</li>

		<li class="">
			<a href="<?php echo base_url(); ?>belireparasi">
				<i class="menu-icon fa fa-caret-right"></i>
				Pembelian &amp; Reparasi
			</a>

			<b class="arrow"></b>
		</li>
	</ul>
</li>

<li class="">
	<a href="<?php echo base_url(); ?>pendaftaran">
		<i class="menu-icon fa fa-list-alt"></i>
		<span class="menu-text"> Pendaftaran </span>
	</a>

	<b class="arrow"></b>
</li>

<script>
	$(document).ready(function () {
        $('ul.main-menu li.active').removeClass('active');
		$('ul.main-menu li a').each(function () {
        if ($($(this))[0].href == String(window.location))
            $(this).parent().addClass('active');
    	});
	});
</script>