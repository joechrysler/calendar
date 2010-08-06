<?php
require_once("../source/activecalendar.php");
$cal=new activeCalendar();
$cal->enableWeekNum("Week"); // enables week number column
?> 
<?php print "<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n"; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head><title>Active Calendar Class :: Example</title>
<link rel="stylesheet" type="text/css" href="<?php print @$_GET['css'] ?>" />
</head>
<body>
<center>
<?php print $cal->showYear(3); // '3' sets 3 months in each row ?>
<br />
<a href="../examples.php">Back to examples.php</a>
</center>
</body>
</html>