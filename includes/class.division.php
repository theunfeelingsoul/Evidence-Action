<?php
class Division
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

	function numberOfSchools($division_name){


		$details = array();
		try {
		    $conn = new PDO("mysql:host=$this->servername;dbname=$this->dbname", $this->username, $this->password);
		    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		    $stmt = $conn->prepare("SELECT COUNT(*) FROM schools WHERE county='$division_name'");
		    $stmt->execute();

			$count = $stmt->fetchColumn();
		    return $count;
		}
		catch(PDOException $e) {
		    echo "Error: " . $e->getMessage();
		}
		
	}

	function oderBy(){


		$details = array();
		try {
		    $conn = new PDO("mysql:host=$this->servername;dbname=$this->dbname", $this->username, $this->password);
		    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		    $stmt = $conn->prepare("SELECT * FROM divisions ORDER BY county,district_name,division_name ASC LIMIT 50");
		    $stmt->execute();

			// set the resulting array to associative
		    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
		    // foreach($stmt->fetchAll() as $k=>$v) {
		    //     $details[] = array(
		    //     					'id' 		=>$v['id'] , 
		    //     					'district_id ' 	=>$v['district_id '] , 
		    //     					'district_name '		=>$v['district_name '] , 
		    //     					'division_id ' 	=>$v['division_id '] , 
		    //     					'division_name ' 	=>$v['division_name '] , 
		    //     					'county ' 	=>$v['county '] , 
		    //     					'wave ' 		=>$v['wave '] , 

		    //     				);
		    // }

		    return $result;
		}
		catch(PDOException $e) {
		    echo "Error: " . $e->getMessage();
		}
		
	}

	function selectDistinct(){


		$details = array();
		try {
		    $conn = new PDO("mysql:host=$this->servername;dbname=$this->dbname", $this->username, $this->password);
		    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		    $stmt = $conn->prepare("SELECT DISTINCT district_name FROM divisions");
		    $stmt->execute();

			// set the resulting array to associative
		    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
		    // foreach($stmt->fetchAll() as $k=>$v) {
		    //     $details[] = array(
		    //     					'id' 		=>$v['id'] , 
		    //     					'district_id ' 	=>$v['district_id '] , 
		    //     					'district_name '		=>$v['district_name '] , 
		    //     					'division_id ' 	=>$v['division_id '] , 
		    //     					'division_name ' 	=>$v['division_name '] , 
		    //     					'county ' 	=>$v['county '] , 
		    //     					'wave ' 		=>$v['wave '] , 

		    //     				);
		    // }

		    return $result;
		}
		catch(PDOException $e) {
		    echo "Error: " . $e->getMessage();
		}
		
	}

	function getNum(){


		$details = array();
		try {
		    $conn = new PDO("mysql:host=$this->servername;dbname=$this->dbname", $this->username, $this->password);
		    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		    $stmt = $conn->prepare("SELECT * FROM divisions");
		    $stmt->execute();

			$count = $stmt->fetchColumn();
		    return $count;
		}
		catch(PDOException $e) {
		    echo "Error: " . $e->getMessage();
		}
		
	}

	function get_team(){


		$details = array();
		try {
		    $conn = new PDO("mysql:host=$this->servername;dbname=$this->dbname", $this->username, $this->password);
		    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		    $stmt = $conn->prepare("SELECT * FROM team");
		    $stmt->execute();

		    // set the resulting array to associative
		    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
		    foreach($stmt->fetchAll() as $k=>$v) {
		        $details[] = array(
		        					'name' 		=>$v['name'] , 
		        					'title' 	=>$v['title'] , 
		        					'desc'		=>$v['desc'] , 
		        					'intro' 	=>$v['intro'] , 
		        					'quote' 	=>$v['quote'] , 
		        					'social' 	=>$v['social'] , 
		        					'img' 		=>$v['img'] , 

		        				);
		    }

		    return $details;
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
		    $stmt = $conn->prepare("SELECT * FROM divisions");
		    $stmt->execute();

		    // set the resulting array to associative
		    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
		    
		    return $stmt->fetchAll();
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








} // end class
?>