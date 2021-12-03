<?php
include('../modelo/dreamhomeDAO.php');
$dao = new DreamhomeDAO(); 
$propertyNo = $_POST['prop'];
$street = $_POST["street"];
$city = $_POST["c"];
$postcode= $_POST["pc"];
$type = $_POST['ty'];
$rooms = $_POST['roms'];
$rent = $_POST['rn'];

$res = $dao->modificarApartamento($propertyNo, $street, $city, $postcode, $type, $rooms, $rent); 

//var_dump($res = true); 
if($res =true){
header('location:../vista/header.php');
}else{
echo "MEJOR ME DEDICO A LAS REDES";
}
?>