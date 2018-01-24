<?php 

// include database setup file
require 'config.php';

// ------------------------  create connection to database with mysqli -----------------------
if($con->connect_error){

	echo 'error in connecting';

}else{

	/* --------- create table -------------------- */

$sql_table = 'CREATE TABLE IF NOT EXISTS students (
 Id int not null auto_increment,
 Name varchar(20) not null,
 Department varchar(20) not null,
 PRIMARY KEY(Id)
)';
if ($con->query($sql_table)) {
	# code...
	echo 'table is successful created '."<br>";
}else{

	echo ' table is not successful created' ."<br>";
}
  
}

/*----- Insert values  or create record into database table with sql single statement  - */

  $sql = "INSERT INTO students (Id,Name,Department) values('','origene','Computer Engineering')";
   $con->query($sql);

/* ------------- Retrieve record from database table  with mysqli -------------------- */
  $select_sql = 'select * from students';
  $result = $con->query($select_sql);
 
  if ($result->num_rows > 0 ){
  	# code...
  	while($rows = $result->fetch_assoc()){

  		echo ' '.$rows['Id'] . "  ".$rows['Name']. "  ".$rows['Department'] . "<br>";
  	}
  }
/* ----------- insert records into database table using prepared statements ----------------*/

$stmt = $con->prepare('INSERT INTO students (Name, Department ) VALUES (  ? , ? )');
$stmt->bind_param('ss', $Name,$Department);
//$stmt->bind_param("sss", $firstname, $lastname, $email);

$Name = 'Placide';
$Department = 'Electronic and Telecommunication';
$stmt->execute();
echo 'New record created successful';
$stmt->close();
$con->close();
 ?>