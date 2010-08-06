<?php
require_once("../source/activecalendar.php");
$cal = new activeCalendar("2007","11");
$cal->setEventContent("2007","11","2","Google","http://www.google.com");
$cal->setEventContent("2007","11","12","<img src=\"img/pager.png\" border=\"0\" alt=\"\" /> meeting");
$cal->setEventContent("2007","11","24","<img src=\"img/ok.png\" border=\"0\" alt=\"\" /> birthday");
$multipleLinesEvent=array("Title: News","Time: 16.00","Status: ok"); 
for ($x=6;$x<=10;$x++) $cal->setEventContent("2007","11",$x,$multipleLinesEvent);
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