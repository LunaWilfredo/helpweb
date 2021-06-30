<?php error_reporting(0)?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Question</title>
    <!-- css -->
    <!-- <link rel="stylesheet" href="CSS/estilos.css"> -->
    <!-- bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <!-- icono -->
    <link rel="shortcut icon" type="image/x-icon" href="Imagenes/garantia.png">
    <script src="https://kit.fontawesome.com/57b38ed15d.js" crossorigin="anonymous"></script>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-success">
            <a class="navbar-brand" href="#"><i class="fab fa-quora"></i>uestion</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarText">
                <ul class="navbar-nav mr-auto">

                    <li class="nav-item active">
                        <a class="nav-link" href="#">Inicio</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="#link">Links</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="#text"><i class="fas fa-atlas"></i> Text</a>
                    </li>
           
                </ul>
                <span class="navbar-text">
                    <?php  date_default_timezone_set("America/Lima");  $date =date("d/m/Y h:i:s",time());  echo $date; ?>
                </span>
            </div>
        </nav>
    </header>
    
    <!-- Cuerpo  link-->
    <div class="container">
        <!-- start link -->
        <div id="link" class="mt-2">
            <h1>Links</h1>  
            <div class="row">
 
                <div class="col-sm-5 mb-2">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">IPCC</h5>
                            <p class="card-text"> https://10.95.224.33:8443/csp/bsf/index.action </p>
                        </div>
                    </div>
                </div>

                <div class="col-sm-3">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">GODIR</h5>
                            <p class="card-text">https://maps.geodir.co/</p>
                        </div>
                    </div>
                </div>

                <div class="col-sm-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">MAPS</h5>
                            <p class="card-text">https://www.google.com/maps</p>
                        </div>
                    </div>
                </div>

                <div class="col-sm-5 mb-2">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">WICONTACT</h5>
                            <p class="card-text"> Amb 4/ 10.200.52.43 pbx / 10.200.52.42 front </p>
                            <p class="card-text"> Amb 2/ 10.200.52.14 pbx / 10.200.52.45 front </p>
                            <p class="card-text"> Amb 3/ 10.200.52.81 pbx / 10.200.52.82 front </p>
                        </div>
                    </div>
                </div>

                <div class="col-sm-3">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Web de Aplicaciones</h5>
                            <p class="card-text">intranetwebapp/aplicaciones</p>
                        </div>
                    </div>
                </div>

                <div class="col-sm-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">VPN Y SERVER VIRTUALES</h5>
                            <p class="card-text">root/Sysserver02.</p>
                            <p class="card-text">admin/pFTE0nL1AP</p>
                        </div>
                    </div>
                </div>

                <div class="col-sm-7 mb-2">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">LIMPIEZA DE HISTORIAL DE REMOTE DESKOP</h5>
                            <p class="card-text">HKEY_CURRENT_USER\Software\Microsoft\Terminal Server Client\Default</p>
                        </div>
                    </div>
                </div>

                <div class="col-sm-5">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Comandos CMD IPCC</h5>
                            <p class="card-text"> net start icdcomm / icdcomm -automatic </p>
                        </div>
                    </div>
                </div>

                <div class="col-sm-4 mb-2">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">VPN Y SERVER VIRTUALES</h5>
                            <p class="card-text">root/Sysserver02.</p>
                            <p class="card-text">admin/pFTE0nL1AP</p>
                        </div>
                    </div>
                </div>

                <div class="col-sm-8 mb-2">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">ELIMINADO DE SESION TEMPORAL</h5>
                            <p class="card-text">HKEY_LOCAL_MACHINE/SOFTWARE/Microsoft/Windows NT/Profilelist</p>
                        </div>
                    </div>
                </div>

            </div>

        </div><!-- end link -->
        </div><!-- End body link -->


        <!-- start text -->
        <div class="container">
            <div id="text">

                <h1>Text</h1>
                <div class="row mb-2">
                    <div class="col-sm-7">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">API Number</h5>

                                <form action="" method="post">
                                    <?php $numero=$_POST['numero']; ?>
                                    <p class="card-text">Ingresa el numero para generar link :</p>
                                    <div class="input-group mb-3">  
                                        <input type="text" class="form-control" placeholder="Numero" aria-label="numero" aria-describedby="basic-addon1" name="numero">
                                    </div>
                                    <button class="btn btn-success" name="btn-c">Generar</button>
                                </form> 

                            </div>
                        </div>
                    </div>

                    <?php if(isset($_POST['numero']) && $_POST['numero'] != NULL) :?>
                    <div class="col-sm-5">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Number Generate</h5>
                                <a href="https://api.whatsapp.com/send?phone=51<?php echo $numero; ?>" class="" target="_blank">https://api.whatsapp.com/send?phone=51 <?php echo $numero; ?></a>
                            </div>
                        </div>
                    </div>
                    <?php else: ?>
                        <div class="col-sm-5">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Number Generate</h5>
                                <a href="#" class="">none</a>
                            </div>
                        </div>
                    </div>
                    <?php endif; ?>
                </div>

                <div class="accordion" id="accordionExample">
                    <div class="card">
                        <div class="card-header" id="headingOne">
                        <h2 class="mb-0">
                            <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            Incidente
                            </button>
                        </h2>
                        </div>

                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                            <div class="card-body">
                                <p>Utiliza el siguiente texto para atender un incidente:</p>
                                <p>Buenos dias /tardes/noches  soy del area de sistemas de MDY , 
                                me comunico con usted para solicitarle una foto del aplicativo 
                                anydesk , para poder apoyarlo(a).
                                </p>
                                <p>Le brindo el instalador  en caso que no tengas instalado el programa.</p>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingTwo">
                        <h2 class="mb-0">
                            <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            Collapsible Group Item #2
                            </button>
                        </h2>
                        </div>
                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                        <div class="card-body">
                            Some placeholder content for the second accordion panel. This panel is hidden by default.
                        </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingThree">
                        <h2 class="mb-0">
                            <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            Collapsible Group Item #3
                            </button>
                        </h2>
                        </div>
                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                        <div class="card-body">
                            And lastly, the placeholder content for the third and final accordion panel. This panel is hidden by default.
                        </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!-- end text -->
        
    

    <footer>
        <p>Design by <a href="">MS</a> ©Copyrigth</p>
    </footer>

    <!-- JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
</body>
</html>

