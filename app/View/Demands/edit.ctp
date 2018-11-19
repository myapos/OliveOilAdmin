<!-- File: /app/View/Offers/edit.ctp -->

<h1>Edit Product</h1>
<?php
echo $this->Form->create('Demand');
echo $this->Form->input('country_id', array('type' => 'text'));
echo $this->Form->input('product_id', array('type' => 'text'));
echo $this->Form->input('quantity');
echo $this->Form->input('price');

/*
echo $this->Form->input('body', array('rows' => '3')); */
echo $this->Form->input('id', array('type' => 'hidden'));
echo $this->Form->end('Save Product');
?>