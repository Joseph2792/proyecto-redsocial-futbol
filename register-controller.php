<?php
  require_once "config.php";

  session_start();

  if isset($_COOKIE["userLog"]) {
    $user = getUserByEmail($_COOKIE["userLog"]);
    unset($user["id"]);
    unset($user["password"]);
    $_SESSION["user"] = $user;
  }


// TRAER TODOS LOS USUARIOS
  function getUsers();
   $allUsersString = file_get_contents("data/users.json");

   $usersArray = explode(PHP_EOL, $allUsersString);
   array_pop($usersArray);

   $finalUsersArray = [];

   foreach ($usersArray as $oneUser) {
     $finalUsersArray[] = json_decode($oneUser, true)
   }
   return $finalUsersArray;



// TRAER DE A UN USUARIO POR MAIL
  function getUserByEmail($mail);{
  $allUsers = getUsers();

  foreach ($allUsers as $oneUser) {
    if ($oneUser["mail"] = $mail){
      return $oneUser;
    }
  }
  return false;
}


// VALIDAR CAMPOS DEL NUEVO POSTEO

  // NUEVO PARTIDO Y NUEVA FECHA
function postValidatePartido($formData) {
  $errors = [];

  $place = trim($formData["gameLocation"]);
  $calendar = trim($formData["calendar"]);
  $price = trim($formData["gamePrice"]);
  $numPlayers = trim($formData["numberOfPlayers"]);

  if ( empty($place) ) {
    $errors["gameLocation"] = "Ingresá un lugar!";
  }

  if ( empty($calendar) ) {
    $errors["calendar"] = "Ingresá una fecha";
  }

  if ( empty($price) ) {
    $errors["gamePrice"] = "Indicá el valor"
  }

  if (empty($numPlayers)) {
    $errors["numberOfPlayers"] = "Indicá la cantidad de jugadores"
  }

  return $errors;
}

// NUEVO TORNEO

function postValidateTorneo($formData) {
  $errors = [];

  $torneoName = trim($formData["torneoName"]);
  $place = trim($formData["torneoLocation"]);
  $calendar = trim($formData["calendar"]);
  $price = trim($formData["gamePrice"]);
  $numTeams = trim($formData["numberOfTeams"]);
  $numPlayers = trim($formData["numberOfPlayers"]);

  if ( empty($place) ) {
    $errors["torneoLocation"] = "Ingresá un lugar!";
  }

  if ( empty($calendar) ) {
    $errors["calendar"] = "Ingresá una fecha";
  }

  if ( empty($price) ) {
    $errors["gamePrice"] = "Indicá el valor"
  }

  if ( empty($numTeams)) {
    $errors["numberOfTeams"] = "Indicá la cantidad de equipos"
  }

  if (empty($numPlayers)) {
    $errors["numberOfPlayers"] = "Indicá la cantidad de jugadores"
  }

  return $errors;
}

<<<<<<< HEAD
// CREAR NUEVO POSTEO
  // PARTIDO
function postPartidoCreator($data){
  $post = [
    "id" => setId(),
    "place" => $data["gameLocation"],
    "calendar" => $data["calendar"],
    "price" => $data["gamePrice"],
    "numPlayers" => $data["numberOfPlayers"],
    ];

  return $user;
}

  // FECHA
function postFechaCreator($data){
  $post = [
    "id" => setId(),
    "torneoName" => $data["torneoName"]
    "place" => $data["gameLocation"],
    "calendar" => $data["calendar"],
    "price" => $data["gamePrice"],
    "numPlayers" => $data["numberOfPlayers"],
   ];

  return $user;
}

// TORNEO
function postTorneoCreator($data){
$post = [
  "id" => setId(),
  "torneoName" => $data["torneoName"],
  "place" => $data["torneoLocation"],
  "calendar" => $data["calendar"],
  "price" => $data["gamePrice"],
  "numTeams" => $data["numberOfTeams"],
  "numPlayers" => $data["numberOfPlayers"],
 ];

return $user;
}

// GUARDAR CONTENIDO DEL POSTEO
  // PARTIDO
function savePostPartido($dataDePost){
  $finalPostPartido = postPartidoCreator($dataDePost);

  $postPartidoInJsonFormat = json_encode($finalPostPartido);

  file_put_contents('data/postPartido.json', $postPartidoInJsonFormat . PHP_EOL, FILE_APPEND);

  return $finalPostPartido;
}

// FECHA
function savePostFecha($dataDePost){
  $finalPostFecha = postFechaCreator($dataDePost);

  $postFechaInJsonFormat = json_encode($finalPostFecha);

  file_put_contents('data/postFecha.json', $postFechaInJsonFormat . PHP_EOL, FILE_APPEND);

  return $finalPostFecha;
}

// TORNEO
function savePostTorneo($dataDePost){
  $finalPostTorneo = postTorneoCreator($dataDePost);

  $postTorneoInJsonFormat = json_encode($finalPostTorneo);

  file_put_contents('data/postTorneo.json', $postTorneoInJsonFormat . PHP_EOL, FILE_APPEND);

  return $finalPostTorneo;
}
=======
// Función Guardar Datos (Falta aclarar donde se va guardar )
function saveData($dataDePost){
		$finalData = userCreator($dataDePost);
		$dataInJsonFormat = json_encode($finalData);
		file_put_contents(/*'donde/seguarda.json'*/, $dataInJsonFormat . PHP_EOL, FILE_APPEND);
		return $finalData;
	}
>>>>>>> f50edda51c5adbeff3fb315981b671197adb2e3e
?>
