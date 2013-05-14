

<?php 
$this->title('Carbon Coop – Fieldwork');
$this->set(array('main_img' => '/img/work/carbon-coop/cc-header.jpg'));
$this->set(array('description' => 'Carbon Co-op are a groundbreaking group of residents and housing experts who are pioneering a new model for making homes in Greater Manchester more energy efficient.'));
extract($this->data());
?>


<article class="content-item" id="item-<?= $pages[$this_page]; ?>">

	<div class="content-inner">

		<h1>Carbon Coop</h1>
		
		<figure class="hero">					
			<img src="<?= $main_img; ?>" alt="" />
		</figure>
		
		<div class="intro">
			<p class="runner"><?= $description; ?></p>
			<?= $this->_render('element', 'sharing', $this->data()); ?>
		</div>
		
		<div class="details">
			<p>We worked with Carbon Co–op to design a core brand, which we developed across a range of different outputs such as print, stationery and exhibition graphics. Bespoke iconography and illustration add extra depth and versatility to the identity.</p>
			<p>Initially working with a very tight budget, we rapidly designed and developed the first prototype of the Carbon Co–op web platform as a fast and cost-effective way to meet their existing needs. We continue to work with them to iterate on that initial version, adapting according to the things they learn about their requirements as we go.</p>
			<p>Carbon Co-op have a steadily increasing membership, and are attracting new funding through their innovative uses of technology.</p>
		</div>
	
		
		
		<figure class="full-width grid">
			<img src="/img/work/carbon-coop/cc-logo.svg" alt="" />
		</figure>
		
		<div class="grid">
			<figure class="col-2-1">
				<img src="/img/work/carbon-coop/cc-icons.svg" alt="" />
			</figure>
			<figure class="col-2-1">
				<img src="/img/work/carbon-coop/cc-20.jpg" alt="" />
			</figure>
		</div>
		
		<figure class="full-width grid">
			<img src="/img/work/carbon-coop/cc-1.jpg" alt="" />
		</figure>
		
		<div class="grid">
			<figure class="col-2-1">
				<img src="/img/work/carbon-coop/cc-2.jpg" alt="" />
			</figure>
			<figure class="col-2-1">
				<img src="/img/work/carbon-coop/cc-3.jpg" alt="" />
			</figure>
		</div>
		
		<div class="grid">
			<figure class="col-2-1">
				<img src="/img/work/carbon-coop/cc-9.jpg" alt="" />
			</figure>
			<figure class="col-2-1">
				<img src="/img/work/carbon-coop/cc-13.jpg" alt="" />
			</figure>
		</div>
		
		<figure class="full-width grid">
			<img src="/img/work/carbon-coop/cc-web1.jpg" alt="" />
		</figure>
		
		<figure class="full-width grid">
			<img src="/img/work/carbon-coop/cc-web2.jpg" alt="" />
		</figure>
		
		<figure class="full-width grid">
			<img src="/img/work/carbon-coop/cc-web3.jpg" alt="" />
		</figure>
		
		<figure class="full-width grid">
			<img src="/img/work/carbon-coop/cc-8.jpg" alt="" />
		</figure>
		
		<div class="grid">
			<figure class="col-2-1">
				<img src="/img/work/carbon-coop/cc-10.jpg" alt="" />
			</figure>
			<figure class="col-2-1">
				<img src="/img/work/carbon-coop/cc-5.jpg" alt="" />
			</figure>
		</div>
		
		<figure class="full-width grid">
			<img src="/img/work/carbon-coop/cc-11.jpg" alt="" />
		</figure>
		
		<figure class="full-width grid">
			<img src="/img/work/carbon-coop/cc-19.jpg" alt="" />
		</figure>
		
		
	</div>
	
</article>