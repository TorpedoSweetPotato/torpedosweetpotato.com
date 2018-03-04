<html>
    <head>
        <title>Administrators Page | Torpedo Sweet Potato</title>
        <link rel="icon" type="image/jpeg" href="AdminIcon.png"/>
    </head>
    <body>
        <?php
            session_start();
            if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] == false) {
                header("Location: login.php");
            }
        ?>
        <style>
            body{
                margin: 0px;
                border: 0px;
                font-family: sans-serif;
            }
            #header{
                width: 100%;
                height: 120px;
                background: #2c3e50;
                color: white;
            }
            #sidebar{
                width: 300px;
                height: 400px;
                background: #ecf0f1;
                float: left;
            }
            #data{
                height: 700px;
                background: #95a5a6;
            }
            #adminlogo{
                background: black;
                border-radius: 1000px;
            }
            ul li{
                padding: 20px;
                border-bottom: 2px solid grey;
            }
            ul li:hover{
                background: #2c3e50;
                color: white;
            }
            a{
                text-decoration: none;
                color: black;
            }
            #data{
                padding-left: 50px;
            }
        </style>
        <div id="header">
            <center><img src="AdminIcon.png" id="adminlogo">
            <p>Welcome to the Admin Panel! Administrator!</p>
            </center>
        </div>
        <div id="sidebar">
            <ul>
                <a href="add.php" target="_blank" style="color: black; text-decoration: none;"><li>Add</li></a>
                <li>Delete</li>
                <li>Update</li>
                <li>Developer</li>
                <a href="Logout.php"><li>Log out</li></a>
            </ul>
        </div>
        <div id="data"><br/>
            <h2>Developers info - Administrator's info (You!).</h2>
            <h4>Id: 7696</h4>
            <h4>Username: Administrator</h4>
            <h4>Password: *********</h4>
            <h4>Your Full Name: Tom Pye</h4>
            <h4>Website Email: admin@torpedosweetpotato.com</h4>
            <h4>Your Email: epictomhumin@gmail.com</h4>
        </div>
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