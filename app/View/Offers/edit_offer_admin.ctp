<!-- File: /app/View/Offers/editOffer.ctp -->

<div class="container-fluid">
    <section class="container">
		<div class="container-page">				
			<div class="col-md-6">
			<h3 class="dark-grey">Please edit Offer data</h3>
		<?php
			echo $this->Form->create('Offer');
			echo $this->Form->input('factory_id', array('type' => 'text','class' => 'form-control'));
			echo $this->Form->input('product_id', array('type' => 'text','class' => 'form-control'));
			echo $this->Form->input('quantity',array('class' => 'form-control'));
			echo $this->Form->input('price',array('class' => 'form-control'));
			echo $this->Form->input('id', array('type' => 'hidden','class' => 'form-control'));
			echo $this->Form->submit('Save Offer',
				array('class' => 'btn btn-primary'));?>

			</div>
		</div>
	</section>
</div>