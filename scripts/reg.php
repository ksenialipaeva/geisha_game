<?php
$login = $_POST["login"];
$password = $_POST["psw"];
$user = file_get_contents("https://mysql.lavro.ru/call.php?db=312580&pname=reg&p1=$login&p2=$password");
$user = json_decode($user);
$token = $user->tk[0];

if (isset($user->ERROR[0])) {
    $err = $user->ERROR[0];
    echo json_encode(array('success' => 0, 'error' => $err));
}
else {
    setcookie("login", $login, time() + 3600, '/~s312580/Geisha');
    setcookie("token", $token, time() + 3600, '/~s312580/Geisha');
    echo json_encode(array('success' => 1));
}
?>