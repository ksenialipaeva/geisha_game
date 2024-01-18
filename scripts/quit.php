<?php
$token = $_COOKIE["token"];
$idg = $_COOKIE["game_id"];
$result = file_get_contents("https://mysql.lavro.ru/call.php?db=312580&pname=quit&p1=$token&p2=$idg");
$result = json_decode($result);

if (isset($result->ERROR[0])) {
    $err = $result->ERROR[0];
    echo json_encode(array('success' => 0, 'error' => $err));
}
else {
    echo json_encode($result);
}
?>