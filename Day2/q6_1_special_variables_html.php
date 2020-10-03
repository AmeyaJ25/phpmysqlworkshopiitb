<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>Triangle</title>
    <style>
        form {
            display: table;
            margin: auto;
            display: flex ;
            border:2px solid blue;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            justify-items: center;
            padding: 5px;

        }
        #demo{  
            margin:10px;
        }
        #demo1{
            height:700px;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            justify-items: center;
        }
    </style>
</head>
<body>
<div id="demo1">
<form  method='get'>
    <span>Enter side 1</span>
    <input type="number" name="first" >
    <br>
    <span>Enter side 2</span>
    <input type="number" name="second" >
    <br>
    <span>Enter side 3</span>
    <input type="number" name="third" >
    <input type="submit" value="Submit" id="demo">
</form>
</div>
</body>
</html>
<?php
    $side1=$_GET["first"];
    $side2=$_GET["second"];
    $side3=$_GET["third"];
    if($side1==$side2||$side2==$side3||$side1==$side3){
        if($side2==$side3&&$side1==$side2){    
            echo"<p><center>Given sides are of equiliteral triangle</p></center>";
        }
        else{
            echo"<p><center>Given sides are of isosceles triangle</p></center>";
        }
    }
    else{
        echo"<p><center>Given sides are of scalene or right angled triangle</p></center>";
    }
?>
