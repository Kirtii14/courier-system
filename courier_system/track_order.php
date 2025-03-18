<?php
include 'db.php';
if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['awb_number'])) {
    $awb_number = $_GET['awb_number'];
    
    $query = "SELECT * FROM shipments WHERE awb_number = '$awb_number'";
    $result = mysqli_query($conn, $query);
    $shipment = mysqli_fetch_assoc($result);
    
    if ($shipment) {
        echo json_encode(["status" => "success", "shipment" => $shipment]);
    } else {
        echo json_encode(["status" => "error", "message" => "AWB number not found."]);
    }
}
?>