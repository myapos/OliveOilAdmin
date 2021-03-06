<!-- File: /app/View/Offers/edit.ctp -->



Edit offers for user <?php echo $current_user['name']; ?>

<?php 
$factoryidloggedin=0; //initialization

//first look in factories to get match id for current user and factory id

foreach ($factories as $factory)
		
		if ($factory['Factory']['user_id'] == $current_user['id']) {
			$factoryidloggedin=$factory['Factory']['user_id'];
		}
//echo $factoryidloggedin;

//then get offers only for user with id ==factoryidloggedin;


?>

<div class="offers index">
	<h2>My Offers</h2>
	<div class="table-responsive"> 
	<table cellpadding="0" cellspacing="0" class="table table-bordered table-hover">
	<tr>
			<th>factory_id</th>
			<th>factory_name</th>
			<th>product_id</th>
			<th>product_name</th>
			<th>quantity</th>
			<th>price</th>
			<th>id</th>
			<th class="actions">Actions</th>
	</tr>
	<?php foreach ($offers as $offer){
	//str ="echo $this->Html->link('Edit My Offers', array('controller'=>'offers', 'action'=>'edit'))";
	if($offer['Offer']['factory_id']==$factoryidloggedin){
	echo "<tr>";
		echo "<td>".$offer['Offer']['factory_id']."</td>";
		echo "<td>";
		foreach ($factories as $factory)
		
		if ($factory['Factory']['user_id'] == $current_user['id']) {
			echo $factory['Factory']['name'];
		}
		echo "</td>";
		echo "<td>".$offer['Offer']['product_id']."</td>"; 
		echo "<td>";
		foreach ($products as $product){
		if($product['Product']['id']==$offer['Offer']['product_id'])		
		echo $product['Product']['name'];
		
		}
		echo "</td>";
		echo "<td>".$offer['Offer']['quantity']."</td>";
		echo "<td>".$offer['Offer']['price']."</td>";
		echo "<td>".$offer['Offer']['id']."</td>";
		echo "<td>".$this->Html->link('Edit', array('controller'=>'offers', 'action'=>'editOffer',$offer['Offer']['factory_id']))."</td>";
	echo "</tr>";	
		
		
		}
	   //echo  	$offer['Offer']['factory_id'];	
		}
	   ?> 

	</table>
	
	<div class="offers index">
	<h2>Offers</h2>
	<div class="table-responsive"> 
	<table cellpadding="0" cellspacing="0" class="table table-bordered table-hover">
	<tr>
			<th>factory_id</th>
			<th>factory name</th>
			<th>quantity</th>
			<th>price</th>
			<th>id</th>
			<th class="actions">Actions</th>
	</tr>

	<?php
	$i = 0;
	if(is_array($offers)) {
	foreach ($offers as $offer):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr>
		<td><?php echo $offer['Offer']['factory_id']; ?>&nbsp;</td>
		<td>
		<?php foreach ($factories as $factory){
	    		if ($offer['Offer']['factory_id'] == $factory['Factory']['id'])
	    		{
					echo $factory['Factory']['name'];   		
	    		}
	    		}
	    		?> 
				
		<!--<?php echo $factory['Factory']['name']; ?>&nbsp;</td>-->
		<td><?php echo $offer['Offer']['quantity']; ?>&nbsp;</td>
		<td><?php echo $offer['Offer']['price']; ?>&nbsp;</td>
		<td><?php echo $offer['Offer']['id']; ?>&nbsp;</td>
		<!--<td>	
			<ul>
			
	    		<?php 
	    		//foreach ($users as $user):
	    		if ($current_user['id'] == $demo['Demo']['user_id'] || $current_user['role'] == 'admin'): ?>
		   	 <li><?php echo $this->Html->link('Edit Demo', array('action' => 'editDemo', $demo['Demo']['id'])); ?> </li>
		    	 <li><?php echo $this->Form->postLink('Delete Demo', array('action' => 'deleteDemo', $demo['Demo']['id']), array('confirm'=>'Are you sure you want to delete that demo?')); ?> </li>
				<?php endif; 
				//endforeach; 
				?>
			</ul>
		</td> -->
	</tr>
<?php endforeach; 

} //end of if
?>
	</table>
	</div>
</div>


<!-- my products -->




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

			/*
			echo $this->Form->input('body', array('rows' => '3')); */
			echo $this->Form->input('id', array('type' => 'hidden','class' => 'form-control'));
			echo $this->Form->submit(
				'Save Offer',
				array('class' => 'btn btn-primary')
				);
			
			?>

			</div>
		</div>
	</section>
</div>