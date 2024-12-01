<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Автодополнение jQuery</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <style>
        #autocomplete {
            width: 300px;
        }
    </style>
</head>
<body>
    <input id="autocomplete" placeholder="Введите фрукт например банан">

    <script>
        $(document).ready(function() {
            $("#autocomplete").autocomplete({
                source: ["ананас", "банан", "вишня", "груша"],
                minLength:3
            });
        });
    </script>
</body>
</html>

