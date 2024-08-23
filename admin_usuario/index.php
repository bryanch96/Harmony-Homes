  <?php
  require "shared/dashEncabezado.php";
  $page = isset($_GET["page"]) ? $_GET["page"] : "";

  ?>

  <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <?php

    switch ($page) {
      case 'usuario':
        $titulo = "Catálogo Usuarios";
        require"catalogos/propiedades/lista_usuario.php";
        break;
      case 'propiedades':
        $titulo = "Catálogo Propiedades";
        require "catalogos/propiedades/listpropiedades.php";
        break; 
      case 'nuevopropiedad':
        $titulo = "Nueva Propiedad";
        require "catalogos/propiedades/nuevopropiedad.php";
        break;
        case 'nuevo_usuario':
          $titulo = "Nuevo usuario";
          require "catalogos/propiedades/nuevo_usuario.php";
          break;
      default:
        $titulo = "Bienvenido";
        break;
    }


    ?>
  </main>

  <?php require "shared/dashPie.php" ?>