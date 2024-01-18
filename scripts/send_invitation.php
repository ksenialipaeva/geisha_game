<?php
$token = $_COOKIE["token"];
$sender_login = $_POST["login"];
$result = file_get_contents("https://mysql.lavro.ru/call.php?db=312580&pname=send_invitation&p1=$token&p2=$sender_login");
$result = json_decode($result);
$game_id = $result->idg[0];

if (isset($result->ERROR[0])) {
    $err = $result->ERROR[0];
    echo json_encode(array('success' => 0, 'error' => $err));
}
else {
    setcookie("game_id", $game_id, time() + 3600, '/~s312580/geisha_game');
    echo json_encode(array('success' => 1));
}
?>