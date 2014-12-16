

<li><a href="<?php echo $path . "post.php";?>">Blog post Form</a> </li> 
<?php
	require_once(__DIR__ . "/../model/config.php");// this php file is using the require once to connect the config.php and navigation to display on the website
	require_once(__DIR__ . "/../control/login-verify.php");
    
    if(!authenticateUser()) { // prevening from user to open the blog post manualy
			header("Location: " . $path . "blog.php");
			die();
	}					
?>

