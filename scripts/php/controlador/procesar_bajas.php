<?php

use phpDocumentor\Reflection\Location;

include('../modelo/dreamhomeDAO.php');
$dao = new DreamhomeDAO(); 
$branchNo = $_GET['branchNo']; 
$dao->eliminarAlumno($branchNo);
header('location:../vista/header.php');
?>