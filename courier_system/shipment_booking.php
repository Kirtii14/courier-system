<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Courier Shipment System</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!-- booking shipment form-->
    <div class="container">
        <h2>Book a Shipment</h2>
        <form id="bookingForm">
            <input type="text" name="name" placeholder="Customer Name" required>
            <input type="text" name="address" placeholder="Address" required>
            <input type="text" name="city" placeholder="City" required>
            <input type="text" name="state" placeholder="State" required>
            <input type="text" name="pincode" placeholder="Pincode" required>
            <input type="text" name="phone" placeholder="Phone" required>
            <input type="text" name="weight" placeholder="Weight (kg)" required>
            <button type="submit">Book Shipment</button>
        </form>
        <p id="bookingResult"></p>
    </div>
<!-- Tracking form-->
    <div class="container">
        <h2>Track Your Shipment</h2>
        <form id="trackingForm">
            <input type="text" name="awb_number" placeholder="Enter AWB Number" required>
            <button type="submit">Track</button>
        </form>
        <p id="trackingResult"></p>
    </div>

    <!--Link script.js here, before </body> -->
    <script src="script.js"></script>

</body>
</html>


