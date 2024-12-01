<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.min.js"></script>
    <link href="https://code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css" rel="stylesheet">
</head>
    <style>
        .sweet{
            background: red;
            color:white;
            padding: 10px;
            width: 8vw;
        }
        .fruit{
            background: orange;
            color:white;
            padding: 10px;
            width: 8vw;
        }
        .vegetable{
            background: green;
            color:white;
            padding: 10px;
            width: 8vw;
        }

        #dropFruits{
            margin-left: 25%;
            background: orange;
            color:white;
            padding: 10px;
            font-size: 24px;
            width: 15vw;
        }
        #dropVegetables{
            margin-left: 50%;
            background: orange;
            color:white;
            padding: 10px;
            font-size: 24px;
            width: 15vw;
        }
    </style>
<body>
    <div class="sweet" >Пирожное</div>
    <div class="sweet" >Торт</div>
    <div class="fruit" id="apple">Яблоко</div>
    <div class="fruit" id="pear">Груша</div>
    <div class="vegetable" id="cucumber">Огурец</div>
    <div class="vegetable" id="tomato">Помидор</div>
    <div id="dropFruits">Фрукты</div>
    <div id="dropVegetables">Овощи</div>
</body>
    <script>
        $(document).ready(function(){
            $("#dropFruits").droppable({
                accept:".fruit",
                drop: function (event, ui) {
                    $(ui.draggable).fadeOut();
                }
            });
            $("#dropVegetables").droppable({
                accept:".vegetable",
                drop: function (event, ui) {
                    $(ui.draggable).fadeOut();
                }
            });
            $(".fruit, .vegetable, .sweet").draggable({
                revert: "invalid"
            });
        })
    </script>
</html>