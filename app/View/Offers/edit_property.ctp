<!-- File: /app/View/Properties/edit.ctp -->

<h1>Edit Product characteristics</h1>
<?php
echo $this->Form->create('Property');


$phs = array('<2' => '<2', '2-4' => '2-4', '>4' => '>4');
echo $this->Form->input('PH',
    array('options' => $phs, 'default' => '')
);

$packages = array('NONE' => 'NONE', 'BOTTLE' => 'BOTTLE', 'CONTAINER' => 'CONTAINER');
echo $this->Form->input('package',
    array('options' => $packages, 'default' => '')
);

$sizes = array('<1' => '<1', '1-5' => '1-5', '>5' => '>5');
echo $this->Form->input('size',
    array('options' => $sizes, 'default' => '')
);

$certifications = array('YES' => 'YES', 'NO' => 'NO');
echo $this->Form->input('certification',
    array('options' => $certifications, 'default' => '')
);

/*
echo $this->Form->input('body', array('rows' => '3')); */
echo $this->Form->input('id', array('type' => 'hidden'));
echo $this->Form->end('Save Characteristics');
?>