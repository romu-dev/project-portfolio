<?php

session_start();

$title = strip_tags( $_POST["data-title"]);
$description = strip_tags( $_POST["data-description"]);

require_once("db_connect.php");
$sql = "INSERT INTO tbl_projects (project_title, project_description) VALUES (:project_title, :project_description)";

$query = $db->prepare($sql);
$query->bindValue(':project_title', $title, PDO::PARAM_STR);
$query->bindValue(':project_description', $description, PDO::PARAM_STR);

$query->execute();