<?php

// Turn off error reporting
error_reporting(0);

if ($_SESSION['loggedin']) {
    header('Location: index.php?page=home');
}

if(isset($_POST['submit']))
{

	if(isset($_POST['email'],$_POST['pwd']) && !empty($_POST['email']) && !empty($_POST['pwd']))
	{
        $email = $_POST['email'];
        $pwd = $_POST['pwd'];
        
        $sql = 'SELECT * FROM users WHERE email = :email && pwd = :pwd';
        $username = 'SELECT username FROM users ';
        $stmt = $pdo->prepare($sql);
        $stmt->execute(['email' => $email, 'pwd' => $pwd]);
        $user = $stmt->fetchAll();

        if(!$user){
            echo "<script>alert('Woops! Email or Password is Wrong.')</script>";
        }   
        else{
            
            $_SESSION['loggedin'] = true;
            header('Location: index.php?page=home');

        }
 
    }
    else{

        echo "<script>alert('2 Woops! Email or Password is Wrong.')</script>";

    }
}

?>


<?=header_login(login)?>

    <div class="container">
		<form action="index.php?page=login" method="POST" class="login-email">
			<p class="login-text" style="font-size: 2rem; font-weight: 800;">Login</p>
			<div class="input-group">
                <input type="text" name="email" placeholder="Enter Email" required value="<?php echo $email; ?>">
			</div>
			<div class="input-group">
                <input type="password" name="pwd" placeholder="Enter Password" value="<?php echo $_POST['pwd']; ?>" required>
			</div>
			<div class="input-group">
                <button type="submit" name="submit" class="btn">Login</button>
			</div>
			<p class="login-register-text">Don't have an account? <a href="index.php?page=register">Register Here</a>.</p>
		</form>
    </div>
</body>
</html>
