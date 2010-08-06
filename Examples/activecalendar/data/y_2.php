<?php
require_once("../source/activecalendar.php");
$myurl=$_SERVER['PHP_SELF']."?css=".@$_GET['css']; // the links url is this page
$yearID=false; // init false to display current year
$monthID=false; // init false to display current month
$dayID=false; // init false to display current day
extract($_GET); // get the new values (if any) of $yearID,$monthID,$dayID
$arrowBack="<img src=\"img/back.png\" border=\"0\" alt=\"&lt;&lt;\" />"; // use png arrow back
$arrowForw="<img src=\"img/forward.png\" border=\"0\" alt=\"&gt;&gt;\" />"; // use png arrow forward
$cal = new activeCalendar($yearID,$monthID,$dayID);
$cal->enableYearNav($myurl,$arrowBack,$arrowForw); // enables navigation controls
$cal->enableDatePicker(2000,2010,$myurl); // enables date picker (year range 2000-2010)
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