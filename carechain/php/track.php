<?php

$request_id = $_POST["request_id"];

?>

<!DOCTYPE html>
<html>

<head>

    <title>CareChain - Track Order</title>

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

    <h1>Track Your Request</h1>


    <p>
        <b>Request ID:</b>
        <?php echo $request_id; ?>
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


    <hr>


    <h3>
        Current Status: Processing
    </h3>


    <br>


    <a href="../track.html">

        <button>
            Track Another Order
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