

<?php 
$this->title('Carbon Coop – Fieldwork');
$this->set(array('main_img' => '/img/work/carbon-coop/cc-header.jpg'));
$this->set(array('description' => 'Carbon Co-op are a groundbreaking group of residents and housing experts who are pioneering a new model for making homes in Greater Manchester more energy efficient.'));
extract($this->data());
?>


<article class="content-item work-item" id="item-<?= $pages[$this_page]; ?>">

	<div class="content-inner">

		<h1>Carbon Co-op</h1>
		
		<figure class="hero">					
			<img src="<?= $main_img; ?>" alt="Illustration by Charlotte Trounce for Carbon Co-op" />
		</figure>
		
		<div class="intro">
			<p class="runner"><?= $description; ?></p>
			<?= $this->_render('element', 'sharing', $this->data()); ?>
		</div>
		
		<div class="details">
			<p>We worked with Carbon Co–op to design a core brand, which we developed across a range of different outputs such as print, stationery and exhibition graphics. Bespoke iconography and illustration add extra depth and versatility to the identity.</p>
			<p>Initially working with a tight budget, we rapidly designed and developed the first prototype of the Carbon Co–op web platform as a fast and cost-effective way to meet their existing needs. We continue to work with them to iterate on that initial version, adapting according to the things they learn about their requirements as we go.</p>
			<p>Carbon Co-op have a steadily increasing membership, and are attracting new funding through their innovative uses of technology.</p>
		</div>
	
		
		
		<div class="grid">
			
			<div class="full-width">
				<figure>
					<img src="/img/work/carbon-coop/cc-logo.svg" alt="Carbon Co-op logo" />
				</figure>
			</div>
			
			<div class="col-2-1">
				<figure>
					<img src="/img/work/carbon-coop/cc-icons.svg" alt="Custom designed icons" />
				</figure>
			</div>
			<div class="col-2-1">
				<figure>
					<img src="/img/work/carbon-coop/cc-20.jpg" alt="Illustration of a familiy in a warm looking house" />
				</figure>
			</div>
			
			<div class="full-width">
				<figure>
					<img src="/img/work/carbon-coop/cc-1.jpg" alt="Collection of stationary and print materials for Carbon Co-op" />
				</figure>
			</div>

			<div class="col-2-1">
				<figure>
					<img src="/img/work/carbon-coop/cc-2.jpg" alt="Carbon Co-op branded letterhead" />
				</figure>
			</div>
			<div class="col-2-1">
				<figure>
					<img src="/img/work/carbon-coop/cc-3.jpg" alt="Carbon Co-op business cards" />
				</figure>
			</div>	

			<div class="col-2-1">
				<figure>
					<img src="/img/work/carbon-coop/cc-9.jpg" alt="Carbon Co-op bueinss cards detail shot of both sides" />
				</figure>
			</div>
			<div class="col-2-1">
				<figure>
					<img src="/img/work/carbon-coop/cc-13.jpg" alt="A hand holds a Carbon Co-op membership card" />
				</figure>
			</div>
			
			<div class="full-width">
				<figure>
					<img src="/img/work/carbon-coop/cc-web1.jpg" alt="Screenshot of the Carbon Co-op website home page" />
				</figure>
			</div>
			
			<div class="full-width">
				<figure>
					<img src="/img/work/carbon-coop/cc-web2.jpg" alt="Screenshot of the Carbon Co-op website members’ area" />
				</figure>
			</div>
			
			<div class="full-width">
				<figure>
					<img src="/img/work/carbon-coop/cc-web3.jpg" alt="Various screesnhots from the Carbon Co-op website, shown on smartphone screens" />
				</figure>
			</div>
			
			<div class="full-width">
				<figure>
					<img src="/img/work/carbon-coop/cc-8.jpg" alt="A printed booklet with custom illustrations for Carbon Co-op" />
				</figure>
			</div>
			
			<div class="col-2-1">
				<figure>
					<img src="/img/work/carbon-coop/cc-10.jpg" alt="Printed materials for Carbon Co-op" />
				</figure>
			</div>
			<div class="col-2-1">
				<figure>
					<img src="/img/work/carbon-coop/cc-5.jpg" alt="Detail shot of photography from a Carbon Co-op publication" />
				</figure>
			</div>

			<div class="full-width">
				<figure>
					<img src="/img/work/carbon-coop/cc-11.jpg" alt="Photo of an old garden shed with plat pots" />
				</figure>
			</div>
			
			<div class="full-width">
				<figure>
					<img src="/img/work/carbon-coop/cc-19.jpg" alt="Photo of people in a garden on a sunny day" />
				</figure>
			</div>

		</div>
		
		
	</div>
	
</article>