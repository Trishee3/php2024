<?php
 include_once "../classes/admin_class.php";
 session_start();
     $admin = new Admin;
     if (isset($_POST['add_product'])) {
        $product_name = $_POST['product_name'];
        $product_description = $_POST['product_description'];
        $product_color = $_POST['product_color'];
        $product_price = $_POST['product_price'];
        $category = $_POST['category'];
        $product_status = $_POST['product_status'];
    
        // Add the product and get the newly inserted product_id
        $product_id = $admin->addProduct($product_name, $product_description, $product_color, $product_price, $category, $product_status);
        
        // Redirect to the image upload form, passing the product_id in the URL
        header("Location: ../views/product_img.php?product_id=$product_id");
        exit;
    }
       
 
    
    if (isset($_POST['add_img'])) {
        // Retrieve the product_id from the form
        $product_id = $_POST['product_id'];
    
        // Automatically set the target directory based on the product ID or other conditions
        $target_dir = "../assets/img/product_$product_id/";
    
        // Create the directory if it doesn't exist
        if (!is_dir($target_dir)) {
            mkdir($target_dir, 0777, true); // Create directory with write permissions
        }
    
        // Prepare the full file paths
        $file_paths = [
            'main_picture' => $target_dir . basename($_FILES['main_picture']['name']),
            'sub_pic1' => $target_dir . basename($_FILES['sub_pic1']['name']),
            'sub_pic2' => $target_dir . basename($_FILES['sub_pic2']['name']),
            'sub_pic3' => $target_dir . basename($_FILES['sub_pic3']['name']),
            'sub_pic4' => $target_dir . basename($_FILES['sub_pic4']['name']),
        ];
    
        // Move the uploaded files to the target directory
        foreach ($file_paths as $field => $path) {
            if (isset($_FILES[$field]) && $_FILES[$field]['error'] === 0) {
                if (move_uploaded_file($_FILES[$field]['tmp_name'], $path)) {
                    // Successfully uploaded
                } else {
                    echo "Error uploading file: " . $_FILES[$field]['name'];
                    exit;
                }
            } elseif ($_FILES[$field]['error'] != 4) { // 4 means no file was uploaded
                echo "Error uploading file: " . $_FILES[$field]['name'];
                exit;
            }
        }
    
        // Save the paths into the database
        $admin->addProductImg(
            $file_paths['main_picture'],
            $file_paths['sub_pic1'],
            $file_paths['sub_pic2'],
            $file_paths['sub_pic3'],
            $file_paths['sub_pic4'],
            $product_id
        );
    }
    