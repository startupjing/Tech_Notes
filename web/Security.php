<!-- filtering input -->
<?php
  $amount = (float) $_POST['amount'];

  $phone = preg_match('/\d{3}-\d{3}-\d{4}/', $_POST['phone']) ? $_POST['phone'] : "";
?>


<!-- escaping output -->
<?php
  //if a&lt;b and b&lt;c then a&lt;c.
  $str = "if a<b and b<c then a<c";
  echo htmlentities($str);
?>


<!-- format string injection -->
<?php
  printf("%s", htmlentities($_GET['username']));
  print htmlentities($_GET['username']);
  echo htmlentities($_GET['username']);
?>


<!-- check password -->
<?php
	// This is a *good* example of how you can implement password-based user authentication in your web application.

	require 'database.php';

	// Use a prepared statement
	$stmt = $mysqli->prepare("SELECT COUNT(*), id, crypted_password FROM users WHERE username=?");

	// Bind the parameter
	$stmt->bind_param('s', $user);
	$user = $_POST['username'];
	$stmt->execute();

	// Bind the results
	$stmt->bind_result($cnt, $user_id, $pwd_hash);
	$stmt->fetch();

	$pwd_guess = $_POST['password'];
	// Compare the submitted password to the actual password hash
	if( $cnt == 1 && crypt($pwd_guess, $pwd_hash)==$pwd_hash){
		// Login succeeded!
		$_SESSION['user_id'] = $user_id;
		// Redirect to your target page
	}else{
		// Login failed; redirect back to the login screen
	}
?>



<!-- Cross-Site Request Forgery -->
<?php
  $_SESSION['token'] = substr(md5(rand()), 0, 10);
?>


<form action="transfer.php" method="POST">
	<inpyt type="text" name="dest" />
	<input type="number" name="amount" />
	<input type="hidden" name="token" value="<?php echo $_SESSION['token']; ?>" />
	<input type="submit" value="transfer" />
</form>

<?php
	$destination_username = $_POST['dest'];
	$amount = $_POST['amount'];
	if($_SESSION['token'] !== $_POST['token']){
		die("Request forgery detected");
	}
	$mysqli->query(/* perform transfer */);
?>


<!-- SQL injection -->
<?php
   $safe_username = $mysqli->real_escape_string($_POST['username']);

   $stmt = $mysqli->prepare("SELECT COUNT(*), id, crypted_password FROM users WHERE username=?");

?>


