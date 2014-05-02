

<?php 
$this->title('Camp Nothing – Fieldwork');
$this->set(array('main_img' => $img_base . '/work/camp-nothing/cn-17.jpg'));
$this->set(array('description' => 'In September 2013 Camp Nothing brought together 50 people from 15 cities across the UK to kickstart new Good for Nothing chapters, spreading the social-innovation bug far and wide.'));
extract($this->data());
?>


<article class="content-item work-item" id="item-<?= $pages[$this_page]; ?>">

	<div class="project-header" style="background-image: url(<?= $main_img; ?>);">
		<h1>Camp Nothing</h1>
	</div>

	<div class="content-section content-intro">
		<div class="content-inner">
			
			<div class="intro">
				<p class="runner"><?= $description; ?></p>
				<?= $this->_render('element', 'sharing', $this->data()); ?>
			</div>
			
			<div class="details">
				<p>On the grounds of West Lexham Manor, Norfolk, <a href="http://campnothing.goodfornothing.com/">Camp Nothing</a> combined the great outdoors with purposeful, turbo-charged doing. A lovely brief. It was our job to tie all of this together with a flexible visual identity that would work alongside, yet be distinct from, the existing <a href="http://www.goodfornothing.com/">Good for Nothing</a> brand.</p>
				<p>In true Good for Nothing fashion, we invited the team to our Manchester studio, and spent two energetic days rapidly developing a concept and initial visuals. This became the basis for the identity.</p>
				<p>We designed and developed an event website, attendee t-shirts, event signage, badges, and tote bags.</p>
			</div>
	
		</div>
	</div>
		
	
	<div class="content-section slider-wrapper" style="background-color: rgb(55,219,212);">
		<div class="slider">	
			
			<ul class="slides">
				<li class="slide">
					<img src="<?= $img_base ?>/work/camp-nothing/cn-slide-4.png" alt="Illustrated visual identity concept for Camp Nothing" />
				</li>
				<li class="slide">
					<img src="<?= $img_base ?>/work/camp-nothing/cn-slide-5.png" alt="Illustrated visual identity concept for Camp Nothing" />
				</li>
				<li class="slide">
					<img src="<?= $img_base ?>/work/camp-nothing/cn-slide-1.svg" alt="Illustrated visual identity concept for Camp Nothing" />
				</li>
				<li class="slide">
					<img src="<?= $img_base ?>/work/camp-nothing/cn-slide-3.png" alt="Illustrated visual identity concept for Camp Nothing" />
				</li>
				<li class="slide">
					<img src="<?= $img_base ?>/work/camp-nothing/cn-slide-2.svg" alt="Illustrated visual identity concept for Camp Nothing" />
				</li>
			</ul>

		</div>
	</div>


	<div class="content-section">
		<div class="content-inner">
			<div class="grid">

				<div class="col-2-1">
					<figure>
						<img src="<?= $img_base ?>/work/camp-nothing/cn-9.jpg" alt="Initial pencil sketches for the Camp Nothing identity" />
					</figure>
				</div>
				<div class="col-2-1">
					<figure>
						<img src="<?= $img_base ?>/work/camp-nothing/cn-6.jpg" alt="Good for Nothing tote bags" />
					</figure>
				</div>
			
				<!-- <div class="col-2-1">
					<figure>
						<img src="<?= $img_base ?>/work/camp-nothing/cn-15.svg" alt="Illustrated iconography for Camp Nothing" />
					</figure>
				</div>
				<div class="col-2-1">
					<figure>
						<img src="<?= $img_base ?>/work/camp-nothing/cn-16.svg" alt="Illustrated iconography for Camp Nothing" />
					</figure>
				</div> -->
				
				<div class="full-width">
					<figure>
						<img src="<?= $img_base ?>/work/camp-nothing/cn-7.jpg" alt="Good for Nothing tote bag in use" />
					</figure>
				</div>

				<div class="full-width">
					<figure>
						<img src="<?= $img_base ?>/work/camp-nothing/cn-5.jpg" alt="Laser cut wooden Camp Nothing pin badge" />
					</figure>
				</div>
				
				<div class="full-width">
					<figure>
						<img src="<?= $img_base ?>/work/camp-nothing/cn-2.jpg" alt="Camp Nothing campsite signage" />
					</figure>
				</div>
			
				<!-- <div class="full-width">
					<figure>
						<img src="<?= $img_base ?>/work/camp-nothing/cn-11.jpg" alt="Screenshot of the Camp Nothing website" />
					</figure>
				</div>

				<div class="full-width">
					<figure>
						<img src="<?= $img_base ?>/work/camp-nothing/cn-12.jpg" alt="Screenshot of the Camp Nothing website" />
					</figure>
				</div>

				<div class="full-width">
					<figure>
						<img src="<?= $img_base ?>/work/camp-nothing/cn-13.jpg" alt="Screenshot of the Camp Nothing website" />
					</figure>
				</div>

				<div class="full-width">
					<figure>
						<img src="<?= $img_base ?>/work/camp-nothing/cn-10.jpg" alt="Screenshot of the Camp Nothing website adapted for an iPhone screen" />
					</figure>
				</div> -->

				<div class="col-2-1">
					<figure>
						<img src="<?= $img_base ?>/work/camp-nothing/cn-17.jpg" alt="A tent in the woods at Camp Nothing" />
					</figure>
				</div>
				<div class="col-2-1">
					<figure>
						<img src="<?= $img_base ?>/work/camp-nothing/cn-20.jpg" alt="Camp Nothing attendees breaking bread together at the dinner table" />
					</figure>
				</div>

				<div class="col-2-1">
					<figure>
						<img src="<?= $img_base ?>/work/camp-nothing/cn-19.jpg" alt="An audience of attendees for a show and tell at Camp Nothing" />
					</figure>
				</div>
				<div class="col-2-1">
					<figure>
						<img src="<?= $img_base ?>/work/camp-nothing/cn-18.jpg" alt="Dan walking through the woods at Camp Nothing, smiling, with coffee in hand" />
					</figure>
				</div>
			
			</div>
		</div>	
	</div>
	
</article>