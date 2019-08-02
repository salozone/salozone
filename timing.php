<?php
#timing.php
include('header.php');
if ($_SESSION["cart"] == "") {
	header("Location:checkout.php");
}
$products = array("Eyebrow", "Eyebrow + Forehead", "Upper Lip", "Full Face", "UnderArm-HoneyBee", "UnderArm-Chocolate", "FullHand-HoneyBee", "FullHand-Chocolate", "HalfLegs-HoneyBee", "HalfLegs-Chocolate", "FullLegs-HoneyBee", "FullLegs-Chocolate", "FullHands+FullLegs-Honeybee", "FullHands+FullLegs-Chocolate", "FullHands+FullLegs+Underarms-Honeybee", "FullHands+FullLegs+Underarms-Chocolate", "FullFace-Honeybee", "FullFace-Chocolate", "UpperLip-Honeybee", "UpperLip-Chocolate", "FullBody-Honeybee", "FullBody-Chocolate", "FullBack(upper)-Honeybee", "FullBack(upper)-Chocolate", "Stomach-Honeybee", "Stomach-Chocolate", "Forehead-Honeybee", "Forehead-Chocolate", "Fruit-Face", "Fruit-Hand", "Anti Tan-Face", "Anti Tan-Hand", "Vicc-Face", "Vicc-Hand", "Lotus-Face", "Lotus-Hand", "Shehnaz-Face", "Shehnaz-Hand", "Whitening-Face", "Whitening-Hand", "Charcoal-Face", "Charcoal-Hand", "Gold-Face", "Gold-Hand", "Diamond-Face", "Diamond-Hand", "Pearl-Face", "Pearl-Hand" , "Gold", "Diamond", "Pearl", "Charcoal", "Shehnaaz Gold", "Fruit", "Whitening", "Anti Tan","Lotus", "Vicc", "Aroma", "Oxy-Face","Oxy-Hand","Oxy-Face+Hand","Diamond-Face","Diamond-Hand","Diamond-Face+Hand","Gold-Face","Gold-Face+Hand","Fem-Face", "Fem-Hand", "Fem-Face+Hand","Pedicure","Manicure","Straight","U","V","Layer- 2 Step","Layer- 3 Step", "Laser", "Feather", "Chinese Cut", "Princess Cut", "Blunt Cut", "Boy Cut", "Sadhna Cut", "Half Hair Curls", "Full Hair Curls", "Hair Style Designer", "Waxing(full hand + full legs + underarms)+Clean Up", "Waxing(full hand + full legs + underarms)+Clean Up+ Hair Styling", "Waxing(full hand + full legs + underarms)+Clean Up+Make Up", "Waxing(full hand + full legs + underarms)+Clean Up+ Hair Styling +Make Up","Light","Bridal","Dress Up","Simple","Bridal");
$amounts = array("15", "25", "10","80","30","50","150","250","120","150","240","270","370","500","400","570","100","125","20","25","700","800","170","200","170","200","30","45","120","200","200","400","150","300","300","500","500","700","200","400","500","1000","200","400","300", "500", "200", "400","500","600","500","800","1500","200","250","250", "500", "500", "600","100","250","350","150","300","420","125","250","375","75","150","200","250","200","30","50","100","100","120","100","100","100","100","50","50","50","150","200","150","450","550","600","700","200","6000","200","150","5000");

$point = date('H' , strtotime('18:00'));
$timeNow = date('H');
if(isset($_GET['date'])) {
	$dateValue = $_GET['date'];
}elseif($timeNow >= $point) {
	$ts = date("d-m-Y");
	$ts = strtotime($ts) + 86400;
	$dateValue = date("d-m-Y" , $ts);
}else{
	$dateValue = date("d-m-Y");
}
#$todayDate = isset($dateValue) ? $dateValue : date("Y-m-d");
$todayDate = date("d-m-Y");
?>



<link rel="stylesheet" href="css/qaModalChunk-d5020c0ce4ff05d365f1.css">
<link rel="stylesheet" href="css/qaModalChunk-d5020c0ce4ff05d365f1.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<!-- <link rel="stylesheet" type="text/css" href="css/bootstrap-datetimepicker.css"> -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.15.1/moment.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.43/css/bootstrap-datetimepicker.min.css">
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.43/css/bootstrap-datetimepicker-standalone.css">
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.43/js/bootstrap-datetimepicker.min.js"></script>
<style media="screen">
.input-group input{
	height: 50px;
	font-weight: bold;
}
</style>



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
											//	echo $toDay = $currentDate[0];
												/* Ist Day*/

												if($timeNow >= $point){
													$ts = $ts + 86400;
												}

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

								<script>
								function f1(){
									alert("hello")
								}
								</script>
								<form action="timing.php">
								<div class='input-group date' id='datetimepicker1'>
									<input type='text' value="<?php echo $dateValue; ?>" name ="date" class="form-control"/>
										<span class="input-group-addon">
											<span class="glyphicon glyphicon-calendar"></span>
										</span>
								</div>
								<input type="submit" class="btn" value ="select date">	
								</form>					
											<script>
											var date = new Date();
											var daysToAdd = 30;
											date.setDate(date.getDate() + daysToAdd); 
											$(function () {
												$('#datetimepicker1').datetimepicker({
																format: 'DD-MM-YYYY',
																minDate: new Date(),
																maxDate: date
																
														});
											});
											
										
											
											</script>

								<h3 class="_28gUKzEsw8N-nqfXEO8ClO">Select time</h3>
									<ul id="schedulerTimeSlot" class="VRRoZR_W287QHk-Uo6A5i _2cwgaT4dHGJELUxF91Slht clearfix">
									<?php
									 $startTime = '9:00'; // start
									 if($todayDate == $dateValue) {
									 
									  $endTime = '20:00';
									  $point1 = date('H' , strtotime('24:00'));
									  $point2 = date('H' , strtotime('7:00'));
									  $point3 = date('H' , strtotime('18:00'));
									 $timeNow = date('H');
									 if($timeNow >= $point1 && $timeNow < $point2)
									 {
									 $time = date('g:i a' , strtotime($startTime));
									  for ($i = 0; $i <= 21; $i++)
									  {
									 ?>
										 <a href="verification.php?timing=<?php echo htmlentities($time); ?>&date=<?php echo htmlentities($dateValue); ?>" >
										 <li class="_1qddD8MXhhJEixhoKZQSgs" data-index="<?php echo $i; ?>"><p data-index="<?php echo $i; ?>"><?php echo $time; ?></p>
										 </li></a>											
									 <?php	
									 $next = strtotime('+30mins', strtotime($time)); // add 30 mins
									 $time = date('g:i a', $next); // format the next time
									 }
									 }elseif($timeNow >= $point2 && $timeNow < $point3){
										 $now = mktime($timeNow+2,30,date('s'));
										 $time = date('g:i a', $now);
										 for (;;)
										 {
											 $next = date('H' ,  strtotime($time) );
											 $end =  date('H' , strtotime($endTime));
											 if($next < $end){
										?>
											<a href="verification.php?timing=<?php echo htmlentities($time); ?>&date=<?php echo htmlentities($dateValue); ?>" >
											<li class="_1qddD8MXhhJEixhoKZQSgs" data-index="<?php echo $i; ?>"><p data-index="<?php echo $i; ?>"><?php echo $time; ?></p>
											</li></a>											
										<?php	
										$next = strtotime('+30mins', strtotime($time)); // add 30 mins
										$time = date('g:i a', $next); // format the next time
										 }else{
											 break;
										 }
										}
										 
									 }									
									 }else {
										 $time = date('g:i a' , strtotime($startTime));
										 for ($i = 0; $i <= 21; $i++)
										 {
										?>
											<a href="verification.php?timing=<?php echo htmlentities($time); ?>&date=<?php echo htmlentities($dateValue); ?>" >
											<li class="_1qddD8MXhhJEixhoKZQSgs" data-index="<?php echo $i; ?>"><p data-index="<?php echo $i; ?>"><?php echo $time; ?></p>
											</li></a>											
										<?php	
										$next = strtotime('+30mins', strtotime($time)); // add 30 mins
										$time = date('g:i a', $next); // format the next time
										}
 
									 }  ?>
									</ul>
									<div class="row">&nbsp;</div>
								</div>

							</div>

						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>


<!-- Waypoints -->
<script src="js/jquery.waypoints.min.js"></script>
<!-- Carousel -->
<script src="js/owl.carousel.min.js"></script>
<!-- countTo -->
<script src="js/jquery.countTo.js"></script>
<!-- Flexslider -->
<script src="js/jquery.flexslider-min.js"></script>
<!-- Main -->
<script src="js/main.js"></script>
<!--Slider Menu -->
<script type="text/javascript" src="jss/owl.carousel.min.js"></script>
<script type="text/javascript" src="jss/script.js"></script>
