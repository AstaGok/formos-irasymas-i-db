<?php
echo "<pre>";
print_r($_POST);
echo "</pre>";

$link=mysqli_connect("localhost","root","","nauja_duom");
$sql="INSERT INTO lentele VALUES('".$_POST["vardas"]."','".$_POST["pavarde"]."',"
        . "'".$_POST["password"]."','".$_POST["adresas"]."','".$_POST["phone"]."',"
        . "'".$_POST["email"]."','".$_POST["padetis"]."')";
mysqli_query($link, $sql);