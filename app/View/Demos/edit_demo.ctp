<!-- File: /app/View/Posts/edit.ctp -->
<div class="container-fluid">
    <section class="container">
		<div class="container-page">				
			<div class="col-md-6">
				<h3 class="dark-grey">Please edit demo data</h3>
				<?php echo $this->Form->create('Demo');?>
				
				<?php echo $this->Form->input('title',array('class' => 'form-control'));?>
				<?php echo $this->Form->input('body',array('rows' => '3','class' => 'form-control'));?>
				<?php echo $this->Form->input('id',array('type' => 'hidden','class' => 'form-control'));?>
				<?php 

				//echo $this->Form->end('Submit',array('type'=>'password'));
				echo $this->Form->submit(
				'Save',
				array('class' => 'btn btn-primary')
				);
				?>
			</div>
		</div>
	</section>
</div>