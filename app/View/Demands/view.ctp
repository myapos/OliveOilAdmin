<!-- File: /app/View/Offers/view.ctp -->


	   		 
<div class="posts index">
	<h3>Please fill in your offer below</h3>
	<div class="table-responsive"> 
	<table cellpadding="0">
  		 
<div class="posts index">
	<h2>Offers</h2>
	<div class="table-responsive"> 
	<table cellpadding="0" cellspacing="0" class="table table-bordered table-hover">
	<tr>
			<th>id</th>
			<th>factory id</th>
			<th>product id</th>
			<th>quantity</th>
			<th>price</th>

			<th class="actions">Actions</th>
	</tr>

	<?php
	$i = 0;
	if(is_array($offers)) {
	foreach ($offers as $offer):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $offer['Offer']['id']; ?>&nbsp;</td>
		<td><?php echo $offer['Offer']['factory_id']; ?>&nbsp;</td>
		<td><?php echo $offer['Offer']['product_id']; ?>&nbsp;</td>
		<td><?php echo $offer['Offer']['quantity']; ?>&nbsp;</td>
		<td><?php echo $offer['Offer']['price']; ?>&nbsp;</td>
		<!-- <td><?php echo $offer['Offer']['user_id']; ?>&nbsp;</td> -->
	<!-- 	<td>	
			<ul>
			
	    		<?php 
	    		//foreach ($offers as $offer):
	    		if ($current_user['id'] == $demo['Demo']['user_id'] || $current_user['role'] == 'admin'): ?>
		   	 <li><?php echo $this->Html->link('Edit Demo', array('action' => 'editDemo', $demo['Demo']['id'])); ?> </li>
		    	 <li><?php echo $this->Form->postLink('Delete Demo', array('action' => 'deleteDemo', $demo['Demo']['id']), array('confirm'=>'Are you sure you want to delete that demo?')); ?> </li>
				<?php endif; 
				//endforeach; 
				?>
			</ul>
		</td> -->
	</tr>
<?php endforeach; 

} //end of if
?>
	</table>
	</div>
</div>

<div class="user index">
	<h2>Products</h2>
	<div class="table-responsive"> 
	<table cellpadding="0" cellspacing="0" class="table table-bordered table-responsive table-hover">
	<tr>
			<th>id</th>
			<th>name</th>
			<th>username</th>
			<th>email</th>
			<th>password</th>
			<th>role</th>
			<th class="actions">Actions</th>
	</tr>

	<?php
	$i = 0;
	if(is_array($products)) {
	foreach ($products as $product):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $product['Product']['id']; ?>&nbsp;</td>
		<td><?php echo $product['Product']['name']; ?>&nbsp;</td>
		<!-- <td><?php echo $user['User']['username']; ?>&nbsp;</td>
		<td><?php echo $user['User']['email']; ?>&nbsp;</td>
		<td><?php echo $user['User']['password']; ?>&nbsp;</td>
		<td><?php echo $user['User']['role']; ?>&nbsp;</td>
		<td>	
			<ul>
	    		<?php if ($current_user['id'] == $user['User']['id'] || $current_user['role'] == 'admin'): ?>
	    		 
		   	 <li><?php echo $this->Html->link('Edit User', array('action' => 'editUser', $user['User']['id'])); ?> </li>
		    	 <li><?php echo $this->Form->postLink('Delete user', array('action' => 'deleteUser', $user['User']['id']), array('confirm'=>'Are you sure you want to delete that user?')); ?> </li>
				<?php endif; ?>
			</ul>
		</td> -->
	</tr>



<?php endforeach; 

} //end of if
?>
	</table>
	</div>
</div>

<div class="actions">
	<h3>More Actions</h3>
	   <ul>
		<li><?php echo $this->Html->link('Register New Offer', array('action' => 'addOffer')); ?> </li>
		<li><?php echo $this->Html->link('Save New Product', array('action' => 'addProduct')); ?> </li>
	</ul>
</div>

<!-- llspacing="0" class="table table-bordered table-hover">
	<tr>
			<th>id</th>
			<th>title</th>
			<th>body</th>
			<th>created</th>
			<th>modified</th>
			<th>user_id</th>
			<th class="actions">Actions</th>
	</tr>

	<?php
	$i = 0;
	if(is_array($demos)) {
	foreach ($offers as $offer):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $offer['Offer']['id']; ?>&nbsp;</td>
		<td><?php echo $offer['Offer']['factory_id']; ?>&nbsp;</td>
		<td><?php echo $offer['Offer']['product_id']; ?>&nbsp;</td>

		<!-- <td>	
			<ul>
			
	    		<?php 
	    		//foreach ($users as $user):
	    		if ($current_user['id'] == $demo['Demo']['user_id'] || $current_user['role'] == 'admin'): ?>
		   	 <li><?php echo $this->Html->link('Edit Demo', array('action' => 'editDemo', $demo['Demo']['id'])); ?> </li>
		    	 <li><?php echo $this->Form->postLink('Delete Demo', array('action' => 'deleteDemo', $demo['Demo']['id']), array('confirm'=>'Are you sure you want to delete that demo?')); ?> </li>
				<?php endif; 
				//endforeach; 
				?>
			</ul>
		</td> -->
	</tr>
<?php endforeach; 

} //end of if
?>
	</table>
	</div>
</div>



<div class="user index">
	<h2>Products</h2>
	<div class="table-responsive"> 
	<table cellpadding="0" cellspacing="0" class="table table-bordered table-responsive table-hover">
	<tr>
			<th>id</th>
			<th>name</th>
		<!--	<th>ph</th>
			<th>certification</th>
			<th>package</th>
			<th>role</th>
			<th class="actions">Actions</th> -->
	</tr>



	<?php
	$i = 0;
	if(is_array($products)) {
	foreach ($products as $product):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $product['Product']['id']; ?>&nbsp;</td>
		<td><?php echo $product['Product']['name']; ?>&nbsp;</td>
	</tr>
	<!--
		<td><?php echo $product['Product']['username']; ?>&nbsp;</td>
		<td><?php echo $product['Product']['email']; ?>&nbsp;</td>
		<td><?php echo $product['Product']['password']; ?>&nbsp;</td>
		<td><?php echo $product['Product']['role']; ?>&nbsp;</td>
		<td>	
			<ul>
	    		<?php if ($current_user['id'] == $user['User']['id'] || $current_user['role'] == 'admin'): ?>
	    		 
		   	 <li><?php echo $this->Html->link('Edit User', array('action' => 'editUser', $user['User']['id'])); ?> </li>
		    	 <li><?php echo $this->Form->postLink('Delete user', array('action' => 'deleteUser', $user['User']['id']), array('confirm'=>'Are you sure you want to delete that user?')); ?> </li>
				<?php endif; ?>
			</ul>
		</td>
	</tr>
	-->
<?php endforeach; 

} //end of if
?>
	</table>
	</div>
</div> -->

<!-- <div class="actions">
	<h3>More Actions</h3>
	<ul>
		<li><?php echo $this->Html->link('Register New User', array('action' => 'addUser')); ?> </li>
		<li><?php echo $this->Html->link('Save New Demo', array('action' => 'addDemo')); ?> </li>
	</ul>
</div>
-->
