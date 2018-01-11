<?php
class Macart_Excel{
	public function Excel_Generate(&$data,$excelname,$excelheaders){
		$rowData = ''; $setData = '';
		foreach ($data as $value) {  
        	$rowData .= $value. "\t";
		}  
		$setData .= trim($rowData) . "\n";    
		header("Content-type: application/octet-stream");  
		header("Content-Disposition: attachment; filename=".$excelname);  
		header("Pragma: no-cache");  
		header("Expires: 0");   
		echo ucwords($excelheaders) . "\n" . $setData . "\n";
	}

}
?>