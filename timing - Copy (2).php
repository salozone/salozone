<?php
#timing.php
include('header.php');
if ($_SESSION["cart"] == "") {
	header("Location:checkout.php");
}
$products = array("Eyebrow", "Eyebrow + Forehead", "Upper Lip", "Full Face", "UnderArm-HoneyBee", "UnderArm-Chocolate", "FullHand-HoneyBee", "FullHand-Chocolate", "HalfLegs-HoneyBee", "HalfLegs-Chocolate", "FullLegs-HoneyBee", "FullLegs-Chocolate", "FullHands+FullLegs-Honeybee", "FullHands+FullLegs-Chocolate", "FullHands+FullLegs+Underarms-Honeybee", "FullHands+FullLegs+Underarms-Chocolate", "FullFace-Honeybee", "FullFace-Chocolate", "UpperLip-Honeybee", "UpperLip-Chocolate", "FullBody-Honeybee", "FullBody-Chocolate", "FullBack(upper)-Honeybee", "FullBack(upper)-Chocolate", "Stomach-Honeybee", "Stomach-Chocolate", "Forehead-Honeybee", "Forehead-Chocolate", "Fruit-Face", "Fruit-Hand", "Anti Tan-Face", "Anti Tan-Hand", "Vicc-Face", "Vicc-Hand", "Lotus-Face", "Lotus-Hand", "Shehnaz-Face", "Shehnaz-Hand", "Whitening-Face", "Whitening-Hand", "Charcoal-Face", "Charcoal-Hand", "Gold-Face", "Gold-Hand", "Diamond-Face", "Diamond-Hand", "Pearl-Face", "Pearl-Hand" , "Gold", "Diamond", "Pearl", "Charcoal", "Shehnaaz Gold", "Fruit", "Whitening", "Anti Tan","Lotus", "Vicc", "Aroma", "Oxy-Face","Oxy-Hand","Oxy-Face+Hand","Diamond-Face","Diamond-Hand","Diamond-Face+Hand","Gold-Face","Gold-Face+Hand","Fem-Face", "Fem-Hand", "Fem-Face+Hand","Pedicure","Manicure","Straight","U","V","Layer- 2 Step","Layer- 3 Step", "Laser", "Feather", "Chinese Cut", "Princess Cut", "Blunt Cut", "Boy Cut", "Sadhna Cut", "Half Hair Curls", "Full Hair Curls", "Hair Style Designer", "Waxing(full hand + full legs + underarms)+Clean Up", "Waxing(full hand + full legs + underarms)+Clean Up+ Hair Styling", "Waxing(full hand + full legs + underarms)+Clean Up+Make Up", "Waxing(full hand + full legs + underarms)+Clean Up+ Hair Styling +Make Up","Light","Bridal","Dress Up","Simple","Bridal");
$amounts = array("15", "25", "10","80","30","50","150","250","120","150","240","270","370","500","400","570","100","125","20","25","700","800","170","200","170","200","30","45","120","200","200","400","150","300","300","500","500","700","200","400","500","1000","200","400","300", "500", "200", "400","500","600","500","800","1500","200","250","250", "500", "500", "600","100","250","350","150","300","420","125","250","375","75","150","200","250","200","30","50","100","100","120","100","100","100","100","50","50","50","150","200","150","450","550","600","700","200","6000","200","150","5000");

if(isset($_GET['date'])) {
	$dateValue = $_GET['date'];
}else {
	$dateValue = date("Y-m-d");
}
$todayDate = isset($dateValue) ? $dateValue : date("Y-m-d");
#$todayDate = date("Y-m-d");
?>

<link rel="stylesheet" href="css/qaModalChunk-d5020c0ce4ff05d365f1.css">
<div class="main">
<div id="fh5co-product">
		<div class="container">
			<div class="row">
				<div class="col-md-10 col-md-offset-1 animate-box">
					<div class="col-lg-12 animate-box">
						<form action="" id="timing_form" name="timing_form" >
							<div class="_2ALjwXt8Brx2UBQJ1a6UDu _3TjTyyRTZ846xSE30xLszh _2-bFRYxiqevuTNSsQzbSOG"><div class="_32y59UEDbJyVoQag7s2FyN">
								<h2 class="_28gUKzEsw8N-nqfXEO8ClO">Select date of service</h2>
								<div class="_3lEo7o-LTN2uElz2rWhPlF">
									<div class="_1X8DDqcQ5HbgD3VZYpVhou _1DNoFoS0rrtMlXo1kzpUAB">
										<div class="_2LnV2Owe91RTdEZgdVlAd6">
											<div class="sgKp1lpWphXCq8IPTAho4">
											<?php 
												$ts = strtotime($todayDate);
												// calculate the number of days since Monday
												$dow = date('w', $ts);
												$offset = $dow - 1;
												if ($offset < 0) {
													$offset = 6;
												}
												// calculate timestamp for the Monday
												//$ts = $ts - $offset*86400;
												// loop from Monday till Sunday 
												$ts2 = strtotime($dateValue);
											?>
											<?php  
											for ($i = 0; $i < 3; $i++, $ts += 86400) {
												$currentDate = explode('-', $todayDate);
												$toDay = $currentDate[0];
												$dNo = date("d", $ts);
												$mNo = date("m", $ts);
												$yNo = date("Y", $ts);
												$dName = date("D", $ts);
												$mName = date("M", $ts);
												$yName = date("Y", $ts);
												$dayss = date('D',strtotime(date($yNo.'-'.$mNo.'-'.$dNo)));
												$gendate = strtotime(date($yNo.'-'.$mNo.'-'.$dNo));
												$currentdate = date('M', strtotime(date($yNo.'-'.$mNo.'-'.$dNo)));
												$passValue = ($dNo.'-'.$mNo.'-'.$yNo);
												echo $toDay;
												if($dNo == $toDay) {
											?>
												<a href="timing.php?date=<?php echo $passValue; ?>"><li class="_2FIjO3fCOdUytcu2BX_CFC _1BbcnE6pUhu97pQPRU9_Jn" data-index="<?php echo $i; ?>">
													<p data-index="<?php echo $i; ?>" class="_3KZB12l8ThjRoHj4TkxCIs"><?php echo $dName; ?></p>
													<p data-index="<?php echo $i; ?>" class="_2vhyzGbvqaFz6e2RatI3kO"><?php echo $dNo; ?></p>
													<!--<p data-index="<?php echo $i; ?>" class="_3KZB12l8ThjRoHj4TkxCIs"><?php echo $mName; ?>&nbsp;<?php echo $yName; ?></p>-->
												</li></a>
											<?php } else { ?>
												<a href="timing.php?date=<?php echo $passValue; ?>"><li class="_2FIjO3fCOdUytcu2BX_CFC " data-index="<?php echo $i; ?>">
													<!--<span class="_3q7xIW259m_ndQkgVrNeef"><span data-icon="ą"></span></span>-->
													<p data-index="<?php echo $i; ?>" class="_3KZB12l8ThjRoHj4TkxCIs"><?php echo $dName; ?></p>
													<p data-index="<?php echo $i; ?>" class="_2vhyzGbvqaFz6e2RatI3kO"><?php echo $dNo; ?></p>
													<!--<p data-index="<?php echo $i; ?>" class="_3KZB12l8ThjRoHj4TkxCIs"><?php echo $mName; ?>&nbsp;<?php echo $yName; ?></p>-->
												</li></a>
											<?php } ?>
											<?php } ?>
											</div>
										</div>
									</div>
								</div>
								<h3 class="_28gUKzEsw8N-nqfXEO8ClO">Select time</h3>
									<ul id="schedulerTimeSlot" class="VRRoZR_W287QHk-Uo6A5i _2cwgaT4dHGJELUxF91Slht clearfix">
									<?php
									 $time = '9:00'; // start
									 for ($i = 0; $i <= 21; $i++)
									 {
										$time_now=mktime(date('h')+6,date('i')+30,date('s'));
										$date = date('g:i a', $time_now);
										//echo "<span style='color:#000;'>".$date."</span>";
										 #echo "<span style='color:#000;'>". date("h:i a")."</span>";
										 $prev = date('g:i a', strtotime($time)); // format the start time
										 $next = strtotime('+30mins', strtotime($time)); // add 30 mins
										 $time = date('g:i a', $next); // format the next time
										 //echo "<span style='color:#000;'>$prev - $time</span>";
										//if($prev <= $date && $time >= $date) { 
										if($time == $date) { 
										//echo "<span style='color:#000;'>".$time."-".$date."</span>";
									?>
										<a href="verification.php?timing=<?php echo htmlentities($time); ?>&date=<?php echo htmlentities($todayDate); ?>" ><li class="_1qddD8MXhhJEixhoKZQSgs" data-index="<?php echo $i; ?>">
											<p data-index="<?php echo $i; ?>"><?php echo $time; ?><br><?php echo $date; ?></p>
										</li></a>
									<?php } else { ?>
										<a href="verification.php?timing=<?php echo htmlentities($time); ?>&date=<?php echo htmlentities($todayDate); ?>" ><li class="_1qddD8MXhhJEixhoKZQSgs _20Zj8RByaXYN2wq7mBkjd8" data-index="<?php echo $i; ?>"><p data-index="<?php echo $i; ?>"><?php echo $time; ?><br><?php echo $date; ?></p></li></a>
									<?php } ?>
									<?php } ?>
									</ul>
								</div>
								<div class="row">&nbsp;
								</div>
							</div>
							
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>	
<?php include('footer.php'); ?>