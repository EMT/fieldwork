

<?php $this->title('Fieldwork – We Love Making Things'); ?>

	
<div class="content-inner">

	<h1>Hey Fieldwork, can I have a poster please?</h1>
	
	
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
	
<!--
		<div class="form-row-half">
			<label for="">First Name</label>
			<input class="text-input" name="fname" placeholder="Loz" />
		</div>
		<div class="form-row-half">
			<label for="">Last Name</label>
			<input class="text-input" name="lname" placeholder="Ives" />
		</div>
-->

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
		
<!--
		<label for="">Street Address</label>
		<input class="text-input" name="street" placeholder="Fieldwork, 22 Lever Street" />
-->

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
			<?= $this->form->text('city', array(
				'class' => 'text-input',
				'id' => 'county',
				'placeholder' => 'Greater Manchester'
			)); ?>
		</div>
		
<!--
		<div class="form-row-half">
			<label for="">City</label>
			<input class="text-input" name="city" placeholder="Manchester" />
		</div>
		<div class="form-row-half">
			<label for="">County</label>
			<input class="text-input" name="county" placeholder="Greater Manchester" />
		</div>
-->


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
		
<!--
		<div class="form-row-half">
			<label for="">Postcode</label>
			<input class="text-input" name="fname" placeholder="M1 1EA" />
		</div>
		<div class="form-row-half">
			<label for="">Email</label>
			<input class="text-input" name="lname" placeholder="hello@madebyfieldwork.com" />
		</div>
-->

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
		
<!-- 		<label for=""><input type="checkbox" name="" value="1" />Can we send you good, wholesome stuff via email, once a month or so?</label> -->
		
		<input class="btn submit" type="submit" name="sub" value="Submit" />
		
	<?=$this->form->end(); ?>
	
	
	
	
	
	
	
</div>

	

	