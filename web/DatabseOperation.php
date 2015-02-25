<!-- perform queries with parameters -->
<?php
	require 'database.php';
	 
	$first = $_POST['first'];
	$last = $_POST['last'];
	$dept = $_POST['dept'];
	 
	$stmt = $mysqli->prepare("insert into employees (first_name, last_name, department) values (?, ?, ?)");
	if(!$stmt){
		printf("Query Prep Failed: %s\n", $mysqli->error);
		exit;
	}
	 
	$stmt->bind_param('sss', $first, $last, $dept);
	 
	$stmt->execute();
	 
	$stmt->close();
 
?>


<!-- perform queries that return data -->
<?php
	require 'database.php';
	 
	$stmt = $mysqli->prepare("select first_name, last_name from employees order by last_name");
	if(!$stmt){
		printf("Query Prep Failed: %s\n", $mysqli->error);
		exit;
	}
	 
	$stmt->execute();
	 
	$stmt->bind_result($first, $last);
	 
	echo "<ul>\n";
	while($stmt->fetch()){
		printf("\t<li>%s %s</li>\n",
			htmlspecialchars($first),
			htmlspecialchars($last)
		);
	}
	echo "</ul>\n";
	 
	$stmt->close();
?>


<!-- combined queries -->
<?php
	require 'database.php';
	 
	$dept = $_GET['dept'];
	 
	$stmt = $mysqli->prepare("select first_name, last_name from employees where department=?");
	if(!$stmt){
		printf("Query Prep Failed: %s\n", $mysqli->error);
		exit;
	}
	 
	$stmt->bind_param('s', $dept);
	 
	$stmt->execute();
	 
	$stmt->bind_result($first, $last);
	 
	echo "<ul>\n";
	while($stmt->fetch()){
		printf("\t<li>%s %s</li>\n",
			htmlspecialchars($first),
			htmlspecialchars($last)
		);
	}
	echo "</ul>\n";
	 
	$stmt->close();
 
?>


<!-- return results into array -->
<?php
	require 'database.php';
	 
	$stmt = $mysqli->prepare("select first_name, last_name from employees order by last_name");
	if(!$stmt){
		printf("Query Prep Failed: %s\n", $mysqli->error);
		exit;
	}
	 
	$stmt->execute();
	 
	$result = $stmt->get_result();
	 
	echo "<ul>\n";
	while($row = $result->fetch_assoc()){
		printf("\t<li>%s %s</li>\n",
			htmlspecialchars( $row["first_name"] ),
			htmlspecialchars( $row["last_name"] )
		);
	}
	echo "</ul>\n";
	 
	$stmt->close();
?>