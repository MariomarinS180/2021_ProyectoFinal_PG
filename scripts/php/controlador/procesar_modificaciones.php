<?php
include('../modelo/dreamhomeDAO.php');
$dao = new DreamhomeDAO(); 
$branchNo  = $_POST['num'];
$steet = $_POST['nom'];
$city = $_POST['pa'];
$postCode = $_POST['sa'];

$res = $dao->modificarBranch($branchNo,$steet,$city,$postCode);     
var_dump($res = true); 
if($res){
header('location:../vista/header.php');
}else{
echo "MEJOR ME DEDICO A LAS REDES";
}
?>