<html>
    <head>
        <title>Register/Login Members area - Torpedo Sweet Potato</title>
         <link rel="stylesheet" type="text/css" href="bar.css">
        <link rel="icon" type="image/jpeg" href="key.png"/>
    </head>
    <body>
        <style>
            body{
                font-family: sans-serif;
                background-color: grey;
            }
            h1{
                font-size: 110px;
                color: white;
            }
            #con{
                color: white;
                text-decoration: none;
            }
        </style>
        <h1>This Page is Under Construction!!!</h1>
        <a href="index.html" id="con">Back to Home!!!</a>
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