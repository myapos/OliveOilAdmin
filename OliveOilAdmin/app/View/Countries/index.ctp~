<!-- File: /app/View/Factories/index.ctp -->
<h1>User: Factory information</h1>
<p><?php echo $this->Html->link('Enter your information', array('action' => 'add')); ?></p>
<table>
    <tr>
        <th>ID</th>
        <th>Name </th>
        <th>TAX account number</th>
        <th>County</th>
        <th> Region </th>
        <th> Type of Business </th>
 			<th> Telephone </th>
    </tr>

<!-- Here's where we loop through our $posts array, printing out post info -->
   <tr>
    <?php foreach ($factories as $factory): ?>
     <td>
            <?php echo $factory['Factory']['id']; ?>
     </td>
     <td>
            <?php echo $factory['Factory']['name']; ?>
     </td>
		<td>
            <?php echo $factory['Factory']['tax']; ?>
     </td>
                
         <td>
            <?php echo $factory['Factory']['county']; ?>
        </td>
         <td>
            <?php echo $factory['Factory']['region']; ?>
        </td>
        <td>
            <?php echo $factory['Factory']['type']; ?>
        </td>
        <td>
            <?php echo $factory['Factory']['telephone']; ?>
        </td>
          
        
  
     <!--  <td><?php echo $factory['Factory']['id']; ?></td>
        <td>
            <?php
                echo $this->Html->link(
                    $factory['Factory']['name'],
   
                    array('action' => 'view', $factory['Factory']['id'])
                );
            ?>
        </td> -->
        <td> 
            <?php
                echo $this->Form->postLink(
                    'Delete',
                    array('action' => 'delete', $factory['Factory']['id']),
                    array('confirm' => 'Are you sure?')
                );
            ?>
            <?php
                echo $this->Html->link(
                    'Edit', array('action' => 'edit', $factory['Factory']['id'])
                );
            ?>
        </td>
        
        
    </tr>
    <?php endforeach; ?>

</table>
