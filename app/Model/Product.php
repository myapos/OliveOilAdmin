<?php 

class Product extends AppModel {
	
	  public $validate = array(
        'name' => array(
            'rule' => 'notEmpty'
        ), 
         'created' => array(
            'rule' => 'notEmpty'
        ), 
         'modified' => array(
            'rule' => 'notEmpty'
        )
    );
    
    public $hasMany = array(
        'Property' => array(
            'className' => 'Property',
            'foreignKey' => 'product_id',
            'dependent' => true
        ), 
         'Offer' => array(
            'className' => 'Offer',
            'foreignKey' => 'product_id',
            'dependent' => true
        ), 'Demand' => array(
            'className' => 'Demand',
            'foreignKey' => 'product_id',
            'dependent' => true
        )
        
    );
    
     
    
    
}

?>