<?php

require_once "../php/connection.php";


$stmt = $conn ->prepare("SELECT * FROM  lands");


$stmt->execute();


$land =$stmt->get_result();


