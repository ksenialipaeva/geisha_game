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
        <div id="choice_div">
        <img id="choice1" src="src/stub.png" onclick="choice(1)">
        <img id="choice2" src="src/stub.png" onclick="choice(2)">
        <img id="choice3" src="src/stub.png" onclick="choice(3)">     
        </div>        
    </dialog>
    <dialog id="choice_pair">
        <div id="choice_div">
            <div class="pair" onclick="choice_pair(1)">
        <img id="paircard1" src="src/stub.png">
        <img id="paircard2" src="src/stub.png">
            </div>
            <div class="pair" onclick="choice_pair(2)">
        <img id="paircard3" src="src/stub.png">
        <img id="paircard4" src="src/stub.png">  
            </div>   
        </div>        
    </dialog>
        <div class="wrapper">
        <div class="header">
            <div class="header_info">
                <a href="rules.html" class="info" target="_blank">
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
                    <input type="checkbox" name="" id="opAyane1" disabled>
                    <input type="checkbox" name="" id="opAyane2" disabled>
                </div>
                <img src="src/Ayane.svg" alt="Аянэ">
                <img src="src/ayane_badge.svg" alt="Жетон" id="badge_ayane">
                <div class="row_check">
                    <input type="checkbox" name="" id="myAyane1" disabled>
                    <input type="checkbox" name="" id="myAyane2" disabled>
                </div>
            </div>
            <div class="card" id="Iroha">
                <div class="row_check">
                    <input type="checkbox" name="" id="opIroha1" disabled>
                    <input type="checkbox" name="" id="opIroha2" disabled>
                </div>
                <img src="src/Iroha.svg" alt="Ироха">
                <img src="src/iroha_badge.svg" alt="Жетон" id="badge_iroha">
                <div class="row_check">
                    <input type="checkbox" name="" id="myIroha1" disabled>
                    <input type="checkbox" name="" id="myIroha2" disabled>
                </div>
            </div>
            <div class="card" id="Tomoyo">
                <div class="row_check">
                    <input type="checkbox" name="" id="opTomoyo1" disabled>
                    <input type="checkbox" name="" id="opTomoyo2" disabled>
                </div>
                <img src="src/Tomoyo.svg" alt="Томойо">
                <img src="src/tomoyo_badge.svg" alt="Жетон" id="badge_tomoyo">
                <div class="row_check">
                    <input type="checkbox" name="" id="myTomoyo1" disabled>
                    <input type="checkbox" name="" id="myTomoyo2" disabled>
                </div>
            </div>
            <div class="card" id="Namiko">
                <div class="row_check">
                    <input type="checkbox" name="" id="opNamiko1" disabled>
                    <input type="checkbox" name="" id="opNamiko2" disabled>
                    <input type="checkbox" name="" id="opNamiko3" disabled>
                </div>
                <img src="src/Namiko.svg" alt="Намико">
                <img src="src/namiko_badge.svg" alt="Жетон" id="badge_namiko">
                <div class="row_check">
                    <input type="checkbox" name="" id="myNamiko1" disabled>
                    <input type="checkbox" name="" id="myNamiko2" disabled>
                    <input type="checkbox" name="" id="myNamiko3" disabled>
                </div>
            </div>
            <div class="card" id="Tiharu">
                <div class="row_check">
                    <input type="checkbox" name="" id="opTiharu1" disabled>
                    <input type="checkbox" name="" id="opTiharu2" disabled>
                    <input type="checkbox" name="" id="opTiharu3" disabled>
                </div>
                <img src="src/Tiharu.svg" alt="Тихару">
                <img src="src/tiharu_badge.svg" alt="Жетон" id="badge_tiharu">
                <div class="row_check">
                    <input type="checkbox" name="" id="myTiharu1" disabled>
                    <input type="checkbox" name="" id="myTiharu2" disabled>
                    <input type="checkbox" name="" id="myTiharu3" disabled>
                </div>
            </div>
            <div class="card" id="Andzu">
                <div class="row_check">
                    <input type="checkbox" name="" id="opAndzu1" disabled>
                    <input type="checkbox" name="" id="opAndzu2" disabled>
                    <input type="checkbox" name="" id="opAndzu3" disabled>
                    <input type="checkbox" name="" id="opAndzu4" disabled>
                </div>
                <img src="src/Andzu.svg" alt="Андзю">
                <img src="src/andzu_badge.svg" alt="Жетон" id="badge_andzu">
                <div class="row_check">
                    <input type="checkbox" name="" id="myAndzu1" disabled>
                    <input type="checkbox" name="" id="myAndzu2" disabled>
                    <input type="checkbox" name="" id="myAndzu3" disabled>
                    <input type="checkbox" name="" id="myAndzu4" disabled>
                </div>
            </div>
            <div class="card" id="Ruri">
                <div class="row_check">
                    <input type="checkbox" name="" id="opRuri1" disabled>
                    <input type="checkbox" name="" id="opRuri2" disabled>
                    <input type="checkbox" name="" id="opRuri3" disabled>
                    <input type="checkbox" name="" id="opRuri4" disabled>
                    <input type="checkbox" name="" id="opRuri5" disabled>
                </div>
                <img src="src/Ruri.svg" alt="Рури">
                <img src="src/ruri_badge.svg" alt="Жетон" id="badge_ruri">
                <div class="row_check">
                    <input type="checkbox" name="" id="myRuri1" disabled>
                    <input type="checkbox" name="" id="myRuri2" disabled>
                    <input type="checkbox" name="" id="myRuri3" disabled>
                    <input type="checkbox" name="" id="myRuri4" disabled>
                    <input type="checkbox" name="" id="myRuri5" disabled>
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
                <div class="badge" id="my_exchange" onclick="exchange()">
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
        let my_cards = [0, 0, 0, 0, 0, 0, 0];
        let my_choice = [0, 0, 0];
        let my_pairs = [0, 0];
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
        var names = new Map();
        names.set("Андзю", "Andzu");
        names.set("Аянэ", "Ayane");
        names.set("Ироха", "Iroha");
        names.set("Тихару", "Tiharu");
        names.set("Томойо", "Tomoyo");
        names.set("Намико", "Namiko");
        names.set("Рури", "Ruri");

        setInterval (function () {
            $.ajax({
                    method: "POST",
                    url: 'scripts/update.php',
                    data: {},
                    success: function(response) {
                        let jsonData = JSON.parse(response);
                        if (jsonData.success == "1") {
                        turn = jsonData.turn;
                        if (jsonData.full_game == 0){ //проверка все ли игроки на месте
                            location.href = "main.html";
                        }
                        for (let i=0; i<jsonData.count_cards; i++){ //записываем карты игрока в массив
                            my_cards[i] = jsonData["card" + i];
                        }
                        
                        if (turn == "<?php echo $_COOKIE["op_id"]?>"){ //определяем чей ход
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
                        let r = document.getElementById("round"); //записываем раунд
                        r.textContent = "Раунд " + jsonData.round;
                            for (i = 0; i < 7; i++) { //заполняем карты пустыми картинками
                                let im = document.getElementById("gift" + i);
                                im.src = "src/stub.png";
                            }
                            for (i = 0; i < jsonData.card_count; i++) { //заполняем карты в соответствии с бд
                                let im = document.getElementById("gift" + i);
                                im.src = img_src.get(jsonData["" + i]);
                            }
                            let my = document.getElementById("my_geishas_cnt"); //выводим количество моих гейш
                            my.textContent = jsonData.my_geishas_cnt;
                            let op = document.getElementById("op_geishas_cnt"); //выводим количество гейш соперника
                            op.textContent = jsonData.op_geishas_cnt;
                            for (i = 0; i < jsonData.my_geishas_cnt; i++) { //двигаем жетоны
                                let badge = document.getElementById(trans.get(jsonData["my_geisha" + i]));
                                badge.style.top = "50%";
                            }
                            for (i = 0; i < jsonData.op_geishas_cnt; i++) {
                                let badge = document.getElementById(trans.get(jsonData["op_geisha" + i]));
                                badge.style.top = "5%";
                            }
                        let mp = document.getElementById("my_points"); //выводим мои очки
                        mp.textContent = jsonData.my_points;
                        let opp = document.getElementById("op_points"); //выводим очки противника
                        opp.textContent = jsonData.op_points; 
                        if (jsonData.my_secret == "1"){ //перекрашиваем жетоны
                            let m1 = document.getElementById("my_secret");
                            m1.style.backgroundColor = "#818181";
                            m1.disabled = true;
                        }
                        else{
                            let m1 = document.getElementById("my_secret");
                            m1.style.backgroundColor = "#120789";
                            m1.disabled = false;
                        }
                        if (jsonData.my_ban == "1"){
                            let m2 = document.getElementById("my_ban");
                            m2.style.backgroundColor = "#818181";
                            m2.disabled = true;
                        }
                        else{
                            let m2 = document.getElementById("my_ban");
                            m2.style.backgroundColor = "#120789";
                            m2.disabled = false;
                        }
                        if (jsonData.my_gift == "1"){
                            let m3 = document.getElementById("my_gift");
                            m3.style.backgroundColor = "#818181";
                            m3.disabled = true;
                        }
                        else{
                            let m3 = document.getElementById("my_gift");
                            m3.style.backgroundColor = "#120789";
                            m3.disabled = false;
                        }
                        if (jsonData.my_exchange == "1"){
                            let m4 = document.getElementById("my_exchange");
                            m4.style.backgroundColor = "#818181";
                            m4.disabled = true;
                        }
                        else{
                            let m4 = document.getElementById("my_exchange");
                            m4.style.backgroundColor = "#120789";
                            m4.disabled = false;

                        }
                        if (jsonData.op_secret == "1"){
                            let o1 = document.getElementById("op_secret");
                            o1.style.backgroundColor = "#818181";
                            o1.disabled = true;
                        }
                        else{
                            let o1 = document.getElementById("op_secret");
                            o1.style.backgroundColor = "#120789";
                            o1.disabled = false;
                        }
                        if (jsonData.op_ban == "1"){
                            let o2 = document.getElementById("op_ban");
                            o2.style.backgroundColor = "#818181";
                            o2.disabled = true;
                        }
                        else{
                            let o2 = document.getElementById("op_ban");
                            o2.style.backgroundColor = "#120789";
                            o2.disabled = false;
                        }
                        if (jsonData.op_gift == "1"){
                            let o3 = document.getElementById("op_gift");
                            o3.style.backgroundColor = "#818181";
                            o3.disabled = true;
                        }
                        else{
                            let o3 = document.getElementById("op_gift");
                            o3.style.backgroundColor = "#120789";
                            o3.disabled = false;
                        }
                        if (jsonData.op_exchange == "1"){
                            let o4 = document.getElementById("op_exchange");
                            o4.style.backgroundColor = "#818181";
                            o4.disabled = true;
                        }
                        else{
                            let o4 = document.getElementById("op_exchange");
                            o4.style.backgroundColor = "#120789";
                            o4.disabled = false;
                        }
                        if (jsonData.check_gifts == 1){ //выводим выбор подарка
                            let choice_dialog = document.getElementById("choice");
                            choice_dialog.showModal();
                            let im1 = document.getElementById("choice1");
                            im1.src = img_src.get(jsonData["gift1"]);
                            let im2 = document.getElementById("choice2");
                            im2.src = img_src.get(jsonData["gift2"]);
                            let im3 = document.getElementById("choice3");
                            im3.src = img_src.get(jsonData["gift3"]);
                        }
                        if (jsonData.check_pairs == 1){ //выводим выбор пары
                            let choice_dialog = document.getElementById("choice_pair");
                            choice_dialog.showModal();
                            let im1 = document.getElementById("paircard1");
                            im1.src = img_src.get(jsonData["paircard1"]);
                            let im2 = document.getElementById("paircard2");
                            im2.src = img_src.get(jsonData["paircard2"]);
                            let im3 = document.getElementById("paircard3");
                            im3.src = img_src.get(jsonData["paircard3"]);
                            let im4 = document.getElementById("paircard4");
                            im4.src = img_src.get(jsonData["paircard4"]);
                        }
                        for (i=0; i<3; i++){
                            my_choice[i] = jsonData["choice" + (i+1)];
                        }

                        for (i=0; i<2; i++){
                            my_pairs[i] = jsonData["pair" + (i+1)];
                        }


                        for (i=0; i<jsonData["mycheck"]; i++){ //закрашиваем чекбоксы
                            for (j=0; j<jsonData["mycount" + i]; j++){
                                let p = j+1;
                                let check_name = "my" + names.get(jsonData["mygeishacheck" + i]) + p;
                                let checkb = document.getElementById(check_name);
                                checkb.checked = true;
                            }
                        }
                        for (i=0; i<jsonData["opcheck"]; i++){ //закрашиваем чекбоксы противника
                            for (j=0; j<jsonData["opcount" + i]; j++){
                                let p = j+1;
                                let check_name = "op" + names.get(jsonData["opgeishacheck" + i]) + p;
                                let checkb = document.getElementById(check_name);
                                checkb.checked = true;
                            }
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
            let badge_name = "";
            let ch = -1; //сколько карт уже нажато
            let card = [0, 0, 0, 0];
            var count_card = new Map();
                        count_card.set("secret", 0);
                        count_card.set("ban", 1);
                        count_card.set("gift", 2);
                        count_card.set("exchange", 3);                       
            function quit(){
                $.ajax({
                    method: "POST",
                    url: 'scripts/quit.php',
                    data: {},
                    success: function(response) {
                        let jsonData = JSON.parse(response);
                                    if (jsonData.success == "1")
                                    {
                                        location.href = 'main.html'; 
                                    }
                                    else
                                    {
                                        window.error.showModal();
                                        document.getElementById("error_text").innerText=jsonData.error;
                                    }
                    }});
            }
                        //функции жетонов
            function secret(){
                    if (this.disabled == true){
                        window.error.showModal();
                        document.getElementById("error_text").innerText="Жетон уже использован";
                    }
                    else {
                        if (turn != "<?php echo $_COOKIE["op_id"]?>"){ //сейчас ход игрока
                            card = [0, 0, 0, 0];
                            ch = -1;
                            alert("Выберите одну карту, кликнув на нее");
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
                            card = [0, 0, 0, 0];
                            ch = -1;
                            alert("Выберите две карты, кликнув на них");
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
                            card = [0, 0, 0, 0];
                            ch = -1;
                            alert("Выберите три карты, кликнув на них");
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
            function exchange(){
                if (this.disabled == true){
                        window.error.showModal();
                        document.getElementById("error_text").innerText="Жетон уже использован";
                    }
                    else {
                        if (turn != "<?php echo $_COOKIE["op_id"]?>"){ //сейчас ход игрока
                            card = [0, 0, 0, 0];
                            ch = -1;
                            alert("Выберите первую пару карт, кликнув на них");
                            badge_name = "exchange";
                            let badge = document.getElementById("my_exchange");
                            badge.style.backgroundColor = "#C64225";
                        }
                        else {
                            window.error.showModal();
                            document.getElementById("error_text").innerText="Сейчас не ваш ход";
                        }
                    }
            }
            function choice(id){
                $.ajax({
                    method: "POST",
                    url: 'scripts/choose_card.php',
                    data: {"card": my_choice[id-1]},
                    success: function(response) {
                        let jsonData = JSON.parse(response);
                                    if (jsonData.success == "1")
                                    {
                                        let choice_dialog = document.getElementById("choice");
                                        choice_dialog.close();
                                        if (jsonData.end == 1){
                                            new_round();
                                        }
                                    }
                                    else
                                    {
                                        window.error.showModal();
                                        document.getElementById("error_text").innerText=jsonData.error;
                                    }
                    }});
            }
            function choice_pair(id){
                $.ajax({
                    method: "POST",
                    url: 'scripts/choose_pair.php',
                    data: {"pair": my_pairs[id-1]},
                    success: function(response) {
                        let jsonData = JSON.parse(response);
                                    if (jsonData.success == "1")
                                    {
                                        let choice_dialog = document.getElementById("choice_pair");
                                        choice_dialog.close();
                                        if (jsonData.end == 1){
                                            new_round();
                                        }
                                    }
                                    else
                                    {
                                        window.error.showModal();
                                        document.getElementById("error_text").innerText=jsonData.error;
                                    }
                    }});
            }
            function clearAll() {
                var items = document.getElementsByTagName("input"), len, i;
                for (i = 0, len = items.length; i < len; i += 1) {
                    if (items.item(i).type && items.item(i).type === "checkbox") {
                        items.item(i).checked = false;
                        }  
                    }
                }

            function new_round(){
                $.ajax({
                method: "POST",
                url: 'scripts/round.php',
                data: {},
                success: function(response) {
                    let jsonData = JSON.parse(response);
                                if (jsonData.success == "1")
                                {
                                    if (jsonData.winner != 0){
                                        if (jsonData.winner == "<?php echo $_COOKIE["op_id"]?>"){
                                            alert("Вы проиграли");
                                        }
                                        else{
                                            alert("Вы выиграли");
                                        }
                                    }
                                    else{
                                        clearAll();
                                    }
                                }
                                else
                                {
                                    window.error.showModal();
                                    document.getElementById("error_text").innerText=jsonData.error;
                                }
                }});
            }
            //функция выбора аякса
            function choose_procedure(badge_name){
                if (badge_name=="secret"){
                    ch = -1;
                    $.ajax({
                    method: "POST",
                    url: 'scripts/secret.php',
                    data: {"card": card[0]+""},
                    success: function(response) {
                        let jsonData = JSON.parse(response);
                                    if (jsonData.success == "1")
                                    {
                                        if (jsonData.end == 1){
                                               new_round();
                                        }
                                    }
                                    else
                                    {
                                        window.error.showModal();
                                        document.getElementById("error_text").innerText=jsonData.error;
                                    }
                    }});
                }
                else{
                if (badge_name=="ban"){
                    ch = -1;
                    $.ajax({
                    method: "POST",
                    url: 'scripts/ban.php',
                    data: {"card1": card[0]+"", "card2": card[1]+""},
                    success: function(response) {
                        let jsonData = JSON.parse(response);
                                    if (jsonData.success == "1")
                                    {
                                        if (jsonData.end == 1){
                                            new_round();
                                        }
                                    }
                                    else
                                    {
                                        window.error.showModal();
                                        document.getElementById("error_text").innerText=jsonData.error;
                                    }
                    }});
                }
                else{
                    if (badge_name=="gift"){
                    ch = -1;
                    $.ajax({
                    method: "POST",
                    url: 'scripts/gift.php',
                    data: {"card1": card[0]+"", "card2": card[1]+"", "card3": card[2]+""},
                    success: function(response) {
                        let jsonData = JSON.parse(response);
                                    if (jsonData.success == "1")
                                    {
                                        alert("Ожидаем выбора соперника");
                                    }
                                    else
                                    {
                                        window.error.showModal();
                                        document.getElementById("error_text").innerText=jsonData.error;
                                    }
                    }});
                }
                else{
                    if (badge_name=="exchange"){
                    ch = -1;
                    $.ajax({
                    method: "POST",
                    url: 'scripts/exchange.php',
                    data: {"card1": card[0]+"", "card2": card[1]+"", "card3": card[2]+"", "card4": card[3]+""},
                    success: function(response) {
                        let jsonData = JSON.parse(response);
                                    if (jsonData.success == "1")
                                    {
                                        alert("Ожидаем выбора соперника");
                                    }
                                    else
                                    {
                                        window.error.showModal();
                                        document.getElementById("error_text").innerText=jsonData.error;
                                    }
                    }});
                }
                badge_name = "";
                card = [0, 0, 0, 0];
                }
            }
        }
            }
            function check_card(x){
                for (let i=0; i<4; i++){
                    if (card[i] == x){
                        return true;
                    }
                }
                return false;
            }
            //функции карт
            function first(){
                if (turn != "<?php echo $_COOKIE["op_id"]?>"){ //сейчас ход игрока
                    if (badge_name != ""){
                        ch++;
                        let card_value1 = my_cards[0];
                        if (check_card(card_value1)){
                            alert("Вы уже выбрали эту карту");
                        }
                        else{
                        card[ch] = card_value1;
                        }
                        if (ch == 1 && badge_name == "exchange"){
                            alert("Выберите вторую пару карт, кликнув на них");
                        }
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
                    if (badge_name != ""){
                        document.getElementById("second_gift").style.borderColor = "#ff0000";
                        ch++;
                        let card_value2 = my_cards[1];
                        if (check_card(card_value2)){
                            alert("Вы уже выбрали эту карту");
                        }
                        else{
                        card[ch] = card_value2;
                        }
                        if (ch == 1 && badge_name == "exchange"){
                            alert("Выберите вторую пару карт, кликнув на них");
                        }
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
                    if (badge_name != ""){
                        document.getElementById("third_gift").style.borderColor = "#ff0000";
                        ch++;
                        let card_value3 = my_cards[2];
                        if (check_card(card_value3)){
                            alert("Вы уже выбрали эту карту");
                        }
                        else{
                        card[ch] = card_value3;
                        }
                        if (ch == 1 && badge_name == "exchange"){
                            alert("Выберите вторую пару карт, кликнув на них");
                        }
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
                    if (badge_name != ""){
                        document.getElementById("fourth_gift").style.borderColor = "#ff0000";
                        ch++;
                        let card_value4 = my_cards[3];
                        if (check_card(card_value4)){
                            alert("Вы уже выбрали эту карту");
                        }
                        else{
                        card[ch] = card_value4;
                        }
                        if (ch == 1 && badge_name == "exchange"){
                            alert("Выберите вторую пару карт, кликнув на них");
                        }
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
                    if (badge_name != ""){
                        document.getElementById("fifth_gift").style.borderColor = "#ff0000";
                        ch++;
                        let card_value5 = my_cards[4];
                        if (check_card(card_value5)){
                            alert("Вы уже выбрали эту карту");
                        }
                        else{
                        card[ch] = card_value5;
                        }
                        if (ch == 1 && badge_name == "exchange"){
                            alert("Выберите вторую пару карт, кликнув на них");
                        }
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
                    if (badge_name != ""){
                        document.getElementById("sixth_gift").style.borderColor = "#ff0000";
                        ch++;
                        let card_value6 = my_cards[5];
                        if (check_card(card_value6)){
                            alert("Вы уже выбрали эту карту");
                        }
                        else{
                        card[ch] = card_value6;
                        }
                        if (ch == 1 && badge_name == "exchange"){
                            alert("Выберите вторую пару карт, кликнув на них");
                        }
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
                    if (badge_name != ""){
                        document.getElementById("seventh_gift").style.borderColor = "#ff0000";
                        ch++;
                        let card_value7 = my_cards[6];
                        if (check_card(card_value7)){
                            alert("Вы уже выбрали эту карту");
                        }
                        else{
                        card[ch] = card_value7;
                        }
                        if (ch == 1 && badge_name == "exchange"){
                            alert("Выберите вторую пару карт, кликнув на них");
                        }
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