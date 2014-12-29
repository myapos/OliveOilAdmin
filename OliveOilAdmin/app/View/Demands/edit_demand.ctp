<!-- File: /app/View/Demands/add_demand.ctp -->
<div class="container-fluid">
    <section class="container">
		<div class="container-page">				
			<div class="col-md-6">
			<h3 class="dark-grey">Please edit demand</h3>
		<?php
			echo $this->Form->create('Demand');
			echo $this->Form->input('country_id', array('type' => 'text','class' => 'form-control'));
			echo $this->Form->input('product_id', array('type' => 'text','class' => 'form-control'));
			echo $this->Form->input('quantity', array('type' => 'text','class' => 'form-control'));
			echo $this->Form->input('price', array('type' => 'text','class' => 'form-control'));
			echo $this->Form->input('id', array('type' => 'hidden','class' => 'form-control'));
			echo $this->Form->submit('Save',
				array('class' => 'btn btn-primary'));?>

			</div>
		</div>
	</section>
</div>
