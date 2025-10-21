<?php
$severname = "localhost";
$username = "root";
$password = "";
$dbname = "todo_list_db";
$conn = new mysqli ($servername,$usename,$password,$dbname);
if($conn->connect_erro){
    die("Erro na conexão:".$conn->connect_error);

}
?>