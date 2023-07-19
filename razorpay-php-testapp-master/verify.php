<?php

require('config.php');

session_start();

require('razorpay-php/Razorpay.php');
use Razorpay\Api\Api;
use Razorpay\Api\Errors\SignatureVerificationError;

$success = true;

$error = "Payment Failed";

if (empty($_POST['razorpay_payment_id']) === false)
{
    $api = new Api($keyId, $keySecret);

    try
    {
        // Please note that the razorpay order ID must
        // come from a trusted source (session here, but
        // could be database or something else)
        $attributes = array(
            'razorpay_order_id' => $_SESSION['razorpay_order_id'],
            'razorpay_payment_id' => $_POST['razorpay_payment_id'],
            'razorpay_signature' => $_POST['razorpay_signature']
        );

        $api->utility->verifyPaymentSignature($attributes);
    }
    catch(SignatureVerificationError $e)
    {
        $success = false;
        $error = 'Razorpay Error : ' . $e->getMessage();
    }
}

if ($success === true)
{

            $html = "
    

                     <b><h3>Your payment was successful</h1><b>
                     <h3><p>Payment ID: {$_POST['razorpay_payment_id']}</h3><b>
                     ";
            

    //pdf

    include('../inc/header.php');
    include '../Invoice.php';
    $invoice = new Invoice();
    $invoice->checkLoggedIn();
    ?>
    <title>Real Time Tax Deduction and Bill Approval</title>
    <script src="js/invoice.js"></script>
    <link href="css/style.css" rel="stylesheet">
    <?php include('../inc/container.php');?>
        <div class="container">		
          <h2 class="title">Print Invoice</h2>			  
          <table id="data-table" class="table table-condensed table-striped">
            <thead>
              <tr>
                <th>Invoice No.</th>
                <th>Create Date</th>
                <th>Customer Name</th>
                <th>Invoice Total</th>
                <th>Print</th>
              </tr>
            </thead>
            <?php		
            $invoiceLIST = $invoice->getInvoiceList();
            foreach($invoiceLIST as $invoiceDetail){
                $invoiceDate = date("d/M/Y, H:i:s", strtotime($invoiceDetail["order_date"]));
                echo '
                  <tr>
                    <td>'.$invoiceDetail["order_id"].'</td>
                    <td>'.$invoiceDate.'</td>
                    <td>'.$invoiceDetail["order_receiver_name"].'</td>
                    <td>'.$invoiceDetail["order_total_after_tax"].'</td>
                    <td><a href="../print_invoice.php?invoice_id='.$invoiceDetail["order_id"].'" title="Print Invoice"><span class="glyphicon glyphicon-print"></span></a></td>
                  </tr>
                ';

                
            }       
            
            ?>
          </table>	
    </div>	
<!-- qr code -->
   
<div class="form-group">
							<form action="">
  
							<input formaction="index2.php"  data-loading-text=" QR code generating..." type="submit" name=" QR btn" value="Generate QR code" class="btn btn-success submit_btn invoice-save-btm">						
								
							</form>
						</div>

<!-- qr code -->
    <?php include('../inc/footer.php');?>


<?php
    //pdfend
}
else
{
    $html = "<p>Your payment failed</p>
             <p>{$error}</p>";
}

echo $html;
?>