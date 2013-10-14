<div class="articulo">
<div class="grid_12" prefix_1>
    <div id="crumbs"><a href=".">Inicio</a> <span class="separator">&raquo;</span> <p class="parrafo">Cont&aacute;ctanos</p></div>
</div>
<div class="grid_8" prefix_1>    
    <div class="descripcion-parrafo">
        <h4 style="color: #666666; font-weight: bold; line-height: 1.25;">Cont&aacute;ctanos</h4>
        <p class="texto-parrafo">Utiliza el siguiente formulario para hacernos llegar tus opiniones, consejos o mensajes.
        </p>       
        <div  align="center">            
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST")
        {  
            $email_to = "info@topsatsc.com";
            $email_subject = "Topografía Satelital - Formulario";
            $error = -1;
            $email = "";
            function MostrarMensaje($error,$tipo) {
                switch ($tipo) {
                    case 0:
                        echo "<div class=\"alert\">".$error."</div>";
                        break;
                    case 1:
                         echo "<div class=\"alert alert-error alert-block\">".$error."</div>";
                        break;
                    case 2:
                         echo "<div class=\"alert alert-success alert-block\">".$error."</div>";
                        break;
                }
            }           
            if (isset($_POST['nombre']) && $_POST['nombre']!=""){
                $nombre = $_POST['nombre'];                
            }else
            {
                 MostrarMensaje("<b>Nombre, </b> es un dato requerido.", 0);
                 $error=1;
            }
            if (isset($_POST['email']) && $_POST['email']!=""){
                $email = $_POST['email'];                
            }else
            {
                 MostrarMensaje("<b>E-Mail, </b> es un dato requerido.", 0);
                 $error=1;
            }
            if (isset($_POST['mensaje']) && $_POST['mensaje']!=""){
                $mensaje = $_POST['mensaje'];                
            }else
            {
                 MostrarMensaje("<b>Mensaje</b>, es un dato requerido.", 0);
                 $error=1;
            }
            if ($error < 0)
            {
                $mensaje_error = "";
                $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
                if(!preg_match($email_exp,$email)) {
                    $mensaje_error = "<b>E-Mail </b> ingresado no es una dirección de correo electrónica válida.";
                    MostrarMensaje($mensaje_error, 1); // Error de Validacion de E-Mail
                    $error=1;
                }   
             }          
            $apellidos = $_POST['apellidos'];  
            if ($error < 0)
            {
                $email_message = "Se ha recibido el siguiente mensaje:\n";
                $email_message .= "Nombre: ".$nombre."\n";
                $email_message .= "Apellidos: ".$apellidos."\n";
                $email_message .= "E-Mail: ".$email."\n";            
                $email_message .= "Mensaje: \n".$mensaje."\n\n";
                $email_message .= "Enviado el " . date('d/m/Y H:i:s', time());
                
                // create email headers
                $headers = 'From: '.$email."\r\n".
                'Reply-To: '.$email."\r\n" .
                'X-Mailer: PHP/' . phpversion();
                
                if (@mail($email_to, utf8_decode($email_subject),  utf8_decode($email_message), $headers))
                  $seEnvio = true;
                else
                  $seEnvio = false;
                if($seEnvio == true)            
                   MostrarMensaje("Se ha enviado su mensaje satisfactoriamente. Gracias por visitarnos.", 2); // Error de Validacion de E-Mail
                else            
                  MostrarMensaje("Se ha producido un error al enviar su mensaje. Favor contactese con el <b>Administrador</b>.", 1);
            }
        }       
        ?>  
        <form class="form2" id="form-contacto"  method="post" action="index.php?page=contacto">
            <div class="input">
                <div class="inputtext">Nombre (*): </div>
                <div class="inputcontent">
                  <input name="nombre" type="text" placeholder="Ingrese su Nombre" />
                </div>
            </div>
            <div class="input">
                <div class="inputtext">Apellidos: </div>
                <div class="inputcontent">
                    <input name="apellidos" type="text"  placeholder="Ingrese su Apellido" />
                </div>
            </div>
            <div class="input">
                <div class="inputtext">E-Mail (*): </div>
                <div class="inputcontent">
                   <input name="email" type="text"  placeholder="Ingrese su E-mail"  />
                </div>
            </div>
            <div class="inputtextbox nobottomborder">
                <div class="inputtext">Mensaje (*): </div>
                <div class="inputcontent">
                    <textarea name="mensaje" maxlength="1000" class="textarea"></textarea>
                </div>
            </div>
            <div class="buttons">
             <input class="orangebutton" type="submit" value="Enviar" />
            </div>
        </form>          
      </div>                    
   </div>
</div>
<div class="grid_4" prefix_9>
    <div class="descripcion-topografo">
        <h5 style="color: #666666; font-weight: bold; line-height: 1.25;">Direcci&oacute;n y Tel&eacute;fono</h5>
        <div class="imgdireccion-izda"></div>
        <p class="texto-parrafo">           
            <b>Oficina Central</b><br />
            Municipio La Guardia. <br />
            Entrando al Barrio / El Bibosi. <br />
            Frente al Colegio Nacional La Guardia. <br />
            Santa Cruz de la Sierra, Bolivia.<br />
        </p>
        <div class="imgcorreo-izda"></div>
        <h5 style="color: #666666; font-weight: bold; line-height: 1.25;">Correos El&eacute;ctronicos</h5>
        <p class="texto-parrafo">
            <i>Información General</i> <br />
            <b>info@topsatsc.com</b> <br />
            <i>Top&oacute;grafos</i> <br />
            Luis Fernando. Baigorria Lijeron.<br />
            <b>lbaigorria@topsatsc.com</b> <br />
            <i>Tel&eacute;fonos</i><br />
            <spam style="color: #666666; font-weight: bold; line-height: 1.25;"><b>(+591) 716-29591 / 766-47814</b></spam>
            <br />Pablo Abrego.<br />
            <b>abrego.pablo@topsatsc.com</b> <br />
            <i>Tel&eacute;fonos</i><br />
            <spam style="color: #666666; font-weight: bold; line-height: 1.25;"><b>(+591) 716-29591</b></spam>
        </p>
    </div>
    <div class="clear"></div>
</div>    
</div>
<div class="clear"></div>
<div id="fb-root"></div>