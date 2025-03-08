<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS Styles -->
    <link rel="stylesheet" href="/FastFixScheduler/public/css/styles.css">
    <link rel="stylesheet" href="/FastFixScheduler/public/css/normalize.css">
    <!-- Libreries -->
    <!-- SweetAlert2 -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</head>

<body>
    <nav id="sidebar">
        <ul>
            <!--Item menu-->
            <li>
                <span class="logo">FastFixScheduler</span>
                <button onclick=toggleSidebar() id="toggle-btn">
                    <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px"
                        fill="#e8eaed">
                        <path
                            d="m313-480 155 156q11 11 11.5 27.5T468-268q-11 11-28 11t-28-11L228-452q-6-6-8.5-13t-2.5-15q0-8 2.5-15t8.5-13l184-184q11-11 27.5-11.5T468-692q11 11 11 28t-11 28L313-480Zm264 0 155 156q11 11 11.5 27.5T732-268q-11 11-28 11t-28-11L492-452q-6-6-8.5-13t-2.5-15q0-8 2.5-15t8.5-13l184-184q11-11 27.5-11.5T732-692q11 11 11 28t-11 28L577-480Z" />
                    </svg>
                </button>
            </li>
            <!--Item 1-->
            <li>
                <a href="/FastFixScheduler/app/views/employ/employ_home_page.php">
                    <img src="/FastFixScheduler/public/images/icon/icon-home.svg" alt="Home" height="24px" width="24px">
                    <span>Home</span>
                </a>
            </li>
            <!--Item 2-->
            <li class="active">
                <a href="/FastFixScheduler/app/views/employ/employ_dashboard.php">
                    <img src="/FastFixScheduler/public/images/icon/icon_dashboard.svg" alt="Home" height="24px" width="24px">
                    <span>Dashboard</span>
                </a>
            </li>
            <!--Item 4-->
            <li>
                <a href="/FastFixScheduler/app/views/employ/employ_appointment_management.php">
                    <img src="/FastFixScheduler/public/images/icon/icon-table.svg" alt="Home" height="24px" width="24px">
                    <span>Gestion de citas</span>
                </a>
            </li>
            <!--Item 5-->
            <li>
                <a href="/FastFixScheduler/app/views/employ/employ_service history.php">
                    <img src="/FastFixScheduler/public/images/icon/icon-table.svg" alt="Home" height="24px" width="24px">
                    <span>Historial de servicios</span>
                </a>
            </li>
            <!--Item 8: /FastFixScheduler/app/controllers/AuthController.php?action=logout-->
            <li>
                <a href="" id="logout-btn">
                    <img src="/FastFixScheduler/public/images/icon/icon-logout.svg" alt="Home" height="24px" width="24px">
                    <span>Cerrar sesion</span>
                </a>
            </li>
        </ul>
    </nav>
    <script>
        const toggleButton = document.getElementById('toggle-btn')
        const sidebar = document.getElementById('sidebar')

        function toggleSidebar() {
            sidebar.classList.toggle('close')
            toggleButton.classList.toggle('rotate')

            closeAllSubMenus()
        }

        function toggleSubMenu(button) {

            if (!button.nextElementSibling.classList.contains('show')) {
                closeAllSubMenus()
            }

            button.nextElementSibling.classList.toggle('show')
            button.classList.toggle('rotate')

            if (sidebar.classList.contains('close')) {
                sidebar.classList.toggle('close')
                toggleButton.classList.toggle('rotate')
            }
        }

        function closeAllSubMenus() {
            Array.from(sidebar.getElementsByClassName('show')).forEach(ul => {
                ul.classList.remove('show')
                ul.previousElementSibling.classList.remove('rotate')
            })
        }
    </script>
    <script src="/FastFixScheduler/public/js/logout.js"></script>
</body>