<!DOCTYPE html>
<html lang="en">

<head>
    <title>Book Club Sign Up</title>
    <meta name="robots" content="noindex,nofollow" />
    <meta name="viewport" content="width=device-width" />
    <meta charset="utf-8" />
    <link rel="stylesheet" href="css/fp.css" />
    <link rel="stylesheet" href="css/nav.css" />
    <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
    <script src="https://s3.amazonaws.com/menumaker/menumaker.min.js" type="text/javascript"></script>
    <script src="js/script.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
</head>

<body>
    <header>
    <nav id="cssmenu">
            <ul>
                <li><a href="../index.html"><i class="fa fa-anchor fa-lg" aria-hidden="true"></i></a></li>
                <li><a href="index.html">Home</a></li>
                <li><a href="aboutus.html">About Us</a></li>
                <li><a href="bookclub.php">Book Club</a></li>
                <li><a href="events.html">Events</a></li>
            </ul>
        </nav>
    </header>

    <main>
            <h2 class="subheader">Book Club Sign Up</h2>
            <?php
        /*
         * Below are 2 different forms to be re-used       
         * 
         * Only use one at a time, comment out the other!       
         *
         */

        include 'includes/contact_include.php'; #site keys & code here
    
        $toAddress = "davidneilmathews@gmail.com";  //place your/your client's email address here
        $toName = "David Mathews"; //place your client's name here
        $website = "Olive's Books";  //place NAME of your client's website

        //echo loadContact('simple.php');#demonstrates a simple contact form
        echo loadContact('multiple.php');#demonstrates multiple form elements

	?>

        <footer>
            <p><small>&copy; 2021 by <a href="../contact.php">David Mathews</a>, All Rights Reserved ~ <a href="https://validator.w3.org/nu/?doc=https://web-students.net/site48/it161/index.html" target="_blank">Valid HTML</a> ~ <a href="https://jigsaw.w3.org/css-validator/check?uri=referer" target="_blank">Valid CSS</a> <a href="disclaimer.html">Disclaimer</a></small></p>
        </footer>
    </main>

</body>

</html>