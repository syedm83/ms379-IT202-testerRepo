<!DOCTYPE html>
<html>
<head>
<title>Unit 4 Exercise ms379</title>
</head>
<body>
<h1>My Bowling Team</h1>
<h4>Name: Manahil Syed</h4>
<h4>UCID: ms379</h4>
<h4>Course and Section: IT-202-005 Internet Applications</h4>
<?php
error_log("\$_GET " . print_r($_GET, true));
$db = new mysqli("sql1.njit.edu", 'ms379', 'forSQLmypassword!1', 'ms379', 3306);
$bowlerid = $_GET['bowlerid'];
$score = $_GET['score'];
$query = "INSERT INTO games (bowlerid, score) VALUES (?, ?)";
$stmt = $db->prepare($query);
$stmt->bind_param(
   "ii",
   $bowlerid,
   $score
);
$result = $stmt->execute();
$db->close();
if ($result) {
   echo "<h2>New game's score successfully added</h2>\n";
} else {
   echo "<h2>Sorry, there was a problem adding that game's score</h2>\n";
}
date_default_timezone_set("America/New_York");
echo "The date and time is " . date("D M j h:i:sa T Y");
?>
</body>
</html>