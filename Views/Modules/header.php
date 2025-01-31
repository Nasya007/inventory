<!doctype html>
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

</body>
</html>
