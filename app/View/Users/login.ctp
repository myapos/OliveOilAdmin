<div class="container-fluid">
    <section class="container">
		<div class="container-page">				
			<div class="col-md-6">
				<h3 class="dark-grey">Please login</h3>
				<?php echo $this->Form->create();?>
				
				<?php echo $this->Form->input('username',array('class' => 'form-control'));?>
				<?php echo $this->Form->input('password',array('class' => 'form-control'));?>
				<?php 
				//echo $this->Form->end('Submit',array('type'=>'password'));
				echo $this->Form->submit(
				'Login',
				array('class' => 'btn btn-primary')
				);?>
			</div>
		</div>
	</section>
</div>