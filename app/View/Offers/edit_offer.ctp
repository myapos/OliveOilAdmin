<!-- File: /app/View/Offers/editOffer.ctp -->

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

<?php 
//$factoryidloggedin=0; //initialization
//get factories id in an array
//echo $current_user['id'];
//first look in factories to get match id for current user and factory id
$options = array();
foreach ($products as $product)
		
//echo $factory['Factory']['id']."<br> ";
$options[] = $product['Product']['id'];
//print_r ($options);
?>

<!-- mkoutsog comment here -->
<?php
	$optionsProdId = array();
	$optionsProdname = array();
	
	if(is_array($products)) {
	foreach ($products as $product){
		$optionsProdId[] = $product['Product']['id'];
		$optionsProdname[] = $product['Product']['name'];}}
	?>
<div class="container-fluid">
    <section class="container">
		<div class="container-page">				
			<div class="col-md-6">
			<h3 class="dark-grey">Please edit Offer data</h3>
		<?php
		
		   $optionstest=array_combine($optionsProdId,$optionsProdname);
		   
			echo $this->Form->create('Offer');
			echo $this->Form->input('factory_id', array('default'=>$factoryidloggedin,'type' => 'text','class' => 'form-control'));
			//echo $this->Form->input('product_id', array('options' => $options, 'default' => ' ','class' => 'form-control'));
			echo $this->Form->input('product_id', array('options' => $optionstest, 'default' => ' ','class' => 'form-control'));
			echo $this->Form->input('quantity',array('class' => 'form-control'));
			echo $this->Form->input('price',array('class' => 'form-control'));
			echo $this->Form->input('id', array('type' => 'hidden','class' => 'form-control'));
			echo $this->Form->submit('Update Offer',
				array('class' => 'btn btn-primary'));?>

			</div>
		</div>
	</section>
</div>


<?php 
//$factoryidloggedin=0; //initialization
//get factories id in an array
//echo $current_user['id'];
//first look in factories to get match id for current user and factory id
$optionspropertyProdId = array();
$optionspropertyPH= array();
$optionspropertyCert = array();
$optionspropertyPack = array();
$optionspropertySize = array();

foreach ($properties as $property)
		{
//echo $factory['Factory']['id']."<br> ";
$optionspropertyProdId[] = $property['Property']['product_id'];
$optionspropertyPH[] = $property['Property']['PH'];
$optionspropertyCert[] = $property['Property']['certification'];
$optionspropertyPack[] = $property['Property']['package'];
$optionspropertySize[] = $property['Property']['size'];

//print_r ($optionspropertyId);
//print_r ($optionspropertyPH);
//print_r ($optionspropertyCert);
//print_r ($optionspropertyPack);
//print_r ($optionspropertySize);
}
?>

<!--
<div class="container-fluid">
    <section class="container">
		<div class="container-page">				
			<div class="col-md-6">
			<h3 class="dark-grey">Please edit property data</h3>
		<?php
			echo $this->Form->create('Property');
			//echo $this->Form->input('factory_id', array('type' => 'text','class' => 'form-control'));
			echo $this->Form->input('id', array('type' => 'hidden','class' => 'form-control'));
			
			echo $this->Form->input('product_id', array('options' => $optionspropertyProdId, 'default' => ' ','class' => 'form-control'));
			
			echo $this->Form->input('PH', array('options' => $optionspropertyPH, 'default' => ' ','class' => 'form-control'));
			echo $this->Form->input('package', array('options' => $optionspropertyPack, 'default' => ' ','class' => 'form-control'));
			echo $this->Form->input('certification', array('options' => $optionspropertyCert, 'default' => ' ','class' => 'form-control'));
			echo $this->Form->input('size',array('options' => $optionspropertySize, 'default' => ' ','class' => 'form-control'));
			echo $this->Form->submit('Save Property',array('class' => 'btn btn-primary'));?>

			</div>
		</div>
	</section>
</div>
-->
<!-- File: /app/View/Property/index.ctp 
<h1>User: Property entry</h1>
<p><?php echo $this->Html->link('Fill in product property', array('action' => 'add')); ?></p>

<div class="container-fluid">
    <section class="container">
		<div class="container-page">				
			<div class="col-md-6">
			<h3 class="dark-grey">Please edit property</h3>
<table>
    <tr>
        <th> Product id</th>
        <th> PH </th>
        <th> Package type </th>
        <th> Size (lt)</th>
        <th> Certification </th>
    </tr>
-->
<!-- Here's where we loop through our $posts array, printing out post info -->
<!--
   <tr>
    <?php foreach ($properties as $property): ?>
     <td>
            <?php echo $property['Property']['product_id']; ?>
     </td>
                
         <td>
            <?php echo $property['Property']['PH']; ?>
        </td>
         <td>
            <?php echo $property['Property']['package']; ?>
        </td>
                <td>
            <?php echo $property['Property']['size']; ?>
        </td>
         <td>
            <?php echo $property['Property']['certification']; ?>
        </td>
        <td> 
            <?php
                echo $this->Form->postLink(
                    'Delete',
                    array('action' => 'delete', $property['Property']['id']),
                    array('confirm' => 'Are you sure?'));
            ?>
            <?php
                echo $this->Html->link(
                    'Edit', array('action' => 'edit', $property['Property']['id']));
            ?>
        </td>
        
        
    </tr>
    <?php endforeach; ?>

</table>


			</div>
		</div>
	</section>
</div>-->