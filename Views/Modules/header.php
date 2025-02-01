<!doctype html>
<<<<<<< HEAD
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Menú Lateral</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    /* Contenedor del menú lateral */
    .sidebar {
  position: fixed;
  height: calc(100% - 20px); /* Reduce la altura para dejar espacio arriba y abajo */
  width: 60px;
  top: 10px; /* Separa el menú de la parte superior */
  left: 10px; /* Separa el menú del borde izquierdo */
  background-color: rgb(59, 59, 59);
  display: flex;
  flex-direction: column;
  padding-top: 10px;
  gap: 20px;
  transition: width 0.3s ease, left 0.3s ease;
  overflow: hidden;
  z-index: 1050;
  border-radius: 10px; /* Bordes redondeados */
}



    /* Cuando el menú está expandido */
    .sidebar.expanded {
=======
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Menu</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <style>
    /* Contenedor del menú lateral */
    .icon-container {
      position: fixed;
      height: 100%;
      width: 60px;
      top: 0;
      left: 0;
      background-color: rgb(59, 59, 59);
      display: flex;
      flex-direction: column;
      padding-top: 10px;
      gap: 20px;
      transition: width 0.3s ease;
      overflow: hidden;
      z-index: 1050;
    }

    /* Expandir menú lateral */
    .icon-container:hover {
>>>>>>> 471f15c401391f566183ab10e1c77f46da5a390b
      width: 230px;
    }

    /* Estilo de los íconos */
    .menu-icon {
      font-size: 1.5rem;
      color: rgb(201, 200, 200);
      margin-right: 10px;
    }

    /* Texto del menú */
    .nav-link-text {
      font-size: 1rem;
      color: #f4f4f4;
      white-space: nowrap;
<<<<<<< HEAD
      opacity: 0;
      visibility: hidden;
      transition: opacity 0.3s ease, visibility 0.3s ease;
    }

    .sidebar.expanded .nav-link-text {
      opacity: 1;
      visibility: visible;
    }

=======
      opacity: 0; 
      visibility: hidden; 
      transition: opacity 0.3s ease, visibility 0.3s ease;
    }

    .icon-container:hover .nav-link-text{
      opacity: 1;  
      visibility: visible; 
    }
>>>>>>> 471f15c401391f566183ab10e1c77f46da5a390b
    .nav-item {
      display: flex;
      align-items: center;
      width: 100%;
      padding: 10px 15px;
<<<<<<< HEAD
      transition: background-color 0.3s ease;
      border-bottom: 1px solid #444;
=======
      background-color: transparent;
      transition: background-color 0.3s ease;
      border-bottom: 1px solid #444; /* Línea separadora */
>>>>>>> 471f15c401391f566183ab10e1c77f46da5a390b
    }

    .nav-item:hover {
      background-color: #444;
    }

<<<<<<< HEAD
    /* Botón de expansión */
    /* Botón de expansión mejorado */
.toggle-btn {
  position: absolute;
  top: 15px; /* Separación superior */
  right: -18px; /* Ajusta la separación del borde del menú */
  background: #666; /* Color más claro para que resalte */
  color: white; /* Ícono en blanco para contraste */
  border: 2px solid white; /* Borde blanco para mayor visibilidad */
  width: 35px; /* Botón más grande */
  height: 35px;
  border-radius: 50%;
  cursor: pointer;
  transition: transform 0.3s ease, background 0.3s ease;
  display: flex;
  align-items: center;
  justify-content: center;
}

/* Cambia el color al pasar el mouse */
.toggle-btn:hover {
  background: #888; /* Un tono más claro */
}

/* Ajuste del ícono */
.toggle-btn i {
  font-size: 1.3rem; /* Ícono más grande */
}

/* Rotación cuando el menú está expandido */
.sidebar.expanded .toggle-btn {
  transform: rotate(180deg);
}

  </style>
</head>
<body>

  <!-- Menú lateral -->
  <div class="sidebar" id="sidebar">
    <button class="toggle-btn" id="toggleBtn">
      <i class="fa-solid fa-chevron-right" id="toggleIcon"></i>
    </button>

    <!-- Sección principal -->
    <div class="nav-item">
      <i class="fa-solid fa-house menu-icon"></i>
      <span class="nav-link-text">Home</span>
    </div>
    <div class="nav-item">
      <i class="fa-solid fa-user menu-icon"></i>
      <span class="nav-link-text">Profile</span>
    </div>

    <!-- Sección de configuración -->
    <div class="nav-item">
      <i class="fa-solid fa-cog menu-icon"></i>
      <span class="nav-link-text">Settings</span>
    </div>
    <div class="nav-item">
      <i class="fa-solid fa-sign-out menu-icon"></i>
      <span class="nav-link-text">Logout</span>
    </div>
  </div>

  <script>
    document.getElementById("toggleBtn").addEventListener("click", function() {
      let sidebar = document.getElementById("sidebar");
      let icon = document.getElementById("toggleIcon");

      sidebar.classList.toggle("expanded");
      if (sidebar.classList.contains("expanded")) {
        icon.classList.remove("fa-chevron-right");
        icon.classList.add("fa-chevron-left");
      } else {
        icon.classList.remove("fa-chevron-left");
        icon.classList.add("fa-chevron-right");
      }
    });
  </script>

=======
    .nav-item i {
      flex-shrink: 0;
    }
    .menu-section-title {
      font-size: 0.9rem;
      color: #bbb;
      padding-left: 15px;
      margin-bottom: 5px;
      text-transform: uppercase;
      opacity: 0;
      visibility: hidden; 
      transition: opacity 0.3s ease, visibility 0.3s ease;
    }

    .icon-container:hover .menu-section-title {
      opacity: 1;
      visibility: visible;
    }
  </style>
</head>
<body>
  <div class="icon-container">
    <!-- Sección principal -->
    <div class="menu-section">
      <div class="menu-section-title">Principal</div>
      <div class="nav-item">
        <i class="fa-solid fa-house menu-icon"></i>
        <span class="nav-link-text">Home</span>
      </div>
      <div class="nav-item">
        <i class="fa-solid fa-user menu-icon"></i>
        <span class="nav-link-text">Profile</span>
      </div>
    </div>
    <!-- Sección de configuración -->
    <div class="menu-section">
      <div class="menu-section-title">Configuración</div>
      <div class="nav-item">
        <i class="fa-solid fa-cog menu-icon"></i>
        <span class="nav-link-text">General</span>
      </div>
      <div class="nav-item">
        <i class="fa-solid fa-tools menu-icon"></i>
        <span class="nav-link-text">Advanced</span>
      </div>
    </div>
    <!-- Sección con submenús -->
    <div class="menu-section">
      <div class="menu-section-title">Gestión</div>
      <div class="nav-item">
        <i class="fa-solid fa-folder menu-icon"></i>
        <span class="nav-link-text">Projects</span>
      </div>
      <div class="nav-item">
          <i class="fa-solid fa-file menu-icon"></i>
          <span class="nav-link-text">Active Projects</span>
        </div>
        <div class="nav-item">
          <i class="fa-solid fa-archive menu-icon"></i>
          <span class="nav-link-text">Archived Projects</span>
        </div>
    </div>

    <!-- Sección de salir -->
    <div class="menu-section">
      <div class="menu-section-title">Cuenta</div>
      <div class="nav-item">
        <i class="fa-solid fa-sign-out menu-icon"></i>
        <span class="nav-link-text">Logout</span>
      </div>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-Jeo85BFDZzTY86e3Gk4AGG4WvjZJAM+88bl1orct4Hfbs4nVDfCZZhzKU+BJ+TEG" crossorigin="anonymous"></script>
>>>>>>> 471f15c401391f566183ab10e1c77f46da5a390b
</body>
</html>
