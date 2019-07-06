<?php
#timing.php
include('header.php');

$products = array("Eyebrow", "Eyebrow + Forehead", "Upper Lip", "Full Face", "UnderArm-HoneyBee", "UnderArm-Chocolate", "FullHand-HoneyBee", "FullHand-Chocolate", "HalfLegs-HoneyBee", "HalfLegs-Chocolate", "FullLegs-HoneyBee", "FullLegs-Chocolate", "FullHands+FullLegs-Honeybee", "FullHands+FullLegs-Chocolate", "FullHands+FullLegs+Underarms-Honeybee", "FullHands+FullLegs+Underarms-Chocolate", "FullFace-Honeybee", "FullFace-Chocolate", "UpperLip-Honeybee", "UpperLip-Chocolate", "FullBody-Honeybee", "FullBody-Chocolate", "FullBack(upper)-Honeybee", "FullBack(upper)-Chocolate", "Stomach-Honeybee", "Stomach-Chocolate", "Forehead-Honeybee", "Forehead-Chocolate", "Fruit-Face", "Fruit-Hand", "Anti Tan-Face", "Anti Tan-Hand", "Vicc-Face", "Vicc-Hand", "Lotus-Face", "Lotus-Hand", "Shehnaz-Face", "Shehnaz-Hand", "Whitening-Face", "Whitening-Hand", "Charcoal-Face", "Charcoal-Hand", "Gold-Face", "Gold-Hand", "Diamond-Face", "Diamond-Hand", "Pearl-Face", "Pearl-Hand" , "Gold", "Diamond", "Pearl", "Charcoal", "Shehnaaz Gold", "Fruit", "Whitening", "Anti Tan","Lotus", "Vicc", "Aroma", "Oxy-Face","Oxy-Hand","Oxy-Face+Hand","Diamond-Face","Diamond-Hand","Diamond-Face+Hand","Gold-Face","Gold-Face+Hand","Fem-Face", "Fem-Hand", "Fem-Face+Hand","Pedicure","Manicure","Straight","U","V","Layer- 2 Step","Layer- 3 Step", "Laser", "Feather", "Chinese Cut", "Princess Cut", "Blunt Cut", "Boy Cut", "Sadhna Cut", "Half Hair Curls", "Full Hair Curls", "Hair Style Designer", "Waxing(full hand + full legs + underarms)+Clean Up", "Waxing(full hand + full legs + underarms)+Clean Up+ Hair Styling", "Waxing(full hand + full legs + underarms)+Clean Up+Make Up", "Waxing(full hand + full legs + underarms)+Clean Up+ Hair Styling +Make Up","Light","Bridal","Dress Up","Simple","Bridal");
$amounts = array("25", "35", "10","80","30","50","150","250","120","150","240","270","370","500","400","570","100","125","20","25","700","800","170","200","170","200","30","45","120","200","400","150","300","300","500","500","700","200","400","500","1000","200","400","300", "500", "200", "400","500","600","500","800","1500","200","250","250", "500", "500", "600","100","250","350","150","300","420","125","250","375","75","150","200","250","200","30","50","100","100","120","100","100","100","100","50","50","50","150","200","150","450","550","600","700","200","6000","200","150","5000");

$todayDate = isset($dateValue) ? date('Y-m-d', $dateValue) : date("Y-m-d");
?>
<link rel="stylesheet" href="https://static.urbanclap.com/dist/qaModalChunk-d5020c0ce4ff05d365f1.css">
<div class="main">
<div id="fh5co-product">
		<div class="container">
			<div class="row">
				<div class="col-md-10 col-md-offset-1 animate-box">
					<div class="row animate-box">
					<h2>Select date of service</h2>
						<form action="#" id="payment_form">
							<div class="_2ALjwXt8Brx2UBQJ1a6UDu _3TjTyyRTZ846xSE30xLszh _2-bFRYxiqevuTNSsQzbSOG"><div class="_32y59UEDbJyVoQag7s2FyN">
								<h3 class="_28gUKzEsw8N-nqfXEO8ClO">Select date of service</h3>
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
											?>
											<?php  
											for ($i = 0; $i < 3; $i++, $ts += 86400) {
												$currentDate = explode('-', $todayDate);
												$toDay = $currentDate[2];
												$dNo = date("d", $ts);
												$mNo = date("m", $ts);
												$yNo = date("Y", $ts);
												$dName = date("D", $ts);
												$mName = date("M", $ts);
												$yName = date("Y", $ts);
												$dayss = date('D',strtotime(date($yNo.'-'.$mNo.'-'.$dNo)));
												$gendate = strtotime(date($yNo.'-'.$mNo.'-'.$dNo));
												$currentdate = date('M', strtotime(date($yNo.'-'.$mNo.'-'.$dNo)));
												$passValue = strtotime($dNo.'-'.$mNo.'-'.$yNo);
												if($dNo == $toDay) {
											?>
												<li class="_2FIjO3fCOdUytcu2BX_CFC _1BbcnE6pUhu97pQPRU9_Jn" data-index="<?php echo $i; ?>">
													<p data-index="<?php echo $i; ?>" class="_3KZB12l8ThjRoHj4TkxCIs"><?php echo $dName; ?></p>
													<p data-index="<?php echo $i; ?>" class="_2vhyzGbvqaFz6e2RatI3kO"><?php echo $dNo; ?></p>
													<!--<p data-index="<?php echo $i; ?>" class="_3KZB12l8ThjRoHj4TkxCIs"><?php echo $mName; ?>&nbsp;<?php echo $yName; ?></p>-->
												</li>
											<?php } else { ?>
												<li class="_2FIjO3fCOdUytcu2BX_CFC" data-index="<?php echo $i; ?>">
													<!--<span class="_3q7xIW259m_ndQkgVrNeef"><span data-icon="ą"></span></span>-->
													<p data-index="<?php echo $i; ?>" class="_3KZB12l8ThjRoHj4TkxCIs"><?php echo $dName; ?></p>
													<p data-index="<?php echo $i; ?>" class="_2vhyzGbvqaFz6e2RatI3kO"><?php echo $dNo; ?></p>
													<!--<p data-index="<?php echo $i; ?>" class="_3KZB12l8ThjRoHj4TkxCIs"><?php echo $mName; ?>&nbsp;<?php echo $yName; ?></p>-->
												</li>
											<?php } ?>
											<?php } ?>
											</div>
										</div>
									</div>
								</div>
								<?php
     $time = '9:00'; // start
     for ($i = 0; $i <= 21; $i++)
     {
		$time_now=mktime(date('h')+5,date('i')+30,date('s'));
		$date = date('h:i a', $time_now);
		echo "<span style='color:#000;'>".$date."</span>";
		 #echo "<span style='color:#000;'>". date("h:i a")."</span>";
         $prev = date('g:i a', strtotime($time)); // format the start time
         $next = strtotime('+30mins', strtotime($time)); // add 30 mins
         $time = date('g:i a', $next); // format the next time
         echo "<span style='color:#000;'>$prev - $time</span>";
     }
 ?>
								<h3 class="_28gUKzEsw8N-nqfXEO8ClO">Select time</h3>
									<ul id="schedulerTimeSlot" class="VRRoZR_W287QHk-Uo6A5i _2cwgaT4dHGJELUxF91Slht clearfix">
										<li class="_1qddD8MXhhJEixhoKZQSgs" data-index="0">
											<p data-index="0">9 - 9:30 am</p>
										</li>
										<li class="_1qddD8MXhhJEixhoKZQSgs" data-index="1"><p data-index="1">9:30 - 10 am</p></li>
										<li class="_1qddD8MXhhJEixhoKZQSgs" data-index="2"><p data-index="2">10 - 10:30 am</p></li>
										<li class="_1qddD8MXhhJEixhoKZQSgs" data-index="3"><p data-index="3">10:30 - 11 am</p></li>
										<li class="_1qddD8MXhhJEixhoKZQSgs" data-index="4"><p data-index="4">11 - 11:30 am</p></li>
										<li class="_1qddD8MXhhJEixhoKZQSgs" data-index="5"><p data-index="5">11:30 - 12 pm</p></li>
										<li class="_1qddD8MXhhJEixhoKZQSgs" data-index="6"><p data-index="6">12 - 12:30 pm</p></li>
										<li class="_1qddD8MXhhJEixhoKZQSgs" data-index="7"><p data-index="7">12:30 - 1 pm</p></li>
										<li class="_1qddD8MXhhJEixhoKZQSgs" data-index="8"><p data-index="8">1 - 1:30 pm</p></li>
										<li class="_1qddD8MXhhJEixhoKZQSgs" data-index="9"><p data-index="9">1:30 - 2 pm</p></li>
										<li class="_1qddD8MXhhJEixhoKZQSgs" data-index="10"><p data-index="10">2 - 2:30 pm</p></li>
										<li class="_1qddD8MXhhJEixhoKZQSgs" data-index="11"><p data-index="11">2:30 - 3 pm</p></li>
										<li class="_1qddD8MXhhJEixhoKZQSgs _20Zj8RByaXYN2wq7mBkjd8" data-index="12"><p data-index="12">3 - 3:30 pm</p></li>
										<li class="_1qddD8MXhhJEixhoKZQSgs _20Zj8RByaXYN2wq7mBkjd8" data-index="13"><p data-index="13">3:30 - 4 pm</p></li>
										<li class="_1qddD8MXhhJEixhoKZQSgs _20Zj8RByaXYN2wq7mBkjd8" data-index="14"><p data-index="14">4 - 4:30 pm</p></li>
										<li class="_1qddD8MXhhJEixhoKZQSgs _20Zj8RByaXYN2wq7mBkjd8" data-index="15"><p data-index="15">4:30 - 5 pm</p></li>
										<li class="_1qddD8MXhhJEixhoKZQSgs _20Zj8RByaXYN2wq7mBkjd8" data-index="16"><p data-index="16">5 - 5:30 pm</p></li>
										<li class="_1qddD8MXhhJEixhoKZQSgs _20Zj8RByaXYN2wq7mBkjd8" data-index="17"><p data-index="17">5:30 - 6 pm</p></li>
										<li class="_1qddD8MXhhJEixhoKZQSgs _20Zj8RByaXYN2wq7mBkjd8" data-index="18"><p data-index="18">6 - 6:30 pm</p></li>
										<li class="_1qddD8MXhhJEixhoKZQSgs _20Zj8RByaXYN2wq7mBkjd8" data-index="19"><p data-index="19">6:30 - 7 pm</p></li>
										<li class="_1qddD8MXhhJEixhoKZQSgs _20Zj8RByaXYN2wq7mBkjd8" data-index="20"><p data-index="20">7 - 7:30 pm</p></li>
										<li class="_1qddD8MXhhJEixhoKZQSgs _20Zj8RByaXYN2wq7mBkjd8" data-index="21"><p data-index="21">7:30 - 8 pm</p></li>
									</ul>
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