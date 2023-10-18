<!DOCTYPE html>
<html>
<head>
    <title>PESO Clearance Certificates</title>
    <style>
           .certificate {
            display: none;
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
    <h2 align="center">PESO Clearance Certificates</h2>

    <?php
    $leftLogo = isset($_POST['left_logo']) ? $_POST['left_logo'] : 'path_to_default_left_logo.png';
    $rightLogo = isset($_POST['right_logo']) ? $_POST['right_logo'] : 'path_to_default_right_logo.png';
    $name = isset($_POST['name']) ? $_POST['name'] : 'John Doe';
    $address = isset($_POST['address']) ? $_POST['address'] : '123 Main St, City';
    $defaultParagraph = isset($_POST['default_paragraph']) ? $_POST['default_paragraph'] : 'This is to certify that the person named above...';
    $purpose = isset($_POST['purpose']) ? $_POST['purpose'] : 'Employment';
    $dateIssued = date('Y-m-d');

    $gender = ''; // You can determine gender based on some logic.

    if ($gender === 'male') {
        $address .= ' (Mr.)';
    } elseif ($gender === 'female') {
        $address .= ' (Ms.)';
    }

    echo '<div align="center">';
    echo '<img src="' . $leftLogo . '" width="100" height="100" alt="Left Logo">';
    echo '<img src="' . $rightLogo . '" width="100" height="100" alt="Right Logo">';
    echo '<br>';
    echo '<strong>Name:</strong> ' . $name . '<br>';
    echo '<strong>Address:</strong> ' . $address . '<br>';
    echo '<strong>Date Issued:</strong> ' . $dateIssued . '<br>';
    echo '<hr>';
    echo '<strong>Purpose:</strong> ' . $purpose . '<br>';
    echo '<p>' . $defaultParagraph . '</p>';
    echo '</div>';
    ?>
 <div class="no-print">
    <form method="post">
        <label for="left_logo">Left Logo:</label>
        <input type="text" name="left_logo" value="<?php echo $leftLogo; ?>"><br>

        <label for="right_logo">Right Logo:</label>
        <input type="text" name="right_logo" value="<?php echo $rightLogo; ?>"><br>

        <label for="name">Name:</label>
        <input type="text" name="name" value="<?php echo $name; ?>"><br>

        <label for="address">Address:</label>
        <input type="text" name="address" value="<?php echo $address; ?>"><br>

        <label for="purpose">Purpose:</label>
        <input type="text" name="purpose" value="<?php echo $purpose; ?>"><br>

        <label for="default_paragraph">Default Paragraph:</label>
        <textarea name="default_paragraph" rows="4" cols="50"><?php echo $defaultParagraph; ?></textarea><br>

        <input type="submit" value="Generate Certificate">
    </form>
    
    <button class="print-button" onclick="printCertificate()">Print Certificate</button>

    <script>
        function printCertificate() {
            window.print();
        }
    </script>

</body>
</html>
