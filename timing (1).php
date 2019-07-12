<?php date_default_timezone_set('Asia/Kolkata');?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
		<title></title>
	</head>
	<body>
			<?php
			echo '<div class = "jumbotron shadow" style = "margin: 25px;">
			<form action="verification.php" method="POST" onsubmit="return(validate());">
			Date:<br>';
			echo '<select class = "form-control" name="dateValue" id = "dateValue">
				<option>Select Date</option>
			<option>' . date("d-m-Y", time()).  '</option>
		    <option>' . date("d-m-Y", time() + 86400).  '</option>
				<option>' . date("d-m-Y", time() + 86400*2).  '</option>
		    <option>' . date("d-m-Y", time() + 86400*3).  '</option>
				<option>' . date("d-m-Y", time() + 86400*4).  '</option>
				<option>' . date("d-m-Y", time() + 86400*5).  '</option>
				<option>' . date("d-m-Y", time() + 86400*6).  '</option>
				<option>' . date("d-m-Y", time() + 86400*7).  '</option>
				<option>' . date("d-m-Y", time() + 86400*8).  '</option>
				<option>' . date("d-m-Y", time() + 86400*9).  '</option>
				<option>' . date("d-m-Y", time() + 86400*10).  '</option>
		  </select><br>';
		  echo 'Time:<br>';
			echo '<select class = "form-control" id="time" name = "time">';
			echo '<option>Select Time</option>';
			echo	'</select><br><br>';
		 	echo '<button type="submit" id = "form-btn" class="btn btn-success">Submit</button>
		</form></div>';
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
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	</body>
</html>
