<?php
require_once 'XtacData.class.php';

class DataBase extends XtacData {

	// ## Class-variables ##############################################
	protected $host;
	protected $database;
	protected $hasConnection;
	protected $connection;
	protected $arrData = Array();
	protected $arrFieldname = Array();


	//## Connection Management #################################
	public function connect($inUsername, $inPassword) {
		$mysqlHandler = new mysqli($this->host, $inUsername, $inPassword, $this->database);

		$this->hasConnection = true;
		$this->connection = $mysqlHandler;

		return $this;
	}
	public function disconnect() {
		$this->connection->close();

		return $this;
	}


	//## Parent Methods ########################################
	public function getUser($inID, $inCol, &$outUser){
		$tempArray = array();

		$tempArray = $this->query('xtac', "PersonID like '%$inID'", '', $inCol);

		foreach ($tempArray[0] as $key => $value)
			$outUser[$key] = parent::translateValue($value);

		return $this;
	}


	//## Distinct methods ######################################
	public function getDay($inDay, &$oTheDaysEvents) {
		$oTheDaysEvents = $this->query('events', "date = $inDay", 'start,title');

		return $this;
	}

	public function setDay($data) {
		$this->insert('events', $data);

		return $this;
	}


	//## Generic Query ###################################################
	private function query($inTable, $inFilter = '', $inOrder = '', $inCol = '*'){

		$queryString = '';         // Abfragestring, der an die Datenbank gesendet wird
		$mysqlQuery = false;       // Das Ergebnis der Abfrage
		$mysqlHandler = false;     // Verbindungs-Handler
		$result = Array();         // Rueckgabe


		// Verbindung mit der Datenbank aufbauen
		if($this->hasConnection){
			// Abfrage starten
			$queryString = 'select ' . $inCol
				. ' from ' . $inTable;
			if($inFilter != '')
				$queryString .= ' where ' . $inFilter;
			if($inOrder != '')
				$queryString .= ' order by ' . $inOrder;
			$queryString .= ';';

			if (!$mysqlQuery = $this->connection->query($queryString))
				trigger_error("Query: " . $queryString . "\n", E_USER_NOTICE);

			$result = Array();
			while($mysqlResult = $mysqlQuery->fetch_assoc())
				array_push(&$result, $mysqlResult);
		}
		else {
			trigger_error('Not connected to database', E_USER_ERROR);
			$result = false;
		}

		return $result;
	}

	private function insert($inTable, $inData){
		$queryString = '';
		$firstItem = true;

		if($this->hasConnection){
			$queryString = 'insert into ' . $inTable . ' values(';
					foreach ($inData as $value) {
					if ($firstItem === false)
					$queryString .= ', ';
					else 
					$firstItem = false;

					$queryString .= (substr($value, -2) === '()')?
					$value:
					"'$value'";
					}

					$queryString .= ');';

			return $this->connection->query($queryString);
		}
	}
}
?>
