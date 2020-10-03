<html>

<Title> VOWELS </Title>
<head> WELOCME </head>
<body>

    <form  action="q1_2_vowels.php" method="get">

	    TYPE A character: <input type="text" name="letter"><br><br>
		<input type="submit"><br><br>

	</form>
	<br>
	<?php
  @$letter=$_GET["letter"];

  if($letter=='A'||$letter=='E' ||$letter=='I' ||$letter=='O' ||$letter=='U'||$letter=='a' ||$letter=='e' ||$letter=='i' ||$letter=='o' ||$letter=='u' )
  {
    echo "The character '$letter' is a Vowel. <br>";
  }
  else {
    echo "The character '$letter' is a Consonant.<br>";
  }




	?>



</body>
</html>
