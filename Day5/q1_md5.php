<html>
<form action="q1_md5.php" method="POST">
	Username:<input type="text" name="uname"><br>
	Password:<input type="password" name="passw"><br>
	<input type="submit">
</form>
</html>
<?php
require("connect.php");
$name=$_POST['uname'];
$password=$_POST['passw'];
if(isset($_POST['uname'],$_POST['passw'])&&$name&&$password)
{
	$uname=$_POST['uname'];
	$passw=$_POST['passw'];
	$hash=md5($passw);
	if($uname && $passw)
    {
	    $query ="INSERT INTO details (username,pass_word)VALUES('$uname','$hash')";
	    $insert=mysqli_query($connect,$query);
	    if($insert)
	    { 
            echo "<br>You're details were saved successfully";
        }
	    else
	    {
	        echo "<br>Data insertion was unsuccessful:".mysqli_error($connect);
	    } 
    }
}
else
{
	echo "<br>Fill all the fields.";
}
?>