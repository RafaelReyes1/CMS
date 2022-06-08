<?php
require_once ("../models/userModel.php");
 $user=isset($_REQUEST['usuario'])? $_REQUEST['usuario']:'';
 $pass=isset($_REQUEST['clave'])? $_REQUEST['clave']:'';
$user2 = new userModel();
$datos= $user2->getAccess($user,$pass);
echo $datos;
?>


