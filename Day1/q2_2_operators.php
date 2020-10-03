
<html>
<body>
<form action="q2_2_operators.php" method="get">

  ENTER FIRST NUMBER: <input type="INTEGER" name="number1"><br>
  ENTER SECOND NUMBER: <input type="INTEGER" name="number2"><br>
  <input type="SUBMIT" Value="CHECK">
</form>

</body>




</html>
<?php
@$n1=$_GET["number1"];
@$n2=$_GET["number2"];
if($n1!=$n2)
{
  if($n1>$n2)
  {
    echo "$n1 is greater than $n2<br>";
  }
  else {
    echo "$n2 is greater than $n1<br>";

  }
}
else {
  if($n1==$n2&&$n1!=NULL)
  {
    echo "$n1 and $n2 are equal<br>";

  }

}


 ?>
