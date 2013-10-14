<?php
if (!isset($_GET['page'])) {
    include("includes/top_index.php");
} elseif (!file_exists('includes/top_'.$_GET["page"].'.php'))  {
    include("includes/top_index.php");
} else{
    $modulo = $_GET['page'];
    include ('includes/top_'.$modulo.'.php');
}
?>
