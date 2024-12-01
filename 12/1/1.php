<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.min.js"></script>
    <link href="https://code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css" rel="stylesheet" type="text/css" />
</head>
<body>
    <style>
        .moveMe{
            background: grey;
            padding: 10px;
            border-radius: 20px;
            width: 20vw;
            text-align: center;
        }
    </style>
    <div class="moveMe">Перемести меня</div>
    <ul>
        <li>Пункт Списка1</li>
        <li>Пункт Списка2</li>
        <li>Пункт Списка3</li>
        <li>Пункт Списка4</li>
        <li>Пункт Списка5</li>
    </ul>
    <input type="text" name="" id="">

</body>
        <script>
           $(document).ready(function(){
            $(".moveMe").draggable({axis:"x"});
            $(".moveMe").draggable({cursor:"move"});
            $(".moveMe").draggable({revert:true});
            $("ul").sortable({
                containment:"parent",
                axis:"y"
            })
            $("input").datepicker();
           }); 
        </script>
</html>