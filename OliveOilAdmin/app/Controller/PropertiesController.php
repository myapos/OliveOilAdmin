<?php class PropertiesController extends AppController {
	
	 public $name = 'Properties';
    public $helpers = array('Html', 'Form');

	 public $uses = array(
     					   'User',
       				   'Demo',
       				   'Product',
       				   'Offer',
       				   'Property',
       				   'Factory'
    						); 	
    public function index() {
        $this->set('properties', $this->Property->find('all'));
    }
    
    public function view($id = null) {
        if (!$id) {
            throw new NotFoundException(__('Invalid property'));
        }

        $property = $this->Property->findById($id);
        if (!$property) {
            throw new NotFoundException(__('Invalid property'));
        }
        $this->set('property', $property);
    }   
      
      
      public function addProperty($offerid = null,$productid=null) {
      //$testid=$id;
      
       //echo "productid: ".$productid." offerid: ".$offerid;
       //print_r($test);
       
       $this->Factory->recursive = 0;
    	 $this->set('factories', $this->Factory->find('all'));
		 $this->Product->recursive = 0;
		 $this->set('products', $this->Product->find('all'));  
		 $this->Property->recursive = 0;
		 $this->set('properties', $this->Property->find('all'));	

       
     	 //$this->set('products', $this->Property->Product->find('all'));  
    	 $this->set('offers', $this->Property->Offer->find('all'));  
      
      // $this->set('myproduct', $this->Product->findAllById($test,array('fields' => array('wcwe'))));	
     // $this->set('myproduct', $this->Product->find('all', array('conditions'=>array('Product.id'=>$productid)),
       //'fields'=>array('Product.name')));	
       
      $this->set('myproduct', $this->Product->find('list', array(
            'conditions'=>array('Product.id'=>$productid),'fields'=>array('Product.name'))));
      $this->set('myproductid',$productid);
     	//echo "sdvsdsdfvdsc".$id;
     	
      $this->set('offerid', $offerid);
      $this->set('optionspropertyPH', $this->Property->find('list', array('fields'=>array('Property.PH'))));	
      $this->set('optionspropertyPack', $this->Property->find('list', array('fields'=>array('Property.package'))));	
      $this->set('optionspropertyCert', $this->Property->find('list', array('fields'=>array('Property.certification'))));	
      $this->set('optionspropertySize', $this->Property->find('list', array('fields'=>array('Property.size'))));	
      $this->set('optionspropertyOfferId', $this->Property->find('list', array('fields'=>array('Property.offer_id'))));	
     
        if ($this->request->is('post')) {
            $this->Property->create();
            if ($this->Property->save($this->request->data)) {
                $this->Session->setFlash(__('Your property has been saved.'));
                return $this->redirect(array('controller'=>'offers', 'action'=>'index', $this->Offer->id));
            }
            else{$this->Session->setFlash(__('Unable to add your property.'));}
        }
        
    }
    
    
    public function editProperty($offerid = null,$productid=null,$property=null) {
    	//$testid=$id;
		 $this->Factory->recursive = 0;
    	 $this->set('factories', $this->Factory->find('all'));
		 $this->Product->recursive = 0;
		 $this->set('products', $this->Product->find('all'));  
		 $this->Property->recursive = 0;
		 $this->set('properties', $this->Property->find('all'));	
     
     $prop = $this->Property->find('list', 
                   array('conditions'=>array('Property.offer_id'=>$offerid)));
    
     print_r($prop);
     //echo "sdsd ".$prop;
     //echo " ".$offerid." ".$productid; 
     $this->set('offerid', $offerid);
     
     
     //$this->set('optionspropertyPH', $this->Product->find('list', array('fields'=>array('Property.PH'))));
    
     $this->set('myproduct', $this->Product->find('list', array(
            'conditions'=>array('Product.id'=>$productid),'fields'=>array('Product.name'))));
      $this->set('myproductid',$productid);
     	//echo "sdvsdsdfvdsc".$id;
     	
      $this->set('offerid', $offerid);
      $this->set('optionspropertyPH', $this->Property->find('list', array('fields'=>array('Property.PH'))));	
      $this->set('optionspropertyPack', $this->Property->find('list', array('fields'=>array('Property.package'))));	
      $this->set('optionspropertyCert', $this->Property->find('list', array('fields'=>array('Property.certification'))));	
      $this->set('optionspropertySize', $this->Property->find('list', array('fields'=>array('Property.size'))));	
      $this->set('optionspropertyOfferId', $this->Property->find('list', array('fields'=>array('Property.offer_id'))));	
     	//echo "sdvsdsdfvdsc".$id;$optionspropertyPH
      //echo "svsdsdvddsvvvs".$prop[0];
      $numeric_indexed_array = array_values($prop);
		// $numeric_indexed_array = array('bar', 'bin', 'ipsum');
		$str=null;
		$str=$numeric_indexed_array[0];
		echo " ".$str;
		$this->set('proptest',$str);
		//print($numeric_indexed_array[0]); // bar
      if ($this->request->is('post')) {
           // $this->Property->create();
        	   $this->data['Property']['id'] = $str;
			
          // if ($this->Property->save($this->request->data)) {
           	 if (	$this->Property->save($this->data['Property'])) {
           	//if ($this->Property->updateAll(array('Property.id'=>'107'))) {
            	
                $this->Session->setFlash(__('Your property has been updated.'));
                return $this->redirect(array('controller'=>'offers', 'action'=>'index'));
            }
            $this->Session->setFlash(__('Unable to add your property.'));
        }
              
        	//$this->set('products', $this->Property->Product->find('all'));  
        	$this->set('offers', $this->Property->Offer->find('all'));  
    	/*
    if (!$id) {
        throw new NotFoundException(__('Invalid property'));
    }

    $property = $this->Property->findById($id);
    if (!$property) {
        throw new NotFoundException(__('Invalid property'));
    }

    if ($this->request->is(array('property', 'put'))) {
        $this->Property->id = $id;
        if ($this->Property->save($this->request->data)) {
            $this->Session->setFlash(__('Your property has been updated.'));
            return $this->redirect(array('controller'=>'demos', 'action'=>'view'));
        }
        $this->Session->setFlash(__('Unable to update your property.'));
    }

    if (!$this->request->data) {
        $this->request->data = $property;
    }*/

}

public function deleteProperty($id) {
    $this->Property->recursive = 0;	
        
    $this->set('properties', $this->Property->find('all'));	
    
    $this->Property->id = $id;

        if(!$this->Property->exists()) {
            throw new NotFoundException(__('Invalid property'));
        }

        if ($this->Property->delete($id)) {
            $this->Session->setFlash('The property with id: ' . $id . ' has been deleted.');
            $this->redirect(array('controller'=>'demos', 'action'=>'view'));
        }
}
    
public function addPropertyAdmin($offerid = null,$productid=null) {
      //$testid=$id;
      
       //echo "productid: ".$productid." offerid: ".$offerid;
       //print_r($test);
       
       $this->Factory->recursive = 0;
    	 $this->set('factories', $this->Factory->find('all'));
		 $this->Product->recursive = 0;
		 $this->set('products', $this->Product->find('all'));  
		 $this->Property->recursive = 0;
		 $this->set('properties', $this->Property->find('all'));	

       $this->set('offerid', $offerid);
     	 //$this->set('products', $this->Property->Product->find('all'));  
    	 $this->set('offers', $this->Property->Offer->find('all'));  
      
      // $this->set('myproduct', $this->Product->findAllById($test,array('fields' => array('wcwe'))));	
     // $this->set('myproduct', $this->Product->find('all', array('conditions'=>array('Product.id'=>$productid)),
       //'fields'=>array('Product.name')));	
       
       //$this->set('myproduct', $this->Product->find('list', array(
            //'conditions'=>array('Product.id'=>$productid),'fields'=>array('Product.name'))));
      //$this->set('myproductid',$productid);
     	//echo "sdvsdsdfvdsc".$id;
     	
        if ($this->request->is('post')) {
            $this->Property->create();
            if ($this->Property->save($this->request->data)) {
                $this->Session->setFlash(__('Your property has been saved.'));
                return $this->redirect(array('controller'=>'demos', 'action'=>'view'));
            }
            else{$this->Session->setFlash(__('Unable to add your property.'));}
        }
        
    }
    
     public function editPropertyAdmin() {
    	//$testid=$id;
      
      //$this->set('customid', $id);
      
      
     //	echo "sdvsdsdfvdsc".$id;
        if ($this->request->is('post')) {
           // $this->Property->create();
            if ($this->Property->save($this->request->data)) {
                $this->Session->setFlash(__('Your property has been saved.'));
                return $this->redirect(array('controller'=>'demos', 'action'=>'view'));
            }
            $this->Session->setFlash(__('Unable to add your property.'));
        }
        
        
        	$this->set('products', $this->Property->Product->find('all'));  
        	$this->set('offers', $this->Property->Offer->find('all'));  
    	/*
    if (!$id) {
        throw new NotFoundException(__('Invalid property'));
    }

    $property = $this->Property->findById($id);
    if (!$property) {
        throw new NotFoundException(__('Invalid property'));
    }

    if ($this->request->is(array('property', 'put'))) {
        $this->Property->id = $id;
        if ($this->Property->save($this->request->data)) {
            $this->Session->setFlash(__('Your property has been updated.'));
            return $this->redirect(array('controller'=>'demos', 'action'=>'view'));
        }
        $this->Session->setFlash(__('Unable to update your property.'));
    }

    if (!$this->request->data) {
        $this->request->data = $property;
    }*/

}

    
    
    
}

?>