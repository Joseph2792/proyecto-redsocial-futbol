<?php
	require_once 'register-controller.php';

	if ( isLogged() ) {
        header('location: index.php');
        exit;
    }
    $pageTitle = "Login";
    include "partials/head.php";
    
    $errors = []; //crea el array de errores a mostrar en los campos
    
    // Persistencia de datos del login
    $userEmail = isset($_POST['email']) ? trim($_POST['email']) : '';
    
    if ($_POST) {
        $errors = loginValidate($_POST);

        if ( count($errors) == 0) {
            $user = getUserByEmail($_POST['email']);

            if( isset($_POST['rememberUser']) ) {
                setcookie('userLogged', $_POST['email'], time() + 3600);
            }

            logIn($user);
        }
    }
    //<!--navbar-->

    require_once "partials/nav-login.php";
?>
    <!--contenido de las secciones: login y registro home, amigos, faq, perfil-->
	<div class="container-main">
		<section class="containermain-flex">
			<section class="flexlogin">
				<form action="" method="post">
			          <h2>Iniciar sesión</h2>

                      <div class="formlogin-control">
                        <input 
                            class="form-control  <?= isset($errors['email']) ? 'is-invalid' : ''; ?>"
                            type="text" name="email" placeholder="Email" value="<?= $userEmail?>"
                        >
                        <?php if (isset($errors['email'])): ?>
                            <div class="invalid-feedback">
                                <?= $errors['email'] ?>
                            </div>
                        <?php endif; ?>
			          </div>

                      <div class="formlogin-control">
                        <input 
                            class="form-control <?= isset($errors['password']) ? 'is-invalid' : ''; ?>"
                            name="password" placeholder="Password" type="password"
                        >
                        <?php if (isset($errors['password'])): ?>
                            <div class="invalid-feedback">
                                <?= $errors['password'] ?>
                            </div>
                        <?php endif; ?>
                      </div>

			          <div class="rememberButtom">
			            <label for="remember">
			            <input checked='' name="remember" type="checkbox"/>
			            Recordar password.</label>
			          </div>                     

			          <input class="submit" type="submit" value="Ingresar"/><br>
                      <a class="forgotPass" href='#'>Olvidaste tu contraseña?</a><br>

			          <button class="btnFb">Conectarse con Facebook</button>
                      <?php if ( !isLogged() ) : ?>
			            <a class="forgotPass" href='register.php'>Ir a Registrarme</a>
                      <?php endif; ?>
			  </form>
			</section>
        </section>
    </div>
    <!--fin del contenido-->
    <!--footer-->
    <?php require_once "partials/footer.php"; ?>
    <!--scripts ed jquery y bootstrap-->
    <?php require_once "partials/scripts.php"; ?>
