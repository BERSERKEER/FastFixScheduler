<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion de clientes</title>
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
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/FastFixScheduler/app/views/shared/sidebar_admin.php'; ?>
    <main>
        <div class="text-content">
            <h2>Gestion de clientes</h2>
            <div class="button-container">
                <p>Agregar cliente</p>
            </div>
        </div>

        <div class="container">
            <div class="search-filter-container">
                <input type="text" id="search-bar" placeholder="Buscar..." />
                <p>Button</p>
                <!-- Filter: Otros -->
                <select id="sort-filter">
                    <option value="recientes">Más recientes</option>
                    <option value="populares">Más populares</option>
                    <option value="mayor-precio">Mayor precio</option>
                    <option value="menor-precio">Menor precio</option>
                </select>
            </div>
            <table class="user-table">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Telefono</th>
                        <th>Email</th>
                        <th>Direccion</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>#002</td>
                        <td>Maria López</td>
                        <td>$200.00</td>
                        <td>Finalizado</td>
                        <td><span class="status pending">Pendiente</span></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </main>
</body>

</html>