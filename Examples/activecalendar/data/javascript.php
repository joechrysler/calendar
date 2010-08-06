<?php
require_once("../source/activecalendar.php");
$cal=new activeCalendar();
$layout=@$_GET['css'];
function makeSelectDays($cal){
$out="";
	for ($x=1;$x<=31;$x++){
		if ($x==$cal->actday) $out.="<option value=".$x." selected=\"selected\">".$x."</option>\n";
		else $out.="<option value=".$x.">".$x."</option>\n";
	}
return $out;
}
function makeSelectMonths($cal){
$out="";
	for ($x=1;$x<=12;$x++){
		if ($x==$cal->actmonth) print "<option value=".$x." selected=\"selected\">".$cal->getMonthName($x)."</option>\n";
		print "<option value=".$x.">".$cal->getMonthName($x)."</option>\n";
	}
return $out;
}
function makeSelectYears($cal,$startYear,$endYear){
$out="";
	for ($x=$startYear;$x<=$endYear;$x++){
		if ($x==$cal->actyear) print "<option value=".$x." selected=\"selected\">".$x."</option>\n";
		else print "<option value=".$x.">".$x."</option>\n";
	}
return $out;
}
?> 
<?php print "<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n"; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head><title>Active Calendar Class :: Example</title>
<link rel="stylesheet" type="text/css" href="css/main.css" />
<script src="functions.js" type="text/javascript" language="javascript"></script>
</head>
<body>
<center>
<table align="center" class="exampletbl">
<form name="calform">
<tr><th colspan="3">Click on each calendar icon to load an Active Calendar popup<br /><span class="small">Note: Javascript must be enabled in your browser</span></th></tr>
<tr>
<td rowspan="2">Date Selection<br />using select tags</td><td>Start Date</td>
<td>
<select name="StartDay">
<?php print makeSelectDays($cal); ?>
</select> 
<select name="StartMonth">
<?php print makeSelectMonths($cal); ?>
</select> 
<select name="StartYear">
<?php print makeSelectYears($cal,2000,2016); ?>
</select>
&nbsp;&nbsp;&nbsp;<a href="javascript:showcalendar('js.php?css=<?php print $layout; ?>&amp;calmode=start',220,225)" title="Calendar Start Date"><img src="img/calendar.gif" border="0" alt="calendar1" /></a>
</td>
</tr>
<tr>
<td>End Date</td>
<td>
<select name="EndDay">
<?php print makeSelectDays($cal); ?>
</select> 
<select name="EndMonth">
<?php print makeSelectMonths($cal); ?>
</select> 
<select name="EndYear">
<?php print makeSelectYears($cal,2000,2016); ?>
</select>
&nbsp;&nbsp;&nbsp;<a href="javascript:showcalendar('js.php?css=<?php print $layout; ?>&amp;calmode=end',220,225)" title="Calendar End Date"><img src="img/calendar.gif" border="0" alt="calendar2" /></a>
</td>
</tr>
<tr>
<td rowspan="2">Date Selection<br />using text fields</td><td>European Date Format<br />(d-m-yyyy)</td>
<td><input type="text" name="eu" />&nbsp;&nbsp;&nbsp;<a href="javascript:showcalendar('js.php?css=<?php print $layout; ?>&amp;calmode=eu',220,225)" title="Calendar European Date Format"><img src="img/calendar.gif" border="0" alt="calendar3" /></a></td>
</tr>
<tr>
<td>American Date Format<br />(m/d/yyyy)</td>
<td><input type="text" name="us" />&nbsp;&nbsp;&nbsp;<a href="javascript:showcalendar('js.php?css=<?php print $layout; ?>&amp;calmode=us',220,225)" title="Calendar American Date Format"><img src="img/calendar.gif" border="0" alt="calendar4" /></a></td>
</tr>
<tr><td colspan="3"><input type="reset" value="reset" /></td></tr>
</form>
</table>
<br />
<a href="../examples.php">Back to examples.php</a>
</center>
</body>
</html>