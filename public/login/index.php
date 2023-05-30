<!doctype html>
<html lang="en">
<head>
<link rel="icon" type="image/png" href="../../public/assets/img/favicon.ico" />
    <title>Incio de sesión</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body class="bg-dark">
    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 text-center mb-5"> 
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-7 col-lg-5">
                    <div class="login-wrap p-4 p-md-5">
                        <div class="d-flex align-items-center justify-content-center">
                            <img src="../../public/assets/img/caribetranslogo.png" >
                        </div>
                        <br>
                        <h4 class="text-center mb-0 font-weight-normal text-secondary">Operaciones</h4>
                        <h5 class="text-center mb-4 text-secondary ">Inicio de sesión</h5>
                        <form id="login" action="/operaciones/public/config/authenticate.php" method="post" autocomplete="off" class="login" class="login-form">
                        <input type="hidden" value="<?php echo $_GET['url']?>" name="url" id="url" >    
                        <div class="form-group">
                                <input type="text" class="form-control rounded-left text-center" name="UserName" id="UserName" onkeyup="this.value=this.value.toUpperCase();"  placeholder="Usuario" required oninvalid="this.setCustomValidity('Por favor, ingrese su usuario.')" oninput="setCustomValidity('')">
                            </div>
                            <div class="form-group d-flex">
                                <input type="password" class="form-control rounded-left text-center" name="userPassword" id="userPassword" placeholder="Contraseña" required oninvalid="this.setCustomValidity('Por favor, ingrese su contraseña.')" oninput="setCustomValidity('')">
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary btn-lg col-12 rounded submit px-3">Entrar</button>
                            </div>
                            <div class="form-group d-md-flex">
                                <div class="w-50">
                                    <label class="checkbox-wrap checkbox-primary">Recordar
									  <input type="checkbox" checked>
									  <span class="checkmark"></span>
									</label>
                                </div>
                                <div class="w-50 text-md-right">
                                    <a href="#">Olvide mi contraseña</a>
                                </div>
                            </div>
                            <div class="w-50 text-md-left">
                                    <a href="/portalcaribetrans/index.php">Entrar como visitante</a>
                                </div>
                        </form>
                    </div>  
                </div>
            </div>
        </div>
    </section>
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>