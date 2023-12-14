<?php
$token = $_COOKIE["token"];
$sender_login = $_POST["login"];
$user = file_get_contents("https://mysql.lavro.ru/call.php?db=312580&pname=send_invitation&p1=$token&p2=$sender_login");
$result = json_decode($result);

if (isset($user->ERROR[0])) {
    $err = $user->ERROR[0];
    echo json_encode(array('success' => 0, 'error' => $err));
}
else {
    echo json_encode(array('success' => 1));
}
?>