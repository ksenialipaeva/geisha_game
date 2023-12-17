<?php
$token = $_COOKIE["token"];
$receiver_login = $_POST["login"];
$result = file_get_contents("https://mysql.lavro.ru/call.php?db=312580&pname=accept_invitation&p1=$token&p2=$receiver_login");
$result = json_decode($result);
$game_id = $result->game_id[0];
$op_id = $result->op_id[0];
$op_login = $result->op_login[0];

if (isset($result->ERROR[0])) {
    $err = $result->ERROR[0];
    echo json_encode(array('success' => 0, 'error' => $err));
}
else {
    setcookie("game_id", $game_id, time() + 3600, '/~s312580/geisha_game');
    setcookie("op_id", $op_id, time() + 3600, '/~s312580/geisha_game');
    setcookie("op_login", $op_login, time() + 3600, '/~s312580/geisha_game');
    echo json_encode(array('success' => 1));
}
?>