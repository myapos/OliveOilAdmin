<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$projectDescription = __d('cake_dev', 'Welcome to olive oil admin');
$cakeVersion = __d('cake_dev', 'CakePHP %s', Configure::version())
?>
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php 
		echo $projectDescription 
		?>
		<?php 
		echo $this->fetch('title'); 
		?>
	</title>
	<?php
		/*		
		echo $this->Html->meta('icon');

		echo $this->Html->css('cake.generic');

		*/
		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
		
		
		echo $this->Html->meta('favicon.ico','img/favicon.ico',array('type' => 'icon')); //replace favicon with olive!!
		//don't change the order of these echo lines. It affects drop down menu's
		echo $this->Html->script('jquery-1.11.2.min');//integrates JQuery with cakephp
		echo $this->Html->css('bootstrap.min'); //integrates bootstrap with cakephp
		echo $this->Html->script('bootstrap.min');//integrates bootstrap with cakephp
		echo $this->Html->css('myCSS'); //integrates custom css with cakephp
		echo $this->Html->script('script');//integrates Custom JS with cakephp
		echo $this->Html->script('modernizr-2.6.2.min');//integrates with older browsers
		//don't change the order of these echo lines. It affects drop down menu's
		
		
		echo $this->Html->script('grids.min');//integrates with grid plugin for equal column height
		
	?>
</head>
<body>

<div class="container-fluid">
<div class="row text-center">
<div class="col-md-6 text-center" > <!--.col-md-6--> 

<nav class="navbar navbar-default">
  <ul class="nav nav-justified navbar-nav">
      <li><?php echo $this->Html->link(
					$this->Html->image('logos/logoPK.png', array('alt' => 'logoPK', 'border' => '0')),
					'http://www.uoc.gr/',
					array('target' => '_blank', 'escape' => false, 'id' => 'logoPK')
				);?>
		</li>
	   <li><?php echo $this->Html->link(
					$this->Html->image('logos/logoYpourgeiou.png', array('alt' => 'logoYpougeiou', 'border' => '0')),
					'http://www.gge.gr/',
					array('target' => '_blank', 'escape' => false, 'id' => 'logoYpougeiou')
				);?>
		</li>			
		<li><?php echo $this->Html->link(
					$this->Html->image('logos/logoEllak.png', array('alt' => 'logoEllak', 'border' => '0')),
					'https://ellak.gr/',
					array('target' => '_blank', 'escape' => false, 'id' => 'logoEllak')
				);?>
		</li>
	  <li><?php echo $this->Html->link(
					$this->Html->image('logos/logoBootstrap.png', array('alt' => 'logoBootstrap', 'border' => '0')),
					'http://getbootstrap.com/',
					array('target' => '_blank', 'escape' => false, 'id' => 'logoBootstrap')
				);?>
	 </li>
	 <li><?php echo $this->Html->link(
					$this->Html->image('logos/logoCakePHP.png', array('alt' => 'logoCakePHP', 'border' => '0')),
					'http://cakephp.org/',
					array('target' => '_blank', 'escape' => false, 'id' => 'logoCakePHP')
				);?>
	 </li>
	 <li><?php echo $this->Html->link(
					$this->Html->image('logos/logoMonadesAristeias.png', array('alt' => 'logoMonadesAristeias', 'border' => '0')),
					'http://ma.ellak.gr/',
					array('target' => '_blank', 'escape' => false, 'id' => 'logoMonadesAristeias')
				);?>
	 </li>
  <!--
    <li><a href="http://www.uoc.gr/"><img src="../img/logos/logoPK.png" alt="logoPK"></a></a></li>
    <li><a href="http://www.gge.gr/"><img src="img/logos/logoYpourgeiou.png" alt="logoYpougeiou"></a></li>
    <li><a href="https://ellak.gr/"><img src="img/logos/logoEllak.png" alt="logoEllak"></a></li>
    <li><a href="http://getbootstrap.com/"><img src="img/logos/logoBootstrap.png" alt="logoBootstrap"></a></li>
    <li><a href="http://cakephp.org/"><img src="img/logos/logoCakePHP.png" alt="logoCakePHP"></a></li>
    <li><a href="http://ma.ellak.gr/"><img src="img/logos/logoMonadesAristeias.png" alt="logoMonadesAristeias"></a></li>
    <li><?php echo $this->Html->link(
					$this->Html->image('cake.power.gif', array('alt' => $projectDescription, 'border' => '0')),
					'http://www.cakephp.org/',
					array('target' => '_blank', 'escape' => false, 'id' => 'cake-powered')
				);?></li>
     -->
  </ul>
</nav>



<!--login-->

</div>
<!-- end of col-md-6-->  
<div class="col-md-6" > <!--.col-md-6--> 

 <!--menu --> 

<nav class="navbar navbar-default">
  <ul class="nav nav-justified navbar-nav">
    <li><?php echo $this->Html->link(
					$this->Html->image('logos/logoOlive.png', array('alt' => 'logoOlive', 'border' => '0')),
					'../',
					array('escape' => false, 'id' => 'logoOlive')
				);?>
	 </li>
    <li><?php echo $this->Html->link('Home', '../');?></li>
	 <!-- mkoutsog -->
    <li><?php echo $this->Html->link('History', array('controller'=>'demos', 'action'=>'describeDemo'));?></li>
	 <li><?php echo $this->Html->link('Variety', array('controller'=>'demos', 'action'=>'varyDemo'));?></li>
    <li><?php echo $this->Html->link('Why_Greek?', array('controller'=>'demos', 'action'=>'bragDemo'));?></li>
    <li><?php echo $this->Html->link('Contact_us', array('controller'=>'demos', 'action'=>'contactDemo'));?></li>
 	 <li><?php echo $this->Html->link('Matches', array('controller'=>'matchings', 'action'=>'indexMatchings'));?></li>
  </ul>
</nav>

</div> <!-- end of col-md-6--> 

</div> <!-- end of first row-->


<!-- start of second row-->
<div class="row">
<div class="col-md-12" > 
		    <div style="text-align: right;" id="login">
		        <?php if ($logged_in): ?>
		            Welcome <?php echo $current_user['username']; ?>.
		            <br>You can <?php echo $this->Html->link('Logout', array('controller'=>'demos', 'action'=>'logoutDemo')); ?>
		        <?php else: ?>
		            <?php echo $this->Html->link('Login', array('controller'=>'demos', 'action'=>'loginDemo')); ?>
		        <?php endif; ?>
		    </div>
<!--content presentation area-->
			<?php echo $this->Session->flash(); ?>
			<?php echo $this->Session->flash('auth'); ?>
			<?php echo $content_for_layout; ?>
</div> <!-- end of 12 cols row-->
</div> <!-- end of second row-->
 <!--end of container-->
<!-- start of third row-->
<div class="row">

<div class="col-md-12" > 
<!--footer --> 
  <footer>
  	<div class="container-fluid"> 
  	<div class="row">
  	<div class="col-md-4" > <!--.col-md-4--> 
  		<h6>Copyright &copy; 2014 <?php echo $this->Html->link('OliveOilAdmin', '../');?></a></h6></div>
  	<div class="col-md-4 " > <!--.col-md-4--> 
  		<h6>About Us</h6>
		Please visit our web pages. 
		<ul>
		 	<li><a href="http://myapos.oncrete.gr" target="_blank">Apostolakis Myron</a> </li>
			<li> <a href="http://www.csd.uoc.gr/~mkoutsog/" target="_blank">Maria Koutsogiannaki</a> </li>
		 	<li><a href="#">Dora Giakoumaki</a> </li>
	   </ul>	
		 
	</div>
  	<div class="col-md-4 text-right" > <!--.col-md-4--> 
  	<h6>Coded with <span class="glyphicon glyphicon-heart"></span> by 
  		<ul>
  		<li>Apostolakis Myron,</li>
  		<li>Maria Koutsogiannaki, </li>
  		<li>Dora Giakoumaki</li>
  		</ul> 
  	</h6>
  	</div>
  	
  	</div>
  </footer> <!--end of footer  -->
</div> <!-- end of 12 cols row-->
</div> <!-- end of third row-->
</div> <!-- end of container-->

	
</body>
</html>


