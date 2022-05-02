<?php
$to = $_POST['mail'];
$subject = "Welcome to our gym";
$txt = "Hey !
Thanks so much for registering.
I was just getting in touch to find out a bit more about you and your fitness goals.
The more we know about our class members, the better workouts me and my team can deliver.
So what are the reasons that you decided to join us and what can we help you with?
Speak soon,
Zaharia Marian Mihai,
CEO Zaha's Gym";
$headers = "From: zahariamihai088@gmail.com" . "\r\n" .
"CC: somebodyelse@example.com";

fopen("verifcare.txt", "a+");
$verificare = fopen("verifcare.txt", "a+");
fwrite($verificare, $to);
fclose($verificare);

@mail($to,$subject,$txt,$headers);
header("Location:test.html");

?>
