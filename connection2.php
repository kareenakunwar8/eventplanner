<?php include "index.php"
?>
<?php
$email=$_POST['email'];
$username=$_POST['username'];
$password=$_POST['password'];
$conn =new mysqli('localhost','root','','creating form');
if($conn->connect_error){
    die('connection falied:'.$conn->connect_error);
}
else{
    $stmt=$conn->prepare("insert into register(username,password,email)values(?,?,?)");
    $stmt->bind_param("sss",$username,$password,$email);
    $stmt->execute();
    echo '<script type="text/javascript"> window. onload = function ()
     { alert(" register in successfully"); } </script>';
    $stmt->close();
    $conn->close();
}   
?>