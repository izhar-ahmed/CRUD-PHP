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

   $name = $_GET['name'];
   

   $editPeopleSelect = "SELECT * FROM tSample WHERE firstname = '".$name."' ";

   $editPeopleSelectQuery = mysqli_query($dbConnect, $editPeopleSelect);

   $row = mysqli_fetch_array($editPeopleSelectQuery, MYSQLI_ASSOC);
       $firstName = $row['firstname'];
       $lastName = $row['lastname'];
   

   echo '<h2>Edit Form</h2>

    <form action="updatePeople.php" method="POST"> First name:

        <input type="text" name="firstname" value="'.$firstName.'"> <br> Last name:
 
        <input type="text" name="lastname" value="'.$lastName.'"> 

        

        <input type="submit" value="Update">

    </form> ';

    
  

}

?>