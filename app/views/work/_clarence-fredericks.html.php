

<?php 
$this->title('Clarence & Fredericks – Fieldwork');
$this->set(array('main_img' => '/img/work/clarence-fredericks/cf-header.jpg'));
$this->set(array('description' => 'Based in south London, Clarence & Fredericks are a small, family run micro-brewery, producing a range of delicious craft beers.'));
extract($this->data());
?>


<article class="content-item" id="item-<?= $pages[$this_page]; ?>">

	<div class="content-inner">

		<h1>Clarence &amp; Fredericks</h1>
		
		<figure class="hero">					
			<img src="<?= $main_img; ?>" alt="" />
		</figure>
		
		<div class="intro">
			<p class="runner"><?= $description; ?></p>
			<?= $this->_render('element', 'sharing', $this->data()); ?>
		</div>
		
		<div class="details">
			<p>We worked up a concept based around family and heritage, which resulted in the woodcut crest used for the main identity.</p>
			<p>To compliment this we worked with illustrator <a href="http://www.icantbelieveitsnotbetter.co.uk/">Matthew Green</a> to devise a figure head for the brand. Barry the Budgie has become a firm favourite (some say he’s the Lesley Phillips of the Budgie world).</p>
			<p>Along with letterpresses business cards we helped with design of the bottles, pump clips, apparel.</p>
		</div>
	
		
		
		<figure class="full-width grid">
			<img src="/img/work/clarence-fredericks/cf-19.png" alt="" />
		</figure>
		
		
		<div class="grid">
			<figure class="col-2-1">
				<img src="/img/work/clarence-fredericks/cf-21.jpg" alt="" />
			</figure>
			<figure class="col-2-1">
				<img src="/img/work/clarence-fredericks/cf-barry.png" alt="" />
			</figure>
		</div>
		
		<div class="grid">
			<figure class="col-2-1">
				<img src="/img/work/clarence-fredericks/cf-22.jpg" alt="" />
			</figure>
			<figure class="col-2-1">
				<img src="/img/work/clarence-fredericks/cf-23.jpg" alt="" />
			</figure>
		</div>
		
<!--
		<div class="grid">
			<figure class="col-2-1">
				<img src="/img/work/clarence-fredericks/cf-20.jpg" alt="" />
			</figure>
			<figure class="col-2-1">
				<img src="/img/work/clarence-fredericks/cf-18.jpg" alt="" />
			</figure>
		</div>
-->
		
		<figure class="full-width grid">
			<img src="/img/work/clarence-fredericks/cf-3.jpg" alt="" />
		</figure>
		
<!--
		<figure class="full-width grid">
			<img src="/img/work/clarence-fredericks/cf-2.jpg" alt="" />
		</figure>
-->

		<div class="grid">
			<figure class="col-2-1">
				<img src="/img/work/clarence-fredericks/cf-2.jpg" alt="" />
			</figure>
		</div>

		<figure class="full-width grid">
			<img src="/img/work/clarence-fredericks/cf-web1.jpg" alt="" />
		</figure>
		
		
		<figure class="full-width grid">
			<img src="/img/work/clarence-fredericks/cf-web2.jpg" alt="" />
		</figure>
		
		<figure class="full-width grid">
			<img src="/img/work/clarence-fredericks/cf-web3.jpg" alt="" />
		</figure>
		
		
		<figure class="full-width grid">
			<img src="/img/work/clarence-fredericks/cf-12.jpg" alt="" />
		</figure>
		
		<figure class="full-width grid">
			<img src="/img/work/clarence-fredericks/cf-16.jpg" alt="" />
		</figure>
		
		<div class="grid">
			<figure class="col-2-1">
				<img src="/img/work/clarence-fredericks/cf-24.jpg" alt="" />
			</figure>
			<figure class="col-2-1">
				<img src="/img/work/clarence-fredericks/cf-17.jpg" alt="" />
			</figure>
		</div>

		
		
		
		
	</div>
	
</article>