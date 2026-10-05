<?php

date_default_timezone_set("Asia/Kolkata");


/* User Details */

$name = $_POST["name"];

$mobile = $_POST["mobile"];

$address = $_POST["address"];

$pincode = $_POST["pincode"];


/* Clothes Details */

$clothes = $_POST["clothes"];

$size = $_POST["size"];

$quantity = $_POST["quantity"];


/* Generate Order ID */

$order_id = "CLO" . rand(1000, 9999);


/* Order Date and Time */

$order_date = date("d-m-Y");

$order_time = date("h:i A");


/* Expected Delivery */

$delivery_date = date("d-m-Y", strtotime("+5 days"));


/* Current Status */

$current_status = "Order Placed";

?>

<!DOCTYPE html>

<html>

<head>

    <title>CareChain - Clothes Order</title>

    <link rel="stylesheet" href="../css/style.css">

</head>


<body>


<nav>

    <h2>CareChain</h2>

    <div>

        <a href="../index.html">Home</a>

        <a href="../resources.html">Resources</a>

        <a href="../track.html">Track</a>

        <a href="../about.html">About</a>

    </div>

</nav>


<section class="status-section">


    <h1>Clothes Order Confirmed</h1>


    <p>
        Your clothes request has been submitted successfully.
    </p>


    <hr>


    <h2>Order Details</h2>


    <p>
        <b>Order ID:</b>
        <?php echo $order_id; ?>
    </p>


    <p>
        <b>Order Date:</b>
        <?php echo $order_date; ?>
    </p>


    <p>
        <b>Order Time:</b>
        <?php echo $order_time; ?>
    </p>


    <p>
        <b>Clothes Type:</b>
        <?php echo $clothes; ?>
    </p>


    <p>
        <b>Size:</b>
        <?php echo $size; ?>
    </p>


    <p>
        <b>Quantity:</b>
        <?php echo $quantity; ?>
    </p>


    <hr>


    <h2>User Details</h2>


    <p>
        <b>Name:</b>
        <?php echo $name; ?>
    </p>


    <p>
        <b>Mobile Number:</b>
        <?php echo $mobile; ?>
    </p>


    <hr>


    <h2>Delivery Details</h2>


    <p>
        <b>Delivery Address:</b>
        <br>
        <?php echo $address; ?>
    </p>


    <p>
        <b>Pincode:</b>
        <?php echo $pincode; ?>
    </p>


    <hr>


    <h2>Delivery Information</h2>


    <p>
        <b>Current Status:</b>
        <?php echo $current_status; ?>
    </p>


    <p>
        <b>Expected Delivery:</b>
        <?php echo $delivery_date; ?>
    </p>


    <p>
        <b>Estimated Delivery Time:</b>
        3 - 5 Days
    </p>


    <hr>


    <h2>Order Status</h2>


    <p>
        🟢 <b>Order Placed</b>
    </p>


    <p>
        ⚪ <b>Order Confirmed</b>
    </p>


    <p>
        ⚪ <b>Shipment Processing</b>
    </p>


    <p>
        ⚪ <b>Shipped</b>
    </p>


    <p>
        ⚪ <b>In Transit</b>
    </p>


    <p>
        ⚪ <b>Out for Delivery</b>
    </p>


    <p>
        ⚪ <b>Delivered</b>
    </p>


    <h3>

        Current Status:
        <?php echo $current_status; ?>

    </h3>


    <p>

        <b>Please save your Order ID:</b>

        <?php echo $order_id; ?>

    </p>


    <br>


    <a href="../track.html">

        <button>
            Track Order
        </button>

    </a>

    <a href="../clothes.html">

    <button type="button">
        Back
    </button>

</a>


    <a href="../resources.html">

        <button>
            Request Another Resource
        </button>

    </a>


</section>


<footer>

    <p>
        © 2026 CareChain | Resource Traceability System
    </p>

</footer>


</body>

</html>