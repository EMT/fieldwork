
<div class="content-wrapper">

	<?= $this->_render('element', $partial); ?>
	
</div>

<?php if (!empty($pages[$this_page - 1])) { ?>
	<a href="<?= $pages[$this_page - 1]; ?>" class="slider-nav" id="slider-prev">Previous</a>
<?php } ?>
<?php if (!empty($pages[$this_page + 1])) { ?>
	<a href="<?= $pages[$this_page + 1]; ?>" class="slider-nav" id="slider-next">Next</a>
<?php } ?>