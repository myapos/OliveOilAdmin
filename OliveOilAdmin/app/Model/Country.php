<?php 

class Country extends AppModel {
	
	  public $validate = array(
        'name' => array(
            'rule' => 'notEmpty'
        ),
        'euzone' => array(
            'rule' => 'notEmpty'
        ),
        'currency' => array(
            'rule' => 'notEmpty'
        )
    );
    
    public $hasMany = array(
        'Demand' => array(
            'className' => 'Demand',
            'foreignKey' => 'country_id',
            'dependent' => true
        )
        
    );
    
     
    
    
}

?>