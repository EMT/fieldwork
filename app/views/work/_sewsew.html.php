

<?php 
$this->title('SewSew – Fieldwork');
$this->set(array('main_img' => '/img/work/sewsew/ss-header.jpg'));
$this->set(array('description' => 'Designer Maker Claire Walls creates beautiful, unique pieces using a range of different techniques from embroidery to screen printing.'));
extract($this->data());
?>


<article class="content-item" id="item-<?= $pages[$this_page]; ?>">

	<div class="content-inner">

		<h1>SewSew</h1>
		
		<figure class="hero">					
			<img src="<?= $main_img; ?>" alt="" />
		</figure>
		
		<div class="intro">
			<p class="runner"><?= $description; ?></p>
			<?= $this->_render('element', 'sharing', $this->data()); ?>
		</div>
		
		<div class="details">
			<p>Claire's passion for her craft is at the heart of every one of her creations. We wanted to create an identity that would convey the handmade, delicate nature of what she does. We developed the a marque and visual palette across a range of stationery and printed materials as well as branding for the products and packaging.</p>
			<p>We also designed and developed a simple e-commerce website for SewSew, due to launch any time now. Watch this space.</p>
		</div>
	
		
		
		<figure class="full-width grid">
			<img src="/img/work/sewsew/ss-20.png" alt="" />
		</figure>
		
		<div class="grid">
			<figure class="col-2-1">
				<img src="/img/work/sewsew/ss-7.jpg" alt="" />
			</figure>
			<figure class="col-2-1">
				<img src="/img/work/sewsew/ss-21.png" alt="" />
			</figure>
		</div>
		
		<div class="grid">
			<figure class="col-2-1">
				<img src="/img/work/sewsew/ss-rollers.jpg" alt="" />
			</figure>
			<figure class="col-2-1">
				<img src="/img/work/sewsew/ss-22.png" alt="" />
			</figure>
		</div>
		
		<figure class="full-width grid">
			<img src="/img/work/sewsew/ss-18.jpg" alt="" />
		</figure>
		
		<div class="grid">
			<figure class="col-2-1">
				<img src="/img/work/sewsew/ss-14.jpg" alt="" />
			</figure>
		</div>
		
		<figure class="full-width grid">
			<img src="/img/work/sewsew/ss-16.jpg" alt="" />
		</figure>
		
		<figure class="full-width grid">
			<img src="/img/work/sewsew/ss-13.jpg" alt="" />
		</figure>
		
		<div class="grid">
			<figure class="col-2-1">
				<img src="/img/work/sewsew/ss-17.jpg" alt="" />
			</figure>
			<figure class="col-2-1">
				<img src="/img/work/sewsew/ss-4.jpg" alt="" />
			</figure>
		</div>
		
		<figure class="full-width grid">
			<img src="/img/work/sewsew/ss-10.jpg" alt="" />
		</figure>
		
		
	</div>
	
</article>