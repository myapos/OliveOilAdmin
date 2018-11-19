<?php class OffersController extends AppController {
	
	 public $name = 'Offers';
		// $uses is where you specify which models this controller uses
    	
	 public $uses = array(
     					   'User',
       				   'Demo',
       				   'Product',
       				   'Offer',
       				   'Property',
       				   'Factory'
    						); 			//from this line we refer to both of our models demo and user
    public $helpers = array('Html', 'Form');

    public function index() {
    	
      $this->Demo->recursive = 0;
		$this->User->recursive = 0;
		$this->Product->recursive = 0;
		$this->Offer->recursive = 0;
		$this->Property->recursive = 0;
      $this->Factory->recursive = 0;
    
    
      $this->set('factories', $this->Factory->find('all'));
		$this->set('demos', $this->Demo->find('all'));
		$this->set('users', $this->User->find('all'));
		$this->set('products', $this->Product->find('all'));
		$this->set('offers', $this->Offer->find('all'));
		$this->set('properties', $this->Property->find('all'));
}
    
    public function view($id = null) {
        if (!$id) {
            throw new NotFoundException(__('Invalid offer'));
        }

        $offer = $this->Offer->findById($id);
        if (!$offer) {
            throw new NotFoundException(__('Invalid offer'));
        }
        $this->set('offer', $offer);
}   
      
 
   /* xrisimopoieitai apo ton admin*/
    
public function editOfferAdmin($id = null) {
    	
    	
	 $this->Offer->id = $id;
    	
    $this->Offer->recursive = 0;	
    $this->Factory->recursive = 0;
    
    $this->set('offers', $this->Offer->find('all'));	
    $this->set('factories', $this->Factory->find('all'));
   
    if (!$id) {
    	echo $id;
    	
        throw new NotFoundException(__('Invalid offer'));
    }

    $offer = $this->Offer->findById($id);
    if (!$offer) {
    		echo $id;
        throw new NotFoundException(__('Invalid offer'));
    }

    if ($this->request->is(array('offer', 'put'))) {
    	
        $this->Offer->id = $id;
        if ($this->Offer->save($this->request->data)) {
            $this->Session->setFlash(__('Your offer has been updated.'));
            return $this->redirect(array('controller'=>'demos', 'action'=>'view'));
        }
        $this->Session->setFlash(__('Unable to update your offer.'));
    }
		
    if (!$this->request->data) {
        $this->request->data = $offer;
    }
}
/* xrisimopoieitai apo ton admin*/
public function addOfferAdmin() {

		
        if ($this->request->is('post')) {
            $this->Offer->create();
            if ($this->Offer->save($this->request->data)) {
                $this->Session->setFlash(__('Your offer has been saved.'));
                return $this->redirect(array('controller'=>'demos', 'action'=>'view'));
            }
            $this->Session->setFlash(__('Unable to add your offer.'));
        }
 
       		$this->set('offers', $this->Offer->Factory->find('all')); 
        		$this->set('offers', $this->Offer->Product->find('all')); 
}

   /* xrisimopoieitai apo ton admin*/
   
	public function deleteOfferAdmin($id) {
	 $this->Offer->recursive = 0;	
        
    $this->set('offers', $this->Offer->find('all'));	
    
    $this->Offer->id = $id;

        if(!$this->Offer->exists()) {
            throw new NotFoundException(__('Invalid offer'));
        }

        if ($this->Offer->delete($id)) {
            $this->Session->setFlash('The offer with id: ' . $id . ' has been deleted.');
            $this->redirect(array('controller'=>'demos', 'action'=>'view'));
        }
}
    

   /* xrisimopoieitai apo ton user*/
      
    public function addOffer() {
    	
    	 $this->Factory->recursive = 0;
    	 $this->set('factories', $this->Factory->find('all'));
		 $this->Product->recursive = 0;
		 $this->set('products', $this->Product->find('all'));  
		 $this->Property->recursive = 0;
		 $this->set('properties', $this->Property->find('all'));	
    
        if ($this->request->is('post')) {
            $this->Offer->create();
            if ($this->Offer->save($this->request->data)) {
                $this->Session->setFlash(__('Your offer has been saved.'));
                return $this->redirect(array('controller'=>'properties', 'action'=>'addProperty',$this->Offer->id,$this->request->data['Offer']['product_id']));
            }
            $this->Session->setFlash(__('Unable to add your offer.'));
        }
 
       		$this->set('offers', $this->Offer->Factory->find('all')); 
        		$this->set('offers', $this->Offer->Product->find('all')); 
}


/* xrisimopoieitai apo ton user*/
public function editOffer($id = null) {
	//echo "id:".$id;
 
 	
	$this->Demo->recursive = 0;
	$this->User->recursive = 0;
	$this->Product->recursive = 0;
	$this->Offer->recursive = 0;
	$this->Property->recursive = 0;
   $this->Factory->recursive = 0;
    
    
   $this->set('factories', $this->Factory->find('all'));
	$this->set('demos', $this->Demo->find('all'));
	$this->set('users', $this->User->find('all'));
	$this->set('products', $this->Product->find('all'));
	$this->set('offers', $this->Offer->find('all'));
	$this->set('properties', $this->Property->find('all'));
	
   $this->Offer->id = $id;
    	
   $this->Offer->recursive = 0;	
   $this->Factory->recursive = 0;
   
   $this->set('offers', $this->Offer->find('all'));	
   $this->set('factories', $this->Factory->find('all'));
   
   if (!$id) {
   	echo $id;
   	
       throw new NotFoundException(__('Invalid offer'));
   }

   $offer = $this->Offer->findById($id);
   $property  = $this->Property->findById($id);
   if (!$offer) {
   		echo $id;
       throw new NotFoundException(__('Invalid offer'));
   }

   if ($this->request->is(array('offer', 'put'))) {
   	
       $this->Offer->id = $id;
       if ($this->Offer->save($this->request->data)) {
           $this->Session->setFlash(__('Your offer has been updated.'));
           return $this->redirect(array('controller'=>'properties', 'action'=>'editProperty',$this->Offer->id,$this->request->data['Offer']['product_id'],$id	));
       }
       $this->Session->setFlash(__('Unable to update your offer.'));
   }
	
   if (!$this->request->data) {
       $this->request->data = $offer;
   }
}
 /* xrisimopoieitai apo ton user*/
	public function delete($id) {
	 $this->Offer->recursive = 0;	
        
    $this->set('offers', $this->Offer->find('all'));	
    
    $this->Offer->id = $id;

        if(!$this->Offer->exists()) {
            throw new NotFoundException(__('Invalid offer'));
        }

        if ($this->Offer->delete($id)) {
            $this->Session->setFlash('The offer with id: ' . $id . ' has been deleted.');
            $this->redirect(array('action' => 'index'));
        }
}
    
    
}

?>