<?php
	$pageTitle = "Home";
	include "partials/head.php";
?>
    <!--navbar login-->
    <?php require_once "partials/nav-login.php"; ?>
    <!--navbar-->
    <?php require_once "partials/nav-login.php"; ?>
    <div class="contenedor">
    <!--contenido de las secciones: login y registro home, amigos, faq, perfil-->
			<div class="col-sm-12  col-md-8  col-lg-6">
	      <div class="tipodepost-container">
	        <ul>
	          <li><a href="#" class="iconos" data-toggle="modal" data-target="#NewPartido"><i class="far fa-futbol"></i>Nuevo Partido</a></li>
	          <li><a href="#" class="iconos" data-toggle="modal" data-target="#NewFecha"><i class="fas fa-calendar-plus"></i>Nueva Fecha</a></li>
	          <li><a href="#" class="iconos" data-toggle="modal" data-target="#NewTorneo"><i class="fas fa-trophy"></i>Nuevo Torneo</a></li>
	        </ul>
	      </div>
	    </div>
      <!-- Modal -->
      <div class="modal fade" id="NewPartido" tabindex="-1" role="dialog" aria-labelledby="NewPartidoTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="NewPartidoTitle">Nuevo Partido</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form class="form-group" action="" method="post">
								<label>Lugar del partido:</label>
									<input type="text" name="gameLocation" value="<?= $gameLocation; ?>" class="form-control <?= isset($errors["gameLocation"]) ? "is-invalid" : ""; ?>">
									<?php if (isset($errors["gameLocation"])) : ?>
										<div class="invalid-feedback">
												<?= $errors["gameLocation"] ?>
										</div>
								<br><br>
								<label>Fecha:</label>
								<div class="container">
    							<div class="row">
        						<div class='col-sm-6'>
            					<div class="form-group">
                				<div class='input-group date' id='datetimepicker1'>
													<input type="text" name="calendar" value="<?= $calendar; ?>" class="form-control <?= isset($errors["calendar"]) ? "is-invalid" : ""; ?>">
													<?php if (isset($errors["calendar"])) : ?>
														<div class="invalid-feedback">
																<?= $errors["calendar"] ?>
														</div>
                    				<span class="input-group-addon">
                        			<span class="glyphicon glyphicon-calendar"></span>
                    				</span>
                				</div>
            					</div>
        						</div>
        						<script type="text/javascript">
            					$(function () {
                			$('#datetimepicker1').datetimepicker();
            					});
        						</script>
    							</div>
								</div>
								<br>
								<label>Valor: $</label>
								<input type="number" name="gamePrice" value="<?= $price; ?>" class="form-control <?= isset($errors["gamePrice"]) ? "is-invalid" : ""; ?>">
								<?php if (isset($errors["gamePrice"])) : ?>
									<div class="invalid-feedback">
											<?= $errors["gamePrice"] ?>
								<br><br>
								<label>Cantidad de jugadores:</label>
								<select class="number-of-players" name="numberOfPlayers">
									<option value="">5</option>
									<option value="">6</option>
									<option value="">7</option>
									<option value="">8</option>
									<option value="">9</option>
									<option value="">10</option>
									<option value="">11</option>
									<?php if (isset($errors["numberOfPlayers"])) : ?>
										<div class="invalid-feedback">
											<?= $errors["numberOfPlayers"] ?>
										</div>
								</select>
								<br>
              </form>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
              <button type="button" class="btn btn-primary">Crear</button>
            </div>
          </div>
        </div>
      </div>
      <!-- Modal -->
      <div class="modal fade" id="NewFecha" tabindex="-1" role="dialog" aria-labelledby="NewFechaTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="NewFechaTitle">Nueva Fecha</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
							<label>Nombre del Torneo:</label>
							<input type="text" name="torneoName" value="">
							<label>Lugar del partido:</label>
							<input type="text" name="gameLocation" value="<?= $gameLocation; ?>" class="form-control <?= isset($errors["gameLocation"]) ? "is-invalid" : ""; ?>">
							<?php if (isset($errors["gameLocation"])) : ?>
								<div class="invalid-feedback">
										<?= $errors["gameLocation"] ?>
								</div>							<br><br>
							<label>Fecha:</label>
							<div class="container">
								<div class="row">
									<div class='col-sm-6'>
										<div class="form-group">
											<div class='input-group date' id='datetimepicker1'>
												<input type="text" name="calendar" value="<?= $calendar; ?>" class="form-control <?= isset($errors["calendar"]) ? "is-invalid" : ""; ?>">
												<?php if (isset($errors["calendar"])) : ?>
													<div class="invalid-feedback">
															<?= $errors["calendar"] ?>
													</div><span class="input-group-addon">
														<span class="glyphicon glyphicon-calendar"></span>
													</span>
											</div>
										</div>
									</div>
									<script type="text/javascript">
										$(function () {
										$('#datetimepicker1').datetimepicker();
										});
									</script>
								</div>
							</div>
							<br>
							<label>Valor: $</label>
							<input type="number" name="gamePrice" value="<?= $price; ?>" class="form-control <?= isset($errors["gamePrice"]) ? "is-invalid" : ""; ?>">
							<?php if (isset($errors["gamePrice"])) : ?>
								<div class="invalid-feedback">
										<?= $errors["gamePrice"] ?>
							<br><br>
							<label>Cantidad de jugadores:</label>
							<select class="number-of-players" name="numberOfPlayers">
								<option value="">5</option>
								<option value="">6</option>
								<option value="">7</option>
								<option value="">8</option>
								<option value="">9</option>
								<option value="">10</option>
								<option value="">11</option>
								<?php if (isset($errors["numberOfPlayers"])) : ?>
									<div class="invalid-feedback">
										<?= $errors["numberOfPlayers"] ?>
							</select>
							<br><br>
						</form>
					</div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
              <button type="button" class="btn btn-primary">Crear</button>
            </div>
          </div>
        </div>
      </div>
      <!-- Modal -->
      <div class="modal fade" id="NewTorneo" tabindex="-1" role="dialog" aria-labelledby="NewTorneoTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="NewTorneoTitle">Nuevo Torneo</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
							<label>Nombre del Torneo:</label>
							<input type="text" name="torneoName" value="<?= $torneoName; ?>" class="form-control <?= isset($errors["torneoName"]) ? "is-invalid" : ""; ?>">
							<?php if (isset($errors["torneoName"])) : ?>
								<div class="invalid-feedback">
										<?= $errors["torneoName"] ?>
								</div>							<br><br>
							<label>Lugar del torneo:</label>
							<input type="text" name="torneoLocation" value="<?= $torneoLocation; ?>" class="form-control <?= isset($errors["torneoLocation"]) ? "is-invalid" : ""; ?>">
							<?php if (isset($errors["torneoLocation"])) : ?>
								<div class="invalid-feedback">
										<?= $errors["torneoLocation"] ?>
								</div>							<br><br>
							<br><br>
							<label>Fecha de inicio:</label>
							<div class="container">
								<div class="row">
									<div class='col-sm-6'>
										<div class="form-group">
											<div class='input-group date' id='datetimepicker1'>
												<input type="text" name="calendar" value="<?= $calendar; ?>" class="form-control <?= isset($errors["calendar"]) ? "is-invalid" : ""; ?>">
												<?php if (isset($errors["calendar"])) : ?>
													<div class="invalid-feedback">
															<?= $errors["calendar"] ?>
													<span class="input-group-addon">
														<span class="glyphicon glyphicon-calendar"></span>
													</span>
											</div>
										</div>
									</div>
									<script type="text/javascript">
										$(function () {
										$('#datetimepicker1').datetimepicker();
										});
									</script>
								</div>
							</div>
							<br>
							<label>Valor: $</label>
							<input type="number" name="gamePrice" value="<?= $price; ?>" class="form-control <?= isset($errors["gamePrice"]) ? "is-invalid" : ""; ?>">
							<?php if (isset($errors["gamePrice"])) : ?>
								<div class="invalid-feedback">
										<?= $errors["gamePrice"] ?>
							<br><br>
							<label>Cantidad de equipos:</label>
							<input type="number" name="numberOfTeams">
							<?php if (isset($errors["numberOfTeams"])) : ?>
								<div class="invalid-feedback">
									<?= $errors["numberOfTeams"] ?>
							<br><br>
							<label>Jugadores por equipo:</label>
							<input type="number" name="numberOfPlayers">
							<?php if (isset($errors["numberOfPlayers"])) : ?>
								<div class="invalid-feedback">
									<?= $errors["numberOfPlayers"] ?>
						</form>
					</div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
              <button type="button" class="btn btn-primary">Crear</button>
            </div>
          </div>
        </div>
      </div>



    <br>
    	<div class="col-12 col-sm-12 col-md-8 col-lg-6">
        <div class="post-container">
          <div class="post-description">
            <img src="img/icons/trofeo.png" class="event-icon-trophy">
            <br>
            <div class="description">
              <h4>Torneo - Club Angel Gallardo</h4>
              <h6>Jueves 23 de agosto, $130 por persona</h6>
              <br>
            </div>
            <a href="#" title="Opciones"><i class="fas fa-ellipsis-h"></i></a>
          </div>

          <div class="second-row-container">
            <div class="teams">
              <div class="team-1 col-sm-6  col-md-6  col-lg-6">
                <h5>Equipo 1:</h5>
                  <img src="img/girl.jpg" class="team-member">
                  <img src="img/girl.jpg" class="team-member">
                  <img src="img/girl.jpg" class="team-member">
                  <img src="img/girl.jpg" class="team-member">
                  <img src="img/girl.jpg" class="team-member">
              </div>
              <div class="team-2 col-sm-6  col-md-6  col-lg-6">
                <h5>Equipo 2:</h5>
                  <img src="img/man.jpg" class="team-member">
                  <img src="img/man.jpg" class="team-member">
                  <img src="img/man.jpg" class="team-member">
                  <img src="img/man.jpg" class="team-member">
                  <img src="img/man.jpg" class="team-member">
              </div>
            </div>

            <div class="join">
              <a href="#" title="Unirse"><i class="fas fa-plus-circle"></i>UNIRSE</a>

            </div>
          </div>
          <div class="post-footer">
            <a href="#" title="Like"><i class="fas fa-thumbs-up col-1"></i></a>
            <a href="#" title="Comentar"><i class="fas fa-comment-dots col-1"></i></a>
          </div>
        </div>

      </div>
      <br>
      <div class="col-12 col-sm-12 col-md-8 col-lg-6">
        <div class="post-container">
          <div class="post-description">
            <img src="img/icons/pelota.png" class="event-icon-ball">
            <br>
            <div class="description">
              <h4>Partido - Open Gallo</h4>
              <h6>Jueves 23 de agosto, $80 por persona</h6>
              <br>
            </div>
            <a href="#" title="Opciones"><i class="fas fa-ellipsis-h"></i></a>
          </div>

          <div class="second-row-container">
            <div class="teams">
								<div class="team-1 col-sm-6  col-md-6  col-lg-6">
	                <h5>Equipo 1:</h5>
	                  <img src="img/girl.jpg" class="team-member">
	                  <img src="img/girl.jpg" class="team-member">
	                  <img src="img/girl.jpg" class="team-member">
	                  <img src="img/girl.jpg" class="team-member">
	                  <img src="img/girl.jpg" class="team-member">
	              </div>
              <br>
								<div class="team-2 col-sm-6  col-md-6  col-lg-6">
	                <h5>Equipo 2:</h5>
	                  <img src="img/man.jpg" class="team-member">
	                  <img src="img/man.jpg" class="team-member">
	                  <img src="img/man.jpg" class="team-member">
	                  <img src="img/man.jpg" class="team-member">
	                  <img src="img/man.jpg" class="team-member">
	              </div>
            </div>

            <div class="join">
              <a href="#" title="Unirse"><i class="fas fa-plus-circle"></i>UNIRSE</a>

            </div>
          </div>
          <div class="post-footer">
						<a href="#" title="Like"><i class="fas fa-thumbs-up col-1"></i></a>
            <a href="#" title="Comentar"><i class="fas fa-comment-dots col-1"></i></a>
          </div>
        </div>
			</div>
				<br>
				<div class="col-12 col-sm-12 col-md-8 col-lg-6">
		        <div class="post-container">
		          <div class="post-description">
		            <img src="img/icons/trofeo.png" class="event-icon-trophy">
		            <br>
		            <div class="description">
		              <h4>Torneo - Campus</h4>
		              <h6>Jueves 30 de agosto, $100 por persona</h6>
		              <br>
		            </div>
		            <a href="#" title="Opciones"><i class="fas fa-ellipsis-h"></i></a>
		          </div>

		          <div class="second-row-container">
		            <div class="teams">
		              <div class="team-1 col-sm-6  col-md-6  col-lg-6">
		                <h5>Equipo 1:</h5>
		                  <img src="img/girl.jpg" class="team-member">
		                  <img src="img/girl.jpg" class="team-member">
		                  <img src="img/girl.jpg" class="team-member">
		                  <img src="img/girl.jpg" class="team-member">
		                  <img src="img/girl.jpg" class="team-member">
		              </div>
		              <div class="team-2 col-sm-6  col-md-6  col-lg-6">
		                <h5>Equipo 2:</h5>
		                  <img src="img/man.jpg" class="team-member">
		                  <img src="img/man.jpg" class="team-member">
		                  <img src="img/man.jpg" class="team-member">
		                  <img src="img/man.jpg" class="team-member">
		                  <img src="img/man.jpg" class="team-member">
		              </div>
		            </div>

		            <div class="join">
		              <a href="#" title="Unirse"><i class="fas fa-plus-circle"></i>UNIRSE</a>

		            </div>
		          </div>
		          <div class="post-footer">
		            <a href="#" title="Like"><i class="fas fa-thumbs-up col-1"></i></a>
		            <a href="#" title="Comentar"><i class="fas fa-comment-dots col-1"></i></a>
		          </div>
		        </div>
    <section>
      <div class="chat col-3">
        <div class="messages col-3">
            <a href="#"><i class="fas fa-circle"></i>
              Mensajes (2)
            </a>
						<a href="#"><i class="fas fa-ellipsis-h" title="Opciones"></i></a>
        </div>

      </div>
    </section>
    <!--fin del contenido-->
    </div>
    <!--scripts ed jquery y bootstrap-->
    <?php require_once "partials/scripts.php"; ?>
