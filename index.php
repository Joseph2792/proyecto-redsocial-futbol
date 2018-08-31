<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/bootstrap-grid.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <title>PlayGroups - Inicio</title>
  </head>
  <body>
    <header>
      <?php
        require_once "partials/header-nav.php";
      ?>
    </header>
    <br>
    <div class="col-6">
      <div class="tipodepost-container">
        <ul>
          <li><a href="#" class="iconos"><i class="far fa-futbol"></i>Nuevo Partido</a></li>
          <li><a href="#" class="iconos"><i class="fas fa-calendar-plus"></i>Nueva Fecha</a></li>
          <li><a href="#" class="iconos"><i class="fas fa-trophy"></i>Nuevo Torneo</a></li>
        </ul>
      </div>
    </div>
    <br><br>

      <div class="col-6">
        <div class="post-container">
          <div class="post-description">
            <img src="img/icons/trofeo.png" class="event-icon-trophy">
            <br>
            <div class="description">
              <h4>Torneo - Club Angel Gallardo</h4>
              <h6>Jueves 23 de agosto, $130 por persona</h6>
              <br>
            </div>
            <a href="#"><i class="fas fa-ellipsis-h"></i></a>
          </div>

          <div class="second-row-container">
            <div class="teams">
              <h5>Equipo 1:</h5>
              <br>
              <h5>Equipo 2:</h5>
            </div>

            <div class="join">
              <a href="#"><i class="fas fa-plus-circle"></i>UNIRSE</a>

            </div>
          </div>
          <footer class="post-footer">
            <i class="fas fa-thumbs-up col-1"></i>
            <i class="fas fa-comment-dots col-1"></i>
          </footer>
        </div>

      </div>
      <br>
      <div class="col-6">
        <div class="post-container">
          <div class="post-description">
            <img src="img/icons/pelota.png" class="event-icon-ball">
            <br>
            <div class="description">
              <h4>Partido - Open Gallo</h4>
              <h6>Jueves 23 de agosto, $80 por persona</h6>
              <br>
            </div>
            <a href="#"><i class="fas fa-ellipsis-h"></i></a>
          </div>

          <div class="second-row-container">
            <div class="teams">
              <h5>Equipo 1:</h5>
              <br>
              <h5>Equipo 2:</h5>
            </div>

            <div class="join">
              <a href="#"><i class="fas fa-plus-circle"></i>UNIRSE</a>

            </div>
          </div>
          <footer class="post-footer">
            <i class="fas fa-thumbs-up col-1"></i>
            <i class="fas fa-comment-dots col-1"></i>
          </footer>
        </div>

    <<footer><!-- ACA VA EL FOOTER HECHO EN PHP -->
    </footer>
  </body>
</html>


<?php
	$pageTitle = "Home";
	include "partials/head.php";
?>
    <!--navbar login-->
    <?php require_once "partials/nav-login.php"; ?>
    <!--navbar-->
    <?php require_once "partials/header-nav.php"; ?>

    <!--contenido de las secciones: login y registro home, amigos, faq, perfil-->

    <!--fin del contenido-->

    <!--scripts ed jquery y bootstrap-->
    <?php require_once "partials/scripts.php"; ?>
