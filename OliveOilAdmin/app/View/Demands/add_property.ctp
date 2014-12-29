<h1>User: Add Product entry</h1>
<?php
echo $this->Form->create('Property');


$ids = array('1' => 'OLIVE OIL - EXTRA VIRGIN','2' => 'OLIVE OIL - VIRGIN', '3' => 'OLIVE OIL - BIOLOGICAL', '4' => 'WINE');
echo $this->Form->input('product_id',
    array('options' => $ids, 'default' => '1')
);


$phs = array('<2' => '<2', '2-4' => '2-4', '>4' => '>4');
echo $this->Form->input('PH',
    array('options' => $phs, 'default' => '2-4')
);

$packages = array('NONE' => 'NONE', 'BOTTLE' => 'BOTTLE', 'CONTAINER' => 'CONTAINER');
echo $this->Form->input('package',
    array('options' => $packages, 'default' => 'BOTTLE')
);

$sizes = array('<1' => '<1', '1-5' => '1-5', '>5' => '>5');
echo $this->Form->input('size',
    array('options' => $sizes, 'default' => '1-5')
);


$certifications = array('YES' => 'YES', 'NO' => 'NO');
echo $this->Form->input('certification',
    array('options' => $certifications, 'default' => 'YES')
);



echo $this->Form->end('Save Post');
?>