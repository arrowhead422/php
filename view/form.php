<?php
		require_once(__DIR__ . "/../model/config.php"); // whith this require once now i have the access to my variable
		require_once(__DIR__ . "/../control/login-verify.php");

		if(!authenticateUser()) { // prevening from user to open the blog post manualy
			header("Location: " . $path . "blog.php");
			die();
		}

	?>
	<h1> Create Blog Post</h1>

	<form method="post" action="<?php echo $path . "control/create-post.php"; ?>"> 
	
	<div>
		<label for="title"> Title:</label>
		<input type="text" name="title"/> 

	</div>
	<div>
		
		<label for="post">Post:</label> 
		<textarea name="post"></textarea> 
	
	</div>

	<div>
		<button type="submit">Submit</button>
	</div>

	</form>
























