<?php
$token = $_COOKIE["token"];
$card1 = $_POST["card1"];
$card2 = $_POST["card2"];
$result = file_get_contents("https://mysql.lavro.ru/call.php?db=312580&pname=ban&p1=$token&p2=$card1&p3=$card2");
$result = json_decode($result);

if (isset($result->ERROR[0])) {
    $err = $result->ERROR[0];
    echo json_encode(array('success' => 0, 'error' => $err));
}
else {
    $end = $result->END[0];
    $arr = array('success' => 1);
    $arr['end'] = $end;
    echo json_encode($arr);
}
?>