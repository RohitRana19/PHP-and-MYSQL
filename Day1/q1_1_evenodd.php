<html>


<body>

    <form  action="q1_1_evenodd.php" method="get">

	    TYPE THE INTEGER: <input type="INTEGER" name="op">
		<input type="submit">

	</form>
	<br>



</body>
</html>
<?php

@$_number=$_GET["op"];
if($_number%2==0)
{
  if($_number!=NULL)
      echo "The number $_number is EVEN";
}
else {
  echo "The number $_number is ODD";
}




?>
