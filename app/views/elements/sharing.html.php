
<div class="social">
	<ul>
		<li><?= $this->share->twitter(array(
			'text' => $this->title(), 
			'related' => 'madebyfieldwork')); ?></li>
		<li><?= $this->share->facebook(array(
			'picture' => $main_img, 
			'name' => $this->title(),
			'description' => '')); ?></li>
		<li><?= $this->share->pinterest(array(
			'media' => $main_img, 
			'description' => '')); ?></li>
		<li><?= $this->share->tumblr(array(
			'source' => $main_img, 
			'caption' => $this->title() . '. ' . $description)); ?></li>
	</ul>
</div>
