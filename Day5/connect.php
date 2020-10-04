<?php

$connect = mysqli_connect("localhost","root","","data1");
if(!$connect)
{
    die("Connection failed: ".mysqli_connect_error());
}
?>