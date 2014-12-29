<!-- File: /app/View/Factories/edit_factory.ctp -->

<div class="container-fluid">
    <section class="container">
		<div class="container-page">				
			<div class="col-md-6">
			<h3 class="dark-grey">Please edit factory</h3>
		<?php
			echo $this->Form->create('Factory');
			echo $this->Form->input('name', array('class' => 'form-control'));
			echo $this->Form->input('tax', array('class' => 'form-control'));
			echo $this->Form->input('type', array('class' => 'form-control'));
			echo $this->Form->input('region', array('class' => 'form-control'));
			echo $this->Form->input('county', array('class' => 'form-control'));
			echo $this->Form->input('telephone', array('class' => 'form-control'));
			echo $this->Form->input('id', array('type' => 'hidden','class' => 'form-control'));
			//echo $this->Form->input('Reset the Form', array('type' => 'reset','class' => 'form-control'));			
			echo $this->Form->submit('Save',
				array('class' => 'btn btn-primary'));?>

			</div>
		</div>
	</section>
</div>