<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    
    <title>Table Record</title>
    <style>
table, th, td {
  border: 1px solid black;
  padding: 5px;
}
table {
  border-spacing: 15px;
  
}
table.center {
    margin-left:auto; 
    margin-right:auto;
  }
</style>
</head>
<body>
<?php

$hostname = "localhost";
$username = "root";
$password = "";
$database = "sample";

$dbConnect = mysqli_connect($hostname, $username, $password, $database);
$dbSelect = mysqli_select_db($dbConnect, $database);

if($dbConnect){
//echo "Connection Successfull...";
    // if($dbSelect){
    //     echo "Database selected..";
    // } else {
    //   echo "Database Selection Failed...";
    // }
}else {
    echo "Connection Failed...";
}

if($dbConnect) {

   $showPeopleSelect = "SELECT * FROM tSample";

   $showPeopleSelectQuery = mysqli_query($dbConnect, $showPeopleSelect);

   echo '<table class="center" border=1>';
   echo "<tr>";

    echo "<td>FirstName</td>"; 
    echo "<td>LastName</td>"; 
    echo '<td colspan="2">Action</td>'; 


   echo "</tr>";

   while($row = mysqli_fetch_array($showPeopleSelectQuery, MYSQLI_ASSOC)){

    $firstName = $row['firstname'];
    $lastName = $row['lastname'];
     
      echo '<tr>';
      echo "<td>".$firstName."</td>"; 
      echo "<td>".$lastName."</td>"; 
      echo "<td><a href='editPeople.php?name=$firstName'>Edit</a></td>";
      echo "<td><a href='deletePeople.php?name=$firstName'>Delete</a></td>";
      echo "</tr>";

   }

    echo "</table>";

    echo '<a href="1.html" style="text-align:center"><h4>Insert People</h4></a> <br />';

}

?>

</body>
</html>