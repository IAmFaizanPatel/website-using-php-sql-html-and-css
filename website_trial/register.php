<?php

//turn off error reporting
error_reporting(0);

if ($_SESSION['loggedin']) {
 	header('Location: index.php?page=home');
}

if(isset($_POST['submit']))
{
	$username = $_POST['username'];
	$email = $_POST['email'];
	$pwd = $_POST['pwd'];
	$cpassword = $_POST['cpassword'];

	if($pwd == $cpassword) 
	{

		echo "<script>alert('1')</script>";

		$sql = 'SELECT * FROM users WHERE email = :email || username = :username';
		$stmt = $pdo->prepare($sql);
        $stmt->execute(['email' => $email, 'username' => $username]);
        $user = $stmt->fetchAll();
		if(!$user)
		{
			$sql = "insert into users (username, email, pwd) values(:username, :email, :pwd)";
            
			
			$handle = $pdo->prepare($sql);
			$params = [
				':username'=>$username,
				':email'=>$email,
				':pwd'=>$pwd,
				];
				
			$handle->execute($params);
			echo "<script>alert('User has been created successfully;')</script>";
			header('Location: index.php?page=login');
			
		}
		else
		{
			echo "<script>alert('Email or username already exists')</script>";
		}
	
	}
	else
	{
		echo "<script>alert('Passwords don't match')</script>";
	}


}

?>


<?=header_login(register)?>

	<div class="container">
		<form action="" method="POST" class="login-email">
            <p class="login-text" style="font-size: 2rem; font-weight: 800;">Register</p>
			<div class="input-group">
				<input type="text" placeholder="Username" name="username" required>
			</div>
			<div class="input-group">
				<input type="email" placeholder="Email" name="email" required>
			</div>
			<div class="input-group">
				<input type="password" placeholder="Password" name="pwd" required>
            </div>
            <div class="input-group">
				<input type="password" placeholder="Confirm Password" name="cpassword" required>
			</div>
			<div class="input-group">
				<button name="submit" class="btn">Register</button>
			</div>
			<p class="login-register-text">Already have an account? <a href="index.php?page=login">Login Here</a>.</p>
		</form>
	</div>
</body>
</html>
