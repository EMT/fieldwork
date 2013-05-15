

<?php 
$this->title('SewSew – Fieldwork');
$this->set(array('main_img' => '/img/work/sewsew/ss-header.jpg'));
$this->set(array('description' => 'Designer Maker Claire Walls creates beautiful, unique pieces using a range of different techniques from embroidery to screen printing.'));
extract($this->data());
?>


<article class="content-item work-item" id="item-<?= $pages[$this_page]; ?>">

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
		
			<p>Claire's passion for her craft is at the heart of every one of her creations, and she needed an identity that would convey the handmade, delicate and high quality nature of her work.</p>
			<p>We developed a marque along with a broader visual palette to work across a range of stationery and printed materials as well as branding for the products and packaging.</p>
			<p>We also designed and developed a simple e-commerce website for SewSew, putting the focus on the quality of SewSew’s products with imagery and clear, concise information. The new site is due to launch any time now. Watch this space.</p>
		</div>
	
		
		
		
		<div class="grid">
			
			<div class="full-width">
				<figure>
					<img src="/img/work/sewsew/ss-logo.svg" alt="" />
				</figure>
			</div>
			
			<div class="col-2-1">
				<figure>
					<img src="/img/work/sewsew/ss-7.jpg" alt="" />
				</figure>
			</div>
			<div class="col-2-1">
				<figure>
					<img src="/img/work/sewsew/ss-pattern.svg" alt="" />
				</figure>
			</div>
		
			<div class="col-2-1">
				<figure>
					<img src="/img/work/sewsew/ss-rollers.jpg" alt="" />
				</figure>
			</div>
			<div class="col-2-1">
				<figure>
					<img src="/img/work/sewsew/ss-patterndetail.svg    " alt="" />
				</figure>
			</div>
		
			<div class="full-width">
				<figure>
					<img src="/img/work/sewsew/ss-18.jpg" alt="" />
				</figure>
			</div>
			
			<div class="col-2-1">
				<figure>
					<img src="/img/work/sewsew/ss-14.jpg" alt="" />
				</figure>
			</div>
			<div class="col-2-1">
				<figure>
					<img src="/img/work/sewsew/ss-19.jpg" alt="" />
				</figure>
			</div>
		
			<div class="full-width">
				<figure>
					<img src="/img/work/sewsew/ss-16.jpg" alt="" />
				</figure>
			</div>
		
			<div class="full-width">
				<figure>
					<img src="/img/work/sewsew/ss-13.jpg" alt="" />
				</figure>
			</div>
			
			<div class="col-2-1">
				<figure>
					<img src="/img/work/sewsew/ss-17.jpg" alt="" />
				</figure>
			</div>
			<div class="col-2-1">
				<figure>
					<img src="/img/work/sewsew/ss-4.jpg" alt="" />
				</figure>
			</div>

			<div class="full-width">
				<figure>
					<img src="/img/work/sewsew/ss-21.jpg" alt="" />
				</figure>
			</div>
			
			<div class="col-2-1">
				<figure>
					<img src="/img/work/sewsew/ss-20.jpg" alt="" />
				</figure>
			</div>
			<div class="col-2-1">
				<figure>
					<img src="/img/work/sewsew/ss-22.jpg" alt="" />
				</figure>
			</div>
			
			<div class="full-width">
				<figure>
					<img src="/img/work/sewsew/ss-10.jpg" alt="" />
				</figure>
			</div>

		</div>
		
		
		
	</div>
	
</article>