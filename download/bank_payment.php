<?php ob_start();

session_start();

include("../functions/db.php");

include("../functions/functions.php");


bank_payment();


function bank_payment(){

if ($_SERVER['REQUEST_METHOD'] == "POST") {

 	header('Content-Type: text/csv; charset=utf-8');  

      header('Content-Disposition: attachment; filename=data.csv');

      $output = fopen("php://output", "w"); 

      fputcsv($output, array('TRANSACTION NO', 'PAYMENT DATE', 'VENDOR NAME', 'INVOICE NUMBER', 'VENDOR BANK', 'VENDOR ACCOUNT NUMBER', 'NET AMOUNT', 'CURRENCY')); 
      	    
      	$sql = "SELECT id AS 'transaction_no', 'payment_date', 'vendor_name', 'invoice_no', 'vendor_bank', 
      	'vendor_account_number', 'net_amount', 'currency' FROM bank_payment";

      $results = query($sql);  
      
      while($row = mysqli_fetch_assoc($results))  
      {  
           
           fputcsv($output, $row);  
      }  

      fclose($output);  


} //server if statement


} //function

?>
