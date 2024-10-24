$(document).ready(function () {
  // Login form submission
  $("#loginForm").on("submit", function (e) {
    e.preventDefault();
    const username = $("#username").val();
    const password = $("#password").val();
    let errorMessage = "";

    if (username === "" || password === "") {
      errorMessage = "Must be filled.";
    } else if (password.length < 6) {
      errorMessage = "Password must be at least 6 characters.";
    } else if (!/[a-z]/.test(password) || !/[A-Z]/.test(password)) {
      errorMessage = "Password must be uppercase and lowercase.";
    } else {
      // Valid login
      sessionStorage.setItem("username", username);
      window.location.href = "home.html"; // Redirect to home page
      return;
    }

    $("#errorMessage").text(errorMessage);
  });

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
