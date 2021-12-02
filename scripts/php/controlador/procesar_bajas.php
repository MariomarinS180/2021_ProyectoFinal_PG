<?php

use phpDocumentor\Reflection\Location;

include('../modelo/dreamhomeDAO.php');
$dao = new DreamhomeDAO(); 
$propertyNo = $_GET['propertyNo']; 
$dao->eliminarAlumno($propertyNo);
header('location:../vista/header.php');
?>