<?php
Class dbObj{
	/* Database connection start */
	var $dbhost = "localhost";
	var $username = "root";
	var $password = "william99";
	var $dbname = "project";
	var $conn;
	function getConnstring() {
		$con = mysqli_connect($this->dbhost, $this->username, $this->password, $this->dbname) or die("Connection failed: " . mysqli_connect_error());

		/* check connection */
		if (mysqli_connect_errno()) {
			printf("Connect failed: %s\n", mysqli_connect_error());
			exit();
		} else {
			$this->conn = $con;
		}
		return $this->conn;
	}
}
?>
<?php
//include connection file
include_once('libs/fpdf.php');
 
class PDF extends FPDF
{
// Page header
function Header()
{
    
    $this->SetFont('Arial','B',13);
    // Move to the right
    $this->Cell(80);
    // Title
    $this->Cell(80,10,'Medication List',1,0,'C');
    // Line break
    $this->Ln(20);
}
 
// Page footer
function Footer()
{
    // Position at 1.5 cm from bottom
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Page number
    $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
}
}
 
$display_heading = array('id'=>'ID', 'cattleno'=> 'Tag No.', 'identify_date'=> 'Identified', 'start_date'=> 'Start', 'end_date'=> 'Stop', 'next_date'=> 'Next Date', 'type'=> 'Type', 'dose'=> 'Dosage');
$db = new dbObj();
$connString =  $db->getConnstring();
$result = mysqli_query($connString, "SELECT id, cattleno, identify_date, start_date, end_date, next_date, type, dose FROM medicine") or die("database error:". mysqli_error($conn));
$header = mysqli_query($connString, "SHOW columns FROM medicine WHERE field != 'comments'");
 
$pdf = new PDF();
//header
$pdf->AddPage();
//foter page
$pdf->AliasNbPages();
$pdf->SetFont('Arial','B',11);
foreach($header as $heading) {
$pdf->Cell(24,8,$display_heading[$heading['Field']],1);
}
foreach($result as $row) {
$pdf->SetFont('Arial','',10);
$pdf->Ln();
foreach($row as $column)
$pdf->Cell(24,8,$column,1);
}
$pdf->Output();
?>