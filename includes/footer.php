<?php
// Rodapé do site
?>
<link rel="stylesheet" href="<?= $basePath ?>/assets/css/footer.css">

<footer id="contato" class="footer">
	<div class="container">
		<div class="footer__content">
			<!-- Coluna 1: Localização -->
			<div class="footer__column">
				<h3 class="footer__title">Localização</h3>
				<a href="https://maps.google.com/?q=Av.+Bernardino+de+Campos,+47+-+Vila+Belmiro,+Santos+-+SP" target="_blank" class="footer__link footer__link--location">
					<i class="fa-solid fa-location-dot"></i>
					Av. Bernardino de Campos, 47 - Vila Belmiro, Santos/SP
				</a>
				
				<div class="footer__search">
					<input type="text" placeholder="Procurando algo?" class="footer__search-input">
					<button class="footer__search-button">
						<i class="fa-solid fa-magnifying-glass"></i>
					</button>
				</div>
			</div>

			<!-- Coluna 2: Contato -->
			<div class="footer__column">
				<h3 class="footer__title">Contato</h3>
				<a href="tel:1321023506" class="footer__link">
					<i class="fa-solid fa-phone"></i>
					13 2102-3506
				</a>
				<a href="mailto:sindhosfillinosesp@gmail.com" class="footer__link">
					<i class="fa-solid fa-envelope"></i>
					sindhosfillinosesp@gmail.com
				</a>
			</div>

			<!-- Coluna 3: Logo e Descrição -->
			<div class="footer__column footer__column--logo">
				<div class="footer__brand">
					<img src="<?= $basePath ?>/assets/img/Logos/Logo-SindHosfil.png" alt="SindHosfil Linosesp" class="footer__logo">
					<p class="footer__description">
						Sindicato das Santas Casas de Misericórdia e Hospitais Filantrópicos da Baixada Santista e Litoral Norte e Sul do Estado de São Paulo
					</p>
				</div>
			</div>
		</div>

		<!-- Rodapé inferior -->
		<div class="footer__bottom">
			<p class="footer__copyright">
				© 2025 SindHosfil Linosesp | Todos os direitos reservados
			</p>
			<a href="https://www.instagram.com/" target="" class="footer__social" aria-label="Instagram">
				<i class="fa-brands fa-instagram"></i>
			</a>
		</div>
	</div>
</footer>