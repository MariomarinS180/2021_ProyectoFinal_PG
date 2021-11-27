<?php
include('../modelo/dreamhomeDAO.php');
$dao = new DreamhomeDAO(); 
$branchNo  = $_POST['txtBranch'];
$steet = $_POST['txtStreet'];
$city = $_POST['txtCity'];
$postcode = $_POST['txtpostCode'];

$res = $dao->modificarBranch($branchNo,$steet,$city,$postCode); 
header('location../vista/header.php');
?>