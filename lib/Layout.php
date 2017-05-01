<?php
# layout.php
require_once('PageTemplate.php');
?>
<!doctype html>
<html class="no-js" lang="en">
<head>	
    <title><?php if(isset($TPL->PageTitle)) { echo $TPL->PageTitle; } ?></title>
    <?php if(isset($TPL->ContentHead)) { include $TPL->ContentHead; } ?>
</head>
<body>
	<!-- Back to Top -->
	<p id="back-top"><a href="#top"><span class="fa fa-chevron-up"></span></a></p>
	
	<!-- Header Top -->  
	<div class="pageTop">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-sm-6">
					<p>Contáctanos: +591 4 xxx xx xx</p>
				</div>
				<div class="col-md-6 col-sm-6">
					<div class="socialIcons">
						<!--ul>
							<li><a href="#" class="icon22 darkblue"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#" class="icon22 blue"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#" class="icon22 lightRed"><i class="fa fa-instagram"></i></a></li>
						</ul-->
					</div>
				</div>
			</div>
		</div>
	</div>
	<div id="wrapper">
		<!-- Header -->
		<div class="headerCon">
			<div class="sticky-header-con">
				<div class="cbp-af-inner">
					<header id="pageHeader" class="container clearfix noBorder">
						<!-- Logo -->
						<div id="logo"> <a href="index.htm"><img src="img/logo.png" alt=""></a> </div>
						<!-- Main Navigation -->
						<nav id="mainNav">
							<ul class="menu">
							<?php 
							foreach ($menu as $key => $url) {
								echo '<li class="mainMenu'.($key==$TPL->ActivePage?" active":"").'"><a href="'.$url.'.php">'.$key.'</a></li>';
							}
							?>
							</ul>
						</nav>
					</header>
				</div>
			</div>
		</div>
	</div>

    <?php if(isset($TPL->ContentBody)) { include $TPL->ContentBody; } ?>
	
	<!-- Footer -->
	<footer class="footer">
		<div class="footerTop">
			<div class="container">
				<div class="row">
					<div class="col-md-4 col-sm-4">
						<!-- Widget -->
						<div class="widget">
							<h2 class="title">About Us</h2>
							<p>Fusce congue lacus id eros blandit varius. Duis id egestas turpis. In ut facilisis dui. Ut sit amet elit lacus, mattis tincidunt nisl. Integer rutrum pretium enim, ac venenatis erat aliquam non. Quisque leo odio, commodo nec mattis vitae, consequat id ligula lesuada fames.</p>
						</div>
					</div>
					<div class="col-md-4 col-sm-4">
						<!-- Widget -->
						<div class="widget">
							<h2 class="title">Popular Posts</h2>
							<div class="popularPost">
								<div class="postImg"> <img src="img/popular-post/70x50.gif" alt=""> </div>
								<div class="content">
									<h3 class="title"><a href="#">Fusce congue lacus id eros blandit variugs.</a></h3>
									<span class="date">Jun 08, 2012</span> 
								</div>
							</div>
							<div class="popularPost">
								<div class="postImg"> <img src="img/popular-post/70x50.gif" alt=""> </div>
								<div class="content">
									<h3 class="title"><a href="#">Fusce congue lacus id eros blandit variugs.</a></h3>
									<span class="date">Jun 08, 2012</span> 
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-4 col-sm-4">
						<!-- Widget -->
						<div class="widget">
							<h2 class="title">Connect with us</h2>
							<p>Falcon Creative Studio<br>8100 Marty Street<br>Overland Park, KS 66204</p>
							<p>Phone:  +1(582) 495 85 62<br>Email:<a href="#"> info@falconcreativestudio.com</a></p>
							<div class="socialIcons">
								<ul class="clearfix">
									<li><a href="#" class="icon22 blue"><span class="fa fa-twitter"></span></a></li>
									<li><a href="#" class="icon22 darkblue"><span class="fa fa-facebook"></span></a></li>
									<li><a href="#" class="icon22 red"><span class="fa fa-google-plus"></span></a></li>
									<li><a href="#" class="icon22 lightRed"><span class="fa fa-rss"></span></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- CopyRight -->
		<div class="copyright">
			<div class="container">
				<!-- FooterNav -->
				<nav class="bottomNav pull-left">
					<ul>
					<?php 
					foreach ($menu as $key => $url) {						
						echo '<li><a href="'.$url.'.php">'.$key.'</a></li>';
					}
					?>						
					</ul>
				</nav>
				<!-- Copyright Info -->
				<div class="pull-right">
					<p>&copy; <?php echo date('Y'); ?> <a href="index.htm">Madison Click</a>, All Rights Reserved.</p>
				</div>
			</div>
		</div>
	</footer>

	<script src="http://code.jquery.com/jquery-1.10.1.min.js"></script> 
	<script src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script> 
	<script>window.jQuery || document.write('<script src="js/libs/jquery-1.10.1.min.js"><\/script><script src="js/libs/jquery-migrate-1.2.1.min.js"><\/script>')</script> 
	<script src="js/bootstrap.min.js"></script> 
	<script src="js/plugins.js"></script> 
	<script src="js/script.js"></script>
	<script type="text/javascript" src="js/revolution/jquery.themepunch.revolution.min.js"></script>
	<script type="text/javascript">
		<?php if(isset($TPL->Scripts)) { include $TPL->Scripts; } ?>
	</script>
</body>
</html>