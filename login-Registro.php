<?php
	$pageTitle = "Login";
	include "partials/head.php";

	require_once 'register-controller.php';

	if ( isLogged() ) {
	header('location: index.php');
	exit;
}
    $errors = []; //crea el array de errores a mostrar en los campos

    // Persistencia de datos del registro
	$registerFullName = isset($_POST['registerFullName']) ? trim($_POST['registerFullName']) : '';
	$registerNickname = isset($_POST['registerNickname']) ? trim($_POST['registerNickname']) : '';
	$registerEmail = isset($_POST['registerEmail']) ? trim($_POST['registerEmail']) : '';
    $registerCountry = isset($_POST['registerCountry']) ? trim($_POST['registerCountry']) : '';

	if ($_POST) {
		$errors = registerValidate($_POST, $_FILES);
		if ( count($errors) == 0 ) {
			$imageName = saveImage($_FILES['registerAvatar']);
			$_POST['avatar'] = $imageName;
			$user = saveUser($_POST);
			logIn($user);
		}
    }

    // Persistencia de datos del login
    $userEmail = isset($_POST['email']) ? trim($_POST['email']) : '';
    
    if ($_POST) {
        $errors2 = loginValidate($_POST);

        if ( count($errors2) == 0) {
            $user = getUserByEmail($_POST['userEmail']);

            if( isset($_POST['rememberUser']) ) {
                setcookie('userLogged', $_POST['userEmail'], time() + 3600);
            }

            logIn($user);
        }
    }
?>
    <!--navbar-->
    <?php
    $countries = [
		'ar' => 'Argentina',
		'bo' => 'Bolivia',
		'br' => 'Brasil',
		'co' => 'Colombia',
		'cl' => 'Chile',
		'ec' => 'Ecuador',
		'pa' => 'Paraguay',
		'pe' => 'Perú',
		'uy' => 'Uruguay',
		've' => 'Venezuela',
	];

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
                            class="form-control  <?= isset($errors2['email']) ? 'is-invalid' : ''; ?>"
                            type="text" name="email" placeholder="Email" value="<?= $userEmail?>"
                        >
                        <?php if (isset($errors['email'])): ?>
                            <div class="invalid-feedback">
                                <?= $errors2['email'] ?>
                            </div>
                        <?php endif; ?>
			          </div>

                      <div class="formlogin-control">
                        <input 
                            class="form-control <?= isset($errors2['password']) ? 'is-invalid' : ''; ?>"
                            name="password" placeholder="Password" type="password"
                        >
                        <?php if (isset($errors['password'])): ?>
                            <div class="invalid-feedback">
                                <?= $errors2['password'] ?>
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

			          <a class="forgotPass" href='#' onClick="mostrarRegistro()">Ir a Registrarme</a>
			  </form>
			</section>
        </section>
        <script>
            function mostrarRegistro(){
                $("#registro").toggle();
            }
        </script>

        <section id="registro" class="flexregistry" style="display: none;">
            <form action="" method="post" enctype="multipart/form-data">
                <span>Aún no tenes una cuenta?</span>
                <h2>Registrate</h2>
                <div class="formlogin-control">
                    <label for="Fullname">Nombre y Apellido</label>
                    <input
                        type="text"
                        name="registerFullName"
                        value="<?= $registerFullName; ?>"
                        placeholder="Fullmane"
                        class="form-control <?= isset($errors['fullName']) ? 'is-invalid' : ''; ?>"
                    >
                    <?php if (isset($errors['fullName'])): ?>
                        <div class="invalid-feedback">
                            <?= $errors['fullName'] ?>
                        </div>
                    <?php endif; ?>
                </div>

                <div class="formlogin-control">
                    <label>Usuario</label>
                    <input
                        type="text"
                        name="registerNickname"
                        value="<?= $registerNickname; ?>"
                        placeholder="Username"
                        class="form-control <?= isset($errors['nickname']) ? 'is-invalid' : ''; ?>"
                    >    
                    <?php if (isset($errors['nickname'])): ?>
                        <div class="invalid-feedback">
                            <?= $errors['nickname'] ?>
                        </div>
                    <?php endif; ?>
                </div>

                <div class="formlogin-control">
                    <label>Email</label>
                    <input
                        type="email"
                        name="registerEmail"
                        value="<?= $registerEmail; ?>"
                        placeholder="@email.com"
                        class="form-control <?= isset($errors['email']) ? 'is-invalid' : ''; ?>"
                    >
                    <?php if (isset($errors['email'])): ?>
                        <div class="invalid-feedback">
                            <?= $errors['email'] ?>
                        </div>
                    <?php endif; ?>
                </div>
                <div class="formlogin-control">
                    <label>Contraseña</label>
                    <input
                        type="password"
                        name="registerPassword"
                        placeholder="Password"
                        class="form-control <?= isset($errors['password']) ? 'is-invalid' : ''; ?>"
                    >
                    <?php if (isset($errors['password'])): ?>
                        <div class="invalid-feedback">
                            <?= $errors['password'] ?>
                        </div>
                    <?php endif; ?>
                </div>

                <div class="formlogin-control">
                    <label>Repetir Contraseña</label>
                    <input
                        type="password"
                        name="registerRePassword"
                        placeholder="Password"
                        class="form-control <?= isset($errors['password']) ? 'is-invalid' : ''; ?>"
                    >
                    <?php if (isset($errors['password'])): ?>
                        <div class="invalid-feedback">
                            <?= $errors['password'] ?>
                        </div>
                    <?php endif; ?>

                </div>

                <div class="formlogin-control">
                    <label>Nacionalidad:</label>
                    <select name="registerCountry"
                        class="form-control <?= isset($errors['country']) ? 'is-invalid' : ''; ?>"
                        >
                        <option value="">Elegí un país</option>
                            <?php foreach ($countries as $code => $country): ?>
                                <option
                                <?= $code == $registerCountry ? 'selected' : '' ?>
                                value="<?= $code ?>"><?= $country ?>
                            </option>
                        <?php endforeach; ?>
                    </select>
                    <?php if (isset($errors['country'])): ?>
                        <div class="invalid-feedback">
                            <?= $errors['country'] ?>
                        </div>
                    <?php endif; ?>

                </div>
                <div class="formlogin-control">
                    <label >Imagen de Perfil:</label>
                    <input
                    type="file"
                    name="registerAvatar"
                    class="custom-file-input <?= isset($errors['image']) ? 'is-invalid' : ''; ?>"
                    >
                    <label class="custom-file-label">Choose file...</label>
                    <?php if (isset($errors['image'])): ?>
                        <div class="invalid-feedback">
                            <?= $errors['image'] ?>
                        </div>
                    <?php endif; ?>
                </div>

                <div class="formlogin-control">
                    <input class="submit" type="submit" value="Registrate"/><br>
                </div>

            </form>
        </section>
    </div>


    <!--fin del contenido-->

    <!--footer-->
    <?php require_once "partials/footer.php"; ?>
    <!--scripts ed jquery y bootstrap-->
    <?php require_once "partials/scripts.php"; ?>
