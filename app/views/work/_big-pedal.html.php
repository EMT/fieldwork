

<?php 
$this->title('The Big Pedal – Fieldwork');
$this->set(array('main_img' => $img_base . '/work/big-pedal/tbp-header.jpg'));
$this->set(array('description' => 'The Big Pedal is a massive cycle-to-school event that takes place over three weeks each year, involving over 1,000 schools and generating over a million journeys to school by bike.'));
extract($this->data());
?>


<article class="content-item work-item" id="item-<?= $pages[$this_page]; ?>">

	<div class="content-inner">

		<h1>The Big Pedal</h1>
		
		<figure class="hero">					
			<img src="<?= $main_img; ?>" alt="School Pupils and staff gathered with their bikes for a photo during The Big Pedal" />
		</figure>
		
		<div class="intro">
			<p class="runner"><?= $description; ?></p>
			<?= $this->_render('element', 'sharing', $this->data()); ?>
		</div>
		
		<div class="details">
			<p>Before we started working with Sustrans on The Big Pedal, they used spread sheets, email and telephone calls to run their national virtual bike race. We designed and built an automated web application to handle the administrative tasks as well as providing public information and instant feedback to schools about their progress.</p>
			<p>We built the first version of the web application quickly, to accommodate the basic requirements and address the most pressing needs, and have spent the four years since iterating and improving the application into the full-featured platform it is today.</p>
			<p>Through automating the registration and participation processes, the event has been able to involve many more schools, and increase the number of participants. The Big Pedal continues to grow, and has an increasing impact on the number of children cycling to school each year.</p>
		</div>
	
		
		
		<div class="grid">
			
			<div class="full-width">
				<figure>
					<img src="<?= $img_base ?>/work/big-pedal/tbp-3.jpg" alt="Screenshot of The Big Pedal website home page" />
				</figure>
			</div>
		
			<div class="col-2-1">
				<figure>
					<img src="<?= $img_base ?>/work/big-pedal/tbp-5.jpg" alt="Screenshot of the website on a smartphone" />
				</figure>
			</div>
			<div class="col-2-1">
				<figure>
					<img src="<?= $img_base ?>/work/big-pedal/tbp-4.jpg" alt="Screenshot of The Big Pedal website on a smartphone" />
				</figure>
			</div>
		
			<div class="col-2-1">
				<figure>
					<img src="<?= $img_base ?>/work/big-pedal/bp-jerseys.svg" alt="Illustrated prize-winners’ cycling jerseys" />
				</figure>
			</div>
			<div class="col-2-1">
				<figure>
					<img src="<?= $img_base ?>/work/big-pedal/tbp-13.jpg" alt="Lots of bikes against a hedge during The Big Pedal" />
				</figure>
			</div>
			
			<div class="full-width">
				<figure>
					<img src="<?= $img_base ?>/work/big-pedal/tbp-6.jpg" alt="The Big Pedal website’s map of schools shown on an iPad" />
				</figure>
			</div>
			
			<div class="full-width">
				<figure>
					<img src="<?= $img_base ?>/work/big-pedal/tbp-10.jpg" alt="The route details page, shown on an iPhone" />
				</figure>
			</div>
			
			<div class="col-2-1">
				<figure>
					<img src="<?= $img_base ?>/work/big-pedal/tbp-8.jpg" alt="Screenshot of a rankings page for The Big Pedal" />
				</figure>
			</div>
			<div class="col-2-1">
				<figure>
					<img src="<?= $img_base ?>/work/big-pedal/tbp-9.jpg" alt="Screenshot of a school dashboard page for The Big Pedal" />
				</figure>
			</div>
		
			<div class="full-width">
				<figure>
					<img src="<?= $img_base ?>/work/big-pedal/tbp-7.jpg" alt="Screenshots of school statistics page for The Big Pedal" />
				</figure>
			</div>
		
		</div>
		
	</div>
	
</article>