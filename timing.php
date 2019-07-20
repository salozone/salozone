<?php
#timing.php
include('header.php');
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

								<div class='input-group date' id='datetimepicker1'>
									<input type='text' class="form-control" />
										<span class="input-group-addon">
											<span class="glyphicon glyphicon-calendar"></span>
										</span>
								</div>

											<script>
											$(function () {
												$('#datetimepicker1').datetimepicker({

																format: 'DD/MM/YYYY',
														});
											});
											</script>

								<h3 class="_28gUKzEsw8N-nqfXEO8ClO">Select time</h3>
									<ul id="schedulerTimeSlot" class="VRRoZR_W287QHk-Uo6A5i _2cwgaT4dHGJELUxF91Slht clearfix">
									<?php
									if($todayDate == $dateValue) {
									 $time = '8:00'; // start
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
