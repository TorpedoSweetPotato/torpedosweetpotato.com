<!DOCTYPE html>
<html>
    <head>
        <title>Admin Login - Torpedo Sweet Potato</title>
        <link rel="icon" type="image/jpeg" href="AdminIcon.png"/>
    </head>
    <?php
        session_start();
    
    $username = "Admin";
    $password = "luna87690";
    
    if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
        header("Location: admin.php");
    }

        
    if (isset($_POST['Admin']) && isset($_POST['luna87690'])) {
        if ($_POST['Admin'] == $username && $_POST['luna87690'] == $password)
  {
            $_SESSION['loggedin'] = true;
            header("Location: admin.php");
            
            }
        }
    ?>
    <body>
        <style>
            a{
                text-decoration: none;
                color: black;
                font-family: sans-serif;
            }
        </style>
        <form method="post" action="login.php">
            Username:<br/>
            <input type="text" name="Admin"><br/>
            Password<br/>
            <input type="password" name="luna87690"><br/>
            <input type="submit" value="Login!">
        </form>
        <p><a href="index.html">Back To Home Page.</a></p>
		<?php 
/* 
  No argument required for current year.
  Otherwise, pass start year as a 4-digit value.
*/
function auto_copyright($startYear = null) {
	if (!is_numeric($startYear) || intval($startYear) >= date('Y')) {
		echo "&copy; " . date('Y'); // display current year if $startYear is same or greater than this year
	} else {
		// Display range of years. Replace date('Y') with date('y') to display range of years in YYYY-YY format.
		echo "&copy; " . intval($startYear) . "&ndash;" . date('Y'); 
	}
} 
?>

<?php auto_copyright(); // Current year?>

<?php auto_copyright(2010);  // 2010 - Current ?>
    </body>
</html>