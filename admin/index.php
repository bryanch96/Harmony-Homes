  <?php
  require "shared/dashEncabezado.php";
  $page = isset($_GET["page"]) ? $_GET["page"] : "";

  ?>

  <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <?php

    switch ($page) {
      
      case 'propiedades':
        $titulo = "Catálogo Propiedades";
        require "catalogos/propiedades/listpropiedades.php";
        break; 
      case 'nuevopropiedad':
        $titulo = "Nueva Propiedad";
        require "catalogos/propiedades/nuevopropiedad.php";
        break;
      default:
        $titulo = "Bienvenido";
        break;
    }


    ?>
  </main>

  <?php require "shared/dashPie.php" ?>