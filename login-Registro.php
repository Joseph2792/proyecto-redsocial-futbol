<?php
	$pageTitle = "Login";
	include "partials/head.php";
?>
    <!--navbar-->
    <?php require_once "partials/nav-login.php"; ?>

    <!--contenido de las secciones: login y registro home, amigos, faq, perfil-->
	<div class="container-main">
		<section class="containermain-flex">
			<section class="flexlogin">
				<form action="/.php" method="post" enctype="multipart/form-data">
			            <h2>Iniciar sesión</h2>
			          <div class="formlogin-control">
			            <input type="text" name="username" placeholder="Username" value="">
			          </div>

			          <div class="formlogin-control">
			            <input name="password" placeholder="Password" type="password"/>
			          </div>

			          <div class="rememberButtom">
			            <label for="remember">
			            <input checked='' name="remember" type="checkbox"/>
			            Recordar password.</label>
			          </div>

			            <input class="submit" type="submit" value="Ingresar"/><br>

			          <button class="btnFb">Conectarse con Facebook</button>

			            <a class="forgotPass" href='#'>Olvidaste tu contraseña?</a>
			  </form>
			</section>

			</section>
			<section class="flexregistry">
				<form action="/.php" method="post" enctype="multipart/form-data">
					<span>Aún no tenes una cuenta?</span>
					<h2>Registrate</h2>

          <div class="formlogin-control">
            <label for="Fullname">Nombre y Apellido</label>
            <input type="text" name="" value="" placeholder="Fullmane">
          </div>

          <div class="formlogin-control">
            <label for="newUsername">Usuario</label>
            <input type="text" name="" value="" placeholder="Username">
          </div>

          <div class="formlogin-control">
            <label for="Email">Email</label>
            <input type="email" name="" value="" placeholder="@email.com">
          </div>

          <div class="formlogin-control">
            <label for="password">Contraseña</label>
            <input type="password" name="" value="" placeholder="Password">
          </div>

          <div class="formlogin-control">
            <label for="Repeatpassword">Repetir Contraseña</label>
            <input type="password" name="" value="" placeholder="Password">
          </div>

          <div class="formlogin-control">
            <label for="Country">Nacionalidad:</label>
            <select class="Country" name="">
              <option value="ar">Argentina</option>
              <option value="br">Brasil</option>
              <option value="co">Colombia</option>
              <option value="ve">Venezuela</option>
              <option value="pe">Peru</option>
              <option value="Py">Paraguay</option>
            </select>
          </div>
            <!--
		  <div class="formlogin-control">
            <label for="fanclub">De que cuadro sos?</label>
            <input type="text" value="" placeholder="">
          </div>
-->
		
				</form>
			</section>
		</section>
 </div>


    <!--fin del contenido-->

    <!--footer-->
    <?php require_once "partials/footer.php"; ?>
    <!--scripts ed jquery y bootstrap-->
    <?php require_once "partials/scripts.php"; ?>
