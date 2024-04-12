<?php

include('../php/connection.php');

if(isset($_GET['id'])){

  $id = $_GET['id'];
  $stmt = $conn->prepare("SELECT * FROM land WHERE id = ?");
  $stmt->bind_param("s", $id);
  $stmt->execute();
  $land = $stmt->get_result();

}else{
  // header('location: index.php');
  echo "There is an error";
}





?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Equitar Land Hub</title>

    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" >

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=EB+Garamond:ital,wght@0,400;1,600&display=swap" rel="stylesheet">
    <!-- End of Fonts -->

    <!-- FontAwesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- End of Font Awesome -->

    <!-- Links -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
    <link href="/dist/output.css" rel="stylesheet">
    <!-- default css -->
    <link rel="stylesheet" href="../css/single.css">
    <link rel="stylesheet" href="../css/index.css">
    
    <!-- Box Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <!-- End of Icons -->

    <!-- FontAwesome Css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- End of Links -->
</head>

<body>

    <section class="container single-product my-5 pt-5">
        <div class="row mt-5 my-5">
           <?php while($row = $land->fetch_assoc()) { ?>
        <div class="col-lg-5 col-md-6 col-sm-12">
            <img  class="img-fluid w-100 pb-1" src="<?php echo "../images/img/".$row['image1'];?>" width="100%" height="200px" padding="40px">
            <div class="small-img-group">
                <div class="small-img-col">
                    <img src="<?php echo "../images/img/".$row['image2'];?>" width="100%" height="100px" class="small-img"/>
                </div>

                <div class="small-img-col">
                    <img src="<?php echo "../images/img/".$row['image3'];?>" width="100%" height="100px" class="small-img"/>
                </div>
                <div class="small-img-col">
                    <img src="<?php echo "../images/img/".$row['image4'];?>" width="100%" height="100px" class="small-img"/>
                </div>
                <div class="small-img-col">
                    <img src="<?php echo "../images/img/".$row['image5'];?>" width="100%" height="100px" class="small-img"/>
                </div>
                
            </div>

           <div class="description">
            <h5>Description</h5>
            <span><?php echo $row['land_description'];?></span>
           </div>
        </div> 

        <div class="col-lg-6 col-md-12 col-12 ">
            <h6 class="text-right">Land Details</h6>

            <table class="table table-bordered mt-3 my-5">
                <tbody>
                  <tr>
                    <th scope="row">Price :</th>
                    <td><?php echo "Ksh: ", $row['land_price'];?></td>
                  </tr>
                  <tr>
                    <th scope="row">Location :</th>
                    <td><?php echo $row['land_location'];?></td>
                  </tr>
                  <tr>
                    <th scope="row">Size :</th>
                    <td><?php echo  $row['land_size'];?></td>
                  </tr>

                  <tr>
                    <th scope="row">Water :</th>
                    <td><?php echo  $row['land_water'];?></td>
                  </tr>

                  <tr>
                    <th scope="row">Electricity :</th>
                    <td><?php echo  $row['land_electricity'];?></td>
                  </tr>

                  <tr>
                  <th scope="row">Map:</th>
                    <td><iframe src="<?php echo $row['map_link'];?>" ></iframe></td>
                  </tr>
                 
                </tbody>
              </table>
        </div>

        <?php } ?>
            
        </div>

    </section>

    <section class="featured">
      <h6>Featured Land</h6>
         
    </section>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="js/scripts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <script src="assets/demo/chart-area-demo.js"></script>
    <script src="assets/demo/chart-bar-demo.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
    <script src="js/datatables-simple-demo.js"></script>

    </body>