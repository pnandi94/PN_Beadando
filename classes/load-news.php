<?php
include("dbh.classes.php");
$count=$_POST['count'];
$result=new DbhQuery();
$result->hirek($count);
?>