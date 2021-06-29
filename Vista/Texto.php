<?php   
    /* TEXTOS DE CONTACTO*/
    include 'cabecera.php';  
    include 'menu.php';
    error_reporting(0);
    ?>

    <div class="contenedor-all-2">
        <!-- FORMULARIO DE GENERADO DE NUMERO API PARA WHATSAPP -->
        <div class="contenedor-api">
            <form action="#" method="POST">
            <?php 
            //captura de dato
            $numero=$_POST['numerot'];

            ?> 
            <div class="contenedor-ingreso">
                <p>Ingresa el numero para generar link :</p>
                <input type="text" name="numerot" autofocus>  <!---autofocus--->
                <!-- <input type="submit" name="btn-c" value='C'> -->
                <button name="btn-c">C</button>
            </div>
    
            <?php
                if(isset($_POST['btn-c'])){ 
            ?>
    
            <div class="contenedor-resultado">
                <p>Redireccion</p>
                <a href="https://api.whatsapp.com/send?phone=51<?php echo $numero; ?>" target="_blank">https://api.whatsapp.com/send?phone=51 <?php echo $numero; ?></a>
            </div>

            <?php }else{  ?>

            <div class="contenedor-resultado">
        
            </div>
            <?php } ?>
            </form>
        </div>
        <div class="contenedor-texto-3">
            <!--------------PRIMER BOTON---------------->
            <div class="titulo-texto">Incidente</div>           
            <div class="contenedor-resultado-3">
                <p>Utiliza el siguiente texto para atender un incidente:</p>
                <p>Buenos dias /tardes/noches  soy del area de sistemas de MDY , 
                    me comunico con usted para solicitarle una foto del aplicativo 
                    anydesk , para poder apoyarlo(a).
                </p>
                <p>Le brindo el instalador  en caso que no tengas instalado el programa.</p>
            </div>
            <!--------------SEGUNDO BOTON---------------->
            <div class="titulo-texto">Habilitaciones</div>
            <div class="contenedor-resultado-3">
                <p>Utiliza el siguiente texto para atender un incidente:</p>
                <p>Buenos dias /tardes/noches  soy del area de sistemas de MDY , 
                    me comunico con usted para solicitarle una foto del aplicativo 
                    anydesk , para poder realizar la habilitiacion Correo/VPN/Remoto 
                    Operaciones.
                </p>
                <p>Le brindo el instalador  en caso que no tengas instalado el programa.</p>
            </div>
            <!--------------TERCER BOTON---------------->
            <div class="titulo-texto">Consulta</div>
            <div class="contenedor-resultado-3">
                <p>Utiliza el siguiente texto para atender un incidente:</p>
                <p>Buenos dias soy del area de sistemas , le escribo para consultarte si te 
                    pudiste conectar a la vpn? </p>
                    <p>Una consulta , conoce el manual de resolución de problemas técnicos?</p>
                </div>
            </div>
            
            <!-- PING -->
            <div class="contenedor-api">
             <form action="#" method="POST">
                <?php //captura de dato
                    $ip=$_POST['txt-ip']; 
                ?> 
                <div class="contenedor-ingreso">
                    <p>Ingresa  IP para realizar PING :</p>
                    <input type="text" name="txt-ip" >  
                    <!-- <input type="submit" name="btn-c" value='C'> -->
                    <button name="btn-v">PING</button>
                </div>
                <!-- Resultado de condicion -->
                <?php
                if(isset($_POST['btn-v'])){
                    $resultado = shell_exec("ping $ip ");
                    if(strpos($resultado, "recibidos = 0")){ 
                    ?>
                    <div class="contenedor-resultado">
                        <p>Resultado</p>
                        <p><?php echo "equipo apagado"; ?></p>
                    </div>
                    <?php }else{  ?>
                    <div class="contenedor-resultado">
                        <p>Resultado</p>
                        <p><?php echo "equipo encendido"; ?></p>
                    </div>
                    <?php } ?>
                    <?php } else {?>
                        <div class="contenedor-resultado">
            </div>
                <?php } ?>
             </form>
        </div>

    </div><!--Fin contenedor general-->   

    <?php include 'footer.php'; ?>
</body>
</html>