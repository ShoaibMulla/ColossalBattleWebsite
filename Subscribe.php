<?php


$recipient = "shoaibmulla@hotmail.com";
$subject = "Subscribe";


$location = "https://shoaibmulla.github.io/ColossalBattleWebsite/";


$sender = $recipient;


$body .= "Email: ".$_REQUEST['email']." \n";


mail( $recipient, $subject, $body, "From: $sender" ) or die ("Mail could not be sent.");



header( "Location: $location" );
?>