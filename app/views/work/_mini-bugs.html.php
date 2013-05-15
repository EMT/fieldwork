

<?php 
$this->title('Mini Bugs – Fieldwork');
$this->set(array('main_img' => '/img/work/mini-bugs/mb-header.jpg'));
$this->set(array('description' => 'Mini Bugs is an independent children’s boutique specialising in all kinds of weird and wonderful things to satisfy curious young minds.'));
extract($this->data());
?>


<article class="content-item work-item" id="item-<?= $pages[$this_page]; ?>">

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
			<p>Mini Bugs approached us to develop a fun and engaging brand identity that would appeal to both children and parents. We designed a hand drawn logotype, and brought in illustrator, <a href="http://www.lucygell.com/">Lucy Gell</a>, to create the bugs and provide added depth to the colourful visual palette.</p>
			<p>We designed and developed an e-commerce website to handle the Buxton based shop’s large and ever changing catalogue of products, as well as provide an online presence and point of contact for the business.</p>
			<p>We’re excited to currently be working with Mini Bugs to design the look and feel for the interior of their new shop.</p>
		</div>
	
		
		
		
		<div class="grid">
			
			<div class="full-width">
				<figure>
					<img src="/img/work/mini-bugs/mb-logo.svg" alt="" />
				</figure>
			</div>
			
			<div class="col-2-1">
				<figure>
					<img src="/img/work/mini-bugs/mb-3.jpg" alt="" />
				</figure>
			</div>
			<div class="col-2-1">
				<figure>
					<img src="/img/work/mini-bugs/mb-1.jpg" alt="" />
				</figure>
			</div>
			
			<div class="full-width">
				<figure>
					<img src="/img/work/mini-bugs/mb-bugs.svg" alt="" />
				</figure>
			</div>
			
			<div class="col-2-1">
				<figure>
					<img src="/img/work/mini-bugs/mb-5.jpg" alt="" />
				</figure>
			</div>
			<div class="col-2-1">
				<figure>
					<img src="/img/work/mini-bugs/mb-10.jpg" alt="" />
				</figure>
			</div>
			
			<div class="full-width">
				<figure>
					<img src="/img/work/mini-bugs/mb-13.jpg" alt="" />
				</figure>
			</div>
		
			<div class="full-width">
				<figure>
					<img src="/img/work/mini-bugs/mb-web1.jpg" alt="" />
				</figure>
			</div>
			
			<div class="full-width">
				<figure>
					<img src="/img/work/mini-bugs/mb-web2.jpg" alt="" />
				</figure>
			</div>
			
			<div class="full-width">
				<figure>
					<img src="/img/work/mini-bugs/mb-11.jpg" alt="" />
				</figure>
			</div>
		
			<div class="col-2-1">
				<figure>
				<img src="/img/work/mini-bugs/mb-9.jpg" alt="" />
				</figure>
			</div>
			<div class="col-2-1">
				<figure>
				<img src="/img/work/mini-bugs/mb-7.jpg" alt="" />
				</figure>
			</div>
			
			<div class="full-width">
				<figure>
			<img src="/img/work/mini-bugs/mb-12.jpg" alt="" />
				</figure>
			</div>

		</div>
		
		
		
	</div>
	
</article>