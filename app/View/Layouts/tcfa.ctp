<!DOCTYPE html>
<html>
<head>
<?php echo $this->Html->charset(); ?>
<title><?php echo $title_for_layout; ?></title>
	<!-- 1140px Grid styles for IE -->
	<!--[if lte IE 9]><link rel="stylesheet" href="css/ie.css" type="text/css" media="screen" /><![endif]-->
	<?php
		echo $this->Html->meta('icon');

		echo $this->Html->css('1140');
		echo $this->Html->css('tcfa');

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>


</head>
<body>
<div id="fb-root"></div>
<script>(function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
    fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<div id="wrapper" class="container"><!-- #wrapper -->

	<div class="row" id="header">
			<div class="row">
			<?php echo $this->Session->flash(); ?>
			</div>
			<?php echo $this->element('navigation') ?>
	</div>

	<div class="row" id="main-content">

		<div class="ninecol">
			<div id="content">
			<?php echo $this->fetch('content') ?>
			</div><!-- content -->
		</div>

		<div id="sidebar" class="threecol last">
			<?php echo $this->element('sidebar') ?>
		</div><!-- sidebar loppuu -->

	</div>

	<div class="row">
		<div id="footer" class="twelvecol">
			<?php echo $this->element('footer') ?>
		<div>
	</div>

<div>
