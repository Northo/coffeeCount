<html>
    <head>
	<style>
	 .wrapper {
	     width: 500px;
	     margin: 0 auto;
	     text-align: center;
	     width: 400px;
	 }

	 input[type="submit"] {
	     height: 200px;
	     background: red;
	     border: 2px solid black;
	     border-radius: 8px;
	     color: white;
	     font-family: "Big John", sans-serif;
	     font-size: 25px;
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
