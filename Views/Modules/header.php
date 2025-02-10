<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Caja</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <style>
        /* Estilos generales */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        /* ENCABEZADO */
        .header {
            background-color: #212529;
            color: white;
            padding: 10px 20px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            position: fixed;
            width: 100%;
            top: 0;
            left: 0;
            z-index: 1000;
            height: 60px;
        }

        .logo img {
            height: 40px;
        }
        /* BARRA DE BÚSQUEDA */
        .search-bar {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .search-bar input {
            padding: 8px;
            border-radius: 5px;
            border: 1px solid #ccc;
            width: 200px;
            transition: all 0.3s ease-in-out;
        }

        .search-bar input:focus {
            outline: none;
            border-color: #007bff;
            box-shadow: 0px 0px 5px rgba(0, 123, 255, 0.5);
        }

        .search-bar button {
            padding: 8px 12px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .search-bar button:hover {
            background-color: #0056b3;
        }

        /* PERFIL DEL USUARIO */
        .user-profile {
            position: relative;
            display: flex;
            align-items: center;
            cursor: pointer;
        }

        .user-profile img {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            margin-left: 10px;
        }

        .user-info {
            display: none;
            position: absolute;
            top: 100%;
            right: 0;
            background: #333;
            color: white;
            padding: 10px;
            border-radius: 5px;
            width: 200px;
            text-align: left;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2);
        }

        .user-info p, .user-info a {
            margin: 5px 0;
            color: white;
            text-decoration: none;
        }

        .user-info a:hover {
            text-decoration: underline;
        }

        .user-info img {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            display: block;
            margin: 0 auto 10px;
        }


        /* MENU LATERAL */
        .sidebar {
            position: fixed;
            height: calc(100% - 60px); /* Ajusta la altura restando la del header */
            width: 60px;
            top: 60px; /* Coloca el menú debajo del header */
            left: 10px;
            background-color: rgb(59, 59, 59);
            display: flex;
            flex-direction: column;
            padding-top: 10px;
            gap: 20px;
            transition: width 0.3s ease, left 0.3s ease;
            overflow: hidden;
            z-index: 1050;
            border-radius: 10px;
        }

        .sidebar.expanded {
            width: 230px;
        }

        .menu-icon {
            font-size: 1.5rem;
            color: rgb(201, 200, 200);
            margin-right: 10px;
        }

        .nav-link-text {
            font-size: 1rem;
            color: #f4f4f4;
            white-space: nowrap;
            opacity: 0;
            visibility: hidden;
            transition: opacity 0.3s ease, visibility 0.3s ease;
        }

        .sidebar.expanded .nav-link-text {
            opacity: 1;
            visibility: visible;
        }

        .nav-item {
            display: flex;
            align-items: center;
            width: 100%;
            padding: 10px 15px;
            transition: background-color 0.3s ease;
            border-bottom: 1px solid #444;
        }

        .nav-item:hover {
            background-color: #444;
        }

        .toggle-btn {
            position: absolute;
            top: 15px;
            right: -18px;
            background: #666;
            color: white;
            border: 2px solid white;
            width: 35px;
            height: 35px;
            border-radius: 50%;
            cursor: pointer;
            transition: transform 0.3s ease, background 0.3s ease;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .toggle-btn:hover {
            background: #888;
        }

        .toggle-btn i {
            font-size: 1.3rem;
        }

        .sidebar.expanded .toggle-btn {
            transform: rotate(180deg);
        }

        /* Contenido principal */
        .content {
            margin-left: 90px;
            margin-top: 80px;
            padding: 20px;
        }

        /* PERFIL DEL USUARIO */
        .user-profile {
            position: relative;
            display: flex;
            align-items: center;
            cursor: pointer;
        }

        .user-profile img {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            margin-left: 10px;
        }

        .user-info {
            display: none;
            position: absolute;
            top: 100%;
            right: 0;
            background: #333;
            color: white;
            padding: 10px;
            border-radius: 5px;
            width: 200px;
            text-align: left;
        }

        .user-info p, .user-info a {
            margin: 5px 0;
            color: white;
            text-decoration: none;
        }

        .user-info a:hover {
            text-decoration: underline;
        }

        /* FECHA Y HORA */
        .current-time {
            margin-right: 15px;
        }
    </style>
</head>
<body>

<!-- MENU LATERAL -->
<div class="sidebar" id="sidebar">
    <button class="toggle-btn" id="toggleBtn">
        <i class="fa-solid fa-chevron-right" id="toggleIcon"></i>
    </button>

    <div class="nav-item">
        <i class="fa-solid fa-house menu-icon"></i>
        <span class="nav-link-text">Home</span>
    </div>
    <div class="nav-item">
        <i class="fa-solid fa-user menu-icon"></i>
        <span class="nav-link-text">Profile</span>
    </div>
    <div class="nav-item">
        <i class="fa-solid fa-cog menu-icon"></i>
        <span class="nav-link-text">Settings</span>
    </div>
    <div class="nav-item">
        <i class="fa-solid fa-sign-out menu-icon"></i>
        <span class="nav-link-text">Logout</span>
    </div>
</div>

<!-- ENCABEZADO -->
<div class="header">
    <div class="logo">
        <img src="logo.png" alt="Logo">
    </div>

    <div class="search-bar">
        <input type="text" id="search" placeholder="Buscar...">
        <button><i class="fas fa-search"></i> Buscar</button>
    </div>

    <div class="user-profile" onclick="toggleUserInfo()">
        <span class="current-time" id="currentTime"></span>
        <img src="user.png" alt="Perfil">
        <div class="user-info" id="userInfo">
            <img src="user.png" alt="Perfil"> 
            <p><strong>Nombre:</strong> Usuario</p>
            <p><strong>Email:</strong> usuario@email.com</p>
            <p><a href="#">Configuración</a></p>
            <p><a href="#">Cerrar Sesión</a></p>
        </div>
    </div>
</div>

<!-- CONTENIDO -->
<div class="content">
    
</div>

<script>
    // Toggle menú lateral
    document.getElementById("toggleBtn").addEventListener("click", function() {
        let sidebar = document.getElementById("sidebar");
        let icon = document.getElementById("toggleIcon");

        sidebar.classList.toggle("expanded");
        icon.classList.toggle("fa-chevron-left");
        icon.classList.toggle("fa-chevron-right");
    });

    // Mostrar / ocultar perfil
    function toggleUserInfo() {
        let userInfo = document.getElementById("userInfo");
        userInfo.style.display = (userInfo.style.display === "block") ? "none" : "block";
    }

    // Cerrar perfil al hacer clic fuera
    document.addEventListener("click", function(event) {
        let profile = document.querySelector(".user-profile");
        let userInfo = document.getElementById("userInfo");

        if (!profile.contains(event.target)) {
            userInfo.style.display = "none";
        }
    });

    // Actualizar fecha y hora en tiempo real
    function updateTime() {
        const now = new Date();
        const formattedTime = now.toLocaleDateString('es-ES', { weekday: 'long', day: 'numeric', month: 'long', year: 'numeric' }) +
                              " | " + now.toLocaleTimeString('es-ES');
        document.getElementById("currentTime").textContent = formattedTime;
    }

    setInterval(updateTime, 1000);
    updateTime(); // Llamar inmediatamente para evitar esperar el primer intervalo
</script>

</body>
</html>
