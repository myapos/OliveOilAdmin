<?php 

class Property extends AppModel {
	//public $name = 'Property';

	public $belongsTo = array( 
        'Offer' => array(
            'className' => 'Offer',
            'foreignKey' => 'offer_id'
        ),
        'Product' => array(
            'className' => 'Product',
            'foreignKey' => 'product_id'
        )
    );	

	
	  public $validate = array(
   
        'PH' => array(
            'rule' => 'notEmpty'
        ), 
         'package' => array(
            'rule' => 'notEmpty'
        ), 
         'size' => array(
            'rule' => 'notEmpty'
        ), 
         'certification' => array(
            'rule' => 'notEmpty'
        )
    );
    

    
    
}

?>