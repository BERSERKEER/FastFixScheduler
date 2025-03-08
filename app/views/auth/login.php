<?php
require_once __DIR__ . '/../../../config/database.php';
require_once __DIR__ . '/../../controllers/authController.php';

$controller = new AuthController($pdo);
$controller->autenticación();

//Valida y redirije segun el rol
if (isset($_SESSION["user"])) {
    $rol = $_SESSION["user"]["rol"];

    if ($rol == 1) {
        header("Location: /FastFixScheduler/app/views/admin/admin_home_page.php");
    } elseif ($rol == 2) {
        header("Location: /FastFixScheduler/app/views/employ/employ_home_page.php");
    } else {
        header("Location: /FastFixScheduler/app/views/auth/login.php");
    }
    exit();
}

// Validación de errores
$error = $_SESSION["error"] ?? "";
unset($_SESSION["error"]);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio de sesión</title>
    <!-- CSS Styles -->
    <link rel="stylesheet" href="/FastFixScheduler/public/css/login_style.css">
    <link rel="stylesheet" href="/FastFixScheduler/public/css/normalize.css">
    <!-- Favicon/images -->
    <link id="favicon" rel="icon" type="image/png" href="/FastFixScheduler/public/images/short_lg-dark.png">
    <!-- JS Scripts -->
    <script src="/FastFixScheduler/public/js/icon-theme.js"></script>
</head>

<body>
    <main class="auth-container" id="login">
        <div class="logo-container">
            <img src="/FastFixScheduler/public/images/large_lg-light.png" alt="Logo" />
        </div>

        <!-- Mensajes de error -->
        <?php if (isset($_GET['error'])): ?>
            <p style="color:red;">
                <?php
                switch ($_GET['error']) {
                    case "empty":
                        echo "Por favor, completa todos los campos.";
                        break;
                    case "invalid":
                        echo "Correo o contraseña incorrectos.";
                        break;
                }
                ?>
            </p>
        <?php endif; ?>

        <?php if (!empty($error)): ?>
            <p style="color: red;"><?= $error ?></p>
        <?php endif; ?>

        <form action="/FastFixScheduler/app/controllers/authController.php?action=autenticación" method="POST">
            <input type="hidden" name="action" value="login">

            <div class="form-field">
                <input class="form-input" type="email" id="correo" name="correo" required placeholder=" ">
                <label class="input-label" for="correo">Correo electrónico</label>
            </div>

            <div class="form-field">
                <input type="password" class="form-input" id="password" name="password" required placeholder=" ">
                <label class="input-label" for="password">Contraseña</label>
            </div>
            <button type="submit" class="btn btn-primary">Ingresar</button>
            <div class="form-link">
                <a href="/FastFixScheduler/app/views/auth/forgot_password.php">Olvide contraseña</a>
            </div>
        </form>
    </main>
</body>

</html>