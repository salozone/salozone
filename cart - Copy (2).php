<?php session_start();
#cart.php - A simple shopping cart with add to cart, and remove links
 //---------------------------
 //initialize sessions

//Define the products and cost
$products = array("Eyebrow", "Eyebrow + Forehead", "Upper Lip", "Full Face", "UnderArm-HoneyBee", "UnderArm-Chocolate", "FullHand-HoneyBee", "FullHand-Chocolate", "HalfLegs-HoneyBee", "HalfLegs-Chocolate", "FullLegs-HoneyBee", "FullLegs-Chocolate", "FullHands+FullLegs-Honeybee", "FullHands+FullLegs-Chocolate", "FullHands+FullLegs+Underarms-Honeybee", "FullHands+FullLegs+Underarms-Chocolate", "FullFace-Honeybee", "FullFace-Chocolate", "UpperLip-Honeybee", "UpperLip-Chocolate", "FullBody-Honeybee", "FullBody-Chocolate", "FullBack(upper)-Honeybee", "FullBack(upper)-Chocolate", "Stomach-Honeybee", "Stomach-Chocolate", "Forehead-Honeybee", "Forehead-Chocolate", "Fruit-Face", "Fruit-Hand", "Anti Tan-Face", "Anti Tan-Hand", "Vicc-Face", "Vicc-Hand", "Lotus-Face", "Lotus-Hand", "Shehnaz-Face", "Shehnaz-Hand", "Whitening-Face", "Whitening-Hand", "Charcoal-Face", "Charcoal-Hand", "Gold-Face", "Gold-Hand", "Diamond-Face", "Diamond-Hand", "Pearl-Face", "Pearl-Hand" , "Gold", "Diamond", "Pearl", "Charcoal", "Shehnaaz Gold", "Fruit", "Whitening", "Anti Tan","Lotus", "Vicc", "Aroma", "Oxy-Face","Oxy-Hand","Oxy-Face+Hand","Diamond-Face","Diamond-Hand","Diamond-Face+Hand","Gold-Face","Gold-Face+Hand","Fem-Face", "Fem-Hand", "Fem-Face+Hand","Pedicure","Manicure","Straight","U","V","Layer- 2 Step","Layer- 3 Step", "Laser", "Feather", "Chinese Cut", "Princess Cut", "Blunt Cut", "Boy Cut", "Sadhna Cut", "Half Hair Curls", "Full Hair Curls", "Hair Style Designer", "Waxing(full hand + full legs + underarms)+Clean Up", "Waxing(full hand + full legs + underarms)+Clean Up+ Hair Styling", "Waxing(full hand + full legs + underarms)+Clean Up+Make Up", "Waxing(full hand + full legs + underarms)+Clean Up+ Hair Styling +Make Up","Light","Bridal","Dress Up","Simple","Bridal");
$amounts = array("35", "10","80","30","50","119","199","119","149","199","249","299","449","349","520","99","119","20","25","599","749","170","199","170","199","30","45","120","200","400","150","300","300","500","500","700","200","400","500","1000","200","400","300", "500", "200", "400","500","600","500","800","1500","200","250","250", "500", "500", "600","100","250","350","150","300","420","125","250","375","75","150","200","250","200","30","50","100","100","120","100","100","100","100","50","50","50","150","200","150","450","550","600","700","200","6000","200","150","5000");

//Load up session
 if ( !isset($_SESSION["total"]) ) {
   $_SESSION["total"] = 0;
   for ($i=0; $i< count($products); $i++) {
    $_SESSION["qty"][$i] = 0;
   $_SESSION["amounts"][$i] = 0;
  }
 }

 //---------------------------
 //Reset
 if ( isset($_GET['reset']) )
 {
 if ($_GET["reset"] == 'true')
   {
   unset($_SESSION["qty"]); //The quantity for each product
   unset($_SESSION["amounts"]); //The amount from each product
   unset($_SESSION["total"]); //The total cost
   unset($_SESSION["cart"]); //Which item has been chosen
   }
 }

 //---------------------------
 //Add
 if ( isset($_GET["add"]) )
   {
   $i = $_GET["add"];
   $qty = $_SESSION["qty"][$i] + 1;
   $_SESSION["amounts"][$i] = $amounts[$i] * $qty;
   $_SESSION["cart"][$i] = $i;
   $_SESSION["qty"][$i] = $qty;
 }

  //---------------------------
  //Delete
  if ( isset($_GET["delete"]) )
   {
	   $i = $_GET["delete"];
	   /*$qty = $_SESSION["qty"][$i];
	   $qty--;
	   $_SESSION["qty"][$i] = $qty;*/
	   //remove item if quantity is zero
	   /*if ($qty == 0) {
		$_SESSION["amounts"][$i] = 0;*/
    unset($_SESSION["cart"][$i]);
  /*}
 else
  {
   $_SESSION["amounts"][$i] = $amounts[$i] * $qty;
  }*/
 }
 ?>
<?php
#cart.php
include('header.php');
?>
<link rel="stylesheet" href="css/qaModalChunk-0c3d9f415163febe1e74.css">
	<style>
	@media screen and (max-width: 768px) {
		.gototop { position:unset; }
	}
	</style>
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
<style>
.value-button {
  color:#000;
  display: inline-block;
  border: 1px solid #ddd;
  margin: 0px;
  width: 40px;
  /*height: 20px;*/
  text-align: center;
  vertical-align: middle;
  /*padding: 11px 0;*/
  background: #eee;
  -webkit-touch-callout: none;
  -webkit-user-select: none;
  -khtml-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
}

.value-button:hover {
  cursor: pointer;
}

form #decrease {
  margin-right: -4px;
  border-radius: 8px 0 0 8px;
}

form #increase {
  margin-left: -4px;
  border-radius: 0 8px 8px 0;
}

form #input-wrap {
  margin: 0px;
  padding: 0px;
}

input#number {
  text-align: center;
  border: none;
  /*border: 1px solid #ddd;*/
  margin: 0px;
  width: 40px;
  /*height: 40px;*/
  color:#000;
}

input[type=number]::-webkit-inner-spin-button,
input[type=number]::-webkit-outer-spin-button {
    -webkit-appearance: none;
    margin: 0;
}
</style>	
<script>
function increaseValue() {
  var value = parseInt(document.getElementById('number').value, 10);
  value = isNaN(value) ? 1 : value;
  value++;
  document.getElementById('number').value = value;
}

function decreaseValue() {
  var value = parseInt(document.getElementById('number').value, 10);
  value = isNaN(value) ? 1 : value;
  value < 1 ? value = 1 : '';
  value--;
  document.getElementById('number').value = value;
}
</script>	
	<div id="fh5co-product">
		<div class="container">
			<div class="row">
				<div class="col-md-10 col-md-offset-1 animate-box">
					<div class="row animate-box">
						<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
							<h2>Items in Cart</h2>
							<br>
                            <br>
                            <?php
                            if ( isset($_SESSION["cart"]) ) {
                            ?>
                            <br/><br/><br/>
                            <h2>Cart</h2>
                            </tr>
                            <?php
								$numbers = "";
                                $total = 0;
                                $noQty = 0;
                                foreach ( $_SESSION["cart"] as $i ) {
									$numbers.=$i.",";
                            ?>
								<div class="_22sNqyb5wdkrBAIZDQ2taJ">
									<ul class="_2mioG8IfFu0HyLapNQp2db">
										<li class="_3jrW267vh0aDPPhnRT_hUr">
											<div class="clearfix _1gEr9qY7kjBQEL00TCslQ4">
												<div class="_2_zFy-1lucSUR_Du1Q018L">
													<h3><?php echo( $products[$_SESSION["cart"][$i]] ); ?></h3>
													<div class="U7DStEWrPcwr-0_rYHtNO">
														<div class="amount">₹ <?php echo( $_SESSION["amounts"][$i] ); ?></div>
														<a href="cart.php?delete=<?php echo($i); ?>" title="Delete">
														<span class="_5iDG5-g_aEFcnjUHO2LgR"><span><i class="icon-trash"></i></span></span></a>
													</div>
												</div>
												<div class="_2EgDYr1YDcUmvMenP84XQ5" style="width:150px;margin-top:40px;">
													<div class="value-button" id="decrease" onclick="decreaseValue()" value="Decrease Value">-</div>
													<input type="number" id="number" value="<?php echo( $_SESSION["qty"][$i] ); ?>" min="1" />
													<div class="value-button" id="increase" onclick="increaseValue()" value="Increase Value">+</div>
													<span>-</span>
												</div>
											</div>
										</li>
									</ul>
								</div>
                            <?php
									$total = $total + $_SESSION["amounts"][$i];
									$noQty += $_SESSION["qty"][$i];
                                }
                                $_SESSION["total"] = $total;
                            ?>
								<ul class="_2mioG8IfFu0HyLapNQp2db">
									<div class="_3pUB-LDjlpx6e9ACL8E_1x _1ztQTskd2_GRzGb0OH6YwR" style="">
										<div class="hPO8BoyBkYEU2ujeCWJgk H1Lb6afUHKzH-OTelE23x" style="font-size: 14px;">
											<div class="_1kb-XXNt4wePQ_svwAQnhG">Subtotal</div>
											<div class="_36rMyLl0yKiOS-udBUSM8a" style="color: rgb(117, 117, 117);">₹ <?php echo($total); ?></div>
										</div>
										<div class="hPO8BoyBkYEU2ujeCWJgk _1ovga__v3v_0DJ3-9UggBS H1Lb6afUHKzH-OTelE23x" style="font-size: 14px;">
											<div class="_1kb-XXNt4wePQ_svwAQnhG">Total</div>
											<div class="_36rMyLl0yKiOS-udBUSM8a" style="color: rgb(117, 117, 117);">₹ <?php echo($total); ?></div>
										</div>
									</div>
								</ul>
							<br>
                            <br>
                            <br>
                            <a class="btn btn-primary btn-outline btn-lg" href="added.php?amount=<?php echo($total); ?>&pro=<?php echo($numbers); ?>">Continue to checkout</a>
                            <?php
                                } else {
                            ?>
								<span>Your Cart is Empty...</span>
							<a class="btn btn-primary btn-outline btn-lg" href="index.php">Continue to Shopping</a>
							<?php } ?>
                        </div>
					</div>
				</div>
			</div>
			
		</div>
		<div id="cartFooter" class="_1LETt-B9P8OaDZEUDWkA1R clearfix">
			<div class="_2hEPDSDdzr7qDls1i-ha_E clearfix">
				<div class="_32Q_Im_MCQ1Q1ZhnbBsaV9">
					<div class="_1fEoAtqLYX8y_v8J9euc1b">
						<div class="Gw4fj2Nh0i4MHAUqogp0L">
							<div class="_2GGL50SAl2PqjDcW_ug_HR"><?php echo $noQty; ?></div>
						</div>
						<div class="Gw4fj2Nh0i4MHAUqogp0L">
							<span class="_1Cwk39HAqLUX4TCWB3Qug-" data-icon=""></span>
						</div>
						<div class="Gw4fj2Nh0i4MHAUqogp0L">
							<div class="_2zgkMefshvvvhjDF8R_K8r">
								<p class="_2-SpOqCHS84AG4E491eVtE">₹ <?php echo $_SESSION["total"]; ?></p>
							</div>
						</div>
					</div>
				</div>
				<div class="sBsQi9wQvPA9gC7IuDqpF">
					<span class="_32tH5ONd-X_lIEgzefZTOu">Continue</span>
					<span class="_3CdNMpKO9QvNBUY7iKuiu-"><span><i class="icon-long-arrow-right"></i></span></span>
				</div>
			</div>
		</div>
	</div>
<?php
	include('footer.php');
?>