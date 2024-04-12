<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Image Upload</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" >

</head>
<body>
    <form action="create.php" method="post" enctype="multipart/form-data">
        <div class="form-group mt-2">
            
        <label for="product_name">Land Name:</label>
        <input type="text" name="name" required>
        </div>

        <div class="form-group mt-2">
        <label for="product_name">Land Location:</label>
        <input type="text" name="location" required>

        </div>

        

        <div class="form-group mt-2">
        <label for="product_name">Land Price:</label>
        <input type="text" name="price" required>

        </div>

       

        <div class="form-group mt-2">
        <label for="product_name">Land Size:</label>
        <input type="text" name="size" required>

        </div>

        

        <div class="form-group mt-2">
        <label for="product_description">Product Description:</label>
        <textarea name="description" required></textarea>

        </div>
        
        <div class="form-group mt-2">
            <label> Water</label>
            <select name="water" class="form-select">
                <option value="available">Available</option>
                <option value="unavailable">Unavailable</option>
            </select>

        </div>

        <div class="form-group mt-2">
            <label> Electricity</label>
            <select name="electricity" class="form-select">
                <option value="available">Available</option>
                <option value="unavailable">Unavailable</option>
            </select>

        </div>
       

        <div class="form-group mt-2">

        <label> Image 1</label>
        <input type="file" class="form-control" name="image1" id="image1" placeholder="Image 1" required>

        </div>

        <div class="form-group mt-2">

        <label> Image 2</label>
        <input type="file" class="form-control" name="image2" id="image2" placeholder="Image 2" required>

        </div>

        <div class="form-group mt-2">

        <label> Image 3</label>
        <input type="file" class="form-control" name="image3" id="image3" placeholder="Image 3" required>

        </div>

        <div class="form-group mt-2">

        <label> Image 4</label>
        <input type="file" class="form-control" name="image4" id="image4" placeholder="Image 4" required>

        </div>

        <div class="form-group mt-2">

        <label> Image 5</label>
        <input type="file" class="form-control" name="image5" id="image5" placeholder="Image 5" required>

        </div>

        <div class="form-group mt-2">

<label> Map Link:</label>
<input type="text" class="form-control" name="map" id="map" placeholder="Map" required>

</div>
        

        <div class="form-group mt-3">

        <button type="submit" name="create_land">Upload Land</button>

        </div>
        
        
        
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="js/scripts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <script src="assets/demo/chart-area-demo.js"></script>
    <script src="assets/demo/chart-bar-demo.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
    <script src="js/datatables-simple-demo.js"></script>

</body>
</html>
