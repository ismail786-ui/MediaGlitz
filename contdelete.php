<?php
include "./connect.php";
$id = $_GET['delete'];
$sql = "delete from contact where id = '$id' ";
if($conn->query($sql)){
header('location:conview.php');
}
?>