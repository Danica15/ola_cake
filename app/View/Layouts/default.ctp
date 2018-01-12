<!DOCTYPE html>
<html lang="en">

<head>
	<!-- Basic Page Needs -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="description" content="OLA S.A.C.">
	<meta name="author" content="YO">
	<script src="js/sweet-alert.min.js"></script>
    <link rel="stylesheet" href="Themes/css/sweet-alert.css">
    <link rel="stylesheet" href="Themes/css/material-design-iconic-font.min.css">
    <link rel="stylesheet" href="Themes/css/normalize.css">
    <link rel="stylesheet" href="Themes/css/bootstrap.min.css">
    <link rel="stylesheet" href="Themes/css/jquery.mCustomScrollbar.css">
    <link rel="stylesheet" href="Themes/css/style.css">
    <link rel="stylesheet" href="Themes/css/login.css"/>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/jquery-1.11.2.min.js"><\/script>')</script>
    <script src="Themes/js/modernizr.js"></script>
    <script src="Themes/js/bootstrap.min.js"></script>
    <script src="Themes/js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="Themes/js/main.js"></script>
	<!-- Page Title -->
	<title> OLA - Operaciones Logísticas Alpamayo S.A.C. </title>

	<!-- Favicon -->
	<link rel="icon" type="/image/png" href="favicon.png">

	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Bootstrap core CSS -->
	<?php
		echo $this->Html->css('bootstrap.min');
	?>

	<!-- Font Awesome CSS -->
	<?php
		echo $this->Html->css('/fonts/font-awesome/css/font-awesome.min');
		echo $this->Html->css('flexslider');
		echo $this->Html->css('owl.carousel.min');
		echo $this->Html->css('owl.theme.min');
	?>
	<!-- Flex Slider -->

	<!-- Owl Carousel -->

	<!-- Custom styles for this template -->
	<?php
		echo $this->Html->css('style');
	?>
</head>

<body class="homepage">

	<!-- Preloader -->
	<div class="loader-wrapper">
		<div class="sk-cube-grid">
			<div class="sk-cube sk-cube1"></div>
			<div class="sk-cube sk-cube2"></div>
			<div class="sk-cube sk-cube3"></div>
			<div class="sk-cube sk-cube4"></div>
			<div class="sk-cube sk-cube5"></div>
			<div class="sk-cube sk-cube6"></div>
			<div class="sk-cube sk-cube7"></div>
			<div class="sk-cube sk-cube8"></div>
			<div class="sk-cube sk-cube9"></div>
		</div>
	</div>

	<!-- Page Wrapper
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
	<div class="wrapper">
		<!-- Header Section -->
		<?php echo $this->element('header'); ?>
		<!-- Header Section -->

		<!-- Main Content Section -->
		<main class="main">
		   <?php echo $this->fetch('content'); ?>
		</main>
		<!-- Main Content ** Section -->

		<!-- Footer Section -->
		<?php echo $this->element('footer'); ?>
		<!-- Footer Section -->

		<!-- back-to-top link -->
		<a href="#0" class="cd-top"> Top </a>
	</div>
	<!-- Page Wrapper
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->

	<!-- Javascripts
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->


	<!-- jQuery Flex Slider -->
	<!-- Jquery Library -->
	<?php echo $this->Html->script('jquery.min.js'); ?>

	<!-- Bootstrap core JavaScript -->
	<?php echo $this->Html->script('bootstrap.min.js'); ?>

	<!-- jQuery Flex Slider -->
	<?php echo $this->Html->script('jquery.flexslider-min.js'); ?>

	<!-- Owl Carousel -->
	<?php echo $this->Html->script('owl.carousel.min.js'); ?>

	<!-- Counter JS -->
	<?php echo $this->Html->script('waypoints.min.js'); ?>
	<?php echo $this->Html->script('jquery.counterup.min.js'); ?>

	<!-- Back to top -->
	<?php echo $this->Html->script('back-to-top.js'); ?>

	<!-- Form Validation -->
	<?php echo $this->Html->script('validate.js'); ?>

	<!-- Subscribe Form JS -->
	<?php echo $this->Html->script('subscribe.js'); ?>

	<!-- Main JS -->
	<?php echo $this->Html->script('main.js'); ?>

</body>

</html>
