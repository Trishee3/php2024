<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/addProduct_style.css">
</head>
<body>
    <form action="../actions/admin_action.php" method="post">
        <label>Category</label><br>
            <select name="category" placeholder="Choose Category">
            <option><b>Select Category</b></option>
                <option value = "phone case">Phone Case</option>
                <option value = "earpods">Earpods</option>
                <option value = "others">Others</option>
            </select><br>
            <label>Product Name</label><br>
            <input type="text" name="product_name" id="product_name" placeholder="Enter Product Name"...> <br> 

            <label>Product Description:</label><br>
            <textarea id="product_description" name="product_description" placeholder="Enter product Description..." rows="3" maxlength="90"></textarea><br>

            <label>Enter Product Color</label><br>
            <textarea id=" product_color" name="product_color" rows="5" placeholder="Enter Color"></textarea><br>

            <label>Price</label><br>
            <input type="number" name="product_price" id="product_price"><br>

            <label>Status</label><br>
            <select name="product_status">
                <option value = "InStock">In Stock</option>
                <option value = "OutStock">Out Stock</option>
            </select><br>

            <button type="submit" name="add_product" id ="add_product">Next</button>
            <button type="reset">cancel</button>
    </form>

    <script>
        const textarea = document.getElementById('product_description');

            textarea.addEventListener('input', function() {
                let value = textarea.value;
                let formattedText = '';
                
                // Split text into lines of 30 characters
                while (value.length > 30) {
                    formattedText += value.slice(0, 30) + '\n';
                    value = value.slice(30);
                }
                formattedText += value;

                textarea.value = formattedText;
            });
    </script>
</body>
</html>