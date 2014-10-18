<?php

if(isset($_POST['Submit'])) {

    $Name = $_POST['Name'];
    $Phone = $_POST['Phone'];
    $Email = $_POST['Email'];
    $Date = $_POST['Date'];
    $Type = $_POST['Type'];
    $Venue = $_POST['Venue'];
    $Entertainment = $_POST['Entertainment'];
    $Guests = $_POST['Guests'];
    $Text = $_POST['Text'];
    $IP = $_SERVER['SERVER_ADDR'];

    if(($Text != "Any other info:") || ($Text != "") || ($Text != NULL))
        $text = "
They also supplied the following information:

	$Text
";

    $body = "
Hi Alan,

A possible client has used the book now feature of your website, and these are the supplied details.

	Name: $Name
	Telephone Number: $Phone
	Email Address: $Email
	Date of Event: $Date
	Type of Event: $Type
	Venue of Event: $Venue
	Entertainment Required: $Entertainment
	Number of Guests: $Guests
$text
Thank you,

xepps automail feature
";
    write_to_log(LOG_WARN, "$Email has sent an event request from IP: $IP");
    mail("info@jollymagic.com", "New Booking", $body, "From: $Email");
}
