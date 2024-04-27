<!DOCTYPE html>
<html lang="ru" prefix="og: http://ogp.me/ns#">
<head>
    <meta property="og:title" content="RPG Магический Сервер Майнкрафт Без Доната - Mouse Moon Minecraft"/>
    <meta property="og:type" content="article" />
    <meta property="og:url" content="http://https://mousemoon.ru/" />
    <meta property="og:image" content="/images/test.png" />
    <meta property="og:description" content="Добро пожаловать на Mouse Moon Minecraft - твой лунный путь к бесконечным приключениям в мире Minecraft! Отправляйся в захватывающее путешествие под светом луны, где тайны и сказочная магия ждут тебя за каждым углом. Создавай свою уникальную историю вместе с нами!"/>
    <meta property="og:site_name" content="Приватный Майнкрафт Сервер с Магическими Модами - Mouse Moon Minecraft"/>

    <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate" />
    <meta http-equiv="Pragma" content="no-cache" />
    <meta http-equiv="Expires" content="0" />
    
    <meta charset="UTF-8" />
    <meta name="keywords" content="РПГ, Магические сервера, сервера Майнкрафт, Mouse Earth, Mouse Moon Minecraft"/>
    <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>РПГ Магические сервера Майнкрафт Minecraft</title>
    <link rel="icon" type="image/x-icon" href="/images/favicon.webp" />
    <meta name="description" content="РПГ Мистические Магические сервера Майнкрафт – Mouse Moon Minecraft, Сервера с Бесплатным Донатом, Пиратские Сервера, 1 20 1, Аниме Майнкрафт" />
    <link rel="apple-touch-icon" href="/images/favicon.webp" />
    <style>
body{
  background-image: url('images/backg.webp');
  background-repeat: no-repeat;
  background-size: cover;
  font-family: 'Aqum';
  color:#ffffff;
}
    </style>
    
    <script>
        var stylesheet = document.createElement('link');
        stylesheet.href = 'style.css';
        stylesheet.rel = 'stylesheet';
        stylesheet.media = 'none';
        document.head.appendChild(stylesheet);
        setTimeout(function() {
            stylesheet.media = 'all';
        }, 0);
    </script>

<!-- Yandex.Metrika counter -->
<script type="text/javascript">
   (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
   m[i].l=1*new Date();
   for (var j = 0; j < document.scripts.length; j++) {if (document.scripts[j].src === r) { return; }}
   k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
   (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

   ym(97076894, "init", {
        clickmap:true,
        trackLinks:true,
        accurateTrackBounce:true,
        webvisor:true
   });
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/97076894" style="position:absolute; left:-9999px;" alt="Unimice" /></div></noscript>
<!-- /Yandex.Metrika counter -->
</head>
<body>
<?php
session_start();

$servername = "n1.craft-hosting.ru";
$username = "ukdshysan7217bsa";
$password = "jV7oR1xW3s";
$dbname = "saouysbyui192";

// Создание подключения
$conn = new mysqli($servername, $username, $password, $dbname);

// Проверка соединения
if ($conn->connect_error) { die("Connection died! Take that: " . $conn->connect_error); }



// Обработка данных формы
if (isset($_POST["register"])) {
    $name = $_POST["name"];
    $password = $_POST["password"];

    // Проверка наличия пользователя в базе данных
    $sql = "SELECT * FROM users WHERE name='$name'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        //echo "Пользователь с таким именем уже существует";
    } else {
        // Добавление нового пользователя в базу данных
        $sql = "INSERT INTO users (name, password) VALUES ('$name', '$password')";
        if ($conn->query($sql) == true) {
            echo "Регистрация прошла успешно";
        } else {
            //echo "Ошибка при регистрации: " . $conn->error;
        }
    }
}

if (isset($_POST["login"])) {
    $name = $_POST["name"];
    $password = $_POST["password"];

    // Проверка соответствия имени пользователя и пароля в базе данных
    $sql = "SELECT * FROM users WHERE name='$name' AND password='$password'";
    $result = $conn->query($sql);


    if ($result->num_rows > 0) {
        $_SESSION["name"] = $name;
        //echo "Вход выполнен успешно";
    } else {
        //echo "Неверное имя пользователя " . $name. " или пароль " . $password. "";
    }
}

if (isset($_POST["logout"])) {
    session_destroy();
    header("Location: ".$_SERVER['PHP_SELF']);
    exit;
}
?>
        <div class="logo">
            <img src="images/imglogo.webp" alt="Сервера для Тренировки Строительства в Майнкрафт" class="onner levitate" />
            <img src="images/ТекстЛОГО.webp" alt="Пиратские Сервера Майнкрафт" class="inner levitate1" />
        </div>
    <div class="text">
        <h1>РПГ Мистические Магические сервера Майнкрафт – Mouse Moon Minecraft</h1>
    <div class="text">
    <form action="" method="POST">
    <!-- Поля формы -->
    <input type="text" name="name" placeholder="Логин">
    <input type="text" name="password" placeholder="Пароль">

    <!-- Кнопки -->
    <input type="submit" name="register" value="Зарегистрироваться">
    <input type="submit" name="login" value="Войти">
    <input type="submit" name="logout" value="Выйти">
    </form>
    </div>
        <?php echo "<br>Добро пожаловать на Mouse Moon, <i><strong>" .
            $_SESSION["name"] .
            "</i></strong> - твой лунный путь к бесконечным приключениям в мире Minecraft! Отправляйся в захватывающее путешествие под светом луны, где тайны и сказочная магия ждут тебя за каждым углом. Создавай свою уникальную историю вместе с нами."; ?>
        <a href="https://starsolar.ru/"><h2>StarSolar - Проект кастомных Майнкрафт серверов с модами (Наш партнер, тык!)</h2></a>
        Добро пожаловать в DabloonLand - уникальный Minecraft сервер, где вы станете героем своей собственной фэнтези-истории. Исследуйте, сражайтесь и станьте легендой вместе с нами!
        <a href="https://mousearth.ru/"><h2>Mouse Earth - Майнкрафт Сервер с модом Create (Наш партнер, тык!)</h2></a>
        <p>Mouse Earth – это приватный сервер Майнкрафт с модом Create, без доната. Это сервер со стабильным хостингом и оптимизированным сайтом. Это сервер с сделанными вручную кастомными модами и честной игровой экономикой. Сервер с большим активом даже в ночное время, и бесплатной проходкой. Лучший приватный сервер с Create на версии 1.19 2. Каждый игрок нашего сервера важен. Для сервера с Create вы будете не просто серой массой. Вы станете командой игроков, каждый из которых войдет в историю проекта. Вы – легенда. Заходите и творите. Мышиная Империя ждет вас.</p>
        <br /><a href="https://discord.gg/unimice"><h3>Unimice - Наш Discord сервер, тык!</h3></a>
        Discord сервер нужен чтобы пройти верификацию, следить за обновлениями и общатся с другими участниками.
    </div>
	<div class="text">
        <h2><center>Наши преимущества</center></h2> <br />- На сервере ежедневно играют 50 игроков, более 1000 всего <br /> - Полностью бесплатная игра, никаких платных дополнений <br /> - Дружное сообщество, регулярные собрания и события
    </div>
    <div class="text">
        <center><h2>Комментарии:</h2></center>
        
    <?php
        $commentatorname = $_SESSION["name"];
        $sql = "SELECT id FROM users WHERE name='$commentatorname'";
        $result = $conn->query($sql);
        if($result->num_rows < 1) {
            echo "<center>Сначала вам нужно войти в аккаунт!</center>";
        }
        else {
            echo '<form method="POST" action="">
            <label for="comment"><center>Add a comment:</center></label><br>
            <center><textarea name="comment" id="comment" rows="4" cols="30"></textarea></center>
            <center><input type="submit" value="Submit"></center><br>
            </form>';
        }
        
        
        // Check if the form is submitted
        if (isset($_POST["comment"])) {
            // Get the comment text from the form
            $commentText = $_POST["comment"];
            $sql = "SELECT * FROM comments WHERE text ='$commentText'";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                echo "<center>Такой комментарий уже существует</center><br>";
            } else {
                $commentatorname = $_SESSION["name"];
                //echo $commentatorname;
                $sql = "SELECT id FROM users WHERE name='$commentatorname'";
                //echo $sql;

                $commid = $conn->query($sql);
                
                if($commid->num_rows < 1) {
                    echo "<center>Сначала вам нужно войти в аккаунт!</center>";
                }
                else {
                    $userId = $commid->fetch_assoc()["id"];
                    $sql = "INSERT INTO comments (text, user_id) VALUES ('$commentText', '$userId')";
                    if ($conn->query($sql) === true) {
                    //echo "Comment added successfully.";
                    } 
                    else {
                        echo "Error: " . $sql . "<br>" . $conn->error;
                    }
                }
            }
        }
        
        // SQL query to retrieve comments with author information
        $sql = "SELECT comments.text, users.name AS author
        FROM comments
        JOIN users ON comments.user_id = users.id";

        $result = $conn->query($sql);

        // Check if there are any results
        if ($result->num_rows > 0) {
            // Output data for each row
            echo "<br>";
            while ($row = $result->fetch_assoc()) {
                echo "" . $row["author"] . ": " . $row["text"] . "<br><br>";
            }
        } else {
            echo "No comments found.";
        }
        ?>
    </div>
    <div class="text">
        <h2>РПГ Мистические сервера Майнкрафт – Маус мун</h2>
        Добро пожаловать на сервер Mouse Moon – уникальное место, где вы сможете погрузиться в захватывающие приключения в мире Майнкрафт. Наш сервер предлагает РПГ элементы, мистическую атмосферу и возможность получить бесплатный донат.
        <h2>РПГ Сервера Майнкрафт</h2>
        Маус Мун – это один из лучших рпг серверов в Майнкрафте, где вы сможете испытать настоящую жизнь в виртуальном мире. У нас вы найдете уникальные квесты, захватывающие истории и возможность создать своего персонажа и прокачать его навыки.
        <h2>Мистические Сервера Майнкрафт</h2>
        Мы также предлагаем мистические, магические сервера Minecraft, где вы сможете исследовать загадочные места. Вы можете столкнуться с магическими существами и раскрыть тайны древних артефактов. Найдите свое призвание в мире мистики и волшебства на сервере Mouse Moon.
        <h2>Сервера Майнкрафт с Бесплатным Донатом</h2>
        Наши сервера Minecraft также известны своим бесплатным донатом. Мы ценим наших игроков и хотим, чтобы каждый имел равные возможности для развития. Поэтому мы предоставляем бесплатный донат, который позволяет получить дополнительные преимущества и ресурсы.
        <h2>Сервера для Тренировки Строительства в Майнкрафт</h2>
        Если вы ищете бесплатные сервера Minecraft, где вы сможете свободно развиваться и осваивать новые навыки, Mouse Moon – идеальное место для вас. Мы предлагаем сервера для тренировки строительства в Minecraft, где вы сможете стать настоящими мастерами в создании удивительных сооружений.
        <h2>Пиратские Сервера Майнкрафт</h2>
        Пиратские сервера Minecraft – это еще один аспект Маус Мун. Мы понимаем, что каждый игрок имеет свои предпочтения. Именно поэтому мы предлагаем пиратские сервера для тех, кто хочет зайти в игру с пиратской версии
        <h2>Аниме Сервера Майнкрафт</h2>
        И наконец, аниме сервера Minecraft. Mouse Moon рад приветствовать фанатов аниме. Мы создали специальные сервера, которые погружают вас в увлекательный мир японской анимации. Играйте в Minecraft, наслаждайтесь аниме-стилем и общайтесь с единомышленниками на сервере Mouse Moon.
        <h2><p>Сервера Майнкрафт с магией</p></h2>
        <p>Если сервера Майнкрафт и магия это то что вас интересует, MM - лучший сервер. Магические предметы, мобы и способности. Качественные модификации и перевод на русский</p>
        <h2>Сервера Майнкрафт 1 20 1</h2>
        Присоединяйтесь к серверу Mouse Moon на версии Майнкрафт 1.20 1 и откройте для себя удивительные рпг сервера, мистические приключения, бесплатный донат, бесплатные сервера Minecraft для тренировки строительства, пиратские сервера Minecraft и аниме сервера Minecraft. Вас ждет мир увлекательных возможностей и незабываемых приключений.
        <h2>Приватный Сервер Майнкрафт с Модами</h2>
        <p>Наш проект создан для захватывающих приключений в мире Minecraft в кругу дружелюбного сообщества. Здесь вы окунетесь в увлекательный мир, полный испытаний, в котором будете сражаться вместе с другими игроками, среди которых можно найти настоящих друзей.
Mouse Moon - это сервер, на котором вы полностью погрузитесь в игровой процесс и насладитесь атмосферой и интересным геймплеем. Увеличенная скорость появления мобов, широкий ассортимент рисунков, отсутствие каких-либо ограничений и множество различного авторского контента - все это улучшает игровой опыт, сохраняя ванильный стиль.
Посмотрите на знакомый мир Minecraft с новой стороны: переработанная генерация всех измерений, которые заполнены большим количеством новых подземелий и биомов, каждый из которых имеет захватывающую историю, уникальных мобов и добычу; целая библиотека новых зачарований, гармонично сочетающихся с ванильным геймплеем и добавляющих новые возможности и направления для вашего развития; мобы с уровнями, которые будут зависеть от их способностей и сложности противостояния им. Мы улучшили каждый аспект игры, чтобы сделать ее более динамичной.
Кроме того, у нас есть замечательные магические RPG моды, которые добавляют в игру новые элементы и возможности. Они позволят вам погрузиться в увлекательный мир магии и приключений, расширяя ваши возможности и создавая новые способы развития вашего персонажа.
Присоединяйтесь к нам, и вы откроете для себя невероятно веселый игровой опыт в Minecraft, где вас ждут увлекательные приключения, дружелюбное сообщество и возможность создать настоящих друзей!</p>
    </div>
	<div class="coolimage">
	<a href="test.php"><h3>Галерея Нашего Проекта</h3></a>
	<p>Здесь будут публиковаться различые скриншоты и любое творчество, созданное игроками нашего проекта, и опубликованное на Discord сервере</p>
	<img class='imagesize' src="image1.png" style="border-radius: 25px; padding-top: 0.5%;" alt="Аниме Сервера Майнкрафт" />
	</div>
	<div class='footer'>
	<p>Copyright © Mouse Earth 2022</p>
	
	<p>Not an official Minecraft product. We are in no way affiliated with or endorsed by Mojang Synergies AB, Microsoft Corporation or other rightsholders.</p>
	<p><a href="https://craft-hosting.ru">Наш хостинг</a></p>
	 <div itemscope="" itemtype="http://schema.org/Organization">
  <span itemprop="name">Mouse Moon</span>   Контакты:
  <div itemprop="address" itemscope="" itemtype="http://schema.org/PostalAddress">     Адрес:
    <span itemprop="streetAddress">ул. Первомайская, 10</span>
    <span itemprop="postalCode"> 119021</span>
    <span itemprop="addressLocality">Москва</span>,
  </div>   Email: <span itemprop="email">qwertyuiop00110010@gmail.com</span>
</div>
	</div>
   
</body>
</html>
