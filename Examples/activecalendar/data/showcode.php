<?php echo "<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n"; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head><title>Active Calendar Class :: Example Code</title>
<link rel="stylesheet" type="text/css" href="css/main.css" />
</head>
<body>
<?php
function getContent($file){
$fp=@fopen($file,'r');
	if ($fp){
		$filecont="";
		while (!feof($fp)) $filecont.= fread($fp, 1024);
		return $filecont;
	}
}
if (!isset($_GET['page'])) die("The structure of Active Calendar Class package has been modified. Unable to procced...\n</body>\n</html>");
?>
<div class="code"><?php print nl2br(htmlspecialchars(getContent($_GET['page']))); ?></div>
<br />
<center><a href="../examples.php">Back to examples.php</a></center>
</body>
</html>
