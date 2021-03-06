<?php
class Demo extends AppModel {
	public $name = 'Demo';
	public $displayField = 'name';
	public $validate = array(
        'title' => array(
            'rule' => 'notEmpty'
        ),
        'body' => array(
            'rule' => 'notEmpty'
        )
    );
    // app/Model/Demo.php
/**/
public function isOwnedBy($demo, $user) {
    return $this->field('id', array('id' => $demo, 'user_id' => $user)) !== false;
}
}

?>