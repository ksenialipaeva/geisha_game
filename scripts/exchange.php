<?php
$token = $_COOKIE["token"];
$card1 = $_POST["card1"];
$card2 = $_POST["card2"];
$card3 = $_POST["card3"];
$card4 = $_POST["card4"];
$result = file_get_contents("https://mysql.lavro.ru/call.php?db=312580&pname=exchange&p1=$token&p2=$card1&p3=$card2&p4=$card3&p5=$card4");
$result = json_decode($result);

if (isset($result->ERROR[0])) {
    $err = $result->ERROR[0];
    echo json_encode(array('success' => 0, 'error' => $err));
}
else {
    echo json_encode(array('success' => 1));
}
?>