
<div class="social">
	<ul>
		<li><?= $this->share->twitter(array(
			'text' => $this->title(), 
			'related' => 'madebyfieldwork')); ?></li>
		<li><?= $this->share->facebook(array(
			'picture' => $this->share->baseUrl() . $main_img, 
			'name' => $this->title(),
			'description' => '')); ?></li>
		<li><?= $this->share->pinterest(array(
			'media' => $this->share->baseUrl() . $main_img, 
			'description' => '')); ?></li>
		<li><?= $this->share->tumblr(array(
			'source' => $this->share->baseUrl() . $main_img, 
			'caption' => $this->title() . '. ' . $description)); ?></li>
	</ul>
</div>
