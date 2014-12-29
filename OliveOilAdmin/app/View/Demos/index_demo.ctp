<!-- File: /app/View/Demos/index.ctp -->



<!-- Carousel
    ================================================== -->
    
<div class="carousel slide" id="myCarousel">
			
				<!-- Indicators -->
				<ol class="carousel-indicators">
					<li class="active" data-slide-to="0" data-target="#myCarousel"></li>
					<li data-slide-to="1" data-target="#myCarousel"></li>
					<li data-slide-to="2" data-target="#myCarousel"></li>
				</ol>
			
				<!-- Wrapper for slides -->
				<div class="carousel-inner">
					<div class="item active" id="slide1">
						<div class="carousel-caption">
							<h4>Welcome to OliveOilPriceObservatory</h4>
							<h5>Learn about greek olive oil</h5>
						</div><!-- end carousel-caption-->
					</div><!-- end item -->
					
					<div class="item" id="slide2">
						<div class="carousel-caption">
							<h4>You can</h4>
							<h5>be informed about olive oil  </h5>
						</div><!-- end carousel-caption-->
					</div><!-- end item -->
					
					<div class="item" id="slide3">
						<div class="carousel-caption">
							<h4>You can</h4>
							<h5>login and learn about worldwide olive oil offer and demand </h5>
						</div><!-- end carousel-caption-->
					</div><!-- end item -->
				</div><!-- carousel-inner -->
				
				<!-- Controls -->
				<a class="left carousel-control" data-slide="prev" href="#myCarousel"><span class="icon-prev"></span></a>
				<a class="right carousel-control" data-slide="next" href="#myCarousel"><span class="icon-next"></span></a>
			
			</div>
			<!-- end myCarousel -->
			
<p id="content-area">
Welcome to our site. The main purpose of this site is to give to the visitor interesting data
for olive oil in terms of international commerce. Data that are provided aim to international 
consumption and production of olive oil.Visitor can be be informed about olive oil and
it's properties.Please <?php echo $this->Html->link('login', array('controller'=>'demos', 'action'=>'loginDemo')); ?> 
or <?php echo $this->Html->link('register', array('controller'=>'demos', 'action'=>'addUser')); ?> in order to proceed.</p>


<!--
<div class="posts index">
	<h2>Demos</h2>
	<table cellpadding="0" cellspacing="0">
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
	foreach ($demos as $demo):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $demo['Demo']['id']; ?>&nbsp;</td>
		<td><?php echo $demo['Demo']['title']; ?>&nbsp;</td>
		<td><?php echo $demo['Demo']['body']; ?>&nbsp;</td>
		<td><?php echo $demo['Demo']['created']; ?>&nbsp;</td>
		<td><?php echo $demo['Demo']['modified']; ?>&nbsp;</td>
		<td><?php echo $demo['Demo']['user_id']; ?>&nbsp;</td>
		-->
		<!--
		<td class="actions">
			<?php echo $this->Html->link('View', array('action' => 'view', $user['User']['id'])); ?>
			<?php if ($current_user['id'] == $user['User']['id'] || $current_user['role'] == 'admin'): ?>
			    <?php echo $this->Html->link('Edit', array('action' => 'edit', $user['User']['id'])); ?>
			    <?php echo $this->Form->postLink('Delete', array('action' => 'delete', $user['User']['id']), array('confirm'=>'Are you sure you want to delete that user?')); ?>
		    <?php endif; ?>
		</td>-->
	<!--</tr>
<?php endforeach; ?>
	</table>
</div>
<div class="actions">
	<h3>Actions</h3>
	<ul>
		<li><?php echo $this->Html->link('New User', array('action' => 'add')); ?></li>
	</ul>
</div>
-->
