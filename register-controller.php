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



// DE A UN USUARIO POR imap_mail
  function getUserByEmail($mail);{
  $allUsers = getUsers();

  foreach ($allUsers as $oneUser) {
    if ($oneUser["mail"] = $mail){
      return $oneUser;
    }
  }
  return false;
}

?>
