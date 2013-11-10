

<?php 
$this->title('Project Wild Thing – Fieldwork');
$this->set(array('main_img' => $img_base . '/work/camp-nothing/cn-header.jpg'));
$this->set(array('description' => 'In September 2013 Camp Nothing brought together 50 brilliant people from 15 cities across the UK to kickstart new Good for Nothing chapters, spreading the social-innovation bug far and wide.'));
extract($this->data());
?>


<article class="content-item work-item" id="item-<?= $pages[$this_page]; ?>">

	<div class="content-inner">

		<h1>Project Wild Thing</h1>
		
		<figure class="hero">					
			<img src="<?= $main_img; ?>" alt="School Pupils and staff gathered with their bikes for a photo during The Big Pedal" />
		</figure>
		
		<div class="intro">
			<p class="runner"><?= $description; ?></p>
			<?= $this->_render('element', 'sharing', $this->data()); ?>
		</div>
		
		<div class="details">
			<p>We worked with <a href="">Good for Nothing</a> to develop a visual identity for the Camp Nothing event, with promotional materials, website, and freebies for attendees.</p>
		</div>
	
		
		
		<div class="grid">
			
			<div class="full-width">
				<figure>
					<img src="<?= $img_base ?>/work/camp-nothing/cn-14.svg" alt="Screenshot of The Big Pedal website home page" />
				</figure>
			</div>

			<div class="col-2-1">
				<figure>
					<img src="<?= $img_base ?>/work/camp-nothing/cn-9.jpg" alt="Illustrated prize-winners’ cycling jerseys" />
				</figure>
			</div>
			<div class="col-2-1">
				<figure>
					<img src="<?= $img_base ?>/work/camp-nothing/cn-6.jpg" alt="Lots of bikes against a hedge during The Big Pedal" />
				</figure>
			</div>
		
			<div class="col-2-1">
				<figure>
					<img src="<?= $img_base ?>/work/camp-nothing/cn-15.svg" alt="Screenshot of the website on a smartphone" />
				</figure>
			</div>
			<div class="col-2-1">
				<figure>
					<img src="<?= $img_base ?>/work/camp-nothing/cn-16.svg" alt="Screenshot of The Big Pedal website on a smartphone" />
				</figure>
			</div>
			
			<div class="full-width">
				<figure>
					<img src="<?= $img_base ?>/work/camp-nothing/cn-7.jpg" alt="The Big Pedal website’s map of schools shown on an iPad" />
				</figure>
			</div>
			
			<div class="full-width">
				<figure>
					<img src="<?= $img_base ?>/work/camp-nothing/cn-2.jpg" alt="The route details page, shown on an iPhone" />
				</figure>
			</div>
		
			<div class="full-width">
				<figure>
					<img src="<?= $img_base ?>/work/camp-nothing/cn-11.jpg" alt="Screenshots of school statistics page for The Big Pedal" />
				</figure>
			</div>

			<div class="full-width">
				<figure>
					<img src="<?= $img_base ?>/work/camp-nothing/cn-12.jpg" alt="Screenshots of school statistics page for The Big Pedal" />
				</figure>
			</div>

			<div class="full-width">
				<figure>
					<img src="<?= $img_base ?>/work/camp-nothing/cn-13.jpg" alt="Screenshots of school statistics page for The Big Pedal" />
				</figure>
			</div>

			<div class="full-width">
				<figure>
					<img src="<?= $img_base ?>/work/camp-nothing/cn-10.jpg" alt="Screenshots of school statistics page for The Big Pedal" />
				</figure>
			</div>
		
		</div>
		
	</div>
	
</article>