<?php
  
  //PassVariable.php?name=Alice
  $name = $_GET['name'];
  printf("<p>Hello, %s</p>", htmlentities($name));

?>

<!-- POST form -->
<form action="PassVariable.php" method="POST">
	<p>
		<label for="nameinput">Name:</label>
		<input type="text" name="name" id="nameinput" />
	</p>

	<p>
		<strong>Gener:</strong>
		<input type="radio" name="gender" value="male" id="maleinput" /><label for="maleinput">Male</label>
		<input type="radio" name="gender" value="female" id="femaleinput" /><label for="femaleinput">Female</label>
	</p>

	<p>
		<input type="submit" value="send" />
		<input type="reset" />
	</p>
</form>

<?php
  $name = $_POST['name'];
  $gender = $_POST['gender'];

  printf("<p>Hello, %s, you are %s", htmlentities($name), htmlentities($gender));

?>


<!-- self submitting form -->
<form action="<?php echo htmlentities($_SERVER['PHP_SELF']; ?>)" method="POST">
	<input type="text" name="name" id="name" />
	<input type="submit" value="submit" />
</form>

<?php
  if(isset($_POST['name'])){
  	 printf("<p>Hello, %s</p>", htmlentities($_POST['name']));
  }
?>


<!-- using session -->
<?php
  session_start();
  $old_num = (int) @$_SESSION['inc_num'];
  if($old_num < 1){
  	  $old_num = 1;
  }
  $new_num = $old_num * 2;
  echo $new_num;
  $_SESSION['inc_num'] = $new_num;
?>




