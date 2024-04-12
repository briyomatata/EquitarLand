<?php

include('../php/connection.php');

if($_GET['id']){
$land_id= $_GET['id'];
$stmt = $conn->prepare("SELECT * FROM land WHERE id=?");
$stmt->bind_param('s',$land_id);
$stmt->execute();
$lands = $stmt->get_result();

}else if(isset($_POST['edit'])){

    $id = $_POST['id'];
    $name = $_POST['name'];
    $price = $_POST['price'];
    $location = $_POST['location'];
    $size = $_POST['size'];
    $water = $_POST['water'];
    $electricity = $_POST['electricity'];
    $description = $_POST['description'];

    $stmt = $conn->prepare("UPDATE land SET land_name=?, land_price=?, land_location=?, land_size=?, land_water=?, land_electricity=?, land_description=? WHERE id=?");
    $stmt->bind_param('ssssssss', $name,$price,$location,$size,$water,$electricity,$description,$id);

    if($stmt->execute()){
        header('location:land-dashboard.php');
    }else{
        header('location:dashboard.php');
    }
    
    
}else
{
    header('land-dashboard.php');
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Details</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" >
</head>
<body>


<div class="container-fluid mt-5">
<div class="row">


<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3">
<h2>Edit Land Details</h2>
<div class="table-responsive">

<div class="nx-auto container">
<form id="edit-form" action="edit-land.php" method="post" enctype="multipart/form-data">

<div class="form-group mt-2">
    
<?php foreach($lands as $land){ ?>


        <label for="product_id">Land ID:</label>
        <input type="text" name="id" value="<?php echo $land['id']?>" required>
        </div>


        <div class="form-group mt-2">
            
        <label for="product_name">Land Name:</label>
        <input type="text" name="name" value="<?php echo $land['land_name']?>" required>
        </div>

        <div class="form-group mt-2">
        <label for="product_name">Land Location:</label>
        <input type="text" name="location" value="<?php echo $land['land_location']?>" required>

        </div>

        

        <div class="form-group mt-2">
        <label for="product_name">Land Price:</label>
        <input type="text" name="price" value="<?php echo $land['land_price']?>" required>

        </div>

       

        <div class="form-group mt-2">
        <label for="product_name">Land Size:</label>
        <input type="text" name="size" value="<?php echo $land['land_size']?>" required>

        </div>

        

        <div class="form-group mt-2">
        <label for="product_description">Land Description:</label>
        <input type="text" class="form-control" name="description" value="<?php echo $land['land_description']?>" required>

        </div>
        
        <div class="form-group mt-2">
            <label> Water</label>
            <select name="water" class="form-select">
                <option value="Available">Available</option>
                <option value="Unavailable">Unavailable</option>
            </select>

        </div>

        <div class="form-group mt-2">
            <label> Electricity</label>
            <select name="electricity" class="form-select">
                <option value="Available">Available</option>
                <option value="Unavailable">Unavailable</option>
            </select>

        </div>

        <?php } ?>
        

        <div class="form-group mt-3">

        <button type="submit" name="edit">Edit</button>

        </div>
        
        
        
    </form>

</div>

</div>



</div>


</div>
</body>
</html>


