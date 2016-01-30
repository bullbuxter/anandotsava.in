<?php
$conn = mysql_connect('localhost', 'root', '');
if (!$conn)
    die(mysql_error());
mysql_select_db('db_antsava');

$organizers = "CREATE TABLE `organizers`(" .
    "evId INT, " .
    "name VARCHAR(32), " .
    "phone CHAR(10), " .
    "PRIMARY KEY(evId, name), " .
    "FOREIGN KEY(evId) REFERENCES events(evId));";
$participants = "CREATE TABLE `participants`(" .
    "cId INT, " .
    "pid INT PRIMARY KEY AUTO_INCREMENT, " .
    "name VARCHAR(32), " .
    "phone CHAR(10), " .
    "FOREIGN KEY(cId) REFERENCES coll_details(id));";
if(!mysql_query($organizers))
  die(mysql_error());
 ?>
