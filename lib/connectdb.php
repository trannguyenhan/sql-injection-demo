<?php
function connectdb($database = "inject_demodb")
{
  if ($database == '') {
    $database = NULL;
  }
  
  $host = 'db';
  $username = 'root';
  $password = 'mysql12345';
  $port = 3306;
  
  $db = mysqli_connect($host, $username, $password, $database, $port);
  if (!$db) {
    echo ("Connection failed: " . mysqli_connect_error());
  }
  return $db;
}
