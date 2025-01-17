<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Menu</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
      /* Estilos para que los íconos sean siempre visibles */
      .menu-icon {
        font-size: 1.5rem;
        margin: 10px;
        cursor: pointer;
        color: #333; /* Color del ícono */
      }

      .menu-icon:hover {
        color: #007bff; /* Color al pasar el cursor */
      }

      .nav-link-text {
        display: none; /* Ocultar texto inicialmente */
      }

      /* Mostrar texto cuando el menú está abierto */
      .offcanvas.show .nav-link-text {
        display: inline-block;
        margin-left: 10px;
      }

      /* Estilo del menú que sale desde la izquierda */
      .offcanvas-start {
        width: 250px; /* Ancho del menú */
      }

      /* Alinear íconos verticalmente */
      .icon-container {
        position: fixed;
        height: 100%;
        top: 50%;
        transform: translateY(-50%);
        display: flex;
        flex-direction: column;
        gap: 15px;
        padding-left: 5px;
        background-color: darkgray;
      }
    </style>
  </head>
  <body>
    <div class="icon-container">
      <i class="fa-solid fa-house menu-icon" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" title="Home"></i>
      <i class="fa-solid fa-user menu-icon" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" title="Profile"></i>
      <i class="fa-solid fa-cog menu-icon" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" title="Settings"></i>
      <i class="fa-solid fa-sign-out menu-icon" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" title="Logout"></i>
    </div>

    <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Menu</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <ul class="navbar-nav justify-content-start flex-grow-1 pe-3">
          <li class="nav-item">
            <a class="nav-link" href="#">
              <i class="fa-solid fa-house"></i>
              <span class="nav-link-text">Home</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <i class="fa-solid fa-user"></i>
              <span class="nav-link-text">Profile</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <i class="fa-solid fa-cog"></i>
              <span class="nav-link-text">Settings</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <i class="fa-solid fa-sign-out"></i>
              <span class="nav-link-text">Logout</span>
            </a>
          </li>
        </ul>
      </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-Jeo85BFDZzTY86e3Gk4AGG4WvjZJAM+88bl1orct4Hfbs4nVDfCZZhzKU+BJ+TEG" crossorigin="anonymous"></script>
  </body>
</html>
