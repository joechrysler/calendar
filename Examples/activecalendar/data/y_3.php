<?php
require_once("../source/activecalendar.php");
$myurl=$_SERVER['PHP_SELF']."?css=".@$_GET['css']; // the links url is this page
$cal=new activeCalendar();
$cal->enableDayLinks($myurl); // enables day links
$thisYear=$cal->actyear; // get the current year
$cal->setEvent($thisYear,"1","17","event"); // create a class="event" on the 17th Jan each year
for ($x=10;$x<=20;$x++) $cal->setEvent($thisYear,"3",$x); // create a class="event" from 10th till 20th on March each year
for ($x=5;$x<=12;$x++) $cal->setEvent($thisYear,$x,"24"); // create a class="event" on the 23th from May till December each year
?> 
<?php print "<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n"; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head><title>Active Calendar Class :: Example</title>
<link rel="stylesheet" type="text/css" href="<?php print @$_GET['css'] ?>" />
</head>
<body>
<center>
<?php print $cal->showYear(); ?>
<br />
<a href="../examples.php">Back to examples.php</a>
</center>
</body>
</html>