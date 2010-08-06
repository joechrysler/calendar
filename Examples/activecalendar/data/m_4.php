<?php
require_once("../source/activecalendar.php");
$myurl=$_SERVER['PHP_SELF']."?css=".@$_GET['css']; // the links url is this page
$cal = new activeCalendar("2007","11");
$cal->setEvent("2007","11","17","event"); // create a class="event"
$cal->setEvent("2007","11","7"); // create a class="event" (defaul)
$cal->setEvent("2007","11","20","event",$myurl); // create a class="event" and an <a href="this_page.php">
for ($x=27;$x<=30;$x++) $cal->setEvent("2007","11",$x); // create a class="event" from 27th till 30th
?> 
<?php print "<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n"; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head><title>Active Calendar Class :: Example</title>
<link rel="stylesheet" type="text/css" href="<?php print @$_GET['css'] ?>" />
</head>
<body>
<center>
<?php print $cal->showMonth(); ?>
<br />
<a href="../examples.php">Back to examples.php</a>
</center>
</body>
</html>