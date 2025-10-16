<?php // Top layout: head + topbar (acima do header)
	$basePath = rtrim(dirname($_SERVER['SCRIPT_NAME']), '/\\');
	if ($basePath === '' || $basePath === '.') { $basePath = ''; }
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?= isset($head_title) ? htmlspecialchars($head_title) : 'Site'; ?></title>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
	<!-- Font Awesome para ícones (sem SRI para evitar bloqueio em dev) -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<!-- Favicon local -->
	<link rel="icon" type="image/svg+xml" href="<?= $basePath ?>/assets/img/favicon.svg">
	<link rel="stylesheet" href="<?= $basePath ?>/assets/css/Global.css">
</head>
<body class="<?= isset($body_class) ? htmlspecialchars($body_class) : '' ?>">

	<!-- Topbar separada do header -->
	<div class="topbar">
		<div class="container topbar__wrap">
			<div class="topbar__center">
				<span class="topbar__item"><i class="fa-solid fa-map-location-dot" aria-hidden="true"></i> Av. Bernardino de Campos, 47 - Vila Belmiro, Santos - SP</span>
				<span class="topbar__divider">•</span>
				<a class="topbar__item" href="https://wa.me/551321023506" target="" rel="noopener" aria-label="WhatsApp">
					<i class="fa-brands fa-whatsapp" aria-hidden="true"></i> (13) 2102-3506
				</a>
			</div>
			<div class="topbar__right">
				<a class="topbar__social" href="https://instagram.com/" target="" rel="noopener" aria-label="Instagram">
					<i class="fa-brands fa-instagram" aria-hidden="true"></i>
				</a>
			</div>
		</div>
	</div>