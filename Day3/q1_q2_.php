<?php
require 'connect1.php';
if(isset($_POST['submit']))
{
  @$id=$_POST['id'];
  @$fname=$_POST['fname'];
  @$lname=$_POST['lname'];
  @$a=$_POST['s1'];
  @$b=$_POST['s2'];
  @$c=$_POST['s3'];
  @$d=$_POST['s4'];
  @$e=$_POST['s5'];
  $t=$a+$b+$c+$d+$e;
  $tmrp=$t/500*100;
  $to=500;
  $sql = "INSERT INTO CLASS1(f_n,l_n,S1,S2,S3,S4,S5,T_O,T_M,percentage) VALUES ('$fname','$lname',$a,$b,$c,$d,$e,$t,$to,$tmrp)";
  $myresult = mysqli_query($con,$sql);
  if($myresult)
  {
    echo "INSERTED SUCCESSFULLY!!<br>";
  }
  else if(!mysqli_query($con,$sql))
  {
    echo "Error: " . mysqli_error($con);

  }
  else {
    echo "NOT INSERTED ERROR!!<br>";
  }
}
$sql1="SELECT * FROM class1";
$result=mysqli_query($con,$sql1);

echo "<table border=1>
      <tr>
        <th> ID </th>
        <th> FRIST NAME</th>
        <th> LAST NAME</th>
        <th> Subject 1</th>
        <th> Subject 2</th>
        <th> Subject 3</th>
        <th> Subject 4</th>
        <th> Subject 5</th>
        <th> Total Marks Obtained</th>
        <th> Total Marks</th>
        <th> Percenatge (%)</th>
      </tr>
";
if(mysqli_num_rows($result)>0)
{
  while($row=mysqli_fetch_array($result))
  {
    echo "<tr>";
    echo "<th>" . $row["ID"] . "</th>";
    echo "<td>" . $row["f_n"] . "</td>";
    echo "<td>" . $row["l_n"] . "</td>";
    echo "<td>" . $row["S1"] . "</td>";
    echo "<td>" . $row["S2"] . "</td>";
    echo "<td>" . $row["S3"] . "</td>";
    echo "<td>" . $row["S4"] . "</td>";
    echo "<td>" . $row["S5"] . "</td>";
    echo "<td>" . $row["T_O"] . "</td>";
    echo "<td>" . $row["T_M"] . "</td>";
    echo "<td>" . $row["percentage"] . "</td>";
    echo "</tr>";
  }
}
else {
  echo "NO RESULTS";
}
echo"</table>";
if(isset($_POST['update']))
{
  ?>
          <html>
          <body>
            <form action="q1_q2_.php" method="get">
            ENTER THE ID OF THE STUDENT: <input type="INTEGER" name="id"><br>
            <input type="submit" name="submit"><br>
          </form>
        </body>
        <html>
    <?php
    @$id=$_GET['id'];
    $sql2 = "UPDATE CLASS1 SET S5='99' WHERE id=4";

  $ex=mysqli_query($con,"SELECT * FROM CLASS1 WHERE id =4 ORDER BY id ASC");

    while($row=mysqli_fetch_assoc($ex))
    {
      @$a=$row['S1'];
      @$b=$row['S2'];
      @$c=$row['S3'];
      @$d=$row['S4'];
      @$e=$row['S5'];
      @$t=$row['T_O'];
      @$trmp=$row['T_M'];

    }
    $t=$a+$b+$c+$d+$e;
    $trmp=$t/500*100;
    $sql3="UPDATE CLASS1 SET T_O='$t' where id=4";
    $sql4="UPDATE CLASS1 SET percentage='$trmp' where id=4";


    if (mysqli_query($con, $sql2)) {
    echo "Record updated successfully";
    if (mysqli_query($con, $sql3)) {
     echo "Record updated successfully";
     if (mysqli_query($con, $sql4)) {
      echo "Record updated successfully";
      }
     }
    }

     else {
    echo "Error updating record: " . mysqli_error($con);
  }

}


?>
<html>
<body>
  <form action="q1_q2_.php" method="post">
    FRIST NAME : <input type="text" name="fname"><br><br>
    LAST NAME : <input type="text" name="lname"><br><br>
    SUBJECT 1 : <input type="INTEGER" name="s1"><br><br>
    SUBJECT 2 : <input type="INTEGER" name="s2"><br><br>
    SUBJECT 3 : <input type="INTEGER" name="s3"><br><br>
    SUBJECT 4 : <input type="INTEGER" name="s4"><br><br>
    SUBJECT 5 : <input type="INTEGER" name="s5"><br><br>
    <input type="Submit" value="Submit" name="submit"><br><br>
    <input type="Submit" value="UPDATE" name="update"><br><br>
  </form>
</body>
</html>
