

<?php 
$this->title('Our Brand – Fieldwork');
$this->set(array('main_img' => '/img/work/fieldwork/fw-1.jpg'));
$this->set(array('description' => 'We love our client work, but our in-house projects are also an important part of our work. We developed our won identity with this in mind.'));
extract($this->data());
?>



<article class="content-item" id="item-<?= $pages[$this_page]; ?>">

	<div class="content-inner">

		<h1>Fieldwork</h1>
		
		<figure class="hero">					
			<img src="<?= $main_img; ?>" alt="" />
		</figure>
		
		<div class="intro">
			<p class="runner"><?= $description; ?></p>
			<?= $this->_render('element', 'sharing', $this->data()); ?>
		</div>
		
		<div class="details">
			<p>At Fieldwork, we make sure to keep a good balance between client work and in-house projects. We needed a visual identity flexible enough to work across anything from project proposals and invoices, through fun prints and publications, all the way to super geeky stuff like code projects and gadgets.</p>
			<p>After establishing some guiding principals about how we want to work, who we’d most like to work with, and what we want to work on, we wrote a short and simple <a href="">manifesto</a> for Fieldwork, and collected some visual inspiration based around those ideas.</p>
			<p>Through a process of iteration, we developed the simple identity you see on this page and across the website. Then we worked on a collection of visual materials to bring the character of our company to life. It’s a work-in-progress, and always will be.</p>
		</div>
		
		
		
		
		<figure class="full-width grid">
			<img src="/img/work/fieldwork/fw-i-1.png" alt="" />
		</figure>
		
		<div class="grid">
			<figure class="col-2-1 right">
				<img src="/img/work/fieldwork/fw-i-2.png" alt="" />
			</figure>
		</div>
		
		<figure class="full-width grid">
			<img src="/img/work/fieldwork/fw-6.jpg" alt="" />
		</figure>
		
		<div class="grid">
			<figure class="col-2-1">
				<img src="/img/work/fieldwork/fw-2.jpg" alt="" />
			</figure>
			<figure class="col-2-1">
				<img src="/img/work/fieldwork/fw-5.jpg" alt="" />
			</figure>
		</div>
		
		<div class="grid">
			<figure class="col-2-1">
				<img src="/img/work/fieldwork/fw-4.jpg" alt="" />
			</figure>
		</div>
		
		<figure class="full-width grid">
			<img src="/img/work/fieldwork/fw-7.jpg" alt="" />
		</figure>
		
		<figure class="full-width grid">
			<img src="/img/work/fieldwork/fw-8.jpg" alt="" />
		</figure>
		
		<figure class="full-width grid">
			<img src="/img/work/fieldwork/fw-3.jpg" alt="" />
		</figure>
		
		<div class="grid">
			<figure class="col-2-1">
				<img src="/img/work/fieldwork/fw-12.jpg" alt="" />
			</figure>
		</div>
		
		<figure class="full-width grid">
			<img src="/img/work/fieldwork/fw-11.jpg" alt="" />
		</figure>
		
		<div class="grid">
			<figure class="col-2-1">
				<img src="/img/work/fieldwork/fw-15.jpg" alt="" />
			</figure>
			<figure class="col-2-1">
				<img src="/img/work/fieldwork/fw-16.jpg" alt="" />
			</figure>
		</div>
		
	</div>
	
</article>