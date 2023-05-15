<?php 
$pwd = "zOAssqYyoHpzomsCulUD"; $user = "root"; $db_name = "railway"; $port = '5664';
$host = "containers-us-west-201.railway.app";
$URL = $MYSQL_URL;
try {
    //$database = new PDO ("mysql:host=localhost;dbname="."hoteleria_list","root","",array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
    
    // $database = new PDO ("mysql:host=containers-us-west-180.railway.app;port=".$port.";dbname=".$db_name,"root",$pwd,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));

    // $database = mysqli_connect ("containers-us-west-180.railway.app",$user,$pwd,$db_name,$port);
    // $database->exec("SET CHARACTER SET utf8");

    // $database = new PDO ('mysql:host=containers-us-west-74.railway.app;por=7433;dbname='.$db_name, $user,$pwd,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));

    // $database->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // $database = new PDO ("mysql://root:zOAssqYyoHpzomsCulUD@containers-us-west-201.railway.app:5664/railway");
    $database = new PDO ($URL);
    // echo "Connected Successfully";
} catch (Exception $e) {
    echo "Ocurrió un problema con la conexion: ".$e->getMessage();
}
?>
