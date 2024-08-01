<?php include "index.php"
?>
<?php
$username=$_POST['username'];
$password=$_POST['password'];
$username=$_POST['username'];
$password=$_POST['password'];
$conn =new mysqli('localhost','root','','creating form');
if($conn->connect_error){
    die('connection falied:'.$conn->connect_error);
}
else{
    $stmt=$conn->prepare("insert into INFORMATION(username,password)values(?,?)");
    $stmt->bind_param("ss",$username,$password);
    $stmt->execute();
    echo '<script type="text/javascript"> window. onload = function ()
     { alert(" Log in successfully"); } </script>';
    $stmt->close();
    $conn->close();
}
?>