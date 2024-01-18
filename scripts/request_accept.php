<?php
$token = $_COOKIE["token"];
$game_id = $_COOKIE["game_id"];
$result = file_get_contents("https://mysql.lavro.ru/call.php?db=312580&pname=check_invitations&p1=$token&p2=$game_id");
$result = json_decode($result);
$res = $result->RESULT[0];

if (isset($result->ERROR[0])) {
    $err = $result->ERROR[0];
    echo json_encode(array('success' => 0, 'error' => $err));
}
else {
    if ($res == 1){
        $op_id = $result->op_id[0];
        $op_login = $result->op_login[0];
        setcookie("op_id", $op_id, time() + 3600, '/~s312580/geisha_game');
        setcookie("op_login", $op_login, time() + 3600, '/~s312580/geisha_game');
    }
    echo json_encode(array('success' => 1, 'result' => $res));
}
?>