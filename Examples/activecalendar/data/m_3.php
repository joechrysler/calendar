<?php
require_once("../source/activecalendar.php");
$myurl=$_SERVER['PHP_SELF']."?css=".@$_GET['css']; // the links url is this page
$cal = new activeCalendar("2007","11");
$cal->enableDayLinks($myurl); // enables day links
$cal->enableWeekNum("Week",$myurl); // enables week number column with linkable week numbers
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