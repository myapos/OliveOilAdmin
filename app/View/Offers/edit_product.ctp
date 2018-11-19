<!-- File: /app/View/Products/edit.ctp -->

<h1>Edit Product</h1>
<?php
echo $this->Form->create('Product');
echo $this->Form->input('id');
echo $this->Form->input('name');

/*
echo $this->Form->input('body', array('rows' => '3')); 
echo $this->Form->input('id', array('type' => 'hidden'));
*/
echo $this->Form->end('Save Product');
?>