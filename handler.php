<?php

session_start();

echo "<h1>".$_POST["data-title"]."</h1>";
echo "<br>";
echo $_POST["data-description"];