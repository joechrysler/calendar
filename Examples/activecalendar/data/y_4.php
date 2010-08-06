<?php
require_once("../source/activecalendar.php");
$cal=new activeCalendar();
?> 
<?php print "<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n"; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head><title>Active Calendar Class :: Example</title>
<link rel="stylesheet" type="text/css" href="<?php print @$_GET['css'] ?>" />
</head>
<body>
<center>
<?php print $cal->showYear(12,5); // '12' sets 3 months in each row, '5' sets the starting month (May) ?>
<br />
<a href="../examples.php">Back to examples.php</a>
</center>
</body>
</html>