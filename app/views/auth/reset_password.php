<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Recuperación de cuenta</title>
	<!-- CSS Styles -->
	<link rel="stylesheet" href="/FastFixScheduler/public/css/login_style.css">
	<link rel="stylesheet" href="/FastFixScheduler/public/css/normalize.css">
	<!-- Favicon -->
	<link id="favicon" rel="icon" type="image/png" href="/FastFixScheduler/public/images/short_lg-dark.png">
	<!-- JS Scripts -->
	<script src="/FastFixScheduler/public/js/icon-theme.js"></script>
	<!-- Libreries -->
	<!-- SweetAlert2 -->
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body>
	<main class="auth-container">
		<div class="logo-container">
			<img src="/FastFixScheduler/public/images/large_lg-light.png" alt="Logo">
		</div>
		<h2>Restablecer Contraseña</h2>
		<form action="/config/process_reset.php" method="POST">
			<input type="hidden" name="token" value="<?php echo htmlspecialchars($_GET['token'] ?? ''); ?>"> <label>Nueva contraseña:</label>
			<input type="password" name="password" required>
			<button type="submit">Actualizar contraseña</button>
		</form>
		<!-- <form action="/FastFixScheduler/app/controllers/authController.php?action=resetPassword" method="POST" class="login-form">
			<input type="hidden" name="token" value="<?= $_GET['token'] ?>">
			<div class="form-field">
				<input type="password" name="password" class="form-input" required placeholder=" ">
				<label for="password" class="input-label">Nueva Contraseña:</label>
			</div>

			<button class="btn btn-primary" type="submit">Enviar</button>
			<div class="form-link">
				<a href="/FastFixScheduler/app/views/auth/login.php">Ya tengo cuenta</a>
			</div>
		</form> -->
	</main>
</body>

</html>