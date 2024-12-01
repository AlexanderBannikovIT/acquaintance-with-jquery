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
        .container_puzzles{
            height:100vh;
        }
    </style>
    <div class="container_puzzles">
        <img src="./images/puzzle1.jpg" alt="">
        <img src="./images/puzzle2.jpg" alt="">
        <img src="./images/puzzle3.jpg" alt="">
        <img src="./images/puzzle4.jpg" alt="">
        <img src="./images/puzzle5.jpg" alt="">
        <img src="./images/puzzle6.jpg" alt="">
        <img src="./images/puzzle7.jpg" alt="">
        <img src="./images/puzzle8.jpg" alt="">
        <img src="./images/puzzle9.jpg" alt="">
        <img src="./images/puzzle10.jpg" alt="">
    </div>
    <script>
        $(document).ready(function(){
            $("container_puzzles").droppable();
            $("img").draggable();
        })
    </script>
</body>
</html>