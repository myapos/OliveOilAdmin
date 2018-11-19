<!-- File: /app/View/Factories/addFactory.ctp -->

<?php 
//$factoryidloggedin=0; //initialization
//get factories id in an array
//echo $current_user['id'];
//first look in factories to get match id for current user and factory id
$options = array();
foreach ($users as $user)
		
//echo $factory['Factory']['id']."<br> ";
$options[] = $user['User']['id'];
//print_r ($options);
?>


<div class="container-fluid">
    <section class="container">
		<div class="container-page">				
			<div class="col-md-6">
			<h3 class="dark-grey">Please add factory</h3>
		<?php
			echo $this->Form->create('Factory');
			echo $this->Form->input('name', array('class' => 'form-control'));
			echo $this->Form->input('user_id', array('options' => $options, 'default' => '1','class' => 'form-control'));
			echo $this->Form->input('tax', array('class' => 'form-control'));
			echo $this->Form->input('type', array('class' => 'form-control'));
			echo $this->Form->input('region', array('class' => 'form-control'));
			echo $this->Form->input('county', array('class' => 'form-control'));
			echo $this->Form->input('telephone', array('class' => 'form-control'));
			//echo $this->Form->input('Reset the Form', array('type' => 'reset','class' => 'form-control'));			
			echo $this->Form->submit('Save',
				array('class' => 'btn btn-primary'));?>

			</div>
		</div>
	</section>
</div>