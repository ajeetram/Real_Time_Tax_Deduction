<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<link href="css/style.css" rel="stylesheet">
</head>

<h1 class = "pay">Payment System</h1>
<div class="Pcol-xs-12 col-sm-4 col-md-4 col-lg-4">
	<span class="form-Pinline">
        <div class="form-Pgroup">
	        <label>Subtotal: &nbsp;</label>
	        <div class="input-group">
		        <div class="input-group-addon currency">₹</div>
		        <input value="<?php echo $_POST['subTotal']; ?>" type="number" class="form-control" name="subTotal" id="subTotal" placeholder="Subtotal">
            </div>
		</div>
		
        <div class="form-Pgroup">
		<form action = "razorpay-php-testapp-master/pay.php?checkout=automatic" method = "post"> 
	        <label>Tax Amount: &nbsp;</label>
		    <div class="input-group">
		    <div class="input-group-addon currency">₹</div>
			   <input value="<?php echo $_POST['taxAmount']; ?>" type="number" class="form-control" name="taxAmnt" id="taxAmount" placeholder="Tax Amount">
			   <input  data-loading-text="Payment Proceeding..." type="submit" name="Payment btn" value="Pay Tax" class="btn btn-success submit_btn invoice-save-btm">						
            </form>
			</div>
        </div>				
		<div class="form-Pgroup">
		    <label>Total: &nbsp;</label>
			<div class="input-group">
			    <div class="input-group-addon currency">₹</div>
				<input value="<?php echo $_POST['totalAftertax']; ?>" type="number" class="form-control" name="TotalAftertax" id="totalAftertax" placeholder="Total">
			</div>
		</div>
    </span>
</div>
		
		