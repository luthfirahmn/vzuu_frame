<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>

<style>
	body {
		background: radial-gradient(circle at top left, #f1c3ce -10%, #fcf7f2, transparent 55%);
	}
</style>

<div class="container animatable fadeInUp mb-5" style="margin-top: 100px;">
	<div class="text-center" style="padding-top: 50px;">
		<h6 class="text-regular title_terms"></h6>
		<h3 class="mb-4 pink text-demibold subtitle_terms"></h3>
	</div>
</div>

<section class="terms-section container animatable fadeInUp">
	<div class="pb-2 lh-0" id="content_terms">
	</div>
</section>

<div class="position-relative" style="z-index: -1; bottom: -35rem;">
	<img draggable="false" src="<?= IMAGE_FRONTEND ?>/mask-grey-r.png" alt="Background Image" class="img-fluid background-img position-absolute bottom-0 end-0" />
</div>