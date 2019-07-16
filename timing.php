<?php date_default_timezone_set('Asia/Kolkata');?>
<?php
#timing.php
include('header.php');
if ($_SESSION["cart"] == "") {
	header("Location:checkout.php");
}
$products = array("Eyebrow", "Eyebrow + Forehead", "Upper Lip", "Full Face", "UnderArm-HoneyBee", "UnderArm-Chocolate", "FullHand-HoneyBee", "FullHand-Chocolate", "HalfLegs-HoneyBee", "HalfLegs-Chocolate", "FullLegs-HoneyBee", "FullLegs-Chocolate", "FullHands+FullLegs-Honeybee", "FullHands+FullLegs-Chocolate", "FullHands+FullLegs+Underarms-Honeybee", "FullHands+FullLegs+Underarms-Chocolate", "FullFace-Honeybee", "FullFace-Chocolate", "UpperLip-Honeybee", "UpperLip-Chocolate", "FullBody-Honeybee", "FullBody-Chocolate", "FullBack(upper)-Honeybee", "FullBack(upper)-Chocolate", "Stomach-Honeybee", "Stomach-Chocolate", "Forehead-Honeybee", "Forehead-Chocolate", "Fruit-Face", "Fruit-Hand", "Anti Tan-Face", "Anti Tan-Hand", "Vicc-Face", "Vicc-Hand", "Lotus-Face", "Lotus-Hand", "Shehnaz-Face", "Shehnaz-Hand", "Whitening-Face", "Whitening-Hand", "Charcoal-Face", "Charcoal-Hand", "Gold-Face", "Gold-Hand", "Diamond-Face", "Diamond-Hand", "Pearl-Face", "Pearl-Hand" , "Gold", "Diamond", "Pearl", "Charcoal", "Shehnaaz Gold", "Fruit", "Whitening", "Anti Tan","Lotus", "Vicc", "Aroma", "Oxy-Face","Oxy-Hand","Oxy-Face+Hand","Diamond-Face","Diamond-Hand","Diamond-Face+Hand","Gold-Face","Gold-Face+Hand","Fem-Face", "Fem-Hand", "Fem-Face+Hand","Pedicure","Manicure","Straight","U","V","Layer- 2 Step","Layer- 3 Step", "Laser", "Feather", "Chinese Cut", "Princess Cut", "Blunt Cut", "Boy Cut", "Sadhna Cut", "Half Hair Curls", "Full Hair Curls", "Hair Style Designer", "Waxing(full hand + full legs + underarms)+Clean Up", "Waxing(full hand + full legs + underarms)+Clean Up+ Hair Styling", "Waxing(full hand + full legs + underarms)+Clean Up+Make Up", "Waxing(full hand + full legs + underarms)+Clean Up+ Hair Styling +Make Up","Light","Bridal","Dress Up","Simple","Bridal");
$amounts = array("15", "25", "10","80","30","50","150","250","120","150","240","270","370","500","400","570","100","125","20","25","700","800","170","200","170","200","30","45","120","200","200","400","150","300","300","500","500","700","200","400","500","1000","200","400","300", "500", "200", "400","500","600","500","800","1500","200","250","250", "500", "500", "600","100","250","350","150","300","420","125","250","375","75","150","200","250","200","30","50","100","100","120","100","100","100","100","50","50","50","150","200","150","450","550","600","700","200","6000","200","150","5000");

?>
<link rel="stylesheet" href="css/qaModalChunk-d5020c0ce4ff05d365f1.css">
<!-- <!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
		<title></title>
	</head>
	<body> -->
			<?php
			echo '
			<div class = container>
			<div class = "col-md-4 animate-box" style = "margin: 150px;">
			<form action="verification.php" method="Get" onsubmit="return(validate());">
			Date:<br>';
			echo '<select class = "form-control" name="date" id = "dateValue"> 
				<option>Select Date</option> ' ;
			for($i = 0 ; $i<=10 ; $i++){
				echo '<option>' . date("d-m-Y", time() + 86400*$i).  '</option>';
		  		}
			echo '</select><br>';
		  	echo 'Time:<br>';
			echo '<select class = "form-control" id="time" name = "timing">';
			echo '<option>Select Time</option>';
			echo	'</select><br><br>';
		 	echo '<button type="submit" id = "form-btn" class="btn btn-success">Submit</button>
		</form></div></div>';
		?>
		<script>
		$(document).ready(function () {
		    $("#dateValue").change(function () {
						var d = new Date();
						var current_hr = parseFloat(d.getHours());
						var current_day = parseFloat(d.getDate());
		        var val = $(this).val().substring(0,2);
						console.log('val (selected day)'+val);
						console.log('current_hr'+current_hr);
						console.log('current_day'+current_day);
		        if (val == current_day)
						{
								console.log('same');
								if(current_hr >= 19)
								{
									$("#time").html("");
									console.log('current_hr => 19');
		            					$("#time").html("<option>" + 'Select another day. We dont service after 8 PM... yet' + "</option>");
								}
								if(current_hr >= 9 && current_hr < 19)
								{
									$("#time").html("");
									console.log('current_hr => 9 && current_hr <= 19');
									for(i = current_hr; i<=20; i++)
									{
			            				$("#time").append("<option>" + i + ":00</option>");
									}
								}
								if(current_hr >= 00 && current_hr <= 9)
								{
									$("#time").html("");
									console.log('current_hr => 0 && current_hr <= 9');
									for(i = 9; i<=20; i++)
									{
			            				$("#time").append("<option>" + i + ":00</option>");
									}
								}
		        }
						else if(val!=current_day)
						{
								$("#time").html("");
								console.log('val!=current_day');
								for(i = 9; i<=20; i++)
								{
								$("#time").append("<option>" + i + ":00</option>");
								}
						}
		    });
		});

		function validate()
		{
			var dateVal = $( "#dateValue option:selected" ).text();
			var timeVal = $( "#time option:selected" ).text();
			if(dateVal == "Select Date" || timeVal == "Select Time" || timeVal == "Select another day. We dont service after 8 PM... yet")
			{
				alert("Please select a valid date & time");
				return false;
			}
		}
		</script>
		<!-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script> -->
	<!-- </body>
</html> -->
<?php include('footer.php'); ?>