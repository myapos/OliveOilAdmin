<!-- File: /app/View/Products/index.ctp -->
<h1>User: Product entry</h1>
<p><?php echo $this->Html->link('Create new product', array('action' => 'add')); ?></p>
<table>
    <tr>
        <th>ID</th>
        <th>Name </th>
        <th>Action</th>
     
        <th> Created </th>
           <th>Modified</th>
          
    </tr>

<!-- Here's where we loop through our $posts array, printing out post info -->
   <tr>
    <?php foreach ($products as $product): ?>
     <td>
            <?php echo $product['Product']['id']; ?>
     </td>
     <td>
            <?php echo $product['Product']['name']; ?>
     </td>
     
     <!--
		<td>
            <?php echo $product['Product']['type']; ?>
     </td>
                
         <td>
            <?php echo $property['Properties']['PH']; ?>
        </td>
         <td>
            <?php echo $product['Product']['package']; ?>
        </td>
                <td>
            <?php echo $product['Product']['size']; ?>
        </td>
         <td>
            <?php echo $product['Product']['certification']; ?>
        </td>
        -->
        
  
     <!--  <td><?php echo $product['Product']['id']; ?></td>
        <td>
            <?php
                echo $this->Html->link(
                    $product['Product']['name'],
                    array('action' => 'view', $product['Product']['id'])
                );
            ?>
        </td> -->
        <td> 
            <?php
                echo $this->Form->postLink(
                    'Delete',
                    array('action' => 'delete', $product['Product']['id']),
                    array('confirm' => 'Are you sure?')
                );
            ?>
            <?php
                echo $this->Html->link(
                    'Edit', array('action' => 'edit', $product['Product']['id'])
                );
            ?>
        </td>
        
        <td>
            <?php echo $product['Product']['created']; ?>
        </td>
         <td>
            <?php echo $product['Product']['modified']; ?>
        </td>
    </tr>
    <?php endforeach; ?>

</table>