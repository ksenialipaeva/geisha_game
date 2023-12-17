<!DOCTYPE html>
<html>
    <head>
        <title>Приглашения</title>
        <link rel="stylesheet" href="invitation.css"></linkrel>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
        <link href='https://fonts.googleapis.com/css?family=Cormorant Garamond' rel='stylesheet'>
        <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>
    <dialog id="error">
        <div>
            <p id="error_text">Не получилось</p>
            <button onclick="window.error.close();">ОК</button>
        </div>                
    </dialog>
        <div class="header">
            <a id="home" href="main.html">
                <img  src="src/homepage.svg" alt="Домой">
            </a>
            <h1>Приглашения</h1>
            <p id="name"><?php echo $_COOKIE["login"]?></p>
            <button id="logout" onclick="function_logout()">Выйти</button>
        </div>
        <div class="tables">
            <div class="available">
                <h2>Список доступных игроков</h2>
                <div class="available_player">
                    <p id="player0"></p>
                    <button class="send" id="av0" onclick="function_send(0)" hidden>Отправить приглашение</button>
                </div>
                <div class="available_player">
                    <p id="player1"></p>
                    <button class="send" id="av1" onclick="function_send(1)" hidden>Отправить приглашение</button>
                </div>
                <div class="available_player">
                    <p id="player2"></p>
                    <button class="send" id="av2" onclick="function_send(2)" hidden>Отправить приглашение</button>
                </div>
            </div>
            <div class="available">
                <h2>Список полученных приглашений</h2>
                <div class="available_player">
                    <p id="invit0"></p>
                    <button class="accept" id="a0" onclick="function_accept(0)" hidden>Принять приглашение</button>
                    <button class="decline" id="d0" onclick="function_decline(0)" hidden>Отклонить приглашение</button>
                </div>
                <div class="available_player">
                    <p id="invit1"></p>
                    <button class="accept" id="a1" onclick="function_accept(2)" hidden>Принять приглашение</button>
                    <button class="decline" id="d1" onclick="function_decline(1)" hidden>Отклонить приглашение</button>
                </div>
                <div class="available_player">
                    <p id="invit2"></p>
                    <button class="accept" id="a2" onclick="function_accept(0)" hidden>Принять приглашение</button>
                    <button class="decline" id="d2" onclick="function_decline(2)" hidden>Отклонить приглашение</button>
                </div>
            </div>
        </div>
        <script>
        setInterval (function () {
            $.ajax({
                    method: "POST",
                    url: 'scripts/find_rival.php',
                    data: {},
                    success: function(response) {
                        let jsonData = JSON.parse(response);
                        if (jsonData.success == "1") {                            
                            for (i = 0; i < jsonData.login_cnt; i++) {
                                let p = document.getElementById("player"+i);
                                p.textContent = jsonData[""+i];
                                let d = document.getElementById("av"+i);
                                d.hidden = false;
                            }
                            if (jsonData.login_cnt == 0){
                                for (i = 0; i < 3; i++) {
                                let p = document.getElementById("player"+i);
                                p.textContent = "";
                                let d = document.getElementById("av"+i);
                                d.hidden = true;
                                
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
            $.ajax({
                    method: "POST",
                    url: 'scripts/request.php',
                    data: {},
                    success: function(response) {
                        let jsonData = JSON.parse(response);
                        if (jsonData.success == "1") {                            
                            for (i = 0; i < jsonData.login_cnt; i++) {
                                let p = document.getElementById("invit"+i);
                                p.textContent = jsonData[""+i];
                                let d = document.getElementById("a"+i);
                                d.hidden = false;
                                let x = document.getElementById("d"+i);
                                x.hidden = false;
                            }
                            if (jsonData.login_cnt == 0){
                                for (i = 0; i < 3; i++) {
                                let p = document.getElementById("invit"+i);
                                p.textContent = "";
                                let d = document.getElementById("a"+i);
                                d.hidden = true;
                                let x = document.getElementById("d"+i);
                                x.hidden = true;
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
        function function_send(id){
                var name = document.getElementById("player"+id).textContent;
                $.ajax({
                    method: "POST",
                    url: 'scripts/send_invitation.php',
                    data: {"login": name + ""},
                    success: function(response) {
                        let jsonData = JSON.parse(response);
                        if (jsonData.success == "1") {                            
                            var button = document.getElementById("av"+id);
                            button.style.backgroundColor = "#8B8B8B";
                            button.textContent = "Ждём ответа...";
                        }
                        else
                        {
                            window.error.showModal();
                            document.getElementById("error_text").innerText=jsonData.error;
                        }
                    }
            });
            }
            function function_decline(id){
                let decline_name = document.getElementById("invit"+id).textContent;
                $.ajax({
                    method: "POST",
                    url: 'scripts/decline.php',
                    data: {"login": decline_name + ""},
                    success: function(response) {
                        let jsonData = JSON.parse(response);
                        if (jsonData.success == "1") {                            
                            let button1 = document.getElementById("a"+id);
                            let button2 = document.getElementByID("d"+id);
                            decline_name = "Отменено";
                            button1.hidden = true;
                            button2.hidden = true;
                        }
                        else
                        {
                            window.error.showModal();
                            document.getElementById("error_text").innerText=jsonData.error;
                        }
                    }
            });
            }
            function function_logout(){
                $.ajax({
                    method: "POST",
                    url: 'scripts/logout.php',
                    data: {},
                    success: function(response) {
                        let jsonData = JSON.parse(response);
                        if (jsonData.success == "1") {                           
                            location.href = 'auth.html';
                        }
                        else
                        {
                            window.error.showModal();
                            document.getElementById("error_text").innerText=jsonData.error;
                        }
                    }
            });
            }
            function function_accept(id){
                let accept_name = document.getElementById("invit"+id).textContent;
                $.ajax({
                    method: "POST",
                    url: 'scripts/accept.php',
                    data: {"login": accept_name + ""},
                    success: function(response) {
                        let jsonData = JSON.parse(response);
                        if (jsonData.success == "1") {                     
                            location.href = 'field.php';
                        }
                        else
                        {
                            window.error.showModal();
                            document.getElementById("error_text").innerText=jsonData.error;
                        }
                    }
            });
            }
           </script>
    </body>
</html>