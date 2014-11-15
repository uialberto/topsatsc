<?php
if (!isset($_GET['page'])) {
    include("head/top_home.php");
} elseif (!file_exists('includes/head/top_'.$_GET["page"].'.php'))  {
    include("head/top_home.php");
} else{
    $modulo = $_GET['page'];
    include ('head/top_'.$modulo.'.php');
}
?>
