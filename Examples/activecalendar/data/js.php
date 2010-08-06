<?php
require_once("../source/activecalendar.php");
$myurl=$_SERVER['PHP_SELF']."?css=".@$_GET['css']."&amp;calmode=".@$_GET['calmode']; // the links url is this page
$yearID=false; // init false to display current year
$monthID=false; // init false to display current month
$dayID=false; // init false to display current day
extract($_GET); // get the new values (if any) of $yearID,$monthID,$dayID
$arrowBack="<img src=\"img/back.png\" border=\"0\" alt=\"&lt;&lt;\" />"; // use png arrow back
$arrowForw="<img src=\"img/forward.png\" border=\"0\" alt=\"&gt;&gt;\" />"; // use png arrow forward
$cal = new activeCalendar($yearID,$monthID,$dayID);
	if (@$_GET['calmode']=="start") $cal->enableDayLinks(false,"getStartDate"); // enables day links with javascript function getStartDate
	elseif (@$_GET['calmode']=="end") $cal->enableDayLinks(false,"getEndDate"); // enables day links with javascript function getEndDate
	elseif (@$_GET['calmode']=="eu") $cal->enableDayLinks(false,"getEUDate"); // enables day links with javascript function getEUDate
	elseif (@$_GET['calmode']=="us") $cal->enableDayLinks(false,"getUSDate"); // enables day links with javascript function getUSDate
$cal->enableMonthNav($myurl,$arrowBack,$arrowForw); // enables navigation controls
$cal->setFirstWeekDay(1);; // '0' -> Sunday , '1' -> Monday
?> 
<?php print "<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n"; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head><title>Active Calendar Class :: Example</title>
<link rel="stylesheet" type="text/css" href="<?php print @$_GET['css'] ?>" />
<script src="functions.js" type="text/javascript" language="javascript"></script>
</head>
<body>
<center>
<?php print $cal->showMonth(); ?>
<br />
<a href="javascript:self.close();">Close Calendar</a>
</center>
</body>
</html>