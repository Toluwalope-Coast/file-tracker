<?php ob_start();

session_start();

include("db.php");

include("functions.php");


insert_data_capturing_invoice_processor();


function insert_data_capturing_invoice_processor(){

	if ($_SERVER['REQUEST_METHOD'] == "POST") {
		
		$originating_department = clean_text_data($_POST['originating_department']);
		$entered_by = clean_text_data($_POST['entered_by']);
		$vendorname = clean_text_data($_POST['vendorname']);
		$transaction_type = clean_text_data($_POST['transactionType']);
		$InvoiceNo = clean_int_data($_POST['invoice_no']);
		$invoicedate = clean_text_data($_POST['invoice_date']);
		$Contract_Po_So_Title = clean_text_data($_POST['contract_po_so_title']);
		$contract_amount = clean_float_data($_POST['contract_amount']);
		$contract_balance = clean_float_data($_POST['contract_balance']);
		$transaction_details = clean_text_data($_POST['transaction_details']);
		$postingdate = clean_text_data($_POST['posting_date']);
		$grossamount = clean_float_data($_POST['gross_amount']);
		$Markup = clean_float_data($_POST['mark_up']);
		$pensioncharge = clean_float_data($_POST['pension_charge']);
		$Retention = clean_float_data($_POST['retention']);
		$CurrencyType = clean_text_data($_POST['currencyType']);
		$ActualPerformancePeriod = clean_text_data($_POST['actual_performance_period']);
		$Reimbursible = $grossamount - $Markup;



		$vat = $Markup * (5 / 100);
		$wht = $Markup * (10 / 100);
		$ncd = $Markup * (1 / 100);
		$NetAmount = $grossamount - $pensioncharge - $Retention - $vat - $wht - $ncd;



		$baseline_date = date("Y-m-d");
		$aging = intval((strtotime($baseline_date) - strtotime($invoicedate))/86400);
		if ($aging < 30) {
			$less_30_days = 1;
		}

		if ($aging < 60) {
			$less_60_days = 1;
		}

		if ($aging < 90) {
			$less_90_days = 1;
		}
		if ($aging < 180) {
			$less_180_days = 1;
		}
		if ($aging > 180) {
			$grt_180_days = 1;
		}

		$document_header_text = 'OML 42 AMT ' .$postingdate .' PERF BKG';
		$Contract_Po_So_Title1 = 'OML 42 AMT ' .$Contract_Po_So_Title;

		
		$sql = "INSERT INTO data_capturing_invoice_processing(originating_department, entered_by, vendor_name, transaction_type, invoice_no, invoice_date, contract_po_so_title, contract_amount, contract_balance, transaction_details, posting_date, gross_amount, reimbursible, mark_up, pension_charge, retention, currency, actual_performance_period) VALUES('$originating_department', '$entered_by', '$vendorname', '$transaction_type', '$InvoiceNo', '$invoicedate', '$Contract_Po_So_Title', '$contract_amount', '$contract_balance', '$transaction_details', '$postingdate', '$grossamount', '$Reimbursible', '$Markup', '$pensioncharge', '$Retention', '$CurrencyType', '$ActualPerformancePeriod')";

		$results = query($sql);

		$sql = "INSERT INTO invoice_tracking(originating_department, entered_by, vendor_name, transaction_type, invoice_no, invoice_date, contract_po_so_title, contract_amount, contract_balance, transaction_details, posting_date, gross_amount) VALUES('$originating_department', '$entered_by', '$vendorname', '$transaction_type', '$InvoiceNo', '$invoicedate', '$Contract_Po_So_Title', '$contract_amount', '$contract_balance', '$transaction_details', '$postingdate', '$grossamount')";

		$results1 = query($sql);

		$sql = "INSERT INTO contract_commitment(originating_department, entered_by, vendor_name, transaction_type, invoice_no, invoice_date, contract_po_so_title, contract_amount, contract_balance, transaction_details, posting_date, gross_amount) VALUES('$originating_department', '$entered_by', '$vendorname', '$transaction_type', '$InvoiceNo', '$invoicedate', '$Contract_Po_So_Title', '$contract_amount', '$contract_balance', '$transaction_details', '$postingdate', '$grossamount')";

		$results2 = query($sql);

		$sql = "INSERT INTO sap_documents(originating_department, entered_by, vendor_name, transaction_type, invoice_no, invoice_date, contract_po_so_title, contract_amount, contract_balance, transaction_details, posting_date, gross_amount) VALUES('$originating_department', '$entered_by', '$vendorname', '$transaction_type', '$InvoiceNo', '$invoicedate', '$Contract_Po_So_Title', '$contract_amount', '$contract_balance', '$transaction_details', '$postingdate', '$grossamount')";

		$results3 = query($sql);

		$sql = "INSERT INTO aging_analysis(originating_department, entered_by, vendor_name, transaction_type, invoice_no, invoice_date, contract_po_so_title, contract_amount, contract_balance, transaction_details, posting_date, gross_amount, baseline_date, aging, less_30_days, less_60_days, less_90_days, less_180_days, grt_180_days) VALUES('$originating_department', '$entered_by', '$vendorname', '$transaction_type', '$InvoiceNo', '$invoicedate', '$Contract_Po_So_Title', '$contract_amount', '$contract_balance', '$transaction_details', '$postingdate', '$grossamount', '$baseline_date', '$aging', '$less_30_days', '$less_60_days', '$less_90_days', '$less_180_days', '$grt_180_days')";

		$results4 = query($sql);

		$sql = "INSERT INTO bank_payment(vendor_name, transaction_type, invoice_no, currency, net_amount) VALUES('$vendorname', '$transaction_type', '$InvoiceNo', '$CurrencyType', '$NetAmount')";

		$results5 = query($sql);



		$sql = "INSERT INTO net_payment_computation(originating_department, entered_by, vendor_name, transaction_type, invoice_no, invoice_date, contract_po_so_title, contract_amount, contract_balance, transaction_details, posting_date, gross_amount, reimbursible, mark_up, pension_charge, retention, currency1, actual_performance_period, vat, wht, ncd, net_amount) VALUES('$originating_department', '$entered_by', '$vendorname', '$transaction_type', '$InvoiceNo', '$invoicedate', '$Contract_Po_So_Title', '$contract_amount', '$contract_balance', '$transaction_details', '$postingdate', '$grossamount', '$Reimbursible', '$Markup', '$pensioncharge', '$Retention', '$CurrencyType', '$ActualPerformancePeriod', '$vat', '$wht', '$ncd', '$NetAmount')";

		$results6 = query($sql);

		$sql = "INSERT INTO invoice_template(document_date, posting_date, posting_period, currency, reference, document_header_text) VALUES('$postingdate', '$postingdate', '$posting_period', '$CurrencyType', '$InvoiceNo', '$document_header_text')";

		$results7 = query($sql);

		$sql = "INSERT INTO payment_template(document_date, posting_date, posting_period, currency, reference, document_header_text) VALUES('$postingdate', '$postingdate', '$postingdate', '$CurrencyType', '$InvoiceNo', '$document_header_text')";

		$results8 = query($sql);

		$sql = "INSERT INTO invoice_template_1(amount, vendor_name, contract_po_so_title) VALUES('$grossamount', '$vendorname', '$Contract_Po_So_Title1')";

		$results7 = query($sql);

		$sql = "INSERT INTO invoice_template_2(amount, vendor_name, contract_po_so_title) VALUES('$grossamount', '$vendorname', '$Contract_Po_So_Title1')";

		$results7 = query($sql);

		$sql = "INSERT INTO payment_template_1(amount, vendor_name, contract_po_so_title) VALUES('$grossamount', '$vendorname', '$Contract_Po_So_Title1')";

		$results7 = query($sql);

		$sql = "INSERT INTO payment_template_2(amount, vendor_name, contract_po_so_title) VALUES('$grossamount', '$vendorname', '$Contract_Po_So_Title1')";

		$results7 = query($sql);


		$sql = "INSERT INTO payment_template_3(amount, vendor_name, contract_po_so_title) VALUES('$grossamount', '$vendorname', '$Contract_Po_So_Title1')";

		$results7 = query($sql);



		$sql = "INSERT INTO payment_template_4(amount, vendor_name, contract_po_so_title) VALUES('$grossamount', '$vendorname', '$Contract_Po_So_Title1')";

		$results7 = query($sql);

		

		$sql = "INSERT INTO payment_template_3(amount, vendor_name, contract_po_so_title) VALUES('$grossamount', '$vendorname', '$Contract_Po_So_Title1')";

		$results7 = query($sql);



		confirm($results);
		
		redirect("http://localhost/filetracker/datainvoicingprocessing.php"); 
	} 
}







?>