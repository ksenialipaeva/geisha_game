<!DOCTYPE html>
<html>
    <head>
        <title>Игра</title>
        <link rel="stylesheet" href="game.css"></linkrel>
        <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>
        <div class="wrapper">
        <div class="header">
            <div class="header_info">
                <a href="rules.html" class="info">
                    <img id="book" src="src/book.svg" alt="Правила">
                    <p>Правила</p>
                </a>
                <div class="info">
                    <img id="quit" src="src/quit.svg" alt="Сдаться">
                    <p>Сдаться</p>
                </div>
            </div>
            <div class="group_badge">
                <div class="opponent_badge" id="badge_enabled">
                    <img src="src/checkmark.svg" alt="Жетон Секрет">
                </div>
                <div class="opponent_badge" id="badge_disabled">
                    <img src="src/cross.svg" alt="Жетон Запрет">
                </div>
                <div class="opponent_badge"  id="badge_enabled">
                    <img src="src/gift_badge.svg" alt="Жетон Подарок">
                </div>
                <div class="opponent_badge" id="badge_disabled">
                    <img src="src/exchange.svg" alt="Жетон Обмен">
                </div>
            </div>
            <div class="opponent_info">
                <div class="opponent">
                    <p><?php echo $_COOKIE["op_login"]?></p>
                </div>
                <div class="point_wrapper">
                <div class="points">
                    <p>0</p>
                    <p>0</p>
                </div>
                <div class="point_description">
                    <p>Гейши</p>
                    <p>Очки</p>
                </div>
            </div>
            </div>
        </div>
        <div class="main">
            <p>Раунд 1</p>
            <div class="row_cards">
            <div class="card" id="Ayane">
                <div class="row_check">
                    <input type="checkbox" name="" />
                    <input type="checkbox" name="" />
                </div>
                <img src="src/Ayane.svg" alt="Аянэ">
                <img src="src/ayane_badge.svg" alt="Жетон" id="badge_ayane">
                <div class="row_check">
                    <input type="checkbox" name="" />
                    <input type="checkbox" name="" />
                </div>
            </div>
            <div class="card" id="Iroha">
                <div class="row_check">
                    <input type="checkbox" name="" />
                    <input type="checkbox" name="" />
                </div>
                <img src="src/Iroha.svg" alt="Ироха">
                <img src="src/iroha_badge.svg" alt="Жетон" id="badge_iroha">
                <div class="row_check">
                    <input type="checkbox" name="" />
                    <input type="checkbox" name="" />
                </div>
            </div>
            <div class="card" id="Tomoyo">
                <div class="row_check">
                    <input type="checkbox" name="" />
                    <input type="checkbox" name="" />
                </div>
                <img src="src/Tomoyo.svg" alt="Томойо">
                <img src="src/tomoyo_badge.svg" alt="Жетон" id="badge_tomoyo">
                <div class="row_check">
                    <input type="checkbox" name="" />
                    <input type="checkbox" name="" />
                </div>
            </div>
            <div class="card" id="Namiko">
                <div class="row_check">
                    <input type="checkbox" name="" />
                    <input type="checkbox" name="" />
                    <input type="checkbox" name="" />
                </div>
                <img src="src/Namiko.svg" alt="Намико">
                <img src="src/namiko_badge.svg" alt="Жетон" id="badge_namiko">
                <div class="row_check">
                    <input type="checkbox" name="" />
                    <input type="checkbox" name="" />
                    <input type="checkbox" name="" />
                </div>
            </div>
            <div class="card" id="Tiharu">
                <div class="row_check">
                    <input type="checkbox" name="" />
                    <input type="checkbox" name="" />
                    <input type="checkbox" name="" />
                </div>
                <img src="src/Tiharu.svg" alt="Тихару">
                <img src="src/tiharu_badge.svg" alt="Жетон" id="badge_tiharu">
                <div class="row_check">
                    <input type="checkbox" name="" />
                    <input type="checkbox" name="" />
                    <input type="checkbox" name="" />
                </div>
            </div>
            <div class="card" id="Andzu">
                <div class="row_check">
                    <input type="checkbox" name="" />
                    <input type="checkbox" name="" />
                    <input type="checkbox" name="" />
                    <input type="checkbox" name="" />
                </div>
                <img src="src/Andzu.svg" alt="Андзю">
                <img src="src/andzu_badge.svg" alt="Жетон" id="badge_andzu">
                <div class="row_check">
                    <input type="checkbox" name="" />
                    <input type="checkbox" name="" />
                    <input type="checkbox" name="" />
                    <input type="checkbox" name="" />
                </div>
            </div>
            <div class="card" id="Ruri">
                <div class="row_check">
                    <input type="checkbox" name="" />
                    <input type="checkbox" name="" />
                    <input type="checkbox" name="" />
                    <input type="checkbox" name="" />
                    <input type="checkbox" name="" />
                </div>
                <img src="src/Ruri.svg" alt="Рури">
                <img src="src/ruri_badge.svg" alt="Жетон" id="badge_ruri">
                <div class="row_check">
                    <input type="checkbox" name="" />
                    <input type="checkbox" name="" />
                    <input type="checkbox" name="" />
                    <input type="checkbox" name="" />
                    <input type="checkbox" name="" />
                </div>
            </div>
        </div>
        </div>
        <div class="player_menu">
            <div class="person_info">
                <div class="person">
                    <p><?php echo $_COOKIE["login"]?></p>
                </div>
                <div class="points">
                    <p>0</p>
                    <p>0</p>
                </div>
                <div class="point_description">
                    <p>Гейши</p>
                    <p>Очки</p>
                </div>
            </div>
            <div class="player_badges">
            <div class="row_badge_top">
                <div class="badge" id="badge_enabled">
                    <img src="src/checkmark.svg" alt="Жетон Секрет">
                </div>
                <div class="badge" id="badge_enabled">
                    <img src="src/cross.svg" alt="Жетон Запрет">
                </div>
            </div>
            <div class="row_badge_bottom">
                <div class="badge" id="badge_disabled">
                    <img src="src/gift_badge.svg" alt="Жетон Подарок">
                </div>
                <div class="badge" id="badge_enabled">
                    <img src="src/exchange.svg" alt="Жетон Обмен">
                </div>
            </div>
            </div>
            <div class="player_cards">
                <div class="player_card" id="first_gift">
                    <img src="src/ayane_gift.svg" alt="подарок Аянэ">
                </div>
                <div class="player_card" id="second_gift">
                    <img src="src/tiharu_gift.svg" alt="подарок Тихару">
                </div>
                <div class="player_card" id="third_gift">
                    <img src="src/andzu_gift.svg" alt="подарок Андзю">
                </div>
                <div class="player_card" id="fourth_gift">
                    <img src="src/tomoyo_gift.svg" alt="подарок Томойо">
                </div>
                <div class="player_card" id="fifth_gift">
                    <img src="src/iroha_gift.svg" alt="подарок Ироха">
                </div>
                <div class="player_card" id="sixth_gift">
                    <img src="src/ruri_gift.svg" alt="подарок Рури">
                </div>
            </div>
        </div>
    </div>
    <div class="stub">
        Мобильная версия игры недоступна
    </div>
    </body>
</html>