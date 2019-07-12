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
	$dateValue = date("d-m-Y");
}
#$todayDate = isset($dateValue) ? $dateValue : date("Y-m-d");
$todayDate = date("d-m-Y");
?>
<link rel="stylesheet" href="css/jquery.timepicker.min.css">
<link href="css/datepicker.min.css" rel="stylesheet" type="text/css">
        <script src="js/datepicker.min.js"></script>
        <!-- Include English language -->
        <script src="js/datepicker.en.js"></script>

<script src="js/jquery.timepicker.min.js"></script>
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
												//$ts2 = strtotime($dateValue);
												$currentDate = explode('-', $dateValue);
												echo $toDay = $currentDate[0];
												/* Ist Day*/
												$dNo = date("d", $ts);
												$mNo = date("m", $ts);
												$yNo = date("Y", $ts);
												$dName = date("D", $ts);
												$mName = date("M", $ts);
												$yName = date("Y", $ts);
												$passValue = ($dNo.'-'.$mNo.'-'.$yNo);
												/* 2nd Day */
												$ts2 = $ts + 86400;
												$dNo2 = date("d", $ts2);
												$mNo2 = date("m", $ts2);
												$yNo2 = date("Y", $ts2);
												$dName2 = date("D", $ts2);
												$mName2 = date("M", $ts2);
												$yName2 = date("Y", $ts2);
												$passValue2 = ($dNo2.'-'.$mNo2.'-'.$yNo2);
												/*3 rd Day */
												$ts3 = $ts2 + 86400;
												$dNo3 = date("d", $ts3);
												$mNo3 = date("m", $ts3);
												$yNo3 = date("Y", $ts3);
												$dName3 = date("D", $ts3);
												$mName3 = date("M", $ts3);
												$yName3 = date("Y", $ts3);
												$passValue3 = ($dNo3.'-'.$mNo3.'-'.$yNo3);
											?>
											<!-- Ist Day -->
											<a href="timing.php?date=<?php echo $passValue; ?>"><li class="_2FIjO3fCOdUytcu2BX_CFC <?php if($dNo == $toDay) { echo "_1BbcnE6pUhu97pQPRU9_Jn"; } ?>" data-index="1">
												<p data-index="1" class="_3KZB12l8ThjRoHj4TkxCIs"><?php echo $dName; ?></p>
												<p data-index="1" class="_2vhyzGbvqaFz6e2RatI3kO"><?php echo $dNo; ?></p>
												
											</li></a>
											<!-- 2nd Day -->
											<a href="timing.php?date=<?php echo $passValue2; ?>"><li class="_2FIjO3fCOdUytcu2BX_CFC <?php if($dNo2 == $toDay) { echo "_1BbcnE6pUhu97pQPRU9_Jn"; } ?>" data-index="2">
													<p data-index="2" class="_3KZB12l8ThjRoHj4TkxCIs"><?php echo $dName2; ?></p>
													<p data-index="2" class="_2vhyzGbvqaFz6e2RatI3kO"><?php echo $dNo2; ?></p>
											</li></a>
											<!-- 3rd Day -->
											<a href="timing.php?date=<?php echo $passValue3; ?>"><li class="_2FIjO3fCOdUytcu2BX_CFC <?php if($dNo3 == $toDay) { echo "_1BbcnE6pUhu97pQPRU9_Jn"; } ?>" data-index="3">
												<p data-index="3" class="_3KZB12l8ThjRoHj4TkxCIs"><?php echo $dName3; ?></p>
												<p data-index="3" class="_2vhyzGbvqaFz6e2RatI3kO"><?php echo $dNo3; ?></p>
											</li></a>
											
											</div>
										</div>
									</div>
								</div>
								<h3 class="_28gUKzEsw8N-nqfXEO8ClO">Select time</h3>
									<ul id="schedulerTimeSlot" class="VRRoZR_W287QHk-Uo6A5i _2cwgaT4dHGJELUxF91Slht clearfix">
									<?php
									if($todayDate == $dateValue) {
									 $time = '9:00'; // start
									 for ($i = 0; $i <= 21; $i++)
									 {
										$time_now = mktime(date('h')+4,date('i')+30,date('s'));
										$date = date('g a', $time_now);
										$dateAdd = strtotime('+30mins', strtotime($date));
										$dateNow = date('g:i a', $dateAdd);
										//echo "<span style='color:#000;'>".$date."</span>";
										 #echo "<span style='color:#000;'>". date("h:i a")."</span>";
										 $prev = date('g a', strtotime($time)); // format the start time
										 $next = strtotime('+30mins', strtotime($time)); // add 30 mins
										 
										 $nextAdd = strtotime('+30mins', strtotime($prev)); // format the next time
										 $time = date('g:i a', $next); // format the next time
										 $time11 = date('g:i a', $next); // format the next time
										 
										 //echo "<span style='color:#000;'>$prev - $time</span>";
										//if($prev <= $date && $time >= $date) { 
										//echo "next".$nextAdd."<br>";
										//echo "prev".$dateAdd."<br>";
										if($nextAdd >= $dateAdd) {
											
										//echo "<span style='color:#000;'>".$time."-".$date."</span>";
									?>
										<a href="verification.php?timing=<?php echo htmlentities($time); ?>&date=<?php echo htmlentities($dateValue); ?>" ><li class="_1qddD8MXhhJEixhoKZQSgs" data-index="<?php echo $i; ?>">
											<p data-index="<?php echo $i; ?>"><?php echo $time; ?></p>
										</li></a>
									<?php } else { ?>
										<!--<a href="#" ><li class="_1qddD8MXhhJEixhoKZQSgs _20Zj8RByaXYN2wq7mBkjd8" data-index="<?php echo $i; ?>"><p data-index="<?php echo $i; ?>"><?php echo $time; ?></p></li></a>-->
									<?php } ?>
									<?php } ?>
									<?php } else { 
									 $time = '9:00'; // start
									 
									 for ($i = 0; $i <= 21; $i++)
									 {
										 
										$time_now = mktime(date('h')+4,date('i')+30,date('s'));
										$date = date('g a', $time_now);
										$dateAdd = strtotime('+30mins', strtotime($date));
										$dateNow = date('g:i a', $dateAdd);
										//echo "<span style='color:#000;'>".$date."</span>";
										 #echo "<span style='color:#000;'>". date("h:i a")."</span>";
										 $prev = date('g:i a', strtotime($time)); // format the start time
										 $next = strtotime('+30mins', strtotime($time)); // add 30 mins
										 $time = date('g:i a', $next); // format the next time
										 //echo "<span style='color:#000;'>$prev - $time</span>";
										//if($prev <= $date && $time >= $date) { 
										//echo "<span style='color:#000;'>".$time."-".$date."</span>";
									?>
										<a href="verification.php?timing=<?php echo htmlentities($time); ?>&date=<?php echo htmlentities($dateValue); ?>" ><li class="_1qddD8MXhhJEixhoKZQSgs" data-index="<?php echo $i; ?>">
											<p data-index="<?php echo $i; ?>"><?php echo $time; ?></p>
										</li></a>
									<?php } } ?>
									</ul>
									<div class="row">&nbsp;</div>
									
								</div>
	
							</div>
							
						</form>
						<form action="verification.php" method="get">						
<input type='text' id="datepicker" data-date-format="dd-mm-yyyy" name="date" placeholder="enter date manually" class='datepicker-here form-control' data-language='en'  />
<input type="text" id="time" name="timing" placeholder="enter time manually" class="timepicker form-control"/>
<input type="submit" class="form-control" value="submit"/>
</form>


<script>
(function($) {
    $(function() {
        $('.timepicker').timepicker({
			timeFormat: 'h:mm p'
		});
    });
})(jQuery);

var date = new Date();
// add 30 day
date.setDate(date.getDate() + 30);
$('#datepicker').datepicker({
    language: 'en',
    minDate: new Date(), // can select only dates, which goes after today
	maxDate: date 
})
</script>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>	
<?php $timezone = date_default_timezone_get();
date_default_timezone_set($timezone);
$date = date('d/m/Y h:i:s a', time());
echo $date ."<br>";
echo htmlentities($time);
?>

<?php include('footer.php'); ?>