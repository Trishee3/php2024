<?php
 include_once "../classes/customer_class.php";
 session_start();
     $customer = new Customer;
     if (isset($_POST['add_customer'])) {
        $fullname = $_POST['fullname'];
        $contact = $_POST['contact'];
        $address = $_POST['address'];
        $quantity_id = $_POST['quantity_id'];

        if (empty($quantity_id)) {
         die("Error: quantity_id is required.");
     }
        $order_id = $customer->addCustomer($fullname, $contact, $address,  $quantity_id);
        header("Location: ../views/payment_method.php?order_id=$order_id");
           exit;
    }
    if (isset($_POST['order'])) {
       $quantity = $_POST['quantity'];
       $product_id = $_POST['product_id'];

       $quantity_id = $customer->addQuantity($quantity, $product_id);
       header("Location: ../views/user_details.php?quantity_id=$quantity_id");
          exit;
   }
   if (isset($_POST['reserve'])) {
      $quantity = $_POST['quantity'];
      $product_id = $_POST['product_id'];

      $quantity_id = $customer->addQuantity($quantity, $product_id);
      header("Location: ../views/reservation.php?quantity_id=$quantity_id");
         exit;
  }
  if (isset($_POST['placepayment'])) {
   $payment = $_POST['payment-method'];
   $order_id = $_POST['order_id'];
   $target_dir = "../assets/img/p_order_$order_id/";
   
   // Create the directory if it doesn't exist
   if (!is_dir($target_dir)) {
       mkdir($target_dir, 0777, true); // Create directory with write permissions
   }

   // Check if GCash payment method was selected
   if ($payment === 'gcash') {
       // Check if proof of payment file is uploaded
       if (isset($_FILES['proof']) && $_FILES['proof']['error'] === 0) {
           $file_paths = [
               'proof' => $target_dir . basename($_FILES['proof']['name']),
           ];

           // Move the uploaded file to the target directory
           if (move_uploaded_file($_FILES['proof']['tmp_name'], $file_paths['proof'])) {
               // Successfully uploaded
           } else {
               echo "Error uploading file: " . $_FILES['proof']['name'];
               exit;
           }
       } else {
           echo "No file uploaded or error in uploading file.";
           exit;
       }

       // Save the payment details for GCash
       $payment_id = $customer->addPaymentMethod($payment, $file_paths['proof'], $order_id);
   } else {
       // Handle other payment methods (like COD)
       $payment_id = $customer->addPaymentMethod($payment, null, $order_id);
   }

   header("Location: ../views/payment_method.php?order_id=$order_id");
   exit;
}
if (isset($_POST['payment'])) {
   $payment = $_POST['fullname'];
   $downpayment  = $_POST['gcash-number'];
   $quantity_id = $_POST['quantity_id'];
   $target_dir = "../assets/img/reservation_$quantity_id/";
   

   if (!is_dir($target_dir)) {
       mkdir($target_dir, 0777, true); // Create directory with write permissions
   }

   // Check if GCash payment method was selected
  
       // Check if proof of payment file is uploaded
       if (isset($_FILES['proof']) && $_FILES['proof']['error'] === 0) {
           $file_paths = [
               'proof' => $target_dir . basename($_FILES['proof']['name']),
           ];

           // Move the uploaded file to the target directory
           if (move_uploaded_file($_FILES['proof']['tmp_name'], $file_paths['proof'])) {
               // Successfully uploaded
           } else {
               echo "Error uploading file: " . $_FILES['proof']['name'];
               exit;
           }
       
       // Save the payment details for GCash
       $reservation_id = $customer->addPhoneCaseOrder($payment, $downpayment, $file_paths['proof'], $quantity_id);
   }
   header("Location: ../views/reservation.php?quantity_id=$quantity_id");
   exit;
}
