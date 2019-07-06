<?php 
session_start();
#confirm.php

if(isset($_GET['submit_34']) && isset($_POST['submit_34'])) {
	$pas = $_POST['pas'];
	$type = $_POST['payment_type'];
	header("Location:confirm.php");
}

include('header.php');

$total = isset($_SESSION["total"]) ? $_SESSION["total"] : 0;
$delivery = 50;
$amount = $total + $delivery;

$products = array("Eyebrow", "Eyebrow + Forehead", "Upper Lip", "Full Face", "UnderArm-HoneyBee", "UnderArm-Chocolate", "FullHand-HoneyBee", "FullHand-Chocolate", "HalfLegs-HoneyBee", "HalfLegs-Chocolate", "FullLegs-HoneyBee", "FullLegs-Chocolate", "FullHands+FullLegs-Honeybee", "FullHands+FullLegs-Chocolate", "FullHands+FullLegs+Underarms-Honeybee", "FullHands+FullLegs+Underarms-Chocolate", "FullFace-Honeybee", "FullFace-Chocolate", "UpperLip-Honeybee", "UpperLip-Chocolate", "FullBody-Honeybee", "FullBody-Chocolate", "FullBack(upper)-Honeybee", "FullBack(upper)-Chocolate", "Stomach-Honeybee", "Stomach-Chocolate", "Forehead-Honeybee", "Forehead-Chocolate", "Fruit-Face", "Fruit-Hand", "Anti Tan-Face", "Anti Tan-Hand", "Vicc-Face", "Vicc-Hand", "Lotus-Face", "Lotus-Hand", "Shehnaz-Face", "Shehnaz-Hand", "Whitening-Face", "Whitening-Hand", "Charcoal-Face", "Charcoal-Hand", "Gold-Face", "Gold-Hand", "Diamond-Face", "Diamond-Hand", "Pearl-Face", "Pearl-Hand" , "Gold", "Diamond", "Pearl", "Charcoal", "Shehnaaz Gold", "Fruit", "Whitening", "Anti Tan","Lotus", "Vicc", "Aroma", "Oxy-Face","Oxy-Hand","Oxy-Face+Hand","Diamond-Face","Diamond-Hand","Diamond-Face+Hand","Gold-Face","Gold-Face+Hand","Fem-Face", "Fem-Hand", "Fem-Face+Hand","Pedicure","Manicure","Straight","U","V","Layer- 2 Step","Layer- 3 Step", "Laser", "Feather", "Chinese Cut", "Princess Cut", "Blunt Cut", "Boy Cut", "Sadhna Cut", "Half Hair Curls", "Full Hair Curls", "Hair Style Designer", "Waxing(full hand + full legs + underarms)+Clean Up", "Waxing(full hand + full legs + underarms)+Clean Up+ Hair Styling", "Waxing(full hand + full legs + underarms)+Clean Up+Make Up", "Waxing(full hand + full legs + underarms)+Clean Up+ Hair Styling +Make Up","Light","Bridal","Dress Up","Simple","Bridal");
$amounts = array("25", "35", "10","80","30","50","150","250","120","150","240","270","370","500","400","570","100","125","20","25","700","800","170","200","170","200","30","45","120","200","400","150","300","300","500","500","700","200","400","500","1000","200","400","300", "500", "200", "400","500","600","500","800","1500","200","250","250", "500", "500", "600","100","250","350","150","300","420","125","250","375","75","150","200","250","200","30","50","100","100","120","100","100","100","100","50","50","50","150","200","150","450","550","600","700","200","6000","200","150","5000");

?>
<link rel="stylesheet" href="css/qaModalChunk-0c3d9f415163febe1e74.css">
<style>
ul {
    list-style-type: none;
}

h3 {
    display: block;
    font-size: 1.17em;
    margin-block-end: 1em;
    margin-inline-start: 0px;
    margin-inline-end: 0px;
    font-weight: bold;
	color:#000;
	text-align:left;
	font-family: Axiforma-Regular,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica,Arial,sans-serif;
}
.amount {
    display: block;
    font-size: 1.17em;
    margin-block-end: 1em;
    margin-inline-start: 0px;
    margin-inline-end: 0px;
    font-weight: bold;
	color:#000;
	text-align:left;
	font-family: Axiforma-Regular,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica,Arial,sans-serif;
}

@media screen and (max-width: 768px) {
	.gototop { position:unset; }
}
</style>
	<div id="fh5co-contact">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-md-offset-3 animate-box">
					<h3 class="text-center">Confirmation Page</h3>
					<form action="#" name="contact" id="contact">
						<div>
							
							<ul class="_2mioG8IfFu0HyLapNQp2db">
								<div class="_3pUB-LDjlpx6e9ACL8E_1x _1ztQTskd2_GRzGb0OH6YwR" style="">
									<div class="text-center">
										<span class="text-success"><b><span><i class="icon-check"></i></span> Booking Accepted</b></span>
									</div>
								</div>
								
							</ul>
							<ul class="_2mioG8IfFu0HyLapNQp2db">
								<div class="_3pUB-LDjlpx6e9ACL8E_1x _1ztQTskd2_GRzGb0OH6YwR" style="">
									<div class="hPO8BoyBkYEU2ujeCWJgk H1Lb6afUHKzH-OTelE23x" style="font-size: 14px;">
										<div class="_1kb-XXNt4wePQ_svwAQnhG">Booking Date</div>
										<div class="_36rMyLl0yKiOS-udBUSM8a" style="color: rgb(117, 117, 117);"> <?php echo $_SESSION['dateValue']; ?></div>
									</div>
									<div class="hPO8BoyBkYEU2ujeCWJgk H1Lb6afUHKzH-OTelE23x" style="font-size: 14px;">
										<div class="_1kb-XXNt4wePQ_svwAQnhG">Booking Time</div>
										<div class="_36rMyLl0yKiOS-udBUSM8a" style="color: rgb(117, 117, 117);"> <?php echo $_SESSION['timing']; ?></div>
									</div>
									<div class="hPO8BoyBkYEU2ujeCWJgk _1ovga__v3v_0DJ3-9UggBS H1Lb6afUHKzH-OTelE23x" style="font-size: 14px;">
										<div class="_1kb-XXNt4wePQ_svwAQnhG">Beautician will visit you at the scheduled time.  In case of any problem - time delay or unsatisfactory service , we will provide you your refund. See our terms and conditions for more details</div>
									</div>
								</div>
							</ul>
							<?php
                            if ( isset($_SESSION["cart"]) ) {
								$numbers = "";
                                $total = 0;
                                $noQty = 0;
								$n = 1;
                                foreach ( $_SESSION["cart"] as $i ) {
									$numbers.=$i.",";
									$cate = $products[$_SESSION["cart"][$i]];
                            ?>
								<div class="_22sNqyb5wdkrBAIZDQ2taJ">
									<ul class="_2mioG8IfFu0HyLapNQp2db">
										<li class="_3jrW267vh0aDPPhnRT_hUr">
											<div class="clearfix _1gEr9qY7kjBQEL00TCslQ4">
												<div class="_2_zFy-1lucSUR_Du1Q018L">
													<h3><?php echo( $products[$_SESSION["cart"][$i]] ); ?></h3>
													<div class="U7DStEWrPcwr-0_rYHtNO">
														<div class="amount">₹ <?php echo( $_SESSION["amounts"][$i] ); ?></div>
													</div>
												</div>
												<div class="_2EgDYr1YDcUmvMenP84XQ5" style="margin-top:40px;">
													<input type="text" readonly="" class="number" id="input-quantity-<?php echo $i; ?>" value="<?php if($_SESSION["qty"][$i] != '') { echo $_SESSION["qty"][$i]; } else { echo 1; } ?>" min="1" style="color:#000;width:40%;text-align:center;" class="form-control text-center"/>
												</div>
												<h3>₹ <?php echo $_SESSION["price"][$i]; ?></h3>
											</div>
										</li>
									</ul>
								</div>
                            <?php
									$total = $total + $_SESSION["amounts"][$i];
									$noQty += $_SESSION["qty"][$i];
									$n++;
                                }
                                $_SESSION["total"] = $total;
							}
                            ?>
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
									<div class="hPO8BoyBkYEU2ujeCWJgk _1ovga__v3v_0DJ3-9UggBS H1Lb6afUHKzH-OTelE23x" style="font-size: 14px;">
										<div class="_1kb-XXNt4wePQ_svwAQnhG">Amount Payable</div>
										<div class="_36rMyLl0yKiOS-udBUSM8a" style="color: rgb(117, 117, 117);">₹ <?php echo($amount); ?></div>
									</div>
								</div>
							</ul>
							
							<div class="form-group text-center">
								<input type="submit" value="Confirm" class="btn btn-primary btn-outline btn-lg" />
							</div>
						</div>

					</form>		
				</div>
			</div>
			
		</div>
	</div>
<script type="text/javascript"><!--
$('#payment_form').bind('keyup blur', function(){
	$.ajax({
          url: 'added.php',
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
<?php include('footer.php'); ?>	