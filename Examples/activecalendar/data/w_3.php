<?php
require_once("../source/activecalendar.php");
require_once("../source/activecalendarweek.php");
$cal = new activeCalendarWeek("2010","2","1");
$cal->enableWeekNum("Week");
$cal->setEventContent("2010","2","2","Google","http://www.google.com");
$cal->setEventContent("2010","2","11","<img src=\"img/pager.png\" border=\"0\" alt=\"\" /> meeting");
$cal->setEventContent("2010","2","23","<img src=\"img/ok.png\" border=\"0\" alt=\"\" /> birthday");
$multipleLinesEvent=array("Title: News","Time: 16.00","Status: ok"); 
for ($x=1;$x<=5;$x++) $cal->setEventContent("2010","3",$x,$multipleLinesEvent);
?> 
<?php print "<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n"; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head><title>Active Calendar Class :: Example</title>
<link rel="stylesheet" type="text/css" href="<?php print @$_GET['css'] ?>" />
</head>
<body>
<center>
<?php print $cal->showWeeks(6); ?>
<br />
<a href="../examples.php">Back to examples.php</a>
</center>
</body>
</html>