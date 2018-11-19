<!-- File: /app/View/Offers/addOffer.ctp -->
My factory_id is 

<?php 
$factoryidloggedin=0; //initialization
//echo $current_user['id'];
//first look in factories to get match id for current user and factory id

foreach ($factories as $factory)
		
		if ($factory['Factory']['user_id'] == $current_user['id']) {
			$factoryidloggedin=$factory['Factory']['id'];
		}
echo $factoryidloggedin;

?>

<!--
. Available products in system database for placing offer

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
-->
	<?php
	$optionsProdId = array();
	$optionsProdname = array();
	$i = 0;
	if(is_array($products)) {
	foreach ($products as $product):
		$optionsProdId[] = $product['Product']['id'];
		$optionsProdname[] = $product['Product']['name'];
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?><!--
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
-->

<div class="container-fluid">
    <section class="container">
		<div class="container-page">				
			<div class="col-md-6">
			<h3 class="dark-grey">Please add Offer data</h3>
		<?php
		
		   $optionstest=array_combine($optionsProdId,$optionsProdname);
		   
		   //print_r($optionstest);
			echo $this->Form->create('Offer');
			echo $this->Form->input('factory_id', array('default'=>$factoryidloggedin,'type' => 'text','class' => 'form-control'));
			echo $this->Form->input('product_id', array('options' => $optionstest,'class' => 'form-control'));
			//echo "You selected product with";
			echo $this->Form->input('quantity',array('class' => 'form-control'));
			echo $this->Form->input('price',array('class' => 'form-control'));
			echo $this->Form->submit('Save Offer',	array('class' => 'btn btn-primary'));?>

			</div>
		</div>
	</section>
</div>

<?php
$optionspropertyProdId = array();
$optionspropertyPH= array();
$optionspropertyCert = array();
$optionspropertyPack = array();
$optionspropertySize = array();

foreach ($properties as $property){
		
//echo $factory['Factory']['id']."<br> ";
$optionspropertyProdId[] = $property['Property']['product_id'];
$optionspropertyPH[] = $property['Property']['PH'];
$optionspropertyCert[] = $property['Property']['certification'];
$optionspropertyPack[] = $property['Property']['package'];
$optionspropertySize[] = $property['Property']['size'];


}
//print_r($optionsProdname);
?>

<!--
<div class="container-fluid">
    <section class="container">
		<div class="container-page">				
			<div class="col-md-6">
			<h3 class="dark-grey">Please add Property data</h3>
		<?php
		 
			echo $this->Form->create('Property');
		//	echo $this->Form->input('factory_id', array('default'=>$factoryidloggedin,'type' => 'text','class' => 'form-control'));
			//echo $this->Form->input('factory_id', array('type' => 'text','class' => 'form-control'));
			
			//echo $this->Form->input('factory_id', array('type' => 'text','class' => 'form-control'));
			echo $this->Form->input('id', array('type' => 'hidden','class' => 'form-control'));
			
			//echo $this->Form->input('product_id', array('options' => $optionspropertyProdId, 'default' => ' ','class' => 'form-control'));
			echo $this->Form->input('name', array('options' => $optionsProdname, 'default' => ' ','class' => 'form-control'));
			
			echo $this->Form->input('PH', array('options' => $optionspropertyPH, 'default' => ' ','class' => 'form-control'));
			echo $this->Form->input('package', array('options' => $optionspropertyPack, 'default' => ' ','class' => 'form-control'));
			echo $this->Form->input('certification', array('options' => $optionspropertyCert, 'default' => ' ','class' => 'form-control'));
			echo $this->Form->input('size',array('options' => $optionspropertySize, 'default' => ' ','class' => 'form-control'));
			echo $this->Form->submit('Save Property',
				array('class' => 'btn btn-primary'));
				?>
			
			</div>
		</div>
	</section>
</div>

-->

 