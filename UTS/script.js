$(document).ready(function () {
  // Price check form submission
  $("#priceCheckForm").on("submit", function (e) {
    e.preventDefault();
    let weight = parseInt($("#weight").val());
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

    if (membership ==+ "kupon") {
      if (weight > 2) {
        weight = weight - 2;
      }
    }

    let totalPrice = pricePerKilo * weight + additionalFee;

    if (membership === "member") {
      totalPrice *= 0.9; // 10% discount
    }

    // Display total price
    $("#totalPrice").text(`Total Price: Rp ${totalPrice.toLocaleString()}`);
  });
});
