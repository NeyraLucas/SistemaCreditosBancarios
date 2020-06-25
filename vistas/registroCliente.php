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
					<a href="escritorio.php" class="editBtn">Dashboard</a>
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
                <h4><br>CLIENTES</h4>
                
                <!--Formulario--->
                <div class="col-lg-6 offset-lg-3" id="formulario" style="display: none;">
                        <form action="post" name="addCliente" id="addCliente">
                            <div class="">
                                <div class="form-group row">
                                    <input type="text" class="form-control col-lg-6" name="tipo_persona" id="tipo_persona" placeholder="Tipo de persona">
                                    <input type="text" class="form-control col-lg-6" name="nom_clie" id="nom_clie" placeholder="Nombre">
                                </div>
                                <div class="form-group row">
                                    <input type="text" class="form-control col-lg-5" id="tipo_documento" name="tipo_documento" placeholder="Tipo de Documento">
                                    <input type="text" class="form-control col-lg-5" id="num_documento" name="num_documento" placeholder="Nombre de Documento">
                                    <input type="text" class="form-control col-lg-2" id="edad" name="edad" placeholder="Edad">
                                </div>
                                <div class="form-group row">
                                    <input type="text" class="form-control col-lg-5" id="direccion_clie" name="direccion_clie" placeholder="Direccion">
                                    <input type="email" class="form-control col-lg-5" id="email_clie" name="email_clie" placeholder="Correo">
                                    <input type="text" class="form-control col-lg-2" id="telefono" name="telefono" placeholder="Telefono">
                                </div>
                                <div class="text-center">
                                <button type="submit" class="btn btn-success fondoColorCardsContent">Ingresar</button>
                                <input type="button" class="btn btn-danger fondoColorCardsContent" value="Cancelar" id="regCS" />
                                </div> 
                            </div>
                        </form>
                </div>
				<!--Fin formulario--->
				
				<!---Tabla--->
				<div class="col-lg-6 offset-lg-3 " id="dTables" style="display: none;">
					<h1>BUSQUEDA DE CLIENTES</h1>
					<label for="caja_busqueda">Buscar</label>
					<div class="row">
						<input type="text" name="caja_busqueda" id="caja_busqueda" class="form-control col-lg-4 offset-lg-4 text-center"></input>
					</div>
					

					<div id="datos" class="py-3">
						
					</div>
					<button class="btn btn-danger" id="verCS">Cancelar</button>
				</div>
				<!---Fin tabla--->

			</div>
		<!---Inicio cards-->
		<div class="container px-5">
			<div class="row py-5">
				<a class="col-lg-4 col-md-4" id="card1">
					<div class="card1 fondoColorCardsContent">
						  <div class="card-body">
							<h4 class="card-title">Registro de Cliente</h4>
							<input type="button" value="Registrar" id="regCH" class="btn btn-success fondoColorCardsContent" />
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
							<h4 class="card-title">Consulta de Clientes</h4>
							<input type="button" value="Ver Clientes" id="verCH" class="btn btn-success fondoColorCardsContent" />
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
							<h4 class="card-title">Dar de baja Cliente</h4>
							<input type="button" value="Ver Clientes" id="bajaH" class="btn btn-success fondoColorCardsContent" />
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
	<script src="js/registroClientes.js"></script>
	<script src="js/clientes.js"></script>
	<script src="js/listarClientes.js"></script>
</body>
</html>