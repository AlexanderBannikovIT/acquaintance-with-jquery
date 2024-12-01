<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabs and Dialogs</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <style>
        #tabs {
            margin: 20px;
        }
        .dialogs div {
            display: none; 
        }
    </style>
</head>
<body>
    <div id="tabs">
        <ul>
            <li><a href="#tabs-1">Гидросфера</a></li>
            <li><a href="#tabs-2">Модальное окно</a></li>
            <li><a href="#tabs-3">Окно с кнопками</a></li>
        </ul>
        <div id="tabs-1">
            <button type="button" id="open-dialog-1">Открыть диалоговое окно 1</button>
        </div>
        <div id="tabs-2">
            <button type="button" id="open-dialog-2">Открыть диалоговое окно 2</button>
        </div>
        <div id="tabs-3">
            <button type="button" id="open-dialog-3">Открыть диалоговое окно 3</button>
        </div>
    </div>

    
    <div class="dialogs">
       
        <div id="dialog-1" title="Гидросфера">
            <p>Гидросфера — это водная оболочка Земли.</p>
        </div>

        
        <div id="dialog-2" title="Модальное окно">
            <p>Ноосфера- сфера взаимодействия общества и природы</p>
        </div>

      
        <div id="dialog-3" title="Биосфера">
            <p>Биосфера - это оболочка Земли заселенная живыми организмами</p>
        </div>
    </div>

    <script>
        $(document).ready(function () {
            
            $("#tabs").tabs();

         
            $("#dialog-1").dialog({
                modal: false, 
                width: 300,
                height: 200,
                autoOpen: false
            });

            $("#dialog-2").dialog({
                modal: true, 
                width: 300,
                height: 200,
                autoOpen: false
            });

            $("#dialog-3").dialog({
                modal: false, 
                width: 300,
                height: 200,
                autoOpen: false,
                buttons: {
                    "Ок": function () {
                        $(this).dialog("close"); 
                    },
                    "Отмена": function () {
                        $(this).dialog("close"); 
                    }
                }
            });

         
            $("#open-dialog-1").on("click", function () {
                $("#dialog-1").dialog("open");
            });

            $("#open-dialog-2").on("click", function () {
                $("#dialog-2").dialog("open");
            });

            $("#open-dialog-3").on("click", function () {
                $("#dialog-3").dialog("open");
            });
        });
    </script>
</body>
</html>
