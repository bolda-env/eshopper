<?php include("header.php");
$_SESSION['page'] = 'Login';

if(!empty($_SESSION['ALEWRT'])){
	echo '<center><h1 class="display-4" style="color:red;">'.$_SESSION["ALEWRT"].'</h1></center>';
	$_SESSION['ALEWRT']='';
}

if(!empty($_SESSION['No_exist']))
{
	echo "<script>alert('$_SESSION[No_exist]')</script>";
	$_SESSION['No_exist'] = '';
}

if(!empty($_SESSION['inv_e_pwd']))
{
	echo "<script>alert('$_SESSION[inv_e_pwd]')</script>";
	$_SESSION['inv_e_pwd'] = '';
}
?>	

<section id="form"><!--form-->
		<div class="container">
			<div class="row">
				<div class="col-sm-4 col-sm-offset-1">
					<div class="login-form"><!--login form-->
						<h2>Login to your account</h2>
						<form action="sign_up.php" method="post">
							<input type="emil" placeholder="Email" required name="email"/>
							<input type="password" placeholder="***" name="pass"required/>
							<button type="submit" class="btn btn-default" name="login">Login</button>
						</form>
					</div><!--/login form-->
				</div>
				<div class="col-sm-1">
					<h2 class="or">OR</h2>
				</div>
				<div class="col-sm-4">
					<div class="signup-form"><!--sign up form-->
						<h2>New User Signup!</h2>
						<form action="sign_up.php" method="post">
							<input type="text" placeholder="Name" name="name" required/>
							<input type="email" placeholder="Email Address" name="email" required/>
							<input type="password" placeholder="Password" name="pass" required/>
							<button type="submit" class="btn btn-default" name="sign" >Signup</button>
						</form>
					</div><!--/sign up form-->
				</div>
			</div>
		</div>
	</section><!--/form-->
	<?php include("footer.php");?>