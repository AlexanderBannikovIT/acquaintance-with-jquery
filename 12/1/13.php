<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Пример сайта с jQuery UI</title>
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        #slider-value {
            font-weight: bold;
        }
        .content {
            padding: 10px;
        }
    </style>
    <script>
        $(function () {
            $("#tabs").tabs();

            $("#dialog").dialog({
                autoOpen: false,
                modal: true,
                buttons: {
                    Закрыть: function () {
                        $(this).dialog("close");
                    }
                }
            });

            $("#open-dialog").on("click", function () {
                $("#dialog").dialog("open");
            });

            $(document).ready(function() {
            $("#autocomplete").autocomplete({
                source: ["ананас", "банан", "вишня", "груша"],
                minLength:3
            });
        });

            $("#run-effect").on("click", function () {
                $("#effect-box").effect("bounce", { times: 3 }, 800);
            });
        });
    </script>
</head>
<body>
    <h1>Демонстрация возможностей jQuery UI</h1>

    <div id="tabs">
        <ul>
            <li><a href="#tabs-1">О нас</a></li>
            <li><a href="#tabs-2">Контакты</a></li>
            <li><a href="#tabs-3">Галерея</a></li>
        </ul>
        <div id="tabs-1" class="content">
            <p>Мы — небольшая команда, создающая интересные проекты с использованием современных технологий.</p>
        </div>
        <div id="tabs-2" class="content">
            <p>Свяжитесь с нами:</p>
            <p>Email: example@example.com</p>
            <p>Телефон: +7 123 456 78 90</p>
        </div>
        <div id="tabs-3" class="content">
            <p>Наша галерея:</p>
            <button id="open-dialog">Посмотреть изображение</button>
        </div>
    </div>

    <div id="dialog" title="Изображение">
        <img src="https://via.placeholder.com/300" alt="Пример изображения" style="width:100%;">
    </div>

    <input id="autocomplete" placeholder="Введите фрукт например банан" style = "margin-top:20px; height:50px; width:300px;">


    <h2>Эффект Bounce</h2>
    <div id="effect-box" style="width: 100px; height: 100px; background-color: lightblue; margin-bottom: 10px;"></div>
    <button id="run-effect">Запустить Bounce</button>
</body>
</html>
