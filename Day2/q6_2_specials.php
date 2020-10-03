<html>
<body>
<form action="q6_2_specials.php" method= "post">
  Name of Student*: <input type="text" name="n"><br>
  Marks in each Subject:<br>
  Subject 1*: <input type="INTEGER" name="s1"><br><br>
  Subject 2*: <input type="INTEGER" name="s2"><br><br>
  Subject 3*: <input type="INTEGER" name="s3"><br><br>
  Subject 4*: <input type="INTEGER" name="s4"><br><br>
  Subject 5*: <input type="INTEGER" name="s5"><br><br>
  <input type="submit"><br><br>
  <br><br>
  (*)Compulorsary fields.
</form>
<br><br>


</body>


</html>

<?php
@$n=$_POST['n'];
@$a=$_POST['s1'];
@$b=$_POST['s2'];
@$c=$_POST['s3'];
@$d=$_POST['s4'];
@$e=$_POST['s5'];

$total=$a+$b+$c+$d+$e;
$p=$total/500*100;
echo "Student Name: " . $n . "<br>Total Marks : 500<br>

Total Marks Obtained: " . $total . "<br>
Percentage : " . $p . "<br>";





 ?>
