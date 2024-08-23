<?php

declare(strict_types=1);

use App\Application\Actions\User\ListUsersAction;
use App\Application\Actions\User\ViewUserAction;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\App;
use Slim\Interfaces\RouteCollectorProxyInterface as Group;

include "../public/conexion.php";

return function (App $app) {
    $app->options('/{routes:.*}', function (Request $request, Response $response) {
        // CORS Pre-Flight OPTIONS Request Handler
        return $response;
    });

    //CRUD PELICULAS
    //INSERTAR
    $app->post('/insertar', function (Request $request, Response $response) {
        //Abrir la conexión
        $db = conectar();

        //obrener el registro a guardar
        $rec = $request->getQueryParams();

        //guardar en bd        
        $res = $db->AutoExecute("propiedades", $rec, "INSERT");

       // $response->getBody()->write(strval($res));
       $response->getBody()->write(strval($res));
      

        return $response;
    });
    

    //MODIFCAR
    $app->put('/modificar', function (Request $request, Response $response, array $args) {
        // Abrir la conexión
        $db = conectar();
    
        // Obtener los parámetros de la cadena de consulta
        $rec = $request->getQueryParams();
    
        // Guardar en la base de datos
        $res = $db->AutoExecute("propiedades", $rec, "UPDATE", "id={$rec['id']}");
    
        $response->getBody()->write(strval($res));
        return $response;
    });
    
    
    //ELIMINAR
    $app->delete('/eliminar/{id}', function (Request $request, Response $response, array $args) {
        $id = $args['id'];
        //Abrir la conexión
        $db = conectar();
        //consulta de borrado
        $sql="DELETE FROM propiedades WHERE id='$id'";
        $res=$db->Execute($sql);

        $response->getBody()->write(strval(var_dump($res)));
        return $response;
    });
    //ONBTENER INFORMACION
    //ontener todas las peliculas
    $app->get('/todaspropiedades', function (Request $request, Response $response) {
        //Abrir la conexión
        $db = conectar();

        //cambiar metodo fecth
        $db->SetFetchMode(ADODB_FETCH_ASSOC);

        //consulta de 
        $sql="SELECT * FROM propiedades";
        $res=$db->GetAll($sql);

        $response->getBody()->write(json_encode($res));
        return $response;
    });
    //pelicula x id
    $app->get('/propiedadesporid/{id}', function (Request $request, Response $response, array $args) {
        $id = $args['id'];
        //Abrir la conexión
        $db = conectar();

        //cambiar metodo fecth
        $db->SetFetchMode(ADODB_FETCH_ASSOC);

        //consulta de 
        $sql="SELECT * FROM propiedades WHERE id='$id'";
        $res=$db->GetAll($sql);

        $response->getBody()->write(json_encode($res[0]));
        return $response;
    });


    $app->get('/propiedadesdisponibles', function (Request $request, Response $response, array $args) {
        //Abrir la conexión
        $db = conectar();

        //cambiar metodo fecth
        $db->SetFetchMode(ADODB_FETCH_ASSOC);

        //consulta de 
        $sql="SELECT * FROM propiedades WHERE disponidilidad=1";
        
        $res=$db->GetAll($sql);

        $response->getBody()->write(json_encode($res));
        return $response;
    });

    //bsucar todaS las peliculas que contegan el texto  buscar y que esten activas
    $app->get('/propiedadespornombre/{buscar}', function (Request $request, Response $response, array $args) {
        $buscar = $args['buscar'];
        //Abrir la conexión
        $db = conectar();

        //cambiar metodo fecth
        $db->SetFetchMode(ADODB_FETCH_ASSOC);

        //consulta de 
        $sql="SELECT * FROM propiedades WHERE  nombre like '%$buscar%' and  disponidilidad=1";
        
        $res=$db->GetAll($sql);

        $response->getBody()->write(json_encode($res));
        return $response;
    });



         //usuario
  
  //crear usuario

  $app->post('/insertarusuario', function (Request $request, Response $response) {
    //Abrir la conexión
    $db = conectar();

    //obrener el registro a guardar
    $rec = $request->getQueryParams();

    //guardar en bd        
    $res = $db->AutoExecute("usuarios", $rec, "INSERT");

   // $response->getBody()->write(strval($res));
   $response->getBody()->write(strval($res));
  

    return $response;
});



//modificar usuario

    $app->put('/modificarusuario', function (Request $request, Response $response, array $args) {
    // Abrir la conexión
    $db = conectar();

    // Obtener los parámetros de la cadena de consulta
    $rec = $request->getQueryParams();

    // Guardar en la base de datos
    $res = $db->AutoExecute("usuarios", $rec, "UPDATE", "id={$rec['id']}");

    $response->getBody()->write(strval($res));
    return $response;
});


// eliminar usuario


    $app->delete('/eliminarusuario/{id}', function (Request $request, Response $response, array $args) {
    $id = $args['id'];
    //Abrir la conexión
    $db = conectar();
    //consulta de borrado
    $sql="DELETE FROM usuarios WHERE id='$id'";
    $res=$db->Execute($sql);

    $response->getBody()->write(strval(var_dump($res)));
    return $response;
});


  //obtener todas los usuarios
  
  
$app->get('/todosusuarios', function (Request $request, Response $response) {
//Abrir la conexión
$db = conectar();

//cambiar metodo fecth
$db->SetFetchMode(ADODB_FETCH_ASSOC);

//consulta de 
$sql="SELECT * FROM usuarios";
$res=$db->GetAll($sql);

$response->getBody()->write(json_encode($res));
return $response;
});


$app->get('/buscarpropiedad/{tipo}/{provincia}/{maximo}/{minimo}/{cuartos}', function (Request $request, Response $response, array $args) {
    $tipo = $args['tipo'];
    $provincia = $args['provincia'];
    $maximo = $args['maximo'];
    $minimo = $args['minimo'];
    $cuartos = $args['cuartos'];
    
    // Abrir la conexión
    $db = conectar();

    // Cambiar método fetch
    $db->SetFetchMode(ADODB_FETCH_ASSOC);

    // Consulta SQL con el rango de precios
    $sql = "SELECT * FROM propiedades WHERE tipo = '$tipo' AND provincia = '$provincia' AND cuartos = $cuartos AND precio BETWEEN $minimo AND $maximo";
    
    $res = $db->GetAll($sql);

    $response->getBody()->write(json_encode($res));
    return $response;
});

        
        








    $app->group('/users', function (Group $group) {
        $group->get('', ListUsersAction::class);
        $group->get('/{id}', ViewUserAction::class);
    });
};
