<?php
include 'db.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $address = $_POST['address'];
    $city = $_POST['city'];
    $state = $_POST['state'];
    $pincode = $_POST['pincode'];
    $phone = $_POST['phone'];
    $weight = $_POST['weight'];
    
    $awb_number = 'AWB' . rand(100000, 999999);
    
    $query = "INSERT INTO shipments (customer_name, address, city, state, pincode, phone, weight, awb_number) VALUES ('$name', '$address', '$city', '$state', '$pincode', '$phone', '$weight', '$awb_number')";
    
    if (mysqli_query($conn, $query)) {
        echo json_encode(["status" => "success", "awb_number" => $awb_number]);
    } else {
        echo json_encode(["status" => "error", "message" => mysqli_error($conn)]);
    }
}
?>
