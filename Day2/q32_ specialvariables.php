<!DOCTYPE html>
<html lang="en">
<head>
    <title>Student Marksheet</title>
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
    <form action="q32_ specialvariables.php"  method="post">
    <span>Enter your Name:</span>
        <input type="text" name="name" id="">
        <br>
        <span>Enter marks in subject 1</span>
        <input type="number" name="s1" id="">
        <br>
        <span>Enter marks in subject 2</span>
        <input type="number" name="s2" id="">
        <br>
        <span>Enter marks in subject 3</span>
        <input type="number" name="s3" id="">
        <br>
        <span>Enter marks in subject 4</span>
        <input type="number" name="s4" id="">
        <br>
        <span>Enter marks in subject 5</span>
        <input type="number" name="s5" id="">
        <br>
        <input type="submit" value="Submit" id="demo">
    </form>
    </div>
    <?php
        $sname=$_POST["name"];
        $s1=$_POST["s1"];
        $s2=$_POST["s2"];
        $s3=$_POST["s3"];
        $s4=$_POST["s4"];
        $s5=$_POST["s5"];
        if($sname && $s1 && $s2 && $s3 && $s4 && $s5){
            echo"<p><center>Name of Student ".$sname."<br></p></center>";
            echo"<p><center>Marks in Each Subject<br></p></center>";
            echo"<p><center>Subject 1* :".$s1."<br></p></center>";
            echo"<p><center>Subject 2* :".$s2."<br></p></center>";
            echo"<p><center>Subject 3* :".$s3."<br></p></center>";
            echo"<p><center>Subject 4* :".$s4."<br></p></center>";
            echo"<p><center>Subject 5* :".$s5."<br></p></center>";
            echo"<p><center>Total Marks Obtained:";
            $sum=$s1+$s2+$s3+$s4+$s5;
            echo $sum."<br></p></center>";
            echo"<p><center>Total Marks : 500 <br></p></center>";
            echo"<p><center>Percentage :";
            echo (($sum/500)*100)."</p></center>";
        }
        else{
            echo"something missing";
        }
        unset($_POST);
    
    ?>
</body>
</html>