<?php

include('../php/connection.php');

if(isset($_POST['create_land'])){
    $land_name=$_POST['name'];
    $land_location=$_POST['location'];
    $land_size=$_POST['size'];
    $land_price=$_POST['price'];
    $land_water=$_POST['water'];
    $land_electricty=$_POST['electricity'];
    $land_description=$_POST['description'];
    $map_link=$_POST['map'];

    $image1 = $_FILES['image1']['tmp_name'];
    $image2 = $_FILES['image2']['tmp_name'];
    $image3 = $_FILES['image3']['tmp_name'];
    $image4 = $_FILES['image4']['tmp_name'];
    $image5 = $_FILES['image5']['tmp_name'];
    $file_name = $_FILES['image1']['name'];

    $image_name1 = $land_name."1.jpeg";
    $image_name2 = $land_name."2.jpeg";
    $image_name3 = $land_name."3.jpeg";
    $image_name4 = $land_name."4.jpeg";
    $image_name5 = $land_name."5.jpeg";


    //upload images
    move_uploaded_file($image1, "../images/img/".$image_name1);
    move_uploaded_file($image2, "../images/img/".$image_name2);
    move_uploaded_file($image3, "../images/img/".$image_name3);
    move_uploaded_file($image4, "../images/img/".$image_name4);
    move_uploaded_file($image5, "../images/img/".$image_name5);


    //create land details

    $stmt = $conn->prepare("INSERT INTO land (land_name,land_price,land_location,land_size,land_water,land_electricity,land_description,image1,image2,image3,image4,image5,map_link) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?)");

    $stmt->bind_param('sssssssssssss', $land_name,$land_price,$land_location,$land_size,$land_water,$land_electricty,$land_description,$image_name1,$image_name2,$image_name3,$image_name4,$image_name5,$map_link);

    if($stmt->execute()){
        echo "Land Details Uploaded";
    }else{
        echo "Land Details Failed To Upload";
    }
}



?>