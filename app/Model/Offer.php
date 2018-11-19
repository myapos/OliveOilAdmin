<?php 

class Offer extends AppModel {

		public $belongsTo = array (
        'Factory' => array ('className' => 'Factory', 'foreignKey'=>'factory_id'),
        'Product' => array ('className' => 'Product', 'foreignKey'=>'product_id')
    );
    
	
	  public $validate = array(
   
        'quantity' => array(
            'rule' => 'notEmpty'
        ), 
         'price' => array(
            'rule' => 'notEmpty'
        )
    );
    
    public $hasOne = 'Property'; 

    
}

?>