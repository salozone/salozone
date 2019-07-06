<?php
#bookingdata.php
session_start();
$products = array("Eyebrow", "Eyebrow + Forehead", "Upper Lip", "Full Face", "UnderArm-HoneyBee", "UnderArm-Chocolate", "FullHand-HoneyBee", "FullHand-Chocolate", "HalfLegs-HoneyBee", "HalfLegs-Chocolate", "FullLegs-HoneyBee", "FullLegs-Chocolate", "FullHands+FullLegs-Honeybee", "FullHands+FullLegs-Chocolate", "FullHands+FullLegs+Underarms-Honeybee", "FullHands+FullLegs+Underarms-Chocolate", "FullFace-Honeybee", "FullFace-Chocolate", "UpperLip-Honeybee", "UpperLip-Chocolate", "FullBody-Honeybee", "FullBody-Chocolate", "FullBack(upper)-Honeybee", "FullBack(upper)-Chocolate", "Stomach-Honeybee", "Stomach-Chocolate", "Forehead-Honeybee", "Forehead-Chocolate", "Fruit-Face", "Fruit-Hand", "Anti Tan-Face", "Anti Tan-Hand", "VLCC-Face", "VLCC-Hand", "Whitening-Face", "Whitening-Hand", "Gold-Face", "Gold-Hand", "Diamond-Face", "Diamond-Hand", "Pearl-Face", "Pearl-Hand", "Lotus-Face", "Lotus-Hand", "Shehnaz-Face", "Shehnaz-Hand", "Charcoal-Face", "Charcoal-Hand", "Gold", "Diamond", "Pearl", "Charcoal", "Shehnaaz Gold", "Fruit", "Whitening", "Anti Tan","Lotus", "Vicc", "Aroma", "Oxy-Face","Oxy-Hand","Oxy-Face+Hand","Diamond-Face","Diamond-Hand","Diamond-Face+Hand","Gold-Face","Gold-Face+Hand","Fem-Face", "Fem-Hand", "Fem-Face+Hand","Pedicure","Manicure","Straight","U","V","Layer- 2 Step","Layer- 3 Step", "Laser", "Feather", "Chinese Cut", "Princess Cut", "Blunt Cut", "Boy Cut", "Sadhna Cut", "Half Hair Curls", "Full Hair Curls", "Hair Style Designer", "Waxing(full hand + full legs + underarms)+Clean Up", "Waxing(full hand + full legs + underarms)+Clean Up+ Hair Styling", "Waxing(full hand + full legs + underarms)+Clean Up+Make Up", "Waxing(full hand + full legs + underarms)+Clean Up+ Hair Styling +Make Up","Light","Bridal","Dress Up","Simple","Bridal","Threading + Full Hand Waxing + Clean Up(Fruit)","Facial(Gold) + Pedicure + Manicure","Facial(Gold) + Pedicure","Bleach(Oxy) + Hair Style Designer + Pedicure","Threading + Full Waxing(Hands+Legs+Under Arms) + Clean Up(Fruit)");
$amounts = array("15","25", "10","80","30","50","119","199","119","149","199","249","299","449","349","520","99","119","20","25","599","749","170","199","170","199","30","45","99","180","180","380","119","220","180","390","180","350","280","450","180","350","249","449","449", "649", "449", "949","500","600","500","800","1500","200","250","250", "500", "500", "600","100","250","350","150","300","420","125","250","375","75","150","200","250","200","30","50","100","100","120","100","100","100","100","50","50","50","150","200","150","450","550","600","700","200","6000","200","150","5000","200","650","480","380","395");
if(isset($_POST['pos']) && $_POST['pos'] == 'confirmafter') {
	$cateNameR[] = $_POST['cateNameR'];
	$priceValueR[] = $_POST['priceValueR'];
	$qtyValueR[] = $_POST['qtyValueR'];
	$totalAmtR = $_POST['totalAmtR'];
	$totalQtyR = $_POST['totalQtyR'];
	$paidStatusR = $_POST['paidStatusR'];
	$billnoR = $_POST['billnoR'];
	$n = 0;
	$total = 0;
	$noQty = 0;
	foreach($cateNameR as $i) {
	?>
		<div class="_22sNqyb5wdkrBAIZDQ2taJ">
			<ul class="_2mioG8IfFu0HyLapNQp2db">
				<li class="_3jrW267vh0aDPPhnRT_hUr">
					<div class="clearfix _1gEr9qY7kjBQEL00TCslQ4">
						<div class="_2_zFy-1lucSUR_Du1Q018L">
							<h3><?php echo $i; ?></h3>
							<div class="U7DStEWrPcwr-0_rYHtNO">
								<div class="amount">₹ <?php echo( $priceValueR[$n] ); ?></div>
							</div>
						</div>
						<div class="_2EgDYr1YDcUmvMenP84XQ5" style="width:150px;margin-top:40px;">
							<?php if($qtyValueR[$n] != '') { echo $qtyValueR[$n]; } else { echo 1; } ?>
						</div>
						<h3>₹ <?php echo $priceValueR[$n]; ?></h3>
					</div>
				</li>
			</ul>
		</div>
<?php				
		$n++;
	}
?>
	<ul class="_2mioG8IfFu0HyLapNQp2db">
		<div class="_3pUB-LDjlpx6e9ACL8E_1x _1ztQTskd2_GRzGb0OH6YwR" style="">
			<div class="hPO8BoyBkYEU2ujeCWJgk H1Lb6afUHKzH-OTelE23x" style="font-size: 14px;">
				<div class="_1kb-XXNt4wePQ_svwAQnhG">Subtotal</div>
				<div class="_36rMyLl0yKiOS-udBUSM8a" style="color: rgb(117, 117, 117);">₹ <?php echo($totalAmtR); ?></div>
			</div>
			<div class="hPO8BoyBkYEU2ujeCWJgk _1ovga__v3v_0DJ3-9UggBS H1Lb6afUHKzH-OTelE23x" style="font-size: 14px;">
				<div class="_1kb-XXNt4wePQ_svwAQnhG">Total</div>
				<div class="_36rMyLl0yKiOS-udBUSM8a" style="color: rgb(117, 117, 117);">₹ <?php echo($totalAmtR); ?></div>
			</div>
		</div>
	</ul>
<?php 	
	//header("Location:verify.php");
} else {
	//echo "test";exit;
	header("Location:timing.php");
}
?>