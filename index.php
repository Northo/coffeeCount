<html>
    <head>
	<style>
	 .wrapper {
	     width: 500px;
	     margin: 0 auto;
	     text-align: center;
	 }
	</style>
    </head>
    <body>
	<div class="wrapper" >
	    <?php
	    $msg = $_GET['msg'];
	    if ($msg) {
		echo "<h2>" . $msg . "</h2>";
	    }
	    ?>
	    
	    <form action="register.php" >
		<input type="Submit" value="Jeg drikker kaffe!">
	    </form>
	</div>
    </body>
</html>
