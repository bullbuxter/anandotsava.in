<?php
$conn = mysql_connect('localhost', 'root', '');
if (!$conn)
    die("Could not connect to mysql");
echo "Connected to Database<br>";
mysql_select_db('db_antsava');
$qInsert = "INSERT INTO events(evName, evIntro, evRules, evCat) VALUES('Jam', 'asdasd', 'adsasd', 'asdd');";
$q = mysql_query($qInsert);
$qInsert = "INSERT INTO events(evName,evIntro,evRules,evCat) VALUES('" .
	$_POST['evName'] . "','" .
	$_POST['evIntro'] . "','" .
	$_POST['evRules'] . "','" .
	$_POST['evCat'] . "');";
if(!$q)
  die("Could not insert query. Error: " . mysql_error());
  /*$qShow = "SELECT * FROM `events`";
$q = mysql_query($qShow);
while($row = mysql_fetch_array($q)) {
  echo "Id: " . $row['evId'] . "<br>";
  echo "Name: " . $row['evName'] . "<br>";
echo "Intro: " . $row['evIntro'] . "<br>";
echo "Rules: " . $row['evRules'] . "<br>";
echo "Category: " . $row['evCat'] . "<br>";*/
?>
