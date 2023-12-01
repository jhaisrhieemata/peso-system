<!--Server side code to handle  Jobseeker Registration Form-->
<?php
	session_start();
	include('assets/inc/config.php');
		if(isset($_POST['add_gip']))
		{
			$applicant_no=$_POST['applicant_no'];
            $gip_compliant=$_POST['gip_compliant'];
            $type_of_application=$_POST['type_of_application'];
            $surname=$_POST['surname'];
			$firstname=$_POST['firstname'];
			$middlename=$_POST['middlename'];
            $suffix=$_POST['suffix'];
            $contact=$_POST['contact'];
            $civil_status=$_POST['civil_status'];
            $sex=$_POST['sex'];
            $date_of_birth=$_POST['date_of_birth'];
            $age=$_POST['age'];
            $blood_type=$_POST['blood_type'];
            $app_zone_no=$_POST['app_zone_no'];
            $app_barangay=$_POST['app_barangay'];
            $app_municipality=$_POST['app_municipality'];
            $app_province=$_POST['app_province'];
            $religion=$_POST['religion'];
            $citizenship=$_POST['citizenship'];
            $language_dialect=$_POST['language_dialect'];
            $father_surname=$_POST['father_surname'];
            $father_firstname=$_POST['father_firstname'];
            $father_middlename=$_POST['father_middlename'];
            $father_occupation=$_POST['father_occupation'];
            $number_of_brother=$_POST['number_of_brother'];
            $mother_surname=$_POST['mother_surname'];
            $mother_firstname=$_POST['mother_firstname'];
            $mother_middlename=$_POST['mother_middlename'];
            $mother_occupation=$_POST['mother_occupation'];
            $number_of_sister=$_POST['number_of_sister'];
            $pa_zone_no=$_POST['pa_zone_no'];
            $pa_barangay=$_POST['pa_barangay'];
            $pa_municipality=$_POST['pa_municipality'];
            $pa_province=$_POST['pa_province'];
            $elementary_school=$_POST['elementary_school'];
            $elem_type_of_school=$_POST['elem_type_of_school'];
            $elem_school_address=$_POST['elem_school_address'];
            $elem_year_graduated=$_POST['elem_year_graduated'];
            $high_school=$_POST['high_school'];
            $hs_type_of_school=$_POST['hs_type_of_school'];
            $strand=$_POST['strand'];
            $hs_year_level=$_POST['hs_year_level'];
            $hs_lastyear_attended=$_POST['hs_lastyear_attended'];
            $hs_school_address=$_POST['hs_school_address'];
            $college=$_POST['college'];
            $col_type_of_school=$_POST['col_type_of_school'];
            $course=$_POST['course'];
            $col_school_address=$_POST['col_school_address'];
            $col_lastyear_attended=$_POST['col_lastyear_attended'];
            $pre_strand_course=$_POST['pre_strand_course'];
            $psc_school=$_POST['psc_school'];
            $special_skill=$_POST['special_skill'];
            $income_of_parent=$_POST['income_of_parent'];
            $date_of_application=$_POST['date_of_application'];
            $recieved_by=$_POST['recieved_by'];
           
            //sql to insert captured values
			$query="insert into gip (applicant_no, gip_compliant, type_of_application, surname, firstname, middlename, suffix, contact, civil_status, sex, date_of_birth, age_, blood_type, app_zone_no, app_barangay, app_municipality, app_province, religion, citizenship, language_dialect, father_surname, father_firstname, father_middlename, father_occupation, number_of_brother, mother_surname, mother_firstname, mother_middlename, mother_occupation, number_of_sister, pa_zone_no, pa_barangay, pa_municipality, pa_province, elementary_school, elem_type_of_school, elem_school_address, elem_year_graduated, high_school, hs_type_of_school, strand, hs_year_level, hs_lastyear_attended, hs_school_address, college, col_type_of_school, course, col_school_address, col_lastyear_attended, pre_strand_course, psc_school, special_skill, income_of_parent, date_of_application, recieved_by) values(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
			$stmt = $mysqli->prepare($query);
			$rc=$stmt->bind_param('sssssssssssssssssssssssssssssssssssssssssssssssssssssss', $applicant_no, $gip_compliant, $type_of_application, $surname, $firstname, $middlename, $suffix, $contact, $civil_status, $sex, $date_of_birth, $age_, $blood_type, $app_zone_no, $app_barangay, $app_municipality, $app_province, $religion, $citizenship, $language_dialect, $father_surname, $father_firstname, $father_middlename, $father_occupation, $number_of_brother, $mother_surname, $mother_firstname, $mother_middlename, $mother_occupation, $number_of_sister, $pa_zone_no, $pa_barangay, $pa_municipality, $pa_province, $elementary_school, $elem_type_of_school, $elem_school_address, $elem_year_graduated, $high_school, $hs_type_of_school, $strand, $hs_year_level, $hs_lastyear_attended, $hs_school_address, $college, $col_type_of_school, $course, $col_school_address, $col_lastyear_attended, $pre_strand_course, $psc_school, $special_skill, $income_of_parent, $date_of_application, $recieved_by);
			$stmt->execute();
			/*
			*Use Sweet Alerts Instead Of This Fucked Up Javascript Alerts
			*echo"<script>alert('Successfully Created Account Proceed To Log In ');</script>";
			*/ 
			//declare a varible which will be passed to alert function
			if($stmt)
			{
				$success = "Details Added";
			}
			else {
				$err = "Please Try Again Or Try Later";
			}
			
			
		}
?>
<!--End Server Side-->
<!--End Patient Registration-->
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
            <?php include("assets/inc/sidebar.php");?>
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
                                            <li class="breadcrumb-item"><a href="mis_admin_dashboard.php">Dashboard</a></li>
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">GIP</a></li>
                                            <li class="breadcrumb-item active">New GIP </li>
                                        </ol>
                                    </div>
                                    <h4 class="page-title">Create New GIP </h4>
                                </div>
                            </div>
                        </div>     
                        <!-- end page title --> 
                        <!-- Form row -->
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title">GIP INFORMATION</h4>
                                        <!--Add GIP Form-->
                                        <form method="post">
                                        
                                               <div class="form-row">
                                                   <div class="form-group col-md-4">
                                                        <label for="inputapplicant_no" class="col-form-label">Applicant No.</label>
                                                        <input type="text" required="required" name="applicant_no" class="form-control" id="inputapplicant_no" placeholder="Applicant No.">
                                                    </div>
                                                  <div class="form-group col-md-4">
                                                       <label for="inputgipcompliant" class="col-form-label">Compliant</label>
                                                       <select id="inputgipcompliant" required="required" name="gip_compliant" class="form-control">
                                                       <option value="">-Select-</option>   
                                                                <option>Yes</option>
                                                                <option>No</option>
                                                       </select>
                                                  </div>
                                                  <div class="form-group col-md-4">
                                                       <label for="inputtypeofapplication" class="col-form-label">Type of Application</label>
                                                       <select id="inputtypeofapplication" required="required" name="type_of_application" class="form-control">
                                                       <option value="">-Select-</option>   
                                                       <option>For College</option>
                                                       <option>For Senior High School</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-4">
                                                    <label for="inputsurname" class="col-form-label">Surname</label>
                                                    <input type="text" required="required" name="surname" class="form-control" id="inputsurname" placeholder="Surname">
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <label for="inputfirstname" class="col-form-label">First Name</label>
                                                    <input required="required" type="text" name="firstname" class="form-control"  id="inputfirstname" placeholder="First Name">
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <label for="inputmiddlename" class="col-form-label">Middle Name</label>
                                                    <input type="text" required="required" name="middlename" class="form-control" id="inputmiddlename" placeholder="Middle Name">
                                                </div>
                                            </div>

                                            <div class="form-row">
                                                <div class="form-group col-md-4">
                                                    <label for="inputsuffix" class="col-form-label">Suffix</label>
                                                    <select id="inputsuffix" required="required" name="suffix" class="form-control">
                                                    <option value="">-Select-</option>   
                                                       <option>NA</option>
                                                        <option>Sr</option>
                                                        <option>Jr</option>
                                                        <option>III</option>
                                                        <option>II</option>
                                                    </select>
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <label for="inputcontact" class="col-form-label">Contact</label>
                                                    <input required="required" type="number" name="contact" class="form-control"  id="inputcontact" placeholder="Contact" pattern="\d{11}" title="Please enter 11 digits">
                                                </div>
                                                <div class="form-group col-md-4">
                                                <label for="inputcivilstatus" class="col-form-label">Civil Status</label>
                                                    <select id="inputcivilstatus" required="required" name="civil_status" class="form-control">
                                                    <option value="">-Select-</option>   
                                                        <option>Single</option>
                                                        <option>Married</option>
                                                        <option>Widowed</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                            <div class="form-group col-md-4">
                                                   <label for="inputSex" class="col-form-label">Sex</label>
                                                    <select id="inputSex" required="required" name="sex" class="form-control">
                                                    <option value="">-Select-</option>   
                                                        <option>Male</option>
                                                        <option>Female</option>
                                                    </select>
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <label for="date_of_birth_3" class="col-form-label">Date of Birth</label>
                                                    <input type="date" required="required" name="date_of_birth" class="form-control" id="date_of_birth_3" placeholder="Date of Birth">
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <label for="ageDisplay_3" class="col-form-label">Age</label>
                                                    <input required="required" type="text" name="age" class="form-control"  id="ageDisplay_3" placeholder="Age">
                                                </div>
                                                
                                            </div>
                                            <div class="form-row">
                                            <div class="form-group col-md-4">
                                                  <label for="inputbloodtype" class="col-form-label">Blood Type</label>
                                                    <input required="required" type="text" name="blood_type" class="form-control"  id="inputbloodtype" placeholder="Blood Type">
                                                </div>
                                                <div class="form-group col-md-4">
                                                     <label for="inputappzoneno" class="col-form-label">Residential Address</label>
                                                    <input required="required" type="text" name="app_zone_no" class="form-control" id="inputappzoneno" placeholder="Purok/Zone No.">
                                                </div>
                                             <div class="form-group col-md-4">
                                                <label for="inputappbarangay" class="col-form-label">Barangay</label>
                                                    <select id="inputappbarangay" required="required" name="app_barangay" class="form-control" >
                                                    <option value="">-Select-</option>   
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
                                                        <option>Ticala</option>

                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label for="inputappmunicipality" class="col-form-label">Municipality/City</label> 
                                                    <select id="inputappmunicipality" required="required" name="app_municipality" class="form-control">
                                                    <option value="Manolo Fortich">Manolo Fortich</option>
                                                    </select>
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="inputappprovince" class="col-form-label">Province</label>
                                                    <select id="inputappprovince" required="required" name="app_province" class="form-control">
                                                        <option value="Bukidnon">Bukidnon</option>
                                                    </select>
                                                </div>
                                            </div> 
                                            <div class="form-row">
                                                <div class="form-group col-md-4">
                                                <label for="inputreligion" class="col-form-label">Religion</label>
                                                    <input required="required" type="text" name="religion" class="form-control"  id="inputreligion" placeholder="Religion">
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <label for="inputcitizenship" class="col-form-label">Citizenship</label>
                                                    <input required="required" type="text" name="citizenship" class="form-control"  id="inputcitizenship" placeholder="Citizenship">
                                                </div>
                                                <div class="form-group col-md-4">
                                                <label for="inputLanguage" class="col-form-label">Language/Dialect</label>
                                                    <select id="inputLanguage" required="required" name="language_dialect" class="form-control">
                                                    <option value="">-Select-</option>   
                                                    <option>Cebuano</option>
                                                        <option>Tagalog</option>
                                                        <option>English</option>
                                                    </select>
                                                </div>
                                            </div>   
                                            <h4 class="header-title">COMPLETE PARENTS NAME</h4> 
                                        
                                            <div class="form-row">
                                                <div class="form-group col-md-4">
                                                    <label for="inputfathersurname" class="col-form-label">Father Surname</label>
                                                    <input type="text" required="required" name="father_surname" class="form-control" id="inputfathersurname" placeholder="Father Surname">
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <label for="inputfatherfirstname" class="col-form-label">Father First Name</label>
                                                    <input required="required" type="text" name="father_firstname" class="form-control"  id="inputfatherfirstname" placeholder="Father First Name">
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <label for="inputfathermiddlename" class="col-form-label">Father Middle Name</label>
                                                    <input type="text" required="required" name="father_middlename" class="form-control" id="inputfathermiddlename" placeholder="Father Middle Name">
                                                </div>
                                            </div> 
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                <label for="inputfatheroccupation" class="col-form-label">Father Occupation</label>
                                                    <select id="inputfatheroccupation" required="required" name="father_occupation" class="form-control">
                                                    <option value="">-Select-</option>   
                                                        <option>NA</option>
                                                        <option>Employed</option>
                                                        <option>Unemployed</option>
                                                        <option>Seasonal Worker</option>
                                                        <option>Solo Parent</option>
                                                        <option>PWD</option>
                                                        <option>Senior Citizen</option>
                                                    </select>
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="inputnumberofbrother" class="col-form-label">Number of Brother</label>
                                                    <input type="number" required="required" name="number_of_brother" class="form-control" id="inputnumberofbrother" placeholder="Number of Brother">
                                                </div>
                                            </div> 
                                           
                                            <div class="form-row">
                                                <div class="form-group col-md-4">
                                                    <label for="inputmothersurname" class="col-form-label">Mother Surname</label>
                                                    <input type="text" required="required" name="mother_surname" class="form-control" id="inputmothersurname" placeholder="Mother Surname">
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <label for="inputmotherfirstname" class="col-form-label">Mother First Name</label>
                                                    <input required="required" type="text" name="mother_firstname" class="form-control"  id="inputmotherfirstname" placeholder="Mother First Name">
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <label for="inputmothermiddlename" class="col-form-label">Mother Middle Name</label>
                                                    <input type="text" required="required" name="mother_middlename" class="form-control" id="inputmothermiddlename" placeholder="Mother Middle Name">
                                                </div>
                                            </div> 
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                <label for="inputmotheroccupation" class="col-form-label">Mother Occupation</label>
                                                    <select id="inputmotheroccupation" required="required" name="mother_occupation" class="form-control">
                                                    <option value="">-Select-</option>   
                                                        <option>NA</option>
                                                        <option>Employed</option>
                                                        <option>Unemployed</option>
                                                        <option>Seasonal Worker</option>
                                                        <option>Solo Parent</option>
                                                        <option>PWD</option>
                                                        <option>Senior Citizen</option>
                                                    </select>
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="inputnumberofsister" class="col-form-label">Number of Sister</label>
                                                    <input type="number" required="required" name="number_of_sister" class="form-control" id="inputnumberofsister" placeholder="Number of Sister">
                                                </div>
                                            </div> 
                                            <div class="form-row">                                                
                                                <div class="form-group col-md-6">
                                                    <label for="inputpazoneno" class="col-form-label">Present Address</label>
                                                    <input required="required" type="text" name="pa_zone_no" class="form-control" id="inputpazoneno" placeholder="Purok/Zone No.">
                                                </div>
                                             <div class="form-group col-md-6">
                                                <label for="inputpabarangay" class="col-form-label">Barangay</label>
                                                    <select id="inputpabarangay" required="required" name="pa_barangay" class="form-control" >
                                                    <option value="">-Select-</option>   
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
                                                        <option>Ticala</option>

                                                    </select>
                                                </div>
                                               
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label for="inputpamunicipality" class="col-form-label">Municipality/City</label>
                                                    <select id="inputpamunicipality" required="required" name="pa_municipality" class="form-control">
                                                        <option>Manolo Fortich</option>
                                                    </select>
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="inputpaprovince" class="col-form-label">Province</label>
                                                    <select id="inputpaprovince" required="required" name="pa_province" class="form-control">
                                                        <option>Bukidnon</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <h4 class="header-title">EDUCATIONAL BACKGROUND</h4> 
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                <label for="inputelementaryschool" class="col-form-label">Elementary School</label>
                                                    <input required="required" type="text" name="elementary_school" class="form-control"  id="inputelementaryschool" placeholder="Elementary School">
                                                </div>
                                                <div class="form-group col-md-6">
                                                <label for="inputtypeofschool" class="col-form-label">Type of School</label>
                                                    <select id="inputLanguage" required="required" name="elem_type_of_school" class="form-control">
                                                    <option value="">-Select-</option>   
                                                    <option>Public</option>
                                                        <option>Private</option>
                                                    </select>
                                                </div>
                                                        
                                            </div>   
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                   <label for="inputelemschooladdress" class="col-form-label">School Address</label>
                                                   <input required="required" type="text" name="elem_school_address" class="form-control"  id="inputelemschooladdress" placeholder="School Address">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="inputelemyeargraduated" class="col-form-label">Year Graduated</label>
                                                    <input required="required" type="number" name="elem_year_graduated" class="form-control"  id="inputelemyeargraduated" placeholder="Year Graduated">
                                                </div>  
                                            </div>   
                                            <div class="form-row">
                                                <div class="form-group col-md-4">
                                                     <label for="inputhighschool" class="col-form-label">High School</label>
                                                    <input required="required" type="text" name="high_school" class="form-control"  id="inputhighschool" placeholder="High School">
                                                </div>
                                                <div class="form-group col-md-4">
                                                <label for="inputhstypeofschool" class="col-form-label">Type of School</label>
                                                    <select id="inputhstypeofschool" required="required" name="hs_type_of_school" class="form-control">
                                                    <option value="">-Select-</option>   
                                                    <option>Public</option>
                                                        <option>Private</option>
                                                    </select>
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <label for="inputstrand" class="col-form-label">Strand</label>
                                                    <input required="required" type="text" name="strand" class="form-control"  id="inputstrand" placeholder="Strand">
                                                </div> 
                                                        
                                            </div>
                                            <div class="form-row">
                                            <div class="form-group col-md-4">
                                                    <label for="inputhsyearlevel" class="col-form-label">Year level</label>
                                                    <select id="inputhsyearlevel" required="required" name="hs_year_level" class="form-control">
                                                    <option value="">-Select-</option>   
                                                           <option>1ST YEAR HIGH SCHOOL/GRADE VII (FOR K TO 12)</option>
			                                               <option>2ND YEAR HIGH SCHOOL/GRADE VIII (FOR K TO 12)</option>
			                                               <option>3RD YEAR HIGH SCHOOL/GRADE IX (FOR K TO 12)</option>
			                                               <option>4TH YEAR HIGH SCHOOL/GRADE X (FOR K TO 12)</option>
			                                               <option>GRADE XI (FOR K TO 12)</option>
			                                               <option>GRADE XII (FOR K TO 12)</option>
			                                               <option>HIGH SCHOOL GRADUATE</option>
                                                    </select>
                                            
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <label for="inputhslastyearattended" class="col-form-label">Last Year Attended</label>
                                                    <input required="required" type="number" name="hs_lastyear_attended" class="form-control"  id="inputhslastyearattended" placeholder="Last Year Attended">
                                                </div> 
                                                <div class="form-group col-md-4">
                                                   <label for="inputehsschooladdress" class="col-form-label">School Address</label>
                                                   <input required="required" type="text" name="hs_school_address" class="form-control"  id="inputehsschooladdress" placeholder="School Address">
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-4">
                                                     <label for="inputecollege" class="col-form-label">College</label>
                                                    <input required="required" type="text" name="college" class="form-control"  id="inputecollege" placeholder="College">
                                                </div>
                                                <div class="form-group col-md-4">
                                                <label for="inputcoltypeofschool" class="col-form-label">Type of School</label>
                                                    <select id="inputcoltypeofschool" required="required" name="col_type_of_school" class="form-control">
                                                    <option value="">-Select-</option>   
                                                    <option>Public</option>
                                                        <option>Private</option>
                                                    </select>
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <label for="inputcourse" class="col-form-label">Course</label>
                                                    <input required="required" type="text" name="course" class="form-control"  id="inputcourse" placeholder="Course">
                                                </div> 
                                                        
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                   <label for="inputcolschooladdress" class="col-form-label">School Address</label>
                                                   <input required="required" type="text" name="col_school_address" class="form-control"  id="inputcolschooladdress" placeholder="School Address">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="inputcollastyearattended" class="col-form-label">Last Year Attended</label>
                                                    <input required="required" type="number" name="col_lastyear_attended" class="form-control"  id="inputcollastyearattended" placeholder="Last Year Attended">
                                                </div>  

                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-4">
                                                     <label for="inputprestrandcourse" class="col-form-label">Preferred Strand/Course</label>
                                                    <input required="required" type="text" name="pre_strand_course" class="form-control"  id="inputprestrandcourse" placeholder="Preferred Strand/Course">
                                                </div>
                                                <div class="form-group col-md-4">
                                                <label for="inputschool" class="col-form-label">School</label>
                                                <input required="required" type="text" name="psc_school" class="form-control"  id="inputschool" placeholder="School">
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <label for="inputspecialskill" class="col-form-label">Special Skill</label>
                                                    <input required="required" type="text" name="special_skill" class="form-control"  id="inputspecialskill" placeholder="Special Skill">
                                                </div> 
                                                        
                                            </div>    
                                            <div class="form-row">
                                                <div class="form-group col-md-4">
                                                     <label for="inputincomeofparent" class="col-form-label">Income of Parent</label>
                                                     <select id="inputincomeofparent" required="required" name="income_of_parent" class="form-control">
                                                     <option value="">-Select-</option>   
                                                        <option>5,000 and below</option>
                                                        <option>5,000 to 7,000</option>
                                                        <option>7,000 to 10,000</option>
                                                        <option>10,000 to 12,000</option>
                                                        <option>12,000 to 15,000</option>
                                                        <option>15,000 and above</option>
                                                    </select>
                                                </div>
                                                
                                                <div class="form-group col-md-4">
                                                    <label for="inputdateodapplication" class="col-form-label">Date of Application</label>
                                                    <input required="required" type="date" name="date_of_application" class="form-control"  id="inputdateodapplication" placeholder="Date of Application">
                                                </div> 
                                                <div class="form-group col-md-4">
                                                     <label for="inputrecievedby" class="col-form-label">Recieved by</label>
                                                      <input required="required" type="text" name="recieved_by" class="form-control"  id="inputrecievedby" placeholder="Recieved by">
                                                </div>  
                                            </div>                                                       
                                           <button type="submit" name="add_gip" class="ladda-button btn btn-primary" data-style="expand-right">Add GIP</button>
                                        </form>
                                        <!--End Patient Form-->
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

        
        <script>
        // Get references to the date of birth and age input fields
const dateOfBirthField = document.getElementById("date_of_birth_3");
const ageField = document.getElementById("ageDisplay_3");

// Add an event listener to the date of birth input field
dateOfBirthField.addEventListener("change", calculateAge);

// Function to calculate age from the date of birth
function calculateAge() {
    // Get the selected date of birth as a Date object
    const dateOfBirth = new Date(dateOfBirthField.value);

    // Get the current date
    const currentDate = new Date();

    // Calculate the age
    let age = currentDate.getFullYear() - dateOfBirth.getFullYear();

    // Check if the birthdate for this year has occurred or not
    if (
        currentDate.getMonth() < dateOfBirth.getMonth() ||
        (currentDate.getMonth() === dateOfBirth.getMonth() && currentDate.getDate() < dateOfBirth.getDate())
    ) {
        age--;
    }

    // Update the "Age" input field with the calculated age
    ageField.value = age;
}
    </script>
        
    </body>

</html>