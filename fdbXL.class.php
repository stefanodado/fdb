<?php
/*
Version 2.5 | 2016-12-13
*/
class fdb {
  
  	public $id ="";
  	public $V00 ="";
  	public $V01 ="";
	public $V02 ="";
	public $V03 ="";
	public $V04 ="";
	public $V05 ="";
	public $V06 ="";
	public $V07 ="";
	public $T08 ="";
	public $T09 ="";
	public $T10 ="";
	public $I11 ="";
	public $I12 ="";
	public $I13 ="";
	public $I14 ="";
	public $I15 ="";
	public $I16 ="";
	public $I17 ="";
	public $I18 ="";
	public $D19 ="";
	public $D20 ="";
	public $D21 ="";
	public $F22 ="";
	public $F23 ="";
	public $C24 ="";
	public $C25 ="";
	public $C26 ="";
	public $C27 ="";
	public $C28 ="";
	public $C29 ="";
	public $S30 ="";
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
  				V00 varchar(255) DEFAULT NULL,
  				V01 varchar(255) DEFAULT NULL,
  				V02 varchar(255) DEFAULT NULL,
  				V03 varchar(255) DEFAULT NULL,
				V04 varchar(255) DEFAULT NULL,
				V05 varchar(255) DEFAULT NULL,
				V06 varchar(255) DEFAULT NULL,
				V07 varchar(255) DEFAULT NULL,
				T08 text,
				T09 text,
				T10 text,
				I11 int(11) DEFAULT NULL,
				I12 int(11) DEFAULT NULL,
				I13 int(11) DEFAULT NULL,
				I14 int(11) DEFAULT NULL,
				I15 int(11) DEFAULT NULL,
				I16 int(11) DEFAULT NULL,
				I17 int(11) DEFAULT NULL,
				I18 int(11) DEFAULT NULL,
				D19 date DEFAULT NULL,
				D20 date DEFAULT NULL,
				D21 date DEFAULT NULL,
				F22 float(10,2) DEFAULT NULL,
				F23 float(10,2) DEFAULT NULL,
				C24 char(1) DEFAULT NULL,
				C25 char(1) DEFAULT NULL,
				C26 char(1) DEFAULT NULL,
				C27 char(1) DEFAULT NULL,
				C28 char(1) DEFAULT NULL,
				C29 char(1) DEFAULT NULL,
				S30 timestamp NULL DEFAULT NULL,
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
					$allresults['V00'][]=htmlspecialchars($row[1]);
					$allresults['V01'][]=htmlspecialchars($row[2]);
					$allresults['V02'][]=htmlspecialchars($row[3]);
					$allresults['V03'][]=htmlspecialchars($row[4]);
					$allresults['V04'][]=htmlspecialchars($row[5]);
					$allresults['V05'][]=htmlspecialchars($row[6]);
					$allresults['V06'][]=htmlspecialchars($row[7]);
					$allresults['V07'][]=htmlspecialchars($row[8]);
					$allresults['T08'][]=$row[9];
					$allresults['T09'][]=$row[10];
					$allresults['T10'][]=$row[11];
					$allresults['I11'][]=$row[12];
					$allresults['I12'][]=$row[13];
					$allresults['I13'][]=$row[14];
					$allresults['I14'][]=$row[15];
					$allresults['I15'][]=$row[16];
					$allresults['I16'][]=$row[17];
					$allresults['I17'][]=$row[18];
					$allresults['I18'][]=$row[19];
					$allresults['D19'][]=$row[20];
					$allresults['D20'][]=$row[21];
					$allresults['D21'][]=$row[22];
					$allresults['F22'][]=$row[23];
					$allresults['F23'][]=$row[24];
					$allresults['C24'][]=$row[25];
					$allresults['C25'][]=$row[26];
					$allresults['C26'][]=$row[27];
					$allresults['C27'][]=$row[28];
					$allresults['C28'][]=$row[29];
					$allresults['C29'][]=$row[30];
					$allresults['S30'][]=$row[31];
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
			$this->V00=htmlspecialchars($row[1]);
			$this->V01=htmlspecialchars($row[2]);
			$this->V02=htmlspecialchars($row[3]);
			$this->V03=htmlspecialchars($row[4]);
			$this->V04=htmlspecialchars($row[5]);
			$this->V05=htmlspecialchars($row[6]);
			$this->V06=htmlspecialchars($row[7]);
			$this->V07=htmlspecialchars($row[8]);
			$this->T08=$row[9];
			$this->T09=$row[10];
			$this->T10=$row[11];
			$this->I11=$row[12];
			$this->I12=$row[13];
			$this->I13=$row[14];
			$this->I14=$row[15];
			$this->I15=$row[16];
			$this->I16=$row[17];
			$this->I17=$row[18];
			$this->I18=$row[19];
			$this->D19=$row[20];
			$this->D20=$row[21];
			$this->D21=$row[22];
			$this->F22=$row[23];
			$this->F23=$row[24];
			$this->C24=$row[25];
			$this->C25=$row[26];
			$this->C26=$row[27];
			$this->C27=$row[28];
			$this->C28=$row[29];
			$this->C29=$row[30];
			$this->S30=$row[31];
			$conn= NULL;
			return $id;
			}
	} 
	public function insert ($V00=NULL,$V01=NULL,$V02=NULL,$V03=NULL,$V04=NULL,$V05=NULL,$V06=NULL,$V07=NULL,$T08=NULL,$T09=NULL,$T10=NULL,$I11=NULL,$I12=NULL,$I13=NULL,$I14=NULL,$I15=NULL,$I16=NULL,$I17=NULL,$I18=NULL,$D19=NULL,$D20=NULL,$D21=NULL,$F22=NULL,$F23=NULL,$C24=NULL,$C25=NULL,$C26=NULL,$C27=NULL,$C28=NULL,$C29=NULL)
	{		
		$conn = new PDO("mysql:host=".$this->nomehost.";dbname=".$this->nomedb.";charset=utf8", $this->nomeuser, $this->password);
		
		//Verify if $_POST
		if (is_array($V00)) {
			$temp_arr=$V00;
			(isset($temp_arr["V00"])) ? $V00=$temp_arr["V00"] : $V00=NULL;
			(isset($temp_arr["V01"])) ? $V01=$temp_arr["V01"] : $V01=NULL;
			(isset($temp_arr["V02"])) ? $V02=$temp_arr["V02"] : $V02=NULL;
			(isset($temp_arr["V03"])) ? $V03=$temp_arr["V03"] : $V03=NULL;
			(isset($temp_arr["V04"])) ? $V04=$temp_arr["V04"] : $V04=NULL;
			(isset($temp_arr["V05"])) ? $V05=$temp_arr["V05"] : $V05=NULL;
			(isset($temp_arr["V06"])) ? $V06=$temp_arr["V06"] : $V06=NULL;
			(isset($temp_arr["V07"])) ? $V07=$temp_arr["V07"] : $V07=NULL;
			
			(isset($temp_arr["T08"])) ? $T08=$temp_arr["T08"] : $T08=NULL;
			(isset($temp_arr["T09"])) ? $T09=$temp_arr["T09"] : $T09=NULL;
			(isset($temp_arr["T10"])) ? $T10=$temp_arr["T10"] : $T10=NULL;
			
			(isset($temp_arr["I11"])) ? $I11=$temp_arr["I11"] : $I11=NULL;
			(isset($temp_arr["I12"])) ? $I12=$temp_arr["I12"] : $I12=NULL;
			(isset($temp_arr["I13"])) ? $I13=$temp_arr["I13"] : $I13=NULL;
			(isset($temp_arr["I14"])) ? $I14=$temp_arr["I14"] : $I14=NULL;
			(isset($temp_arr["I15"])) ? $I15=$temp_arr["I15"] : $I15=NULL;
			(isset($temp_arr["I16"])) ? $I16=$temp_arr["I16"] : $I16=NULL;
			(isset($temp_arr["I17"])) ? $I17=$temp_arr["I17"] : $I17=NULL;
			(isset($temp_arr["I18"])) ? $I18=$temp_arr["I18"] : $I18=NULL;
			
			(isset($temp_arr["D19"])) ? $D19=$temp_arr["D19"] : $D19=NULL;
			(isset($temp_arr["D20"])) ? $D20=$temp_arr["D20"] : $D20=NULL;
			(isset($temp_arr["D21"])) ? $D21=$temp_arr["D21"] : $D21=NULL;
			
			(isset($temp_arr["F22"])) ? $F22=$temp_arr["F22"] : $F22=NULL;
			(isset($temp_arr["F23"])) ? $F23=$temp_arr["F23"] : $F23=NULL;
			
			(isset($temp_arr["C24"])) ? $C24=$temp_arr["C24"] : $C24=NULL;
			(isset($temp_arr["C25"])) ? $C25=$temp_arr["C25"] : $C25=NULL;
			(isset($temp_arr["C26"])) ? $C26=$temp_arr["C26"] : $C26=NULL;
			(isset($temp_arr["C27"])) ? $C27=$temp_arr["C27"] : $C27=NULL;
			(isset($temp_arr["C28"])) ? $C28=$temp_arr["C28"] : $C28=NULL;
			(isset($temp_arr["C29"])) ? $C29=$temp_arr["C29"] : $C29=NULL;	
		}
		try {
			$storedprod=$conn->prepare("INSERT INTO ".$this->table."(V00,V01,V02,V03,V04,V05,V06,V07,T08,T09,T10,I11,I12,I13,I14,I15,I16,I17,I18,D19,D20,D21,F22,F23,C24,C25,C26,C27,C28,C29) VALUES 
			(:V00,:V01, :V02, :V03, :V04, :V05, :V06, :V07, :T08, :T09, :T10, :I11, :I12, :I13, :I14, :I15, :I16, :I17, :I18, :D19, :D20, :D21, :F22, :F23, :C24, :C25, :C26, :C27, :C28, :C29)");   
			
			(is_null($V00)) ? $storedprod->bindParam(':V00', $V00, PDO::PARAM_NULL) : $storedprod->bindParam(':V00', $V00, PDO::PARAM_STR);
			(is_null($V01)) ? $storedprod->bindParam(':V01', $V01, PDO::PARAM_NULL) : $storedprod->bindParam(':V01', $V01, PDO::PARAM_STR);
			(is_null($V02)) ? $storedprod->bindParam(':V02', $V02, PDO::PARAM_NULL) : $storedprod->bindParam(':V02', $V02, PDO::PARAM_STR);
			(is_null($V03)) ? $storedprod->bindParam(':V03', $V03, PDO::PARAM_NULL) : $storedprod->bindParam(':V03', $V03, PDO::PARAM_STR);
			(is_null($V04)) ? $storedprod->bindParam(':V04', $V04, PDO::PARAM_NULL) : $storedprod->bindParam(':V04', $V04, PDO::PARAM_STR);
			(is_null($V05)) ? $storedprod->bindParam(':V05', $V05, PDO::PARAM_NULL) : $storedprod->bindParam(':V05', $V05, PDO::PARAM_STR);
			(is_null($V06)) ? $storedprod->bindParam(':V06', $V06, PDO::PARAM_NULL) : $storedprod->bindParam(':V06', $V06, PDO::PARAM_STR);
			(is_null($V07)) ? $storedprod->bindParam(':V07', $V07, PDO::PARAM_NULL) : $storedprod->bindParam(':V07', $V07, PDO::PARAM_STR);
			
			(is_null($T08)) ? $storedprod->bindParam(':T08', $T08, PDO::PARAM_NULL) : $storedprod->bindParam(':T08', $T08, PDO::PARAM_STR);
			(is_null($T09)) ? $storedprod->bindParam(':T09', $T09, PDO::PARAM_NULL) : $storedprod->bindParam(':T09', $T09, PDO::PARAM_STR);
			(is_null($T10)) ? $storedprod->bindParam(':T10', $T10, PDO::PARAM_NULL) : $storedprod->bindParam(':T10', $T10, PDO::PARAM_STR);
			
			(is_null($I11)) ? $storedprod->bindParam(':I11', $I11, PDO::PARAM_NULL) : $storedprod->bindParam(':I11', $I11, PDO::PARAM_INT);
			(is_null($I12)) ? $storedprod->bindParam(':I12', $I12, PDO::PARAM_NULL) : $storedprod->bindParam(':I12', $I12, PDO::PARAM_INT);
			(is_null($I13)) ? $storedprod->bindParam(':I13', $I13, PDO::PARAM_NULL) : $storedprod->bindParam(':I13', $I13, PDO::PARAM_INT);
			(is_null($I14)) ? $storedprod->bindParam(':I14', $I14, PDO::PARAM_NULL) : $storedprod->bindParam(':I14', $I14, PDO::PARAM_INT);
			(is_null($I15)) ? $storedprod->bindParam(':I15', $I15, PDO::PARAM_NULL) : $storedprod->bindParam(':I15', $I15, PDO::PARAM_INT);
			(is_null($I16)) ? $storedprod->bindParam(':I16', $I16, PDO::PARAM_NULL) : $storedprod->bindParam(':I16', $I16, PDO::PARAM_INT);
			(is_null($I17)) ? $storedprod->bindParam(':I17', $I17, PDO::PARAM_NULL) : $storedprod->bindParam(':I17', $I17, PDO::PARAM_INT);
			(is_null($I18)) ? $storedprod->bindParam(':I18', $I18, PDO::PARAM_NULL) : $storedprod->bindParam(':I18', $I18, PDO::PARAM_INT);
			
			(is_null($D19)) ? $storedprod->bindParam(':D19', $D19, PDO::PARAM_NULL) : $storedprod->bindParam(':D19', $D19, PDO::PARAM_STR);
			(is_null($D20)) ? $storedprod->bindParam(':D20', $D20, PDO::PARAM_NULL) : $storedprod->bindParam(':D20', $D20, PDO::PARAM_STR);
			(is_null($D21)) ? $storedprod->bindParam(':D21', $D21, PDO::PARAM_NULL) : $storedprod->bindParam(':D21', $D21, PDO::PARAM_STR);
			
			(is_null($F22)) ? $storedprod->bindParam(':F22', $F22, PDO::PARAM_NULL) : $storedprod->bindParam(':F22', $F22);
			(is_null($F23)) ? $storedprod->bindParam(':F23', $F23, PDO::PARAM_NULL) : $storedprod->bindParam(':F23', $F23);
			
			(is_null($C24)) ? $storedprod->bindParam(':C24', $C24, PDO::PARAM_NULL) : $storedprod->bindParam(':C24', $C24, PDO::PARAM_STR);
			(is_null($C25)) ? $storedprod->bindParam(':C25', $C25, PDO::PARAM_NULL) : $storedprod->bindParam(':C25', $C25, PDO::PARAM_STR);
			(is_null($C26)) ? $storedprod->bindParam(':C26', $C26, PDO::PARAM_NULL) : $storedprod->bindParam(':C26', $C26, PDO::PARAM_STR);
			(is_null($C27)) ? $storedprod->bindParam(':C27', $C27, PDO::PARAM_NULL) : $storedprod->bindParam(':C27', $C27, PDO::PARAM_STR);
			(is_null($C28)) ? $storedprod->bindParam(':C28', $C28, PDO::PARAM_NULL) : $storedprod->bindParam(':C28', $C28, PDO::PARAM_STR);
			(is_null($C29)) ? $storedprod->bindParam(':C29', $C29, PDO::PARAM_NULL) : $storedprod->bindParam(':C29', $C29, PDO::PARAM_STR);
			
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
	public function modify ($id,$V00=NULL,$V01=NULL,$V02=NULL,$V03=NULL,$V04=NULL,$V05=NULL,$V06=NULL,$V07=NULL,$T08=NULL,$T09=NULL,$T10=NULL,$I11=NULL,$I12=NULL,$I13=NULL,$I14=NULL,$I15=NULL,$I16=NULL,$I17=NULL,$I18=NULL,$D19=NULL,$D20=NULL,$D21=NULL,$F22=NULL,$F23=NULL,$C24=NULL,$C25=NULL,$C26=NULL,$C27=NULL,$C28=NULL,$C29=NULL) {
		
		//Verify if $_POST
		if (is_array($id)) {
			$temp_arr=$id;
			$id=$temp_arr["id"];
			
			(isset($temp_arr["V00"])) ? $V00=$temp_arr["V00"] : $V00=NULL;
			(isset($temp_arr["V01"])) ? $V01=$temp_arr["V01"] : $V01=NULL;
			(isset($temp_arr["V02"])) ? $V02=$temp_arr["V02"] : $V02=NULL;
			(isset($temp_arr["V03"])) ? $V03=$temp_arr["V03"] : $V03=NULL;
			(isset($temp_arr["V04"])) ? $V04=$temp_arr["V04"] : $V04=NULL;
			(isset($temp_arr["V05"])) ? $V05=$temp_arr["V05"] : $V05=NULL;
			(isset($temp_arr["V06"])) ? $V06=$temp_arr["V06"] : $V06=NULL;
			(isset($temp_arr["V07"])) ? $V07=$temp_arr["V07"] : $V07=NULL;
			
			(isset($temp_arr["T08"])) ? $T08=$temp_arr["T08"] : $T08=NULL;
			(isset($temp_arr["T09"])) ? $T09=$temp_arr["T09"] : $T09=NULL;
			(isset($temp_arr["T10"])) ? $T10=$temp_arr["T10"] : $T10=NULL;
			
			(isset($temp_arr["I11"])) ? $I11=$temp_arr["I11"] : $I11=NULL;
			(isset($temp_arr["I12"])) ? $I12=$temp_arr["I12"] : $I12=NULL;
			(isset($temp_arr["I13"])) ? $I13=$temp_arr["I13"] : $I13=NULL;
			(isset($temp_arr["I14"])) ? $I14=$temp_arr["I14"] : $I14=NULL;
			(isset($temp_arr["I15"])) ? $I15=$temp_arr["I15"] : $I15=NULL;
			(isset($temp_arr["I16"])) ? $I16=$temp_arr["I16"] : $I16=NULL;
			(isset($temp_arr["I17"])) ? $I17=$temp_arr["I17"] : $I17=NULL;
			(isset($temp_arr["I18"])) ? $I18=$temp_arr["I18"] : $I18=NULL;
			
			(isset($temp_arr["D19"])) ? $D19=$temp_arr["D19"] : $D19=NULL;
			(isset($temp_arr["D20"])) ? $D20=$temp_arr["D20"] : $D20=NULL;
			(isset($temp_arr["D21"])) ? $D21=$temp_arr["D21"] : $D21=NULL;
			
			(isset($temp_arr["F22"])) ? $F22=$temp_arr["F22"] : $F22=NULL;
			(isset($temp_arr["F23"])) ? $F23=$temp_arr["F23"] : $F23=NULL;
			
			(isset($temp_arr["C24"])) ? $C24=$temp_arr["C24"] : $C24=NULL;
			(isset($temp_arr["C25"])) ? $C25=$temp_arr["C25"] : $C25=NULL;
			(isset($temp_arr["C26"])) ? $C26=$temp_arr["C26"] : $C26=NULL;
			(isset($temp_arr["C27"])) ? $C27=$temp_arr["C27"] : $C27=NULL;
			(isset($temp_arr["C28"])) ? $C28=$temp_arr["C28"] : $C28=NULL;
			(isset($temp_arr["C29"])) ? $C29=$temp_arr["C29"] : $C29=NULL;	
			
			$id=filter_var($id, FILTER_SANITIZE_NUMBER_INT);
			$conn = new PDO("mysql:host=".$this->nomehost.";dbname=".$this->nomedb.";charset=utf8", $this->nomeuser, $this->password);
			$tempquery="";
			
			if (!is_null($V00)) {$tempquery.="V00=:V00,";}
			if (!is_null($V01)) {$tempquery.="V01=:V01,";}
			if (!is_null($V02)) {$tempquery.="V02=:V02,";}
			if (!is_null($V03)) {$tempquery.="V03=:V03,";}
			if (!is_null($V04)) {$tempquery.="V04=:V04,";}
			if (!is_null($V05)) {$tempquery.="V05=:V05,";}
			if (!is_null($V06)) {$tempquery.="V06=:V06,";}
			if (!is_null($V07)) {$tempquery.="V07=:V07,";}
			
			if (!is_null($T08)) {$tempquery.="T08=:T08,";}
			if (!is_null($T09)) {$tempquery.="T09=:T09,";}
			if (!is_null($T10)) {$tempquery.="T10=:T10,";}
			
			if (!is_null($I11)) {$tempquery.="I11=:I11,";}
			if (!is_null($I12)) {$tempquery.="I12=:I12,";}
			if (!is_null($I13)) {$tempquery.="I13=:I13,";}
			if (!is_null($I14)) {$tempquery.="I14=:I14,";}
			if (!is_null($I15)) {$tempquery.="I15=:I15,";}
			if (!is_null($I16)) {$tempquery.="I16=:I16,";}
			if (!is_null($I17)) {$tempquery.="I17=:I17,";}
			if (!is_null($I18)) {$tempquery.="I18=:I18,";}
			
			if (!is_null($D19)) {$tempquery.="D19=:D19,";}
			if (!is_null($D20)) {$tempquery.="D20=:D20,";}
			if (!is_null($D21)) {$tempquery.="D21=:D21,";}
			
			if (!is_null($F22)) {$tempquery.="F22=:F22,";}
			if (!is_null($F23)) {$tempquery.="F23=:F23,";}
			
			if (!is_null($C24)) {$tempquery.="C24=:C24,";}
			if (!is_null($C25)) {$tempquery.="C25=:C25,";}
			if (!is_null($C26)) {$tempquery.="C26=:C26,";}
			if (!is_null($C27)) {$tempquery.="C27=:C27,";}
			if (!is_null($C28)) {$tempquery.="C28=:C28,";}
			if (!is_null($C29)) {$tempquery.="C29=:C29,";}
			
			$tempquery=rtrim($tempquery,",");
			$storedprod=$conn->prepare("UPDATE ".$this->table." SET ".$tempquery." WHERE id=:id;");   
			try {
				$storedprod->bindParam(':id', $id, PDO::PARAM_INT);		
				
				if (!is_null($V00)) {$storedprod->bindParam(':V00', $V00, PDO::PARAM_STR);}
				if (!is_null($V01)) {$storedprod->bindParam(':V01', $V01, PDO::PARAM_STR);}
				if (!is_null($V02)) {$storedprod->bindParam(':V02', $V02, PDO::PARAM_STR);}
				if (!is_null($V03)) {$storedprod->bindParam(':V03', $V03, PDO::PARAM_STR);}
				if (!is_null($V04)) {$storedprod->bindParam(':V04', $V04, PDO::PARAM_STR);}
				if (!is_null($V05)) {$storedprod->bindParam(':V05', $V05, PDO::PARAM_STR);}
				if (!is_null($V06)) {$storedprod->bindParam(':V06', $V06, PDO::PARAM_STR);}
				if (!is_null($V07)) {$storedprod->bindParam(':V07', $V07, PDO::PARAM_STR);}
				
				if (!is_null($T08)) {$storedprod->bindParam(':T08', $T08, PDO::PARAM_STR);}
				if (!is_null($T09)) {$storedprod->bindParam(':T09', $T09, PDO::PARAM_STR);}
				if (!is_null($T10)) {$storedprod->bindParam(':T10', $T10, PDO::PARAM_STR);}
				
				if (!is_null($I11)) {$storedprod->bindParam(':I11', $I11, PDO::PARAM_INT);}
				if (!is_null($I12)) {$storedprod->bindParam(':I12', $I12, PDO::PARAM_INT);}
				if (!is_null($I13)) {$storedprod->bindParam(':I13', $I13, PDO::PARAM_INT);}
				if (!is_null($I14)) {$storedprod->bindParam(':I14', $I14, PDO::PARAM_INT);}
				if (!is_null($I15)) {$storedprod->bindParam(':I15', $I15, PDO::PARAM_INT);}
				if (!is_null($I16)) {$storedprod->bindParam(':I16', $I16, PDO::PARAM_INT);}
				if (!is_null($I17)) {$storedprod->bindParam(':I17', $I17, PDO::PARAM_INT);}
				if (!is_null($I18)) {$storedprod->bindParam(':I18', $I18, PDO::PARAM_INT);}
				
				if (!is_null($D19)) {$storedprod->bindParam(':D19', $D19, PDO::PARAM_STR);}
				if (!is_null($D20)) {$storedprod->bindParam(':D20', $D20, PDO::PARAM_STR);}
				if (!is_null($D21)) {$storedprod->bindParam(':D21', $D21, PDO::PARAM_STR);}
				
				if (!is_null($F22)) {$storedprod->bindParam(':F22', $F22);}
				if (!is_null($F23)) {$storedprod->bindParam(':F23', $F23);}
				
				if (!is_null($C24)) {$storedprod->bindParam(':C24', $C24, PDO::PARAM_STR);}
				if (!is_null($C25)) {$storedprod->bindParam(':C25', $C25, PDO::PARAM_STR);}
				if (!is_null($C26)) {$storedprod->bindParam(':C26', $C26, PDO::PARAM_STR);}
				if (!is_null($C27)) {$storedprod->bindParam(':C27', $C27, PDO::PARAM_STR);}
				if (!is_null($C28)) {$storedprod->bindParam(':C28', $C28, PDO::PARAM_STR);}
				if (!is_null($C29)) {$storedprod->bindParam(':C29', $C29, PDO::PARAM_STR);}
				
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
			V00=:V00,
			V01=:V01,
			V02=:V02,
			V03=:V03,
			V04=:V04,
			V05=:V05,
			V06=:V06,
			V07=:V07,
			T08=:T08,
			T09=:T09,
			T10=:T10,
			I11=:I11,
			I12=:I12,
			I13=:I13,
			I14=:I14,
			I15=:I15,
			I16=:I16,
			I17=:I17,
			I18=:I18,
			D19=:D19,
			D20=:D20,
			D21=:D21,
			F22=:F22,
			F23=:F23,
			C24=:C24,
			C25=:C25,
			C26=:C26,
			C27=:C27,
			C28=:C28,
			C29=:C29
			WHERE id=:id;");   
			try {
				$storedprod->bindParam(':id', $id, PDO::PARAM_INT);		
				
				(is_null($V00)) ? $storedprod->bindParam(':V00', $V00, PDO::PARAM_NULL) : $storedprod->bindParam(':V00', $V00, PDO::PARAM_STR);
				(is_null($V01)) ? $storedprod->bindParam(':V01', $V01, PDO::PARAM_NULL) : $storedprod->bindParam(':V01', $V01, PDO::PARAM_STR);
				(is_null($V02)) ? $storedprod->bindParam(':V02', $V02, PDO::PARAM_NULL) : $storedprod->bindParam(':V02', $V02, PDO::PARAM_STR);
				(is_null($V03)) ? $storedprod->bindParam(':V03', $V03, PDO::PARAM_NULL) : $storedprod->bindParam(':V03', $V03, PDO::PARAM_STR);
				(is_null($V04)) ? $storedprod->bindParam(':V04', $V04, PDO::PARAM_NULL) : $storedprod->bindParam(':V04', $V04, PDO::PARAM_STR);
				(is_null($V05)) ? $storedprod->bindParam(':V05', $V05, PDO::PARAM_NULL) : $storedprod->bindParam(':V05', $V05, PDO::PARAM_STR);
				(is_null($V06)) ? $storedprod->bindParam(':V06', $V06, PDO::PARAM_NULL) : $storedprod->bindParam(':V06', $V06, PDO::PARAM_STR);
				(is_null($V07)) ? $storedprod->bindParam(':V07', $V07, PDO::PARAM_NULL) : $storedprod->bindParam(':V07', $V07, PDO::PARAM_STR);
				
				(is_null($T08)) ? $storedprod->bindParam(':T08', $T08, PDO::PARAM_NULL) : $storedprod->bindParam(':T08', $T08, PDO::PARAM_STR);
				(is_null($T09)) ? $storedprod->bindParam(':T09', $T09, PDO::PARAM_NULL) : $storedprod->bindParam(':T09', $T09, PDO::PARAM_STR);
				(is_null($T10)) ? $storedprod->bindParam(':T10', $T10, PDO::PARAM_NULL) : $storedprod->bindParam(':T10', $T10, PDO::PARAM_STR);
				
				(is_null($I11)) ? $storedprod->bindParam(':I11', $I11, PDO::PARAM_NULL) : $storedprod->bindParam(':I11', $I11, PDO::PARAM_INT);
				(is_null($I12)) ? $storedprod->bindParam(':I12', $I12, PDO::PARAM_NULL) : $storedprod->bindParam(':I12', $I12, PDO::PARAM_INT);
				(is_null($I13)) ? $storedprod->bindParam(':I13', $I13, PDO::PARAM_NULL) : $storedprod->bindParam(':I13', $I13, PDO::PARAM_INT);
				(is_null($I14)) ? $storedprod->bindParam(':I14', $I14, PDO::PARAM_NULL) : $storedprod->bindParam(':I14', $I14, PDO::PARAM_INT);
				(is_null($I15)) ? $storedprod->bindParam(':I15', $I15, PDO::PARAM_NULL) : $storedprod->bindParam(':I15', $I15, PDO::PARAM_INT);
				(is_null($I16)) ? $storedprod->bindParam(':I16', $I16, PDO::PARAM_NULL) : $storedprod->bindParam(':I16', $I16, PDO::PARAM_INT);
				(is_null($I17)) ? $storedprod->bindParam(':I17', $I17, PDO::PARAM_NULL) : $storedprod->bindParam(':I17', $I17, PDO::PARAM_INT);
				(is_null($I18)) ? $storedprod->bindParam(':I18', $I18, PDO::PARAM_NULL) : $storedprod->bindParam(':I18', $I18, PDO::PARAM_INT);
				
				(is_null($D19)) ? $storedprod->bindParam(':D19', $D19, PDO::PARAM_NULL) : $storedprod->bindParam(':D19', $D19, PDO::PARAM_STR);
				(is_null($D20)) ? $storedprod->bindParam(':D20', $D20, PDO::PARAM_NULL) : $storedprod->bindParam(':D20', $D20, PDO::PARAM_STR);
				(is_null($D21)) ? $storedprod->bindParam(':D21', $D21, PDO::PARAM_NULL) : $storedprod->bindParam(':D21', $D21, PDO::PARAM_STR);
				
				(is_null($F22)) ? $storedprod->bindParam(':F22', $F22, PDO::PARAM_NULL) : $storedprod->bindParam(':F22', $F22);
				(is_null($F23)) ? $storedprod->bindParam(':F23', $F23, PDO::PARAM_NULL) : $storedprod->bindParam(':F23', $F23);
				
				(is_null($C24)) ? $storedprod->bindParam(':C24', $C24, PDO::PARAM_NULL) : $storedprod->bindParam(':C24', $C24, PDO::PARAM_STR);
				(is_null($C25)) ? $storedprod->bindParam(':C25', $C25, PDO::PARAM_NULL) : $storedprod->bindParam(':C25', $C25, PDO::PARAM_STR);
				(is_null($C26)) ? $storedprod->bindParam(':C26', $C26, PDO::PARAM_NULL) : $storedprod->bindParam(':C26', $C26, PDO::PARAM_STR);
				(is_null($C27)) ? $storedprod->bindParam(':C27', $C27, PDO::PARAM_NULL) : $storedprod->bindParam(':C27', $C27, PDO::PARAM_STR);
				(is_null($C28)) ? $storedprod->bindParam(':C28', $C28, PDO::PARAM_NULL) : $storedprod->bindParam(':C28', $C28, PDO::PARAM_STR);
				(is_null($C29)) ? $storedprod->bindParam(':C29', $C29, PDO::PARAM_NULL) : $storedprod->bindParam(':C29', $C29, PDO::PARAM_STR);
				
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
					case "V00":
					case "V01":
					case "V02":
					case "V03":
					case "V04":
					case "V05":
					case "V06":
					case "V07":
					case "T08":
					case "T09":
					case "T10":
					case "D19":
					case "D20":
					case "D21":
					case "C24":
					case "C25":
					case "C26":
					case "C27":
					case "C28":
					case "C29":
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
			if (!$result) {
				return false;
			} else  {    
				return $result->fetchAll();
			}
    		} else {
    			return false;
    		}
		} else {
			return false;
		}
	}
	
	public function compQUERY ($fields_wish=array(), $where_fields=array(), $from=0,  $to=0)  {
		
		$strString="SELECT ";
		
		//fields list
		if (empty($fields_wish)) {
			$strString.=" * ";
		} else {
			foreach ($fields_wish as $item) {
				$strString.=$item.",";
			}
			$strString=rtrim($strString,',');
		}
		$strString.=" FROM ".$this->table." WHERE ";
		
		//WHERE conditions
		if (empty($where_fields)) {
		    $strString.="1=1 ";
		} else {
		    foreach ($where_fields as $key => $value) {
				$filter_value=filter_var($value, FILTER_SANITIZE_SPECIAL_CHARS);
		        $strString.=$key."='".$filter_value."' AND ";
		    }
		    $strString=rtrim($strString,'AND ');
		}
		
		//LIMIT conditions
		$to_filter=filter_var($to,FILTER_SANITIZE_NUMBER_INT);
		$from_filter=filter_var($from,FILTER_SANITIZE_NUMBER_INT);
		if ($to_filter<>0) {
			$strString.=" LIMIT ".$from_filter.",".$to_filter;
			return $this->querySTR($strString);
		} else {
			return $this->querySTR($strString);
		}
	}
}    
?>
