<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>

<!DOCTYPE html>

<html lang="en">

<head>
	<base href="../../" />
	<title>Error Page</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />

	<link href="<?= PLUGINS ?>/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
	<link href="<?= CSS ?>/style.bundle.css" rel="stylesheet" type="text/css" />
</head>


<body id="kt_body" onmousedown="return false" onselectstart="return false" class="app-blank bgi-size-cover bgi-position-center bgi-no-repeat">

	<div class="d-flex flex-column flex-root" id="kt_app_root">
		<style>
			body {
				background-image: url('<?= MEDIA ?>/images/bg7.jpg');
			}
		</style>
		<div class="d-flex flex-column flex-center flex-column-fluid">
			<div class="d-flex flex-column flex-center text-center p-10">
				<div class="card card-flush w-lg-650px py-5">
					<div class="card-body py-15 py-lg-20">

						<h1 class="fw-bolder fs-2hx text-gray-900 mb-4">Oops! <br> Sorry We can't find that page.</h1>

						<div class="mb-3">
							<img draggable="false" src="<?= MEDIA ?>/images/404-error.png" class="mw-100 mh-300px theme-light-show" alt="" />
						</div>

						<div class="mb-0">
							<a href="<?= BASE_URL . 'dashboard' ?>" class="btn btn-sm btn-primary">Return Home</a>
						</div>

					</div>
				</div>
			</div>
		</div>
	</div>
	<script>
		var hostUrl = "assets/";
	</script>
	<script src="<?= PLUGINS ?>/global/plugins.bundle.js"></script>
	<script src="<?= JS ?>/scripts.bundle.js"></script>
</body>

</html>