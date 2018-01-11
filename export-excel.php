<?php
include('excel-generate-class.php');
$filename = "filename.xls";
$Headers = '';  
$Headers = "Head 1"."\t"."Head 2"."\t"."Head 3"."\t"."Head 4"."\t";  
$sn = 1;
$data = array();
$records = array("Record 1","Record 2","Record 3","Record 4");
$arCount = count($records);	   
   for($i=0; $i<=($arCount - 1); $i++){
		array_push($data,$records[$i]);
	}	
$excel = new Macart_Excel();
$genrate = $excel->Excel_Generate($data,$filename,$Headers);
  


?>