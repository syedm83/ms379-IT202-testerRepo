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
<form name="games" action="Unit04Exercise_action_ms379.php" method="get">
   <label>Bowler ID:</label>
   <input type="text" name="bowlerid">
   <br>
   <br>
   <label>Score:</label>
   <input type="text" name="score">
   <br>
   <br>
   <input type="submit">
</form>
<br>
<?php
date_default_timezone_set("America/New_York");
echo "The date and time is " . date("D M j h:i:sa T Y");
?>
</body>
</html>