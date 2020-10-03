<<?php

require 'connect.php';
if(isset($_POST['submit']))
{
  @$fristname=$_POST['fname'];
  @$lastname=$_POST['lname'];
  @$s1=$_POST['s1'];
  @$s2=$_POST['s2'];
  @$s3=$_POST['s3'];
  @$s4=$_POST['s4'];
  @$s5=$_POST['s5'];


  @$t=$s1+$s2+$s3+$s4+$s5;
  $p=$t/500*100;

  $result=mysqli_query($connect,"INSERT INTO class1(`First_Name`, `Last_Name`, `Subject 1`,`Subject 2`,`Subject 3`, `Subject 4`,`Subject 5`,`Total Marks Obtained`, `Percentage`) VALUES ('$fristname', '$lastname',$s1,$s2,$s3,$s4,$s5,$t,$p);");


  if($result)
  {
    echo "INSERTED SUCCESSFULLY!!";
  }
  else {
    echo "NOT INSERTED";
  }


}

$sql="SELECT * FROM class1";
$result=mysqli_query($connect,$sql);

echo "<table border=1>
      <tr>
        <th> ID</th>
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
    echo "<td>" . $row["Id"] . "</td>";
    echo "<td>" . $row["First_Name"] . "</td>";
    echo "<td>" . $row["Last_Name"] . "</td>";
    echo "<td>" . $row["Subject 1"] . "</td>";
    echo "<td>" . $row["Subject 2"] . "</td>";
    echo "<td>" . $row["Subject 3"] . "</td>";
    echo "<td>" . $row["Subject 4"] . "</td>";
    echo "<td>" . $row["Subject 5"] . "</td>";
    echo "<td>" . $row["Total Marks Obtained"] . "</td>";
    echo "<td>" . $row["Total Marks"] . "</td>";
    echo "<td>" . $row["Percentage"] . "</td>";
    echo "</tr>";
  }
}
else {
  echo "NO RESULTS";
}
echo"</table>";



 ?>

 <html>
  <body>
    <form action="q1.php" method="post">
      FRIST NAME : <input type="text" name="fname"><br><br>
      LAST NAME : <input type="text" name="lname"><br><br>
      SUBJECT 1 : <input type="INTEGER" name="s1"><br><br>
      SUBJECT 2 : <input type="INTEGER" name="s2"><br><br>
      SUBJECT 3 : <input type="INTEGER" name="s3"><br><br>
      SUBJECT 4 : <input type="INTEGER" name="s4"><br><br>
      SUBJECT 5 : <input type="INTEGER" name="s5"><br><br>
      <input type="Submit" value="Submit" name="submit">
    </form>
  </body>
  </html>
