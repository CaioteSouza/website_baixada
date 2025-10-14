<?php // Header com logo e navegação principal ?>
<link rel="stylesheet" href="<?= $basePath ?>/assets/css/header.css">

<div class="header">
	<div class="container header__wrap">
		<a href="<?= $basePath ?>/" class="header__logo" aria-label="SindHosfil - Linosesp">
			<img src="<?= $basePath ?>/assets/img/Logos/Logo-SindHosfil.png" alt="SindHosfil" onerror="this.style.display='none'">
		</a>
		
		<!-- Menu Desktop -->
		<nav class="header__nav" aria-label="Menu principal">
			<ul>
				<li><a href="#">Início</a></li>
				<li><a href="#">O Sindicato</a></li>
				<li><a href="#">Diretoria</a></li>
				<li><a href="#">Convenções Coletivas</a></li>
				<li><a href="#">Notícias</a></li>
				<li><a href="#">Contato</a></li>
			</ul>
		</nav>

		<!-- Botão Hamburger (mobile) -->
		<button class="header__hamburger" aria-label="Abrir menu" aria-expanded="false">
			<span></span>
			<span></span>
			<span></span>
		</button>
	</div>
</div>

<!-- Menu Mobile (sidebar) -->
<nav class="header__nav--mobile" aria-label="Menu mobile">
	<ul>
		<li><a href="#">Início</a></li>
		<li><a href="#">O Sindicato</a></li>
		<li><a href="#">Diretoria</a></li>
		<li><a href="#">Convenções Coletivas</a></li>
		<li><a href="#">Notícias</a></li>
		<li><a href="#">Contato</a></li>
	</ul>
</nav>

<!-- Overlay para fechar menu mobile -->
<div class="header__overlay"></div>