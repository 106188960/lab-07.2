<!DOCTYPE html>
<html lang="en">
<head>
	<title>Booking Confirmation</title>
	<meta charset="utf-8">
	<meta name="description" content="Rohirrim Booking Form" >
	<meta name="keywords"    content="MiddleEarth, Tours, Rohan" >
	<meta name="author"      content="Grima Wormtongue" />
</head>
<body>
    <header>
        <h1>Rohirrim Tour Booking Confirmation</h1>

<?php
        function sanitise_input($data){
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            $firstname = sanitise_input($_POST["firstname"]);
            $lastname = sanitise_input($_POST["lastname"]);
            $age = sanitise_input($_POST["age"]);
            $bookday = sanitise_input($_POST["bookday"]);
            $partysize = sanitise_input($_POST["partysize"]);
            $species = sanitise_input($_POST["species"]);
            $booking = isset($_POST["booking"]) ? $_POST["booking"] : [];
            $food = sanitise_input($_POST["food"]);

        echo "$firstname\n";
        echo "$lastname\n";
        echo "$age\n";
        echo "$bookday\n";
        echo "$partysize\n";
        echo "$food\n";
        echo "$species\n";
        echo "$booking\n";         // need help printing out array, but array should be made.
        
        }


        

?>
</header>

</body>
