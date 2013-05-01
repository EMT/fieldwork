<!doctype html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
	<meta charset="utf-8">

	<!--
	Welcome to the source.
	It's been our pleasure.
	-->

	<title><?= $this->title(); ?></title>
	
	<meta name="viewport" content="width=device-width">
	<link rel="stylesheet" href="/css/style.css">
	<script src="/js/modernizr.js"></script>
</head>
<body class="<?= $body_classes; ?>">

	
	<?= $this->_render('element', 'header'); ?>
	
	<div id="main">

		<?php echo $this->content(); ?>	
	
	</div>
	
	
	<?= $this->_render('element', 'index'); ?>
	<?= $this->_render('element', 'footer'); ?>
	

	<script src="/js/jquery.min.js"></script>
	<script src="/js/bootstrap.js"></script>

</body>
</html>