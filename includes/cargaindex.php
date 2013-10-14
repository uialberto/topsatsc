<?php
// Si no esta inicializada la variable "page"
if (!isset($_GET['page'])) {
    // Cargamos contenido home.php
    include("pages/home.php");
// Si el archivo solicitado en la varible "page" no existe en el directorio
} elseif (!file_exists('pages/'.$_GET["page"].'.php'))  {
    // Cargamos contenido home.php
    include("pages/home.php");
// El módulo solicitado en "page" existe
} else{
    // Obtenemos la pagina (modulo) solicitado
    $modulo = $_GET['page'];
    switch ($modulo) {
        // Caso en que el modulo solicitado no tiene sub modulos.
<<<<<<< HEAD
        case 'blog': case 'contacto': 
=======
        case 'blog': case 'contactanos': 
>>>>>>> 4aab4aa79218cd8aea49e3dc466746ed7191f403
        case 'ubicacion':
        {
            include ('pages/'.$modulo.'.php');               
        } break;
        // Caso en el que el módulo solicitado tiene sub modulos.
        case 'topografia': case 'servicios':
        case 'clientes':
        {
            // Obtenemos el sub modulo solicitado.
           
            // Si el sub modulo solicitado no esta inicializado
            if(!isset($_GET['subpage'])) {
                include ('pages/'.$modulo.'.php');
            // Si el sub modulo solicitado no existe en el directorio.
            }elseif (!file_exists('pages/'.$_GET['subpage'].'.php')){
                // Cargamos el módulo.
                include ('pages/'.$modulo.'.php');            
            // Cargamos el submodulo solicitado   
            }else{
               $submodulo = $_GET['subpage'];
               include ('pages/'.$submodulo.'.php');   
            }
        } break;
        default : {
             include("pages/home.php");
        }
    }
}
?>
