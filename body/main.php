<?php
// Conteúdo principal da página inicial
?>
<link rel="stylesheet" href="<?= $basePath ?>/assets/css/home.css">

<!-- Hero Section - Banner Principal -->
<section class="hero">
	<div class="hero__background">
		<img src="<?= $basePath ?>/assets/img/banners/banner-01.png" alt="Faça parte do SindHosfil" loading="eager">
	</div>
	<div class="hero__overlay"></div>
	<div class="container hero__content">
		<div class="hero__text">
			<h1 class="hero__title">
				Faça parte<br>
				do Sindhosfil
			</h1>
			<p class="hero__subtitle">
				O sindicato que mais cresce na Baixada Santista
			</p>
			<p class="hero__description">
				Ao se filiar ao SINDHOSFIL, Sua instituição ganha representatividade, apoio técnico e acesso a informações estratégicas, fortalecendo a luta por uma saúde mais justa, humana e acessível.
			</p>
			<a href="#" class="hero__cta">ASSOCIE-SE AO SINDHOSFIL</a>
		</div>
	</div>
</section>

<!-- Seção de Notícias -->
<section id="noticias" class="news">
	<div class="container">
		<h2 class="news__title">Últimas Notícias</h2>
		
		<div class="news__grid">
			<!-- Card 1 -->
			<article class="news__card">
				<div class="news__card-image">
					<img src="<?= $basePath ?>/assets/img/noticias/noticia-01.jpg" alt="Assinatura de Contrato" loading="lazy" onerror="this.src='<?= $basePath ?>/assets/img/placeholder-news.jpg'">
				</div>
				<div class="news__card-content">
					<h3 class="news__card-title">Assinatura de Contrato</h3>
					<p class="news__card-text">
						O LINOSESP celebrou nesta semana a assinatura de mais um contrato estratégico, reforçando seu compromisso com a modernização da gestão hospitalar e...
					</p>
				</div>
			</article>

			<!-- Card 2 -->
			<article class="news__card">
				<div class="news__card-image">
					<img src="<?= $basePath ?>/assets/img/noticias/noticia-02.jpg" alt="Assinatura de Contrato" loading="lazy" onerror="this.src='<?= $basePath ?>/assets/img/placeholder-news.jpg'">
				</div>
				<div class="news__card-content">
					<h3 class="news__card-title">Assinatura de Contrato</h3>
					<p class="news__card-text">
						O LINOSESP celebrou nesta semana a assinatura de mais um contrato estratégico, reforçando seu compromisso com a modernização da gestão hospitalar e...
					</p>
				</div>
			</article>

			<!-- Card 3 -->
			<article class="news__card">
				<div class="news__card-image">
					<img src="<?= $basePath ?>/assets/img/noticias/noticia-03.jpg" alt="Assinatura de Contrato" loading="lazy" onerror="this.src='<?= $basePath ?>/assets/img/placeholder-news.jpg'">
				</div>
				<div class="news__card-content">
					<h3 class="news__card-title">Assinatura de Contrato</h3>
					<p class="news__card-text">
						O LINOSESP celebrou nesta semana a assinatura de mais um contrato estratégico, reforçando seu compromisso com a modernização da gestão hospitalar e...
					</p>
				</div>
			</article>
		</div>

		<div class="news__cta">
			<a href="#" class="news__button">LER TUDO</a>
		</div>
	</div>
</section>

<!-- Seção de Parceiros -->
<section class="partners">
	<div class="container">
		<h2 class="partners__title">Nossos Parceiros</h2>
		
		<div class="partners__grid">
			<!-- Parceiro 1 -->
			<div class="partners__item">
				<img src="<?= $basePath ?>/assets/img/parceiros/parceiro-01.png" alt="Hospital Beneficência Portuguesa" loading="lazy">
			</div>

			<!-- Parceiro 2 -->
			<div class="partners__item partners__item--larger">
				<img src="<?= $basePath ?>/assets/img/parceiros/parceiro-02.png" alt="Hospital Casa de Saúde" loading="lazy">
			</div>

			<!-- Parceiro 3 -->
			<div class="partners__item">
				<img src="<?= $basePath ?>/assets/img/parceiros/parceiro-03.png" alt="Plano Santa Saúde" loading="lazy">
			</div>

			<!-- Parceiro 4 -->
			<div class="partners__item">
				<img src="<?= $basePath ?>/assets/img/parceiros/parceiro-04.png" alt="Irmandade da Santa Casa da Misericórdia de Santos" loading="lazy">
			</div>
		</div>
	</div>
</section>

<!-- Seção de Localização -->
<section class="location">
	<div class="container">
		<div class="location__content">
			<!-- Faixa Azul de Fundo -->
			<div class="location__background"></div>
			
			<!-- Informações -->
			<div class="location__info">
				<h2 class="location__title">Localização</h2>
				<h3 class="location__name">SindHosfil Linosesp</h3>
				<address class="location__address">
					Av. Bernardino de Campos, 47 -<br>
					Vila Belmiro, Santos - SP,<br>
					11065-000
				</address>
			</div>

			<!-- Mapa Sobreposto -->
			<div class="location__map">
				<iframe 
					src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1289.1643292957015!2d-46.33707140772731!3d-23.949569218667012!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce036f0d5025bb%3A0x40b779aca47efad1!2sHospital%20Benefic%C3%AAncia%20Portuguesa%20de%20Santos!5e0!3m2!1sen!2sbr!4v1760468892583!5m2!1sen!2sbr"
					width="100%" 
					height="100%" 
					style="border:0;" 
					allowfullscreen="" 
					loading="lazy" 
					referrerpolicy="no-referrer-when-downgrade"
					title="Localização do SindHosfil Linosesp">
				</iframe>
			</div>
		</div>
	</div>
</section>