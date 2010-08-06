<?php
require_once 'DataBase.class.php';

$MySQL = new DataBase($db_host, $db_name);
$selectedDate = trim($_GET['date']);
$TheDaysEvents = array();

//
// MySQL date format is an 8 digit integer YYYYMMDD
//
$MySQL
	->connect($db_user, $db_pass)
	->getDay($selectedDate, $TheDaysEvents)
	->disconnect();

echo json_encode($TheDaysEvents);
?>
