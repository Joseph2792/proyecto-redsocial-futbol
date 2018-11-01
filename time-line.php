<?php
require_once 'register-controller.php';
	$pageTitle = "Amigos";
	include "partials/head.php";
?>
    <!--navbar-->
    <?php require_once "partials/nav-login.php"; ?>
    <div class="contenedor container">
    <!--contenido de las secciones: login y registro home, amigos, faq, perfil-->
        <section>
        <label>Select Date: </label>
        <div id="datepicker" class="input-group date" data-date-format="mm-dd-yyyy">
            <input class="form-control" type="text" readonly />
            <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
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
    <script>
    $(function () {
  $("#datepicker").datepicker({ 
        autoclose: true, 
        todayHighlight: true
  }).datepicker('update', new Date());
});

    </script>
    <!--scripts ed jquery y bootstrap-->
    <?php require_once "partials/scripts.php"; ?>