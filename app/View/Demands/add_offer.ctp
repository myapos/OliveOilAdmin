<h1>User: Add demand entry</h1>

<?php
echo $this->Form->create('Demand');
echo $this->Form->input('country_id', array('type' => 'text'));
echo $this->Form->input('product_id', array('type' => 'text'));
echo $this->Form->input('quantity');
echo $this->Form->input('price');
            
echo $this->Form->end('Save Post');
?>