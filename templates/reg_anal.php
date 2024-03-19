<?php
include "../libs/load.php";

$conn = database::getConnection();

$sql_donor = "SELECT name, blood_group, mobile_number FROM donor_list";
$result = $conn->query($sql_donor);
$result_recommend = database::get_data();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blood Bank</title>
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
    <div class="text-center p-4 blood-bank">
        <h3>Blood Bank Name</h3>
        <div class="row">
            <div class="col-md-6">
                <div class="row storage-section">
                    <div class="col">
                        <h3>Blood Group</h3>
                    <?php
                        if ($result_recommend->num_rows > 0) {
                        while ($row = $result_recommend->fetch_assoc()) {
                            echo "<p>" . $row["blood_group"] . "</p>";
                        }
                    } else {
                        echo "No recommended units found.";
                    }
                    ?>
                    </div>
                    <div class="col">
                        <h3>Min Storage</h3>
                        <?php
                    if ($result_recommend->num_rows > 0) {
                        // Reset pointer to the beginning
                        $result_recommend->data_seek(0);
                        while ($row = $result_recommend->fetch_assoc()) {
                            echo "<p>" . $row["avg_blood_collected"] . "</p>";
                        }
                    } else {
                        echo "No recommended units found.";
                    }
                    ?>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="donor-list">
                    <h3>Donor List</h3>
                    <div class="scrollable-list">
                        <?php if ($result->num_rows > 0) {
                            while ($row = $result->fetch_assoc()) { ?>
                                <div class="donor-details py-3">
                                    <p><strong>Donor Name:</strong> <?php echo $row["name"]; ?></p>
                                    <p><strong>Blood Group:</strong> <?php echo $row["blood_group"]; ?></p>
                                    <p><strong>Mobile Number:</strong> <?php echo $row["mobile_number"]; ?></p>
                                </div>
                            <?php }
                        } else { ?>
                            <div class="donor-details py-3">No donors found.</div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
