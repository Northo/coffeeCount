<html>
    <head>
    </head>
    <body>
      <?php
	$msg = $_GET['msg'];
	if ($msg) {
	echo "<h2>" . $msg . "</h2>";
	}
	?>
	<form action="register.php" >
	    <input type="Submit" value="Jeg drikker kaffe!">
	</form>
    </body>
</html>
