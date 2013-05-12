
<div class="social">
	<ul>
		<li><?= $this->html->twitter(array(
			'text' => $this->title(), 
			'related' => 'madebyfieldwork')); ?></li>
		<li><?= $this->html->facebook(array(
			'picture' => $this->html->baseUrl() . $main_img, 
			'name' => $this->title(),
			'description' => '')); ?></li>
		<li><?= $this->html->pinterest(array(
			'media' => $this->html->baseUrl() . $main_img, 
			'description' => '')); ?></li>
		<li><?= $this->html->tumblr(array(
			'source' => $this->html->baseUrl() . $main_img, 
			'caption' => $this->title() . '. ' . $description)); ?></li>
	</ul>
</div>
