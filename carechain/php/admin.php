<?php

$request_id = $_POST["request_id"];
$status = $_POST["status"];

?>

<!DOCTYPE html>
<html>

<head>

    <title>CareChain - Status Updated</title>

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

        <h2>Status Updated</h2>

        <p>
            The request status has been updated successfully.
        </p>

        <hr>

        <p>
            <b>Request ID:</b>
            <?php echo $request_id; ?>
        </p>

        <p>
            <b>New Status:</b>
            <?php echo $status; ?>
        </p>

        <hr>

        <h3>Complete Status Flow</h3>

        <p>
            Request Received
            →
            Processing
            →
            Dispatched
            →
            In Transit
            →
            Delivered
        </p>

        <br>

        <a href="../admin.html">
            <button>Update Another Request</button>
        </a>

        <a href="../track.html">
            <button>Track Request</button>
        </a>

    </section>



    <footer>

        <p>
            © 2026 CareChain | Resource Traceability System
        </p>

    </footer>

</body>

</html>