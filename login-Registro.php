    <?php
        // llamamos a las funciones controladoras
        require_once 'register-controller.php';

        if ( isLogged() ) {
            header('location: index.php');
            exit;
        }
        
        $pageTitle = "Login";
        include "partials/head.php";

        // Persistencia de datos
        $userEmail = isset($_POST['email']) ? trim($_POST['email']) : '';
        
        $errors = []; //crea el array de errores a mostrar en los campos
        if ($_POST) {
            $errors = loginValidate($_POST);
    
            if ( count($errors) == 0) {
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
    </div>


    <!--fin del contenido-->

    <!--footer-->
    <?php require_once "partials/footer.php"; ?>
    <!--scripts ed jquery y bootstrap-->
    <?php require_once "partials/scripts.php"; ?>
