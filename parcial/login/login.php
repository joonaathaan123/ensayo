<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">


    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
        crossorigin="anonymous">
</head>

<body background="https://coecadiz.com/wp-content/uploads/2018/06/fondo-login-web.jpg"><br>
     <br>
     <br><br>




    <div class="container " style="text-align:center">
        <div class="form-row">
            <div class="col-1">
            </div>
            <div class="col-10">


                <div class="mx-auto" style="width: 500px;" >
                    <div class="card" >
                    <h2 class="card-title">Login</h2><hr>
                        <div class="card-body">
                            <form name="formulario" method="POST" action="procesos_login/validar.php">
                                <div class="form-group">
                                    <label for="exampleDropdownFormEmail1">N° De Identificacion</label>
                                    <input type="text" class="form-control" name="id"
                                     placeholder="N° De Identificacion">
                                </div>
                                <div class="form-group">
                                    <label for="exampleDropdownFormPassword1">Contraseña</label>
                                    <input type="password" class="form-control" name="contraseña"
                                        placeholder="Contraseña">
                                </div>
                                <button type="submit" class="btn btn-primary">Iniciar Sesión</button>
                            </form>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="add_login.php">Regístrate</a>
                           
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>









</body>

</html>