<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Inicio</title>
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
    <!--Include componenet: Sidebar -->
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/FastFixScheduler/app/views/shared/sidebar_employ.php'; ?>
    <main>
        <div class="text-content">
            <h2>Dashboard - inicio</h2>
            <div class="button-container">
                <p>Agrendar cita</p>
            </div>
        </div>

        <div class="stats-cards separator">
            <!-- Card:1 -->
            <div class="stat-card active">
                <div class="stat-info">
                    <h3>150</h3>
                    <p>Citas pendientes</p>
                </div>
                <a href="#" class="button-box">
                    <img src="/FastFixScheduler/public/images/icon/icon_groups.svg" alt="Usuarios">
                </a>
            </div>

            <!-- Card:2 -->
            <div class="stat-card active">
                <div class="stat-info">
                    <h3>25</h3>
                    <p>Citas finalizadas hoy</p>
                </div>
                <a href="#" class="button-box">
                    <img src="/FastFixScheduler/public/images/icon/icon-person.svg" alt="Más vendidos" class="iconbox">
                </a>
            </div>

            <!-- Card:3 -->
            <div class="stat-card active">
                <div class="stat-info">
                    <h3>$5,230</h3>
                    <p>En espara</p>
                </div>
                <a href="#" class="button-box">
                    <img src="/FastFixScheduler/public/images/icon/icon_money.svg" alt="Ventas" class="iconbox">
                </a>
            </div>
        </div>

        <div class="container">
            <h2>Citas programadas para hoy</h2>
            <table class="user-table">
                <thead>
                    <tr>
                        <th>Cliente</th>
                        <th>Vehiculo</th>
                        <th>Servicio</th>
                        <th>Hora</th>
                        <th>Estado</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>#002</td>
                        <td>Maria López</td>
                        <td><span class="status pending">Pendiente</span></td>
                        <td>$200.00</td>
                        <td>Finalizado</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </main>
</body>

</html>