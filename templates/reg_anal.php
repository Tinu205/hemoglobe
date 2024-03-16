<?php
include "../libs/load.php";
// MySQL server information
// $server = "localhost";
// $username = "panda"; // Assuming the username is "panda"
// $password = "cutepanda"; // Password for MySQL user
// $database = "hemo"; // Name of the database

// // Attempt to connect to MySQL database
// $conn = new mysqli($server, $username, $password, $database);

// // Check the connection
// if ($conn->connect_error) {
//     die("Connection failed: " . $conn->connect_error);
// }

$conn = database::getConnection();

$sql_donor = "SELECT name, blood_group, mobile_number FROM donor_list";
$result = $conn->query($sql_donor);

$sql_recommend = "SELECT blood_group, max_units_to_collect, min_units_to_collect FROM recommended_units_of_blood_collected";
$result_recommend = $conn->query($sql_recommend);

// Close the connection
$conn->close();
?>
<style>
        .blood-bank {
            background-color: #F7F6C5;
            padding: 20px;
        }

        .blood-bank h3 {
            color: #FF6659;
        }

        .storage-section {
            border-radius: 10px;
            padding: 10px;
            margin-bottom: 20px;
        }

        .donor-list {
            background-color: #FFFACD;
            border-radius: 10px;
            padding: 20px;
        }

        .donor-list h3 {
            color: #FF6659;
        }

        .donor-details {
            color: #686963;
        }

        .scrollable-list {
            max-height: 300px;
            overflow-y: auto;
            scrollbar-width: thin;
            scrollbar-color: #FF6659 #FFFACD;
        }

        .scrollable-list::-webkit-scrollbar {
            width: 8px;
        }

        .scrollable-list::-webkit-scrollbar-thumb {
            background-color: #FF6659;
            border-radius: 10px;
        }

        .scrollable-list::-webkit-scrollbar-track {
            background-color: #FFFACD;
        }
    </style>
</head>
<body>
<body>
    <div class="text-center p-4 blood-bank">
        <div class="row">
            <div class="col-md-8">
                <h3>Blood Bank name</h3>
                <div class="row scrollable-list">
                    <div class="col storage-section" id="minimumStorage">
                        <h3>Blood group</h3>
                        <!-- Display blood groups -->
                        <?php
                        if ($result_recommend->num_rows > 0) {
                            while ($row_recommend = $result_recommend->fetch_assoc()) {
                                ?>
                                <div class="row py-3">
                                    <p><?php echo $row_recommend["blood_group"]; ?></p>
                                </div>
                                <?php
                            }
                        } else {
                            echo "No recommended units found.";
                        }
                        ?>
                    </div>
                    <div class="col storage-section" id="minimumStorage">
                        <h3>Min storage</h3>
                        <!-- Display recommended minimum units to collect -->
                        <?php
                        if ($result_recommend->num_rows > 0) {
                            $result_recommend->data_seek(0); // Reset pointer to the beginning
                            while ($row_recommend = $result_recommend->fetch_assoc()) {
                                ?>
                                <div class="row py-3">
                                    <p><?php echo $row_recommend["min_units_to_collect"]; ?> Units</p>
                                </div>
                                <?php
                            }
                        } else {
                            echo "No recommended units found.";
                        }
                        ?>
                    </div>
                    <div class="col storage-section">
                        <h3>Max storage</h3>
                        <!-- Display recommended maximum units to collect -->
                        <?php
                        if ($result_recommend->num_rows > 0) {
                            $result_recommend->data_seek(0); // Reset pointer to the beginning
                            while ($row_recommend = $result_recommend->fetch_assoc()) {
                                ?>
                                <div class="row py-3">
                                    <p><?php echo $row_recommend["max_units_to_collect"]; ?> Units</p>
                                </div>
                                <?php
                            }
                        } else {
                            echo "No recommended units found.";
                        }
                        ?>
                    </div>
                </div>
            </div>
            <div class="col-6 col-md-4 donor-list">
                <div class="row">
                    <h3>Donor list</h3>
                </div>
                <div class="row scrollable-list">
                    <?php if ($result->num_rows > 0) {
                        // Output data of each row
                        while($row = $result->fetch_assoc()) { ?>
                            <div class="row text-start donor-details">
                                <div class="dondet py-3">
                                    <?php echo "Donor Name: " . $row["name"] . "<br>";
                                    echo "Blood group: " . $row["blood_group"] . "<br>";
                                    echo "Mobile Number: " . $row["mobile_number"]; ?>
                                </div>
                            </div>
                        <?php } ?>
                    <?php } else { ?>
                        <div class="row text-start donor-details">
                            <div class="dondet py-3">
                                No donors found.
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</body>