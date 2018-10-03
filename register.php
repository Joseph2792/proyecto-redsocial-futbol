<?php
	require_once 'register-controller.php';
	if ( isLogged() ) {
        header('location: index.php');
        exit;
    }
    $pageTitle = "Registro";
    include "partials/head.php";

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
    //<!--navbar-->
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
        <section id="registro" class="flexregistry">
            <form action="" method="post" enctype="multipart/form-data">
                <h2>Registrate</h2>
                <div class="row">
                    <div class="formlogin-control col-sm-12 col-md-6">
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

                    <div class="formlogin-control col-sm-12 col-md-6">
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
                </div>
                <div class="row">
                    <div class="formlogin-control col-sm-12 col-md-6">
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
                    <div class="formlogin-control col-sm-12 col-md-6">
                        <label>Nacionalidad</label>
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

                </div>
                <div class="row">
                    <div class="formlogin-control col-sm-12 col-md-6">
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

                    <div class="formlogin-control col-sm-12 col-md-6">
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
                </div>
                <div class="row">
                <div class="formlogin-control col-sm-12 col-md-6">
                    <label><b>Imagen de perfil</b></label>
                    <div class="custom-file">
                        <input
                            type="file"
                            class="custom-file-input <?= isset($errors['image']) ? 'is-invalid' : ''; ?>"
                            name="registerAvatar"
                        >
                        <label class="custom-file-label update-img">Elegí una foto...</label>
                        <?php if (isset($errors['image'])): ?>
                            <div class="invalid-feedback">
                                <?= $errors['image'] ?>
                            </div>
                        <?php endif; ?>
                    </div>
                    </div>
                </div>
                <div class="cont-btn-register">
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
