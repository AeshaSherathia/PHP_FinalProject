<?PHP

//To fetch all the names of Image files in respective variables on POST
if(!empty($_POST['Submit']))
{
$img1=$_POST['pic1'];
$img2=$_POST['pic2'];
$img3=$_POST['pic3'];
$img4=$_POST['pic4'];

//export the php file for pdf generation
require("fpdf/fpdf.php");

//Object create
$pdf=new FPDF();

//add a page to Pdf
$pdf->AddPage();

//To display the images which were given input in forms

$pdf->Image($img1,35,30,60,60);
$pdf->Image($img2,105,30,60,60);
$pdf->Image($img3,35,100,60,60);
$pdf->Image($img4,105,100,60,60);

$pdf->output();

}
?>