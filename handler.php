<?php

session_start();

$title = strip_tags( $_POST["data-title"]);
$description = strip_tags( $_POST["data-description"]);

echo $title;
echo $description;
