<?php

$combo=1;



if($combo==1){
  $servidor = "etdq12exrvdjisg6.cbetxkdyhwsb.us-east-1.rds.amazonaws.com";
  $usuario = "j8uju4txtsb8tli2";
  $senha = "z5v0aaon2iijb3lr";
  $banco = "b98p7h43wvkg7xwp";

}

if($combo==2){
  $servidor = "localhost";
  $usuario = "filial185";
  $senha = "senhafilial";
  $banco = "test";

}

$conectar = mysqli_connect("$servidor","$usuario","$senha","$banco");

if (!$conectar) {
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}
else{


}



?>
