<!DOCTYPE html>
<html lang="en">
<head>
    <title>File upload</title>
</head>
<body>
    <form action="q3_file_upload.php" method="post" enctype="multipart/form-data">
    Select to file to upload: 
    <input type="file" name="upload"><br><br>
    <input type="submit" value="Upload file" name="submit">
    </form>
</body>
</html>
<?php
    $target_dir="File upload/";
    $target_file=$target_dir.basename($_FILES["upload"]["name"]);
    $uploadOK=1;    
    if(file_exists($target_file))
    {
        echo "Sorry, file already exists.<br>";
        $uploadOK=0;
    }
    if($_FILES["upload"]["size"]>500000)
    {
        echo "Sorry, your file is too large.<br>";
        $uploadOK=0;
    }
    if($uploadOK==0)
    {    
        echo "Sorry, your file was not uploaded.<br>";
    }
    else if(move_uploaded_file($_FILES["upload"]["tmp_name"],$target_file))
        {
            echo"The file ".htmlspecialchars(basename($_FILES["upload"]["name"]))." having size ".htmlspecialchars(basename($_FILES["upload"]["size"])/1024)." kb has been uploaded.";
        }
        else
        {
            echo"Sorry there was an error uploading your file.<br>";
        }
?>