<?php
session_start();
include('assets/inc/config.php');
include('assets/inc/checklogin.php');
check_login();
$aid = $_SESSION['ad_id'];
?>

<!DOCTYPE html>
<html lang="en">
<?php include('assets/inc/head.php'); ?>

<head>
    <title>PESO Clearance</title>
    <style>
        .certificate {
            display: block;
        }

        @media print {
            .certificate {
                display: block;
            }

            .print-button {
                display: none;
            }

            .no-print {
                display: none;
            }
        }
    </style>
</head>

<body>
<?php
/*
 * Get details of all users
 */
$ret = "SELECT * FROM mis_employment ORDER BY employment_id ";
$stmt = $mysqli->prepare($ret);
$stmt->execute();
$res = $stmt->get_result();
$cnt = 1;
while ($row = $res->fetch_object()) {
?>

    <div class="row">
        <div class="col-lg-14 col-xl-10">
            <div class="card-box text-center">
                <div class="certificate">
                    <div style="text-align: center;">
                        <h1>Republic of the Philippines</h1>
                        <img src="assets/images/Flag_of_Manolo_Fortich,_Bukidnon.png" class="float-left" width="200" height="100">
                        <img src="assets/images/Peso_log.png" class="float-right" width="100" height="100">
                    </div>
                    <?php
                    $firstname = isset($_POST['firstname']) ? $_POST['firstname'] : 'name';
                    $barangay = isset($_POST['barangay']) ? $_POST['barangay'] : 'barangay';
                    $purpose = isset($_POST['purpose']) ? $_POST['purpose'] : 'Employment';
                    $dateIssued = date('Y-m-d');
                    $gender = ''; // You can determine gender based on some logic.
                    if ($gender === 'male') {
                        $address .= ' (Mr.)';
                    } elseif ($gender === 'female') {
                        $address .= ' (Ms.)';
                    }
                    echo '<div align="center">';
                    echo '<br>';
                    echo '<hr>';
                    echo '<strong>firstname:</strong> ' . $firstname . '<br>';
                    echo '<strong>barangay:</strong> ' . $barangay . '<br>';
                    echo '<strong>Date Issued:</strong> ' . $dateIssued . '<br>';
                    echo '<strong>Purpose:</strong> ' . $purpose . '<br>';
                    echo '</div>';
                    ?>
                </div>
                <div><p><br></p></div>
            </div> <!-- end card-box -->
        </div> <!-- end col -->
    </div>
<?php } ?>

<div class="no-print">
    <form method="post">
        <!-- Input fields for modifying certificate parameters -->
        <label for="firstname">Name:</label>
        <input type="text" name="firstname" value="<?php echo $firstname; ?>"><br>

        <label for="barangay">Address:</label>
        <input type="text" name="barangay" value="<?php echo $barangay; ?>"><br>

        <label for="purpose">Purpose:</label>
        <input type="text" name="purpose" value="<?php echo $purpose; ?>"><br>

        <input type="submit" class="print-button" value="Generate Certificate">
    </form>
    <button class="print-button" onclick="printCertificate()">Print Certificate</button>
</div>

<script>
    function printCertificate() {
        window.print();
    }
</script>
</body>
</html>
