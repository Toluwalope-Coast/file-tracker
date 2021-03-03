<?php ob_start();

session_start();

include("../functions/db.php");

include("../functions/functions.php");


payment_template_1();


function payment_template_1(){

if ($_SERVER['REQUEST_METHOD'] == "POST") {

 	header('Content-Type: text/csv; charset=utf-8');  

      header('Content-Disposition: attachment; filename=data.csv');

      $output = fopen("php://output", "w"); 

      fputcsv($output, array('transaction_no', 'posting_key', 'gl_indicator', 'transaction_type', 'gl', 'amount', 'lc_amount', 'tax', 'vendor_name', 'cost_center', 'invoice_order', 'profit_center', 'recovery_indicator', 'wbs_indicator', 'contract_po_so_title')); 

      $sql = "SELECT id AS 'transaction_no', posting_key, gl_indicator, transaction_type, gl, amount, lc_amount, tax, vendor_name, cost_center, invoice_order, profit_center, recovery_indicator, wbs_indicator, contract_po_so_title  FROM payment_template_1";

      $results = query($sql);  
      
      while($row = mysqli_fetch_assoc($results))  
      {  
           
           fputcsv($output, $row);  
      }  

      fclose($output);  


} //server if statement


} //function

?>
