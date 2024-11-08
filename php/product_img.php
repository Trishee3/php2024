<?php
    session_start();
    $product_id = isset($_GET['product_id']) ? $_GET['product_id'] : null;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="../actions/admin_action.php" method="post" enctype="multipart/form-data">
    <input type="hidden" name="product_id" value="<?php echo $product_id; ?>">

    <label>Main Image</label><br>
    <input type="file" name="main_picture" id="main_picture"><br>
    
    <label>Sub pic1</label><br>
    <input type="file" name="sub_pic1" id="sub_pic1"><br>
    
    <label>Sub pic2</label><br>
    <input type="file" name="sub_pic2" id="sub_pic2"><br>
    
    <label>Sub pic3</label><br>
    <input type="file" name="sub_pic3" id="sub_pic3"><br>
    
    <label>Sub pic4</label><br>
    <input type="file" name="sub_pic4" id="sub_pic4"><br>
    
    <button type="submit" name="add_img" id="add_img">Add Product</button>
    <button type="reset" href="add_product.php">Cancel</button>
</form>

</body>
</html>