<?php
require_once 'includes/head.php';

?>
<div class="container">
	<header class="slide">     <!--	Add "slideRight" class to items that move right when viewing Nav Drawer  -->
		<ul id="navToggle" class="burger slide">    <!--	Add "slideRight" class to items that move right when viewing Nav Drawer  -->
			<li></li><li></li><li></li>
		</ul>
		<h1>Inicio</h1>
	</header>
	
	
	<nav class="slide">
		<div class="block block-slideshow">
			<div class="block-content">
				<ul>
					<li><a href="../trunk.html" class="active">HOME</a></li>
					<li><a href="#">LINK TWO</a></li>
					<li><a href="#">LINK THREE</a></li>
					<li><a href="#">LINK FOUR</a></li>
					<li><a href="#">LINK FIVE</a></li>
					<li><a href="#">LINK SIX</a></li>
					<li><a href="#">LINK SEVEN</a></li>
				</ul>
			</div>	
		</div>
	</nav>
	
	<div class="content slide">     <!--	Add "slideRight" class to items that move right when viewing Nav Drawer  -->
		<ul class="responsive">
			<li class="header-section">
				<p class="placefiller">HEADER</p>
			</li>
			<li class="body-section">
				<p class="placefiller">BODY</p>
			</li>
			<li class="footer-section">
				<p class="placefiller">FOOTER</p>
			</li>
		</ul>
	</div>
</div>
<?php

require_once 'includes/footer.php';