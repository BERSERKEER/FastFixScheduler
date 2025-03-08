<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Historial de servicios</title>
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
        <!-- Settings general -->
        <div class="separator">
            <div class="container">
                <h2>
                    <img src="/SmartStockManager-ADSO/public/images/config-general.png" alt="Configuración General" width="30">
                    Configuración General
                </h2>
                <p>Administra la configuración principal del sistema, como idioma y zona horaria.</p>

                <form class="config-form">
                    <div class="form-group">
                        <label for="company-name">Nombre de la Empresa</label>
                        <input type="text" id="company-name" name="company-name" placeholder="Ingrese el nombre">
                    </div>

                    <div class="form-group">
                        <label for="company-phone">Teléfono</label>
                        <input type="tel" id="company-phone" name="company-phone" placeholder="Ingrese el teléfono">
                    </div>

                    <div class="form-group">
                        <label for="company-address">Dirección</label>
                        <input type="text" id="company-address" name="company-address" placeholder="Ingrese la dirección">
                    </div>

                    <div class="form-group">
                        <label for="company-nit">NIT / Identificación Fiscal</label>
                        <input type="text" id="company-nit" name="company-nit" placeholder="Ingrese el NIT">
                    </div>

                    <div class="form-group">
                        <label for="company-email">Correo Electrónico</label>
                        <input type="email" id="company-email" name="company-email" placeholder="Ingrese el correo">
                    </div>
                </form>
            </div>
        </div>
        <!-- Settings security -->
        <div class="container">
            <h2>
                <img src="/SmartStockManager-ADSO/public/images/seguridad.png" alt="Seguridad" width="30">
                Seguridad
            </h2>
            <p>Administra la seguridad de tu cuenta, contraseñas y permisos.</p>

            <form class="config-form">
                <!-- Cambio de Contraseña -->
                <div class="form-group">
                    <label for="current-password">Contraseña Actual</label>
                    <input type="password" id="current-password" placeholder="Ingresa tu contraseña actual">
                </div>

                <div class="form-group">
                    <label for="new-password">Nueva Contraseña</label>
                    <input type="password" id="new-password" placeholder="Ingresa la nueva contraseña">
                </div>

                <div class="form-group">
                    <label for="confirm-password">Confirmar Nueva Contraseña</label>
                    <input type="password" id="confirm-password" placeholder="Repite la nueva contraseña">
                </div>

                <!-- Activar Autenticación en Dos Pasos -->
                <div class="form-group">
                    <label for="enable-2fa">Autenticación en Dos Pasos (2FA)</label>
                    <select id="enable-2fa">
                        <option value="disabled">Desactivado</option>
                        <option value="sms">SMS</option>
                        <option value="email">Correo Electrónico</option>
                        <option value="authenticator">App Autenticadora</option>
                    </select>
                </div>

                <!-- Sesiones Activas -->
                <div class="form-group">
                    <label>Sesiones Activas</label>
                    <ul class="session-list">
                        <li>📍 Dispositivo: Windows PC - Ubicación: Colombia <button class="btn-logout">Cerrar Sesión</button></li>
                        <li>📍 Dispositivo: iPhone - Ubicación: México <button class="btn-logout">Cerrar Sesión</button></li>
                    </ul>
                </div>

                <!-- Gestión de Permisos -->
                <div class="form-group">
                    <label for="user-role">Rol de Usuario</label>
                    <select id="user-role">
                        <option value="admin">Administrador</option>
                        <option value="editor">Editor</option>
                        <option value="viewer">Solo Lectura</option>
                    </select>
                </div>
            </form>
        </div>
    </main>
</body>

</html>