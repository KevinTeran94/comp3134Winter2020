<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$path=basename(isset($_GET['q']) ? $_GET['q'] : '.');
print "<h2>" .$path. "</h2>";
print "<pre>";
if(file_exists($path)){
  print_r(scandir($path));
}else{
        print "<p>files does not exist</p>";
}
print "</pre>";
?>

