<!DOCTYPE html>
<html>
    <head>
        <title>Игра</title>
        <link rel="stylesheet" href="game.css"></linkrel>
        <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>
    <dialog id="error">
        <div>
            <p id="error_text">Не получилось</p>
            <button onclick="window.error.close();">ОК</button>
        </div>                
    </dialog>
    <dialog id="choice">
        <div>
        <img id="choice1" src="src/stub.png">
        <img id="choice2" src="src/stub.png">
        <img id="choice3" src="src/stub.png">
        </div>                
    </dialog>
        <div class="wrapper">
        <div class="header">
            <div class="header_info">
                <a href="rules.html" class="info">
                    <img id="book" src="src/book.svg" alt="Правила">
                    <p>Правила</p>
                </a>
                <div class="info" onclick="quit()">
                    <img id="quit" src="src/quit.svg" alt="Сдаться">
                    <p>Сдаться</p>
                </div>
            </div>
            <div class="group_badge">
                <div class="opponent_badge" id="op_secret">
                    <img src="src/checkmark.svg" alt="Жетон Секрет">
                </div>
                <div class="opponent_badge" id="op_ban">
                    <img src="src/cross.svg" alt="Жетон Запрет">
                </div>
                <div class="opponent_badge" id="op_gift">
                    <img src="src/gift_badge.svg" alt="Жетон Подарок">
                </div>
                <div class="opponent_badge" id="op_exchange">
                    <img src="src/exchange.svg" alt="Жетон Обмен">
                </div>
            </div>
            <div class="opponent_info">
                <div class="opponent">
                    <p id="op_name"><?php echo $_COOKIE["op_login"]?></p>
                </div>
                <div class="point_wrapper">
                <div class="points">
                    <p id="op_geishas_cnt"></p>
                    <p id="op_points"></p>
                </div>
                <div class="point_description">
                    <p>Гейши</p>
                    <p>Очки</p>
                </div>
            </div>
            </div>
        </div>
        <div class="main">
            <p id="round">Раунд 1</p>
            <div class="row_cards">
            <div class="card" id="Ayane">
                <div class="row_check">
                    <input type="checkbox" name="" disabled>
                    <input type="checkbox" name="" disabled>
                </div>
                <img src="src/Ayane.svg" alt="Аянэ">
                <img src="src/ayane_badge.svg" alt="Жетон" id="badge_ayane">
                <div class="row_check">
                    <input type="checkbox" name="" disabled>
                    <input type="checkbox" name="" disabled>
                </div>
            </div>
            <div class="card" id="Iroha">
                <div class="row_check">
                    <input type="checkbox" name="" disabled>
                    <input type="checkbox" name="" disabled>
                </div>
                <img src="src/Iroha.svg" alt="Ироха">
                <img src="src/iroha_badge.svg" alt="Жетон" id="badge_iroha">
                <div class="row_check">
                    <input type="checkbox" name="" disabled>
                    <input type="checkbox" name="" disabled>
                </div>
            </div>
            <div class="card" id="Tomoyo">
                <div class="row_check">
                    <input type="checkbox" name="" disabled>
                    <input type="checkbox" name="" disabled>
                </div>
                <img src="src/Tomoyo.svg" alt="Томойо">
                <img src="src/tomoyo_badge.svg" alt="Жетон" id="badge_tomoyo">
                <div class="row_check">
                    <input type="checkbox" name="" disabled>
                    <input type="checkbox" name="" disabled>
                </div>
            </div>
            <div class="card" id="Namiko">
                <div class="row_check">
                    <input type="checkbox" name="" disabled>
                    <input type="checkbox" name="" disabled>
                    <input type="checkbox" name="" disabled>
                </div>
                <img src="src/Namiko.svg" alt="Намико">
                <img src="src/namiko_badge.svg" alt="Жетон" id="badge_namiko">
                <div class="row_check">
                    <input type="checkbox" name="" disabled>
                    <input type="checkbox" name="" disabled>
                    <input type="checkbox" name="" disabled>
                </div>
            </div>
            <div class="card" id="Tiharu">
                <div class="row_check">
                    <input type="checkbox" name="" disabled>
                    <input type="checkbox" name="" disabled>
                    <input type="checkbox" name="" disabled>
                </div>
                <img src="src/Tiharu.svg" alt="Тихару">
                <img src="src/tiharu_badge.svg" alt="Жетон" id="badge_tiharu">
                <div class="row_check">
                    <input type="checkbox" name="" disabled>
                    <input type="checkbox" name="" disabled>
                    <input type="checkbox" name="" disabled>
                </div>
            </div>
            <div class="card" id="Andzu">
                <div class="row_check">
                    <input type="checkbox" name="" disabled>
                    <input type="checkbox" name="" disabled>
                    <input type="checkbox" name="" disabled>
                    <input type="checkbox" name="" disabled>
                </div>
                <img src="src/Andzu.svg" alt="Андзю">
                <img src="src/andzu_badge.svg" alt="Жетон" id="badge_andzu">
                <div class="row_check">
                    <input type="checkbox" name="" disabled>
                    <input type="checkbox" name="" disabled>
                    <input type="checkbox" name="" disabled>
                    <input type="checkbox" name="" disabled>
                </div>
            </div>
            <div class="card" id="Ruri">
                <div class="row_check">
                    <input type="checkbox" name="" disabled>
                    <input type="checkbox" name="" disabled>
                    <input type="checkbox" name="" disabled>
                    <input type="checkbox" name="" disabled>
                    <input type="checkbox" name="" disabled>
                </div>
                <img src="src/Ruri.svg" alt="Рури">
                <img src="src/ruri_badge.svg" alt="Жетон" id="badge_ruri">
                <div class="row_check">
                    <input type="checkbox" name="" disabled>
                    <input type="checkbox" name="" disabled>
                    <input type="checkbox" name="" disabled>
                    <input type="checkbox" name="" disabled>
                    <input type="checkbox" name="" disabled>
                </div>
            </div>
        </div>
        </div>
        <div class="player_menu">
            <div class="person_info">
                <div class="person">
                    <p id="my_name"><?php echo $_COOKIE["login"]?></p>
                </div>
                <div class="points">
                    <p id="my_geishas_cnt">x</p>
                    <p id="my_points"></p>
                </div>
                <div class="point_description">
                    <p>Гейши</p>
                    <p>Очки</p>
                </div>
            </div>
            <div class="player_badges">
            <div class="row_badge_top">
                <div class="badge" id="my_secret" onclick="secret()">
                    <img src="src/checkmark.svg" alt="Жетон Секрет">
                </div>
                <div class="badge" id="my_ban" onclick="ban()">
                    <img src="src/cross.svg" alt="Жетон Запрет">
                </div>
            </div>
            <div class="row_badge_bottom">
                <div class="badge" id="my_gift" onclick="gift()">
                    <img src="src/gift_badge.svg" alt="Жетон Подарок">
                </div>
                <div class="badge" id="my_exchange">
                    <img src="src/exchange.svg" alt="Жетон Обмен">
                </div>
            </div>
            </div>
            <div class="player_cards">
                <div class="player_card" id="first_gift" onclick="first()">
                    <img id="gift0" src="src/stub.png">
                </div>
                <div class="player_card" id="second_gift" onclick="second()">
                    <img id="gift1" src="src/stub.png">
                </div>
                <div class="player_card" id="third_gift" onclick="third()">
                    <img id="gift2" src="src/stub.png">
                </div>
                <div class="player_card" id="fourth_gift" onclick="fourth()">
                    <img id="gift3" src="src/stub.png">
                </div>
                <div class="player_card" id="fifth_gift" onclick="fifth()">
                    <img id="gift4" src="src/stub.png">
                </div>
                <div class="player_card" id="sixth_gift" onclick="sixth()">
                    <img id="gift5" src="src/stub.png">
                </div>
                <div class="player_card" id="seventh_gift" onclick="seventh()">
                    <img id="gift6" src="src/stub.png">
                </div>
            </div>
        </div>
    </div>
    <div class="stub">
        Мобильная версия игры недоступна
    </div>
    <script>
        let turn = 0;
        setInterval (function () {
            $.ajax({
                    method: "POST",
                    url: 'scripts/update.php',
                    data: {},
                    success: function(response) {
                        let jsonData = JSON.parse(response);
                        turn = jsonData.turn;
                        if (turn == "<?php echo $_COOKIE["op_id"]?>"){
                            let op_name = document.getElementById("op_name");
                            op_name.style.color = "#00FF29";
                            let my_name = document.getElementById("my_name");
                            my_name.style.color = "white";
                        }
                        else{
                            let op_name = document.getElementById("op_name");
                            op_name.style.color = "white";
                            let my_name = document.getElementById("my_name");
                            my_name.style.color = "#00FF29";
                        }
                        let r = document.getElementById("round");
                        r.textContent = "Раунд " + jsonData.round;
                        var img_src = new Map();
                        img_src.set("Андзю", "src/andzu_gift.svg");
                        img_src.set("Аянэ", "src/ayane_gift.svg");
                        img_src.set("Ироха", "src/iroha_gift.svg");
                        img_src.set("Тихару", "src/tiharu_gift.svg");
                        img_src.set("Томойо", "src/tomoyo_gift.svg");
                        img_src.set("Намико", "src/namiko_gift.svg");
                        img_src.set("Рури", "src/ruri_gift.svg");
                        var trans = new Map();
                        trans.set("Андзю", "badge_andzu");
                        trans.set("Аянэ", "badge_ayane");
                        trans.set("Ироха", "badge_iroha");
                        trans.set("Тихару", "badge_tiharu");
                        trans.set("Томойо", "badge_tomoyo");
                        trans.set("Намико", "badge_namiko");
                        trans.set("Рури", "badge_ruri");
                        if (jsonData.success == "1") {   
                            for (i = 0; i < 7; i++) {
                                let im = document.getElementById("gift" + i);
                                im.src = "src/stub.png";
                            }
                            for (i = 0; i < jsonData.card_count; i++) {
                                let im = document.getElementById("gift" + i);
                                im.src = img_src.get(jsonData["" + i]);
                            }
                            let my = document.getElementById("my_geishas_cnt");
                            my.textContent = jsonData.my_geishas_cnt;
                            let op = document.getElementById("op_geishas_cnt");
                            op.textContent = jsonData.op_geishas_cnt;
                            for (i = 0; i < jsonData.my_geishas_cnt; i++) {
                                let badge = document.getElementById(trans.get(jsonData["my_geisha" + i]));
                                badge.style.top = "50%";
                            }
                            for (i = 0; i < jsonData.op_geishas_cnt; i++) {
                                let badge = document.getElementById(trans.get(jsonData["op_geisha" + i]));
                                badge.style.top = "5%";
                            }
                        let mp = document.getElementById("my_points");
                        mp.textContent = jsonData.my_points;
                        let opp = document.getElementById("op_points");
                        opp.textContent = jsonData.op_points;
                        if (jsonData.my_secret == "1"){
                            let m1 = document.getElementById("my_secret");
                            m1.style.backgroundColor = "#818181";
                            m1.disabled = true;
                        }
                        if (jsonData.my_ban == "1"){
                            let m2 = document.getElementById("my_ban");
                            m2.style.backgroundColor = "#818181";
                            m2.disabled = true;
                        }
                        if (jsonData.my_gift == "1"){
                            let m3 = document.getElementById("my_gift");
                            m3.style.backgroundColor = "#818181";
                        }
                        if (jsonData.my_exchange == "1"){
                            let m4 = document.getElementById("my_exchange");
                            m4.style.backgroundColor = "#818181";
                        }
                        if (jsonData.op_secret == "1"){
                            let o1 = document.getElementById("op_secret");
                            o1.style.backgroundColor = "#818181";
                        }
                        if (jsonData.op_ban == "1"){
                            let o2 = document.getElementById("op_ban");
                            o2.style.backgroundColor = "#818181";
                        }
                        if (jsonData.op_gift == "1"){
                            let o3 = document.getElementById("op_gift");
                            o3.style.backgroundColor = "#818181";
                        }
                        if (jsonData.op_exchange == "1"){
                            let o4 = document.getElementById("op_exchange");
                            o4.style.backgroundColor = "#818181";
                        }
                        if (jsonData.check_gifts == 1){
                            window.choice.showModal();
                            let im1 = document.getElementById("choice1");
                            im1.src = img_src.get(jsonData["gift1"]);
                            let im2 = document.getElementById("choice2");
                            im2.src = img_src.get(jsonData["gift2"]);
                            let im3 = document.getElementById("choice3");
                            im3.src = img_src.get(jsonData["gift3"]);
                        }
                    }
                        else
                        {
                            window.error.showModal();
                            document.getElementById("error_text").innerText=jsonData.error;
                        }
                    }
            });          
            }, 2000);
            let temp_badge = 0;
            let badge_name = "";
            let ch = -1; //сколько карт уже нажато
            let card = [0, 0, 0, 0];
            var count_card = new Map();
                        count_card.set("secret", 0);
                        count_card.set("ban", 1);
                        count_card.set("gift", 2);
                        count_card.set("exchange", 3);                       
            //функции жетонов
            function secret(){
                    if (this.disabled == true){
                        window.error.showModal();
                        document.getElementById("error_text").innerText="Жетон уже использован";
                    }
                    else {
                        if (turn != "<?php echo $_COOKIE["op_id"]?>"){ //сейчас ход игрока
                            alert("Выберите одну карту, кликнув на нее");
                            temp_badge = "<?php echo $_COOKIE["secret"]?>";
                            alert(temp_badge);
                            badge_name = "secret";
                            let badge = document.getElementById("my_secret");
                            badge.style.backgroundColor = "#C64225";
                        }
                        else {
                            window.error.showModal();
                            document.getElementById("error_text").innerText="Сейчас не ваш ход";
                        }
                        
                    }
            }
            function ban(){
                    if (this.disabled == true){
                        window.error.showModal();
                        document.getElementById("error_text").innerText="Жетон уже использован";
                    }
                    else {
                        if (turn != "<?php echo $_COOKIE["op_id"]?>"){ //сейчас ход игрока
                            alert("Выберите две карты, кликнув на них");
                            temp_badge = "<?php echo $_COOKIE["ban"]?>";
                            alert(temp_badge);
                            badge_name = "ban";
                            let badge = document.getElementById("my_ban");
                            badge.style.backgroundColor = "#C64225";
                        }
                        else {
                            window.error.showModal();
                            document.getElementById("error_text").innerText="Сейчас не ваш ход";
                        }
                    }
            }
            function gift(){
                if (this.disabled == true){
                        window.error.showModal();
                        document.getElementById("error_text").innerText="Жетон уже использован";
                    }
                    else {
                        if (turn != "<?php echo $_COOKIE["op_id"]?>"){ //сейчас ход игрока
                            alert("Выберите три карты, кликнув на них");
                            temp_badge = "<?php echo $_COOKIE["gift"]?>";
                            alert(temp_badge);
                            badge_name = "gift";
                            let badge = document.getElementById("my_gift");
                            badge.style.backgroundColor = "#C64225";
                        }
                        else {
                            window.error.showModal();
                            document.getElementById("error_text").innerText="Сейчас не ваш ход";
                        }
                    }
            }
            //функция выбора аякса
            function choose_procedure(badge_name){
                alert(card);
                if (badge_name="secret"){
                    ch = -1;
                    $.ajax({
                    method: "POST",
                    url: 'scripts/secret.php',
                    data: {"badge": temp_badge+"", "card": card[0]+""},
                    success: function(response) {
                        let jsonData = JSON.parse(response);
                                    if (jsonData.success == "1")
                                    {
                                        alert("действие выполнено");
                                    }
                                    else
                                    {
                                        window.error.showModal();
                                        document.getElementById("error_text").innerText=jsonData.error;
                                    }
                    }});
                    temp_badge = 0;
                    badge_name = "";
                }
                else{
                if (badge_name="ban"){
                    ch = -1;
                    $.ajax({
                    method: "POST",
                    url: 'scripts/ban.php',
                    data: {"badge": temp_badge+"", "card1": card[0]+"", "card2": card[1]+""},
                    success: function(response) {
                        let jsonData = JSON.parse(response);
                                    if (jsonData.success == "1")
                                    {
                                        alert("действие выполнено");
                                    }
                                    else
                                    {
                                        window.error.showModal();
                                        document.getElementById("error_text").innerText=jsonData.error;
                                    }
                    }});
                    temp_badge = 0;
                    badge_name = "";
                }
                else{
                    if (badge_name="gift"){
                    ch = -1;
                    $.ajax({
                    method: "POST",
                    url: 'scripts/gift.php',
                    data: {"badge": temp_badge+"", "card1": card[0]+"", "card2": card[1]+"", "card3": card[2]+""},
                    success: function(response) {
                        let jsonData = JSON.parse(response);
                                    if (jsonData.success == "1")
                                    {
                                        alert("действие выполнено");
                                    }
                                    else
                                    {
                                        window.error.showModal();
                                        document.getElementById("error_text").innerText=jsonData.error;
                                    }
                    }});
                    temp_badge = 0;
                    badge_name = "";
                }
                }
            }
            }
            //функции карт
            function first(){
                if (turn != "<?php echo $_COOKIE["op_id"]?>"){ //сейчас ход игрока
                    if (temp_badge != 0){
                        ch++;
                        let card_value1 = "<?php echo $_COOKIE["card0"]?>";
                        card[ch] = card_value1;
                        if (ch == count_card.get(badge_name)){
                            choose_procedure(badge_name);     
                        }            
                    }
                    else {
                        window.error.showModal();
                        document.getElementById("error_text").innerText="Жетон не выбран";
                    }
                }
                else {
                    window.error.showModal();
                    document.getElementById("error_text").innerText="Сейчас не ваш ход";
                }
            }
            function second(){
                if (turn != "<?php echo $_COOKIE["op_id"]?>"){ //сейчас ход игрока
                    if (temp_badge != 0){
                        document.getElementById("second_gift").style.borderColor = "#ff0000";
                        ch++;
                        let card_value2 = "<?php echo $_COOKIE["card1"]?>";
                        card[ch] = card_value2;
                        if (ch == count_card.get(badge_name)){
                            choose_procedure(badge_name);     
                        }              
                    }
                    else {
                        window.error.showModal();
                        document.getElementById("error_text").innerText="Жетон не выбран";
                    }
                }
                else {
                    window.error.showModal();
                    document.getElementById("error_text").innerText="Сейчас не ваш ход";
                }
            }
            function third(){
                if (turn != "<?php echo $_COOKIE["op_id"]?>"){ //сейчас ход игрока
                    if (temp_badge != 0){
                        document.getElementById("third_gift").style.borderColor = "#ff0000";
                        ch++;
                        let card_value3 = "<?php echo $_COOKIE["card2"]?>";
                        card[ch] = card_value3;
                        if (ch == count_card.get(badge_name)){
                            choose_procedure(badge_name);     
                        }             
                    }
                    else {
                        window.error.showModal();
                        document.getElementById("error_text").innerText="Жетон не выбран";
                    }
                }
                else {
                    window.error.showModal();
                    document.getElementById("error_text").innerText="Сейчас не ваш ход";
                }
            }
            function fourth(){
                if (turn != "<?php echo $_COOKIE["op_id"]?>"){ //сейчас ход игрока
                    if (temp_badge != 0){
                        document.getElementById("fourth_gift").style.borderColor = "#ff0000";
                        ch++;
                        let card_value4 = "<?php echo $_COOKIE["card3"]?>";
                        card[ch] = card_value4;
                        if (ch == count_card.get(badge_name)){
                            choose_procedure(badge_name);     
                        }                         
                    }
                    else {
                        window.error.showModal();
                        document.getElementById("error_text").innerText="Жетон не выбран";
                    }
                }
                else {
                    window.error.showModal();
                    document.getElementById("error_text").innerText="Сейчас не ваш ход";
                }
            }
            function fifth(){
                if (turn != "<?php echo $_COOKIE["op_id"]?>"){ //сейчас ход игрока
                    if (temp_badge != 0){
                        document.getElementById("fifth_gift").style.borderColor = "#ff0000";
                        ch++;
                        let card_value5 = "<?php echo $_COOKIE["card4"]?>";
                        card[ch] = card_value5;
                        if (ch == count_card.get(badge_name)){
                            choose_procedure(badge_name);     
                        }                          
                    }
                    else {
                        window.error.showModal();
                        document.getElementById("error_text").innerText="Жетон не выбран";
                    }
                }
                else {
                    window.error.showModal();
                    document.getElementById("error_text").innerText="Сейчас не ваш ход";
                }
            }
            function sixth(){
                if (turn != "<?php echo $_COOKIE["op_id"]?>"){ //сейчас ход игрока
                    if (temp_badge != 0){
                        document.getElementById("sixth_gift").style.borderColor = "#ff0000";
                        ch++;
                        let card_value6 = "<?php echo $_COOKIE["card5"]?>";
                        card[ch] = card_value6;
                        if (ch == count_card.get(badge_name)){
                            choose_procedure(badge_name);     
                        }                         
                    }
                    else {
                        window.error.showModal();
                        document.getElementById("error_text").innerText="Жетон не выбран";
                    }
                }
                else {
                    window.error.showModal();
                    document.getElementById("error_text").innerText="Сейчас не ваш ход";
                }
            }
            function seventh(){
                if (turn != "<?php echo $_COOKIE["op_id"]?>"){ //сейчас ход игрока
                    if (temp_badge != 0){
                        document.getElementById("seventh_gift").style.borderColor = "#ff0000";
                        ch++;
                        let card_value7 = "<?php echo $_COOKIE["card6"]?>";
                        card[ch] = card_value7;
                        if (ch == count_card.get(badge_name)){
                            choose_procedure(badge_name);     
                        }                        
                    }
                    else {
                        window.error.showModal();
                        document.getElementById("error_text").innerText="Жетон не выбран";
                    }
                }
                else {
                    window.error.showModal();
                    document.getElementById("error_text").innerText="Сейчас не ваш ход";
                }
            }
        </script>
    </body>
</html>