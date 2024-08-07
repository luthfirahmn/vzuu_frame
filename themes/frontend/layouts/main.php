<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>VZUU</title>
	<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.3/font/bootstrap-icons.min.css" rel="stylesheet" />
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

	<!-- global style -->
	<link href="<?= CSS_FRONTEND_GLOBAL ?>" rel="stylesheet" type="text/css" />

	<!-- this page css -->
	<?php
	if (isset($css) && count($css) > 0) {
		for ($i = 0; $i < count($css); $i++) {
			echo '<link href="' . CSS_FRONTEND . "/" . $css[$i] . '" rel="stylesheet" type="text/css" />' . "\r\n\x20\x20\x20\x20";
		}
	}
	?>
</head>

<body>
	<a href="https://www.whatsapp.com/" target="_blank" class="whatsapp-icon">
		<img draggable="false" src="<?= IMAGE_FRONTEND ?>/whatsapp.png">
	</a>

	<?= isset($template['partials'][HEADER_FRONTEND]) ? $template['partials'][HEADER_FRONTEND] : '' ?>

	<?= $template['body'] ?>

	<?= isset($template['partials'][FOOTER_FRONTEND]) ? $template['partials'][FOOTER_FRONTEND] : '' ?>

	<div class="modal fade" id="searchModal" tabindex="-1" aria-labelledby="searchModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-dialog-fullscreen">
			<div class="modal-content">
				<div class="modal-body">
					<div class="search-bar">
						<div class="search-container">
							<i class="fas fa-search icon"></i>
							<input type="text" class="text-regular" placeholder="Apa yang Anda cari?">
							<i class="fas fa-arrow-right arrow"></i>
						</div>
						<span class="close-icon" data-bs-dismiss="modal" aria-label="Close">&times;</span>
						<!-- Close icon -->
					</div>
				</div>
			</div>
		</div>
	</div>

</body>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
<script src="<?= JS_FRONTEND_GLOBAL ?>"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.12.4/dist/sweetalert2.all.min.js"></script>
<?php
if (isset($js) && count($js) > 0) {
	for ($i = 0; $i < count($js); $i++) {
		echo '<script src="' . $js[$i] . '"></script>' . "\r\n\x20\x20\x20\x20";
	}
}
?>