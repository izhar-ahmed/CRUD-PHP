<!-- //this is upadate file -->
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

    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];

    
    $sql = "UPDATE tsample SET firstname = '".$firstname."', lastname ='".$lastname."' WHERE firstname = '".$firstname."' ";

    $sqlUpdate = mysqli_query($dbConnect, $sql);

    if($sqlUpdate){
        echo "Data Update Successfully";
        //&emsp;
        echo '<a href="1.html"><h4>Insert People</h4></a> <br />';
        echo '<a href="showPeople.php"><h4>Show List Of People</h4></a> <br />';
    } else {
        echo "Data Update Failed.";
    }



}


?>

