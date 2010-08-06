<?php
abstract class XtacData {
	//## Variables ############################
	protected $host;
	protected $database;
	protected $hasConnection;
	protected $connection;


	//## Constructor ###########################################
	public function __construct($inHost, $inDatabase=null) {
		$this->host = $inHost;

		if ($inDatabase !== null)
			$this->database = $inDatabase;

		$hasConnection = false;
	}


	//## Connection Management #################################
	abstract public function connect($inUsername, $inPassword);
	abstract public function disconnect();
	public function hasConnection(){
		return $this->hasConnection;
	}


}
?>
