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



// DE A UN USUARIO POR MAIL
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

  $place = trim($formData["gameLocation"]);
  $calendar = trim($formData["calendar"]);
  $price = trim($formData["gamePrice"]);
  $numTeams = trim($formData["numberOfTeams"]);
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

  if ( empty($numTeams)) {
    $errors["numberOfTeams"] = "Indicá la cantidad de equipos"
  }

  if (empty($numPlayers)) {
    $errors["numberOfPlayers"] = "Indicá la cantidad de jugadores"
  }

  return $errors;
}
?>
