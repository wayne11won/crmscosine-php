<?php
//include connection file 
include_once("config.php");
include_once('fpdf181/fpdf.php');
   session_start();
 
class PDF extends FPDF
{
	// Page header
	function Header()
	{
		// Logo
		$this->Image('img/logo.png',10,5,70);
		$this->SetFont('Arial','B',13);
		// Move to the right
		$this->Cell(80);
		// Title
		$this->Cell(80,10,'Contatc List',1,0,'C');
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
    function myCell($w,$h,$x,$t){
        $height=$h/3;
        $first=$height+2;
        $second=$height+$height+$height+3;
        $len=strlen($t);
        if($len>15){
            $txt=str_split($t,15);
            $this->SetX($x);
            $this->Cell($w,$first,$txt[0],'','','');
            $this->SetX($x);
            $this->Cell($w,$second,$txt[1],'','','');
            $this->SetX($x);
            $this->Cell($w,$h,'','LTRB',0,'L',0);
        }
        else{
            $this->SetX($x);
            $this->Cell($w,$h,$t,'LTRB',0,'L',0);
        }
    }
}
 
//$db = new dbObj();
//$connString =  $db->getConnstring();
//$display_heading = array('id'=>'ID', 'employee_name'=> 'Name', 'employee_age'=> 'Age','employee_salary'=> 'Salary',);
 
$result = mysqli_query($db, "SELECT a.contact_first, a.contact_last,a.company,a.industry, a.address, a.phone FROM tblcontact a
									   left join tblusers AS b on sales_repid=b.id") or die("database error:". mysqli_error($db));
//$header = mysqli_query($connString, "SHOW columns FROM employee");
$w=40;

$h=15; 

$pdf = new PDF();
//header
$pdf->AddPage('L');
//foter page
$pdf->AliasNbPages();
$pdf->SetFont('Arial','B',10);

//header
$x=$pdf->getx();
$pdf->myCell($w,$h,$x,'FIRST NAME');
$x=$pdf->getx();
$pdf->myCell($w,$h,$x,'LAST NAME');
$x=$pdf->getx();
$pdf->myCell($w,$h,$x,'COMPANY');
$x=$pdf->getx();
$pdf->myCell($w,$h,$x,'INDUSTRY');
$x=$pdf->getx();
$pdf->myCell($w,$h,$x,'ADDRESS');
$x=$pdf->getx();
$pdf->myCell($w,$h,$x,'PHONE');



foreach($result as $row) {
$pdf->Ln();
foreach($row as $column){
$x=$pdf->getx();
$pdf->myCell($w,$h,$x,$column);
}
}
$pdf->Output();
?>