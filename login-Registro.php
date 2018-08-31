<?php
	$pageTitle = "Login";
	include "partials/head.php";
?>
<!--navbar-->
    <?php require_once "partials/header-nav.php"; ?>

		<!--contenido de las secciones: login y registro home, amigos, faq, perfil-->
<div class="contenedor-main-login">
	<section class="cont-login">
		<h2>Logueate acá</h2>
		<form class="" action="/.php" method="post" enctype="multipart/form-data">
			<div class='login'>
					<div class="form-control">
						<input class="usernametext" type="text" name="username" placeholder="Username" value="">
						 <br>

					  <input class="passworduser" name="password" placeholder="Password" type="password"/><br>

						<input checked='' name="remember" type="checkbox"/>
				    <label for="remember">recordar password</label>
					</div>

				  <input class="submit" type="submit" value="Ingresar"/><br>
				  <a class="forgotPass" href='#'>Te olvidaste la contraseña boludon?</a>
			</div>
		</form>
	</section>
</div>

<br>
<br>

<div class="contenedor-main-registry">
<section class="cont-registry">
	<form class="" action="/.html" method="post">
		<fieldset >
			<legend>Registrate</legend>

			<strong>* campos requeridos</strong><br><br>

			<div class="form-control">
				<label for="name" >Nombre completo*: </label>
				<input type="text" name="name">
			</div>

			<div class="form-control">
				<label for="email" >Email*:</label>
				<input type= "text" name="email">
			</div>

			<div class="form-control">
				<label for="username" >Nombre de usuario*:</label>
				<input type="text" name="username">
			</div>

			<div class="form-control">
				<label for="password">Contraseña*:</label>
				<input type="password" name="password">
			</div>

			<div class="form-control">
				<label for="repetir password">Repetir Contraseña*:</label>
				<input type="password" name="password">
			</div>

			<div class="form-control">
				<button type="submit">Regitrar</button>
			</div>

      </fieldset>

	</form>
</section>
</div>
    <!--fin del contenido-->

    <!--footer-->
    <?php require_once "partials/footer.php"; ?>
    <!--scripts ed jquery y bootstrap-->
    <?php require_once "partials/scripts.php"; ?>
