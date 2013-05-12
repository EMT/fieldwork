

<?php 
$this->title('The Big Pedal – Fieldwork');
$this->set(array('main_img' => '/img/work/big-pedal/tbp-header.jpg'));
$this->set(array('description' => 'The Big Pedal is a massive cycle-to-school event that takes place over three weeks each year, involving over 1,000 schools and generating over a million journeys to school by bike.'));
extract($this->data());
?>


<article class="content-item" id="item-<?= $pages[$this_page]; ?>">

	<div class="content-inner">

		<h1>The Big Pedal</h1>
		
		<figure class="hero">					
			<img src="<?= $main_img; ?>" alt="" />
		</figure>
		
		<div class="intro">
			<p class="runner"><?= $description; ?></p>
			<?= $this->_render('element', 'sharing', $this->data()); ?>
		</div>
		
		<div class="details">
			<p>Before we started working with Sustrans on The Big Pedal, they used spread sheets, email and telephone calls to run their national virtual bike race. There was no website, and event administration was becoming unmanageable under the weight of numbers.</p>
			<p>We built the first version of the web application quickly, to accommodate the basic requirements and address the most pressing needs, and have spent the four years since iterating and improving the application into the full-featured platform it is today.</p>
			<p>Through automating the registration and participation processes, the event has been able to involve many more schools, and increase the number of participants. The Big Pedal continues to grow, and has an increasing impact on the number of children cycling to school each year.</p>
		</div>
	
		
		
		<figure class="full-width grid">
			<img src="/img/work/big-pedal/tbp-3.jpg" alt="" />
		</figure>
		
		<div class="grid">
			<figure class="col-2-1">
				<img src="/img/work/big-pedal/tbp-5.jpg" alt="" />
			</figure>
			<figure class="col-2-1">
				<img src="/img/work/big-pedal/tbp-4.jpg" alt="" />
			</figure>
		</div>
		
		<div class="grid">
			<figure class="col-2-1">
				<img src="/img/work/big-pedal/tbp-14.png" alt="" />
			</figure>
			<figure class="col-2-1">
				<img src="/img/work/big-pedal/tbp-13.jpg" alt="" />
			</figure>
		</div>
		
		<figure class="full-width grid">
			<img src="/img/work/big-pedal/tbp-6.jpg" alt="" />
		</figure>
		
		<figure class="full-width grid">
			<img src="/img/work/big-pedal/tbp-10.jpg" alt="" />
		</figure>
		
		<div class="grid">
			<figure class="col-2-1">
				<img src="/img/work/big-pedal/tbp-8.jpg" alt="" />
			</figure>
			<figure class="col-2-1">
				<img src="/img/work/big-pedal/tbp-9.jpg" alt="" />
			</figure>
		</div>
		
		<figure class="full-width grid">
			<img src="/img/work/big-pedal/tbp-7.jpg" alt="" />
		</figure>
		
	</div>
	
</article>