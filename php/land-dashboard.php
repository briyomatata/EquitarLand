<?php

include('../php/connection.php');

$stmt = $conn->prepare("SELECT * FROM land");
$stmt->execute();
$lands = $stmt->get_result();



?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Land Dashboard</title>
        <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" >
   <!-- Box Icons -->
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <!-- End of Icons -->

    <!-- FontAwesome Css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- End of Links -->
</head>
<body>

<section class="container-fluid">
    <div class="row" style="min-height:1000px">
    

    <h2 class="text-center">Land Details</h2>
    <div class="table-responsive">

    <table class="table table-stripped table-sm">
        <thead>
            <tr>
                <th scope="col">Land Id</th>
                <th scope="col">Land Image</th>
                <th scope="col">Land Name</th>
                <th scope="col">Land Price</th>
                <th scope="col">Land Size</th>
                <th scope="col">Land Water</th>
                <th scope="col">Land Electricity</th>
                <th scope="col">Land Description</th>
                <th scope="col">Edit</th>
                <th scope="col">Delete</th>
            </tr>
        </thead>

        <tbody>

        <?php foreach($lands as $land){?>
        <tr>
            <td><?php echo $land['id'];?></td>
            <td> <img src="<?php echo "../images/img/".$land['image1'];?>" style="width: 70px; height:70px"></td>
            <td> <?php echo $land['land_name'];?></td>
            <td> <?php echo "Ksh: ", $land['land_price'];?></td>
            <td> <?php echo $land['land_size'];?></td>
            <td> <?php echo $land['land_water'];?></td>
            <td> <?php echo $land['land_electricity'];?></td>
            <td> <?php echo $land['land_description'];?></td>

            <td> <a class="btn btn-primary" href="edit-land.php?id=<?php echo $land['id'];?>">Edit</a> </td>
            <td> <a class="btn btn-danger" href="delete-land.php?id=<?php echo $land['id'];?>">Delete</a> </td>
        </tr>

        <?php }?>
        </tbody>

    </table>

    </div>
    </div>
</section>
    




<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="js/scripts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <script src="assets/demo/chart-area-demo.js"></script>
    <script src="assets/demo/chart-bar-demo.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
    <script src="js/datatables-simple-demo.js"></script>
</body>
</html>