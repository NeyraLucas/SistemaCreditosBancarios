<?php
//redirecion
require('header.php');

?>
	<div class="row">
		
		<div class=" col-lg-2 col-md-4">
		<!---Section-->
		<section class=" px-5">
			<ul class="list-group list-unstyled text-justify">
				<li class="py-3">
					<a href="#" class="editBtn">Dashboard</a>
				</li>
				<li class="py-3">
					<a href="registroCliente.php" class="editBtn">Clientes</a>
				</li>
				<li class="py-3">
					<a href="" class="editBtn">Registro Usuarios</a>
				</li>
				<li class="py-3">
					<a href="" class="editBtn">Permisos</a>
				</li>
				<li class="py-3">
					<a href="" class="editBtn">Salir</a>
				</li>
			</ul>
		</section>
		<!--Fin Section-->	
		</div>

		<div class="col-lg-10 col-md-8 fondoColorCards py-2">
			<div class="text-center">
				<h4><br>CREDITOS</h4>
					<div class="">
						<?php
						//redirecion
						require('tarjetadeCredito.php');
						?>
					</div>
					<div class="">
						<?php
						//redirecion
						require('creditoHipotecario.php');
						?>
					</div>	
					<div class="">
						<?php
						//redirecion
						require('creditoCarro.php');
						?>
					</div>		
			</div>

			<!---Inicio cards-->
			<div class="container px-5">
				<div class="row py-5">
					<a class="col-lg-4 col-md-4" id="card1">
						<div class="card1 fondoColorCardsContent">
							<div class="card-body">
								<h4 class="card-title">Tarjeta de Crédito</h4>
								<input type="button" value="Registrar" id="mostrarTC" class="btn btn-success fondoColorCardsContent" />
							</div>
							
							<div class="go-corner" href="#">
								<div class="go-arrow">
								→
								</div>
							</div>
						</div>
					</a>
					<!---Card2-->
					<a class="col-lg-4 col-md-4" id="card2">
						<div class="card1 fondoColorCardsContent">
							<div class="card-body">
								<h4 class="card-title">Crédito Hipotecario</h4>
								<input type="button" value="Registrar" id="mostrarCH" class="btn btn-success fondoColorCardsContent" />
							</div>
							<div class="go-corner" href="#">
								<div class="go-arrow">
								→
								</div>
							</div>
						</div>
					</a>
					<!---Card3-->
					<a class="col-lg-4 col-md-4" id="card3">
						<div class="card1 fondoColorCardsContent">
							<div class="card-body">
								<h4 class="card-title">Crédito Automóvil</h4>
								<input type="button" value="Registrar" id="mostrarAuto" class="btn btn-success fondoColorCardsContent" />
							</div>
							<div class="go-corner" href="#">
								<div class="go-arrow">
								→
								</div>
							</div>
						</div>
					</a>
				</div>
				
			</div>
			<!--fin cards--->
		</div>
	</div>

	<div>
		<footer class="page-footer font-small blue pt-4">
			<div class="footer-copyright text-center py-3">© 2020 Copyright:
			    <a href=""> Ing Software</a>
			</div>
		</footer>
	</div>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="js/escritorioDinamico.js"></script>
	<script src="js/creditosAprobacion.js"></script>
</body>
</html>