
<?php
    require("connect.php");
?>
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
    <form action="q1_visitor_counter.php"  method="post">
    <span>Enter your Name:</span>
        <input type="text" name="name" >
        <br>
        <span>Enter marks in subject 1</span>
        <input type="number" name="s1" >
        <br>
        <span>Enter marks in subject 2</span>
        <input type="number" name="s2" >
        <br>
        <span>Enter marks in subject 3</span>
        <input type="number" name="s3" >
        <br>
        <span>Enter marks in subject 4</span>
        <input type="number" name="s4" >
        <br>
        <span>Enter marks in subject 5</span>
        <input type="number" name="s5" >
        <br>
        <input type="submit" name="data" value="Submit" id="demo">
    </form>
    </div>
    <?php
        $extract=mysqli_query($connect,"SELECT visitor FROM class1 WHERE id=6");
        $row = mysqli_fetch_assoc($extract);
        $count=mysqli_query($connect,"UPDATE class1 set visitor=visitor+1");    
        $sname=$_POST["name"];
        $s1=$_POST["s1"];
        $s2=$_POST["s2"];
        $s3=$_POST["s3"];
        $s4=$_POST["s4"];
        $s5=$_POST["s5"];
        if($sname && $s1 && $s2 && $s3 && $s4 && $s5)
        {
            echo"<p><center>Name of Student ".$sname."<br></p></center>";
            echo"<p><center>Marks in Each Subject<br></p></center>";
            echo"<p><center>Subject 1* :".$s1."<br></p></center>";
            echo"<p><center>Subject 2* :".$s2."<br></p></center>";
            echo"<p><center>Subject 3* :".$s3."<br></p></center>";
            echo"<p><center>Subject 4* :".$s4."<br></p></center>";
            echo"<p><center>Subject 5* :".$s5."<br></p></center>";
            echo"<p><center>Total Marks Obtained:";
            $sum=$s1+$s2+$s3+$s4+$s5;
            $perc=($sum/5);
            echo $sum."<br></p></center>";
            echo"<p><center>Total Marks : 500 <br></p></center>";
            echo"<p><center>Percentage :";
            echo $perc."</p></center>";
            if(isset($_POST["data"])){
                
                $result=mysqli_query($connect,"INSERT INTO class1(name,sub1,sub2,sub3,sub4,sub5,total_obtained,total_marks,percent) VALUES ('$sname',$s1,$s2,$s3,$s4,$s5,$sum,500,$perc);");
                if($result){ 
                    echo"<br><p><center>Marks inserted</p></center>";
                    //$c=$counter+1;
                    echo"<br><p><center>You're the ".($row["visitor"])." visitor.</p></center>";
                }
                else{
                    echo "<br>".mysqli_error($connect);
                    echo"<br><p><center>You're the ".($row["visitor"])." visitor.</p></center>";
                }
            }
        }
        else
        {
            echo"<p><center>Fill all the fields</p></center>";
            echo"<br><p><center>You're the ".($row["visitor"])." visitor.</p></center>";
        }
    ?>
</body>
</html>
