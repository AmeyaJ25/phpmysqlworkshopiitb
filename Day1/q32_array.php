<?php
    $M1=array(array(10,20),array(30,40));
    $M2=array(array(50,60),array(70,80));
    $Sum=array(array(1,2),array(3,4));
    $Sum[0][0]=$M1[0][0]+$M2[0][0];
    $Sum[0][1]=$M1[0][1]+$M2[0][1];
    $Sum[1][0]=$M1[1][0]+$M2[1][0];
    $Sum[1][1]=$M1[1][1]+$M2[1][1];
    echo"Element at position (1,1) is ".$Sum[0][0]."<br>";
    echo"Element at position (1,2) is ".$Sum[0][1]."<br>";
    echo"Element at position (2,1) is ".$Sum[1][0]."<br>";
    echo"Element at position (2,2) is ".$Sum[1][1]."<br>";
?>