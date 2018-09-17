<?php
	$pageTitle = "Amigos";
	include "partials/head.php";
?>
    <!--navbar-->
    <?php require_once "partials/nav-login.php"; ?>
    <div class="contenedor container">
    <!--contenido de las secciones: login y registro home, amigos, faq, perfil-->
        <section class="row cont-header-friends">
            <h1>Amigos</h1>
            <div class="col-12 cont-search">
                <form action="get">
                    <div class="cont-search">
                        <input type="search" placeholder="Buscar grupos o personas..." name="q" id="buscadorNav">
                        <button class="" type="submit">
                            <i class="fa fa-search icon"></i>
                        </button>                    
                    </div>
                </form>
            </div>
        </section>
        <section class="row cont-friends">
            <ul>
                <li class="cont-friend">
                    <div class="card-friend">
                        <a class="cont-photo-friend" href="">
                            <img class="photo-friend" src="img/man.jpg" alt="">
                            <span>Andres Navarro</span>
                        </a>
                        <div class="cont-info-friend">
                            <div class="dato-friend">
                                <span><strong>Partidos jugados</strong></span>
                                <span>120</span>
                            </div>
                            <div class="dato-friend">
                                <span><strong>Torneos jugados</strong></span>
                                <span>20</span> 
                            </div>           
                            <div class="dato-friend">
                                <span><strong>Habilidad</strong></span>
                                <span>estrellas</span>
                            </div>
                            <div class="msj-friend">
                                <a class="ico-nav" href="" title="messenger">
                                    <i class="fa fa-question-circle"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </section>
    <!--fin del contenido-->
        <div class="chat col-3">
            <div class="messages col-3">
                <a href="#"><i class="fas fa-circle"></i>Mensajes (2)</a>
            <a href="#"><i class="fas fa-ellipsis-h" title="Opciones"></i></a>
            </div>
        </div>
    </div>
    <!--scripts ed jquery y bootstrap-->
    <?php require_once "partials/scripts.php"; ?>