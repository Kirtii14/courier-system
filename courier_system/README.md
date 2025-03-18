# Courier Shipment Booking & Tracking System

This project is a **Courier Shipment API** built using **PHP, MySQL, JavaScript, and CSS**.  
It allows users to **book shipments, generate AWB numbers, and track orders**.

--------------------------------------------------------------------------------------------------------------------------

# Features:

1. Book Shipments – Register a shipment with user details  
2. Track Shipments – etch order status using an **AWB number**  
3. Dynamic UI – Fully responsive frontend with real-time feedback  
4. MySQL Database – Stores shipment data securely  
5. Interactive Forms – JavaScript-based instant status updates  

----------------------------------------------------------------------------------------------------------------------------

# Installation Steps:

1. Install **XAMPP** and start **Apache & MySQL**  
2️. Copy this project to `C:\xampp\htdocs\courier_system\`  
3️. Open **phpMyAdmin** (`http://localhost/phpmyadmin/`)  
4️. Import `sql_dump.sql` into a new database named `courier_system`  
5️. Open the project in a browser:  
http://localhost/courier_system/shipment_booking.php

------------------------------------------------------------------------------------------------------------------------------------

# Folder Sstructure:

C:\xampp\htdocs\courier_system\
│── db.php                  (Database connection)
│── shipment_api.php        (Shipment Booking API)
│── track_order.php         (Tracking API)
│── shipment_booking.php    (Frontend for booking & tracking)
│── style.css               (CSS Styling)
│── script.js               (JavaScript for interactivity)
└── database_schema.txt     (Database schema - export from phpMyAdmin)

--------------------------------------------------------------------------------------------------------------------------------------

# API Endpoints:

# 1. Book a Shipment

Endpoint: `shipment_api.php`
Method: `POST`
Request Body:  
 ```json
  {
      "name": "John Doe",
      "address": "123 Street",
      "city": "New York",
      "state": "NY",
      "pincode": "10001",
      "phone": "1234567890",
      "weight": 2.5
  }
 
Response:

  {
    "status": "success",
    "awb_number": "AWB123456"
   }



2. Track a Shipment

Endpoint: track_order.php?awb_number=AWB123456
Method: GET
Response:
{
    "status": "success",
    "shipment": {
        "customer_name": "John Doe",
        "status": "Booked",
        "created_at": "2025-03-18 12:00:00"
    }
}

-------------------------------------------------------------------------------------------------------------------------------------------

📜 License:

This project is open-source and free to use

---------------------------------------------------------------------------------------------------------------------------------------------

📞 Support:

For issues, contact kirtit1444@gmail.com.com or create a GitHub issue.
