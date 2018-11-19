<!-- File: /app/View/Posts/view.ctp -->
<!--
<h1><?php echo h($demo['Post']['title']); ?></h1>

<p><small>Created: <?php echo $demo['Post']['created']; ?></small></p>

<p><?php echo h($demo['Post']['body']); ?></p>

-->



Welcome <?php echo $current_user['role']; ?> to data management panel. 

<?php

if($current_user['role']=='elaiourgeio'){
?>
<!--options gia to elaiourgeio-->
<br>
<!--Elaiourgeio options-->

<div class="products index">
	<h2>My options</h2>
	<div class="table-responsive"> 
	<table cellpadding="0" cellspacing="0" class="table table-bordered table-hover">
		<tr>
			<th>Offers</th>
			<!--<th>Products</th>
			<th>Total demand</th>-->
	</tr>
	<tr>
			<td><?php echo $this->Html->link('View,Edit,Delete,Create My Offers', array('controller'=>'offers', 'action'=>'index')); ?> &nbsp;
				<!--<?php echo $this->Html->link('Edit My Offers', array('controller'=>'offers', 'action'=>'edit')); ?>--> 			
			</td>
			<!-- <td><?php echo $this->Html->link('Edit My Offers', array('controller'=>'offers', 'action'=>'edit')); ?> </td>-->
			<!--<td><?php echo $this->Html->link('View My Products', array('controller'=>'products', 'action'=>'index')); ?></td>-->
			<!--<td><?php echo $this->Html->link('View total demands', array('controller'=>'demands', 'action'=>'index')); ?> </td>-->
	</tr>
	<!--<tr>
			<td><?php echo $this->Html->link('Edit My Offers', array('controller'=>'offers', 'action'=>'edit')); ?> </td>
			<td><?php echo $this->Html->link('Edit My Products', array('controller'=>'products', 'action'=>'edit')); ?></td>
			<td></td>
	</tr>-->
	<!--
	<tr>
			<td><?php echo $this->Html->link('Add New Offers', array('controller'=>'offers', 'action'=>'add')); ?></td>
			<td><?php echo $this->Html->link('Add New Products', array('controller'=>'products', 'action'=>'add')); ?></td>
			<td></td>
	</tr>
	<tr>
			<td><?php echo $this->Html->link('Delete Offers', array('controller'=>'offers', 'action'=>'delete')); ?></td>
			<td><?php echo $this->Html->link('Delete Products', array('controller'=>'products', 'action'=>'delete')); ?></td>
			<td></td>
	</tr>-->
	</table>
	</div>
</div>


<!-- end of user elaiourgeio section -->
<?php
}

elseif($current_user['role']=='admin'){
?>
<!--options gia ton admin-->
<!--admin options-->


<!--------------Countries section--------------- -->
<div class="countries index">
	<h2>Countries</h2>
	<div class="table-responsive"> 
	<table cellpadding="0" cellspacing="0" class="table table-bordered table-hover">
	<tr>
			<th>id</th>
			<th>name</th>
			<th>euzone</th>
			<th>currency</th>
			<th class="actions">Actions</th>
	</tr>

	<?php
	$i = 0;
	if(is_array($countries)) {
	foreach ($countries as $country):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr>
		<td><?php echo $country['Country']['id']; ?>&nbsp;</td>
		<td><?php echo $country['Country']['name']; ?>&nbsp;</td>
		<td><?php echo $country['Country']['euzone']; ?>&nbsp;</td>
		<td><?php echo $country['Country']['currency']; ?>&nbsp;</td>
		<td>	
         <?php echo $this->Html->link('Edit', array('controller'=>'countries', 'action'=>'editCountry',$country['Country']['id']))?>&nbsp;
		   <?php echo $this->Html->link('Delete', array('controller'=>'countries', 'action' => 'deleteCountry', $country['Country']['id']))?>&nbsp;
		   <?php echo $this->Html->link('New country', array('controller'=>'countries', 'action'=>'addCountry'))?>&nbsp;
		</td> 
	</tr>
<?php endforeach; 

} //end of if
?>
	</table>
	</div>
</div>


<!-------------- Products section --------------- -->


<div class="products index">
	<h2>Products</h2>
	<div class="table-responsive"> 
	<table cellpadding="0" cellspacing="0" class="table table-bordered table-hover">
	<tr>
			<th>id</th>
			<th>name</th>
			<th>created</th>
			<th>modified</th>
			<th class="actions">Actions</th>
	</tr>

	<?php
	$i = 0;
	if(is_array($products)) {
	foreach ($products as $product):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr>
		<td><?php echo $product['Product']['id']; ?>&nbsp;</td>
		<td><?php echo $product['Product']['name']; ?>&nbsp;</td>
		<td><?php echo $product['Product']['created']; ?>&nbsp;</td>
		<td><?php echo $product['Product']['modified']; ?>&nbsp;</td>
		<td>	
         <?php echo $this->Html->link('Edit', array('controller'=>'products', 'action'=>'editProduct',$product['Product']['id']))?>&nbsp;
		   <?php echo $this->Html->link('Delete', array('controller'=>'products', 'action' => 'deleteProduct', $product['Product']['id']))?>&nbsp;
		   <?php echo $this->Html->link('New product', array('controller'=>'products', 'action'=>'addProduct'))?>&nbsp;
		</td> 
	</tr>
<?php endforeach; 

} //end of if
?>
	</table>
	</div>
</div>

<!-------------- Properties section--------------- -->
<div class="properties index">
	<h2>Properties</h2>
	<div class="table-responsive"> 
	<table cellpadding="0" cellspacing="0" class="table table-bordered table-hover">
	<tr>
			<th>id</th>
			<th>product_id</th>
			<th>PH</th>
			<th>package</th>
			<th>certification</th>
			<th>size</th>
			<th class="actions">Actions</th>
	</tr>

	<?php
	$i = 0;
	if(is_array($properties)) {
	foreach ($properties as $property):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr>
		<td><?php echo $property['Property']['id']; ?>&nbsp;</td>
		<td><?php echo $property['Property']['product_id']; ?>&nbsp;</td>
		<td><?php echo $property['Property']['PH']; ?>&nbsp;</td>
		<td><?php echo $property['Property']['package']; ?>&nbsp;</td>
		<td><?php echo $property['Property']['certification']; ?>&nbsp;</td>
		<td><?php echo $property['Property']['size']; ?>&nbsp;</td>
		<td>	
         <?php echo $this->Html->link('Edit', array('controller'=>'properties', 'action'=>'editPropertyAdmin',$property['Property']['id']))?>&nbsp;
		   <?php echo $this->Html->link('Delete', array('controller'=>'properties', 'action' => 'deleteProperty', $property['Property']['id']))?>&nbsp;
		   <?php echo $this->Html->link('New property', array('controller'=>'properties', 'action'=>'addPropertyAdmin'))?>&nbsp;
		</td> 
	</tr>
<?php endforeach; 

} //end of if
?>
	</table>
	</div>
</div>
<!-------------- Offers section--------------- -->

<div class="offers index">
	<h2>Offers</h2>
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
		<td><?php foreach ($factories as $factory){
	    		if ($offer['Offer']['factory_id'] == $factory['Factory']['id'])
	    		{
					echo $factory['Factory']['name'];   		
	    		}
	    		}
	    		?></td>
		<td><?php echo $offer['Offer']['product_id']?></td>
		<td><?php foreach ($products as $product){
			if ($product['Product']['id'] == $offer['Offer']['product_id'])
	    		{
					echo $product['Product']['name'];   		
	    		}
		}
		
		?></td>		
		<!--<?php echo $factory['Factory']['name']; ?>&nbsp;</td>-->
		<td><?php echo $offer['Offer']['quantity']; ?>&nbsp;</td>
		<td><?php echo $offer['Offer']['price']; ?>&nbsp;</td>
		<td><?php echo $offer['Offer']['id']; ?>&nbsp;</td>
		<td>	
         <?php echo $this->Html->link('Edit', array('controller'=>'offers', 'action'=>'editOfferAdmin',$offer['Offer']['id']))?>&nbsp;
		   <?php echo $this->Html->link('Delete', array('controller'=>'offers', 'action' => 'deleteOfferAdmin', $offer['Offer']['id']))?>&nbsp;
		   <?php echo $this->Html->link('New Offer', array('controller'=>'offers', 'action'=>'addOfferAdmin'))?>&nbsp;
		</td> 
	</tr>
<?php endforeach; 

} //end of if
?>
	</table>
	</div>
</div>


<!-------------- Demands section--------------- -->

<div class="demands index">
	<h2>Demands</h2>
	<div class="table-responsive"> 
	<table cellpadding="0" cellspacing="0" class="table table-bordered table-hover">
	<tr>
			<th>id</th>
			<th>country_id</th>
			<th>product_id</th>
			<th>quantity</th>
			<th>price</th>
			<th>id</th>
			<th class="actions">Actions</th>
	</tr>

	<?php
	$i = 0;
	if(is_array($demands)) {
	foreach ($demands as $demand):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr>
		<td><?php echo $demand['Demand']['id']; ?>&nbsp;</td>
		<td><?php echo $demand['Demand']['country_id']; ?>&nbsp;</td>
		<!--<td><?php foreach ($demands as $demand){
	    		if ($offer['Offer']['factory_id'] == $factory['Factory']['id'])
	    		{
					echo $factory['Factory']['name'];   		
	    		}
	    		}
	    		?></td>-->
		<td><?php echo $demand['Demand']['country_id']; ?>&nbsp;</td>
		<td><?php echo $demand['Demand']['quantity']; ?>&nbsp;</td>	
		<td><?php echo $demand['Demand']['price']; ?>&nbsp;</td>	
		<td><?php echo $demand['Demand']['id']; ?>&nbsp;</td>		
		<!--<?php echo $factory['Factory']['name']; ?>&nbsp;</td>-->
		<td>	
         <?php echo $this->Html->link('Edit', array('controller'=>'demands', 'action'=>'editDemand',$demand['Demand']['id']))?>&nbsp;
		   <?php echo $this->Html->link('Delete', array('controller'=>'demands', 'action' => 'deleteDemand', $demand['Demand']['id']))?>&nbsp;
		   <?php echo $this->Html->link('New Demand', array('controller'=>'demands', 'action'=>'addDemand'))?>&nbsp;
		</td> 
	</tr>
<?php endforeach; 

} //end of if
?>
	</table>
	</div>
</div>

<!-------------- Factories section--------------- -->
<div class="factory index">
	<h2>Factories</h2>
	<div class="table-responsive"> 
	<table cellpadding="0" cellspacing="0" class="table table-bordered table-responsive table-hover">
	<tr>
			<th>id</th>
			<th>user_id</th>
			<th>county</th>
			<th>region</th>
			<th>tax</th>
			<th>name</th>
			<th>type</th>
			<th>telephone</th>
			<th class="actions">Actions</th>
	</tr>

	<?php
	$i = 0;
	if(is_array($factories)) {
	foreach ($factories as $factory):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr>
		<td><?php echo $factory['Factory']['id']; ?>&nbsp;</td>
		<td><?php echo $factory['Factory']['user_id']; ?>&nbsp;</td>
		<td><?php echo $factory['Factory']['county']; ?>&nbsp;</td>
		<td><?php echo $factory['Factory']['region']; ?>&nbsp;</td>
		<td><?php echo $factory['Factory']['tax']; ?>&nbsp;</td>
		<td><?php echo $factory['Factory']['name']; ?>&nbsp;</td>
		<td><?php echo $factory['Factory']['type']; ?>&nbsp;</td>
		<td><?php echo $factory['Factory']['telephone']; ?>&nbsp;</td>
		<td>	
	    		<?php echo $this->Html->link('Edit Factory', array('controller'=>'factories','action' => 'editFactory', $factory['Factory']['id'])); ?>
	    		<?php echo $this->Form->postLink('Delete Factory', array('controller'=>'factories','action' => 'deleteFactory', $factory['Factory']['id']), array('confirm'=>'Are you sure you want to delete that factory?')); ?>
		   	<?php echo $this->Html->link('New Factory', array('controller'=>'factories','action' => 'addFactory')); ?> 
		</td>
	</tr>
<?php endforeach; 

} //end of if
?>
	</table>
	</div>
</div>
<!-------------- Users section--------------- -->

<div class="user index">
	<h2>Users</h2>
	<div class="table-responsive"> 
	<table cellpadding="0" cellspacing="0" class="table table-bordered table-responsive table-hover">
	<tr>
			<th>id</th>
			<th>name</th>
			<th>username</th>
			<th>email</th>
			<th>password</th>
			<th>role</th>
			<th class="actions">Actions</th>
	</tr>

	<?php
	$i = 0;
	if(is_array($users)) {
	foreach ($users as $user):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr>
		<td><?php echo $user['User']['id']; ?>&nbsp;</td>
		<td><?php echo $user['User']['name']; ?>&nbsp;</td>
		<td><?php echo $user['User']['username']; ?>&nbsp;</td>
		<td><?php echo $user['User']['email']; ?>&nbsp;</td>
		<td><?php echo $user['User']['password']; ?>&nbsp;</td>
		<td><?php echo $user['User']['role']; ?>&nbsp;</td>
		<td>	
	    		<?php echo $this->Html->link('Edit User', array('controller'=>'users','action' => 'editUser', $user['User']['id'])); ?>
	    		<?php echo $this->Form->postLink('Delete user', array('controller'=>'users','action' => 'deleteUser', $user['User']['id']), array('confirm'=>'Are you sure you want to delete that user?')); ?>
		   	<?php echo $this->Html->link('New User', array('controller'=>'users','action' => 'addUser')); ?> 
		</td>
	</tr>
<?php endforeach; 

} //end of if
?>
	</table>
	</div>
</div>
<?php
} //endif admin

?>


