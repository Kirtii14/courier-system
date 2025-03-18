document.addEventListener("DOMContentLoaded", function() {
    const bookingForm = document.getElementById("bookingForm");
    const trackingForm = document.getElementById("trackingForm");
    const bookingResult = document.getElementById("bookingResult");
    const trackingResult = document.getElementById("trackingResult");

    bookingForm.addEventListener("submit", function(event) {
        event.preventDefault();
        let formData = new FormData(bookingForm);
        fetch("shipment_api.php", {
            method: "POST",
            body: formData
        })
        .then(response => response.json())
        .then(data => {
            bookingResult.className = data.status === "success" ? "result success" : "result error";
            bookingResult.innerText = data.status === "success" ? "Shipment booked successfully! AWB: " + data.awb_number : "Error: " + data.message;
        });
    });

    trackingForm.addEventListener("submit", function(event) {
        event.preventDefault();
        let awb = trackingForm.awb_number.value;
        fetch("track_order.php?awb_number=" + awb)
        .then(response => response.json())
        .then(data => {
            trackingResult.className = data.status === "success" ? "result success" : "result error";
            trackingResult.innerText = data.status === "success" ? "Shipment Status: " + data.shipment.status : "Error: " + data.message;
        });
    });
});
