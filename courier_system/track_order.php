<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['awb_number'])) {
    $awb_number = $_GET['awb_number'];
    
    // Use prepared statement to prevent SQL injection
    $query = "SELECT * FROM shipments WHERE awb_number = ?";
    $stmt = mysqli_prepare($conn, $query);
    mysqli_stmt_bind_param($stmt, "s", $awb_number);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    $shipment = mysqli_fetch_assoc($result);
    
    if ($shipment) {
        echo json_encode(["status" => "success", "shipment" => $shipment]);
    } else {
        echo json_encode(["status" => "error", "message" => "AWB number not found."]);
    }
    
    mysqli_stmt_close($stmt);
    mysqli_close($conn);
}
?>
