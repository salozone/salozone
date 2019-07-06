<?php
#added.php
include('header.php');

$products = array("Eyebrow", "Eyebrow + Forehead", "Upper Lip", "Full Face", "UnderArm-HoneyBee", "UnderArm-Chocolate", "FullHand-HoneyBee", "FullHand-Chocolate", "HalfLegs-HoneyBee", "HalfLegs-Chocolate", "FullLegs-HoneyBee", "FullLegs-Chocolate", "FullHands+FullLegs-Honeybee", "FullHands+FullLegs-Chocolate", "FullHands+FullLegs+Underarms-Honeybee", "FullHands+FullLegs+Underarms-Chocolate", "FullFace-Honeybee", "FullFace-Chocolate", "UpperLip-Honeybee", "UpperLip-Chocolate", "FullBody-Honeybee", "FullBody-Chocolate", "FullBack(upper)-Honeybee", "FullBack(upper)-Chocolate", "Stomach-Honeybee", "Stomach-Chocolate", "Forehead-Honeybee", "Forehead-Chocolate", "Fruit-Face", "Fruit-Hand", "Anti Tan-Face", "Anti Tan-Hand", "Vicc-Face", "Vicc-Hand", "Lotus-Face", "Lotus-Hand", "Shehnaz-Face", "Shehnaz-Hand", "Whitening-Face", "Whitening-Hand", "Charcoal-Face", "Charcoal-Hand", "Gold-Face", "Gold-Hand", "Diamond-Face", "Diamond-Hand", "Pearl-Face", "Pearl-Hand" , "Gold", "Diamond", "Pearl", "Charcoal", "Shehnaaz Gold", "Fruit", "Whitening", "Anti Tan","Lotus", "Vicc", "Aroma", "Oxy-Face","Oxy-Hand","Oxy-Face+Hand","Diamond-Face","Diamond-Hand","Diamond-Face+Hand","Gold-Face","Gold-Face+Hand","Fem-Face", "Fem-Hand", "Fem-Face+Hand","Pedicure","Manicure","Straight","U","V","Layer- 2 Step","Layer- 3 Step", "Laser", "Feather", "Chinese Cut", "Princess Cut", "Blunt Cut", "Boy Cut", "Sadhna Cut", "Half Hair Curls", "Full Hair Curls", "Hair Style Designer", "Waxing(full hand + full legs + underarms)+Clean Up", "Waxing(full hand + full legs + underarms)+Clean Up+ Hair Styling", "Waxing(full hand + full legs + underarms)+Clean Up+Make Up", "Waxing(full hand + full legs + underarms)+Clean Up+ Hair Styling +Make Up","Light","Bridal","Dress Up","Simple","Bridal");
$amounts = array("25", "35", "10","80","30","50","150","250","120","150","240","270","370","500","400","570","100","125","20","25","700","800","170","200","170","200","30","45","120","200","400","150","300","300","500","500","700","200","400","500","1000","200","400","300", "500", "200", "400","500","600","500","800","1500","200","250","250", "500", "500", "600","100","250","350","150","300","420","125","250","375","75","150","200","250","200","30","50","100","100","120","100","100","100","100","50","50","50","150","200","150","450","550","600","700","200","6000","200","150","5000");


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
	return $protocol . $_SERVER['HTTP_HOST'] ;
}

$pro = $_GET['pro'];
$pro = explode(",",$pro);
$pro2 = "";
foreach ($pro as $i)
{
	$pro2.=$products[(int)$i].",";
}

?>
<div class="main">
<div id="fh5co-product">
		<div class="container">
			<div class="row">
				<div class="col-md-10 col-md-offset-1 animate-box">
					<div class="row animate-box">
					<h2>Billing Info</h2>
						<form action="#" id="payment_form">
							<input type="hidden" id="udf5" name="udf5" value="BOLT_KIT_PHP7" />
							<input type="hidden" id="surl" name="surl" value="<?php echo getCallbackUrl(); ?>" />
							<div class="row form-group">
								<div class="col-md-6">
									<input type="hidden" id="key" name="key" placeholder="Merchant Key" class="form-control" value="zpcPF9e8" />
								</div>
							</div>
							
							<div class="dv">
							<span><input type="hidden" id="salt" name="salt" placeholder="Merchant Salt" value="yPny25lkcE" /></span>
							</div>
							
							<div class="dv">
							<span><input type="hidden" id="txnid" name="txnid" placeholder="Transaction ID" value="<?php echo  "Txn" . rand(10000,99999999)?>" /></span>
							</div>
							<div class="row form-group">
								<div class="col-md-6">
									<input type="hidden" id="amount" name="amount" placeholder="Amount" class="form-control" value="<?php echo ($_GET['amount'])?>" /></span>    
								</div>
								<div class="col-md-6">
									<input type="hidden" id="pinfo" name="pinfo" placeholder="Product Info" class="form-control" value="<?php echo ($pro2)?>" />
								</div>
							</div>
							
							<div class="row form-group">
								<div class="col-md-6">
									<input type="text" id="fname" name="fname" placeholder="Name" class="form-control" value="" required="required" autocomplete="off" />
								</div>
								<div class="col-md-6">
									<input type="email" id="email" name="email" placeholder="Email ID" class="form-control" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" title="example@example.com" required="required" autocomplete="off" />
								</div>
							</div>
							
							<div class="row form-group">
								<div class="col-md-6">
									<input type="text" id="mobile" name="mobile" placeholder="Mobile/Cell Number" class="form-control" required="required" pattern="^[6789]\d{9}$" title="Enter 10 digit valid mobile number" maxlength="10" autocomplete="off" />
								</div>
								<div class="col-md-6">
									<input type="hidden" id="hash" name="hash" placeholder="Hash" class="form-control" value="" /></span>
								</div>
							</div>
							
							<div class="row form-group">
									<div class="col-md-12">
											<!-- <label for="message">Message</label> -->
											<select name="sel" class="form-control">Location<option>Mithapur Bus Stand</option><option>NIFT Patna</option><option>CNLU Patna</option></select>
									</div>
							</div>

							<div class="row form-group">
									<div class="col-md-12">
											<!-- <label for="message">Message</label> -->
											<textarea name="message" id="message" cols="30" rows="10" class="form-control" placeholder="Your address with pin code" required="required"></textarea>
									</div>
							</div>
							
							<input type="submit" value="Pay" class="btn btn-primary btn-outline btn-lg" onclick="launchBOLT(); return false;" />
						</form>
					</div>
				</div>
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