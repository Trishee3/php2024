<?php
require_once "database.php";

class Customer extends database{
    public function displayProductByCategoryCustomer($category) {
        $sql = "SELECT p.*, pi.main_picture 
                FROM product p 
                LEFT JOIN product_img pi ON p.product_id = pi.product_id 
                WHERE p.Category = '$category'";
        
        $items = array();
        if ($result = $this->conn->query($sql)) {
            while ($item = $result->fetch_assoc()) {
                $items[] = $item;
            }
            return $items;
        } else {
            die("Error in Retrieving product: " . $this->conn->error);
        }
    }
    
    public function displayProductDetails($product_id){
                $sql = "SELECT p.*, pi.main_picture, pi.sub_pic1, pi.sub_pic2, pi.sub_pic3, pi.sub_pic4
                FROM product p 
                INNER JOIN product_img pi ON p.product_id = pi.product_id 
                WHERE p.product_id = '$product_id'";

                $result = $this->conn->query($sql);
                    
                if ($result) {
                    return $result->fetch_assoc(); // Fetch and return product details
                } else {
                    die("Error fetching product details: " . $this->conn->error);
                }
    }
    public function addCustomer($fullname, $contact, $address,  $quantity_id) {
        $sql = "INSERT INTO p_order (fullname, contact, address, quantity_id)
                VALUES ('$fullname', '$contact', '$address', '$quantity_id')";
    
        if ($this->conn->query($sql)) {
            $order_id = $this->conn->insert_id;
            return $order_id;
        } else {
            die("Error in Adding: " . $this->conn->error);
        }
    }
    public function addQuantity($quantity, $product_id) {
        $sql = "INSERT INTO quantity (quantity, product_id)
                VALUES ('$quantity', '$product_id')";
   
        if ($this->conn->query($sql)) {
           $quantity_id = $this->conn->insert_id;
           return $quantity_id;
            exit;
        } else {
            die("Error in Adding: " . $this->conn->error);
        }
    }
    public function addPaymentMethod($payment, $proof, $order_id){
        $sql = "INSERT INTO payment_method (payment_method, proof, order_id)
        VALUES ('$payment', '$proof', '$order_id')";

        if ($this->conn->query($sql)) {
        $payment_id = $this->conn->insert_id;
        return $payment_id;
            exit;
        } else {
            die("Error in Adding: " . $this->conn->error);
        }
        
    }
    public function addPhoneCaseOrder($fullname, $downpayment, $proof, $quantity_id){
        $sql = "INSERT INTO reservation (fullname, downpayment, proof, quantity_id)
        VALUES ('$fullname', '$downpayment', '$proof', '$quantity_id')";

        if ($this->conn->query($sql)) {
        $resevation_id = $this->conn->insert_id;
        return $reservation_id;
            exit;
        } else {
            die("Error in Adding: " . $this->conn->error);
        }
        
    }
    
}; 