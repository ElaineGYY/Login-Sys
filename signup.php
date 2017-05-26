<?php
	include 'header.php';
?>

<br /> <br /> <br />
<?php
	if (isset($_SESSION['id'])) {
		echo "You are already logged in!";
	} else {
		echo "<form action='includes/signup.inc.php' method='POST'>
	<input type='text' name='first' placeholder='FirstName'> <br />
	<input type='text' name='last' placeholder='LastName'> <br />
	<input type='text' name='uid' placeholder='Username'> <br />
	<input type='password' name='pwd' placeholder='Password'> <br />
	<button type='submit'>Sign Up </button>
    </form>";
	}
?>

</body>
</html>
