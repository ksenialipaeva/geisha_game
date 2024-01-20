<?php
$token = $_COOKIE["token"];
$game_id = $_COOKIE["game_id"];
$result = file_get_contents("https://sql.lavro.ru/call.php?db=312580&pname=update_game&p1=$token&p2=$game_id");
$result = json_decode($result);

if (isset($result->RESULTS[0]->ERROR[0])) {
    $err = $result->RESULTS[0]->ERROR[0];
    echo json_encode(array('success' => 0, 'error' => $err));
}
else {
    $result0 = $result->RESULTS[0];
    $result1 = $result->RESULTS[1];
    $result2 = $result->RESULTS[2];
    $result3 = $result->RESULTS[3];
    $result4 = $result->RESULTS[4];
    $result5 = $result->RESULTS[5];
    $result6 = $result->RESULTS[6];
    $result7 = $result->RESULTS[7];

    $arr = array('success' => 1, 'round' => $result0->round[0], 'card_count' => count($result1->card_id));
    $my_points = 0;
    $op_points = 0;

    for ($i = 0; $i < count($result1->card_id); $i++) {
        $cookie_name = "card".$i;
        setcookie($cookie_name, $result1->card_id[$i], time() + 3600, '/~s312580/geisha_game');
        array_push($arr, $result1->geisha_name[$i]);
    }

    $arr['my_geishas_cnt'] = count($result2->name);
    $arr['op_geishas_cnt'] = count($result3->name);


    for ($i = 0; $i < count($result2->name); $i++) {
        $arr['my_geisha'.$i] = $result2->name[$i];
        $my_points = $my_points + $result2->points[$i];
    }

    $arr['my_points'] = $my_points;

    for ($i = 0; $i < count($result3->name); $i++) {
        $arr['op_geisha'.$i] = $result3->name[$i];
        $op_points = $op_points + $result3->points[$i];
    }
    $arr['op_points'] = $op_points;

    for ($i = 0; $i < 4; $i++) {
        if ($result4->Action[$i] == "секрет"){
            $cookie_name = "secret";
            setcookie($cookie_name, $result4->ID[$i], time() + 3600, '/~s312580/geisha_game');
            $arr['my_secret'] = $result4->Expire[$i];
        }
        if ($result4->Action[$i] == "запрет"){
            $cookie_name = "ban";
            setcookie($cookie_name, $result4->ID[$i], time() + 3600, '/~s312580/geisha_game');
            $arr['my_ban'] = $result4->Expire[$i];
        }
        if ($result4->Action[$i] == "подарок"){
            $cookie_name = "gift";
            setcookie($cookie_name, $result4->ID[$i], time() + 3600, '/~s312580/geisha_game');
            $arr['my_gift'] = $result4->Expire[$i];
        }
        if ($result4->Action[$i] == "обмен"){
            $cookie_name = "exchange";
            setcookie($cookie_name, $result4->ID[$i], time() + 3600, '/~s312580/geisha_game');
            $arr['my_exchange'] = $result4->Expire[$i];
        }
    }

    for ($i = 0; $i < 4; $i++) {
        if ($result5->Action[$i] == "секрет"){
            $arr['op_secret'] = $result5->Expire[$i];
        }
        if ($result5->Action[$i] == "запрет"){
            $arr['op_ban'] = $result5->Expire[$i];
        }
        if ($result5->Action[$i] == "подарок"){
            $arr['op_gift'] = $result5->Expire[$i];
        }
        if ($result5->Action[$i] == "обмен"){
            $arr['op_exchange'] = $result5->Expire[$i];
        }
    }

    $arr['turn'] = $result6->player_id[0];
    $check_gifts = 0;

    if (count($result7->name) == 3){
        $check_gifts = 1;

        $cookie_name = "choice1";
        setcookie($cookie_name, $result7->card_id[0], time() + 3600, '/~s312580/geisha_game');
        $arr['gift1'] = $result7->geisha_name[0];

        $cookie_name = "choice2";
        setcookie($cookie_name, $result7->card_id[1], time() + 3600, '/~s312580/geisha_game');
        $arr['gift2'] = $result7->geisha_name[1];

        $cookie_name = "choice3";
        setcookie($cookie_name, $result7->card_id[2], time() + 3600, '/~s312580/geisha_game');
        $arr['gift3'] = $result7->geisha_name[2];
    }

    $arr['check_gifts'] = $check_gifts;
    echo json_encode($arr);
 
}
?>