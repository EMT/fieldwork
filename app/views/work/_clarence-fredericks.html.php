

<?php 
$this->title('Clarence & Fredericks – Fieldwork');
$this->set(array('main_img' => $img_base . '/work/clarence-fredericks/cf-header.jpg'));
$this->set(array('description' => 'Based in south London, Clarence & Fredericks are a small, family run micro-brewery, producing a range of delicious craft beers.'));
extract($this->data());
?>


<article class="content-item work-item" id="item-<?= $pages[$this_page]; ?>">

	<div class="content-inner">

		<h1>Clarence &amp; Fredericks</h1>
		
		<figure class="hero">					
			<img src="<?= $main_img; ?>" alt="Bottles with Clarence &amp; Fredericks branding" />
		</figure>
		
		<div class="intro">
			<p class="runner"><?= $description; ?></p>
			<?= $this->_render('element', 'sharing', $this->data()); ?>
		</div>
		
		<div class="details">
			
			<p>Clarence & Fredericks needed a strong identity that would embody family run business, the craftsmanship of brewing, and the idea of building their own heritage for the company over the coming years.</p>
			<p>We developed an identity that works well for a range of applications from stationary to bottles to website. To compliment the main identity, we worked with illustrator <a href="http://www.icantbelieveitsnotbetter.co.uk/">Matthew Green</a> to devise a figure head for the brand. Barry the Budgie has become a firm favourite (some say he’s the Lesley Phillips of the Budgie world).</p>
			<p>We also designed and developed a simple, updatable website to showcase the current range of beers, and become an online hub for the company’s activities.</p>
			
		</div>
	
		
		
		<div class="grid">
		
			<div class="full-width">
				<figure>
					<img src="<?= $img_base ?>/work/clarence-fredericks/cf-logo.svg" alt="Clarence &amp; Fredericks logo" />
				</figure>
			</div>
		
			<div class="col-2-1">
				<figure>
					<img src="<?= $img_base ?>/work/clarence-fredericks/cf-21.jpg" alt="Sketching logo concepts" />
				</figure>
			</div>
			<div class="col-2-1">
				<figure>
					<img src="<?= $img_base ?>/work/clarence-fredericks/cf-barry.png" alt="Barry the budgie, the Clarence &amp; Fredericks mascot" />
				</figure>
			</div>
		
			<div class="col-2-1">
				<figure>
					<img src="<?= $img_base ?>/work/clarence-fredericks/cf-22.jpg" alt="Hops used for making beer" />
				</figure>
			</div>
			<div class="col-2-1">
				<figure>
					<img src="<?= $img_base ?>/work/clarence-fredericks/cf-23.jpg" alt="Large stack of beer barrels" />
				</figure>
			</div>
			
			<div class="full-width">
				<figure>
					<img src="<?= $img_base ?>/work/clarence-fredericks/cf-3.jpg" alt="Close-up shot of Clarence &amp; Fredericks business cards" />
				</figure>
			</div>
	
			<div class="col-2-1">
				<figure>
					<img src="<?= $img_base ?>/work/clarence-fredericks/cf-2.jpg" alt="Details shot of Baryy the bugie on the back of Clarence &amp; Fredericks business cards" />
				</figure>
			</div>
	
			<div class="full-width">
				<figure>
					<img src="<?= $img_base ?>/work/clarence-fredericks/cf-web1.jpg" alt="Screenshot of the Clarence &amp; Fredericks website home page" />
				</figure>
			</div>
			
			<div class="full-width">
				<figure>
					<img src="<?= $img_base ?>/work/clarence-fredericks/cf-web2.jpg" alt="Hands using the Clarence &amp; Fredericks website on a smartphone" />
				</figure>
			</div>
			
			<div class="full-width">
				<figure>
					<img src="<?= $img_base ?>/work/clarence-fredericks/cf-web3.jpg" alt="Screenshots of the Clarence &amp; Fredericks website on mobile devices" />
				</figure>
			</div>
			
			<div class="full-width">
				<figure>
					<img src="<?= $img_base ?>/work/clarence-fredericks/cf-12.jpg" alt="Clarence &amp; Fredericks beer bottles in the Fieldwork studio" />
				</figure>
			</div>
			
			<div class="full-width">
				<figure>
					<img src="<?= $img_base ?>/work/clarence-fredericks/cf-16.jpg" alt="Beer pumps with Clarence &amp; Fredericks branding" />
				</figure>
			</div>
			
			<div class="col-2-1">
				<figure>
					<img src="<?= $img_base ?>/work/clarence-fredericks/cf-24.jpg" alt="Hand holding a bottle of beer" />
				</figure>
			</div>
			<div class="col-2-1">
				<figure>
					<img src="<?= $img_base ?>/work/clarence-fredericks/cf-17.jpg" alt="Clarence &amp; Fredericks t-shirt" />
				</figure>
			</div>

		</div>
		
		
		
	</div>
	
</article>