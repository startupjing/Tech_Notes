<!-- redirection to anther page -->
<?php
  header("Location: login.php");
  exit;
?>


<!-- read file line by line -->
<?php
  $file = fopen("input.txt", "r");
  $linenum = 1;

  while(!feof($file)){
  	  printf("line %d: %s", $linenum++, fgets($file));
  }
  fclose($file);
?>


<!-- send file to browser -->
<?php
  session_start();

  $filename = $_GET['file'];
  if( !preg_match('/^[\w_\.\-]+$/', $filename) ){
	echo "Invalid filename";
	exit;
  }

  $username = $_SESSION['username'];
  if( !preg_match('/^[\w_\-]+$/', $username) ){
	echo "Invalid username";
	exit;
  }

  $full_path = sprintf("/srv/uploads/%s/%s", $username, $filename);

  $finfo = finfo(FILEINFO_MINE_TYPE);
  $mime = $finfo->file($full_path);

  header("Content-Type: ".$mime);
  readfile($full_path);
?>


<!-- upload file -->
<form enctype="multipart/form-data" action="uploader.php" method="POST">
	<p>
		<input type="hidden" name="MAX_FILE_SIZE" value="20000000" />
		<label for="uploadfile_input">Choose a file to upload:</label> <input name="uploadedfile" type="file" id="uploadfile_input" />
	</p>
	<p>
		<input type="submit" value="Upload File" />
	</p>
</form>

<?php
	session_start();
	 
	// Get the filename and make sure it is valid
	$filename = basename($_FILES['uploadedfile']['name']);
	if( !preg_match('/^[\w_\.\-]+$/', $filename) ){
		echo "Invalid filename";
		exit;
	}
	 
	// Get the username and make sure it is valid
	$username = $_SESSION['username'];
	if( !preg_match('/^[\w_\-]+$/', $username) ){
		echo "Invalid username";
		exit;
	}
	 
	$full_path = sprintf("/srv/uploads/%s/%s", $username, $filename);
	 
	if( move_uploaded_file($_FILES['uploadedfile']['tmp_name'], $full_path) ){
		header("Location: upload_success.html");
		exit;
	}else{
		header("Location: upload_failure.html");
		exit;
	}
 
?>



