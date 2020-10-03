<html>
<body>
<form action="q5_2_functions.php" method="get">
 ENTER THE NAME WITH RELATION: <input type="text" name="name">
 <input type="submit" value="ENETR">
</form>




</body>



</html>




<?php
function writeName2($firstname)
{
  if($firstname!=NULL)
      echo $firstname . " Sharma. ";
}
@$name=$_GET['name'];
writeName2($name);
 ?>
