<?php   
    /* TEXTOS DE CONTACTO*/
    include 'cabecera.php';  
    include 'menu.php';
    error_reporting(0);
    ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Question</title>
    <link rel="stylesheet" href="../CSS/estilos.css">
</head>
<body>

    <div class="contenedor-all-2">

        <div class="contenedor-texto-2">
            <div class="titulo-texto">LINKS</div>
            <div class="contenedor-resultado-2">
                <p>IPCC</p>
                    <p>https://10.95.224.33:8443/csp/bsf/index.action</p>
                <p>GODIR</p>
                    <p>https://maps.geodir.co/</p>
                <p>MAPS</p>
                    <p>https://www.google.com/maps</p>
                <p>MYMAPS</p>
                    <p>https://www.google.com/intl/es/maps/about/mymaps/</p>
                <p>WICONTACT</p>
                <p>Amb 4/ 10.200.52.43 pbx / 10.200.52.42 front</p>
                <p>Amb 2/ 10.200.52.14 pbx / 10.200.52.45 front</p>
                <p>Amb 3/ 10.200.52.81 pbx / 10.200.52.82 front</p>
                <p>Web de Aplicaciones</p>
                    <p>intranetwebapp/aplicaciones</p>
            
            </div>
        </div>
        <!---contenedor dos----->
        <div class="contenedor-texto-2">
            <div class="titulo-texto">CONTRASEÑAS VPN Y SERVER VIRTUALES</div>
            <div class="contenedor-resultado-2">
                <p>root/Sysserver02.</p>
                <p>admin/pFTE0nL1AP</p>
            </div>
            <div class="titulo-texto">Comandos CMD IPCC</div>
            <div class="contenedor-resultado-2">
                <p>net start icdcomm / Inicia el ICDCOMM del ipcc</p>
                <p>icdcomm -automatic / Instala ICDCOMM y lo colo en autoamtico</p>
                <p>LIMPIEZA DE HISTORIAL DE REMOTE DESKOP</p>
                    <p>HKEY_CURRENT_USER\Software\Microsoft\Terminal Server Client\Default</p>
                <p>ELIMINADO DE SESION TEMPORAL</p>
                    <p>HKEY_LOCAL_MACHINE/SOFTWARE/Microsoft/Windows NT/Profilelist</p>
                
            </div>

        </div>
    </div>
    <?php include 'footer.php'; ?>
</body>
</html>