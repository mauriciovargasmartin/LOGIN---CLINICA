<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "test"; // nombre de base de datos

$conn = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
if (!$conn){


    die("no hay conexion".mysqli_connect_error());

}


$nombre=$_POST["txtusuario"];
$pass=$_POST["txtpassword"];

$query = mysqli_query($conn,"SELECT * FROM  login WHERE usuario ='".$nombre."' and password ='".$pass."'");
$nr =mysqli_num_rows($query);

if($nr == 1){

    //header("Location:pagina.html")
    echo "Bienvenido " .$nombre;
}
else if($nr == 0) {
    header("Location:login.html");
    echo "sin ingreso";





}
?>