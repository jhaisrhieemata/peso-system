<?php
include('assets/inc/config.php');

// Create a database connection
$conn = new mysqli($host, $dbuser, $dbpass, $db);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

function filterData(&$str){ 
    $str = preg_replace("/\t/", "\\t", $str); 
    $str = preg_replace("/\r?\n/", "\\n", $str); 
    if(strstr($str, '"')) $str = '"' . str_replace('"', '""', $str) . '"'; 
}

// Excel file name for download 
$fileName = "Peso_employment_export_data-" . date('Y-m-d') . ".xls";

// Column names 
$fields = array('job_posting_id', 'or_no', 'surname', 'firstname', 'middlename', 'suffix', 'date_of_birth', 'sex', 'street_village', 'barangay', 'municipality', 'province', 'religion', 'civil_status', 'tin', 'disability', 'height', 'contact_number', 'email', 'employment_status', 'employment_status_employed', 'employment_status_unemployed', 'Are_you_ofw', 'are_you_a_former_ofw', 'beneficiary', 'prefered_occupation', 'prefered_work_location', 'language_dialect', 'currently_in_school', 'education_level', 'course', 'training', 'hours_of_training', 'training_institution', 'skill_acquired', 'certificates_received', 'eligibility_civil_service', 'professional_licence', 'company_name', 'position', 'number_of_months', 'special_skill', 'referred_to', 'date_joined');

// Display column names as the first row 
$excelData = implode("\t", array_values($fields)) . "\n"; 

// Fetch records from the database with a date range filter
$dateRange = isset($_GET['date_range']) ? $_GET['date_range'] : 'all';

switch ($dateRange) {
    case 'today':
        $dateFilter = "DATE(date_joined) = CURDATE()";
        break;
    case 'last_7_days':
        $dateFilter = "DATE(date_joined) BETWEEN DATE_SUB(CURDATE(), INTERVAL 7 DAY) AND CURDATE()";
        break;
    case 'this_week':
        $dateFilter = "YEARWEEK(date_joined, 1) = YEARWEEK(NOW(), 1)";
        break;
    case 'this_month':
        $dateFilter = "MONTH(date_joined) = MONTH(NOW()) AND YEAR(date_joined) = YEAR(NOW())";
        break;
    case 'this_year':
        $dateFilter = "YEAR(date_joined) = YEAR(NOW())";
        break;
    default:
        $dateFilter = "1"; // All records
}

$query = $conn->query("SELECT * FROM job_seeker WHERE $dateFilter ORDER BY job_posting_id ASC");

if ($query->num_rows > 0) { 
    while($row = $query->fetch_assoc()){
        $lineData = array($row['job_posting_id'], $row['or_no'], $row['surname'], $row['firstname'], $row['middlename'], $row['suffix'], $row['date_of_birth'], $row['sex'], $row['street_village'], $row['barangay'], $row['municipality'], $row['province'], $row['religion'], $row['civil_status'], $row['tin'], $row['disability'], $row['height'], $row['contact_number'], $row['email'], $row['employment_status'], $row['employment_status_employed'], $row['employment_status_unemployed'], $row['Are_you_ofw'], $row['are_you_a_former_ofw'], $row['beneficiary'], $row['prefered_occupation'], $row['prefered_work_location'], $row['language_dialect'], $row['currently_in_school'], $row['education_level'], $row['course'], $row['training'], $row['hours_of_training'], $row['training_institution'], $row['skill_acquired'], $row['certificates_received'], $row['eligibility_civil_service'], $row['professional_licence'], $row['company_name'], $row['position'], $row['number_of_months'], $row['special_skill'], $row['referred_to'], $row['date_joined']);
        array_walk($lineData, 'filterData'); 
        $excelData .= implode("\t", array_values($lineData)) . "\n"; 
    } 
} else { 
    $excelData .= 'No records found...'. "\n"; 
} 

// Headers for download 
header("Content-Type: application/vnd.ms-excel"); 
header("Content-Disposition: attachment; filename=\"$fileName\""); 
 
// Render excel data 
echo $excelData; 
 
exit();
?>
