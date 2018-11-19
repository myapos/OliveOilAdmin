<!-- File: /app/View/Countries/edit.ctp -->
<div class="container-fluid">
    <section class="container">
		<div class="container-page">				
			<div class="col-md-6">
			<h3 class="dark-grey">Please edit country Information</h3>
		<?php
			$zones = array('YES' => 'INSIDE EUROZONE','NO' => 'OUTSIDE EUROZONE');
			echo $this->Form->create('Country');
			echo $this->Form->input('name', array('class' => 'form-control'));
			echo $this->Form->input('euzone',
   			 array('options' => $zones, 'default' => 'YES','class' => 'form-control'));
			
			echo $this->Form->input('currency', array('class' => 'form-control'));
			
			echo $this->Form->submit('Save country',
				array('class' => 'btn btn-primary'));?>

			</div>
		</div>
	</section>
</div>
