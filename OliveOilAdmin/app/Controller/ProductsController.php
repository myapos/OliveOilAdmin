<?php class ProductsController extends AppController {
	
	 public $name = 'Products';
    public $helpers = array('Html', 'Form');

    public function index() {
        $this->set('products', $this->Product->find('all'));
    }
    
    public function view($id = null) {
        if (!$id) {
            throw new NotFoundException(__('Invalid product'));
        }

        $product = $this->Product->findById($id);
        if (!$product) {
            throw new NotFoundException(__('Invalid product'));
        }
        $this->set('product', $product);
    }   
      
      
      public function addProduct() {
        if ($this->request->is('post')) {
            $this->Product->create();
            if ($this->Product->save($this->request->data)) {
                $this->Session->setFlash(__('Your product has been saved.'));
                return $this->redirect(array('controller'=>'demos', 'action'=>'view'));
            }
            $this->Session->setFlash(__('Unable to product your post.'));
        }
     }
    
    
    public function editProduct($id = null) {
    	
    if (!$id) {
        throw new NotFoundException(__('Invalid product'));
    }

    $product = $this->Product->findById($id);
    if (!$product) {
        throw new NotFoundException(__('Invalid product'));
    }

    if ($this->request->is(array('product', 'put'))) {
        $this->Product->id = $id;
        if ($this->Product->save($this->request->data)) {
            $this->Session->setFlash(__('Your product has been updated.'));
            return $this->redirect(array('controller'=>'demos', 'action'=>'view'));
        }
        $this->Session->setFlash(__('Unable to update your product.'));
    }

    if (!$this->request->data) {
        $this->request->data = $product;
    }
}

public function deleteProduct($id) {
$this->Product->recursive = 0;	
        
    $this->set('products', $this->Product->find('all'));	
    
    $this->Product->id = $id;

        if(!$this->Product->exists()) {
            throw new NotFoundException(__('Invalid product'));
        }

        if ($this->Product->delete($id)) {
            $this->Session->setFlash('The product with id: ' . $id . ' has been deleted.');
            $this->redirect(array('controller'=>'demos', 'action'=>'view'));
        }
}
    
    
}

?>