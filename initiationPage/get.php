<?php
session_start();
echo $_SESSION['username'];

if(isset($_GET['firstname']) && isset($_GET['lastname']) && isset($_GET['year'])){


}

?>

<form action = "get.php" method="GET">
	Firstname:
<input type = "text" name ="firstname"> <br>
 <br>
 <br>
  Lastname:
 <input type="text" name="lastname">
 <br>
 <br>
Year:
 <input type="text" name = "year">
 <br>
 <br>

 <input type = "submit" value ="save">

</form>