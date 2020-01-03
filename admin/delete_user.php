<?php 

include('../connection.php');
$id=$_GET['id'];

$q=mysqli_query($con,"delete from register where usn='$id'");

header('location:index.php?page=manage_users');

?>