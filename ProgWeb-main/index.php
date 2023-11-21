<?php
include_once ('conecta.inc.php');

include_once('pagina.php');

if(empty($_SERVER["QUERY_STRING"])){
    $var = "pagina.php";
    include_once("$var");
}else{
    $pg = $_GET['pg'];
    include_once("$pg.php");
}

?>