<?php 

include('../php/connection.php');

if(isset($_GET['id'])){
    $id=$_GET['id'];
    $stmt = $conn->prepare("DELETE FROM land WHERE id=?");
    $stmt->bind_param('s', $id);
    $stmt->execute();
}





?>