<?php
$severname = "localhost";
$username = "root";
$password = "";
$dbname = "todo_list_db";
$conn = new mysqli ($severname,$username,$password,$dbname);
if($conn->connect_error){
    die("Erro na conexão:".$conn->connect_error);

}
?>