<?php
// FICHERO: api/get/pictures.php
/* =================================================================================
   PETICIONES GET ADMITIDAS:
   =================================================================================*/
// Si se pasa la cabecera "Authorization" con el valor "{LOGIN}:{TOKEN}", devuelve dos campos más: siguiendo, propio, cuyo valor será 1 ó 0 en función de si el usuario si el usuario está siguiendo el artículo y/o es suyo, o no, respectivamente.

//   api/pictures   -----------------> devuelve todas las fotos. Es la peticion de la galeria
//   api/pictures/{ID}  -------------> devuelve la foto seleccionada para el modal de la galeria de fotos

// =================================================================================
// INCLUSION DE LA CONEXION A LA BD
// =================================================================================
    require_once('../../../includes/global-constants.php');
    require_once('../../database.php');
    // instantiate database and product object
    $db    = new Database();
    $dbCon = $db->connect();

    echo '<p>THIS WORKS PROPERLY =D</p>';
    if(strlen($_GET['prm']) > 0)
        $RECURSO = explode("/", substr($_GET['prm'],1));
    else
        $RECURSO = [];
    // Se pillan los parámetros de la petición
    $PARAMS = array_slice($_GET, 1, count($_GET) - 1,true);

?>