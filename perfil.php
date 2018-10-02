<?php
require_once 'register-controller.php';
	$pageTitle = "Perfil";
	include "partials/head.php";
?>
    <!--navbar-->
    <?php require_once "partials/nav-login.php"; ?>
    <div class="contenedor container">
    <!--contenido de las secciones: login y registro home, amigos, faq, perfil-->
        <section class="cont-perfil row">
                <div class="cont-foto col-12">
                        <div class="img-portada" style="background-image: url('img/portada.jpg');">                
                        </div>
                        <img class="photo-profile" src="img/man.jpg" alt="">
                </div>
        </section>
        <section class="row">
                <div class="col-sm-12 col-md-6">
                        <div class="cont-datos">
                                <div class="dato">
                                        <span><strong>Nombre:</strong></span>
                                        <span>Jose Alfaro</span>
                                </div>
                                <div class="dato">
                                        <span><strong>Apodo:</strong></span>
                                        <span>Joseph</span> 
                                </div>           
                                <div class="dato">
                                        <span><strong>Fecha de Nac:</strong></span>
                                        <span>27/05/1992</span>
                                </div>
                                <div class="dato">
                                        <span><strong>Correo:</strong></span>
                                        <span>joseph@gmail.com</span>
                                </div>
                                <div class="dato">
                                        <span><strong>Estado:</strong></span>
                                        <span>Soltero</span>
                                </div>
                                <div class="dato">
                                        <span><strong>Sexo:</strong></span>
                                        <span>Masculino</span>
                                </div>
                        </div>
                </div>

                <div class="col-sm-12 col-md-6">
                        <div class="cont-datos">
                                <div class="dato">
                                        <span><strong>Torneos jugados:</strong></span>
                                        <span>5</span>
                                </div>        
                                <div class="dato">
                                        <span><strong>Pertidos jugados:</strong></span>
                                        <span>30</span>            
                                </div>
                                <div class="dato">
                                        <span><strong>Cantidad de post:</strong></span>
                                        <span>100</span>
                                </div>
                                <div class="dato">
                                        <span><strong>Amigos:</strong></span>
                                        <span>263</span>
                                </div>
                                <div class="dato">
                                        <span><strong>Valoracion:</strong></span>
                                        <span>Excelente</span>
                                </div>
                                <div class="dato">
                                        <span><strong>Deporte:</strong></span>
                                        <span>Futbol</span>
                                </div>
                        </div>
                </div>
        </section>
    <!--fin del contenido-->
        <div class="msn">
            <a href="#" title="Chat (0)" data-toggle="popover" data-placement="left" data-content="No hay mensajes por leer">
                <i class="fas fa-envelope"></i>
                <span class="numb"></span>
            </a>
        </div>
    </div>
    <!--scripts ed jquery y bootstrap-->
    <?php require_once "partials/scripts.php"; ?>