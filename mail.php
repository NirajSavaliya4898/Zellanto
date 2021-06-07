<?php
	$to = "njthummar0@gmail.com";
	$subject = "Regarding";
	$txt = "Thanks...  !";
	$headers = "From: zellento.com@gmail.com" . "\r\n" .
	"CC:";

	if(mail($to,$subject,$txt,$headers))
	{
		echo "Mail Send Successfully... ..!!";
	}
	else
	{
		echo "Can Not Send Mail... ..!!";
	}
?>