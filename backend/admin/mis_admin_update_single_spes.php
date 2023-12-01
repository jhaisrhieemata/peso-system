<!--Server side code to handle  Jobseeker Registration Form-->
<?php
	session_start();
	include('assets/inc/config.php');
		if(isset($_POST['update_spes']))
		{
            $spes_id=$_GET['spes_id'];
            $applicant_no=$_POST['applicant_no'];
            $spes_compliant=$_POST['spes_compliant'];
            $type_of_application=$_POST['type_of_application'];
            $surname=$_POST['surname'];
			$firstname=$_POST['firstname'];
			$middlename=$_POST['middlename'];
            $suffix=$_POST['suffix'];
            $contact=$_POST['contact'];
            $civil_status=$_POST['civil_status'];
            $sex=$_POST['sex'];
            $date_of_birth=$_POST['date_of_birth'];
            $age_=$_POST['age_'];
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
			$query="UPDATE spes SET applicant_no=?, spes_compliant=?, type_of_application=?, surname=?, firstname=?, middlename=?, suffix=?, contact=?, civil_status=?, sex=?, date_of_birth=?, age_=?, blood_type=?, app_zone_no=?, app_barangay=?, app_municipality=?, app_province=?, religion=?, citizenship=?, language_dialect=?, father_surname=?, father_firstname=?, father_middlename=?, father_occupation=?, number_of_brother=?, mother_surname=?, mother_firstname=?, mother_middlename=?, mother_occupation=?, number_of_sister=?, pa_zone_no=?, pa_barangay=?, pa_municipality=?, pa_province=?, elementary_school=?, elem_type_of_school=?, elem_school_address=?, elem_year_graduated=?, high_school=?, hs_type_of_school=?, strand=?, hs_year_level=?, hs_lastyear_attended=?, hs_school_address=?, college=?, col_type_of_school=?, course=?, col_school_address=?, col_lastyear_attended=?, pre_strand_course=?, psc_school=?, special_skill=?, income_of_parent=?, date_of_application=?, recieved_by=? WHERE spes_id = ?";
			$stmt = $mysqli->prepare($query);
			$rc=$stmt->bind_param('sssssssssssssssssssssssssssssssssssssssssssssssssssssssi', $applicant_no, $spes_compliant, $type_of_application, $surname, $firstname, $middlename, $suffix, $contact, $civil_status, $sex, $date_of_birth, $age_, $blood_type, $app_zone_no, $app_barangay, $app_municipality, $app_province, $religion, $citizenship, $language_dialect, $father_surname, $father_firstname, $father_middlename, $father_occupation, $number_of_brother, $mother_surname, $mother_firstname, $mother_middlename, $mother_occupation, $number_of_sister, $pa_zone_no, $pa_barangay, $pa_municipality, $pa_province, $elementary_school, $elem_type_of_school, $elem_school_address, $elem_year_graduated, $high_school, $hs_type_of_school, $strand, $hs_year_level, $hs_lastyear_attended, $hs_school_address, $college, $col_type_of_school, $course, $col_school_address, $col_lastyear_attended, $pre_strand_course, $psc_school, $special_skill, $income_of_parent, $date_of_application, $recieved_by, $spes_id);
			$stmt->execute();
			/*
			*Use Sweet Alerts Instead Of This Fucked Up Javascript Alerts
			*echo"<script>alert('Successfully Created Account Proceed To Log In ');</script>";
			*/ 
			//declare a varible which will be passed to alert function
			if($stmt)
			{
				$success = "SPES Updated";
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
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">SPES</a></li>
                                            <li class="breadcrumb-item active">Manage SPES </li>
                                        </ol>
                                    </div>
                                    <h4 class="page-title">Update Manage SPES </h4>
                                </div>
                            </div>
                        </div>     
                        <!-- end page title --> 
                        <!-- Form row -->
                        <?php
                            $spes_id=$_GET['spes_id'];
                            $ret="SELECT  * FROM  spes WHERE spes_id=?";
                            $stmt= $mysqli->prepare($ret) ;
                            $stmt->bind_param('i',$spes_id);
                            $stmt->execute() ;//ok
                            $res=$stmt->get_result();
                            //$cnt=1;
                            while($row=$res->fetch_object())
                            {
                        ?>
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title">SPES INFORMATION</h4>
                                        <!--Add Jobseeker Form-->
                                        <form method="post">
                                               <div class="form-row">
                                                <div class="form-group col-md-4">
                                                    <label for="inputapplicant_no" class="col-form-label">Applicant No.</label>
                                                    <input type="text" required="required" value="<?php echo $row->applicant_no;?>" name="applicant_no" class="form-control" id="inputapplicant_no" placeholder="Applicant No.">
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <label for="inputspescompliant" class="col-form-label">Compliant</label>
                                                    <select id="inputspescompliant" required="required" name="spes_compliant" class="form-control">
                                                    <option value="">-Select-</option>   
                                                    <option value="No" <?php if ($row->spes_compliant == 'No') echo 'selected'; ?>>No</option>
                                                    <option value="Yes" <?php if ($row->spes_compliant == 'Yes') echo 'selected'; ?>>Yes</option>
                                                    </select>
                                            
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <label for="inputtypeofapplication" class="col-form-label">Type of Application</label>
                                                    <select id="inputtypeofapplication" required="required" name="type_of_application" class="form-control">
                                                    <option value="">-Select-</option>
                                                    <option value="For College" <?php if ($row->type_of_application == 'For College') echo 'selected'; ?>>For College</option>
                                                    <option value="For Senior High School" <?php if ($row->type_of_application == 'For Senior High School') echo 'selected'; ?>>For Senior High School</option>
                                                    </select>
                                            
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-4">
                                                    <label for="inputsurname" class="col-form-label">Surname</label>
                                                    <input type="text" required="required" value="<?php echo $row->surname;?>" name="surname" class="form-control" id="inputsurname" placeholder="Surname">
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <label for="inputfirstname" class="col-form-label">First Name</label>
                                                    <input required="required" type="text" value="<?php echo $row->firstname;?>" name="firstname" class="form-control"  id="inputfirstname" placeholder="Firts Name">
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <label for="inputmiddlename" class="col-form-label">Middle Name</label>
                                                    <input type="text" required="required" value="<?php echo $row->middlename;?>" name="middlename" class="form-control" id="inputmiddlename" placeholder="Middle Name">
                                                </div>
                                            </div>

                                            <div class="form-row">
                                                <div class="form-group col-md-4">
                                                    <label for="inputsuffix" class="col-form-label">Suffix</label>
                                                    <select id="inputsuffix" required="required" name="suffix" class="form-control">
                                                    <option value="">-Select-</option>   
                                                    <option value="NA" <?php if ($row->suffix == 'NA') echo 'selected'; ?>>NA</option>
                                                    <option value="Sr" <?php if ($row->suffix == 'Sr') echo 'selected'; ?>>Sr</option>
                                                    <option value="Jr" <?php if ($row->suffix == 'Jr') echo 'selected'; ?>>Jr</option>
                                                    <option value="II" <?php if ($row->suffix == 'II') echo 'selected'; ?>>II</option>
                                                    <option value="III" <?php if ($row->suffix == 'III') echo 'selected'; ?>>III</option>
                                                    </select>
                                                </div>
                                                <div class="form-group col-md-4">
                                                          <label for="inputcontact" class="col-form-label">Contact</label>
                                                               <input required="required" type="number" value="<?php echo (int)$row->contact;?>" name="contact" class="form-control" id="inputcontact" placeholder="Contact" pattern="\d{11}" title="Please enter 11 digits">
                                                           </div>
                                                <div class="form-group col-md-4">
                                                <label for="inputcivilstatus" class="col-form-label">Civil Status</label>
                                                    <select id="inputcivilstatus" required="required" name="civil_status" class="form-control">
                                                    <option value="">-Select-</option>   
                                                    <option value="Single" <?php if ($row->civil_status == 'Single') echo 'selected'; ?>>Single</option>
                                                    <option value="Married" <?php if ($row->civil_status == 'Married') echo 'selected'; ?>>Married</option>
                                                    <option value="Widowed" <?php if ($row->civil_status == 'Widowed') echo 'selected'; ?>>Widowed</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                            <div class="form-group col-md-4">
                                                   <label for="inputSex" class="col-form-label">Sex</label>
                                                    <select id="inputSex" required="required" name="sex" class="form-control">
                                                    <option value="">-Select-</option>   
                                                    <option value="Male" <?php if ($row->sex == 'Male') echo 'selected'; ?>>Male</option>
                                                    <option value="Female" <?php if ($row->sex == 'Female') echo 'selected'; ?>>Female</option>
                                                    </select>
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <label for="date_of_birth_2" class="col-form-label">Date of Birth</label>
                                                    <input type="date" required="required" value="<?php echo $row->date_of_birth;?>" name="date_of_birth" class="form-control" id="date_of_birth_2" placeholder="Date of Birth">
                                                </div>
                                                <div class="form-group col-md-4">
                                                          <label for="ageDisplay_2" class="col-form-label">Age</label>
                                                         <input type="text" required="required"  value="<?php echo $row->age_;?>" name="age_" class="form-control" id="ageDisplay_2">
                                                     </div>
                                                
                                            </div>
                                            <div class="form-row">
                                            <div class="form-group col-md-4">
                                                  <label for="inputbloodtype" class="col-form-label">Blood Type</label>
                                                    <input required="required" type="text" value="<?php echo $row->blood_type;?>" name="blood_type" class="form-control"  id="inputbloodtype" placeholder="Blood Type">
                                                </div>
                                                <div class="form-group col-md-4">
                                                     <label for="inputappzoneno" class="col-form-label">Residential Address</label>
                                                    <input required="required" type="text" value="<?php echo $row->app_zone_no;?>" name="app_zone_no" class="form-control" id="inputappzoneno" placeholder="Purok/Zone No.">
                                                </div>
                                             <div class="form-group col-md-4">
                                                <label for="inputappbarangay" class="col-form-label">Barangay</label>
                                                    <select id="inputappbarangay" required="required" name="app_barangay" class="form-control" >
                                                    <option value="">-Select-</option>   
                                                    <option value="Agusan Canyon" <?php if ($row->app_barangay == 'Agusan Canyon') echo 'selected'; ?>>Agusan Canyon</option>
                                                    <option value="Alae" <?php if ($row->app_barangay == 'Alae') echo 'selected'; ?>>Alae</option>
                                                    <option value="Dahilayan" <?php if ($row->app_barangay == 'Dahilayan') echo 'selected'; ?>>Dahilayan</option>
                                                    <option value="Dalirig" <?php if ($row->app_barangay == 'Dalirig') echo 'selected'; ?>>Dalirig</option>
                                                    <option value="Damilag" <?php if ($row->app_barangay == 'Damilag') echo 'selected'; ?>>Damilag</option>
                                                    <option value="Dicklum" <?php if ($row->app_barangay == 'Dicklum') echo 'selected'; ?>>Dicklum</option>
                                                    <option value="Guilang-guilang" <?php if ($row->app_barangay == 'Guilang-guilang') echo 'selected'; ?>>Guilang-guilang</option>
                                                    <option value="Kalugmanan" <?php if ($row->app_barangay == 'Kalugmanan') echo 'selected'; ?>>Kalugmanan</option>
                                                    <option value="Lindaban" <?php if ($row->app_barangay == 'Lindaban') echo 'selected'; ?>>Lindaban</option>
                                                    <option value="Lingion" <?php if ($row->app_barangay == 'Lingion') echo 'selected'; ?>>Lingion</option>
                                                    <option value="Lunocan" <?php if ($row->app_barangay == 'Lunocan') echo 'selected'; ?>>Lunocan</option>
                                                    <option value="Maluko" <?php if ($row->app_barangay == 'Maluko') echo 'selected'; ?>>Maluko</option>
                                                    <option value="Mambatangan" <?php if ($row->app_barangay == 'Mambatangan') echo 'selected'; ?>>Mambatangan</option>
                                                    <option value="Mampayag" <?php if ($row->app_barangay == 'Mampayag') echo 'selected'; ?>>Mampayag</option>
                                                    <option value="Mantibugao" <?php if ($row->app_barangay == 'Mantibugao') echo 'selected'; ?>>Mantibugao</option>
                                                    <option value="Minsuro" <?php if ($row->app_barangay == 'Minsuro') echo 'selected'; ?>>Minsuro</option>
                                                    <option value="San Miguel" <?php if ($row->app_barangay == 'San Miguel') echo 'selected'; ?>>San Miguel</option>
                                                    <option value="Sankanan" <?php if ($row->app_barangay == 'Sankanan') echo 'selected'; ?>>Sankanan</option>
                                                    <option value="Santiago" <?php if ($row->app_barangay == 'Santiago') echo 'selected'; ?>>Santiago</option>
                                                    <option value="Sto Niño" <?php if ($row->app_barangay == 'Sto Niño') echo 'selected'; ?>>Sto Niño</option>
                                                    <option value="Tankulan" <?php if ($row->app_barangay == 'Tankulan') echo 'selected'; ?>>Tankulan</option>
                                                    <option value="Ticala" <?php if ($row->app_barangay == 'Ticala') echo 'selected'; ?>>Ticala</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label for="inputappmunicipality" class="col-form-label">Municipality/City</label> 
                                                    <select id="inputappmunicipality" required="required" value="<?php echo $row->app_municipality;?>" name="app_municipality" class="form-control">
                                                    <option value="Manolo Fortich">Manolo Fortich</option>
                                                    </select>
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="inputappprovince" class="col-form-label">Province</label>
                                                    <select id="inputappprovince" required="required" value="<?php echo $row->app_province;?>" name="app_province" class="form-control">
                                                        <option value="Bukidnon">Bukidnon</option>
                                                    </select>
                                                </div>
                                            </div> 
                                            <div class="form-row">
                                                <div class="form-group col-md-4">
                                                <label for="inputreligion" class="col-form-label">Religion</label>
                                                    <input required="required" type="text" value="<?php echo $row->religion;?>" name="religion" class="form-control"  id="inputreligion" placeholder="Religion">
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <label for="inputcitizenship" class="col-form-label">Citizenship</label>
                                                    <input required="required" type="text" value="<?php echo $row->citizenship;?>" name="citizenship" class="form-control"  id="inputcitizenship" placeholder="Citizenship">
                                                </div>
                                                <div class="form-group col-md-4">
                                                <label for="inputLanguage" class="col-form-label">Language/Dialect</label>
                                                    <select id="inputLanguage" required="required" name="language_dialect" class="form-control">
                                                    <option value="">-Select-</option>   
                                                    <option value="Cebuano" <?php if ($row->language_dialect == 'Cebuano') echo 'selected'; ?>>Cebuano</option>
                                                    <option value="Tagalog" <?php if ($row->language_dialect == 'Tagalog') echo 'selected'; ?>>Tagalog</option>
                                                    <option value="English" <?php if ($row->language_dialect == 'English') echo 'selected'; ?>>English</option>
                                                    </select>
                                                </div>
                                            </div>   
                                            <h4 class="header-title">COMPLETE PARENTS NAME</h4> 
                                        
                                            <div class="form-row">
                                                <div class="form-group col-md-4">
                                                    <label for="inputfathersurname" class="col-form-label">Father Surname</label>
                                                    <input type="text" required="required" value="<?php echo $row->father_surname;?>" name="father_surname" class="form-control" id="inputfathersurname" placeholder="Father Surname">
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <label for="inputfatherfirstname" class="col-form-label">Father First Name</label>
                                                    <input required="required" type="text" value="<?php echo $row->father_firstname;?>" name="father_firstname" class="form-control"  id="inputfatherfirstname" placeholder="Father First Name">
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <label for="inputfathermiddlename" class="col-form-label">Father Middle Name</label>
                                                    <input type="text" required="required" value="<?php echo $row->father_middlename;?>" name="father_middlename" class="form-control" id="inputfathermiddlename" placeholder="Father Middle Name">
                                                </div>
                                            </div> 
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                <label for="inputfatheroccupation" class="col-form-label">Father Occupation</label>
                                                    <select id="inputfatheroccupation" required="required" name="father_occupation" class="form-control">
                                                    <option value="">-Select-</option>
                                                    <option value="NA" <?php if ($row->father_occupation == 'NA') echo 'selected'; ?>>NA<option>
                                                    <option value="Employed" <?php if ($row->father_occupation == 'Employed') echo 'selected'; ?>>Employed</option>
                                                    <option value="Unemployed" <?php if ($row->father_occupation == 'Unemployed') echo 'selected'; ?>>Unemployed</option>
                                                    <option value="Seasonal Worker" <?php if ($row->father_occupation == 'Seasonal Worker') echo 'selected'; ?>>Seasonal Worker</option>
                                                    <option value="Solo Parent" <?php if ($row->father_occupation == 'Solo Parent') echo 'selected'; ?>>Solo Parent</option>
                                                    <option value="PWD" <?php if ($row->father_occupation == 'PWD') echo 'selected'; ?>>PWD</option>
                                                    <option value="Senior Citizen" <?php if ($row->father_occupation == 'Senior Citizen') echo 'selected'; ?>>Senior Citizen</option>
                                                    </select>
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="inputnumberofbrother" class="col-form-label">Number of Brother</label>
                                                    <input type="number" required="required" value="<?php echo $row->number_of_brother;?>" name="number_of_brother" class="form-control" id="inputnumberofbrother" placeholder="Number of Brother">
                                                </div>
                                            </div> 
                                           
                                            <div class="form-row">
                                                <div class="form-group col-md-4">
                                                    <label for="inputmothersurname" class="col-form-label">Mother Surname</label>
                                                    <input type="text" required="required" value="<?php echo $row->mother_surname;?>" name="mother_surname" class="form-control" id="inputmothersurname" placeholder="Mother Surname">
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <label for="inputmotherfirstname" class="col-form-label">Mother First Name</label>
                                                    <input required="required" type="text" value="<?php echo $row->mother_firstname;?>" name="mother_firstname" class="form-control"  id="inputmotherfirstname" placeholder="Mother First Name">
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <label for="inputmothermiddlename" class="col-form-label">Mother Middle Name</label>
                                                    <input type="text" required="required" value="<?php echo $row->mother_middlename;?>" name="mother_middlename" class="form-control" id="inputmothermiddlename" placeholder="Mother Middle Name">
                                                </div>
                                            </div> 
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                <label for="inputmotheroccupation" class="col-form-label">Mother Occupation</label>
                                                    <select id="inputmotheroccupation" required="required" name="mother_occupation" class="form-control">
                                                    <option value="">-Select-</option>
                                                    <option value="NA" <?php if ($row->mother_occupation == 'NA') echo 'selected'; ?>>NA</option>
                                                    <option value="Employed" <?php if ($row->mother_occupation == 'Employed') echo 'selected'; ?>>Employed</option>
                                                    <option value="Unemployed" <?php if ($row->mother_occupation == 'Unemployed') echo 'selected'; ?>>Unemployed</option>
                                                    <option value="Seasonal Worker" <?php if ($row->mother_occupation == 'Seasonal Worker') echo 'selected'; ?>>Seasonal Worker</option>
                                                    <option value="Solo Parent" <?php if ($row->mother_occupation == 'Solo Parent') echo 'selected'; ?>>Solo Parent</option>
                                                    <option value="PWD" <?php if ($row->mother_occupation == 'PWD') echo 'selected'; ?>>PWD</option>
                                                    <option value="Senior Citizen" <?php if ($row->mother_occupation == 'Senior Citizen') echo 'selected'; ?>>Senior Citizen</option>
                                                    </select>
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="inputnumberofsister" class="col-form-label">Number of Sister</label>
                                                    <input type="number" required="required" value="<?php echo $row->number_of_sister;?>" name="number_of_sister" class="form-control" id="inputnumberofsister" placeholder="Number of Sister">
                                                </div>
                                            </div> 
                                            <div class="form-row">                                                
                                                <div class="form-group col-md-6">
                                                    <label for="inputpazoneno" class="col-form-label">Present Address</label>
                                                    <input required="required" type="text" value="<?php echo $row->pa_zone_no;?>" name="pa_zone_no" class="form-control" id="inputpazoneno" placeholder="Purok/Zone No.">
                                                </div>
                                             <div class="form-group col-md-6">
                                                <label for="inputpabarangay" class="col-form-label">Barangay</label>
                                                    <select id="inputpabarangay" required="required" name="pa_barangay" class="form-control" >
                                                    <option value="">-Select-</option>
                                                    <option value="Agusan Canyon" <?php if ($row->pa_barangay == 'Agusan Canyon') echo 'selected'; ?>>Agusan Canyon</option>
                                                    <option value="Alae" <?php if ($row->pa_barangay == 'Alae') echo 'selected'; ?>>Alae</option>
                                                    <option value="Dahilayan" <?php if ($row->pa_barangay == 'Dahilayan') echo 'selected'; ?>>Dahilayan</option>
                                                    <option value="Dalirig" <?php if ($row->pa_barangay == 'Dalirig') echo 'selected'; ?>>Dalirig</option>
                                                    <option value="Damilag" <?php if ($row->pa_barangay == 'Damilag') echo 'selected'; ?>>Damilag</option>
                                                    <option value="Dicklum" <?php if ($row->pa_barangay == 'Dicklum') echo 'selected'; ?>>Dicklum</option>
                                                    <option value="Guilang-guilang" <?php if ($row->pa_barangay == 'Guilang-guilang') echo 'selected'; ?>>Guilang-guilang</option>
                                                    <option value="Kalugmanan" <?php if ($row->pa_barangay == 'Kalugmanan') echo 'selected'; ?>>Kalugmanan</option>
                                                    <option value="Lindaban" <?php if ($row->pa_barangay == 'Lindaban') echo 'selected'; ?>>Lindaban</option>
                                                    <option value="Lingion" <?php if ($row->pa_barangay == 'Lingion') echo 'selected'; ?>>Lingion</option>
                                                    <option value="Lunocan" <?php if ($row->pa_barangay == 'Lunocan') echo 'selected'; ?>>Lunocan</option>
                                                    <option value="Maluko" <?php if ($row->pa_barangay == 'Maluko') echo 'selected'; ?>>Maluko</option>
                                                    <option value="Mambatangan" <?php if ($row->pa_barangay == 'Mambatangan') echo 'selected'; ?>>Mambatangan</option>
                                                    <option value="Mampayag" <?php if ($row->pa_barangay == 'Mampayag') echo 'selected'; ?>>Mampayag</option>
                                                    <option value="Mantibugao" <?php if ($row->pa_barangay == 'Mantibugao') echo 'selected'; ?>>Mantibugao</option>
                                                    <option value="Minsuro" <?php if ($row->pa_barangay == 'Minsuro') echo 'selected'; ?>>Minsuro</option>
                                                    <option value="San Miguel" <?php if ($row->pa_barangay == 'San Miguel') echo 'selected'; ?>>San Miguel</option>
                                                    <option value="Sankanan" <?php if ($row->pa_barangay == 'Sankanan') echo 'selected'; ?>>Sankanan</option>
                                                    <option value="Santiago" <?php if ($row->pa_barangay == 'Santiago') echo 'selected'; ?>>Santiago</option>
                                                    <option value="Sto Niño" <?php if ($row->pa_barangay == 'Sto Niño') echo 'selected'; ?>>Sto Niño</option>
                                                    <option value="Tankulan" <?php if ($row->pa_barangay == 'Tankulan') echo 'selected'; ?>>Tankulan</option>
                                                    <option value="Ticala" <?php if ($row->pa_barangay == 'Ticala') echo 'selected'; ?>>Ticala</option>
                                                    </select>
                                                </div>
                                               
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label for="inputpamunicipality" class="col-form-label">Municipality/City</label>
                                                    <select id="inputpamunicipality" required="required" value="<?php echo $row->pa_municipality;?>" name="pa_municipality" class="form-control">
                                                        <option>Manolo Fortich</option>
                                                    </select>
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="inputpaprovince" class="col-form-label">Province</label>
                                                    <select id="inputpaprovince" required="required" value="<?php echo $row->pa_province;?>" name="pa_province" class="form-control">
                                                        <option>Bukidnon</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <h4 class="header-title">EDUCATIONAL BACKGROUND</h4> 
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                <label for="inputelementaryschool" class="col-form-label">Elementary School</label>
                                                    <input required="required" type="text" value="<?php echo $row->elementary_school;?>" name="elementary_school" class="form-control"  id="inputelementaryschool" placeholder="Elementary School">
                                                </div>
                                                <div class="form-group col-md-6">
                                                <label for="inputtypeofschool" class="col-form-label">Type of School</label>
                                                    <select id="inputLanguage" required="required" name="elem_type_of_school" class="form-control">
                                                    <option value="">-Select-</option>
                                                    <option value="Public" <?php if ($row->elem_type_of_school == 'Public') echo 'selected'; ?>>Public</option>
                                                    <option value="Private" <?php if ($row->elem_type_of_school == 'Private') echo 'selected'; ?>>Private</option>
                                                    </select>
                                                </div>
                                                        
                                            </div>   
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                   <label for="inputelemschooladdress" class="col-form-label">School Address</label>
                                                   <input required="required" type="text" value="<?php echo $row->elem_school_address;?>" name="elem_school_address" class="form-control"  id="inputelemschooladdress" placeholder="School Address">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="inputelemyeargraduated" class="col-form-label">Year Graduated</label>
                                                    <input required="required" type="number" value="<?php echo $row->elem_year_graduated;?>" name="elem_year_graduated" class="form-control"  id="inputelemyeargraduated" placeholder="Year Graduated">
                                                </div>  
                                            </div>   
                                            <div class="form-row">
                                                <div class="form-group col-md-4">
                                                     <label for="inputhighschool" class="col-form-label">High School</label>
                                                    <input required="required" type="text" value="<?php echo $row->high_school;?>" name="high_school" class="form-control"  id="inputhighschool" placeholder="High School">
                                                </div>
                                                <div class="form-group col-md-4">
                                                <label for="inputhstypeofschool" class="col-form-label">Type of School</label>
                                                    <select id="inputhstypeofschool" required="required" name="hs_type_of_school" class="form-control">
                                                    <option value="">-Select-</option>
                                                    <option value="Public" <?php if ($row->hs_type_of_school == 'Public') echo 'selected'; ?>>Public</option>
                                                    <option value="Private" <?php if ($row->hs_type_of_school == 'Private') echo 'selected'; ?>>Private</option>
                                                    </select>
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <label for="inputstrand" class="col-form-label">Strand</label>
                                                    <input required="required" type="text" value="<?php echo $row->strand;?>" name="strand" class="form-control"  id="inputstrand" placeholder="Strand">
                                                </div> 
                                                        
                                            </div>
                                            <div class="form-row">
                                            <div class="form-group col-md-4">
                                                    <label for="inputhsyearlevel" class="col-form-label">Year level</label>
                                                    <select id="inputhsyearlevel" required="required" name="hs_year_level" class="form-control">
                                                    <option value="">-Select-</option>
                                                           <option value="1ST YEAR HIGH SCHOOL/GRADE VII (FOR K TO 12)" <?php if  ($row->hs_year_level == '1ST YEAR HIGH SCHOOL/GRADE VII (FOR K TO 12)') echo 'selected'; ?>>1ST YEAR HIGH SCHOOL/GRADE VII (FOR K TO 12)</option>
			                                               <option value="2ND YEAR HIGH SCHOOL/GRADE VII (FOR K TO 12)" <?php if ($row->hs_year_level == '2ND YEAR HIGH SCHOOL/GRADE VII (FOR K TO 12)') echo 'selected'; ?>>2ND YEAR HIGH SCHOOL/GRADE VIII (FOR K TO 12)</option>
			                                               <option value="3RD YEAR HIGH SCHOOL/GRADE VII (FOR K TO 12)" <?php if ($row->hs_year_level == '3RD YEAR HIGH SCHOOL/GRADE VII (FOR K TO 12)') echo 'selected'; ?>>3RD YEAR HIGH SCHOOL/GRADE IX (FOR K TO 12)</option>
			                                               <option value="4TH YEAR HIGH SCHOOL/GRADE VII (FOR K TO 12)" <?php if ($row->hs_year_level == '4TH YEAR HIGH SCHOOL/GRADE VII (FOR K TO 12)') echo 'selected'; ?>>4TH YEAR HIGH SCHOOL/GRADE X (FOR K TO 12)</option>
			                                               <option value="GRADE XI (FOR K TO 12)" <?php if ($row->hs_year_level == 'GRADE XI (FOR K TO 12)') echo 'selected'; ?>>GRADE XI (FOR K TO 12)</option>
			                                               <option value="GRADE XII (FOR K TO 12)" <?php if ($row->hs_year_level == 'GRADE XII (FOR K TO 12)') echo 'selected'; ?>>GRADE XII (FOR K TO 12)</option>
                                                           <option value="HIGH SCHOOL LEVEL" <?php if ($row->hs_year_level == 'HIGH SCHOOL LEVEL') echo 'selected'; ?>>HIGH SCHOOL LEVEL</option>
			                                               <option value="HIGH SCHOOL GRADUATE" <?php if ($row->hs_year_level == 'HIGH SCHOOL GRADUATE') echo 'selected'; ?>>HIGH SCHOOL GRADUATE</option>
                                                           <option value="SENIOR HIGH SCHOOL LEVEL" <?php if ($row->hs_year_level == 'SENIOR HIGH SCHOOL LEVEL') echo 'selected'; ?>>SINIOR HIGH SCHOOL LEVEL</option>
                                                           <option value="SENIOR HIGH SCHOOL GRADUATE" <?php if ($row->hs_year_level == 'SENIOR HIGH SCHOOL GRADUATE') echo 'selected'; ?>>SINIOR HIGH SCHOOL GRADUATE</option>
                                                    </select>
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <label for="inputhslastyearattended" class="col-form-label">Last Year Attended</label>
                                                    <input required="required" type="number" value="<?php echo $row->hs_lastyear_attended;?>" name="hs_lastyear_attended" class="form-control"  id="inputhslastyearattended" placeholder="Last Year Attended">
                                                </div> 
                                                <div class="form-group col-md-4">
                                                   <label for="inputehsschooladdress" class="col-form-label">School Address</label>
                                                   <input required="required" type="text" value="<?php echo $row->hs_school_address;?>"  name="hs_school_address" class="form-control"  id="inputehsschooladdress" placeholder="School Address">
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-4">
                                                     <label for="inputecollege" class="col-form-label">College</label>
                                                    <input required="required" type="text" value="<?php echo $row->college;?>" name="college" class="form-control"  id="inputecollege" placeholder="College">
                                                </div>
                                                <div class="form-group col-md-4">
                                                <label for="inputcoltypeofschool" class="col-form-label">Type of School</label>
                                                    <select id="inputcoltypeofschool" required="required" value="<?php echo $row->col_type_of_school;?>" name="col_type_of_school" class="form-control">
                                                    <option value="">-Select-</option>
                                                    <option value="Public" <?php if ($row->col_type_of_school == 'Public') echo 'selected'; ?>>Public</option>
                                                    <option value="Private" <?php if ($row->col_type_of_school == 'Private') echo 'selected'; ?>>Private</option>
                                                    </select>
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <label for="inputcourse" class="col-form-label">Course</label>
                                                    <input required="required" type="text" value="<?php echo $row->course;?>" name="course" class="form-control"  id="inputcourse" placeholder="Course">
                                                </div> 
                                                        
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                   <label for="inputcolschooladdress" class="col-form-label">School Address</label>
                                                   <input required="required" type="text" value="<?php echo $row->col_school_address;?>" name="col_school_address" class="form-control"  id="inputcolschooladdress" placeholder="School Address">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="inputcollastyearattended" class="col-form-label">Last Year Attended</label>
                                                    <input required="required" type="number" value="<?php echo $row->col_lastyear_attended;?>" name="col_lastyear_attended" class="form-control"  id="inputcollastyearattended" placeholder="Last Year Attended">
                                                </div>  

                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-4">
                                                     <label for="inputprestrandcourse" class="col-form-label">Preferred Strand/Course</label>
                                                    <input required="required" type="text" value="<?php echo $row->pre_strand_course;?>" name="pre_strand_course" class="form-control"  id="inputprestrandcourse" placeholder="Preferred Strand/Course">
                                                </div>
                                                <div class="form-group col-md-4">
                                                <label for="inputschool" class="col-form-label">School</label>
                                                <input required="required" type="text" value="<?php echo $row->psc_school;?>" name="psc_school" class="form-control"  id="inputschool" placeholder="School">
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <label for="inputspecialskill" class="col-form-label">Special Skill</label>
                                                    <input required="required" type="text" value="<?php echo $row->special_skill;?>" name="special_skill" class="form-control"  id="inputspecialskill" placeholder="Special Skill">
                                                </div> 
                                                        
                                            </div>    
                                            <div class="form-row">
                                                <div class="form-group col-md-4">
                                                     <label for="inputincomeofparent" class="col-form-label">Income of Parent</label>
                                                     <select id="inputincomeofparent" required="required" name="income_of_parent" class="form-control">
                                                     <option value="">-Select-</option>
                                                     <option value="5,000 and below" <?php if ($row->income_of_parent == '5,000 and below') echo 'selected'; ?>>5,000 and below</option>
                                                     <option value="5,000 to 7,000" <?php if ($row->income_of_parent == '5,000 to 7,000') echo 'selected'; ?>>5,000 to 7,000</option>
                                                     <option value="7,000 to 10,000" <?php if ($row->income_of_parent == '7,000 to 10,000') echo 'selected'; ?>>7,000 to 10,000</option>
                                                     <option value="10,000 to 12,000" <?php if ($row->income_of_parent == '10,000 to 12,000') echo 'selected'; ?>>10,000 to 12,000</option>
                                                     <option value="12,000 to 15,000" <?php if ($row->income_of_parent == '12,000 to 15,000') echo 'selected'; ?>>Priv12,000 to 15,000</option>
                                                     <option value="15,000 and above" <?php if ($row->income_of_parent == 'Pri15,000 and above') echo 'selected'; ?>>15,000 and above</option>
                                                    </select>
                                                </div>
                                                
                                                <div class="form-group col-md-4">
                                                    <label for="inputdateodapplication" class="col-form-label">Date of Application</label>
                                                    <input required="required" type="date" value="<?php echo $row->date_of_application;?>" name="date_of_application" class="form-control"  id="inputdateodapplication" placeholder="Date of Application">
                                                </div> 
                                                <div class="form-group col-md-4">
                                                     <label for="inputrecievedby" class="col-form-label">Recieved by</label>
                                                      <input required="required" type="text" value="<?php echo $row->recieved_by;?>" name="recieved_by" class="form-control"  id="inputrecievedby" placeholder="Recieved by">
                                                </div>  
                                            </div>                              
                                           <button type="submit" name="update_spes" class="ladda-button btn btn-primary" data-style="expand-right">Update SPES</button>
                                        </form>
                                        <!--End spes Form-->
                                    </div> <!-- end card-body -->
                                </div> <!-- end card-->
                            </div> <!-- end col -->
                        </div>
                        <!-- end row -->
                        <?php  }?>
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
const dateOfBirthField = document.getElementById("date_of_birth_2");
const ageField = document.getElementById("ageDisplay_2");

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