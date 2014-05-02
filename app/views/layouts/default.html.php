<?= $this->_render('element', 'head'); ?>
<body class="<?= $body_classes; ?>">

	
	<?= $this->_render('element', 'header'); ?>
	
	<div id="main">

		<?php echo $this->content(); ?>	
	
	</div>
	
	
	<?= $this->_render('element', 'favourites'); ?>
	<?= $this->_render('element', 'footer'); ?>
	
	<script src="/js/jquery.min.js"></script>
	
	<!--[if IE 8]>
		<script src="/js/ss-social.js"></script>
	<!--<![endif]-->
	
	<!--[if ! lte IE 7]><!-->
		<script src="/js/bootstrap.js"></script>
	<!--<![endif]-->
	
	<!--[if lte IE 8]>
		<script>
			//	Replace SVG in non-supporting browsers
			$('img[src*="svg"]').attr('src', function() {
				return $(this).attr('src').replace('.svg', '.png');
			});
		</script>
	<!--<![endif]-->
	
	<script type="text/javascript">

	  var _gaq = _gaq || [];
	  _gaq.push(['_setAccount', 'UA-34217297-1']);
	  _gaq.push(['_setDomainName', 'madebyfieldwork.com']);
	  _gaq.push(['_trackPageview']);
	
	  (function() {
	    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
	    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
	    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	  })();
	
	</script>

</body>
</html>