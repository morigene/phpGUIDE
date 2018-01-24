<?php
/* =========  Include DB setup =============== */
require 'config.php';

try{
	// Create database record into table.
$con = new pdo(db_host,db_user , db_pwd);
$con->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

$con->beginTransaction();
$con->exec('INSERT INTO students (Id, Name, Department) VALUES ( "","Murego", "Water Engineering")');
$con->exec('INSERT INTO students (Id, Name, Department) VALUES ("", "Munkundire","Agribusiness")'); 
$con->exec('INSERT INTO students (Id, Name, Department) VALUES ("", "Mujyambere", " Mechanical")');
$con->commit();
echo 'recorded successful';

}catch(PDOEXCEPTION $e){

   $con->rollback();
   echo 'Error '.$e->getMessage();
}
$con = null;
try{
 // ================= Retrieve data from database table =======================
	$con = new pdo("mysql:host=$db_host;dbname=$db_name",$db_user, $db_pwd);
	$con->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
	$con->beginTransaction();
    $stmt = $con->query('SELECT * FROM students');
    while($rows = $stmt->fetch(PDO::FETCH_ASSOC)){
    	echo $rows['Name'] .' '.$rows['Department'] . "<br>";
    }

 $con->exec('UPDATE students SET Name = "MUTUYIMANA " WHERE Id IN (2, 4,8,15)');
 $con->commit();
}catch(PDOException $e){
  $con->rollback();
  echo 'error'.$e->getMessage();
}
$con = null;

/*

 ===================== WONDERFULL GAME ===============================

 >>>>>> CODE USING PreparedStatement.
*/
try{

	$con = new PDO("mysql:host=$db_host;dbname=$db_name",$db_user,$db_pwd);
	//$con = new pdo("mysql:host=$db_host;dbname=$db_name",$db_user, $db_pwd);
	$con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	$con->beginTransaction();
	$stmt = $con->prepare('INSERT INTO class (Name,Department, Teacher) VALUES (:Name,:Department, :Teacher)' ) ;
	$stmt->bindParam(':Name', $name);
	$stmt->bindParam(':Department', $department);
	$stmt->bindParam(':Teacher',$teacher);

	// ===== Insert row one ===========
	$name = ' Level 1';
	$department = 'Computer Science';
	$teacher    = 'KABERUKA Joseph';
	$stmt->execute();
    // ===== Insert into another row
    $name = ' Level 2';
	$department = 'Water and Environment Engineering';
	$teacher    = 'MAJORO Elidephonse';
	$stmt->execute();
	// ======= Insert into another row
	$name = ' Level 2';
	$department = 'Computer Engineering';
	$teacher    = 'HITIMANA Eric';
    $stmt->execute();
    $con->commit();
  

}catch(PDOException $e){
	echo 'error'.$e->getMessage();
}
$con = null;

try{

   $con = new PDO("mysql:host=$db_host;dbname=$db_name",$db_user,$db_pwd);
   $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

   $con->beginTransaction();
   // ===== Retrive Record from Database ============
   $stmt = $con->query('SELECT * FROM class');

   while($rows = $stmt->fetch()){

     echo $rows['Name'];
   }

//  ====== Update a Record ================= 
   $update = $con->prepare( "UPDATE class SET Department=:department WHERE Id=:id");
   $update->bindParam(':department', $department);
   $update->bindParam(':id', $id);
   /*
   OR execute($id,$_POST['department']);
  
   */
   
   $department = 'Computer and Software Engineering';
   $id = 3;
   $update->execute();
   $con->commit();


}catch(PDOException $e){

   echo 'error' . $e->getMessage();
}
$con = null;
?>