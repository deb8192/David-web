<?php
// FICHERO: api/get/pictures.php
/* =================================================================================
   Allowed requests:
   =================================================================================*/
// Si se pasa la cabecera "Authorization" con el valor "{LOGIN}:{TOKEN}", devuelve dos campos más: siguiendo, propio, cuyo valor será 1 ó 0 en función de si el usuario si el usuario está siguiendo el artículo y/o es suyo, o no, respectivamente.

//   api/pictures   -----------------> returns all pictures. It's gallery request
//   api/pictures/{ID}  -------------> returns gallery pictures' modal picture.

// =================================================================================
// Connecting with DB
// =================================================================================
    require_once('../../../includes/global-constants.php');
    require_once('../../database.php');
    // instantiate database and product object
    $db    = new Database();
    $db->connect();

    //These params are all which starts after "pictures" word in url, not those that starts after "?"
    if(strlen($_GET['prm']) > 0)
        $RESOURCE = explode("/", substr($_GET['prm'],1));
    else
        $RESOURCE = [];
    // get request parameters
    $PARAMS = array_slice($_GET, 1, count($_GET) - 1,true);

// =================================================================================
// JSON output configuration and CORS for AJAX requests
// =================================================================================
header("Access-Control-Allow-Orgin: *");
//header("Access-Control-Allow-Methods: *");
// header("Access-Control-Allow-Methods: GET, POST, DELETE, PUT, PATCH");
header("Access-Control-Allow-Methods: GET, POST, DELETE");
header("Content-Type: application/json; charset=UTF-8");

// =================================================================================
// Preparing reponse
// =================================================================================
$R                   = [];  // result.
$RESPONSE_CODE       = 200; // reponse code: 200 - OK
$mysql               = '';  // DB consult
$VALUES              = [];  // Needed values for the request
$TOTAL_COINCIDENCES  = -1;  // DB coincidences
// =================================================================================
// Default SQL for gallery pictures
// =================================================================================
$mysql  = 'select p.* FROM pictures p';

// It checks if there is and resource ID
$ID = array_shift($RESOURCE); 
if(is_numeric($ID))
{
    
    $mysql  = "SELECT urlPic, title, picDescription, picSizeID FROM pictures WHERE picSectionID = $ID ";
    $VALUES = [];
    $R['SECCION'] = $ID;
}

// =================================================================================
// Execute DB request
// =================================================================================
$response = $response = $db->executeQuery($mysql);
if($response->num_rows > Constant::ZERO) // execute query OK
{
    $RESPONSE_CODE  = 200;
    $R['RESULTADO'] = 'OK';
    $R['CODIGO']    = $RESPONSE_CODE;
    $FILAS          = [];

    if($TOTAL_COINCIDENCES > -1)
    {
        $R['TOTAL_COINCIDENCES']  = $TOTAL_COINCIDENCES;
        $R['PAGINA']               = $pagina;
        $R['REGISTROS_POR_PAGINA'] = $regsPorPagina;
    }
    while( $row = $response->fetch_object() )
        $FILAS[] = $row;

    $R['FILAS'] = $FILAS;
}
else
{
    $RESPONSE_CODE    = 500;
    $R['CODIGO']      = $RESPONSE_CODE;
    $R['RESULTADO']   = 'ERROR' ;
    $R['DESCRIPCION'] = 'Se ha producido un error en el servidor al ejecutar la consulta.';
}
// =================================================================================
// SE CIERRA LA CONEXION CON LA BD
// =================================================================================
$db->closeConnection();
// =================================================================================
// SE DEVUELVE EL RESULTADO DE LA CONSULTA
// =================================================================================
http_response_code($RESPONSE_CODE);
echo json_encode($R);
?>