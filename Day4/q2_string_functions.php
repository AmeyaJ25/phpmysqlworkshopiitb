<html>
<form action="q2_string_functions.php" method="GET">
<h2>Enter a sentence:</h2><br/>
<input type="text" name="strfun"><br>
<input type="submit" value="SUBMIT">
</form>
</html>

<?php
$words = $_GET['strfun'];

$length=strlen($words);
$reverse=strrev($words);
$lower=strtolower($words);
$upper=strtoupper($words);
$newords= "What";
$updated = substr_replace($words, $newords,3,7);

echo "<br>Original String = ".$words;
echo "<br>Number of Characters = ".$length;
echo "<br>Reversed string = ".$reverse;
echo "<br>Convert into lower case form = ".$lower;
echo "<br>Convert into upper case form = ".$upper;
echo "<br>Replace the content of substring into original string = ".$updated;
?>