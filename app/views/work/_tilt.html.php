

<?php 
$this->title('Tilt');
$this->set(array('main_img' => '/img/work/tilt/tilt-0.jpg'));
$this->set(array('description' => 'TILT design enabling spaces, creating inspiring atmospheres that transform the way people interact with each other. They de-mystify architecture and design to make refreshing spaces that complement the purpose and personality of the people that use them.'));
extract($this->data());
?>



<article class="content-item work-item" id="item-<?= $pages[$this_page]; ?>">

	<div class="content-inner">

		<h1>Tilt</h1>
		
		<figure class="hero">					
			<img src="<?= $main_img; ?>" alt="A collection of TILT’s furniture designs for the Clerkenwell design festival." />
		</figure>
		
		<div class="intro">
			<p class="runner"><?= $description; ?></p>
			<?= $this->_render('element', 'sharing', $this->data()); ?>
		</div>
		
		<div class="details">
			<p>Designing and developing a new website for TILT gave us the opportunity to explore ways to tell the stories of their innovative process. The challenge here was in creating a content managed site that would use the lovely imagery they’ve collected throughout their work to showcase the story of each project and product.</p>
			<p>We devised a grid system with strict image dimensions to provide a consistent sense of order at varying screen sizes and across various devices. This grid combined with a minimal design allows TILT’s wealth of content to do the talking, and their work to shine.</p>
			<p>For more, visit the <a href="http://studiotilt.com">TILT website</a>.</p>
		</div>
		
		
		
		
		<div class="grid">
			
			<div class="full-width">
				<figure>
					<img src="/img/work/tilt/tilt-1.jpg" alt="Concepting and wireframing during an initial discovery phase." />
				</figure>
			</div>
			
			<div class="full-width">
				<figure>
					<img src="/img/work/tilt/tilt-4.jpg" alt="A collection of projects displayed on the TILT website" />
				</figure>
			</div>
			
			<div class="full-width">
				<figure>
					<img src="/img/work/tilt/tilt-8.jpg" alt="The TILT website home page viewed on iPad and iPhone." />
				</figure>
			</div>
			
			<div class="full-width">
				<figure>
					<img src="/img/work/tilt/tilt-9.jpg" alt="Displaying imagery using a custom designed lightbox." />
				</figure>
			</div>
			
			<div class="full-width">
				<figure>
					<img src="/img/work/tilt/tilt-10.jpg" alt="Displaying the product details on the TILT website." />
				</figure>
			</div>
			
			<div class="full-width">
				<figure>
					<img src="/img/work/tilt/tilt-3.jpg" alt="Various pages of teh TILT website as displayed on an iPhone." />
				</figure>
			</div>
			
			<div class="full-width">
				<figure>
					<img src="/img/work/tilt/tilt-7.jpg" alt="TILT’s Studio page, showing a collection of information about the studio and time-sensitive content from the blog, Twitter and Facebook." />
				</figure>
			</div>
		
		</div>
		
		
	</div>
	
</article>