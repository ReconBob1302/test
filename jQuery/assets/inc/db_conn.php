<?php

$q = intval($_GET['q']);

$con = mysqli_connect('localhost','reconbob','Montec12','json_ajax');
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
}

mysqli_select_db($con,"json_ajax");
$sql="SELECT * FROM orders WHERE id = '".$q."'";
$result = mysqli_query($con,$sql);


mysqli_close($con);
?>