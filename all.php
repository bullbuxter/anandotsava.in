<?php
$conn = mysql_connect('localhost', 'root', '');
if (!$conn)
    die("Could not connect to mysql");
mysql_select_db('httpwwwa_db');
$qShow = "SELECT * FROM `events`"
$q = mysql_query($qShow);
if(!$q)
	echo mysql_error();
else {
  while($row = mysql_fetch_array($q)) { ?>
    <div class="container">
      <?echo "Id: " . $row['evId'] . "<br>";
      echo "Name: " . $row['evName'] . "<br>";
      echo "Intro: " . $row['evIntro'] . "<br>";
      echo "Rules: " . $row['evRules'] . "<br>";
      echo "Category: " . $row['evCat'] . "<br>";?>
    </div>
    <?
  }
}
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="bootstrap.min.css">
    <link rel="stylesheet" href="styles.css">
  </head>
<body>
    <div class="mains container">

    </div>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>
