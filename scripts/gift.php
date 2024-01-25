<?php
$token = $_COOKIE["token"];
$one = $_POST["card1"];
$two = $_POST["card2"];
$three = $_POST["card3"];
$result = file_get_contents("https://mysql.lavro.ru/call.php?db=312580&pname=gift&p1=$token&p2=$one&p3=$two&p4=$three");
$result = json_decode($result);

if (isset($result->ERROR[0])) {
    $err = $result->ERROR[0];
    echo json_encode(array('success' => 0, 'error' => $err));
}
else {
    echo json_encode(array('success' => 1));
}
?>