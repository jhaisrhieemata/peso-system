<!--Server side code to handle  Employment Registration-->
<?php
session_start();
include('assets/inc/config.php');
if (isset($_POST['update_employment'])) {
    $employment_id = $_GET['employment_id'];
    $or_no = $_POST['or_no'];
    $surname = $_POST['surname'];
    $firstname = $_POST['firstname'];
    $middlename = $_POST['middlename'];
    $suffix = $_POST['suffix'];
    $date_of_birth = $_POST['date_of_birth'];
    $sex = $_POST['sex'];
    $street_village = $_POST['street_village'];
    $barangay = $_POST['barangay'];
    $municipality = $_POST['municipality'];
    $province = $_POST['province'];
    $religion = $_POST['religion'];
    $civil_status = $_POST['civil_status'];
    $tin = $_POST['tin'];
    $disability = $_POST['disability'];
    $height = $_POST['height'];
    $contact_number = $_POST['contact_number'];
    $email = $_POST['email'];
    $employment_status = $_POST['employment_status'];
    $employment_status_employed = $_POST['employment_status_employed'];
    $employment_status_unemployed = $_POST['employment_status_unemployed'];
    $Are_you_ofw = $_POST['Are_you_ofw'];
    $are_you_a_former_ofw = $_POST['are_you_a_former_ofw'];
    $beneficiary = $_POST['beneficiary'];
    $prefered_occupation = $_POST['prefered_occupation'];
    $prefered_work_location = $_POST['prefered_work_location'];
    $language_dialect = $_POST['language_dialect'];
    $currently_in_school = $_POST['currently_in_school'];
    $education_level = $_POST['education_level'];
    $course = $_POST['course'];
    $training = $_POST['training'];
    $hours_of_training = $_POST['hours_of_training'];
    $training_institution = $_POST['training_institution'];
    $skill_acquired = $_POST['skill_acquired'];
    $certificates_received = $_POST['certificates_received'];
    $eligibility_civil_service = $_POST['eligibility_civil_service'];
    $date_taken = $_POST['date_taken'];
    $professional_licence = $_POST['professional_licence'];
    $valid_until = $_POST['valid_until'];;
    $company_name = $_POST['company_name'];
    $position = $_POST['position'];
    $number_of_months = $_POST['number_of_months'];
    $work_address=$_POST['work_address'];
    $work_status=$_POST['work_status'];
    $special_skill = $_POST['special_skill'];
    $referred_to = $_POST['referred_to'];
    $date_joined = $_POST['date_joined'];
    //sql to update captured values
    $query = "UPDATE  mis_employment SET or_no=?, surname=?, firstname=?, middlename=?, suffix=?, date_of_birth=?, sex=?, street_village=?, barangay=?, municipality=?, province=?, religion=?, civil_status=?, tin=?, disability=?, height=?, contact_number=?, email=?, employment_status=?, employment_status_employed=?, employment_status_unemployed=?, Are_you_ofw=?, are_you_a_former_ofw=?, beneficiary=?, prefered_occupation=?, prefered_work_location=?, language_dialect=?, currently_in_school=?, education_level=?, course=?, training=?, hours_of_training=?, training_institution=?, skill_acquired=?, certificates_received=?, eligibility_civil_service=?, date_taken=?, professional_licence=?, valid_until=?, company_name=?, position=?, number_of_months=?, work_address=?, work_status=?, special_skill=?, referred_to=?, date_joined=? WHERE employment_id = ?";
    $stmt = $mysqli->prepare($query);
    $rc = $stmt->bind_param('sssssssssssssssssssssssssssssssssssssssssssssssi', $or_no, $surname, $firstname, $middlename, $suffix, $date_of_birth, $sex, $street_village, $barangay, $municipality, $province, $religion, $civil_status, $tin, $disability, $height, $contact_number, $email, $employment_status, $employment_status_employed, $employment_status_unemployed, $Are_you_ofw, $are_you_a_former_ofw, $beneficiary, $prefered_occupation, $prefered_work_location, $language_dialect, $currently_in_school, $education_level, $course, $training, $hours_of_training, $training_institution, $skill_acquired, $certificates_received, $eligibility_civil_service, $date_taken, $professional_licence, $valid_until, $company_name, $position, $number_of_months, $work_address, $work_status, $special_skill, $referred_to, $date_joined, $employment_id);
    $stmt->execute();
    /*
			*Use Sweet Alerts Instead Of This Javascript Alerts
			*echo"<script>alert('Successfully Created Account Proceed To Log In ');</script>";
			*/
    //declare a varible which will be passed to alert function
    if ($stmt) {
        $success = "Employment Details Updated";
    } else {
        $err = "Please Try Again Or Try Later";
    }
}
?>
<!--End Server Side-->
<!--End update single employment-->
<!DOCTYPE html>
<html lang="en">

<!--Head-->
<?php include('assets/inc/head.php'); ?>

<body>

    <!-- Begin page -->
    <div id="wrapper">

        <!-- Topbar Start -->
        <?php include("assets/inc/nav.php"); ?>
        <!-- end Topbar -->

        <!-- ========== Left Sidebar Start ========== -->
        <?php include("assets/inc/sidebar.php"); ?>
        <!-- Left Sidebar End -->

        <!-- ============================================================== -->
        <!-- Start Page Content here -->
        <!-- ============================================================== -->

        <div class="content-page">
            <div class="content">

                <!-- Start Content-->
                <div class="container-fluid">

                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box">
                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="his_admin_dashboard.php">Dashboard</a></li>
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Update Employment</a></li>
                                        <li class="breadcrumb-item active">Manage Update Employment</li>
                                    </ol>
                                </div>
                                <h4 class="page-title">Update Employment Details</h4>
                            </div>
                        </div>
                    </div>
                    <!-- end page title -->
                    <!-- Form row -->
                    <!--LETS GET DETAILS OF SINGLE jobseeker GIVEN THEIR ID-->
                    <?php
                    $employment_id = $_GET['employment_id'];
                    $ret = "SELECT  * FROM  mis_employment WHERE employment_id=?";
                    $stmt = $mysqli->prepare($ret);
                    $stmt->bind_param('i', $employment_id);
                    $stmt->execute(); //ok
                    $res = $stmt->get_result();
                    //$cnt=1;
                    while ($row = $res->fetch_object()) {
                    ?>
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title">PERSONAL INFORMATION</h4>
                                        <!--Add Jobseeker Form-->
                                        <form method="post">
                                            <div class="form-check">
                                                <input type="checkbox" id="enableFields" class="form-check-input">
                                                <label for="enableFields" class="form-check-label" id="enableFieldsLabel">Enable Fields</label>
                                            </div>
                                            <div class="form-group">
                                                <label for="inputor_no" class="col-form-label"></label>
                                                <input type="text" id="inputor_no" name="or_no" class="form-control" value="<?php echo $row->or_no; ?>">
                                            </div>
                                            <style>
                                                #enableFieldsLabel {
                                                    color: red;
                                                }
                                            </style>



                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label for="inputSurName" class="col-form-label">SurName</label>
                                                    <input type="text" required="required" value="<?php echo $row->surname; ?>" name="surname" class="form-control" id="inputSurName" placeholder="SurName" disabled>
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="inputFirstName" class="col-form-label">First Name</label>
                                                    <input required="required" type="text" value="<?php echo $row->firstname; ?>" name="firstname" class="form-control" id="inputFirstName" placeholder="Firts Name" disabled>
                                                </div>
                                            </div>

                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label for="inputMiddleName" class="col-form-label">Middle Name</label>
                                                    <input type="text" required="required" value="<?php echo $row->middlename; ?>" name="middlename" value="<?php echo $row->middlename; ?>" class="form-control" id="inputMiddleName" placeholder="Middle Name" disabled>
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="inputSuffix" class="col-form-label">Suffix</label>
                                                    <select id="inputSuffix" name="suffix" value="<?php echo $row->suffix; ?>" class="form-control" disabled>
                                                        <!-- <option value="">-Select-</option> -->
                                                        <option value="NA" <?php if ($row->suffix == 'NA') echo 'selected'; ?>>NA</option>
                                                        <option value="Sr" <?php if ($row->suffix == 'Sr') echo 'selected'; ?>>Sr</option>
                                                        <option value="Jr" <?php if ($row->suffix == 'Jr') echo 'selected'; ?>>Jr</option>
                                                        <option value="II" <?php if ($row->suffix == 'II') echo 'selected'; ?>>II</option>
                                                        <option value="III" <?php if ($row->suffix == 'III') echo 'selected'; ?>>III</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label for="inputDateofBirth" class="col-form-label">Date of Birth</label>
                                                    <input type="date" required="required" value="<?php echo $row->date_of_birth; ?>" name="date_of_birth" class="form-control" id="inputDateofBirth" placeholder="Date of Birth" disabled>
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="inputSex" class="col-form-label">Sex</label>
                                                    <select id="inputSex" required="required" name="sex" class="form-control" disabled>
                                                        <option value="">-Select-</option>
                                                        <option value="Male" <?php if ($row->sex == 'Male') echo 'selected'; ?>>Male</option>
                                                        <option value="Female" <?php if ($row->sex == 'Female') echo 'selected'; ?>>Female</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label for="inputstreetvillage" class="col-form-label">Present Address</label>
                                                    <input required="required" type="text" name="street_village" value="<?php echo $row->street_village; ?>" class="form-control" id="inputstreetvillage" placeholder="House No./Street Village" disabled>
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="inputbarangay" class="col-form-label">Barangay</label>
                                                    <select id="inputbarangay" required="required" name="barangay" class="form-control" disabled>
                                                        <option value="">-Select-</option>
                                                        <option value="Agusan Canyon" <?php if ($row->barangay == 'Agusan Canyon') echo 'selected'; ?>>Agusan Canyon</option>
                                                        <option value="Alae" <?php if ($row->barangay == 'Alae') echo 'selected'; ?>>Alae</option>
                                                        <option value="Dahilayan" <?php if ($row->barangay == 'Dahilayan') echo 'selected'; ?>>Dahilayan</option>
                                                        <option value="Dalirig" <?php if ($row->barangay == 'Dalirig') echo 'selected'; ?>>Dalirig</option>
                                                        <option value="Damilag" <?php if ($row->barangay == 'Damilag') echo 'selected'; ?>>Damilag</option>
                                                        <option value="Dicklum" <?php if ($row->barangay == 'Dicklum') echo 'selected'; ?>>Dicklum</option>
                                                        <option value="Guilang-guilang" <?php if ($row->barangay == 'Guilang-guilang') echo 'selected'; ?>>Guilang-guilang</option>
                                                        <option value="Kalugmanan" <?php if ($row->barangay == 'Kalugmanan') echo 'selected'; ?>>Kalugmanan</option>
                                                        <option value="Lindaban" <?php if ($row->barangay == 'Lindaban') echo 'selected'; ?>>Lindaban</option>
                                                        <option value="Lingion" <?php if ($row->barangay == 'Lingion') echo 'selected'; ?>>Lingion</option>
                                                        <option value="Lunocan" <?php if ($row->barangay == 'Lunocan') echo 'selected'; ?>>Lunocan</option>
                                                        <option value="Maluko" <?php if ($row->barangay == 'Maluko') echo 'selected'; ?>>Maluko</option>
                                                        <option value="Mambatangan" <?php if ($row->barangay == 'Mambatangan') echo 'selected'; ?>>Mambatangan</option>
                                                        <option value="Mampayag" <?php if ($row->barangay == 'Mampayag') echo 'selected'; ?>>Mampayag</option>
                                                        <option value="Mantibugao" <?php if ($row->barangay == 'Mantibugao') echo 'selected'; ?>>Mantibugao</option>
                                                        <option value="Minsuro" <?php if ($row->barangay == 'Minsuro') echo 'selected'; ?>>Minsuro</option>
                                                        <option value="San Miguel" <?php if ($row->barangay == 'San Miguel') echo 'selected'; ?>>San Miguel</option>
                                                        <option value="Sankanan" <?php if ($row->barangay == 'Sankanan') echo 'selected'; ?>>Sankanan</option>
                                                        <option value="Santiago" <?php if ($row->barangay == 'Santiago') echo 'selected'; ?>>Santiago</option>
                                                        <option value="Sto Niño" <?php if ($row->barangay == 'Sto Niño') echo 'selected'; ?>>Sto Niño</option>
                                                        <option value="Tankulan" <?php if ($row->barangay == 'Tankulan') echo 'selected'; ?>>Tankulan</option>
                                                        <option value="Ticala" <?php if ($row->barangay == 'Ticala') echo 'selected'; ?>>Ticala</option>
                                                    </select>
                                                </div>

                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label for="inputMunicipality" class="col-form-label">Municipality/City</label>
                                                    <select id="inputMunicipality" required="required" value="<?php echo $row->municipality; ?>" name="municipality" class="form-control" disabled>
                                                        <option>Manolo Fortich</option>
                                                    </select>
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="inputprovince" class="col-form-label">Province</label>
                                                    <select id="inputprovince" required="required" value="<?php echo $row->province; ?>" name="province" class="form-control" disabled>
                                                        <option>Bukidnon</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="form-row">
                                                <div class="form-group col-md-4">
                                                    <label for="inputReligion" class="col-form-label">Religion</label>
                                                    <input type="text" value="<?php echo $row->religion; ?>" name="religion" class="form-control" id="inputReligion" placeholder="Religion" disabled>
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <label for="inputcivilstatus" class="col-form-label">Civil Status</label>
                                                    <select id="inputcivilstatus" required="required" name="civil_status" class="form-control" disabled>
                                                        <option value="">-Select-</option>
                                                        <option value="Single" <?php if ($row->civil_status == 'Single') echo 'selected'; ?>>Single</option>
                                                        <option value="Married" <?php if ($row->civil_status == 'Married') echo 'selected'; ?>>Married</option>
                                                        <option value="Widowed" <?php if ($row->civil_status == 'Widowed') echo 'selected'; ?>>Widowed</option>
                                                    </select>
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <label for="inputTIN" class="col-form-label">TIN</label>
                                                    <input type="text" value="<?php echo $row->tin; ?>" name="tin" class="form-control" id="inputTIN" placeholder="TIN" disabled>
                                                </div>
                                            </div>

                                            <div class="form-row">
                                                <div class="form-group col-md-4">
                                                    <label for="inputDisability" class="col-form-label">Disability</label>
                                                    <select id="inputDisability" name="disability" class="form-control" disabled>
                                                        <!-- <option value="">-Select-</option> -->
                                                        <option value="NA" <?php if ($row->disability == 'NA') echo 'selected'; ?>>NA</option>
                                                        <option value="Visual" <?php if ($row->disability == 'Visual') echo 'selected'; ?>>Visual</option>
                                                        <option value="Hearing" <?php if ($row->disability == 'Hearing') echo 'selected'; ?>>Hearing</option>
                                                        <option value="Speech" <?php if ($row->disability == 'Speech') echo 'selected'; ?>>Speech</option>
                                                        <option value="Physical" <?php if ($row->disability == 'Physical') echo 'selected'; ?>>Physical</option>
                                                        <option value="Mental" <?php if ($row->disability == 'Mental') echo 'selected'; ?>>Mental</option>
                                                        <option value="Others">Others</option>
                                                    </select>
                                                </div>

                                                <div class="form-group col-md-4">
                                                    <label for="inputHeight" class="col-form-label">Height(ft.)</label>
                                                    <input type="text" value="<?php echo $row->height; ?>" name="height" class="form-control" id="inputHeight" placeholder="Height" disabled>
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <label for="inputContactNumber" class="col-form-label">Contact Number</label>
                                                    <input required="required" type="number" value="<?php echo (int)$row->contact_number; ?>" name="contact_number" class="form-control" id="inputContactNumber" placeholder="Contact Number" pattern="\d{11}" title="Please enter 11 digits" disabled>
                                                </div>
                                            </div>

                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label for="inputEmail" class="col-form-label">Email</label>
                                                    <input type="email" required="required" value="<?php echo $row->email; ?>" name="email" class="form-control" id="inputEmail" placeholder="Email" disabled>
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="inpuEmploymentStatus" class="col-form-label">Employment Status</label>
                                                    <select id="inpuEmploymentStatus" required="required" name="employment_status" class="form-control" disabled>
                                                        <option value="">-Select-</option>
                                                        <option value="Employed" <?php if ($row->employment_status == 'Employed') echo 'selected'; ?>>Employed</option>
                                                        <option value="Unemployed" <?php if ($row->employment_status == 'Unemployed') echo 'selected'; ?>>Unemployed</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label for="input_emplo_stat_employed" class="col-form-label">Employed</label>
                                                    <select id="input_emplo_stat_employed" required="required" name="employment_status_employed" class="form-control" disabled>
                                                        <!-- <option value="">-Select-</option> -->
                                                        <option value="NA" <?php if ($row->employment_status_employed == 'NA') echo 'selected'; ?>>NA</option>
                                                        <option value="Wage employed" <?php if ($row->employment_status_employed == 'Wage employed') echo 'selected'; ?>>Wage employed</option>
                                                        <option value="Self-employed (Fisherman/Fisherfolk)" <?php if ($row->employment_status_employed == 'Self-employed (Fisherman/Fisherfolk)') echo 'selected'; ?>>Self-employed (Fisherman/Fisherfolk)</option>
                                                        <option value="Self-employed (Vendor/Retailer)" <?php if ($row->employment_status_employed == 'Self-employed (Vendor/Retailer)') echo 'selected'; ?>>Self-employed (Vendor/Retailer)</option>
                                                        <option value="Self-employed (home-based worker)" <?php if ($row->employment_status_employed == 'Self-employed (home-based worker)') echo 'selected'; ?>>Self-employed (home-based worker)</option>
                                                        <option value="Self-employed (Transport)" <?php if ($row->employment_status_employed == 'Self-employed (Transport)') echo 'selected'; ?>>Self-employed (Transport)</option>
                                                        <option value="Self-employed (Domistic Worker)" <?php if ($row->employment_status_employed == 'Self-employed (Domistic Worker)') echo 'selected'; ?>>Self-employed (Domistic Worker)</option>
                                                        <option value="Self-employed (Freelancer)" <?php if ($row->employment_status_employed == 'Self-employed (Freelancer)') echo 'selected'; ?>>Self-employed (Freelancer)</option>
                                                        <option value="Self-employed (Artisan/Craft WOrker)" <?php if ($row->employment_status_employed == 'Self-employed (Artisan/Craft WOrker)') echo 'selected'; ?>>Self-employed (Artisan/Craft WOrker)</option>
                                                        <option value="Others">Others</option>
                                                    </select>

                                                </div>

                                                <div class="form-group col-md-6">
                                                    <label for="input_emplo_stat_unemployed" class="col-form-label">Unemployed</label>
                                                    <select id="input_emplo_stat_unemployed" required="required" name="employment_status_unemployed" class="form-control" disabled>
                                                        <!-- <option value="">-Select-</option> -->
                                                        <option value="NA" <?php if ($row->employment_status_unemployed == 'NA') echo 'selected'; ?>>NA</option>
                                                        <option value="New Emtrant/Fresh Graduate" <?php if ($row->employment_status_unemployed == 'New Emtrant/Fresh Graduate') echo 'selected'; ?>>New Emtrant/Fresh Graduate</option>
                                                        <option value="Finish Contract" <?php if ($row->employment_status_unemployed == 'Finish Contract') echo 'selected'; ?>>Finish Contract</option>
                                                        <option value="Resigned" <?php if ($row->employment_status_unemployed == 'Resigned') echo 'selected'; ?>>Resigned</option>
                                                        <option value="Retired" <?php if ($row->employment_status_unemployed == 'Retired') echo 'selected'; ?>>Retired</option>
                                                        <option value="Terminated/Laid off due to calamity" <?php if ($row->employment_status_unemployed == 'Terminated/Laid off due to calamity') echo 'selected'; ?>>Terminated/Laid off due to calamity</option>
                                                        <option value="Terminated/Laid off (Local)" <?php if ($row->employment_status_unemployed == 'Terminated/Laid off (Local)') echo 'selected'; ?>>Terminated/Laid off (Local)</option>
                                                        <option value="Terminated/Laid of (abroad)" <?php if ($row->employment_status_unemployed == 'Terminated/Laid of (abroad)') echo 'selected'; ?>>Terminated/Laid of (abroad)</option>
                                                        <option value="Others">Others</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="form-row">
                                                <div class="form-group col-md-4">
                                                    <label for="inputAreyouOFW" class="col-form-label">Are you OFW?</label>
                                                    <select id="inputAreyouOFW" name="Are_you_ofw" class="form-control" disabled>
                                                        <option value="No" <?php if ($row->Are_you_ofw == 'No') echo 'selected'; ?>>No</option>
                                                        <option value="Yes" <?php if ($row->Are_you_ofw == 'Yes') echo 'selected'; ?>>Yes</option>
                                                    </select>
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <label for="inputAreyouaformerOFW" class="col-form-label">Are you a former OFW?</label>
                                                    <select id="inputAreyouaformerOFW" name="are_you_a_former_ofw" class="form-control" disabled>
                                                        <option value="">-Select-</option>
                                                        <option value="No" <?php if ($row->are_you_a_former_ofw == 'No') echo 'selected'; ?>>No</option>
                                                        <option value="Yes" <?php if ($row->are_you_a_former_ofw == 'Yes') echo 'selected'; ?>>Yes</option>
                                                    </select>
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <label for="inputAreyoua4Psbeneficiary" class="col-form-label">Are you a 4Ps beneficiary?</label>
                                                    <select id="inputAreyoua4Psbeneficiary" name="beneficiary" class="form-control" disabled>
                                                        <option value="">-Select-</option>
                                                        <option value="No" <?php if ($row->beneficiary == 'No') echo 'selected'; ?>>No</option>
                                                        <option value="Yes" <?php if ($row->beneficiary == 'Yes') echo 'selected'; ?>>Yes</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <h4 class="header-title">JOB PREFERENCE & LANGUAGE / DIALECT PROFICIENCY</h4>
                                            <div class="form-row">
                                                <div class="form-group col-md-4">
                                                    <label for="inputPreferedOccupation" class="col-form-label">Prefered Occupation</label>
                                                    <input type="text" value="<?php echo $row->prefered_occupation; ?>" name="prefered_occupation" class="form-control" id="inputPreferedOccupation" placeholder="Prefered Occupation" disabled>
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <label for="inputPreferedWorkLocation" class="col-form-label">Prefered Work Location</label>
                                                    <input type="text" value="<?php echo $row->prefered_work_location; ?>" name="prefered_work_location" class="form-control" id="inputPreferedWorkLocation" placeholder="Prefered Work Location" disabled>
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <label for="inputLanguage" class="col-form-label">Language/Dialect</label>
                                                    <select id="inputLanguage" name="language_dialect" class="form-control" disabled>
                                                        <option value="">-Select-</option>
                                                        <option value="Cebuano" <?php if ($row->language_dialect == 'Cebuano') echo 'selected'; ?>>Cebuano</option>
                                                        <option value="Tagalog" <?php if ($row->language_dialect == 'Tagalog') echo 'selected'; ?>>Tagalog</option>
                                                        <option value="English" <?php if ($row->language_dialect == 'English') echo 'selected'; ?>>English</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <h4 class="header-title">EDUCATIONAL BACKGROUND</h4>
                                            <div class="form-row">
                                                <div class="form-group col-md-4">
                                                    <label for="inputCurrentlyinSchool" class="col-form-label">Currently in School?</label>
                                                    <select id="inputCurrentlyinSchool" required="required" value="<?php echo $row->currently_in_school; ?>" name="currently_in_school" class="form-control" disabled>
                                                        <option value="">-Select-</option>
                                                        <option value="No" <?php if ($row->currently_in_school == 'No') echo 'selected'; ?>>No</option>
                                                        <option value="Yes" <?php if ($row->currently_in_school == 'Yes') echo 'selected'; ?>>Yes</option>
                                                    </select>
                                                </div>

                                                <div class="form-group col-md-4">
                                                    <label for="inputLevel" class="col-form-label">Highest Education Attainment</label>
                                                    <select id="inputLevel" required="required" name="education_level" class="form-control" disabled>
                                                        <option value="">-Select-</option>
                                                        <option value="GRADE I" <?php if ($row->education_level == 'GRADE I') echo 'selected'; ?>>GRADE I</option>
                                                        <option value="GRADE II" <?php if ($row->education_level == 'GRADE II') echo 'selected'; ?>>GRADE II</option>
                                                        <option value="GRADE III" <?php if ($row->education_level == 'GRADE III') echo 'selected'; ?>>GRADE III</option>
                                                        <option value="GRADE IV" <?php if ($row->education_level == 'GRADE IV') echo 'selected'; ?>>GRADE IV</option>
                                                        <option value="GRADE V" <?php if ($row->education_level == 'GRADE V') echo 'selected'; ?>>GRADE V</option>
                                                        <option value="GRADE VI" <?php if ($row->education_level == 'GRADE VI') echo 'selected'; ?>>GRADE VI</option>
                                                        <option value="GRADE VII" <?php if ($row->education_level == 'GRADE VII') echo 'selected'; ?>>GRADE VII</option>
                                                        <option value="GRADE VIII" <?php if ($row->education_level == 'GRADE VIII') echo 'selected'; ?>>GRADE VIII</option>
                                                        <option value="ELEMENTARY LEVEL" <?php if ($row->education_level == 'ELEMENTARY LEVEL') echo 'selected'; ?>>ELEMENTARY LEVEL</option>
                                                        <option value="ELEMENTARY GRADUATE" <?php if ($row->education_level == 'ELEMENTARY GRADUATE') echo 'selected'; ?>>ELEMENTARY GRADUATE</option>
                                                        <option value="1ST YEAR HIGH SCHOOL/GRADE VII (FOR K TO 12)" <?php if ($row->education_level == '1ST YEAR HIGH SCHOOL/GRADE VII (FOR K TO 12)') echo 'selected'; ?>>1ST YEAR HIGH SCHOOL/GRADE VII (FOR K TO 12)</option>
                                                        <option value="2ND YEAR HIGH SCHOOL/GRADE VII (FOR K TO 12)" <?php if ($row->education_level == '2ND YEAR HIGH SCHOOL/GRADE VII (FOR K TO 12)') echo 'selected'; ?>>2ND YEAR HIGH SCHOOL/GRADE VIII (FOR K TO 12)</option>
                                                        <option value="3RD YEAR HIGH SCHOOL/GRADE VII (FOR K TO 12)" <?php if ($row->education_level == '3RD YEAR HIGH SCHOOL/GRADE VII (FOR K TO 12)') echo 'selected'; ?>>3RD YEAR HIGH SCHOOL/GRADE IX (FOR K TO 12)</option>
                                                        <option value="4TH YEAR HIGH SCHOOL/GRADE VII (FOR K TO 12)" <?php if ($row->education_level == '4TH YEAR HIGH SCHOOL/GRADE VII (FOR K TO 12)') echo 'selected'; ?>>4TH YEAR HIGH SCHOOL/GRADE X (FOR K TO 12)</option>
                                                        <option value="GRADE XI (FOR K TO 12)" <?php if ($row->education_level == 'GRADE XI (FOR K TO 12)') echo 'selected'; ?>>GRADE XI (FOR K TO 12)</option>
                                                        <option value="GRADE XII (FOR K TO 12)" <?php if ($row->education_level == 'GRADE XII (FOR K TO 12)') echo 'selected'; ?>>GRADE XII (FOR K TO 12)</option>
                                                        <option value="HIGH SCHOOL LEVEL" <?php if ($row->education_level == 'HIGH SCHOOL LEVEL') echo 'selected'; ?>>HIGH SCHOOL LEVEL</option>
                                                        <option value="HIGH SCHOOL GRADUATE" <?php if ($row->education_level == 'HIGH SCHOOL GRADUATE') echo 'selected'; ?>>HIGH SCHOOL GRADUATE</option>
                                                        <option value="SENIOR HIGH SCHOOL LEVEL" <?php if ($row->education_level == 'SENIOR HIGH SCHOOL LEVEL') echo 'selected'; ?>>SINIOR HIGH SCHOOL LEVEL</option>
                                                        <option value="SENIOR HIGH SCHOOL GRADUATE" <?php if ($row->education_level == 'SENIOR HIGH SCHOOL GRADUATE') echo 'selected'; ?>>SINIOR HIGH SCHOOL GRADUATE</option>
                                                        <option value="VOCATIONAL UNDERGRADUATE" <?php if ($row->education_level == 'VOCATIONAL UNDERGRADUATE') echo 'selected'; ?>>VOCATIONAL UNDERGRADUATE</option>
                                                        <option value="VOCATIONAL GRADUATE" <?php if ($row->education_level == 'VOCATIONAL GRADUATE') echo 'selected'; ?>>VOCATIONAL GRADUATE</option>
                                                        <option value="1ST YEAR COLLEGE LEVEL" <?php if ($row->education_level == '1ST YEAR COLLEGE LEVEL') echo 'selected'; ?>>1ST YEAR COLLEGE LEVEL</option>
                                                        <option value="2ND YEAR COLLEGE LEVEL" <?php if ($row->education_level == '2ND YEAR COLLEGE LEVEL') echo 'selected'; ?>>2ND YEAR COLLEGE LEVEL</option>
                                                        <option value="3RD YEAR COLLEGE LEVEL" <?php if ($row->education_level == '3RD YEAR COLLEGE LEVEL') echo 'selected'; ?>>3RD YEAR COLLEGE LEVEL</option>
                                                        <option value="4TH YEAR COLLEGE LEVEL" <?php if ($row->education_level == '4TH YEAR COLLEGE LEVEL') echo 'selected'; ?>>4TH YEAR COLLEGE LEVEL</option>
                                                        <option value="5TH YEAR COLLEGE LEVEL" <?php if ($row->education_level == '5th YEAR COLLEGE LEVEL') echo 'selected'; ?>>5TH YEAR COLLEGE LEVEL</option>
                                                        <option value="COLLEGE LEVEL" <?php if ($row->education_level == 'COLLEGE LEVEL') echo 'selected'; ?>>COLLEGE LEVEL</option>
                                                        <option value="COLLEGE GRADUATE" <?php if ($row->education_level == 'COLLEGE GRADUATE') echo 'selected'; ?>>COLLEGE GRADUATE</option>
                                                        <option value="MASTERAL/POST GRADUATE LEVEL" <?php if ($row->education_level == 'MASTERAL/POST GRADUATE LEVEL') echo 'selected'; ?>>MASTERAL/POST GRADUATE LEVEL</option>
                                                        <option value="MASTERAL/POST GRADUATE" <?php if ($row->education_level == 'MASTERAL/POST GRADUATE') echo 'selected'; ?>>MASTERAL/POST GRADUATE</option>
                                                    </select>
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <label for="inputCourse" class="col-form-label">If College Graduate / Post Graduate</label>
                                                    <input type="text" value="<?php echo $row->course; ?>" name="course" class="form-control" id="inputCourse" placeholder="please specify course" disabled>
                                                </div>
                                            </div>
                                            <h4 class="header-title">TECHNICAL/VOCATIONAL TRAINING</h4>
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label for="inputTraining" class="col-form-label">Training</label>
                                                    <input type="text" value="<?php echo $row->training; ?>" name="training" class="form-control" id="inputTraining" placeholder="Training" disabled>
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="inputHoursOfTraining" class="col-form-label">Hours Of Training</label>
                                                    <input type="text" value="<?php echo $row->hours_of_training; ?>" name="hours_of_training" class="form-control" id="inputHoursOfTraining" placeholder="Hours Of Training" disabled>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-4">
                                                    <label for="inputTrainingInstitution" class="col-form-label">Training Institution</label>
                                                    <input type="text" value="<?php echo $row->training_institution; ?>" name="training_institution" class="form-control" id="inputTrainingInstitution" placeholder="Training Institution" disabled>
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <label for="inputSkillAcquired" class="col-form-label">Skill Acquired</label>
                                                    <input type="text" value="<?php echo $row->skill_acquired; ?>" name="skill_acquired" class="form-control" id="inputSkillAcquired" placeholder="Skill Acquired" disabled>
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <label for="inputCertificatesReceived" class="col-form-label">Certificates Received  (NC I,NC II,NC III,NC IV,ect.)</label>
                                                    <input type="text" value="<?php echo $row->certificates_received; ?>" name="certificates_received" class="form-control" id="inputCertificatesReceived" placeholder="Number of Months" disabled>
                                                </div>
                                            </div>
                                            <h4 class="header-title">ELIGIBILITY/LICENSE</h4>
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label for="inputcivilservice" class="col-form-label">Eligibility (Civil service)</label>
                                                    <input type="text" value="<?php echo $row->eligibility_civil_service; ?>" name="eligibility_civil_service" class="form-control" id="inputcivilservice" placeholder="Eligibility" disabled>
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="inputdatetaken" class="col-form-label">Date Taken</label>
                                                    <input type="date" value="<?php echo $row->date_taken; ?>" name="date_taken" class="form-control" id="inputdatetaken" placeholder="Date Taken " disabled>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label for="inputprc" class="col-form-label">Professional licence (PRC)</label>
                                                    <input type="text" value="<?php echo $row->professional_licence; ?>" name="professional_licence" class="form-control" id="inputprc" placeholder="Professional licence" disabled>
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="inputvaliduntil" class="col-form-label">Valid Until</label>
                                                    <input type="date" value="<?php echo $row->valid_until; ?>" name="valid_until" class="form-control" id="inputvaliduntil" placeholder="Valid Until " disabled>
                                                </div>
                                            </div>
                                            <h4 class="header-title">WORK EXPERIENCE</h4>
                                            <div class="form-row">
                                                <div class="form-group col-md-4">
                                                    <label for="inputCompanyName" class="col-form-label">Company Name</label>
                                                    <input required="required" type="text" value="<?php echo $row->company_name; ?>" name="company_name" class="form-control" id="inputCompanyName" placeholder="Company Name" disabled>
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <label for="inputPosition" class="col-form-label">Position</label>
                                                    <input required="required" type="text" value="<?php echo $row->position; ?>" name="position" class="form-control" id="inputPosition" placeholder="Position" disabled>
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <label for="inputNumberofMonths" class="col-form-label">Number of Months</label>
                                                    <input required="required" type="text" value="<?php echo $row->number_of_months; ?>" name="number_of_months" class="form-control" id="inputNumberofMonths" placeholder="Number of Months" disabled>
                                                </div>
                                            </div>
                                            <div class="form-row"> 
                                                <div class="form-group col-md-6">
                                                    <label for="inputworkaddress" class="col-form-label">Work Address</label>
                                                    <input required="required" type="text"value="<?php echo $row->work_address; ?>"  name="work_address" class="form-control" id="inputworkaddress" placeholder=" Work Address" disabled>
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="inputworkstatus" class="col-form-label">Status</label>
                                                    <select id="inputworkstatus" required="required" name="work_status" class="form-control" disabled>
                                                        <option value="select">-Select-</option>
                                                        <option value="Permanent" <?php if ($row->work_status == 'Permanent') echo 'selected'; ?>>Permanent</option>
                                                        <option value="Contractual" <?php if ($row->work_status == 'Contractual') echo 'selected'; ?>>Contractual</option>
                                                        <option value="Part-time" <?php if ($row->work_status == 'Part-time') echo 'selected'; ?>>Part-time</option>
                                                        <option value="Probationary" <?php if ($row->work_status == 'Probationary') echo 'selected'; ?>>Probationary</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <h4 class="header-title">OTHER SKILLS ACQUIRED WITHOUT CERTIFICATE</h4>

                                            <div class="form-row">
                                                <div class="form-group col-md-4">
                                                    <label for="inputOtherSkills" class="col-form-label">Other Skills</label>
                                                    <input type="text" value="<?php echo $row->special_skill; ?>" name="special_skill" class="form-control" id="inputOtherSkills" placeholder="Other Skills" disabled>
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <label for="inputReferredTo" class="col-form-label">Referred To</label>
                                                    <div id="referredToContainer">
                                                        <select id="inputReferredTo" required="required" name="referred_to" class="form-control" disabled>
                                                            <!-- <option value="">-Select-</option> -->
                                                            <option value="NA" <?php if ($row->referred_to == 'NA') echo 'selected'; ?>>NA</option>
                                                            <option value="SPES" <?php if ($row->referred_to == 'SPES') echo 'selected'; ?>>SPES</option>
                                                            <option value="GIP" <?php if ($row->referred_to == 'GIP') echo 'selected'; ?>>GIP</option>
                                                            <option value="TUPAD" <?php if ($row->referred_to == 'TUPAD') echo 'selected'; ?>>TUPAD</option>
                                                            <option value="JobStart" <?php if ($row->referred_to == 'JobStart') echo 'selected'; ?>>JobStart</option>
                                                            <option value="DILEEP" <?php if ($row->referred_to == 'DILEEP') echo 'selected'; ?>>DILEEP</option>
                                                            <option value="TESDA Training" <?php if ($row->referred_to == 'TESDA Training') echo 'selected'; ?>>TESDA Training</option>
                                                            <option value="">Others</option>
                                                        </select>
                                                        <input type="text" id="otherTextReferredTo" class="form-control" style="display: none;">
                                                    </div>
                                                    <script>
                                                        document.getElementById("inputReferredTo").addEventListener("change", function() {
                                                            var referredToContainer = document.getElementById("referredToContainer");
                                                            var selectedOption = this.value;

                                                            if (selectedOption === "") {
                                                                // Hide the select and show the input field
                                                                document.getElementById("inputReferredTo").style.display = "none";
                                                                document.getElementById("otherTextReferredTo").style.display = "block";
                                                                document.getElementById("otherTextReferredTo").value = ""; // Clear the input field
                                                                document.getElementById("otherTextReferredTo").focus(); // Focus on the input field
                                                            } else if (selectedOption === "Others") {
                                                                // Show the select and show the input field for "Others"
                                                                document.getElementById("inputReferredTo").style.display = "block";
                                                                document.getElementById("otherTextReferredTo").style.display = "block";
                                                                document.getElementById("otherTextReferredTo").value = ""; // Clear the input field
                                                                document.getElementById("otherTextReferredTo").focus(); // Focus on the input field
                                                            } else {
                                                                // Show the select and hide the input field
                                                                document.getElementById("inputReferredTo").style.display = "block";
                                                                document.getElementById("otherTextReferredTo").style.display = "none";

                                                                // Set the value of the input field to the selected option
                                                                document.getElementById("otherTextReferredTo").value = selectedOption;
                                                            }
                                                        });
                                                    </script>


                                                </div>
                                                <div class="form-group col-md-4">
                                                    <label for="inputDateJoined" class="col-form-label">Date Joined</label>
                                                    <input type="date" required="required" value="<?php echo $row->date_joined; ?>" name="date_joined" class="form-control" id="inputDateJoined" placeholder="Date" disabled>
                                                </div>
                                            </div>

                                            <button type="submit" id="update_employment" name="update_employment" class="ladda-button btn btn-primary" data-style="expand-right" disabled>Update Employment</button>
                                        </form>
                                        <!--End Patient Form-->
                                    </div> <!-- end card-body -->
                                </div> <!-- end card-->
                            </div> <!-- end col -->
                        </div>
                    <?php  } ?>
                    <!-- end row -->

                </div> <!-- container -->

            </div> <!-- content -->

            <!-- Footer Start -->
            <?php include('assets/inc/footer.php'); ?>
            <!-- end Footer -->

        </div>

        <!-- ============================================================== -->
        <!-- End Page content -->
        <!-- ============================================================== -->


    </div>
    <!-- END wrapper -->


    <!-- Right bar overlay-->
    <div class="rightbar-overlay"></div>

    <!-- Vendor js -->
    <script src="assets/js/vendor.min.js"></script>

    <!-- App js-->
    <script src="assets/js/app.min.js"></script>

    <!-- Loading buttons js -->
    <script src="assets/libs/ladda/spin.js"></script>
    <script src="assets/libs/ladda/ladda.js"></script>

    <!-- Buttons init js-->
    <script src="assets/js/pages/loading-btn.init.js"></script>
    <!-- <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" rel="stylesheet" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script> -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            // Listen for changes in the global checkbox
            $('#enableFields').change(function() {
                // Get the global checkbox's checked state
                var isChecked = $(this).is(':checked');

                // Get all input fields that should be enabled/disabled
                var inputFields = $('#inputSurName, #inputFirstName, #inputMiddleName, #inputSuffix, #inputDateofBirth, #inputSex, #inputstreetvillage, #inputbarangay, #inputMunicipality, #inputprovince, #inputReligion, #inputcivilstatus, #inputTIN, #inputHeight, #inputContactNumber, #inputDisability, #inputEmail, #inpuEmploymentStatus, #input_emplo_stat_employed, #input_emplo_stat_unemployed, #inputAreyouOFW, #inputAreyouaformerOFW, #inputAreyoua4Psbeneficiary, #inputPreferedOccupation, #inputPreferedWorkLocation, #inputLanguage, #inputCurrentlyinSchool, #inputLevel, #inputCourse, #inputTraining, #inputHoursOfTraining, #inputTrainingInstitution, #inputSkillAcquired, #inputCertificatesReceived, #inputcivilservice, #inputdatetaken, #inputprc, #inputvaliduntil, #inputCompanyName, #inputPosition, #inputNumberofMonths, #inputworkaddress, #inputworkaddress, #inputOtherSkills, #inputReferredTo, #inputDateJoined, #update_employment'); // Add more fields if needed

                // Enable or disable the input fields based on the global checkbox state
                inputFields.prop('disabled', !isChecked);
                // Change the font color of the label text
                var label = $('#enableFieldsLabel');
                label.css('color', isChecked ? 'green' : 'red');
            });

        });
    </script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            // Listen for changes in the global checkbox
            const enableFieldsCheckbox = document.getElementById("enableFields");

            enableFieldsCheckbox.addEventListener("change", function() {
                // Get the checkbox's checked state
                const isChecked = enableFieldsCheckbox.checked;

                // Change the font color of the label text
                const label = document.getElementById("enableFieldsLabel");
                label.style.color = isChecked ? 'green' : 'red';

                if (isChecked) {
                    // Show a warning message
                    window.alert("Are you sure you want to enable the fields?");
                }
            });
        });
    </script>



</body>

</html>