<?php
session_start();
include('assets/inc/config.php');
include('assets/inc/checklogin.php');
check_login();
$aid = $_SESSION['ad_id'];

if(isset($_POST['add_print']))

{
    
    $or_no=$_POST['or_no'];
    $date_issued=$_POST['date_issued'];
    $query="INSERT into mis_claimclearance (or_no, date_issued) values(?,?)";
			$stmt = $mysqli->prepare($query);
			$rc=$stmt->bind_param('ss',$or_no, $date_issued);
			$stmt->execute();
    if($stmt)
			{
				$success = "Added OR NO.";
			}
			else {
				$err = "Please Try Again Or Try Later";
               
			}
			
}

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
        .row {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 40vh;
    margin: 10px;
    background-color: #f0f0f0;
}
        #leftLogo img {
    /* CSS styles for the left logo */
    position: absolute;
    top: 40px; /* Adjust the top value as needed */
    left: 120px; /* Adjust the left value as needed */
    width: 140px; /* Adjust the width as needed */
    height: 140px; /* Adjust the height as needed */
}

#rightLogo img {
    /* CSS styles for the right logo */
    position: absolute;
    top: 40px; /* Adjust the top value as needed */
    right: 120px; /* Adjust the right value as needed */
    width: 140px; /* Adjust the width as needed */
    height: 140px; /* Adjust the height as needed */
}

/* Style for the button container */
.button-container {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-top: 20px; /* Adjust the top margin as needed */
}

/* Style for the Generate Certificate button */
.print-button {
    background-color: #007bff;
    color: #fff;
    border: none;
    padding: 10px 20px;
    font-size: 16px;
    cursor: pointer;
    border-radius: 5px;
    transition: background-color 0.3s;
}

/* Style for the Print Clearance button */
.btn-primary {
    /* background-color: #007bff; */
    color: #fff;
    border: none;
    padding: 10px 20px;
    font-size: 16px;
    cursor: pointer;
    border-radius: 5px;
    transition: background-color 0.3s;
}



        @media print {
            body {
            font-family: 'Arial', sans-serif; /* Replace 'Arial' with your chosen professional font */
            font-size: 12pt; /* Adjust the font size as needed */
        }
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
<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> -->
</head>

<body>
       <!-- this query to get data from employment table -->
<?php
                            $employment_id=$_GET['employment_id'];
                            $ret="SELECT  * FROM  mis_employment WHERE employment_id=?";
                            $stmt= $mysqli->prepare($ret) ;
                            $stmt->bind_param('i',$employment_id);
                            $stmt->execute() ;//ok
                            $res=$stmt->get_result();
                            //$cnt=1;
                            while($row=$res->fetch_object())
                            {
                                
                                $sex = $row->sex; // Assuming $row->sex contains the gender information
                                if ($sex === 'Male') {
                                    $pronoun = 'His';
                                } elseif ($sex === 'Female') {
                                    $pronoun = 'Her';
                                } else {
                                    $pronoun = 'their'; // A generic pronoun for other cases
                                }
                            
                              
                            
                                
                        ?>
                        <?php
// Your PHP code here

// Assuming $row->middlename contains the middle name value
$middlename = $row->middlename;

// Split the middle name into words using space as the delimiter
$middlenameWords = explode(' ', $middlename);

// Initialize an empty string for the initials
$middlenameInitials = '';

// Iterate through the words and extract the first character as an initial
foreach ($middlenameWords as $word) {
    $middlenameInitials .= $word; //  $word[0];   Append the first character to the initials string
}

// Output the name with initials
$nameWithInitials = $row->firstname . ' ' . $middlenameInitials . '. ' . $row->surname;
?>

    <div class="row">
        <div class="col-lg-14 col-xl-auto">
            <div class="card-box text-center">
                <div class="certificate">               
                    <div class="logo-lg" id="leftLogo">
                          <img src="assets/images/Flag_of_Manolo_Fortich,_Bukidnon.png" alt="Left Logo">
                           </div>
                             <div class="logo-lg" id="rightLogo">
                                 <img src="assets/images/Peso_log.png" alt="Right Logo" >
                            </div>
                    <div style="text-align: center;">  
                        <h4>Republic of the Philippines</h4>
                        <h4>Province of Bukidnon</h4>
                        <h4>Municipality of Manolo Fortich</h4>
                        <h4>PUBLIC EMPLOYMENT AND SCHOLARSHIP OFFICE</h4>
                        <h5>CELLPHONE NO. 09177293321</h5><hr>
                        <h1>PESO CLEARANCE</h1>
                        <h2><u><?php echo $nameWithInitials; ?></u></h2>
                        <h4>NAME</h4>
                        <h3><u><?php echo $row->barangay;?>,<?php echo $row->municipality;?> <?php echo $row->province;?></u></h3>
                        <h4>COMPLETE ADDRESS</h4>
                        <span ><h5><p style="text-align: justify;">REGISTRY THIS IS TO CERTIFY THAT the above named person has been entered in the MANPOWER SKILLS of 
                        <?php echo $row->municipality;?>, and maybe employed in accordance with the Labor Code of the Philippines
                        under Presidential Decree No. 442, as amended and defined in the ff. Chapter I, Art. 6061, Chapter II, Art.
                        139 (a,b,c) <br> THIS CERTIFIES FURTHER THAT based on the clearance issued by the BARANGAY <strong><?php echo $row->barangay;?>,<?php echo $row->municipality;?> <?php echo $row->province;?></strong>
                        herein subject person has NO DEROGATORY RECORD. <br><br>This EMPLOYMENT CLEARANCE is issued in connection with <strong><?php echo $pronoun; ?></strong> desire to work at:
                        <br><br><h2 style="text-align: center;"><u>GENERAL SERVICE MULTIPURPOSE COOPERATIVE</u></h2>
                        <br><h5 style="text-align: justify;">Municipal Ordinance #2005-394, <?php echo $row->date_joined;?>.</h5></p></span><br><br>
                        <h5 style="text-align: justify;" >Verified by:</h5><br><br><h5 style="text-align: justify;"><p><strong>ROGER O. MOLINA</strong><br>PESO MANAGER</p></h5><br><br>
                        <h5 style="text-align: justify;">
                        <p>OR NO: <?php echo $row->or_no; ?><br>DATE ISSUED: <?php echo $row->date_joined;?></p></h5>
                     
                    </div>
               
                </div> <!-- end card-box -->
    <div class="no-print" >  
    <form method="post" onsubmit="return validateForm();">
    <div class="form-group col-md-2">
        <label for="or_no"><h5>OR NO:</h5></label>
        <input type="text" name="or_no" required="required" class="form-control" value="<?php echo $row->or_no; ?>">
    </div>
    <div class="form-group col-md-2">
        <label for="inputDateJoined" class="col-form-label">DATE ISSUED</label>
        <input type="date" required="required" value="<?php echo $row->date_issued; ?>" name="date_issued" class="form-control" id="inputDateJoined">
        <input type="submit" name="add_print" class="print-button" value="Generate">
    </div>
</form>
<div style="text-align: right;">
    <button class="btn btn-primary waves-effect waves-light" onclick="printCertificate()">Print Clearance</button>
</div>

<script>
function validateForm() {
    // Check if the 'or_no' input is empty
    var orNoInput = document.querySelector('input[name="or_no"]');
    if (orNoInput.value.trim() === '') {
        alert('OR NO cannot be empty. Please fill it out.');
        return false; // Prevent form submission
    }
    return true; // Allow form submission
}
</script>

             </div>
        </div> <!-- end col -->
             
    </div>
    
    <?php } ?>
<script>
    function printCertificate() {
        window.print();
    }
</script>
</body>
</html>
