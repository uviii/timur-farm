<?php
require('fpdf182/fpdf.php');

session_start();
include("./adminstatus/blogadmin/dbc.php");

$cc=$_SESSION['id'];

             include("./adminstatus/blogadmin/dbc.php");
            // $id=$_GET['$cc'];
             $selectquery = "SELECT*FROM `order` WHERE cid ='$cc'";
           
            $query = mysqli_query($conn , $selectquery) or die("error");
           
            $result= mysqli_fetch_array($query);
              
// SELECT `id`, `pname`, `photo`, `pquantity`, `unit`, `pid`, `price`, `cid`, `cname`, `email`, `phone`, `country`, `state`, `district`, `city`, `local_ad`, `localaddress1`, `zipcode`, `date` FROM `order` WHERE 1

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
$pdf->Cell(34,5,$result['date'],0,1);//end line

$pdf->Cell(130,5,'[devsthal,Nepal,22200]',0,0);
$pdf->Cell(25,5,'invoice ID #',0,0);
$pdf->Cell(34,5,$result['id'],0,1);//end line

$pdf->Cell(130,5,'email:timur@kupindetimur.com ',0,0);
$pdf->Cell(25,5,'custumer id #',0,0);
$pdf->Cell(34,5,$result['cid'],0,1);//end line

//dummy empty cell as vertical spacer
$pdf->Cell(189,10,'',0,1);//end line


//billing address
$pdf ->SetFont('arial','','12');

$pdf->Cell(100,5,' invoice to',0,1);//end line

//add dumy cellat beging of each line for identification

$pdf->Cell(10,5,' ',0,0);//end line
$pdf->Cell(90,5,$result['cname'],0,1);//end line

$pdf->Cell(20,5,' ',0,0);//end line
$pdf->Cell(90,5,$result['email'],0,1 );//end line

$pdf->Cell(10,5,' ',0,0);//end line
$pdf->Cell(90,5,$result['local_ad'],0,1 );//end line

$pdf->Cell(10,5,' ',0,0);//end line
$pdf->Cell(90,5,$result['localaddress1'],0,1 );//end line
$pdf->Cell(10,5,' ',0,0);//end line
$pdf->Cell(90,5,$result['district'].$result['state'],0,1);//end line
$pdf->Cell(30,5,'',0,0);//end line
$pdf->Cell(10,5,$result['country'] ,0,0);//end line
$pdf->Cell(10,5,'',0,0);//end line
$pdf->Cell(90,5,$result['zipcode'],0,1);//end line

$pdf->Cell(10,5,' ',0,0);//end line
$pdf->Cell(90,5,' ',0,1);//end line

//dummy empty cell as vertical spacer
$pdf->Cell(189,10,'',0,1);//end line
//invoice content

$pdf ->SetFont('arial','B','12');
$pdf->Cell(70,5,'discription',1,0);
$pdf->Cell(30,5,'price/qty',1,0);
$pdf->Cell(20,5,'quantity',1,0);
// $pdf->Cell(20,5,'taxable',1,0);
$pdf->Cell(27,5,'shiping-rate',1,0);
$pdf->Cell(25,5,'amount',1,1);//end line

// SELECT `id`, `pname`, `photo`, `pquantity`, `unit`, `pid`, `price`, `cid`, `cname`, `email`, `phone`, `country`, `state`, `district`, `city`, `local_ad`, `localaddress1`, `zipcode`, `date` FROM `order` WHERE 1


$cc=$_SESSION['id'];

             include("./adminstatus/blogadmin/dbc.php");
            // $id=$_GET['$cc'];
            $selectquery = "SELECT*FROM `order` WHERE cid ='$cc'";
            $query = mysqli_query($conn , $selectquery) or die("error");
            $taxi=0;
            $amount=0;
            $total_amount=0;
            $shiping=0;

           
            while ($result= mysqli_fetch_array($query)) {
           $shipings= $result['shiping'];	
 // $tax= ($result['price']*13)/100;             
$price_total=$result['price']*$result['pquantity'] ;

$pdf ->SetFont('arial','B','12');
$pdf->Cell(70,5,$result['pname'],1,0);
$pdf->Cell(30,5,$result['price'],1,0);
$pdf->Cell(20,5,$result['pquantity'].$result['unit'],1,0);
// $pdf->Cell(20,5,$tax,1,0);
$pdf->Cell(27,5,$result['shiping'],1,0);
$pdf->Cell(25,5,number_format($price_total),1,1 ,'R');//end line
// $taxi+=$tax;
$amount+=$price_total;
$shiping+=$shipings;
$total_amount=($amount+$shiping);


}





            // include("dbc.php");
            // $selectquery = "SELECT*FROM `shiping_charge`   ";
            // $query = mysqli_query($conn , $selectquery) or die("error");
           

            // while ($result= mysqli_fetch_array($query)) {
              


// $pdf->Cell(70,5,'salyani besar',1,0);
// $pdf->Cell(35,5,'200',1,0);
// $pdf->Cell(25,5,'40kg',1,0);
// $pdf->Cell(25,5,'-',1,0);
// $pdf->Cell(34,5,'8000',1,1 ,'R');//end line

$pdf ->SetFont('arial','B','12');
//number are right align so we give r after new line
$pdf->Cell(120,5,'sub-total',1,0);
// $pdf->Cell(20,5,$taxi,1,0);
$pdf->Cell(27,5,$shiping,1,0);
$pdf->Cell(25,5,number_format($amount),1,1,'R');//end line


//summary
$pdf->Cell(189,10,'',0,1);//end line
$pdf->Cell(110,5,'',0,0);

$pdf->Cell(35,5,'subtotal',1,0);
$pdf->Cell(10,5,'Rs',1,0);
$pdf->Cell(30,5,number_format( $amount),1,1,'R');//end line

// $pdf->Cell(110,5,'',0,0);

// $pdf->Cell(35,5,'taxable',1,0);
// $pdf->Cell(10,5,'Rs',1,0);
// $pdf->Cell(30,5,$taxi,1,1,'R');
//end line

// $pdf->Cell(110,5,'',0,0);

// $pdf->Cell(35,5,'tax rate',1,0);
// $pdf->Cell(10,5,'Rs',1,0);
// $pdf->Cell(30,5,'13%',1,1,'R');//end line

$pdf->Cell(110,5,'',0,0);

$pdf->Cell(35,5,'shiping_charge',1,0);
$pdf->Cell(10,5,'Rs',1,0);
$pdf->Cell(30,5,$shiping,1,1,'R');//end line


$pdf->Cell(110,10,'',0,0);
$pdf->Cell(35,10,'total due',1,0);
$pdf->Cell(10,10,'Rs',1,0);
$pdf->Cell(30,10,number_format($total_amount),1,1,'R');//end line

//summary
$pdf->Cell(189,5,'',0,1);//end line//summary
$pdf->Cell(189,5,'',0,1);//end line//summary
$pdf->Cell(189,5,'',0,1);//end line//summary

$pdf->Cell(40,5,'',0,0);
$pdf->Cell(80,5,'kupindedaha timur krishi farm pvt.ltd',0,0);
$pdf->Cell(10,5,'',0,0);
$pdf->Cell(30,5,'',0,0,'R');//end line


$pdf->Output();
?>