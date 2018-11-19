<!-- File: /app/View/Properties/edit_property.ctp -->
<div class="container-fluid">
    <section class="container">
		<div class="container-page">				
			<div class="col-md-6">
			<h3 class="dark-grey">Please edit property for offer with id <?php //echo $customid; ?></h3>
		<?php
		
			echo $this->Form->create('Property');
			$ids = array('1' => 'OLIVE OIL - EXTRA VIRGIN','2' => 'OLIVE OIL - VIRGIN', '3' => 'OLIVE OIL - BIOLOGICAL', '9' => 'WINE');
			echo $this->Form->input('product_id',array('options' => $ids, 'default' => ' ','class' => 'form-control'));
			
			$phs = array('<2' => '<2', '2-4' => '2-4', '>4' => '>4');
			echo $this->Form->input('PH',array('options' => $phs, 'default' => '','class' => 'form-control'));
			
			$packages = array('NONE' => 'NONE', 'BOTTLE' => 'BOTTLE', 'CONTAINER' => 'CONTAINER');
			echo $this->Form->input('package', array('options' => $packages, 'default' => '','class' => 'form-control'));
			
			$sizes = array('<1' => '<1', '1-5' => '1-5', '>5' => '>5');
			echo $this->Form->input('size',array('options' => $sizes, 'default' => '','class' => 'form-control'));

			$certifications = array('YES' => 'YES', 'NO' => 'NO');
			echo $this->Form->input('certification',array('options' => $certifications, 'default' => '','class' => 'form-control'));
			
			//$customofferid = array($customid => $customid);
			
			echo $this->Form->input('offer_id',array('type'=>'text','class' => 'form-control'));

			echo $this->Form->submit('Save',array('class' => 'btn btn-primary'));?>

			</div>
		</div>
	</section>
</div>


<!--
<div class="container-fluid">
    <section class="container">
		<div class="container-page">				
			<div class="col-md-6">
			<h3 class="dark-grey">Please edit property</h3>
		<?php
			echo $this->Form->create('Property');
			echo $this->Form->input('name', array('class' => 'form-control'));
			echo $this->Form->input('type', array('class' => 'form-control'));
			echo $this->Form->input('PH', array('class' => 'form-control'));
			echo $this->Form->input('package', array('class' => 'form-control'));
			echo $this->Form->input('size', array('class' => 'form-control'));
			echo $this->Form->input('certification', array('class' => 'form-control'));
			echo $this->Form->input('id', array('type' => 'hidden','class' => 'form-control'));
			echo $this->Form->submit('Save',
				array('class' => 'btn btn-primary'));?>

			</div>
		</div>
	</section>
</div> -->
