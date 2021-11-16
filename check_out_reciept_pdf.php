<?php
require('fpdf182/fpdf.php');



//A4 width :219mm
//default margin :10mmeach side
//writable horigantal :219-10*2mm

$pdf= new FPDF('p','mm','A4');
$pdf->AddPage();
//st font to arial, bold,15pt
$pdf ->SetFont('arial','B','14');
//cell(width,height,text,border,endline,[align])
$pdf->Cell(130,5,'kupindedaha timur krishi farm',0,0);
$pdf->Cell(59,5,'invoice',0,1);//end line
//set font to areal,regular,12pt
$pdf ->SetFont('arial','','12');
$pdf->Cell(130,5,'kupindedaha road,bangad-kupinde muncipality',0,0);
$pdf->Cell(59,5,'',0,1);//end line

$pdf ->SetFont('arial','','12');
$pdf->Cell(130,5,',09 sera,salyan,Nepal',0,0);
$pdf->Cell(59,5,'',0,1);//end line

$pdf->Cell(130,5,' phone:09899383993',0,0);
$pdf->Cell(25,5,'date',0,0);
$pdf->Cell(34,5,'[dd/mm/yy]',0,1);//end line

$pdf->Cell(130,5,'[devsthal,Nepal,22200]',0,0);
$pdf->Cell(25,5,'invoice #',0,0);
$pdf->Cell(34,5,'[1234555]',0,1);//end line

$pdf->Cell(130,5,'email:timur@kupindetimur.com ',0,0);
$pdf->Cell(25,5,'custumer ID',0,0);
$pdf->Cell(34,5,'123455555',0,1);//end line

//dummy empty cell as vertical spacer
$pdf->Cell(189,10,'',0,1);//end line


//billing address


$pdf->Cell(100,5,' invoice to',0,1);//end line


//add dumy cellat beging of each line for identification

$pdf->Cell(10,5,' ',0,0);//end line
$pdf->Cell(90,5,'YUBRAJ BUDHATHOKI',0,1);//end line

$pdf->Cell(10,5,' ',0,0);//end line
$pdf->Cell(90,5,'bangad-kupinde munci.09 sera salyan ,nepal  ',0,1);//end line
$pdf->Cell(10,5,' ',0,0);//end line
$pdf->Cell(90,5,'salyan, Madhya Pashchimanchal, 22200 Nepal',0,1);//end line
$pdf->Cell(10,5,' ',0,0);//end line
$pdf->Cell(90,5,'980003330003 ',0,1);//end line
$pdf->Cell(10,5,' ',0,0);//end line
$pdf->Cell(90,5,' ',0,1);//end line

//dummy empty cell as vertical spacer
$pdf->Cell(189,10,'',0,1);//end line
//invoice content

$pdf ->SetFont('arial','B','12');
$pdf->Cell(70,5,'discription',1,0);
$pdf->Cell(35,5,'price/quantites',1,0);
$pdf->Cell(25,5,'quantity',1,0);
$pdf->Cell(25,5,'taxable',1,0);
$pdf->Cell(34,5,'amount',1,1);//end line


$pdf ->SetFont('arial','B','12');
$pdf->Cell(70,5,'salyani besar',1,0);
$pdf->Cell(35,5,'200',1,0);
$pdf->Cell(25,5,'40kg',1,0);
$pdf->Cell(25,5,'-',1,0);
$pdf->Cell(34,5,'8000',1,1 ,'R');//end line

$pdf->Cell(70,5,'salyani besar',1,0);
$pdf->Cell(35,5,'200',1,0);
$pdf->Cell(25,5,'40kg',1,0);
$pdf->Cell(25,5,'-',1,0);
$pdf->Cell(34,5,'8000',1,1 ,'R');//end line

$pdf->Cell(70,5,'salyani besar',1,0);
$pdf->Cell(35,5,'200',1,0);
$pdf->Cell(25,5,'40kg',1,0);
$pdf->Cell(25,5,'-',1,0);
$pdf->Cell(34,5,'8000',1,1 ,'R');//end line

$pdf->Cell(70,5,'salyani besar',1,0);
$pdf->Cell(35,5,'200',1,0);
$pdf->Cell(25,5,'40kg',1,0);
$pdf->Cell(25,5,'-',1,0);
$pdf->Cell(34,5,'8000',1,1 ,'R');//end line

$pdf->Cell(70,5,'salyani besar',1,0);
$pdf->Cell(35,5,'200',1,0);
$pdf->Cell(25,5,'40kg',1,0);
$pdf->Cell(25,5,'-',1,0);
$pdf->Cell(34,5,'8000',1,1 ,'R');//end line

$pdf->Cell(70,5,'salyani besar',1,0);
$pdf->Cell(35,5,'200',1,0);
$pdf->Cell(25,5,'40kg',1,0);
$pdf->Cell(25,5,'-',1,0);
$pdf->Cell(34,5,'8000',1,1 ,'R');//end line

$pdf->Cell(70,5,'salyani besar',1,0);
$pdf->Cell(35,5,'200',1,0);
$pdf->Cell(25,5,'40kg',1,0);
$pdf->Cell(25,5,'-',1,0);
$pdf->Cell(34,5,'8000',1,1 ,'R');//end line

$pdf->Cell(70,5,'salyani besar',1,0);
$pdf->Cell(35,5,'200',1,0);
$pdf->Cell(25,5,'40kg',1,0);
$pdf->Cell(25,5,'-',1,0);
$pdf->Cell(34,5,'8000',1,1 ,'R');//end line

$pdf ->SetFont('arial','B','12');
//number are right align so we give r after new line
$pdf->Cell(130,5,'timur',1,0);
$pdf->Cell(25,5,'-',1,0);
$pdf->Cell(34,5,'23,4334',1,1,'R');//end line


//summary
$pdf->Cell(189,10,'',0,1);//end line
$pdf->Cell(130,5,'',0,0);

$pdf->Cell(22,5,'subtotal',1,0);
$pdf->Cell(7,5,'Rs',1,0);
$pdf->Cell(30,5,'23,4334',1,1,'R');//end line

$pdf->Cell(130,5,'',0,0);

$pdf->Cell(22,5,'taxable',1,0);
$pdf->Cell(7,5,'Rs',1,0);
$pdf->Cell(30,5,'0',1,1,'R');//end line

$pdf->Cell(130,5,'',0,0);

$pdf->Cell(22,5,'tax rate',1,0);
$pdf->Cell(7,5,'Rs',1,0);
$pdf->Cell(30,5,'13%',1,1,'R');//end line

$pdf->Cell(130,5,'',0,0);
$pdf->Cell(22,5,'total due',1,0);
$pdf->Cell(7,5,'Rs',1,0);
$pdf->Cell(30,5,'200002|-',1,1,'R');//end line



$pdf->Output();
?>