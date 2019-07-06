<?php
#login.php
include('header.php');
?>

<script>
	//function to store user name and password
   function store(theForm) {
		var inputFname= $("#fname").val();
		var inputMobile= $("#mobile").val();
		var inputEmail= $("#email").val();
		var inputPassword= $("#password").val();
		localStorage.setItem("fname", inputFname);
		localStorage.setItem("mobile", inputMobile);
		localStorage.setItem("email", inputEmail);
		localStorage.setItem("password", inputPassword);
		//document.getElementById('welcomeMessage').innerHTML = "Welcome " + localStorage.getItem('email') + "!";
		alert('Register Successfully');
		window.location.replace("index.php");
		$("#fname").val('');
		$("#mobile").val('');
		$("#email").val('');
		$("#password").val('');
		return false;
		
   } // end store()
</script>  
<script>
//function to sign in
   function loginn() {
    var inputUsername = $("#uname").val();
    var inputPassword = $("#pword").val();
	//alert(inputUsername);
    if ((inputUsername == localStorage.getItem('email')) && (inputPassword == localStorage.getItem('password'))) {
		localStorage.setItem("loggedIn", 'login');
		$('#uname').val('');
		$('#pword').val('');
		alert('You are login successfully!');
		window.location.replace("index.php");
      } else {
		localStorage.setItem("loggedIn", 'logout');
		alert('Invalid Login!');
		//window.location.replace("index.php");
		
    }
    return false;
   } // end login()
</script>
 
<div class="main">
<div id="fh5co-product">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-xs-12 animate-box">
					<h2>Login</h2>
					<div class="col-md-12 animate-box">						
						<form action="#" id="login_form" name="login_form" onsubmit="return loginn(this.value);" >
							<input type="hidden" name="do" value="login_35">
							<div class="row form-group">
								<div class="col-md-12">
									<label for="message">Username:</label>
									<input type="email" id="uname" name="uname" placeholder="Email Address" class="form-control" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" title="example@example.com" required="required" autocomplete="off" />
									
								</div>
							</div>
							<div class="row form-group">
								<div class="col-md-12">
									<label for="message">Password:</label>
									<input type="password" id="pword" name="pword" placeholder="Password" class="form-control" pattern=".{6,}" maxlength="15" title="Input string should be either empty or between 6 - 15 characters" required="required"  />
								</div>
							</div>
							<input type="submit" name="login" value="Login" class="btn btn-primary btn-outline btn-lg" />
						</form>
					</div>
				</div>
				<div class="col-md-6 col-xs-12 animate-box">
					<h2>Register</h2>
					<div class="col-md-12 animate-box">
						<form action="#" id="register_form" name="register_form" onsubmit="return store(this.value);">
							<input type="hidden" name="do" value="register_35">
							<div class="row form-group">
								<div class="col-md-12">
									<label for="message">Full Name:</label>
									<input type="text" name="fname" required="required" id="fname" autocomplete="off" placeholder="Full Name" title="Alphabetics Only" class="form-control">
								</div>
							</div>
							<div class="row form-group">
								<div class="col-md-12">
									<label for="message">Email Address:</label>
									<input type="email" id="email" name="email" placeholder="Email Address" class="form-control" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" title="example@example.com" required="required" autocomplete="off" />
								</div>
							</div>
							<div class="row form-group">
								<div class="col-md-12">
									<label for="message">Mobile Number:</label>
									<input type="text" id="mobile" name="mobile" placeholder="Mobile Number" class="form-control" required="required" pattern="^[6789]\d{9}$" title="Enter 10 digit valid mobile number" maxlength="10" autocomplete="off" />
								</div>
							</div>
							<div class="row form-group">
								<div class="col-md-12">
									<label for="message">Password:</label>
									<input type="password" id="password" name="password" placeholder="Password" class="form-control" pattern=".{6,}" maxlength="15" title="Input string should be either empty or between 6 - 15 characters" required="required"  />
								</div>
							</div>
						
							<input type="submit" name="register" value="Register" class="btn btn-primary btn-outline btn-lg" />
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>	
<?php include('footer.php'); ?>
