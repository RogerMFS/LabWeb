<?php
require 'Bean.php';
header("Content-Type: text/html;charset=utf-8");
if(!isset($_SESSION))
{
    session_start();
}
$Beans = bean::getInstance();
if (isset($_POST['usuari']) && isset($_POST['contrasenya'])) {
    if ($Beans->validaUsuari($_POST['usuari'], $_POST['contrasenya']) === true) {
        $Beans->setUsuari($_POST['usuari']);
        header('Location: ');
    } else {
        header('Location: ');
    }
}
else if (isset($_POST['id_categoria'])) {
    //$Beans-> setCategoria($_POST['id_categoria']);
    header('Location: productos.php?categoria='.$_POST['id_categoria'].'');
}
?>