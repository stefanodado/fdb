<?php
/*
Version 1.8 | 2016-09-01
*/

class fdb {
  
  	public $id ="";
  	public $V01 ="";
	public $V02 ="";
	public $V03 ="";
	public $V04 ="";
	public $V05 ="";
	public $T06 ="";
	public $T07 ="";
	public $T08 ="";
	public $I09 ="";
	public $I10 ="";
	public $I11 ="";
	public $I12 ="";
	public $I13 ="";
	public $D14 ="";
	public $D15 ="";
	public $F16 ="";
	public $F17 ="";
	public $C18 ="";
	public $S19 ="";
	private $table="";
	private $debugsql="";
	private $host="";
	private $nomehost = "";//HOSTNAME     
	private $nomeuser = "";//USERNAME          
	private $password = "";//PASSWORD 
	private $nomedb = "";//DBNAME

	function __construct($table) {
       $this->table="fdb_".$table;
       $conn = new PDO("mysql:host=".$this->nomehost.";dbname=".$this->nomedb.";charset=utf8", $this->nomeuser, $this->password);
       $sql  = "CREATE TABLE IF NOT EXISTS ".$this->table." (
  				id int(11) NOT NULL AUTO_INCREMENT,
  				V01 varchar(255) DEFAULT NULL,
				V02 varchar(255) DEFAULT NULL,
				V03 varchar(255) DEFAULT NULL,
				V04 varchar(255) DEFAULT NULL,
				V05 varchar(255) DEFAULT NULL,
				T06 text,
				T07 text,
				T08 text,
				I09 int(11) DEFAULT NULL,
				I10 int(11) DEFAULT NULL,
				I11 int(11) DEFAULT NULL,
				I12 int(11) DEFAULT NULL,
				I13 int(11) DEFAULT NULL,
				D14 date DEFAULT NULL,
				D15 date DEFAULT NULL,
				F16 float(10,2) DEFAULT NULL,
				F17 float(10,2) DEFAULT NULL,
				C18 char(1) DEFAULT NULL,
				S19 timestamp NULL DEFAULT NULL,
				PRIMARY KEY (id)
			) ENGINE=InnoDB DEFAULT CHARSET=utf8;";
       $result=$conn->query($sql);
   	}

	public function selection ($id=0, $field="V01", $ord="DESC") {
		$id=filter_var($id, FILTER_SANITIZE_NUMBER_INT);
		$conn = new PDO("mysql:host=".$this->nomehost.";dbname=".$this->nomedb.";charset=utf8", $this->nomeuser, $this->password);
		if ($id==0) {
				$allresults=NULL;
				// multiple selection
				$sql="SELECT * FROM ".$this->table." WHERE 1 ORDER BY ".$field." ".$ord;
				$this->debugsql=$sql;
				$res=$conn->query($sql);
				if ($res->columnCount() === 0) {
					//!!empty 
				} else {
				foreach ($res as $row) {
					$allresults['id'][]	=$row[0];
					$allresults['V01'][]=htmlspecialchars($row[1]);
					$allresults['V02'][]=htmlspecialchars($row[2]);
					$allresults['V03'][]=htmlspecialchars($row[3]);
					$allresults['V04'][]=htmlspecialchars($row[4]);
					$allresults['V05'][]=htmlspecialchars($row[5]);
					$allresults['T06'][]=$row[6];
					$allresults['T07'][]=$row[7];
					$allresults['T08'][]=$row[8];
					$allresults['I09'][]=$row[9];
					$allresults['I10'][]=$row[10];
					$allresults['I11'][]=$row[11];
					$allresults['I12'][]=$row[12];
					$allresults['I13'][]=$row[13];
					$allresults['D14'][]=$row[14];
					$allresults['D15'][]=$row[15];
					$allresults['F16'][]=$row[16];
					$allresults['F17'][]=$row[17];
					$allresults['C18'][]=$row[18];
					$allresults['S19'][]=$row[19];
					}
				}
				$conn= NULL;
				return $allresults; 
			} else {
			// single selection
			$sql="SELECT * FROM ".$this->table." WHERE id=".$id;
			$this->debugsql=$sql;
			$result=$conn->query($sql);
			$row = $result->fetch();
			$this->id=$row[0];
			$this->V01=htmlspecialchars($row[1]);
			$this->V02=htmlspecialchars($row[2]);
			$this->V03=htmlspecialchars($row[3]);
			$this->V04=htmlspecialchars($row[4]);
			$this->V05=htmlspecialchars($row[5]);
			$this->T06=$row[6];
			$this->T07=$row[7];
			$this->T08=$row[8];
			$this->I09=$row[9];
			$this->I10=$row[10];
			$this->I11=$row[11];
			$this->I12=$row[12];
			$this->I13=$row[13];
			$this->D14=$row[14];
			$this->D15=$row[15];
			$this->F16=$row[16];
			$this->F17=$row[17];
			$this->C18=$row[18];
			$this->S19=$row[19];
			$conn= NULL;
			return $id;
			}
	} 

	public function insert ($V01=NULL,$V02=NULL,$V03=NULL,$V04=NULL,$V05=NULL,$T06=NULL,$T07=NULL,$T08=NULL,$I09=NULL,$I10=NULL,$I11=NULL,$I12=NULL,$I13=NULL,$D14=NULL,$D15=NULL,$F16=NULL,$F17=NULL,$C18=NULL)
	{		
		$conn = new PDO("mysql:host=".$this->nomehost.";dbname=".$this->nomedb.";charset=utf8", $this->nomeuser, $this->password);
		
		//Verify if $_POST
		if (is_array($V01)) {
			$temp_arr=$V01;
			(isset($temp_arr["V01"])) ? $V01=$temp_arr["V01"] : $V01=NULL;
			(isset($temp_arr["V02"])) ? $V02=$temp_arr["V02"] : $V02=NULL;
			(isset($temp_arr["V03"])) ? $V03=$temp_arr["V03"] : $V03=NULL;
			(isset($temp_arr["V04"])) ? $V04=$temp_arr["V04"] : $V04=NULL;
			(isset($temp_arr["V05"])) ? $V05=$temp_arr["V05"] : $V05=NULL;
			
			(isset($temp_arr["T06"])) ? $T06=$temp_arr["T06"] : $T06=NULL;
			(isset($temp_arr["T07"])) ? $T07=$temp_arr["T07"] : $T07=NULL;
			(isset($temp_arr["T08"])) ? $T08=$temp_arr["T08"] : $T08=NULL;
			
			(isset($temp_arr["I09"])) ? $I09=$temp_arr["I09"] : $I09=NULL;
			(isset($temp_arr["I10"])) ? $I10=$temp_arr["I10"] : $I10=NULL;
			(isset($temp_arr["I11"])) ? $I11=$temp_arr["I11"] : $I11=NULL;
			(isset($temp_arr["I12"])) ? $I12=$temp_arr["I12"] : $I12=NULL;
			(isset($temp_arr["I13"])) ? $I13=$temp_arr["I13"] : $I13=NULL;
			
			(isset($temp_arr["D14"])) ? $D14=$temp_arr["D14"] : $D14=NULL;
			(isset($temp_arr["D15"])) ? $D15=$temp_arr["D15"] : $D15=NULL;
			
			(isset($temp_arr["F16"])) ? $F16=$temp_arr["F16"] : $F16=NULL;
			(isset($temp_arr["F17"])) ? $F17=$temp_arr["F17"] : $F17=NULL;

			(isset($temp_arr["C18"])) ? $C18=$temp_arr["C18"] : $C18=NULL;	
		}

		try {
			$storedprod=$conn->prepare("INSERT INTO ".$this->table."(V01,V02,V03,V04,V05,T06,T07,T08,I09,I10,I11,I12,I13,D14,D15,F16,F17,C18) VALUES 
			(:V01, :V02, :V03, :V04, :V05, :T06, :T07, :T08, :I09, :I10, :I11, :I12, :I13, :D14, :D15, :F16, :F17, :C18)");   

			(is_null($V01)) ? $storedprod->bindParam(':V01', $V01, PDO::PARAM_NULL) : $storedprod->bindParam(':V01', $V01, PDO::PARAM_STR);
			(is_null($V02)) ? $storedprod->bindParam(':V02', $V02, PDO::PARAM_NULL) : $storedprod->bindParam(':V02', $V02, PDO::PARAM_STR);
			(is_null($V03)) ? $storedprod->bindParam(':V03', $V03, PDO::PARAM_NULL) : $storedprod->bindParam(':V03', $V03, PDO::PARAM_STR);
			(is_null($V04)) ? $storedprod->bindParam(':V04', $V04, PDO::PARAM_NULL) : $storedprod->bindParam(':V04', $V04, PDO::PARAM_STR);
			(is_null($V05)) ? $storedprod->bindParam(':V05', $V05, PDO::PARAM_NULL) : $storedprod->bindParam(':V05', $V05, PDO::PARAM_STR);
			
			(is_null($T06)) ? $storedprod->bindParam(':T06', $T06, PDO::PARAM_NULL) : $storedprod->bindParam(':T06', $T06, PDO::PARAM_STR);
			(is_null($T07)) ? $storedprod->bindParam(':T07', $T07, PDO::PARAM_NULL) : $storedprod->bindParam(':T07', $T07, PDO::PARAM_STR);
			(is_null($T08)) ? $storedprod->bindParam(':T08', $T08, PDO::PARAM_NULL) : $storedprod->bindParam(':T08', $T08, PDO::PARAM_STR);

			(is_null($I09)) ? $storedprod->bindParam(':I09', $I09, PDO::PARAM_NULL) : $storedprod->bindParam(':I09', $I09, PDO::PARAM_INT);
			(is_null($I10)) ? $storedprod->bindParam(':I10', $I10, PDO::PARAM_NULL) : $storedprod->bindParam(':I10', $I10, PDO::PARAM_INT);
			(is_null($I11)) ? $storedprod->bindParam(':I11', $I11, PDO::PARAM_NULL) : $storedprod->bindParam(':I11', $I11, PDO::PARAM_INT);
			(is_null($I12)) ? $storedprod->bindParam(':I12', $I12, PDO::PARAM_NULL) : $storedprod->bindParam(':I12', $I12, PDO::PARAM_INT);
			(is_null($I13)) ? $storedprod->bindParam(':I13', $I13, PDO::PARAM_NULL) : $storedprod->bindParam(':I13', $I13, PDO::PARAM_INT);

			(is_null($D14)) ? $storedprod->bindParam(':D14', $D14, PDO::PARAM_NULL) : $storedprod->bindParam(':D14', $D14, PDO::PARAM_STR);
			(is_null($D15)) ? $storedprod->bindParam(':D15', $D15, PDO::PARAM_NULL) : $storedprod->bindParam(':D15', $D15, PDO::PARAM_STR);

			(is_null($F16)) ? $storedprod->bindParam(':F16', $F16, PDO::PARAM_NULL) : $storedprod->bindParam(':F16', $F16);
			(is_null($F17)) ? $storedprod->bindParam(':F17', $F17, PDO::PARAM_NULL) : $storedprod->bindParam(':F17', $F17);

			(is_null($C18)) ? $storedprod->bindParam(':C18', $C18, PDO::PARAM_NULL) : $storedprod->bindParam(':C18', $C18, PDO::PARAM_STR);
			
			$storedprod->execute();
			$id=$conn->lastInsertId();
			
		
		} catch (PDOException $e) {
			echo ("Error: ".$e->getMessage());
			echo ("<hr/>");
			$storedprod->debugDumpParams();
		}

		$conn= NULL;
		return $id;
	} 	

	public function modify ($id,$V01=NULL,$V02=NULL,$V03=NULL,$V04=NULL,$V05=NULL,$T06=NULL,$T07=NULL,$T08=NULL,$I09=NULL,$I10=NULL,$I11=NULL,$I12=NULL,$I13=NULL,$D14=NULL,$D15=NULL,$F16=NULL,$F17=NULL,$C18=NULL) {
		
		//Verify if $_POST
		if (is_array($id)) {
			$temp_arr=$id;
			$id=$temp_arr["id"];
			(isset($temp_arr["V01"])) ? $V01=$temp_arr["V01"] : $V01=NULL;
			(isset($temp_arr["V01"])) ? $V01=$temp_arr["V01"] : $V01=NULL;
			(isset($temp_arr["V02"])) ? $V02=$temp_arr["V02"] : $V02=NULL;
			(isset($temp_arr["V03"])) ? $V03=$temp_arr["V03"] : $V03=NULL;
			(isset($temp_arr["V04"])) ? $V04=$temp_arr["V04"] : $V04=NULL;
			(isset($temp_arr["V05"])) ? $V05=$temp_arr["V05"] : $V05=NULL;
			(isset($temp_arr["T06"])) ? $T06=$temp_arr["T06"] : $T06=NULL;
			(isset($temp_arr["T07"])) ? $T07=$temp_arr["T07"] : $T07=NULL;
			(isset($temp_arr["T08"])) ? $T08=$temp_arr["T08"] : $T08=NULL;
			(isset($temp_arr["I09"])) ? $I09=$temp_arr["I09"] : $I09=NULL;
			(isset($temp_arr["I10"])) ? $I10=$temp_arr["I10"] : $I10=NULL;
			(isset($temp_arr["I11"])) ? $I11=$temp_arr["I11"] : $I11=NULL;
			(isset($temp_arr["I12"])) ? $I12=$temp_arr["I12"] : $I12=NULL;
			(isset($temp_arr["I13"])) ? $I13=$temp_arr["I13"] : $I13=NULL;
			(isset($temp_arr["D14"])) ? $D14=$temp_arr["D14"] : $D14=NULL;
			(isset($temp_arr["D15"])) ? $D15=$temp_arr["D15"] : $D15=NULL;
			(isset($temp_arr["F16"])) ? $F16=$temp_arr["F16"] : $F16=NULL;
			(isset($temp_arr["F17"])) ? $F17=$temp_arr["F17"] : $F17=NULL;
			(isset($temp_arr["C18"])) ? $C18=$temp_arr["C18"] : $C18=NULL;	
			$id=filter_var($id, FILTER_SANITIZE_NUMBER_INT);
			$conn = new PDO("mysql:host=".$this->nomehost.";dbname=".$this->nomedb.";charset=utf8", $this->nomeuser, $this->password);
			$tempquery="";
			if (!is_null($V01)) {$tempquery.="V01=:V01,";}
			if (!is_null($V02)) {$tempquery.="V02=:V02,";}
			if (!is_null($V03)) {$tempquery.="V03=:V03,";}
			if (!is_null($V04)) {$tempquery.="V04=:V04,";}
			if (!is_null($V05)) {$tempquery.="V05=:V05,";}
			if (!is_null($T06)) {$tempquery.="T06=:T06,";}
			if (!is_null($T07)) {$tempquery.="T07=:T07,";}
			if (!is_null($T08)) {$tempquery.="T08=:T08,";}
			if (!is_null($I09)) {$tempquery.="I09=:I09,";}
			if (!is_null($I10)) {$tempquery.="I10=:I10,";}
			if (!is_null($I11)) {$tempquery.="I11=:I11,";}
			if (!is_null($I12)) {$tempquery.="I12=:I12,";}
			if (!is_null($I13)) {$tempquery.="I13=:I13,";}
			if (!is_null($D14)) {$tempquery.="D14=:D14,";}
			if (!is_null($D15)) {$tempquery.="D15=:D15,";}
			if (!is_null($F16)) {$tempquery.="F16=:F16,";}
			if (!is_null($F17)) {$tempquery.="F17=:F17,";}
			if (!is_null($C18)) {$tempquery.="C18=:C18,";}
			$tempquery=rtrim($tempquery,",");
			$storedprod=$conn->prepare("UPDATE ".$this->table." SET ".$tempquery." WHERE id=:id;");   
			try {
				$storedprod->bindParam(':id', $id, PDO::PARAM_INT);		
				if (!is_null($V01)) {$storedprod->bindParam(':V01', $V01, PDO::PARAM_STR);}
				if (!is_null($V02)) {$storedprod->bindParam(':V02', $V02, PDO::PARAM_STR);}
				if (!is_null($V03)) {$storedprod->bindParam(':V03', $V03, PDO::PARAM_STR);}
				if (!is_null($V04)) {$storedprod->bindParam(':V04', $V04, PDO::PARAM_STR);}
				if (!is_null($V05)) {$storedprod->bindParam(':V05', $V05, PDO::PARAM_STR);}
				if (!is_null($T06)) {$storedprod->bindParam(':T06', $T06, PDO::PARAM_STR);}
				if (!is_null($T07)) {$storedprod->bindParam(':T07', $T07, PDO::PARAM_STR);}
				if (!is_null($T08)) {$storedprod->bindParam(':T08', $T08, PDO::PARAM_STR);}
				if (!is_null($I09)) {$storedprod->bindParam(':I09', $I09, PDO::PARAM_INT);}
				if (!is_null($I10)) {$storedprod->bindParam(':I10', $I10, PDO::PARAM_INT);}
				if (!is_null($I11)) {$storedprod->bindParam(':I11', $I11, PDO::PARAM_INT);}
				if (!is_null($I12)) {$storedprod->bindParam(':I12', $I12, PDO::PARAM_INT);}
				if (!is_null($I13)) {$storedprod->bindParam(':I13', $I13, PDO::PARAM_INT);}
				if (!is_null($D14)) {$storedprod->bindParam(':D14', $D14, PDO::PARAM_STR);}
				if (!is_null($D15)) {$storedprod->bindParam(':D15', $D15, PDO::PARAM_STR);}
				if (!is_null($F16)) {$storedprod->bindParam(':F16', $F16);}
				if (!is_null($F17)) {$storedprod->bindParam(':F17', $F17);}
				if (!is_null($C18)) {$storedprod->bindParam(':C18', $C18, PDO::PARAM_STR);}
				
				$storedprod->execute();
			} catch (PDOException $e) {
				echo ("Error: ".$e->getMessage());
				echo ("<hr/>");
				$storedprod->debugDumpParams();
			}
		
		}  else {
			
			//isn't $_POST
			$id=filter_var($id, FILTER_SANITIZE_NUMBER_INT);
			$conn = new PDO("mysql:host=".$this->nomehost.";dbname=".$this->nomedb.";charset=utf8", $this->nomeuser, $this->password);
			$storedprod=$conn->prepare("UPDATE ".$this->table." SET 
			V01=:V01,
			V02=:V02,
			V03=:V03,
			V04=:V04,
			V05=:V05,
			T06=:T06,
			T07=:T07,
			T08=:T08,
			I09=:I09,
			I10=:I10,
			I11=:I11,
			I12=:I12,
			I13=:I13,
			D14=:D14,
			D15=:D15,
			F16=:F16,
			F17=:F17,
			C18=:C18
			WHERE id=:id;");   
			try {
				$storedprod->bindParam(':id', $id, PDO::PARAM_INT);		
				(is_null($V01)) ? $storedprod->bindParam(':V01', $V01, PDO::PARAM_NULL) : $storedprod->bindParam(':V01', $V01, PDO::PARAM_STR);
				(is_null($V02)) ? $storedprod->bindParam(':V02', $V02, PDO::PARAM_NULL) : $storedprod->bindParam(':V02', $V02, PDO::PARAM_STR);
				(is_null($V03)) ? $storedprod->bindParam(':V03', $V03, PDO::PARAM_NULL) : $storedprod->bindParam(':V03', $V03, PDO::PARAM_STR);
				(is_null($V04)) ? $storedprod->bindParam(':V04', $V04, PDO::PARAM_NULL) : $storedprod->bindParam(':V04', $V04, PDO::PARAM_STR);
				(is_null($V05)) ? $storedprod->bindParam(':V05', $V05, PDO::PARAM_NULL) : $storedprod->bindParam(':V05', $V05, PDO::PARAM_STR);
				(is_null($T06)) ? $storedprod->bindParam(':T06', $T06, PDO::PARAM_NULL) : $storedprod->bindParam(':T06', $T06, PDO::PARAM_STR);
				(is_null($T07)) ? $storedprod->bindParam(':T07', $T07, PDO::PARAM_NULL) : $storedprod->bindParam(':T07', $T07, PDO::PARAM_STR);
				(is_null($T08)) ? $storedprod->bindParam(':T08', $T08, PDO::PARAM_NULL) : $storedprod->bindParam(':T08', $T08, PDO::PARAM_STR);
				(is_null($I09)) ? $storedprod->bindParam(':I09', $I09, PDO::PARAM_NULL) : $storedprod->bindParam(':I09', $I09, PDO::PARAM_INT);
				(is_null($I10)) ? $storedprod->bindParam(':I10', $I10, PDO::PARAM_NULL) : $storedprod->bindParam(':I10', $I10, PDO::PARAM_INT);
				(is_null($I11)) ? $storedprod->bindParam(':I11', $I11, PDO::PARAM_NULL) : $storedprod->bindParam(':I11', $I11, PDO::PARAM_INT);
				(is_null($I12)) ? $storedprod->bindParam(':I12', $I12, PDO::PARAM_NULL) : $storedprod->bindParam(':I12', $I12, PDO::PARAM_INT);
				(is_null($I13)) ? $storedprod->bindParam(':I13', $I13, PDO::PARAM_NULL) : $storedprod->bindParam(':I13', $I13, PDO::PARAM_INT);
				(is_null($D14)) ? $storedprod->bindParam(':D14', $D14, PDO::PARAM_NULL) : $storedprod->bindParam(':D14', $D14, PDO::PARAM_STR);
				(is_null($D15)) ? $storedprod->bindParam(':D15', $D15, PDO::PARAM_NULL) : $storedprod->bindParam(':D15', $D15, PDO::PARAM_STR);
				(is_null($F16)) ? $storedprod->bindParam(':F16', $F16, PDO::PARAM_NULL) : $storedprod->bindParam(':F16', $F16);
				(is_null($F17)) ? $storedprod->bindParam(':F17', $F17, PDO::PARAM_NULL) : $storedprod->bindParam(':F17', $F17);
				(is_null($C18)) ? $storedprod->bindParam(':C18', $C18, PDO::PARAM_NULL) : $storedprod->bindParam(':C18', $C18, PDO::PARAM_STR);
				$storedprod->execute();
			} catch (PDOException $e) {
				echo ("Errore: ".$e->getMessage());
				echo ("<hr/>");
				$storedprod->debugDumpParams();
			}
		}
		$conn= NULL;
		return $id;
	}	

	public function remove ($id) {
			$id=filter_var($id, FILTER_SANITIZE_NUMBER_INT);
			$conn = new PDO("mysql:host=".$this->nomehost.";dbname=".$this->nomedb.";charset=utf8", $this->nomeuser, $this->password);
			$sql=("DELETE FROM ".$this->table." WHERE id=".$id);
			$this->debugsql=$sql;
			$conn->query($sql);
			$conn= NULL;
			return true;
		}

	public function total ($field=NULL, $val=NULL) {
			$conn = new PDO("mysql:host=".$this->nomehost.";dbname=".$this->nomedb.";charset=utf8", $this->nomeuser, $this->password);
			if (is_null($field)) {
				$sql=("SELECT count(*) FROM ".$this->table);
			} else {
				//insert quotation marks for string fields
				switch ($field) {
					case "V01":
					case "V02":
					case "V03":
					case "V04":
					case "V05":
					case "T06":
					case "T07":
					case "T08":
					case "D14":
					case "D15":
					case "C18":
						$val="'".$val."'";
					break;
				}
				$sql=("SELECT count(*) FROM ".$this->table." WHERE ".$field."=".$val);
			}
			$this->debugsql=$sql;
			$result=$conn->query($sql);
			$conn= NULL;
			if ($result) {
				$row = $result->fetch();
				return $row[0];
			} else {
				return false;
			}
		}

	public function generate ($id=0,$field="V01",$ord="DESC") {
		$id=filter_var($id, FILTER_SANITIZE_NUMBER_INT);
		$conn = new PDO("mysql:host=".$this->nomehost.";dbname=".$this->nomedb.";charset=utf8", $this->nomeuser, $this->password);
		$htmlreturn="";
		// multiple selection
		$sql="SELECT id,".$field." FROM ".$this->table." WHERE 1 ORDER BY ".$field." ".$ord;
		$this->debugsql=$sql;
		foreach ($conn->query($sql) as $row) {
				if ($id==$row[0]) {
					$htmlreturn.="<option value='".$row[0]."' selected>".$row[1]."</option>";
				} else {
					$htmlreturn.="<option value='".$row[0]."'>".$row[1]."</option>";
				}
			}
		$conn= NULL;
		return $htmlreturn; 
	}	
		
	public function querySTR($query) {
		$conn = new PDO("mysql:host=".$this->nomehost.";dbname=".$this->nomedb.";charset=utf8", $this->nomeuser, $this->password);
		// Check if SELECT is in the query

		if (preg_match('/SELECT/', strtoupper($query)) != 0) {
    		// Array with forbidden query parts
    		$disAllow = array('INSERT','UPDATE','DELETE','RENAME','DROP','CREATE','TRUNCATE','ALTER','COMMIT','ROLLBACK','MERGE','CALL','EXPLAIN','LOCK','GRANT','REVOKE','SAVEPOINT','TRANSACTION','SET');
			// Convert array to pipe-seperated string
    		$disAllow = implode('|', $disAllow);
		    // Check if no other harmfull statements exist
    		if (preg_match('/('.$disAllow.')/', strtoupper($query)) == 0) {
        		// Execute query
    			$result=$conn->query($query);
				return $result->fetchAll();
    		} else {
    			return false;
    		}
		} else {
			return false;
		}
	}

}    
?>
