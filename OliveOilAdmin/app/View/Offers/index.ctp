<!-- File: /app/View/Offer/index.ctp -->

<?php 
$factoryidloggedin=0; //initialization
//echo $current_user['id'];
//first look in factories to get match id for current user and factory id

foreach ($factories as $factory)
		
		if ($factory['Factory']['user_id'] == $current_user['id']) {
			$factoryidloggedin=$factory['Factory']['id'];
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
			<th>offer_id</th>
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
		//echo "<td>".$offer['Offer']['id']."</td>";
		echo "<td>";
		foreach ($properties as $property){
		if($offer['Offer']['id']==$property['Property']['offer_id'])	{	
		echo $property['Property']['offer_id']."<br>";
		}
		}
		echo "</td>";
		echo "<td>".$this->Html->link('Edit', array('controller'=>'offers', 'action'=>'editOffer',$offer['Offer']['id']))." "
		.$this->Html->link('Delete', array('controller'=>'offers', 'action' => 'delete', $offer['Offer']['id']))." "
		.$this->Html->link('New offer', array('controller'=>'offers', 'action'=>'addOffer'))
		."</td>";
	echo "</tr>";	
		
		
		}
	   //echo  	$offer['Offer']['factory_id'];	
		}
	   ?> 

	</table>
	</div>
</div>		

More actions
<?php echo $this->Html->link('New offer', array('controller'=>'offers', 'action'=>'addOffer'))?>


