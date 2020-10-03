<?php

$connect = mysqli_connect("localhost","root","","result");
if(!$connect)
{
    die("Connection failed: ".mysqli_connect_error());
}
echo "Connected successfully";
?>