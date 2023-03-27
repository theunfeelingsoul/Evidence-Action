<?php
class School
{
	
	public $servername = "localhost";
	public $username = "root";
	public $password = "";
	public $dbname = "evidence";

	// public $servername = "localhost";
	// public $username = "enezaafr_vic";
	// public $password = "S-0LsY?W2OcT";
	// public $dbname = "enezaafr_eneza";

	function get_vision(){


		try {
		    $conn = new PDO("mysql:host=$this->servername;dbname=$this->dbname", $this->username, $this->password);
		    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		    $stmt = $conn->prepare("SELECT * FROM vision");
		    $stmt->execute();

		    // set the resulting array to associative
		    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
		    foreach($stmt->fetchAll() as $k=>$v) {
		        $details = array(
		        					'vision_title' 		=>$v['vision_title'] , 
		        					'vision_statement' 	=>$v['vision_statement'] , 
		        					'mission_title'		=>$v['mission_title'] , 
		        					'mission_statement' =>$v['mission_statement'] , 

		        				);
		    }

		    return $details;
		}
		catch(PDOException $e) {
		    echo "Error: " . $e->getMessage();
		}
		
	}

	function getAllAsc(){


		try {
		    $conn = new PDO("mysql:host=$this->servername;dbname=$this->dbname", $this->username, $this->password);
		    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		    $stmt = $conn->prepare("SELECT * FROM counties ORDER BY county ASC");
		    $stmt->execute();

		    // set the resulting array to associative
		    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
		    // foreach($stmt->fetchAll() as $k=>$v) {
		    //     $details = array(
		    //     					'vision_title' 		=>$v['vision_title'] , 
		    //     					'vision_statement' 	=>$v['vision_statement'] , 
		    //     					'mission_title'		=>$v['mission_title'] , 
		    //     					'mission_statement' =>$v['mission_statement'] , 

		    //     				);
		    // }

		    return $stmt->fetchAll();


		}
		catch(PDOException $e) {
		    echo "Error: " . $e->getMessage();
		}
		
	}

	function getAll(){


		try {
		    $conn = new PDO("mysql:host=$this->servername;dbname=$this->dbname", $this->username, $this->password);
		    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		    $stmt = $conn->prepare("SELECT * FROM schools");
		    $stmt->execute();

		    // set the resulting array to associative
		    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
		    // foreach($stmt->fetchAll() as $k=>$v) {
		    //     $details = array(
		    //     					'vision_title' 		=>$v['vision_title'] , 
		    //     					'vision_statement' 	=>$v['vision_statement'] , 
		    //     					'mission_title'		=>$v['mission_title'] , 
		    //     					'mission_statement' =>$v['mission_statement'] , 

		    //     				);
		    // }

		    return $stmt->fetchAll();


		}
		catch(PDOException $e) {
		    echo "Error: " . $e->getMessage();
		}
		
	}

	
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

	function numberOfDivisions($county){


		$details = array();
		try {
		    $conn = new PDO("mysql:host=$this->servername;dbname=$this->dbname", $this->username, $this->password);
		    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		    $stmt = $conn->prepare("SELECT COUNT(*) FROM divisions WHERE county='$county'");
		    $stmt->execute();

			$count = $stmt->fetchColumn();
		    return $count;
		}
		catch(PDOException $e) {
		    echo "Error: " . $e->getMessage();
		}
		
	}

	function numberOfSchools(){


		$details = array();
		try {
		    $conn = new PDO("mysql:host=$this->servername;dbname=$this->dbname", $this->username, $this->password);
		    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		    $stmt = $conn->prepare("SELECT COUNT(*) FROM schools");
		    $stmt->execute();

			$count = $stmt->fetchColumn();
		    return $count;
		}
		catch(PDOException $e) {
		    echo "Error: " . $e->getMessage();
		}
		
	}

	function update($county,$id){


		$details = array();
		try {
		    $conn = new PDO("mysql:host=$this->servername;dbname=$this->dbname", $this->username, $this->password);
		    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		    $stmt = $conn->prepare("SELECT COUNT(*) FROM schools WHERE county='$county'");
		    $stmt = $conn->prepare("UPDATE counties SET county ='$county' WHERE id='$id'");
		    $stmt->execute();


		    return $stmt->rowCount() . " records UPDATED successfully";;
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
		    $stmt = $conn->prepare("DELETE FROM counties WHERE id='$id'");
		    $stmt->execute();
			
		}
		catch(PDOException $e) {
		    echo "Error: " . $e->getMessage();
		}
		
	}

	function add($county){

		$new_county_id = rand(0,100);
		$details = array();
		try {
		    $conn = new PDO("mysql:host=$this->servername;dbname=$this->dbname", $this->username, $this->password);
		    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		    $stmt = $conn->prepare("INSERT INTO counties (county, county_id) VALUES ('$county','$new_county_id')");
		    $stmt->execute();
			
		}
		catch(PDOException $e) {
		    echo "Error: " . $e->getMessage();
		}
		
	}





} // end class
?>