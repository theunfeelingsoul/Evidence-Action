<?php
class District
{
	
	public $servername = "localhost";
	public $username = "root";
	public $password = "";
	public $dbname = "evidence";

	
	
	function numberOfDistricts($county){


		$details = array();
		try {
		    $conn = new PDO("mysql:host=$this->servername;dbname=$this->dbname", $this->username, $this->password);
		    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		    $stmt = $conn->prepare("SELECT COUNT(*) FROM districts WHERE county='$county'");
		    $stmt->execute();

			$count = $stmt->fetchColumn();
		    return $count;
		}
		catch(PDOException $e) {
		    echo "Error: " . $e->getMessage();
		}
		
	}

	function numberOfDivisions($district_name){


		$details = array();
		try {
		    $conn = new PDO("mysql:host=$this->servername;dbname=$this->dbname", $this->username, $this->password);
		    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		    $stmt = $conn->prepare("SELECT COUNT(*) FROM divisions WHERE county='$district_name'");
		    $stmt->execute();

			$count = $stmt->fetchColumn();
		    return $count;
		}
		catch(PDOException $e) {
		    echo "Error: " . $e->getMessage();
		}
		
	}

	function numberOfSchools($district_name){


		$details = array();
		try {
		    $conn = new PDO("mysql:host=$this->servername;dbname=$this->dbname", $this->username, $this->password);
		    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		    $stmt = $conn->prepare("SELECT COUNT(*) FROM schools WHERE county='$district_name'");
		    $stmt->execute();

			$count = $stmt->fetchColumn();
		    return $count;
		}
		catch(PDOException $e) {
		    echo "Error: " . $e->getMessage();
		}
		
	}



	function delete($id){


		$details = array();
		try {
		    $conn = new PDO("mysql:host=$this->servername;dbname=$this->dbname", $this->username, $this->password);
		    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		    $stmt = $conn->prepare("DELETE FROM users WHERE id='$id'");
		    $stmt->execute();
			
		}
		catch(PDOException $e) {
		    echo "Error: " . $e->getMessage();
		}
		
	}

	function getAll(){


		$details = array();
		try {
		    $conn = new PDO("mysql:host=$this->servername;dbname=$this->dbname", $this->username, $this->password);
		    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		    $stmt = $conn->prepare("SELECT * FROM districts");
		    $stmt->execute();

		    // set the resulting array to associative
		    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
		    
		    return $stmt->fetchAll();
		}
		catch(PDOException $e) {
		    echo "Error: " . $e->getMessage();
		}
		
	}

	function getByCounty($county){


		try {
		    $conn = new PDO("mysql:host=$this->servername;dbname=$this->dbname", $this->username, $this->password);
		    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		    $stmt = $conn->prepare("SELECT * FROM districts WHERE county='$county' ORDER BY district_name ASC");
		    $stmt->execute();

		    // set the resulting array to associative
		    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
		    
		    return $stmt->fetchAll();
		}
		catch(PDOException $e) {
		    echo "Error: " . $e->getMessage();
		}
		
	}









} // end class
?>