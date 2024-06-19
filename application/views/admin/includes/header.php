<!doctype html>
<html lang="en">

<head>

	<meta charset="utf-8" />
	<title><?= $title ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
	<meta content="Themesbrand" name="author" />
	<!-- App favicon -->
	<link rel="shortcut icon" href="<?= base_url() ?>assets/admin/images/favicon.ico">

	<!-- owl.carousel css -->
	<link rel="stylesheet" href="<?= base_url() ?>assets/admin/libs/owl.carousel/assets/owl.carousel.min.css">

	<link rel="stylesheet" href="<?= base_url() ?>assets/admin/libs/owl.carousel/assets/owl.theme.default.min.css">

	<!-- Bootstrap Css -->
	<link href="<?= base_url() ?>assets/admin/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
	<!-- Icons Css -->
	<link href="<?= base_url() ?>assets/admin/css/icons.min.css" rel="stylesheet" type="text/css" />
	<!-- App Css-->
	<link href="<?= base_url() ?>assets/admin/css/app.min.css" rel="stylesheet" type="text/css" />
	<!-- App js -->
	<script src="<?= base_url() ?>assets/admin/js/plugin.js"></script>

	<link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/admin/libs/toastr/build/toastr.min.css">

	<!-- DataTables -->
	<link href="<?= base_url() ?>assets/admin/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
	<link href="<?= base_url() ?>assets/admin/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />

	<!-- Responsive datatable examples -->
	<link href="<?= base_url() ?>assets/admin/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" />

	<script src="https://cdn.tiny.cloud/1/ycftth42azw2ec6zxp386kh8h9539xpz001kkxz4dblfxe81/tinymce/7/tinymce.min.js" referrerpolicy="origin"></script>

</head>

<?php
if ($type == 'login') {
?>

	<body class="auth-body-bg">
	<?php
} else {
	?>

		<body data-topbar="light" data-layout="horizontal">
		<?php
	}
		?>