<?php class CountriesController extends AppController {
	
	 public $name = 'Countries';
    public $helpers = array('Html', 'Form');

    public function index() {
        $this->set('countries', $this->Country->find('all'));
    }
    
    public function view($id = null) {
        if (!$id) {
            throw new NotFoundException(__('Invalid country'));
        }

        $country = $this->Country->findById($id);
        if (!$country) {
            throw new NotFoundException(__('Invalid country'));
        }
        $this->set('country', $country);
    }   
      
      
      public function addCountry() {
        if ($this->request->is('post')) {
            $this->Country->create();
            if ($this->Country->save($this->request->data)) {
                $this->Session->setFlash(__('Your country has been saved.'));
                return $this->redirect(array('controller'=>'demos', 'action'=>'view'));
            }
            $this->Session->setFlash(__('Unable to add your country.'));
        }
    }
    
    
    public function editCountry($id = null) {
    if (!$id) {
        throw new NotFoundException(__('Invalid country'));
    }

    $country = $this->Country->findById($id);
    if (!$country) {
        throw new NotFoundException(__('Invalid country'));
    }

    if ($this->request->is(array('country', 'put'))) {
        $this->Country->id = $id;
        if ($this->Country->save($this->request->data)) {
            $this->Session->setFlash(__('Your country has been updated.'));
            return $this->redirect(array('controller'=>'demos', 'action'=>'view'));
        }
        $this->Session->setFlash(__('Unable to update your country.'));
    }

    if (!$this->request->data) {
        $this->request->data = $country;
    }
}

public function deleteCountry($id) {
    $this->Country->recursive = 0;	
        
    $this->set('countries', $this->Country->find('all'));	
    
    $this->Country->id = $id;

        if(!$this->Country->exists()) {
            throw new NotFoundException(__('Invalid country'));
        }

        if ($this->Country->delete($id)) {
            $this->Session->setFlash('The country with id: ' . $id . ' has been deleted.');
            $this->redirect(array('controller'=>'demos', 'action'=>'view'));
        }
}
    
    
}

?>