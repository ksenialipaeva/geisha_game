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
    $result8 = $result->RESULTS[8];
    $result9 = $result->RESULTS[9];
    $result10 = $result->RESULTS[10];
    $result11 = $result->RESULTS[11];
    $result14 = $result->RESULTS[14];

    $arr = array('success' => 1, 'round' => $result0->round[0], 'card_count' => count($result1->card_id));
    $my_points = 0;
    $op_points = 0;

    $arr['count_cards'] = count($result1->card_id);
    for ($i = 0; $i < count($result1->card_id); $i++) {
        $card_name = "card".$i;
        $arr[$card_name] = $result1->card_id[$i];
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
            $arr['my_secret'] = $result4->Expire[$i];
        }
        if ($result4->Action[$i] == "запрет"){
            $arr['my_ban'] = $result4->Expire[$i];
        }
        if ($result4->Action[$i] == "подарок"){
            $arr['my_gift'] = $result4->Expire[$i];
        }
        if ($result4->Action[$i] == "обмен"){
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

    $arr['choice1'] = 0;
    $arr['choice2'] = 0;
    $arr['choice3'] = 0;

    if (count($result7->geisha_name) == 3){
        $check_gifts = 1;

        $arr['choice1'] = $result7->card_id[0];
        $arr['gift1'] = $result7->geisha_name[0];

        $arr['choice2'] = $result7->card_id[1];
        $arr['gift2'] = $result7->geisha_name[1];

        $arr['choice3'] = $result7->card_id[2];
        $arr['gift3'] = $result7->geisha_name[2];
    }

    $arr['check_gifts'] = $check_gifts;

    $check_pairs = 0;
    $arr['pair1'] = 0;
    $arr['pair2'] = 0;
    if (count($result8->pair_id) == 4){
        $check_pairs = 1;
        $arr['pair1'] = $result8->pair_id[0];
        $arr['pair2'] = $result8->pair_id[2];
        $arr['paircard1'] = $result8->geisha_name[0];
        $arr['paircard2'] = $result8->geisha_name[1];
        $arr['paircard3'] = $result8->geisha_name[2];
        $arr['paircard4'] = $result8->geisha_name[3];
    }
    $arr['check_pairs'] = $check_pairs;

    if ($result9->count == 1){
        $arr['full_game'] = 0;
    }
    else{
        $arr['full_game'] = 1;
    }

    $arr['mycheck'] = count($result10->count);
    for ($i = 0; $i < (count($result10->count)); $i++)  {
        $arr['mycount'.$i] = $result10->count[$i];
        $arr['mygeishacheck'.$i] = $result10->geisha_name[$i];
    }

    $arr['opcheck'] = count($result11->count);
    for ($i = 0; $i < (count($result11->count)); $i++)  {
        $arr['opcount'.$i] = $result11->count[$i];
        $arr['opgeishacheck'.$i] = $result11->geisha_name[$i];
    }

    $arr['time'] = $result14->time[0];

    echo json_encode($arr);
 
}
?>