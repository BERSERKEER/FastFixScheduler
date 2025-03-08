<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Inicio</title>
    <!-- Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script> <!-- Para gráficas -->
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
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/FastFixScheduler/app/views/shared/sidebar_admin.php'; ?>
    <main>
        <div class="container">
            <h2>Acciones Rápidas</h2>
            <p>Bienvenido al panel de control. Aquí puedes visualizar y gestionar los datos clave en tiempo real, monitorear el rendimiento y tomar decisiones informadas para optimizar la gestión.</p>
        </div>

        <!-- Cards -->
        <div class="stats-cards separator">
            <!-- Card:1 -->
            <div class="stat-card active">
                <div class="stat-info">
                    <h3>150</h3>
                    <p>Usuarios registrados</p>
                </div>
                <a href="#" class="button-box">
                    <img src="/FastFixScheduler/public/images/icon/icon_groups.svg" alt="Usuarios">
                </a>
            </div>

            <!-- Card:2 -->
            <div class="stat-card active">
                <div class="stat-info">
                    <h3>25</h3>
                    <p>Proveedores</p>
                </div>
                <a href="#" class="button-box">
                    <img src="/FastFixScheduler/public/images/icon/icon-person.svg" alt="Más vendidos" class="iconbox">
                </a>
            </div>

            <!-- Card:3 -->
            <div class="stat-card active">
                <div class="stat-info">
                    <h3>$5,230</h3>
                    <p>Ventas del día</p>
                </div>
                <a href="#" class="button-box">
                    <img src="/FastFixScheduler/public/images/icon/icon_money.svg" alt="Ventas" class="iconbox">
                </a>
            </div>

            <!-- Card:4 -->
            <div class="stat-card active">
                <div class="stat-info">
                    <h3>320</h3>
                    <p>Productos en stock</p>
                </div>
                <a href="#" class="button-box">
                    <img src="/FastFixScheduler/public/images/icon/icon-in_stock.svg" alt="Stock" class="iconbox">
                </a>
            </div>

            <!-- Card:5 -->
            <div class="stat-card active">
                <div class="stat-info">
                    <h3>8</h3>
                    <p>Existencia total</p>
                </div>
                <a href="#" class="button-box">
                    <img src="/FastFixScheduler/public/images/icon/icon-in_stock.svg" alt="Soporte" class="iconbox">
                </a>
            </div>

            <!-- Card:6 -->
            <div class="stat-card active">
                <div class="stat-info">
                    <h3>$45,700</h3>
                    <p>Existencia vendida</p>
                </div>
                <a href="#" class="button-box">
                    <img src="/FastFixScheduler/public/images/icon/icon_total.svg" alt="Ingresos" class="iconbox">
                </a>
            </div>
        </div>

        <!-- Grafica -->
        <div class="container">
            <div class="card mt-4">
                <div class="card-header bg-dark text-white">
                    <h5>📈 Estadísticas de Servicios Realizados</h5>
                </div>
                <div class="card-body">
                    <canvas id="graficaServicios"></canvas>
                </div>
            </div>
        </div>
    </main>
    <!-- Script para la gráfica -->
    <script>
        const ctx = document.getElementById('graficaServicios').getContext('2d');
        new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['Cambio de Aceite', 'Alineación', 'Frenos', 'Motor', 'Suspensión'],
                datasets: [{
                    label: 'Servicios Realizados',
                    data: [10, 15, 8, 12, 5],
                    backgroundColor: ['#007bff', '#28a745', '#ffc107', '#dc3545', '#6c757d']
                }]
            },
            options: {
                responsive: true
            }
        });
    </script>
</body>

</html>