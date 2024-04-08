<?php

require_once "../php/connection.php";



if (isset($_POST['upload'])) {
    $product_name = $_POST['product_name'];
    $product_description = $_POST['product_description'];

    $uploadDirectory = "product_images/"; // Directory to store uploaded images

    // Insert product details into the database
    $sql = "INSERT INTO products (product_name, product_description) VALUES ('$product_name', '$product_description')";
    $conn->query($sql);

    // Get the ID of the last inserted product
    $product_id = $conn->insert_id;

    // Loop through each uploaded file
    foreach ($_FILES['product_images']['tmp_name'] as $key => $tmp_name) {
        $file_name = $_FILES['product_images']['name'][$key];
        $file_size = $_FILES['product_images']['size'][$key];
        $file_tmp = $_FILES['product_images']['tmp_name'][$key];
        $file_type = $_FILES['product_images']['type'][$key];

        // Check if file is an image
        if (exif_imagetype($file_tmp)) {
            $target_path = $uploadDirectory . $file_name;

            // Move the uploaded file to the specified directory
            move_uploaded_file($file_tmp, $target_path);

            // Insert file details into the database
            $sql = "INSERT INTO product_images (product_id, file_name, file_size, file_type) VALUES ('$product_id', '$file_name', $file_size, '$file_type')";
            $conn->query($sql);
        } else {
            echo "Invalid file format. Only images are allowed.";
        }
    }

    echo "Product and images uploaded successfully!";
}

// Close connection when done
$conn->close();
?>