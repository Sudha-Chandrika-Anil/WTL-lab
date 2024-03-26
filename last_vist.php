<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Document</title>
</head>

<body>
<?php
date_default_timezone_set('Asia/Kolkata'); //Calculate 60 days in the future
//seconds * minutes * hours * days + current time
$inTwoMonths = 60 * 60 * 24 * 60 + time(); 
setcookie('lastVisit', date("G:i - m/d/y"),$inTwoMonths);
if (isset($_COOKIE['lastVisit'])) {
$visit = $_COOKIE['lastVisit']; echo "Your last visit was - " . $visit;
} else
echo "You've got some stale cookies!";
?>
</body>

</html>
