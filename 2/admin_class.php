<?php

require_once "database.php";

class Admin extends database{
    public function addProduct($product_name, $product_description, $product_color, $product_price, $category, $product_status) {
        $sql = "INSERT INTO product (product_name, product_description, product_color, product_price, Category, product_status)
                VALUES ('$product_name', '$product_description', '$product_color', '$product_price', '$category', '$product_status')";
    
        if ($this->conn->query($sql)) {
            // Get the last inserted product ID
            $product_id = $this->conn->insert_id;
            return $product_id;
        } else {
            die("Error in Adding: " . $this->conn->error);
        }
    }
  public function addProductImg($main_pic_path, $sub_pic1_path, $sub_pic2_path, $sub_pic3_path, $sub_pic4_path, $product_id) {
    // SQL query to insert into product_img table with product_id as a foreign key
    $sql = "INSERT INTO product_img (main_picture, sub_pic1, sub_pic2, sub_pic3, sub_pic4, product_id)
            VALUES ('$main_pic_path', '$sub_pic1_path', '$sub_pic2_path', '$sub_pic3_path', '$sub_pic4_path', '$product_id')";

    if ($this->conn->query($sql)) {
        header("location: ../views/product_img.php");
        exit;
    } else {
        die("Error in Adding: " . $this->conn->error);
    }
}
    public function displayProductByCategory($category){
        $sql = "SELECT * FROM product WHERE Category= '$category'";
        $items = array();

        if($result = $this->conn->query($sql)){
            while($item = $result->fetch_assoc()){
                $items[] = $item;
            }
            return $items;
            die("error in Retrieving product :".$this->conn->error);
        }
}   

}