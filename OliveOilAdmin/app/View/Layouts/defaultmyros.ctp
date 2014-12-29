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

$projectDescription = __d('cake_dev', 'Welcome to olive oil price observatory');
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
    <li><a href="http://www.uoc.gr/"><img src="img/logos/logoPK.png" alt="logoPK"></a></a></li>
    <li><a href="http://www.gge.gr/"><img src="img/logos/logoYpourgeiou.png" alt="logoYpougeiou"></a></li>
    <li><a href="https://ellak.gr/"><img src="img/logos/logoEllak.png" alt="logoEllak"></a></li>
    <li><a href="http://getbootstrap.com/"><img src="img/logos/logoBootstrap.png" alt="logoBootstrap"></a></li>
    <li><a href="http://cakephp.org/"><img src="img/logos/logoCakePHP.png" alt="logoCakePHP"></a></li>
     <li><a href="http://ma.ellak.gr//"><img src="img/logos/logoMonadesAristeias.png" alt="logoMonadesAristeias"></a></li>
  </ul>
</nav>



<div class="container-fluid">
    <div class="row">
        <div class="col-sm-6 col-md-4 col-md-offset-4" id="login-module">
            
            <div class="account-wall">
            <h1 class="text-center login-title">Please sign in</h1>
                    <span class="glyphicon glyphicon-user"></span>
                <form class="form-signin">
                <input type="text" class="form-control" placeholder="Email" required autofocus>
                <input type="password" class="form-control" placeholder="Password" required>
                <button class="btn btn-lg btn-primary btn-block" type="submit">
                    Sign in</button>
                <label class="checkbox text-center">
                    <input type="checkbox" value="remember-me">
                    Remember me
                </label>
                <a href="#" class="text-center need-help">Need help? </a><span class="clearfix"></span>
                <a href="#" class="text-center new-account">Create an account </a>
                </form>
            </div>
            
        </div>
    </div>
</div>
</div><!-- end of col-md-6-->  
<div class="col-md-6" > <!--.col-md-6--> 

 <!--menu --> 

<nav class="navbar navbar-default">
  <ul class="nav nav-justified navbar-nav">
    <li><a href="#"><img src="img/logos/logoOlive.png" alt="OliveOilPriceObservatory"></a></li>
    <li><a href="group.html">Home</a></li>
    <li><a href="group.html">Group</a></li>
    <li><a href="services.html">Services</a></li>
    <li><a href="positions.html">Positions</a></li>
  </ul>
</nav>

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
							<h4>Bootstrap 3</h4>
							<p>Learn how to build your first responsive website with the brand new Twitter Bootstrap 3!</p>
						</div><!-- end carousel-caption-->
					</div><!-- end item -->
					
					<div class="item" id="slide2">
						<div class="carousel-caption">
							<h4>Learn to code a website in 4-hours!</h4>
							<p>PSD to HTML5 &amp; CSS3 is a popular Udemy course that has helped thousands of aspiring web designers launch their web design career.</p>
						</div><!-- end carousel-caption-->
					</div><!-- end item -->
					
					<div class="item" id="slide3">
						<div class="carousel-caption">
							<h4>Web Hosting 101</h4>
							<p>Learn how to buy a perfect domain name and hosting package, and get your website live on the web with ease.</p>
						</div><!-- end carousel-caption-->
					</div><!-- end item -->
				</div><!-- carousel-inner -->
				
				<!-- Controls -->
				<a class="left carousel-control" data-slide="prev" href="#myCarousel"><span class="icon-prev"></span></a>
				<a class="right carousel-control" data-slide="next" href="#myCarousel"><span class="icon-next"></span></a>
			
			</div>
			<!-- end myCarousel -->
    
    
    <!-- end myCarousel -->
</div> <!-- end of col-md-6--> 

</div> <!-- end of first row-->

<!-- start of second row-->
<div class="row">

<div class="col-md-12" > 
<!--footer --> 
  <footer>
  	<div class="container-fluid"> 
  	<div class="row">
  	<div class="col-md-4" > <!--.col-md-4--> 
  		<h6>Copyright &copy; 2013 <a href="#">OliveOilPriceObservatory</a></h6></div>
  	<div class="col-md-4 " > <!--.col-md-4--> 
  		<h6>About Us</h6>
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor 
		incididunt ut labore et dolore magna aliqua. </p>
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
</div> <!-- end of second row-->
</div> <!-- end of container-->

	
</body>
</html>

