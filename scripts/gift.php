<?php
$token = $_COOKIE["token"];
$badge = $_POST["badge"];
$card1 = $_POST["card1"];
$card2 = $_POST["card2"];
$card3 = $_POST["card3"];
$result = file_get_contents("https://mysql.lavro.ru/call.php?db=312580&pname=secret&p1=$token&p2=$badge&p3=$card1&p4=$card2&p5=$card3");
$result = json_decode($result);

if (isset($result->ERROR[0])) {
    $err = $result->ERROR[0];
    echo json_encode(array('success' => 0, 'error' => $err));
}
else {
    echo json_encode(array('success' => 1));
}
?>