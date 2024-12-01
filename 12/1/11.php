<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
</head>
<style>
    .container {
        width: 200px;
        height: 200px;
        font-weight: 700;
        background: grey;
        margin-bottom: 10px;
    }

    .container__wrapper{
        display: flex;
        gap: 0 20px
    }
</style>
<body>
    <div class="container__wrapper">
    <div class="container" id="container1">Элемент 1</div>
    <div class="container" id="container2">Элемент 2</div>
    </div>
    <button type="button" id="but1">Применить эффекты 1</button>
    <button type="button" id="but2">Применить эффекты 2</button>
    <button type="button" id="but3">Применить эффекты 3</button>
</body>
<script>
    $(document).ready(function() {
        $("#but1").on("click", function() {
            $("#container1").effect("bounce",1000); 
            $("#container2").effect("pulsate", 1000); 
        });
        $("#but2").on("click", function() {
            $("#container1").effect("explode",1000); 
            $("#container2").effect("puff", 1000); 
        });
        $("#but3").on("click", function() {
            $("#container1").effect("slide",1000); 
            $("#container2").effect("drop", 1000);
        });
    });
</script>
</html>
