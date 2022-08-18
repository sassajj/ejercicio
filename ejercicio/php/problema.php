<?php

if(isset($_POST["enviar"]) && !empty($_POST["num1"]) && !empty($_POST["num2"])){

$num1 = $_POST["num1"];
$num2 = $_POST["num2"];

if($num1==$num2){
    echo "los numeros ingresados son iguales";
}elseif($num1>$num2){
    echo "$num1 es mayor que $num2";
}else{
    echo "$num2 es mayor que $num1";
    }

}else{

echo "complete los campos del formulario";

}

?>