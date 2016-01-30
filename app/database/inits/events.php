<?php
$conn = mysql_connect('localhost', 'root', '');
if (!$conn)
    die("Could not connect to mysql");
$qCreate = "CREATE TABLE events ( " .
           "evId INT PRIMARY KEY AUTO_INCREMENT, " .
           "evName TEXT, " .
           "evIntro TEXT, " .
           "evRules TEXT, " .
           "evCat VARCHAR(16));";
mysql_select_db('db_antsava');
if(!mysql_query($qCreate))
  die("Could not create table events because " . mysql_error());
else {
  echo "Created tabel events";
}
?>
