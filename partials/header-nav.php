
<nav class="cont-navLogin">
    <div class="cont-logo">
        <img src="img/logo.svg" alt="logo">           
    </div>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse cont-nav" id="navbarSupportedContent">
    <!--
    <div class="usuario-navbar">
        <img src="img/man.jpg" alt="usuario">
        <span>Joseph</span>
    </div>
    -->
    <ul class="navbar-nav mr-auto cont-iconos">
      <li class="nav-item active">        
        <a class="nav-link ico-nav" href="index.php" title="Home">
            <i class="fa fa-home"></i>    
            <span>Home</span>
        </a>
      </li>
      <li class="nav-item">        
        <a class="nav-link ico-nav" href="login-Registro.php" title="Login">
            <i class="fa fa-sign-in-alt"></i>
            <span>Login</span>
        </a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link ico-nav" href="perfil.php" title="Perfil">
            <i class="fa fa-user"></i>
            <span>Perfil</span>
        </a>
      </li>
      <li class="nav-item">
      
        <a class="nav-link ico-nav" href="FAQ.php" title="Preguntas Frecuentes">
            <i class="fa fa-question-circle"></i>
            <span>Preguntas Frecuentes</span>
        </a>
      </li>
    </ul>
    <form action="get">
        <div class="cont-search">
            <input type="search" placeholder="Buscar grupos o personas..." name="q" id="buscadorNav">
            <button class="" type="submit">
                <i class="fa fa-search icon"></i>
            </button>                    
        </div>
    </form>
  </div>
</nav>
