<?php ob_start();

session_start();

include("../functions/db.php");

include("../functions/functions.php");


aging_analysis();


function aging_analysis(){

if ($_SERVER['REQUEST_METHOD'] == "POST") {

 	header('Content-Type: text/csv; charset=utf-8');  

      header('Content-Disposition: attachment; filename=data.csv');

      $output = fopen("php://output", "w"); 

      fputcsv($output, array('TRANSACTION NO', 'TRACKING NUMBER', 'ORIGINATING_DEPARTMENT', 'ENTERED BY', 'VENDOR NAME', 'TRANSACTION TYPE', 'INVOICE NO', 'INVOICE DATE', 'Contract / PO / SO Title', 'CONTRACT AMOUNT', 'CONTRACT BALANCE', 'TRANSACTION DETAILS', 'POSTING DATE', 'GROSS AMOUNT', 'BASELINE DATE', 'AGING', '< 30DAYS', '< 60 DAYS', '< 90 DAYS', '< 180 DAYS', '> 180 DAYS')); 
      	   
                    $sql = "SELECT CONCAT(prefix, id) AS 'tracking_number', id AS 'transaction_no', originating_department, entered_by, vendor_name, transaction_type, invoice_no, invoice_date, contract_po_so_title, 'contract_amount', contract_balance, transaction_details, posting_date, gross_amount, baseline_date, aging, less_30_days, less_60_days, less_90_days, less_180_days, grt_180_days FROM aging_analysis";

                    $results = query($sql);

      
      while($row = mysqli_fetch_assoc($results))  
      {  
           
           fputcsv($output, $row);  
      }  

      fclose($output);  


} //server if statement


} //function

?>
