<!--Server side code to handle  tesda training Registration Form-->
<?php
	session_start();
	include('assets/inc/config.php');
		if(isset($_POST['add_tesda_applicant']))
		{
			$surname=$_POST['surname'];
			$firstname=$_POST['firstname'];
			$middlename=$_POST['middlename'];
            $suffix=$_POST['suffix'];
            $date_of_birth=$_POST['date_of_birth'];
            $sex=$_POST['sex'];
            $street_village=$_POST['street_village'];
            $barangay=$_POST['barangay'];
            $municipality=$_POST['municipality'];
            $province=$_POST['province'];
            $religion=$_POST['religion'];
            $civil_status=$_POST['civil_status'];
            $tin=$_POST['tin'];
            $disability=$_POST['disability'];
            $height=$_POST['height'];
            $contact_number=$_POST['contact_number'];
            $email=$_POST['email'];
            $employment_status=$_POST['employment_status'];
            $employment_status_employed=$_POST['employment_status_employed'];
            $employment_status_unemployed=$_POST['employment_status_unemployed'];
            $Are_you_ofw=$_POST['Are_you_ofw'];
            $are_you_a_former_ofw=$_POST['are_you_a_former_ofw'];
            $beneficiary=$_POST['beneficiary'];
            $prefered_occupation=$_POST['prefered_occupation'];
            $prefered_work_location=$_POST['prefered_work_location'];
            $language_dialect=$_POST['language_dialect'];
            $currently_in_school=$_POST['currently_in_school'];
            $education_level=$_POST['education_level'];
            $course=$_POST['course'];
            $training=$_POST['training'];
            $hours_of_training=$_POST['hours_of_training'];
            $training_institution=$_POST['training_institution'];
            $skill_acquired=$_POST['skill_acquired'];
            $certificates_received=$_POST['certificates_received'];
            $eligibility_civil_service=$_POST['eligibility_civil_service'];
            $professional_licence=$_POST['professional_licence'];
            $company_name=$_POST['company_name'];
            $position=$_POST['position'];
            $number_of_months=$_POST['number_of_months'];
            $special_skill=$_POST['special_skill'];
            $referred_to=$_POST['referred_to'];
            //sql to insert captured values
			$query="insert into tesda_applicant (surname, firstname, middlename, suffix, date_of_birth, sex, street_village, barangay, municipality, province, religion, civil_status, tin, disability, height, contact_number, email, employment_status, employment_status_employed, employment_status_unemployed, Are_you_ofw, are_you_a_former_ofw, beneficiary, prefered_occupation, prefered_work_location, language_dialect, currently_in_school, education_level, course, training, hours_of_training, training_institution, skill_acquired, certificates_received, eligibility_civil_service, professional_licence, company_name, position, number_of_months, special_skill, referred_to) values(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
			$stmt = $mysqli->prepare($query);
			$rc=$stmt->bind_param('sssssssssssssssssssssssssssssssssssssssss', $surname, $firstname, $middlename, $suffix, $date_of_birth, $sex, $street_village, $barangay, $municipality, $province, $religion, $civil_status, $tin, $disability, $height, $contact_number, $email, $employment_status, $employment_status_employed, $employment_status_unemployed, $Are_you_ofw, $are_you_a_former_ofw, $beneficiary, $prefered_occupation, $prefered_work_location, $language_dialect, $currently_in_school, $education_level, $course, $training, $hours_of_training, $training_institution, $skill_acquired, $certificates_received, $eligibility_civil_service, $professional_licence, $company_name, $position, $number_of_months, $special_skill, $referred_to);
			$stmt->execute();
			/*
			*Use Sweet Alerts Instead Of This Fucked Up Javascript Alerts
			*echo"<script>alert('Successfully Created Account Proceed To Log In ');</script>";
			*/ 
			//declare a varible which will be passed to alert function
			if ($stmt) {
                $success = "You are Successfully Registered";
                echo '<script>alert("'.$success.'");</script>';
                echo '<script>window.location.href = "client_index.php";</script>';
                exit(); // Ensure that no further code is executed after the redirection
            } else {
                $err = "Please Try Again Or Try Later";
            }
			
			
		}
?>
<!--End Server Side-->
<!--End tesdataining Registration-->
<!DOCTYPE html>
<html lang="en">
    
    <!--Head-->
    <?php include('assets/inc/head.php');?>
    <body>

        <!-- Begin page -->
        <div id="wrapper">

            <!-- Topbar Start -->
            <?php include("assets/inc/nav.php");?>
            <!-- end Topbar -->

            <!-- ========== Left Sidebar Start ========== -->
          
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
                                            <!-- <li class="breadcrumb-item"><a href="mis_admin_dashboard.php">Dashboard</a></li>
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Tesda Training</a></li> -->
                                            <li class="breadcrumb-item active">New Tesda Training</li>
                                        </ol>
                                    </div>
                                    <h4 class="page-title">Create New Tesda Training </h4>
                                </div>
                            </div>
                        </div>     
                        <!-- end page title --> 
                        <!-- Form row -->
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title">PERSONAL INFORMATION</h4>
                                        <!--Add Jobseeker Form-->
                                        <form method="post">
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label for="inputSurName" class="col-form-label">SurName</label>
                                                    <input type="text" required="required" name="surname" class="form-control" id="inputSurName" placeholder="SurName">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="inputFirstName" class="col-form-label">First Name</label>
                                                    <input required="required" type="text" name="firstname" class="form-control"  id="inputFirstName" placeholder="Firts Name">
                                                </div>
                                            </div>

                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label for="inputMiddleName" class="col-form-label">Middle Name</label>
                                                    <input type="text" required="required" name="middlename" class="form-control" id="inputMiddleName" placeholder="Middle Name">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="inputSuffix" class="col-form-label">Suffix</label>
                                                    <select id="inputSuffix" required="required" name="suffix" class="form-control">
                                                    <option value="">Suffix</option>
                                                       <option>NA</option>
                                                        <option>Sr</option>
                                                        <option>Jr</option>
                                                        <option>III</option>
                                                        <option>II</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label for="inputDateofBirth" class="col-form-label">Date of Birth</label>
                                                    <input type="date" required="required" name="date_of_birth" class="form-control" id="inputDateofBirth" placeholder="Date of Birth">
                                                </div>
                                                <div class="form-group col-md-6">
                                                <label for="inputSex" class="col-form-label">Sex</label>
                                                    <select id="inputSex" required="required" name="sex" class="form-control">
                                                    <option value="">Choose sex</option>
                                                        <option>Male</option>
                                                        <option>Female</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="form-row">                                                
                                                <div class="form-group col-md-6">
                                                    <label for="inputstreetvillage" class="col-form-label">Present Address</label>
                                                    <input required="required" type="text" name="street_village" class="form-control" id="inputstreetvillage" placeholder="House No./Street Village">
                                                </div>
                                             <div class="form-group col-md-6">
                                                <label for="inputbarangay" class="col-form-label">Barangay</label>
                                                    <select id="inputbarangay" required="required" name="barangay" class="form-control" >
                                                    <option value="">Choose Barangay</option>
                                                        <option>Agusan Canyon</option>
                                                        <option>Alae</option>
                                                        <option>Dahilayan</option>
                                                        <option>Dalirig</option>
                                                        <option>Damilag</option>
                                                        <option>Dicklum</option>
                                                        <option>Guilang-guilang</option>
                                                        <option>Kalugmanan</option>
                                                        <option>Lindaban</option>
                                                        <option>Lingion</option>
                                                        <option>Lunocan</option>
                                                        <option>Maluko</option>
                                                        <option>Mambatangan</option>
                                                        <option>Mampayag</option>
                                                        <option>Mantibugao</option>
                                                        <option>Minsuro</option>
                                                        <option>San Miguel</option>
                                                        <option>Sankanan</option>
                                                        <option>Santiago</option>
                                                        <option>Sto Niño</option>
                                                        <option>Tankulan</option>
                                                        <option>Tikala</option>

                                                    </select>
                                                </div>
                                               
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label for="inputMunicipality" class="col-form-label">Municipality/City</label>
                                                    <select id="inputMunicipality" required="required" name="municipality" class="form-control">
                                                        <option>Manolo Fortich</option>
                                                    </select>
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="inputprovince" class="col-form-label">Province</label>
                                                    <select id="inputprovince" required="required" name="province" class="form-control">
                                                        <option>Bukidnon</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="form-row">                                                
                                                <div class="form-group col-md-4">
                                                    <label for="inputReligion" class="col-form-label">Religion</label>
                                                    <input required="required" type="text" name="religion" class="form-control" id="inputReligion" placeholder="Religion">
                                                </div>
                                             <div class="form-group col-md-4">
                                                <label for="inputcivilstatus" class="col-form-label">Civil Status</label>
                                                    <select id="inputcivilstatus" required="required" name="civil_status" class="form-control">
                                                   
                                                        <option>Single</option>
                                                        <option>Married</option>
                                                        <option>Widowed</option>
                                                    </select>
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <label for="inputTIN" class="col-form-label">TIN</label>
                                                    <input required="required" type="text" name="tin" class="form-control" id="inputTIN" placeholder="TIN">
                                                </div>
                                            </div>

                                            <div class="form-row">                                      
                                                <div class="form-group col-md-4">
                                                    <label for="inputDisability" class="col-form-label">Disability</label>
                                                    <select id="inputDisability" required="required" name="disability" class="form-control">
                                                        <option value="">Disability</option>
                                                        <option>NA</option>
                                                        <option>Visual</option>
                                                        <option>Hearing</option>
                                                        <option>Speech</option>
                                                        <option>Physical</option>
                                                        <option>Mental</option>
                                                        <option>Others</option>
                                                    </select>
                                                </div>

                                              <div class="form-group col-md-4">
                                                <label for="inputHeight" class="col-form-label">Height(ft.)</label>
                                                    <input required="required" type="text" name="height" class="form-control" id="inputHeight" placeholder="Height">
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <label for="inputContactNumber" class="col-form-label">Contact Number</label>
                                                    <input required="required" type="text" name="contact_number" class="form-control" id="inputContactNumber" placeholder="Contact Number">
                                                </div>
                                            </div>

                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label for="inputEmail" class="col-form-label">Email</label>
                                                    <input type="email" required="required" name="email" class="form-control" id="inputEmail" placeholder="Email">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="inpuEmploymentStatus" class="col-form-label">Employment Status</label>
                                                    <select id="inpuEmploymentStatus" required="required" name="employment_status" class="form-control">
                                                
                                                       <option>NA</option>
                                                        <option>Employed</option>
                                                        <option>Unemployed</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label for="input_emplo_stat_employed" class="col-form-label">Employed</label>
                                                    <select id="input_emplo_stat_employed" required="required" name="employment_status_employed" class="form-control">
                                                  
                                                       <option>NA</option>
                                                        <option>Wage employed</option>
                                                        <option>Self-employed (Fisherman/Fisherfolk)</option>
                                                        <option>Self-employed (Vendor/Retailer)</option>
                                                        <option>Self-employed (home-based worker)</option>
                                                        <option>Self-employed (Transport)</option>
                                                        <option>Self-employed (Domistic Worker)</option>
                                                        <option>Self-employed (Freelancer)</option>
                                                        <option>Self-employed (Artisan/Craft WOrker)</option>
                                                        <option>others</option>
                                                    </select>
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="input_emplo_stat_unemployed" class="col-form-label">Unemployed</label>
                                                    <select id="input_emplo_stat_unemployed" required="required" name="employment_status_unemployed" class="form-control">
                                             
                                                       <option>NA</option>
                                                        <option>New Emtrant/Fresh Graduate</option>
                                                        <option>Finish Contract</option>
                                                        <option>Resigned</option>
                                                        <option>Retired</option>
                                                        <option>Terminated/Laid off due to calamity</option>
                                                        <option>Terminated/Laid off (Local)</option>
                                                        <option>Terminated/Laid of (abroad)</option>
                                                        <option>Others</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="form-row">                                             
                                                <div class="form-group col-md-4">
                                                    <label for="inputAreyouOFW?" class="col-form-label">Are you OFW?</label>
                                                    <select id="inputAreyouOFW?" required="required" name="Are_you_ofw" class="form-control">
                                                        <option>No</option>
                                                        <option>Yes</option>
                                                    </select>
                                                </div>
                                                <div class="form-group col-md-4">
                                                <label for="inputAreyouaformerOFW?" class="col-form-label">Are you a former OFW?</label>
                                                    <select id="inputAreyouaformerOFW?" required="required" name="are_you_a_former_ofw" class="form-control">
                                                        <option>No</option>
                                                        <option>Yes</option>
                                                    </select>
                                                </div>
                                                <div class="form-group col-md-4">
                                                <label for="inputAreyoua4Psbeneficiary?" class="col-form-label">Are you a 4Ps beneficiary?</label>
                                                    <select id="inputAreyoua4Psbeneficiary?" required="required" name="beneficiary" class="form-control">
                                                        <option>No</option>
                                                        <option>Yes</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <h4 class="header-title">JOB PREFERENCE & LANGUAGE / DIALECT PROFICIENCY</h4>
                                            <div class="form-row">
                                                <div class="form-group col-md-4">
                                                    <label for="inputPreferedOccupation" class="col-form-label">Prefered Occupation</label>
                                                    <input type="text"  name="prefered_occupation" class="form-control" id="inputPreferedOccupation" placeholder="Prefered Occupation">
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <label for="inputPreferedWorkLocation" class="col-form-label">Prefered Work Location</label>
                                                    <input type="text"  name="prefered_work_location" class="form-control" id="PreferedWorkLocation" placeholder="Prefered Work Location">
                                                </div>
                                             <div class="form-group col-md-4">
                                                <label for="inputLanguage" class="col-form-label">Language/Dialect</label>
                                                    <select id="inputLanguage" required="required" name="language_dialect" class="form-control">
                                                       <option>Cebuano</option>
                                                        <option>Tagalog</option>
                                                        <option>English</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <h4 class="header-title">EDUCATIONAL BACKGROUND</h4>
                                            <div class="form-row">                                      
                                                <div class="form-group col-md-4">
                                                    <label for="inputCurrentlyinSchool?" class="col-form-label">Currently in School?</label>
                                                    <select id="inputCurrentlyinSchool?" required="required" name="currently_in_school" class="form-control">
                                                       <option>Yes</option>
                                                        <option>No</option>
                                                    </select>
                                                </div>

                                              <div class="form-group col-md-4">
                                                <label for="inputLevel" class="col-form-label">Education Level</label>
                                                <select id="inputLevel" required="required" name="education_level" class="form-control">
                                                    <option value="">Select Education level</option>
                                                           <option>GRADE I</option>
			                                               <option>GRADE II</option>
			                                               <option>GRADE III</option>
			                                               <option>GRADE IV</option>
			                                               <option>GRADE V</option>
			                                               <option>GRADE VI</option>
			                                               <option>GRADE VII</option>
			                                               <option>GRADE VIII</option>
			                                               <option>ELEMENTARY GRADUATE</option>
			                                               <option>1ST YEAR HIGH SCHOOL/GRADE VII (FOR K TO 12)</option>
			                                               <option>2ND YEAR HIGH SCHOOL/GRADE VIII (FOR K TO 12)</option>
			                                               <option>3RD YEAR HIGH SCHOOL/GRADE IX (FOR K TO 12)</option>
			                                               <option>4TH YEAR HIGH SCHOOL/GRADE X (FOR K TO 12)</option>
			                                               <option>GRADE XI (FOR K TO 12)</option>
			                                               <option>GRADE XII (FOR K TO 12)</option>
			                                               <option>HIGH SCHOOL GRADUATE</option>
			                                               <option>VOCATIONAL UNDERGRADUATE</option>
			                                               <option>VOCATIONAL GRADUATE</option>
			                                               <option>1ST YEAR COLLEGE LEVEL</option>
			                                               <option>2ND YEAR COLLEGE LEVEL</option>
			                                               <option>3RD YEAR COLLEGE LEVEL</option>
			                                               <option>4TH YEAR COLLEGE LEVEL</option>
			                                               <option>5TH YEAR COLLEGE LEVEL</option>
			                                               <option>COLLEGE GRADUATE</option>
			                                               <option>MASTERAL/POST GRADUATE LEVEL</option>
			                                               <option>MASTERAL/POST GRADUATE</option>
                                                    </select>
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <label for="inputCourse" class="col-form-label">Course</label>
                                                    <input required="required" type="text" name="course" class="form-control" id="inputCourse" placeholder="Course">
                                                </div>
                                            </div>
                                            <h4 class="header-title">TECHNICAL/VOCATIONAL TRAINING</h4>
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label for="inputTraining" class="col-form-label">Training</label>
                                                    <input type="text"  name="training" class="form-control" id="inputTraining" placeholder="Training">
                                                </div>
                                                <div class="form-group col-md-6">
                                                <label for="inputHoursOfTraining" class="col-form-label">Hours Of Training</label>
                                                    <input type="text"  name="hours_of_training" class="form-control" id="inputHoursOfTraining" placeholder="Hours Of Training">
                                                </div>
                                            </div>
                                            <div class="form-row">                                      
                                                <div class="form-group col-md-4">
                                                    <label for="inputTrainingInstitution" class="col-form-label">Training Institution</label>
                                                    <input  type="text" name="training_institution" class="form-control" id="inputTrainingInstitution" placeholder="Training Institution">
                                                </div>
                                              <div class="form-group col-md-4">
                                                    <label for="inputSkillAcquired" class="col-form-label">Skill Acquired</label>
                                                    <input  type="text" name="skill_acquired" class="form-control" id="inputSkillAcquired" placeholder="Skill Acquired">
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <label for="inputCertificatesReceived" class="col-form-label">Certificates Received</label>
                                                    <input type="text" name="certificates_received" class="form-control" id="inputCertificatesReceived" placeholder="Number of Months">
                                                </div>
                                            </div>
                                            <h4 class="header-title">ELIGIBILITY/LICENSE</h4>
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label for="inputEmail4" class="col-form-label">Eligibility (Civil service)</label>
                                                    <input type="text"  name="eligibility_civil_service" class="form-control" id="inputEmail4" placeholder="Eligibility">
                                                </div>
                                                <div class="form-group col-md-6">
                                                <label for="inputEmail4" class="col-form-label">Professional Licence (PRC)</label>
                                                    <input type="text"  name="professional_licence" class="form-control" id="inputEmail4" placeholder="Professional Licence ">
                                                </div>
                                            </div>
                                            <h4 class="header-title">WORK EXPERIENCE</h4>
                                            <div class="form-row">                                      
                                                <div class="form-group col-md-4">
                                                    <label for="inputCompanyName" class="col-form-label">Company Name</label>
                                                    <input required="required" type="text" name="company_name" class="form-control" id="inputCompanyName" placeholder="Company Name">
                                                </div>
                                              <div class="form-group col-md-4">
                                                    <label for="inputPosition" class="col-form-label">Position</label>
                                                    <input required="required" type="text" name="position" class="form-control" id="Position" placeholder="Position">
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <label for="inputNumberofMonths" class="col-form-label">Number of Months</label>
                                                    <input required="required" type="text" name="number_of_months" class="form-control" id="inputNumberofMonths" placeholder="Number of Months">
                                                </div>
                                            </div>
                                                <h4 class="header-title">OTHER SKILLS ACQUIRED WITHOUT CERTIFICATE</h4>
                                                 <div class="form-row">
                                                          <div class="form-group col-md-6">
                                                               <label for="inputOtherSkillsclass="col-form-label>Other Skills</label>
                                                              <input type="text"  name="special_skill" class="form-control" id="inputOtherSkillsclass" placeholder="Other Skills">
                                                          </div>  
                                                          <div class="form-group col-md-6">
                                                               <label for="inputReferredTo"col-form-label>Referred To</label>
                                                                        <div id="referredToContainer" >
                                                                          <select id="inputReferredTo" required="required" name="referred_to" class="form-control">
                                                                           <!-- <select id="selector_1"  name="referred_to" class="form-control">  -->
                                                                             <option value="">Choose Referred to</option>                        
                                                                               <option>NA</option>
                                                                               <option>SPES</option>
                                                                               <option>GIP</option>
                                                                               <option>TUPAD</option>
                                                                               <option>JobStart</option>
                                                                               <option>DILEEP</option>
                                                                               <option>TESDA Training</option>
                                                                               <option value="">Others</option>
                                                                          </select>
                                                                            <input type="text" id="otherTextReferredTo" class="form-control" style="display: none;">
                                                                     </div>
                                                                     <script>
                                                                              document.getElementById("inputReferredTo").addEventListener("change", function () {
                                                                             var referredToContainer = document.getElementById("referredToContainer");
                                                                             var selectedOption = this.value;

                                                                                if (selectedOption === "") {
                                                                                  // Hide the select and show the input field
                                                                                document.getElementById("inputReferredTo").style.display = "none";
                                                                                document.getElementById("otherTextReferredTo").style.display = "block";
                                                                                document.getElementById("otherTextReferredTo").value = ""; // Clear the input field
                                                                                 document.getElementById("otherTextReferredTo").focus(); // Focus on the input field
                                                                                   } else {
                                                                                 // Show the select and hide the input field
                                                                                   document.getElementById("inputReferredTo").style.display = "block";
                                                                                   document.getElementById("otherTextReferredTo").style.display = "none";
                                                                                   }
                                                                               });
                                                                        </script>
                                                                               <!-- <input placeholder="Specify here" type="text" id="others_text" required="required" class="form-control" value="" hidden/>
                                                                               <script src="../../assets/js/vendor/jquery-2.2.4.min.js"></script>
                                                                                  <script>
                                                                                     $('#selector_1').on('change',function(){
                                                                                       if($(this).val()==='Others'){
                                                                                           $('#others_text').removeAttr('hidden')
                                                                                          }else{
                                                                                          $('#others_text').attr('hidden',true)
                                                                                          }
                                                                                       })
                                                                                 </script> -->
                                                          </div>    
                                                     </div>
                                            
                                                   
                                           <button type="submit" name="add_tesda_applicant" class="ladda-button btn btn-primary" data-style="expand-right">Add Tesda Trainee</button>
                                        </form>
                                        <!--End tesda training Form-->
                                    </div> <!-- end card-body -->
                                </div> <!-- end card-->
                            </div> <!-- end col -->
                        </div>
                        <!-- end row -->

                    </div> <!-- container -->

                </div> <!-- content -->

                <!-- Footer Start -->
                <?php include('assets/inc/footer.php');?>
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
        
    </body>

</html>