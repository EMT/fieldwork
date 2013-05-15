<!doctype html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
	<?php echo $this->html->charset(); ?>

	<!--
	Welcome to the source.
	It's been our pleasure.
	-->

	<title><?= $this->title(); ?></title>
	
	<meta name="viewport" content="width=device-width">
	<!--[if ! lte IE 7]><!-->
		<?php echo $this->html->style(array(
			'style'
		), array(/* 'inline' => false */)); ?>
		<?php echo ($env !== 'development') ? $this->optimize->styles() : $this->styles(); ?>
	<!--<![endif]-->
	<!--[if IE 8]>
		<?php echo $this->html->style(array(
			'lt-ie9'
		)); ?>
	<!--<![endif]-->
	<!--[if lte IE 7]>
		<?php echo $this->html->style(array(
			'ie7'
		)); ?>
	<!--<![endif]-->
	<script src="/js/modernizr.js"></script>
</head>
<body class="<?= $body_classes; ?>">

	
	<?= $this->_render('element', 'header'); ?>
	
	<div id="main">

		<?php echo $this->content(); ?>	
	
	</div>
	
	
	<?= $this->_render('element', 'favourites'); ?>
	<?= $this->_render('element', 'footer'); ?>
	
	<script src="/js/jquery.min.js"></script>
	
	<!--[if IE 8]><!-->
		<script src="/js/ss-social.js"></script>
	<!--<![endif]-->
	
	<!--[if ! lte IE 7]><!-->
		<script src="/js/bootstrap.js"></script>
	<!--<![endif]-->
	
	<!--[if lte IE 8]><!-->
		<script>
			//	Replace SVG in non-supporting browsers
			$('img[src*="svg"]').attr('src', function() {
				return $(this).attr('src').replace('.svg', '.png');
			});
		</script>
	<!--<![endif]-->

</body>
</html>