<?php

class AppController extends Controller {
	 	
	public $components = array(
        'Session',
        'Auth'=>array(
            'loginRedirect'=>array('controller'=>'demos', 'action'=>'view'),
            'logoutRedirect'=>array('controller'=>'demos', 'action'=>'indexDemo'),
            'authError'=>"You can't access that page",
            'authorize'=>array('Controller')
        )
    );
     
    public function isAuthorized($user) {
        return true;
    }
        
    public function beforeFilter() {
        $this->Auth->allow('indexDemo','loginDemo','addUser', 'describeDemo', 'varyDemo', 'bragDemo', 'contactDemo');
        $this->set('logged_in', $this->Auth->loggedIn());
        $this->set('current_user', $this->Auth->user());
    }
}
?>