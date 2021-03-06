<?php
class DemosController extends AppController {


   public $name = 'Demos';
		// $uses is where you specify which models this controller uses
    	
	public $uses = array(
     					   'User',
       				   'Demo',
       				   'Product',
       				   'Offer',
       				   'Factory',
       				   'Demand',
       				   'Country',
       				   'Property'
    						); 			//from this line we refer to both of our models demo and user
	public function indexDemo() {
		$this->Demo->recursive = 0;
		$this->User->recursive = 0;
		$this->Product->recursive = 0;
		$this->Offer->recursive = 0;
		$this->Factory->recursive = 0;


		$this->set('demos', $this->Demo->find('all'));
		$this->set('users', $this->User->find('all'));
		$this->set('products', $this->Product->find('all'));
		$this->set('offers', $this->Offer->find('all'));
		$this->set('factories', $this->Factory->find('all'));

		//$this->set('offers', $offers);
	}
	
	public function loginDemo() {
		
	    if ($this->request->is('post')) {
	        if ($this->Auth->login()) {
	            $this->redirect($this->Auth->redirect());   
	        } else {
	            $this->Session->setFlash('Your username/password combination was incorrect');
	        }
	    }
	}
	
	public function logoutDemo() {
	    $this->redirect($this->Auth->logout());
	}	
	
	/*
	*Display all data from tables
	*
	*/
	public function view() {
		$this->set('demos', $this->Demo->find('all'));
		$this->set('users', $this->User->find('all'));
		$this->set('products', $this->Product->find('all'));
		$this->set('offers', $this->Offer->find('all'));
		$this->set('factories', $this->Factory->find('all'));
		$this->set('demands', $this->Demand->find('all'));
		$this->set('countries', $this->Country->find('all'));
		$this->set('properties', $this->Property->find('all'));
		
	}
	
	public function addUser() {
		//$this->loadModel('User');
		if ($this->request->is('post')) {
			
			if ($this->User->save($this->request->data)) {
				$this->Session->setFlash('The user has been saved');
				$this->redirect(array('action' => 'loginDemo'));
			} else {
				$this->Session->setFlash('The user could not be saved. Please, try again.');
			}
		}
	}
	

	
	/*
	*Edit user data
	*
	*/
	public function editUser($id = null) {
		$this->User->id = $id;
		
		if (!$this->User->exists()) {
			throw new NotFoundException('Invalid user');
		}
		
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->User->save($this->request->data)) {
				$this->Session->setFlash('The user has been saved');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('The user could not be saved. Please, try again.');
			}
		} else {
			$this->request->data = $this->User->read();
		}
	}

	/*
	*Delete user data
	*
	*/
	public function deleteUser($id = null) {
		if ($this->request->is('get')) {
			throw new MethodNotAllowedException();
		}
		
		if (!$id) {
			$this->Session->setFlash('Invalid id for user');
			$this->redirect(array('action'=>'view'));
		}
		if ($this->User->delete($id)) {
			$this->Session->setFlash('User deleted');
			$this->redirect(array('action'=>'view'));
		}
		$this->Session->setFlash('User was not deleted');
		$this->redirect(array('action' => 'view'));
	}


/*
*Edit demo
*
*/
public function editDemo($id = null) {
    if (!$id) {
        throw new NotFoundException(__('Invalid post'));
    }

    $demo = $this->Demo->findById($id);
    if (!$demo) {
        throw new NotFoundException(__('Invalid post'));
    }

    if ($this->request->is(array('demo', 'put'))) {
        $this->Demo->id = $id;
        if ($this->Demo->save($this->request->data)) {
            $this->Session->setFlash(__('Your demo has been updated.'));
            return $this->redirect(array('action' => 'view'));
        }
        $this->Session->setFlash(__('Unable to update your demo.'));
    }

    if (!$this->request->data) {
        $this->request->data = $demo;
    }
}

public function deleteDemo($id) {
    if ($this->request->is('get')) {
        throw new MethodNotAllowedException();
    }

    if ($this->Demo->delete($id)) {
        $this->Session->setFlash(
            __('The demo with id: %s has been deleted.', h($id))
        );
        return $this->redirect(array('action' => 'view'));
    }
    
    
}

public function addDemo() {
    if ($this->request->is('post')) {
        //Added this line
        $this->request->data['Demo']['user_id'] = $this->Auth->user('id');
        if ($this->Demo->save($this->request->data)) {
            $this->Session->setFlash(__('Your post has been saved.'));
            return $this->redirect(array('action' => 'view'));
        }
    }
}

// mkoutsog

public function describeDemo() {
	
	if ($this->request->is('post')) {
			
			if ($this->User->save($this->request->data)) {
				$this->Session->setFlash('The user has been saved');
				$this->redirect(array('action' => 'describeDemo'));
			} else {
				$this->Session->setFlash('The user could not be saved. Please, try again.');
			}
		}
        }
		
		
public function varyDemo() {
	
	if ($this->request->is('post')) {
			
			if ($this->User->save($this->request->data)) {
				$this->Session->setFlash('The user has been saved');
				$this->redirect(array('action' => 'varyDemo'));
			} else {
				$this->Session->setFlash('The user could not be saved. Please, try again.');
			}
		}
        }
		
	public function bragDemo() {
	
	if ($this->request->is('post')) {
			
			if ($this->User->save($this->request->data)) {
				$this->Session->setFlash('The user has been saved');
				$this->redirect(array('action' => 'bragDemo'));
			} else {
				$this->Session->setFlash('The user could not be saved. Please, try again.');
			}
		}
    }
		
public function contactDemo() {
	
	if ($this->request->is('post')) {
			
			if ($this->User->save($this->request->data)) {
				$this->Session->setFlash('The user has been saved');
				$this->redirect(array('action' => 'contactDemo'));
			} else {
				$this->Session->setFlash('The user could not be saved. Please, try again.');
			}
		}
        }

}


?>