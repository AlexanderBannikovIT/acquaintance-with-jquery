<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Draggable, Droppable, and Selectable List</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.min.js"></script>
    <link href="https://code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css" rel="stylesheet">
    <style>
        ul {
            list-style-type: none;
            padding: 0;
            margin: 0;
            width: 300px;
            border: 1px solid #ccc;
            background-color: #f9f9f9;
        }

        li {
            padding: 10px;
            margin: 5px 0;
            border: 1px solid #ccc;
            background-color: white;
            cursor: pointer;
        }

        .ui-selected {
            background-color: lightblue;
            color: white;
        }

        .droppable {
            background-color: #e6ffe6;
        }
    </style>
</head>
<body>
    <ul id="selectable">
        <li class="draggable droppable">Элемент списка 1</li>
        <li class="draggable droppable">Элемент списка 2</li>
        <li class="draggable droppable">Элемент списка 3</li>
        <li class="draggable droppable">Элемент списка 4</li>
        <li class="draggable droppable">Элемент списка 5</li>
    </ul>

    <script>
        $(document).ready(function () {
            $("#selectable").selectable();

            // Инициализация draggable
            $(".draggable").draggable({
                cursor: "move",
            });

            // Инициализация droppable
            $(".droppable").droppable({
                accept: ".draggable"
            });
        });
    </script>
</body>
</html>
