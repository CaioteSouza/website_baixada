/*
 * header.js: comportamentos específicos do header
 * - Toggle do menu mobile (hamburger)
 * - Fechar menu ao clicar fora ou em um link
 */

(function() {
	'use strict';

	// Aguardar DOM pronto
	document.addEventListener('DOMContentLoaded', function() {
		const hamburger = document.querySelector('.header__hamburger');
		const mobileMenu = document.querySelector('.header__nav--mobile');
		const overlay = document.querySelector('.header__overlay');
		const mobileLinks = document.querySelectorAll('.header__nav--mobile a');

		if (!hamburger || !mobileMenu || !overlay) {
			return; // Elementos não encontrados
		}

		// Toggle menu ao clicar no hamburger
		hamburger.addEventListener('click', function() {
			const isActive = mobileMenu.classList.contains('active');
			
			if (isActive) {
				closeMenu();
			} else {
				openMenu();
			}
		});

		// Fechar menu ao clicar no overlay
		overlay.addEventListener('click', function() {
			closeMenu();
		});

		// Fechar menu ao clicar em um link
		mobileLinks.forEach(function(link) {
			link.addEventListener('click', function() {
				closeMenu();
			});
		});

		// Fechar com tecla ESC
		document.addEventListener('keydown', function(e) {
			if (e.key === 'Escape' && mobileMenu.classList.contains('active')) {
				closeMenu();
			}
		});

		function openMenu() {
			hamburger.classList.add('active');
			mobileMenu.classList.add('active');
			overlay.classList.add('active');
			document.body.style.overflow = 'hidden'; // Prevenir scroll do body
		}

		function closeMenu() {
			hamburger.classList.remove('active');
			mobileMenu.classList.remove('active');
			overlay.classList.remove('active');
			document.body.style.overflow = ''; // Restaurar scroll
		}
	});
})();
