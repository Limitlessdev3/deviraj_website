<?php include_once './includes/header.php';?>

<div class="content top-space">
<div class="container">
<div class="row">
<div class="col-md-12">

<div class="account-content">
<div class="row align-items-center justify-content-center">
<div class="col-md-7 col-lg-6 login-left">
<img src="assets/img/login-banner.png" class="img-fluid" alt="Doccure Register">
</div>
<div class="col-md-12 col-lg-6 login-right">
<div class="login-header">
<h3>Patient Register <a href="#0">Are you a Doctor?</a></h3>
</div>

<form action="patient-dashboard.php">
<div class="row">
	<div class="col-sm-6">
		<div class="form-group form-focus">
		<input type="text" class="form-control floating">
		<label class="focus-label">Name</label>
		</div>
	</div>
	<div class="col-sm-6">
		<div class="form-group form-focus">
		<select class="form-control floating">
			<?php for($i=1;$i<=90;$i++){?>
			<option value="<?php echo $i;?>"><?php echo $i;?></option>
			<?php }?>
		</select>
		<label class="focus-label">Age</label>
		</div>
	</div>
</div>
<div class="row">
	<div class="col-sm-6">
		<div class="form-group form-focus">
			<input type="text" class="form-control floating">
			<label class="focus-label">Email</label>
		</div>
	</div>
	<div class="col-sm-6">
		<div class="form-group form-focus">
			<input type="text" class="form-control floating">
			<label class="focus-label">Mobile Number</label>
		</div>
	</div>
</div>
<div class="row">
	<div class="col-sm-6">
		<div class="form-group form-focus">
			<select class="form-control floating">
				<option></option>
				<option value="">Male</option>
				<option value="">Female</option>
			</select>
			<label class="focus-label">Gender</label>
		</div>
	</div>
	<div class="col-sm-6">
		<div class="form-group form-focus">
			<input type="text" class="form-control floating">
			<label class="focus-label">Address</label>
		</div>
	</div>
</div>
<div class="row">
	<div class="col-sm-6">
		<div class="form-group form-focus">
			<input type="text" class="form-control floating">
			<label class="focus-label">Refered By Doctor</label>
		</div>
	</div>
	<div class="col-sm-6">		
		<div class="form-group form-focus">
		<input type="password" class="form-control floating">
		<label class="focus-label">Create Password</label>
		</div>
	</div>
</div>
<div class="row">
	<label class="focus-label">Please Pick One that Troubling You</label>
	<select class="form-control floating">
				<option value="Depressed Mood">Depressed Mood</option>
				<option value="Psychotic Symptoms">Psychotic Symptoms</option>
				<option value="Alcohol and other Abuse">Alcohol and other Abuse</option>
				<option value="Low Self Esteem">Low Self Esteem</option>
				<option value="Significant tiredness, low energy or problems sleeping">Significant tiredness, low energy or problems sleeping</option>
				<option value="Excessive anger, hostility or violence">Excessive anger, hostility or violence</option>
				<option value="Suicidal thinking">Suicidal thinking</option>
				<option value="Extreme mood changes of highs and lows">Extreme mood changes of highs and lows</option>
				<option value="Confused thinking or reduced ability to concentrate">Confused thinking or reduced ability to concentrate</option>
				<option value="Excessive fears or worries, or extreme feelings of guilt">Excessive fears or worries, or extreme feelings of guilt</option>
			</select>
</div>
<div class="text-end">
<a class="forgot-link" href="login.php">Already have an account?</a>
</div>
<button class="btn btn-primary w-100 btn-lg login-btn" type="submit">Signup</button>
<div class="login-or">
<span class="or-line"></span>
<span class="span-or">or</span>
</div>
<div class="row form-row social-login">
<div class="col-6">
<a href="#" class="btn btn-facebook w-100"><i class="fab fa-facebook-f me-1"></i> Login</a>
</div>
<div class="col-6">
<a href="#" class="btn btn-google w-100"><i class="fab fa-google me-1"></i> Login</a>
</div>
</div>
</form>

</div>
</div>
</div>

</div>
</div>
</div>
</div>

<?php include_once './includes/footer.php';
?>