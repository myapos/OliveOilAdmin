<?php 

class Factory extends AppModel {
	
	  public $validate = array(
        'name' => array(
            'rule' => 'notEmpty'
        ),
        'tax' => array(
            'rule' => 'notEmpty'
        ),
        'county' => array(
            'rule' => 'notEmpty'
        ), 
         'region' => array(
            'rule' => 'notEmpty'
        ), 
         'type' => array(
            'rule' => 'notEmpty'
        ), 
        'telephone' => array(
            'rule' => 'notEmpty'
        )
    );
    
    
         public $hasMany = array(
        'Offer' => array(
            'className' => 'Offer',
            'foreignKey' => 'factory_id',
            'dependent' => true
        )
    );
    
    
   public $belongsTo = array(
        'User' => array(
            'className' => 'User',
            'foreignKey' => 'user_id'
        )
    );   
    
    
    
    
}

?>