<?php
	$pageTitle = "Home";
	include "partials/head.php";
?>
    <!--navbar login-->
    <?php require_once "partials/nav-login.php"; ?>
    <!--navbar-->
    <?php require_once "partials/nav-login.php"; ?>
    <div class="contenedor">    
    <!--contenido de las secciones: login y registro home, amigos, faq, perfil-->
    <div class="col-sm-12  col-md-6  col-lg-6">
      <div class="tipodepost-container">
        <ul>
          <li><a href="#" class="iconos"><i class="far fa-futbol"></i>Nuevo Partido</a></li>
          <li><a href="#" class="iconos"><i class="fas fa-calendar-plus"></i>Nueva Fecha</a></li>
          <li><a href="#" class="iconos"><i class="fas fa-trophy"></i>Nuevo Torneo</a></li>
        </ul>
      </div>
    </div>
    <br>
    <div class="col-12 col-sm-12 col-md-6 col-lg-6">
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
              <div class="team-1 col-sm-12  col-md-6  col-lg-6">
                <h5>Equipo 1:</h5>
                  <img src="img/girl.jpg" class="team-member">
                  <img src="img/girl.jpg" class="team-member">
                  <img src="img/girl.jpg" class="team-member">
                  <img src="img/girl.jpg" class="team-member">
                  <img src="img/girl.jpg" class="team-member">
              </div>
              <div class="team-2 col-sm-12  col-md-6  col-lg-6">
                <h5>Equipo 2:</h5>
                  <img src="img/man.jpg" class="team-member">
                  <img src="img/man.jpg" class="team-member">
                  <img src="img/man.jpg" class="team-member">
                  <img src="img/man.jpg" class="team-member">
                  <img src="img/man.jpg" class="team-member">
              </div>
            </div>

            <div class="join">
              <a href="#"><i class="fas fa-plus-circle"></i>UNIRSE</a>

            </div>
          </div>
          <div class="post-footer">
            <i class="fas fa-thumbs-up col-1"></i>
            <i class="fas fa-comment-dots col-1"></i>
          </div>
        </div>

      </div>
      <br>
      <div class="col-12 col-sm-12 col-md-6 col-lg-6">
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
              <div class="team-1 col-sm-12  col-md-6  col-lg-6">
                <h5>Equipo 1:</h5>
                  <img src="img/girl.jpg" class="team-member">
                  <img src="img/girl.jpg" class="team-member">
                  <img src="img/girl.jpg" class="team-member">
                  <img src="img/girl.jpg" class="team-member">
                  <img src="img/girl.jpg" class="team-member">
              </div>
              <br>
              <div class="team-2 col-sm-12  col-md-6  col-lg-6">
                <h5>Equipo 2:</h5>
                  <img src="img/man.jpg" class="team-member">
                  <img src="img/man.jpg" class="team-member">
                  <img src="img/man.jpg" class="team-member">
                  <img src="img/man.jpg" class="team-member">
                  <img src="img/man.jpg" class="team-member">
              </div>
            </div>

            <div class="join">
              <a href="#"><i class="fas fa-plus-circle"></i>UNIRSE</a>

            </div>
          </div>
          <div class="post-footer">
            <i class="fas fa-thumbs-up col-1"></i>
            <i class="fas fa-comment-dots col-1"></i>
          </div>
        </div>

    <section>
      <div class="chat col-3">
        <div class="messages">
            <a href="#"><i class="fas fa-circle"></i>
              Mensajes (2)
            </a>
        </div>
        <a href="#"><i class="fas fa-ellipsis-h"></i></a>
      </div>
    </section>
    <!--fin del contenido-->
    </div>
    <!--scripts ed jquery y bootstrap-->
    <?php require_once "partials/scripts.php"; ?>
