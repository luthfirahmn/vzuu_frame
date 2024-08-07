<?php
defined('BASEPATH') or exit('No direct script access allowed');

$config['assets_datatables'] = [
	'css' => array(
		PLUGINS . '/custom/datatables/datatables.bundle.css',
	),
	'js' => array(
		PLUGINS . '/custom/datatables/datatables.bundle.js',
	)
];

$config['assets_repeater'] = [
	'js' => array(
		PLUGINS . '/custom/formrepeater/formrepeater.bundle.js',
	)
];

$config['assets_xlsx'] = [
	'js' => array(
		PLUGINS . '/custom/xlsx/xlsx.min.js',
	)
];

$config['assets_ckeditor'] = [
	'js' => array(
		PLUGINS . '/custom/ckeditor/ckeditor-classic.bundle.js',
	)
];

$config['assets_pdf'] = [
	'js' => array(
		PLUGINS . '/custom/pdf/jspdf.umd.min.js',
	)
];
