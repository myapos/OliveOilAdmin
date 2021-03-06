<?php class FactoriesController extends AppController {
	
    public $name = 'Factories';
	
    public $helpers = array('Html', 'Form');
	 public $uses = array(
	 						'User',
       				   'Factory'
    						); 			//from this line we refer to both of our models demo and user
    public function index() {
        $this->set('factories', $this->Factory->find('all'));
    }
    
    public function view($id = null) {
        if (!$id) {
            throw new NotFoundException(__('Invalid factory'));
        }

        $factory = $this->Factory->findById($id);
        if (!$factory) {
            throw new NotFoundException(__('Invalid factory'));
        }
        $this->set('factory', $factory);
    }   
      
      
      public function addFactory() {
      $this->Factory->recursive = 0;
      $this->set('factories', $this->Factory->find('all'));
      $this->User->recursive = 0;
      $this->set('users', $this->User->find('all'));
      
        if ($this->request->is('post')) {
            $this->Factory->create();
            if ($this->Factory->save($this->request->data)) {
                $this->Session->setFlash(__('Your factory has been saved.'));
                return $this->redirect(array('controller'=>'demos', 'action'=>'view'));
            }
            $this->Session->setFlash(__('Unable to add your factory.'));
        }
    }
    
    
    public function editFactory($id = null) {
    if (!$id) {
        throw new NotFoundException(__('Invalid factory'));
    }

    $factory = $this->Factory->findById($id);
    if (!$factory) {
        throw new NotFoundException(__('Invalid factory'));
    }

    if ($this->request->is(array('factory', 'put'))) {
        $this->Factory->id = $id;
        if ($this->Factory->save($this->request->data)) {
            $this->Session->setFlash(__('Your factory has been updated.'));
            return $this->redirect(array('controller'=>'demos', 'action'=>'view'));
        }
        $this->Session->setFlash(__('Unable to update your factory.'));
    }

    if (!$this->request->data) {
        $this->request->data = $factory;
    }
}

public function deleteFactory($id) {
    $this->Factory->recursive = 0;	
        
    $this->set('factories', $this->Factory->find('all'));	
    
    $this->Factory->id = $id;

        if(!$this->Factory->exists()) {
            throw new NotFoundException(__('Invalid factory'));
        }

        if ($this->Factory->delete($id)) {
            $this->Session->setFlash('The factory with id: ' . $id . ' has been deleted.');
            $this->redirect(array('controller'=>'demos', 'action'=>'view'));
        }
}
    
    
}

?>