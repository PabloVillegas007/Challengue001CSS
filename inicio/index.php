<?php 
//metodos estaticos, llamarlos sin una instancia
// class UnaClase{
//     public static function unMetodo(){
//         echo "Hola soy un metodo estatico" . "<br/>";
//     }
// }

// $obj = new UnaClase();
// $obj ->unMetodo();

// UnaClase::unMetodo();
$servidor = "localhost";
$usuario = "root";
$contrasenia = "";
try {
    $conexion = new PDO("mysql:host = $servidor:dbname=album", $usuario, $contrasenia);
    $conexion-> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Conexion establecida";
} catch (PDOException $error) {
    echo "Conexino Erronea ".$error;
}

?>