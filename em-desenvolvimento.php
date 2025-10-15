<?php $head_title = "Em Desenvolvimento - SindHosfil Linosesp" ?>
<?php $body_class = "page-desenvolvimento" ?>
<?php require_once('includes/top-layout.php'); ?>
<?php require_once('includes/header.php'); ?>

<link rel="stylesheet" href="<?= $basePath ?>/assets/css/desenvolvimento.css">

<main class="desenvolvimento">
	<div class="container">
		<div class="desenvolvimento__content">
			<div class="desenvolvimento__icon">
				<i class="fa-solid fa-screwdriver-wrench"></i>
			</div>
			<h1 class="desenvolvimento__title">Página em Desenvolvimento</h1>
			<p class="desenvolvimento__text">
				Esta página está sendo construída e em breve estará disponível com todas as informações que você precisa.
			</p>
			<a href="<?= $basePath ?>/" class="desenvolvimento__button">
				<i class="fa-solid fa-arrow-left"></i>
				Voltar para o Início
			</a>
		</div>
	</div>
</main>

<?php require_once('includes/footer.php'); ?>
<?php require_once('includes/bottom-layout.php'); ?>
