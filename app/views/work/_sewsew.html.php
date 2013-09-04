

<?php 
$this->title('SewSew – Fieldwork');
$this->set(array('main_img' => $img_base . '/work/sewsew/ss-header.jpg'));
$this->set(array('description' => 'Designer Maker Claire Walls creates beautiful, unique pieces using a range of different techniques from embroidery to screen printing.'));
extract($this->data());
?>


<article class="content-item work-item" id="item-<?= $pages[$this_page]; ?>">

	<div class="content-inner">

		<h1>SewSew</h1>
		
		<figure class="hero">					
			<img src="<?= $main_img; ?>" alt="Hand holding a cloud shaped cushion" />
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
					<img src="<?= $img_base ?>/work/sewsew/ss-logo.svg" alt="SewSew logo" />
				</figure>
			</div>
			
			<div class="col-2-1">
				<figure>
					<img src="<?= $img_base ?>/work/sewsew/ss-7.jpg" alt="logo concept sketches" />
				</figure>
			</div>
			<div class="col-2-1">
				<figure>
					<img src="<?= $img_base ?>/work/sewsew/ss-pattern.svg" alt="Pattern used within the SewSew branding" />
				</figure>
			</div>
		
			<div class="col-2-1">
				<figure>
					<img src="<?= $img_base ?>/work/sewsew/ss-rollers.jpg" alt="A printing press rollers covered in ink whilst printing SewSew stationary" />
				</figure>
			</div>
			<div class="col-2-1">
				<figure>
					<img src="<?= $img_base ?>/work/sewsew/ss-patterndetail.svg" alt="Close-up detail of the SewSew pattern" />
				</figure>
			</div>
		
			<div class="full-width">
				<figure>
					<img src="<?= $img_base ?>/work/sewsew/ss-18.jpg" alt="A collection of packaging and stationary with SewSew branding" />
				</figure>
			</div>
			
			<div class="col-2-1">
				<figure>
					<img src="<?= $img_base ?>/work/sewsew/ss-14.jpg" alt="Close-up shot of a stack of SewSew business cards" />
				</figure>
			</div>
			<div class="col-2-1">
				<figure>
					<img src="<?= $img_base ?>/work/sewsew/ss-19.jpg" alt="Close-up shot of the SewSew logo on a businsess card" />
				</figure>
			</div>
		
			<div class="full-width">
				<figure>
					<img src="<?= $img_base ?>/work/sewsew/ss-16.jpg" alt="A manilla envelope with SewSew stamp and compliment slip" />
				</figure>
			</div>
		
			<div class="full-width">
				<figure>
					<img src="<?= $img_base ?>/work/sewsew/ss-13.jpg" alt="SewSew packaging with string and tissue paper" />
				</figure>
			</div>
			
			<div class="col-2-1">
				<figure>
					<img src="<?= $img_base ?>/work/sewsew/ss-17.jpg" alt="SewSew products and packaging in a cardboard box" />
				</figure>
			</div>
			<div class="col-2-1">
				<figure>
					<img src="<?= $img_base ?>/work/sewsew/ss-4.jpg" alt="A SewSew swing tag attached to a cloud shpaed cushion" />
				</figure>
			</div>

			<div class="full-width">
				<figure>
					<img src="<?= $img_base ?>/work/sewsew/ss-21.jpg" alt="Collection of SewSew products" />
				</figure>
			</div>
			
			<div class="col-2-1">
				<figure>
					<img src="<?= $img_base ?>/work/sewsew/ss-20.jpg" alt="Emma holding a stack of SewSew cushions" />
				</figure>
			</div>
			<div class="col-2-1">
				<figure>
					<img src="<?= $img_base ?>/work/sewsew/ss-22.jpg" alt="Hands holding a cloud shaped cushion with eyes" />
				</figure>
			</div>
			
			<div class="full-width">
				<figure>
					<img src="<?= $img_base ?>/work/sewsew/ss-10.jpg" alt="Photo of a SewSew door-stop in the shopping basket of a bicycle" />
				</figure>
			</div>

		</div>
		
		
		
	</div>
	
</article>