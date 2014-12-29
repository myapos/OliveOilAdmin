<!-- File: /app/View/Countries/index.ctp -->
<h1>Admin: Country information</h1>
<p><?php echo $this->Html->link('Enter your information', array('action' => 'add')); ?></p>
<table>
    <tr>
        <th>ID</th>
        <th>Country </th>
        <th>Euzone</th>
        <th>Currency</th>
    </tr>

<!-- Here's where we loop through our $posts array, printing out post info -->
   <tr>
    <?php foreach ($countries as $country): ?>
     <td>
            <?php echo $country['Country']['id']; ?>
     </td>
     <td>
            <?php echo $country['Country']['name']; ?>
     </td>
		<td>
            <?php echo $country['Country']['euzone']; ?>
     </td>
                
         <td>
            <?php echo $country['Country']['currency']; ?>
        </td>
  
        
  
     <!--  <td><?php echo $country['Country']['id']; ?></td>
        <td>
            <?php
                echo $this->Html->link(
                    $country['Country']['name'],
   
                    array('action' => 'view', $country['Country']['id'])
                );
            ?>
        </td> -->
        <td> 
            <?php
                echo $this->Form->postLink(
                    'Delete',
                    array('action' => 'delete', $country['Country']['id']),
                    array('confirm' => 'Are you sure?')
                );
            ?>
            <?php
                echo $this->Html->link(
                    'Edit', array('action' => 'edit', $country['Country']['id'])
                );
            ?>
        </td>
        
        
    </tr>
    <?php endforeach; ?>

</table>
