<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>

<div style="margin-top: 10rem;"></div>

<div class="text-center " style="margin-bottom: 30px;">

	<img src="<?= base_url() ?>assets/frontend/icon/check.png" width="40" class="mb-3">
	<h6 class=" text-regular text-grey">BERHASIL!</h6>
	<h3 class="pink text-demibold">
		<?= $title ?>
	</h3>
</div>


<section class="faq-section container px-5 text-center">
	<p class="text16 text-medium text-grey mb-4">
		<?= $message ?>
	</p>

	<a href="<?= base_url('login') ?>" class="text-brown text-regular link ">
		KEMBALI KE HALAMAN UTAMA
	</a>
</section>

<div class="position-relative" style="z-index: -1; bottom: -35rem;">
	<img draggable="false" src="<?= IMAGE_FRONTEND ?>/mask-grey-r.png" alt="Background Image" class=" img-fluid background-img position-absolute bottom-0 end-0" />
</div>