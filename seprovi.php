<?php
$path = "https://api.telegram.org/bot1777224326:AAFe6Stgk8BFGnAl3hohQZpzcgYJzagccA0;
$update = json_decode(file_get_contents("php://input"), TRUE);
$chatId = $update["message"]["chat"]["id"];
$message = $update["message"]["text"];
if (strpos($message, "/weather") === 0) {
	$location = substr($message, 9);
};
$weather = json_decode(file_get_contents("http://api.openweathermap.org/data/2.5/weather?q=".$location."&appid=mytoken"), TRUE)["weather"]["main"];
file_get_contents($path."/sendmessage?chat_id=".$chatId."&text=Here's the weather in ".$location.": ". $.weather);
?>
