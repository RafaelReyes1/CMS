<?php
require_once("../db/conexion.php");
class userModel
{
private $db;
private $usuarios;

public function__construct()
{
$this->db=baseDatos::conectar();
$this->usuarios="";
}
public function getAccess($user,$pass);
{
$query = mysqli_query($this->db,"select idusuario,nombre,clave from usuarios where usuario='$user' and estado='A'");
if($query == FALSE)
{
echo "Sentencia incorrecta llamando a la tabla: usuarios";
}
else
{
$fila=mysqli_fecth_assoc($query);
if($pass==$fila['clave'])
{
session_start();
$_SESSION['logueado']=1;
$_SESSION['idusuario']=$fila['idusuario'];
$_SESSION['nombre']=$fila['nombre'];
$_SESSION['usuario']=$user;
$this->usuarios="Bienvenido";
}
else
{
$this->usuarios="Usuario/password no válidos";
}
mysqli_free_result($query);
}
$this->db=baseDatos::desconcetar(this->db);
return $this->usuarios;
}
}
?>