$(document).ready(function () {
  // Price check form submission
  $("#priceCheckForm").on("submit", function (e) {
    e.preventDefault();
    const weight = parseInt($("#weight").val());
    const serviceType = $("#serviceType").val();
    const deliveryType = $("#deliveryType").val();
    const membership = $("#membership").val();

    let pricePerKilo = 0;
    if (serviceType === "washDry") {
      pricePerKilo = 1000;
    } else if (serviceType === "washIron") {
      pricePerKilo = 1200;
    } else if (serviceType === "ironing") {
      pricePerKilo = 900;
    }

    let additionalFee = 0;
    if (deliveryType === "express") {
      additionalFee = 200 * weight;
    }

    let totalPrice = pricePerKilo * weight + additionalFee;

    if (membership === "member") {
      totalPrice *= 0.9; // 10% discount
    }

    // Display total price
    $("#totalPrice").text(`Total Price: Rp ${totalPrice.toLocaleString()}`);
  });

  // Add event listener for slide events
  $("#laundryCarousel").on("slide.bs.carousel", function () {
    // You can add more code here if you want to trigger something on slide
  });
});
