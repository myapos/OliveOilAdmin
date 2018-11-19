<?php class DemandsController extends AppController {
	
	 public $name = 'demands';
	 
    public $helpers = array('Html', 'Form');

    public $uses = array(
     					   'Demand',
       				   'Product',
       				   'Property'
    						); 
    						
public function index() {
        	$this->set('demands', $this->Demand->find('all'));
         $this->set('products', $this->Product->find('all'));
 			$this->set('properties', $this->Property->find('all'));
    }    
    
    
    public function view($id = null) {
    	$this->set('demands', $this->Demand->find('all'));
		$this->set('products', $this->Product->find('all'));
		 $this->set('properties', $this->Property->find('all'));
    	
       
        
    }    
   
   
/*    public function view($id = null) {
        if (!$id) {
            throw new NotFoundException(__('Invalid post'));
        }

        $demand = $this->Demand->findById($id);
        if (!$demand) {
            throw new NotFoundException(__('Invalid post'));
        }
        $this->set('demand', $demand);
    }  */ 
      
      
      
      public function addDemand() {
        if ($this->request->is('post')) {
            $this->Demand->create();
            if ($this->Demand->save($this->request->data)) {
                $this->Session->setFlash(__('Your post has been saved.'));
                return $this->redirect(array('controller'=>'demos', 'action'=>'view'));
            }
            $this->Session->setFlash(__('Unable to add your post.'));
        }
        
        
       
       		$this->set('demands', $this->Demand->Country->find('all')); 
        		 	$this->set('demands', $this->Demand->Product->find('all')); 
    }
    
    
    public function editDemand($id = null) {
    if (!$id) {
        throw new NotFoundException(__('Invalid post'));
    }

    $demand = $this->Demand->findById($id);
    if (!$demand) {
        throw new NotFoundException(__('Invalid post'));
    }

    if ($this->request->is(array('demand', 'put'))) {
        $this->Demand->id = $id;
        if ($this->Demand->save($this->request->data)) {
            $this->Session->setFlash(__('Your post has been updated.'));
            return $this->redirect(array('controller'=>'demos', 'action'=>'view'));
        }
        $this->Session->setFlash(__('Unable to update your post.'));
    }

    if (!$this->request->data) {
        $this->request->data = $demand;
    }
}

public function deleteDemand($id) {
    $this->Demand->recursive = 0;	
        
    $this->set('demands', $this->Demand->find('all'));	
    
    $this->Demand->id = $id;

        if(!$this->Demand->exists()) {
            throw new NotFoundException(__('Invalid demand'));
        }

        if ($this->Demand->delete($id)) {
            $this->Session->setFlash('The demand with id: ' . $id . ' has been deleted.');
            $this->redirect(array('controller'=>'demos', 'action'=>'view'));
        }
}
    
    
    
    
      public function addProduct() {
        if ($this->request->is('post')) {
            $this->Product->create();
            if ($this->Product->save($this->request->data)) {
                $this->Session->setFlash(__('Your post has been saved.'));
                return $this->redirect(array('controller'=>'demos', 'action'=>'view'));
            }
            $this->Session->setFlash(__('Unable to add your post.'));
        }
        
	    
        
        
    }
    
    
    public function editProduct($id = null) {
    if (!$id) {
        throw new NotFoundException(__('Invalid post'));
    }

    $product = $this->Product->findById($id);
    if (!$product) {
        throw new NotFoundException(__('Invalid post'));
    }

    if ($this->request->is(array('product', 'put'))) {
        $this->Product->id = $id;
        if ($this->Product->save($this->request->data)) {
            $this->Session->setFlash(__('Your post has been updated.'));
            return $this->redirect(array('action' => 'index'));
        }
        $this->Session->setFlash(__('Unable to update your post.'));
    }

    if (!$this->request->data) {
        $this->request->data = $product;
    }
}

public function deleteProduct($id) {
    if ($this->request->is('get')) {
        throw new MethodNotAllowedException();
    }

    if ($this->Product->delete($id)) {
        $this->Session->setFlash(
            __('The post with id: %s has been deleted.', h($id))
        );
        return $this->redirect(array('action' => 'index'));
    }
} 
 
 
      public function addProperty() {
        if ($this->request->is('post')) {
            $this->Property->create();
            if ($this->Property->save($this->request->data)) {
                $this->Session->setFlash(__('Your post has been saved.'));
                return $this->redirect(array('action' => 'index'));
            }
            $this->Session->setFlash(__('Unable to add your post.'));
        }
        
	    
        
        
    }
    
    
    public function editProperty($id = null) {
    if (!$id) {
        throw new NotFoundException(__('Invalid post'));
    }

    $property = $this->Property->findById($id);
    if (!$property) {
        throw new NotFoundException(__('Invalid post'));
    }

    if ($this->request->is(array('property', 'put'))) {
        $this->Property->id = $id;
        if ($this->Property->save($this->request->data)) {
            $this->Session->setFlash(__('Your post has been updated.'));
            return $this->redirect(array('action' => 'index'));
        }
        $this->Session->setFlash(__('Unable to update your post.'));
    }

    if (!$this->request->data) {
        $this->request->data = $property;
    }
}

public function deleteProperty($id) {
    if ($this->request->is('get')) {
        throw new MethodNotAllowedException();
    }

    if ($this->Property->delete($id)) {
        $this->Session->setFlash(
            __('The post with id: %s has been deleted.', h($id))
        );
        return $this->redirect(array('action' => 'index'));
    }
} 
 
 
    
}

?>