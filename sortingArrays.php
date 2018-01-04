<?php
  if (isset($_GET['source'])) {
highlight_file($_SERVER['SCRIPT_FILENAME']);
exit;
  }
?>
<html>
  <head>
    <title> Arrays </title>
  </head>
<body>
<?php

//*****************
//creating array
//*****************

$ceu = array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels", "Denmark"=>"Copenhagen", "Finland"=>"Helsinki", "France" => "Paris", "Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana", "Germany" => "Berlin", "Greece" => "Athens", "Ireland"=>"Dublin", "Netherlands"=>"Amsterdam", "Portugal"=>"Lisbon", "Spain"=>"Madrid", "Sweden"=>"Stockholm", "United Kingdom"=>"London", "Cyprus"=>"Nicosia", "Lithuania"=>"Vilnius", "Czech Republic"=>"Prague", "Estonia"=>"Tallin", "Hungary"=>"Budapest", "Latvia"=>"Riga", "Malta"=>"Valetta", "Austria" => "Vienna", "Poland"=>"Warsaw") ;

$capital = "Netherlands";
print "<p>The capital of $capital is $ceu[$capital]</p>";
$capital = "Greece";
print "<p>The capital of $capital is $ceu[$capital]</p>";
$capital = "Germany";
print "<p>The capital of $capital is $ceu[$capital]</p>";

//*************
//sort by key
//*************
echo "<p><b>Sort array by key</b></p>";

ksort($ceu);
print_r($ceu);
echo "<p></p";

//**************
//sort by value
//**************

echo "<p><b>Sort array by value</b></p>";

$temp = $ceu;
asort($temp);
print_r($temp);

//**********************************
// creating multi-dimensional arrays
//**********************************

echo "<p><b>Creating multi-dimensional arrays</b></p>";

$bin = [ 8 => 1000, 9=> 1001, 10 => 1010, 11=> 1011];
print_r($bin);
echo "<p></p>";

$hex= [ 8 => $bin[8], 9=> $bin[9], 'a'=> $bin[10],  'b'=> $bin[11]];
print_r($hex);
echo"<p></p>";

$num = array( array (8,8,1000), array(9,9,1001), array(10, 'a', 1010), array(11,'b',1011));
print_r($num);
echo "<p></p>";

//************************************
// deleting item from array
//************************************

echo"<p> <b>Deleting value 'Lithuania'</b> </p>";

unset($ceu["Lithuania"]);
 
print_r($ceu);

echo "<p><b>Thoughts</b></p>";

$mystring = <<<END
    Creating arrays in php is very straight-forward, it is easy to delete, add,
    and search for keys and values with the build in functions.
    When I deleted the value 'Lithuania', I noticed that the key now holds a
    null value.
END;

print($mystring);

?>
</body>
</html>