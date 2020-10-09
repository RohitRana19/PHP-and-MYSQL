<html>
<Title> STRING FUNCTIONS</Title>
<body>
<form action='q2_string_functions.php' method='POST'>
Enter a string : <input type='text' name='txt'>
                 <input type='submit' value='Submit'>
</form>
</body>
</html>
<?php
@$string = $_POST['txt'];
if($string){
echo "<br>Entered string : ".$string;
echo "<br>Number of characters in the string : ".strlen($string)."<br>";
echo "Breaking string into an array : ";
print_r(explode(" ",$string));
echo "<br>The reversed string : ".strrev($string);
echo "<br>Converting string to lowercase : ".strtolower($string);
echo "<br>Converting string to uppercase : ".strtoupper($string);

echo "<br>Replacing the entered string by : ".substr_replace($string,"String replacement!",0,strlen($string));

}
?>
