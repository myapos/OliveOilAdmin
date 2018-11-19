<!-- File: /app/View/Products/add_product.ctp -->

<div class="container-fluid">
    <section class="container">
		<div class="container-page">				
			<div class="col-md-6">
			<h3 class="dark-grey">Please edit product</h3>
		<?php
			echo $this->Form->create('Product');
			echo $this->Form->input('name', array('class' => 'form-control'));
			
			echo $this->Form->input('id', array('type' => 'hidden','class' => 'form-control'));
			
			echo $this->Form->submit('Save',
				array('class' => 'btn btn-primary'));?>

			</div>
		</div>
	</section>
</div>
