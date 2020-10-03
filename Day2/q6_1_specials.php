<html>
<body>
  <form action="q6_1_specials.php" method="get">
  ENTER SIDE:  <input type="INTEGER" name="number1"><br>
  ENTER SIDE:  <input type="INTEGER" name="number2"><br>
  ENTER SIDE:  <input type="INTEGER" name="number3"><br>
  <input type="Submit" >
</form>


</body>
</html>


<?php
@$a=$_GET['number1'];
@$b=$_GET['number2'];
@$c=$_GET['number3'];

if($a==$b&&$b==$c&&$a==$c)
  echo "The triangle is an Equilateral Triangle.<br>";
else if($a*$a+$b*$b==$c*$c||$b*$b+$c*$c==$a*$a||$a*$a+$c*$c==$b*$b)
  echo "The triangle is an Right Angled Triangle.<br>";
else if($a!=$b&&$b!=$c&&$a!=$c)
  echo "The Triangle is an Scalene Triangle.<br>";

else
  echo "The triangle is an Isosceles Triangle. <br>";






 ?>
