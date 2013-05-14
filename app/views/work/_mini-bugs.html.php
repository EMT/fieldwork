

<?php 
$this->title('Mini Bugs – Fieldwork');
$this->set(array('main_img' => '/img/work/mini-bugs/mb-header.jpg'));
$this->set(array('description' => 'Mini Bugs is an independent children’s boutique specialising in all kinds of weird and wonderful things to satisfy curious young minds.'));
extract($this->data());
?>


<article class="content-item" id="item-<?= $pages[$this_page]; ?>">

	<div class="content-inner">

		<h1>Mini Bugs</h1>
		
		<figure class="hero">					
			<img src="<?= $main_img; ?>" alt="" />
		</figure>
		
		<div class="intro">
			<p class="runner"><?= $description; ?></p>
			<?= $this->_render('element', 'sharing', $this->data()); ?>
		</div>
		
		<div class="details">
			<p>We created the identity, stationery, print and e-commerce site. Illustrator <a href="http://www.lucygell.com/">Lucy Gell</a> created the bug illustrations</p>
			<p>Bright, bold, colourful palette with a hand drawn logotype</p>
			<p>Currently working closely with them to design the signage and interior look and feel of the new shop.</p>
		</div>
	
		
		
		<figure class="full-width grid">					
			<img src="/img/work/mini-bugs/mb-logo.svg" alt="" />
		</figure>
		
		<div class="grid">
			<figure class="col-2-1">
				<img src="/img/work/mini-bugs/mb-3.jpg" alt="" />
			</figure>
			<figure class="col-2-1">
				<img src="/img/work/mini-bugs/mb-1.jpg" alt="" />
			</figure>
		</div>
		
		<figure class="full-width grid">					
			<img src="/img/work/mini-bugs/mb-bugs.svg" alt="" />
		</figure>
		
		<div class="grid">
			<figure class="col-2-1">
				<img src="/img/work/mini-bugs/mb-5.jpg" alt="" />
			</figure>
			<figure class="col-2-1">
				<img src="/img/work/mini-bugs/mb-10.jpg" alt="" />
			</figure>
		</div>
		
		<figure class="full-width grid">					
			<img src="/img/work/mini-bugs/mb-13.jpg" alt="" />
		</figure>
		
		<figure class="full-width grid">					
			<img src="/img/work/mini-bugs/mb-web1.jpg" alt="" />
		</figure>
		
		<figure class="full-width grid">					
			<img src="/img/work/mini-bugs/mb-web2.jpg" alt="" />
		</figure>
		
		<figure class="full-width grid">					
			<img src="/img/work/mini-bugs/mb-11.jpg" alt="" />
		</figure>
		
		<div class="grid">
			<figure class="col-2-1">
				<img src="/img/work/mini-bugs/mb-9.jpg" alt="" />
			</figure>
			<figure class="col-2-1">
				<img src="/img/work/mini-bugs/mb-7.jpg" alt="" />
			</figure>
		</div>

		<figure class="full-width grid">					
			<img src="/img/work/mini-bugs/mb-12.jpg" alt="" />
		</figure>
		
		
		
	</div>
	
</article>