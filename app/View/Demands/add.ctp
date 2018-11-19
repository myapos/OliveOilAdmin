<h1>User: Add demand entry</h1>

<?php
echo $this->Form->create('Demand');
echo $this->Form->input('country_id', array('type' => 'text'));

$names = array('OLIVE OIL' => 'OLIVE OIL', 'WINE' => 'WINE');
echo $this->Form->input('name',
    array('options' => $names, 'default' => 'OLIVE OIL')
);
echo $this->Form->input('quantity');
echo $this->Form->input('price');
            
echo $this->Form->end('Save Post');
?>