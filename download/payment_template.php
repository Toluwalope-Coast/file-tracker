<?php ob_start();

session_start();

include("../functions/db.php");

include("../functions/functions.php");


payment_template();


function payment_template(){

if ($_SERVER['REQUEST_METHOD'] == "POST") {

 	header('Content-Type: text/csv; charset=utf-8');  

      header('Content-Disposition: attachment; filename=data.csv');

      $output = fopen("php://output", "w"); 

      fputcsv($output, array('transaction_no', 'document_date', 'document_type', 'company_code', 'posting_date', 'posting_period', 'currency', 'exchange_rate', 'reference', 'document_header_text', 'calculate_tax, pmt_method_supplement')); 

      $sql = "SELECT id AS 'transaction_no', document_date, document_type, company_code, posting_date, posting_period, currency, exchange_rate, reference, document_header_text, calculate_tax, pmt_method_supplement FROM payment_template";

      $results = query($sql);  
      
      while($row = mysqli_fetch_assoc($results))  
      {  
           
           fputcsv($output, $row);  
      }  

      fclose($output);  


} //server if statement


} //function

?>
