<?php
session_start();
?>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "qlbanhang";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


$sql = "select fullname, email from customers where email = '".$_POST["email"]."' and password = '".md5($_POST["pass"])."'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
 
  $row = $result->fetch_assoc();
  
  $_SESSION["id"] = "user";
  $_SESSION["fullname"] = "email";
  echo " user is " . $_SESSION["id"] . ".<br>";
  echo "Favorite name is " . $_SESSION["fullname"] . ".";
  
  header('Location: homepage.php');
  
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
  //Tro ve trang dang nhap sau 3 giay
  header('Refresh: 3;url=login.php');

}

$conn->close();
?>
