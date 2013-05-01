
<div id="slider">

	<div id="content-wrapper" data-urls='<?php echo json_encode($pages); ?>'>
	
		<?php echo $this->_render('element', $partial); ?>
		
	</div>
	
</div>

<div id="slider-nav">
	<?php if (!empty($pages[$this_page - 1])) { ?>
		<a href="<?php echo $h($pages[$this_page - 1]); ?>" class="slider-nav" id="slider-prev">Previous</a>
	<?php } ?>
	
	<?php if (!empty($pages[$this_page + 1])) { ?>
		<a href="<?php echo $h($pages[$this_page + 1]); ?>" class="slider-nav" id="slider-next">Next</a>
	<?php } ?>
</div>