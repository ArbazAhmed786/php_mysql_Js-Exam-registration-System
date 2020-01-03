<?php
 
    $con=mysqli_connect('localhost','root','','examf');

    if(!$con)
    {
        die(' Please Check Your Connection'.mysqli_error($con));
    }
?>
    