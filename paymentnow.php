<?php 
//session_start();
#payment.php
if(strcasecmp($_SERVER['REQUEST_METHOD'], 'POST') == 0){
	//Request hash
	$contentType = isset($_SERVER["CONTENT_TYPE"]) ? trim($_SERVER["CONTENT_TYPE"]) : '';	
	if(strcasecmp($contentType, 'application/json') == 0){
		$data = json_decode(file_get_contents('php://input'));
		$hash=hash('sha512', $data->key.'|'.$data->txnid.'|'.$data->amount.'|'.$data->pinfo.'|'.$data->fname.'|'.$data->email.'|||||'.$data->udf5.'||||||'.$data->salt);
		$json=array();
		$json['success'] = $hash;
    	echo json_encode($json);
	
	}
	exit(0);
}

function getCallbackUrl()
{
	$protocol = ((!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off') || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";
	return $protocol . $_SERVER['HTTP_HOST'] . '/salozone/response.php';
}

?>
<?php 
include('header.php');
if(isset($_SESSION["total"])) {
$total = isset($_SESSION["total"]) ? $_SESSION["total"] : 0;
$delivery = $_SESSION['delivery'];
$amount = isset($_SESSION['newtotal']) ? (($total +$delivery) - 0) : ($total + $delivery);
$txn = "Txn" . rand(10000,99999999);
?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<!-- this meta viewport is required for BOLT //-->
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" >
<!-- BOLT Sandbox/test // -->
<!-- <script id="bolt" src="https://sboxcheckout-static.citruspay.com/bolt/run/bolt.min.js " bolt-
color="e34524" bolt-logo="http://boltiswatching.com/wp-content/uploads/2015/09/Bolt-Logo-e14421724859591.png"></script> -->
<!-- BOLT Production/Live // -->
<script id="bolt" src="https://checkout-static.citruspay.com/bolt/run/bolt.min.js" bolt-color="e34524" bolt-logo="http://boltiswatching.com/wp-content/uploads/2015/09/Bolt-Logo-e14421724859591.png"></script>
<link rel="stylesheet" href="css/qaModalChunk-0c3d9f415163febe1e74.css">

	<div id="fh5co-contact">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-md-offset-3 animate-box">
					<h3 class="text-center">Payment Gateway</h3>
					<div class="col-md-12">
						  <form action="#" name="payment_form" id="payment_form">
							<input type="hidden" id="udf5" name="udf5" value="BOLT_KIT_PHP7" />
							<input type="hidden" id="surl" name="surl" value="<?php echo getCallbackUrl(); ?>" />
							<div class="row form-group">
								<div class="col-md-6">
									<input type="hidden" id="key" name="key" placeholder="Merchant Key" class="form-control" value="zpcPF9e8" />
									<!-- testing key -->
									<!-- <input type="hidden" id="key" name="key" placeholder="Merchant Key" class="form-control" value="E3IoU5Qj" />								</div> -->
							</div>
							
							<div class="dv">
							<span><input type="hidden" id="salt" name="salt" placeholder="Merchant Salt" value="yPny25lkcE" /></span>
							<!-- testing salt -->
							<!-- <span><input type="hidden" id="salt" name="salt"  placeholder="Merchant Salt" value="fuOTFzjTgU" /></span> -->
							</div>
							
							<div class="dv">
							<span><input type="hidden" id="txnid" name="txnid" placeholder="Transaction ID" value="<?php echo  $txn; ?>" /></span>
							</div>
							<div class="row form-group">
								<div class="col-md-6">
									<input type="hidden" id="amount" name="amount" placeholder="Amount" class="form-control" value="<?php echo $amount; ?>" /></span>    
								</div>
								<div class="col-md-6">
									<input type="hidden" id="pinfo" name="pinfo" placeholder="Product Info" class="form-control" value="P01,P02" />
								</div>
							</div>
							<div class="row form-group">
								<div class="col-md-6">
									<input type="hidden" id="fname" name="fname" placeholder="Name" class="form-control" value="<?php echo $_SESSION['fname']; ?>" required="required" autocomplete="off" />
								</div>
								<div class="col-md-6">
									<input type="hidden" id="email" name="email" placeholder="Email ID" class="form-control" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" title="example@example.com" required="required" autocomplete="off" value="<?php echo $_SESSION['email']; ?>" />
								</div>
							</div>
							
							<div class="row form-group">
								<div class="col-md-12">
									<input type="hidden" id="mobile" name="mobile" placeholder="Mobile/Cell Number" class="form-control" required="required" pattern="^[6789]\d{9}$" title="Enter 10 digit valid mobile number" maxlength="10" autocomplete="off" value="<?php echo $_SESSION['contact_no']; ?>" />
								</div>
									<input type="hidden" id="hash" name="hash" placeholder="Hash" class="form-control" value="" /></span>
							</div>
							
							<ul class="_2mioG8IfFu0HyLapNQp2db">
								<div class="_3pUB-LDjlpx6e9ACL8E_1x _1ztQTskd2_GRzGb0OH6YwR" style="">
									<div class="hPO8BoyBkYEU2ujeCWJgk H1Lb6afUHKzH-OTelE23x" style="font-size: 14px;">
										<div class="_1kb-XXNt4wePQ_svwAQnhG">Service Total</div>
										<div class="_36rMyLl0yKiOS-udBUSM8a" style="color: rgb(117, 117, 117);">₹ <?php echo($total); ?></div>
									</div>
									<div class="hPO8BoyBkYEU2ujeCWJgk H1Lb6afUHKzH-OTelE23x" style="font-size: 14px;">
										<div class="_1kb-XXNt4wePQ_svwAQnhG">Delivery Charge</div>
										<div class="_36rMyLl0yKiOS-udBUSM8a" style="color: rgb(117, 117, 117);">₹ <?php echo($delivery); ?></div>
									</div>
									<?php if(isset($_SESSION['newtotal']) && $_SESSION['newtotal'] != '') { ?>
										<div class="hPO8BoyBkYEU2ujeCWJgk _1ovga__v3v_0DJ3-9UggBS H1Lb6afUHKzH-OTelE23x" style="font-size: 14px;">
											<div class="_1kb-XXNt4wePQ_svwAQnhG">Applied Promo Code (-)</div>
											<div class="_36rMyLl0yKiOS-udBUSM8a" style="color: rgb(117, 117, 117);">₹ 0</div>
										</div>
									<?php } ?>
									<div class="hPO8BoyBkYEU2ujeCWJgk _1ovga__v3v_0DJ3-9UggBS H1Lb6afUHKzH-OTelE23x" style="font-size: 14px;">
										<div class="_1kb-XXNt4wePQ_svwAQnhG">Amount Payable</div>
										<div class="_36rMyLl0yKiOS-udBUSM8a" style="color: rgb(117, 117, 117);">₹ <?php echo($amount); ?></div>
									</div>
								</div>
							</ul>
							
							<div class="form-group text-center">
								<input type="submit" value="Pay" class="btn btn-primary btn-outline btn-lg" onclick="launchBOLT(); return false;" />
							</div>
						  </form>
					</div>
				</div>
			</div>
			
		</div>
	</div>
<script type="text/javascript"><!--
//$('#payment_form').bind('keyup blur', function(){
$( document ).ready(function() {	
	$.ajax({
          url: 'paymentnow.php',
          type: 'post',
          data: JSON.stringify({ 
            key: $('#key').val(),
			salt: $('#salt').val(),
			txnid: $('#txnid').val(),
			amount: $('#amount').val(),
		    pinfo: $('#pinfo').val(),
            fname: $('#fname').val(),
			email: $('#email').val(),
			mobile: $('#mobile').val(),
			udf5: $('#udf5').val()
          }),
		  contentType: "application/json",
          dataType: 'json',
          success: function(json) {
            if (json['error']) {
			 $('#alertinfo').html('<i class="fa fa-info-circle"></i>'+json['error']);
            }
			else if (json['success']) {	
				$('#hash').val(json['success']);
            }
          }
        }); 
});
//-->
</script>
<script type="text/javascript"><!--
function launchBOLT()
{
	
	bolt.launch({
	key: $('#key').val(),
	txnid: $('#txnid').val(), 
	hash: $('#hash').val(),
	amount: $('#amount').val(),
	firstname: $('#fname').val(),
	email: $('#email').val(),
	phone: $('#mobile').val(),
	productinfo: $('#pinfo').val(),
	udf5: $('#udf5').val(),
	surl : $('#surl').val(),
	furl: $('#surl').val(),
	mode: 'dropout'	
},{ responseHandler: function(BOLT){
	console.log( BOLT.response.txnStatus );		
	if(BOLT.response.txnStatus != 'CANCEL')
	{
		//Salt is passd here for demo purpose only. For practical use keep salt at server side only.
		var fr = '<form action=\"'+$('#surl').val()+'\" method=\"post\">' +
		'<input type=\"hidden\" name=\"key\" value=\"'+BOLT.response.key+'\" />' +
		'<input type=\"hidden\" name=\"salt\" value=\"'+$('#salt').val()+'\" />' +
		'<input type=\"hidden\" name=\"txnid\" value=\"'+BOLT.response.txnid+'\" />' +
		'<input type=\"hidden\" name=\"amount\" value=\"'+BOLT.response.amount+'\" />' +
		'<input type=\"hidden\" name=\"productinfo\" value=\"'+BOLT.response.productinfo+'\" />' +
		'<input type=\"hidden\" name=\"firstname\" value=\"'+BOLT.response.firstname+'\" />' +
		'<input type=\"hidden\" name=\"email\" value=\"'+BOLT.response.email+'\" />' +
		'<input type=\"hidden\" name=\"udf5\" value=\"'+BOLT.response.udf5+'\" />' +
		'<input type=\"hidden\" name=\"mihpayid\" value=\"'+BOLT.response.mihpayid+'\" />' +
		'<input type=\"hidden\" name=\"status\" value=\"'+BOLT.response.status+'\" />' +
		'<input type=\"hidden\" name=\"hash\" value=\"'+BOLT.response.hash+'\" />' +
		'</form>';
		var form = jQuery(fr);
		jQuery('body').append(form);								
		form.submit();
	}
},
	catchException: function(BOLT){
 		alert( BOLT.message );
	}
});
}
//--
</script>	
<?php 
	} else {
		header("Location:checkout.php");
	}
include('footer.php'); ?>
