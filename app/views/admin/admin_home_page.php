<!--Inicia session ven base al rol-->
<?php
session_start();
if (!isset($_SESSION["user"]) || $_SESSION["user"]["rol"] != 1) {
    header("Location: /FastFixScheduler/app/views/auth/login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenido</title>
    <!-- Libraries -->
    <!-- CSS Styles -->
    <link rel="stylesheet" href="/FastFixScheduler/public/css/login_style.css">
    <link rel="stylesheet" href="/FastFixScheduler/public/css/normalize.css">
    <!-- Favicon/images -->
    <link id="favicon" rel="icon" type="image/png" href="/FastFixScheduler/public/images/short_lg-dark.png">
    <!-- JS Scripts -->
    <script src="/FastFixScheduler/public/js/icon-theme.js"></script>
</head>

<body>
    <!--Funcion: texto en base a zona horaria-->
    <?php
    date_default_timezone_set('America/Bogota');
    $hora = date('H');

    if ($hora >= 5 && $hora < 12) {
        $saludo = "Buenos días, Administrador";
        $mensaje = "Un nuevo día para liderar y optimizar la gestión del sistema.";
    } elseif ($hora >= 12 && $hora < 18) {
        $saludo = "Buenas tardes, Administrador";
        $mensaje = "Sigue supervisando y asegurando el buen funcionamiento de la plataforma.";
    } else {
        $saludo = "Buenas noches, Administrador";
        $mensaje = "Antes de cerrar el día, revisa los últimos detalles para un mejor control.";
    }
    ?>

    <!--Include componenet: Sidebar -->
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/FastFixScheduler/app/views/shared/sidebar_admin.php'; ?>
    <main>
        <div class="container">
            <div class="welcome-container">
                <div class="welcome-content">
                    <!--Variables: Texto de bienvenida en base a funcion zona horaria-->
                    <h1><?php echo $saludo; ?> <?php echo htmlspecialchars($_SESSION["user"]["nombre"]); ?>, bienvenido al Dashboard</h1>
                    <p><?php echo $mensaje; ?></p>
                    <p>Button</p>
                </div>
                <div class="welcome-image">
                    <img src="/FastFixScheduler/public/images/render1.png" alt="Dashboard Image">
                </div>
            </div>
        </div>
    </main>
</body>

</html>