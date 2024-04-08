<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Image Upload</title>
</head>
<body>
    <form action="upload.php" method="post" enctype="multipart/form-data">
        <label for="product_name">Land Name:</label>
        <input type="text" name="product_name" required>

        <label for="product_name">Land Status:</label>
        <input type="text" name="product_status" required>

        <label for="product_name">Land Price:</label>
        <input type="number" name="product_price" required>

        <label for="product_name">Land Size:</label>
        <input type="number" name="product_size" required>
        
        <label for="product_description">Product Description:</label>
        <textarea name="product_description" required></textarea>
        
        <label for="product_images">Product Images:</label>
        <input type="file" name="product_images[]" multiple accept="image/*" required>
        
        <button type="submit" name="upload">Upload Product</button>
    </form>
</body>
</html>
