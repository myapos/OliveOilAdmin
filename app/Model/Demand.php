<?php 

class Demand extends AppModel {
	

		
		public $belongsTo = array (
        'Country' => array ('className' => 'Country', 'foreignKey'=>'country_id'),
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
    
   

    
}

?>