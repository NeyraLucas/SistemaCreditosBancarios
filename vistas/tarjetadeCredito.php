<div class="container" style="display: none;" id="formTC">
    <form action="post" name="addCredito" id="addCredito">
        <div class="">
            <h2>Tarjeta</h2>
            <div class="row">
                 <!--- 
                <input type="text" name="id_solicitud_credito" id="id_solicitud_credito" placeholder="Num. Solicitud" class="col-lg-4 col-md-4 form-control" disabled>
                <input type="text" name="medio" id="medio" placeholder="Medio" class="col-lg-4 col-md-4 form-control"> --->
                <select class="custom-select col-lg-4 col-md-4" id="id_medio"  name="id_medio">
                    <option selected>Medio</option>
                    <option value="1">Vía telefónica</option>
                    <option value="2">Sucursal</option>
                    <option value="3">Vía web</option>
                    <option value="4">Empresas Externas</option>
                </select>
                <!---Select de clientes ---->
                <select  id="id_cliente" name="id_cliente" class="custom-select col-lg-4 col-md-4">
                <option selected>Cliente</option>
                <?php 
                
                include '../config/conexion.php';
                    $consulta = "SELECT * FROM cliente";
                    $ejecutar=mysqli_query($conexion,$consulta) or die(mysqli_error($conexion));
                
                ?>

                <?php foreach ($ejecutar as $opciones): ?>
                    <option value="<?php echo $opciones['id_cliente']?>"><?php echo $opciones['nom_clie']?>
                    </option>


                <?php endforeach ?>    

                </select>
                <!---
                <input type="text" name="id_cliente" id="id_cliente" placeholder="Cliente" class="col-lg-4 col-md-4 form-control">
                --->
            </div>
            <div class="row py-3">
                <input type="text" name="id_tipo_credito" id="id_tipo_credito" placeholder="Tarjeta de Crédito" class="col-lg-4 col-md-4 form-control">
                <input type="date" name="fecha_solicitud" id="fecha_solicitud" placeholder="Fecha" class="col-lg-4 col-md-4 form-control">
                <input type="number" name="valor_solicitado" id="valor_solicitado" placeholder="Cantidad otorgada" class="col-lg-4 col-md-4 form-control">
            </div>

            <div class="row">
                <input type="text" name="plazo" id="plazo" placeholder="Plazo del crédito" class="col-lg-4 col-md-4 form-control">
                <input type="text" name="interes" id="interes" placeholder="Tasa de interes" class="col-lg-4 col-md-4 form-control">
                <input type="text" name="periodicidad" id="periodicidad" placeholder="Periodicidad" class="col-lg-4 col-md-4 form-control">
            </div>
            <div class="row py-3">
                <!---
                <input type="text" name="id_usuario" id="id_usuario" placeholder="Num. Usuario" class="col-lg-4 col-md-4 form-control" disabled>
                --->
                <select name="id_usuario" class="custom-select col-lg-4 col-md-4" id="id_usuario">
                <option selected>Usuario</option>    
                <?php 
                
                include '../config/conexion.php';
                    $consulta = "SELECT * FROM usuario";
                    $ejecutar=mysqli_query($conexion,$consulta) or die(mysqli_error($conexion));
                
                ?>

                <?php foreach ($ejecutar as $opciones): ?>
                    <option value="<?php echo $opciones['id_usuario']?>"><?php echo $opciones['nom_usu']?>
                    </option>


                <?php endforeach ?>    

                </select>

                <input type="button" name="" id="continuarTC" value="Continuar" class="col-lg-2 col-md-2 offset-lg-2 btn btn-success">
                <input type="button" name="" id="cerrarTC" value="Cancelar" class="col-lg-2 col-md-2 offset-lg-1 btn btn-danger">
            </div>
                <button type="submit" class="col-lg-2 col-md-2 offset-lg-2 btn btn-success">Guardar</button>
                
        </div>
    </form>
        <div id="aprobacion" style="display: none;">
            <h2 class="text-center py-3">Aprobación</h2>
            <div class="row py-3">
                <input type="text" placeholder="Buro de Crédito" class="col-lg-4 col-md-4 form-control" disabled>
                <input type="button" id="btnBC" value="Verificar" class="btn btn-warning col-lg-2 col-md-2 offset-lg-2">
                <input type="text" id="lbBC" placeholder="" class="bg-light col-lg-2 col-md-2 offset-lg-2" disabled>
            </div>

            <div class="row">
                <input type="text" placeholder="Fraudes" class="col-lg-4 col-md-4 form-control" disabled>
                <input type="button" value="Verificar" id="btnF" class="btn btn-warning col-lg-2 col-md-2 offset-lg-2">
                <input type="text" id="lbF" placeholder="" class="bg-light col-lg-2 col-md-2 offset-lg-2" disabled>
            </div>

            <div class="row py-3">
                <input type="text" placeholder="Duplicidad" class="col-lg-4 col-md-4 form-control" disabled>
                <input type="button" id="btnD" value="Verificar" class="btn btn-warning col-lg-2 col-md-2 offset-lg-2">
                <input type="text" id="lbD" placeholder="" class="bg-light col-lg-2 col-md-2 offset-lg-2" disabled>
            </div>

            <div class="row">
                <input type="text" placeholder="Investigación telefónica" class="col-lg-4 col-md-4 form-control" disabled>
                <input type="button" value="Verificar" id="btnInv" class="btn btn-warning col-lg-2 col-md-2 offset-lg-2">
                <input type="text" id="lbInv" placeholder="" class="bg-light col-lg-2 col-md-2 offset-lg-2" disabled>
            </div>

        </div>
    
    
</div>