<?php
require_once("../source/activecalendar.php");
require_once("../source/activecalendarweek.php");
$cal = new activeCalendarWeek(2008,1,1);
$cal->enableWeekNum("Week");
$cal->setFirstWeekDay(1); // '1' -> start on Monday
?> 
<?php print "<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n"; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head><title>Active Calendar Class :: Example</title>
<link rel="stylesheet" type="text/css" href="<?php print @$_GET['css'] ?>" />
</head>
<body>
<center>
<?php print $cal->showWeeksByID(39,8); ?>
<br />
<a href="../examples.php">Back to examples.php</a>
</center>
</body>
</html>