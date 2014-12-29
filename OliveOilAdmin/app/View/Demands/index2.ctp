<!-- File: /app/View/Demand/index.ctp -->
<h1>User: Offer entry</h1>
<p><?php echo $this->Html->link('Fill in demand', array('action' => 'add'));  ?>
</p>




<table>
    <tr>
        <th> Country id</th>
        <th> Product id </th>
        <th> Quantity (lt) </th>
        <th> Price (euros)</th>
    </tr>

<!-- Here's where we loop through our $posts array, printing out post info -->
   <tr>
    <?php foreach ($demands as $demand): ?>
     <td>
            <?php echo $demand['Demand']['country_id']; ?>
     </td>
                
         <td>
            <?php echo $demand['Demand']['product_id']; ?>
        </td>
         <td>
            <?php echo $demand['Demand']['quantity']; ?>
        </td>
                <td>
            <?php echo $demand['Demand']['price']; ?>
        </td>

        
        
  
     <!--  <td><?php echo $demand['Demand']['id']; ?></td>
        <td>
            <?php
                echo $this->Html->link(
                    $demand['Demand']['name'],
                    array('action' => 'view', $demand['Demand']['id'])
                );
            ?>
        </td> -->
        <td> 
            <?php
                echo $this->Form->postLink(
                    'Delete',
                    array('action' => 'delete', $demand['Demand']['id']),
                    array('confirm' => 'Are you sure?')
                );
            ?>
            <?php
                echo $this->Html->link(
                    'Edit', array('action' => 'edit', $demand['Demand']['id'])
                );
            ?>
        </td>
        
        
    </tr>
    <?php endforeach; ?>

</table>