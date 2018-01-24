<?php
$db_name = 'postgres';
$db_host ='127.0.0.1';
$db_user = 'postgres';
$db_pwd= 'morigene@123';
$connection_string = "host=localhost port=5432 dbname=mydb user=postgres password=morigene@123";
$con = pg_connect($connection_string);
if (!$con) {
	# code...
	echo 'Database is not connected';

} else {
	# code...
	echo "Database successful connected";

//==============   Code to create table in postgresql ===============

#	$sql=<<<EOF
#	CREATE TABLE test(
#   Id serial primary key not null,
#   Name text not null,
#    Category text not null
#	);
#EOF;
# $result = pg_query($con,$sql);


}
/*
$insert = <<<EOF
INSERT INTO test (Id, Name, Category) VALUES (1,'Origene',  'A ');
INSERT INTO test (Id, Name, Category) VALUES (2,'Mike',  'A ');
INSERT INTO test (Id, Name, Category) VALUES (3,'Paul',  'A ');
EOF;*/
//pg_query($con,$insert);

// Retrieve record from category
$retrieve = <<<EOF
SELECT * FROM test
EOF;
$result = pg_query($con, $retrieve);
while($rows = pg_fetch_assoc($result)){

 echo "id " .$rows['id']. " <br>";
 echo "Name " .$rows['name']. "<br>";
}

//UPDTE TABLE =================
$update = <<<EOF
UPDATE test SET category = 'A' WHERE id = 3 
EOF;
pg_query($con, $update);

//DELETE A RECORD FROM TABLE

$delete = " DELETE FROM test WHERE ID = 4 ";

pg_query($con, $delete);

if(!$delete){
 
 echo 'not successful deleted';
 exit;
}else{

	echo 'successful deleted';
}


?>