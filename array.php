<!-- <?php

//$family = array ("Father","Mother ","Brother");
$family = ["Father","Mother ","Brother"];

$family[1]="love ";
$family[3]="sister ";

echo $family[1];
echo $family[3];

echo count($family);






?> -->
<form action="array.php" method = "GET">
<input type="text" name= "xname">
<input type="submit">
</form>
<?php






$xname = $_GET["xname"];
echo $xname;


$family = [
 "Designer" => "yousef",
 "programer" => "majerd",
 "Gamer" => "Anas"
];

echo $family["Gamer"];

?>