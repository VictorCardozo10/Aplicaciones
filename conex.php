<?php
//parametros para la base de datos
$host = "localhost"; 
$db = "dw2_actas";
$user = "root";
$password = "";
 

$link = new mysqli($host, $user,$password, $db);
if($link->connect_error){
    echo "la conexion fallo" . "<br>";
}else{
    echo "se conecto";
}

$sql = "select * from usuarios";

$resultado  = $link->query($sql);


if($resultado->num_rows > 0){
    echo "Se devolvieron " . $resultado->num_rows . " registros" . "<br>";
    while($reg = $resultado->fetch_assoc()){
        $json = json_encode([ //con jsonenconde codificamos como JSON los datos obtenidos
            'Nombre' => $reg['user_nombre'],
            'Correo' => $reg['user_mail']
        ]);
        echo $json . "<br>"; // Imprimir el JSON generado
    }
}


?>