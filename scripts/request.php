<?php
$token = $_COOKIE["token"];
$result = file_get_contents("https://mysql.lavro.ru/call.php?db=312580&pname=request_invitations&p1=$token");
$result = json_decode($result);

if (isset($user->ERROR[0])) {
    $err = $user->ERROR[0];
    echo json_encode(array('success' => 0, 'error' => $err));
}
else {
    $arr = array('success' => 1, 'login_cnt' => count($result->sender_login));

    for ($i = 0; $i < count($result->sender_login); $i++) {
        array_push($arr, $result->sender_login[$i]);
    }

    echo json_encode($arr);
}
?>