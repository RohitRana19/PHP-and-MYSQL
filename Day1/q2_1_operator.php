<html>
<body>
<form action="q2_1_operator.php" method="get">
  ENTER A VALUE: <input type="INTEGER" name="number">
  <br>
  ENTER A VALUE: <input type="INTEGER" name="number1"><br>

                  <input type="submit" value="calculate"><br>
</form>




</body>



</html>
<?php
$number1=NULL;
$number2=NULL;
@$number1=$_GET["number"];
@$number2=$_GET["number1"];
if($number1!=NULL&&$number2!=NULL){


  echo "SUM OF $number1 and $number2 is: ". ($number1 + $number2) . "</br>" ;
  echo "SUBTRACTION OF $number1 and $number2 is: ". ($number1 - $number2) . "</br>";

  if($number2!=NULL||$number2!=0){
    echo "DIVISION OF $number1 and $number2 is: ". ($number1 / $number2) . "</br>";
  }
  else {
    echo "DIVISION OF $number1 and $number2 is: NOT DEFINED </br>";
  }
  
  echo "MULTIPLICA OF $number1 and $number2 is: ". ($number1 * $number2)."</br>";


}
 ?>
