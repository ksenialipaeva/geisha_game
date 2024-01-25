<?php
$token = $_COOKIE["token"];
$game = $_COOKIE["game_id"];
$result = file_get_contents("https://mysql.lavro.ru/call.php?db=312580&pname=new_round&p1=$token&p2=$game");
$result = json_decode($result);

if (isset($result->ERROR[0])) {
    $err = $result->ERROR[0];
    echo json_encode(array('success' => 0, 'error' => $err));
}
else {
    $winner = $result->WINNER[0];
    $arr = array('success' => 1);
    $arr['winner'] = $winner;
    echo json_encode($arr);
}
?>