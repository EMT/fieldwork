

<?php $this->title('Hey Fieldwork, can I have a poster please?'); ?>

	
<div class="content-inner">

	<h1>Hey Fieldwork, can I have a poster please?</h1>
	
	
	<?php if ($count >= 100) { ?>
		
		<p class="centered-intro runner">Wow, that was fast! Sorry, we’re out of posters. You can follow us on <a href="http://twitter.com/madebyfieldwork">Twitter</a>, or <a href="http://eepurl.com/q6U4X">join the mailing list</a> to stay tuned for the next Fieldwork thing (we have no idea what that will be… we’ll think of something).</p>
		
	<?php } else { ?>
	
	
	<p class="centered-intro runner">Hello world! We finally got around to officially launching Fieldwork, and we’d like to introduce ourselves to you with one of these lovely posters. Leave us your details, and we’ll pop one in the post.</p>
	
	
		
	
	<?= $this->form->create($user, array('class' => 'std-form')); ?>
		<?= $this->security->requestToken(); ?>
	
		<div class="form-row-half<?= (count($user->errors('fname'))) ? ' error' : ''; ?>">
			<label class="text-lbl" for="fname">First Name
				<?php if (count($user->errors('fname'))) { ?>
					<span class="error-msg">
						<?php echo implode('<br />', $user->errors('fname')) ?>
					</span>
				<?php } ?>
			</label>
			<?= $this->form->text('fname', array(
				'class' => 'text-input',
				'id' => 'fname',
				'placeholder' => 'Loz'
			)); ?>
		</div>
		<div class="form-row-half<?= (count($user->errors('lname'))) ? ' error' : ''; ?>">
			<label class="text-lbl" for="fname">Last Name
				<?php if (count($user->errors('lname'))) { ?>
					<span class="error-msg">
						<?php echo implode('<br />', $user->errors('lname')) ?>
					</span>
				<?php } ?>
			</label>
			<?= $this->form->text('lname', array(
				'class' => 'text-input',
				'id' => 'lname',
				'placeholder' => 'Ives'
			)); ?>
		</div>
	

		<label class="text-lbl" for="fname">Street Address
			<?php if (count($user->errors('street'))) { ?>
				<span class="error-msg">
					<?php echo implode('<br />', $user->errors('street')) ?>
				</span>
			<?php } ?>
		</label>
		<?= $this->form->text('street', array(
			'class' => 'text-input',
			'id' => 'street',
			'placeholder' => 'Fieldwork, 22 Lever Street'
		)); ?>
		

		<div class="form-row-half<?= (count($user->errors('city'))) ? ' error' : ''; ?>">
			<label class="text-lbl" for="city">City
				<?php if (count($user->errors('city'))) { ?>
					<span class="error-msg">
						<?php echo implode('<br />', $user->errors('city')) ?>
					</span>
				<?php } ?>
			</label>
			<?= $this->form->text('city', array(
				'class' => 'text-input',
				'id' => 'city',
				'placeholder' => 'Manchester'
			)); ?>
		</div>
		<div class="form-row-half<?= (count($user->errors('county'))) ? ' error' : ''; ?>">
			<label class="text-lbl" for="county">County
				<?php if (count($user->errors('county'))) { ?>
					<span class="error-msg">
						<?php echo implode('<br />', $user->errors('county')) ?>
					</span>
				<?php } ?>
			</label>
			<?= $this->form->text('county', array(
				'class' => 'text-input',
				'id' => 'county',
				'placeholder' => 'Greater Manchester'
			)); ?>
		</div>
		


		<div class="form-row-half<?= (count($user->errors('postcode'))) ? ' error' : ''; ?>">
			<label class="text-lbl" for="postcode">Postcode
				<?php if (count($user->errors('postcode'))) { ?>
					<span class="error-msg">
						<?php echo implode('<br />', $user->errors('postcode')) ?>
					</span>
				<?php } ?>
			</label>
			<?= $this->form->text('postcode', array(
				'class' => 'text-input',
				'id' => 'postcode',
				'placeholder' => 'M1 1EA'
			)); ?>
		</div>
		<div class="form-row-half<?= (count($user->errors('email'))) ? ' error' : ''; ?>">
			<label class="text-lbl" for="email">Email
				<?php if (count($user->errors('email'))) { ?>
					<span class="error-msg">
						<?php echo implode('<br />', $user->errors('email')) ?>
					</span>
				<?php } ?>
			</label>
			<?= $this->form->email('email', array(
				'class' => 'text-input',
				'id' => 'email',
				'placeholder' => 'hello@madebyfieldwork.com'
			)); ?>
		</div>
		

		<label class="radio-lbl" for="newsletter"><?= $this->form->checkbox('newsletter', array(
			'id' => 'newsletter',
			'value' => 1
		)); ?>Can we send you good, wholesome stuff via email, once a month or so?
			<?php if (count($user->errors('newsletter'))) { ?>
				<span class="error-msg">
					<?php echo implode('<br />', $user->errors('newsletter')) ?>
				</span>
			<?php } ?>
		</label>
		
		<p>The posters come folded to A5 and we have 100 to give away, so get them while they’re hot.</p>
		
		<input class="btn submit" type="submit" name="sub" value="Submit" />
		
	<?=$this->form->end(); ?>
	
	
	<?php } ?>
	
	
	
	
</div>

	

	