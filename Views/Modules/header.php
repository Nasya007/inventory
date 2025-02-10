<!doctype html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Menú Lateral</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      margin: 0;
      padding: 0;
      font-family: 'Arial', sans-serif;
      background-color: #f4f4f4;
    }
    .header {
      display: flex;
      justify-content: space-between;
      align-items: center;
      background-color: #333;
      color: white;
      padding: 10px 20px;
      position: fixed;
      width: 100%;
      top: 0;
      left: 0;
      z-index: 1000;
    }
    .sidebar {
      position: fixed;
      height: 100%;
      width: 60px;
      top: 60px;
      left: 0;
      background-color: #343a40;
      display: flex;
      flex-direction: column;
      padding-top: 20px;
      gap: 20px;
      transition: width 0.3s ease;
      overflow: hidden;
      z-index: 1050;
      border-radius: 0 10px 10px 0;
    }
    .sidebar.expanded {
      width: 230px;
    }
    .menu-icon {
      font-size: 1.5rem;
      color: #ddd;
      margin-right: 10px;
    }
    .nav-link-text {
      font-size: 1rem;
      color: #f4f4f4;
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
      padding: 12px 18px;
      transition: background-color 0.3s ease;
      cursor: pointer;
      border-bottom: 1px solid #444;
    }
    .nav-item:hover {
      background-color: #505050;
    }
    .toggle-btn {
      position: absolute;
      top: 15px;
      right: -18px;
      background: #222;
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
      background: #666;
    }
    .toggle-btn i {
      font-size: 1.3rem;
    }
    .sidebar.expanded .toggle-btn {
      transform: rotate(180deg);
    }
    .profile-modal {
      position: fixed;
      top: 70px;
      left: auto;
      right: 20px;
      width: 250px;
      background: #fff;
      padding: 15px;
      border-radius: 8px;
      box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2);
      display: none;
      z-index: 1100;
    }
    .profile-modal.active {
      display: block;
    }
    .profile-modal h4 {
      margin: 0 0 10px;
      color: #333;
    }
    .profile-modal p {
      margin: 5px 0;
      color: #555;
    }
    .navbar-nav {
      margin-left: auto;
    }
    #profileBtn a {
      color: white;
      font-size: 1.1rem;
      padding: 8px 15px;
      text-decoration: none;
      border-radius: 4px;
      transition: background-color 0.3s ease;
    }
    #profileBtn a:hover {
      background-color: #007bff;
    }
    .form-control {
      border-radius: 20px;
    }
    .btn-outline-success {
      border-radius: 20px;
    }
  </style>
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Navbar</a>
      <div class="navbar-nav ms-auto">
        <li id="profileBtn">
          <a class="nav-link" href="#">Perfil</a>
        </li>
      </div>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Buscar</button>
      </form>
    </div>
  </nav>
  <div class="sidebar" id="sidebar">
    <button class="toggle-btn" id="toggleBtn">
      <i class="fa-solid fa-arrow-right" id="toggleIcon"></i>
    </button>
    <div class="nav-item">
      <i class="fa-solid fa-house menu-icon"></i>
      <span class="nav-link-text">Inicio</span>
    </div>
    <div class="nav-item">
      <i class="fa-solid fa-cog menu-icon"></i>
      <span class="nav-link-text">Configuración</span>
    </div>
    <div class="nav-item">
      <i class="fa-solid fa-sign-out menu-icon"></i>
      <span class="nav-link-text">Cerrar sesión</span>
    </div>
  </div>

  <div class="profile-modal" id="profileModal">
    <h4>Perfil</h4>
    <p><strong>Nombre:</strong> <span id="modalUserName">Usuario</span></p>
    <p><strong>Email:</strong> usuario@example.com</p>
  </div>

  <script>
    document.getElementById("toggleBtn").addEventListener("click", function() {
      let sidebar = document.getElementById("sidebar");
      let icon = document.getElementById("toggleIcon");
      sidebar.classList.toggle("expanded");
      icon.classList.toggle("fa-arrow-right");
      icon.classList.toggle("fa-xmark");
    });
    
    document.getElementById("profileBtn").addEventListener("click", function() {
      let modal = document.getElementById("profileModal");
      let sidebar = document.getElementById("sidebar");
      modal.classList.toggle("active");
      sidebar.classList.remove("expanded");
      document.getElementById("toggleIcon").classList.remove("fa-xmark");
      document.getElementById("toggleIcon").classList.add("fa-arrow-right");
    });

    window.addEventListener("click", function(event) {
      let modal = document.getElementById("profileModal");
      let profileBtn = document.getElementById("profileBtn");
      if (!modal.contains(event.target) && !profileBtn.contains(event.target)) {
        modal.classList.remove("active");
      }
    });
  </script>
</body>
</html>
