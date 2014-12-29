<!-- File: /app/View/Properties/add_property.ctp -->
<?php
	$optionsProdId = array();
	$optionsProdname = array();
	$i = 0;
	if(is_array($products)) {
	foreach ($products as $product){
		$optionsProdId[] = $product['Product']['id'];
		$optionsProdname[] = $product['Product']['name'];
		}
	}
	?>
	
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
//print_r($optionspropertySize);
?>

<div class="container-fluid">
    <section class="container">
		<div class="container-page">				
			<div class="col-md-6">
			<h3 class="dark-grey">Please add Property data.</h3>
		<?php
		 
		   //echo "selected value: ".$myproduct;
		   //print_r($myproduct);
		  
		   // echo $myproduct[''.$myproductid];
		  // $productname=$myproduct[''.$myproductid];
		   //echo $productname;
		    
		    echo $this->Form->create('Property');
		    
		    //echo $this->Form->input('id', array('type' => 'hidden','class' => 'form-control'));
		    echo $this->Form->input('product_id', array('type'=>'text','class' => 'form-control'));
		    echo $this->Form->input('PH', array('type'=>'text', 'class' => 'form-control'));
		    echo $this->Form->input('package', array('type'=>'text','class' => 'form-control'));
			 echo $this->Form->input('certification', array('type'=>'text','class' => 'form-control'));
			 echo $this->Form->input('size',array('type'=>'text','class' => 'form-control'));
			// $customofferid = array($offerid => $offerid);	
			 echo $this->Form->input('offer_id',array('type'=>'text','class' => 'form-control'));
			
		    echo $this->Form->submit('Save Property',	array('class' => 'btn btn-primary'));
		   
		   /*
		   echo $this->Form->create('Property');
	   	//	echo $this->Form->input('factory_id', array('default'=>$factoryidloggedin,'type' => 'text','class' => 'form-control'));
			//echo $this->Form->input('factory_id', array('type' => 'text','class' => 'form-control'));
			
			//echo $this->Form->input('factory_id', array('type' => 'text','class' => 'form-control'));
			echo $this->Form->input('id', array('type' => 'hidden','class' => 'form-control'));
			
			//echo $this->Form->input('property_id', array('class' => 'form-control'));
			//echo $this->Form->input('name', array('options' => array_unique($optionsProdname), 'class' => 'form-control'));
			echo $this->Form->input('name', array( 'default' => $productname,'disabled' => 'disabled', 'class' => 'form-control'));
			
			echo $this->Form->input('PH', array('options' => array_unique($optionspropertyPH), 'class' => 'form-control'));
			echo $this->Form->input('package', array('options' => array_unique($optionspropertyPack),'class' => 'form-control'));
			echo $this->Form->input('certification', array('options' => array_unique($optionspropertyCert), 'class' => 'form-control'));
			echo $this->Form->input('size',array('options' => array_unique($optionspropertySize), 'class' => 'form-control'));
			
			$customofferid = array($offerid => $offerid);	
			echo $this->Form->input('offer_id',array('options' => $customofferid,'class' => 'form-control'));
			echo $this->Form->submit('Save Property',	array('class' => 'btn btn-primary'));?>
			*/
			?>
			</div>
		</div>
	</section>
</div>



<!--
<div class="container-fluid">
    <section class="container">
		<div class="container-page">				
			<div class="col-md-6">
			<h3 class="dark-grey">Please add property for offer with id <?php echo $customid; ?></h3>zdvdv
		<?php
		
			echo $this->Form->create('Property');
			$ids = array('1' => 'OLIVE OIL - EXTRA VIRGIN','2' => 'OLIVE OIL - VIRGIN', '3' => 'OLIVE OIL - BIOLOGICAL', '9' => 'WINE');
			echo $this->Form->input('product_id',array('options' => $ids, 'default' => '1','class' => 'form-control'));
			
			$phs = array('<2' => '<2', '2-4' => '2-4', '>4' => '>4');
			echo $this->Form->input('PH',array('options' => $phs, 'default' => '2-4','class' => 'form-control'));
			
			$packages = array('NONE' => 'NONE', 'BOTTLE' => 'BOTTLE', 'CONTAINER' => 'CONTAINER');
			echo $this->Form->input('package', array('options' => $packages, 'default' => 'BOTTLE','class' => 'form-control'));
			
			$sizes = array('<1' => '<1', '1-5' => '1-5', '>5' => '>5');
			echo $this->Form->input('size',array('options' => $sizes, 'default' => '1-5','class' => 'form-control'));

			$certifications = array('YES' => 'YES', 'NO' => 'NO');
			echo $this->Form->input('certification',array('options' => $certifications, 'default' => 'YES','class' => 'form-control'));
			
			$customofferid = array($customid => $customid);
			
			echo $this->Form->input('offer_id',array('options' => $customofferid,'class' => 'form-control'));

			echo $this->Form->submit('Save',array('class' => 'btn btn-primary'));?>

			</div>
		</div>
	</section>
</div> -->
