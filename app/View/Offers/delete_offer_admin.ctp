<!-- app/View/Users/deleteOffer.ctp 
<div class="offer form">
<?php echo $this->Form->create('Offer'); ?>
    <fieldset>
        <legend><?php echo __('Delete Offer'); ?></legend>
        <?php echo $this->Form->input('username');
        echo $this->Form->input('password');
        echo $this->Form->input('role', array(
            'options' => array('admin' => 'Admin', 'author' => 'Author')
        ));
    ?>
    </fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
-->