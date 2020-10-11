<html>
<Title> UPLOAD FILE </Title>
<body>
	<h3>SELECT A FILE TO UPLOAD</h3>

	 CHOOSE A FILE :<form action='q3_file_upload.php' method='POST' enctype='multipart/form-data'>
	                <input type='file' name='myfile'><p>
	                <input type='submit' name='submit' value='UPLOAD'>
	</form>
</body>
</html>
<?php
        @$name = $_FILES["myfile"]["name"];
        @$type = $_FILES["myfile"]["type"];
        @$size = $_FILES["myfile"]["size"];
        @$temp = $FILES["myfile"]["tmp_name"];
        @$error = $FILES["myfile"]["error"];
        if(isset($_POST["submit"]))
        {
	    echo "<br>Name of the file : ".$name;
	    echo "<br>Type of the file : ".$type;
	    echo "<br>Size of the file : ".$size;
            if($error > 0)
                die("Error uploading file! Code $error.");
            else{
                move_uploaded_file($temp,"Uploaded_Files/".$name); //Uploaded_Files is the folder where file is uploaded
                echo "<br>UPLOADED SUCCESSFULLY !";
            }
        }
?>  