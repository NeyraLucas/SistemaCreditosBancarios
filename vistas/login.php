<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="../public/css/styles.css">
</head>
<body>
    
    <header>
        <div>
            <nav class="nav bg-dark ">
                <ul class="">
                    <h3 class="text-light">
                        CreditosBancarios
                    </h3> 
                </ul>
            </nav>
        </div>
    </header>



    <div class="container py-5">
            <form action="login.php" method="post">
                <div class="col col-sm-8 col-md-6 col-lg-6 col-lx-6 offset-sm-2 offset-md-3 offset-lg-3
                offset-lx-3">
                    <div class="form-group text-center">
                        <img src="../public/img/avatar.png" alt="Imagen del avatar" class="img-fluid avatar ">
                    </div>

                    <div class="form-group">
                        <input type="text" class="form-control" name="nom_usu" id="usr" placeholder="Usuario">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" id="password" name="password" placeholder="Contraseña">
                    </div>
                    <div class="form-group text-center">
                        <button type="submit" name="submit" class="btn btn-dark">Ingresar</button>
                    </div>  
                    <div class="text-center">
                        ¿No tienes una cuenta?<br>
                        <a href="createdCliente.html">REGISTRATE</a>
                    </div> 
                </div>
            </form>
    </div>


<!---Librerias-->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>