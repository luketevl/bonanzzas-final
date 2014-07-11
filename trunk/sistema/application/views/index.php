<?php
require_once 'includes/head.php';

?>


<div class="container-trunk">

	<header class="slide">     <!--	Add "slideRight" class to items that move right when viewing Nav Drawer  -->
		<ul id="navToggle" class="burger slide">    <!--	Add "slideRight" class to items that move right when viewing Nav Drawer  -->
			<li></li><li></li><li></li>
		</ul>
		<h1>Escrit�rio Virtual</h1>
	</header>

	<nav class="slide">
		<ul>
			<li><a href="pagina_inicial" class="active">Inicio</a></li>
			<li><a href="#">Cadastro</a></li>
			<li><a href="#">Rede</a></li>
			<li><a href="#">Extrato</a></li>
			<li><a href="../../lojavirtual/sales/order/history/">Faturas</a></li>
			<li><a href="#">Relatórios</a></li>
			<li><a href="#">Midia Digital</a></li>
			<li><a href="../../lojavirtual/customer/account/index/">Meus Dados</a></li>
			<li><a href="ajuda">Comunicados</a></li>
			<li><a href="../../lojavirtual/">Loja Virtual</a></li>
			<li><a href="#">Parceiros</a></li>
			<li><a href="#">Ajuda</a></li>
		</ul>
	</nav>
	
	<div class="content slide">     <!--	Add "slideRight" class to items that move right when viewing Nav Drawer  -->
		<ul class="responsive">
			<li class="header-section">
				<p class="placefiller">
					<div class="embed-responsive embed-responsive-4by3" style="width:100%;">
					  <iframe class="embed-responsive-item" src="pagina_inicial" style="width:100%;" id="iframe_principal"></iframe>
					</div>
				</p>
			</li>
			<li class="body-section">
				<p class="placefiller"></p>
			</li>
			
<?php

require_once 'includes/footer.php';