<?php
$conn = mysql_connect('localhost', 'root', '');
if (!$conn)
    die("Could not connect to mysql");
echo "Connected to Database<br>";
mysql_select_db('db_antsava');
$qCreate = "CREATE TABLE organizers (" .
  "evId INT, " .
  "name VARCHAR(32), " .
  "phone CHAR(10), " .
  "PRIMARY KEY(evId, phone));";
if(!mysql_query($qCreate))
  echo "Could not because " . mysql_error();
else {
  echo "Success";
}
?>
