<!-- File: /app/View/Users/edit_user.ctp -->
<div class="container-fluid">
    <section class="container">
		<div class="container-page">				
			<div class="col-md-6">
			<h3 class="dark-grey">Please edit user</h3>
			<?php
			echo $this->Form->create('User');
			echo $this->Form->input('name', array('class' => 'form-control'));
			echo $this->Form->input('username', array('class' => 'form-control'));
			echo $this->Form->input('email', array('class' => 'form-control'));
		
			
			
			echo $this->Form->submit('Save',
				array('class' => 'btn btn-primary'));?>

			</div>
		</div>
	</section>
</div>