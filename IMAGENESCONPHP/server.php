<?php

echo "<pre>";
var_dump($_FILES);
echo "</pre>";

$basename = basename($_FILES["image"]["name"]);
$image = $_FILES["image"]["tmp_name"];
$target_file = "uploads/" . $basename;


?>
