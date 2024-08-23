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
     
      
        case 'register':
          $titulo = "register";
          require "register.php";
          break;
      default:
        $titulo = "Bienvenido";
        break;
    }


    ?>
  </main>

  <?php require "shared/dashPie.php" ?>