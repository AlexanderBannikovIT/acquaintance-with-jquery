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
    p{
        width: 20vw;
        padding: 10px;
        background:grey;
    }
</style>
<body>
    <p id="p1">element1</p>
    <p id="p2">element2</p>
</body>
<script>
    $(document).ready(function(){
        $("#p1").draggable({
            cursor:"move"
        })
        $("#p2").draggable({
            cursor:"help"
        })
    })
</script>
</html>