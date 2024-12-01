<html>
<head>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script type="text/javascript">
        $(document).ready(function(){
            $("#tabs").tabs();
        });
    </script>
</head>
<body>
<div id="tabs">
    <ul>
        <li><a href="#tabs-1">Медведь</a></li>
        <li><a href="#tabs-2">Лисица</a></li>
        <li><a href="#tabs-3">Тигр</a></li>
        <li><a href="#tabs-4">Волк</a></li>
    </ul>
    <div id="tabs-1">
        <p><b>Медведи</b> (<i>лат. Ursus</i>) — род млекопитающих отряда хищных.</p>
    </div>
    <div id="tabs-2">
        <p><b>Лисица</b> (<i>лат. Vulpes vulpes</i>) — хищное млекопитающее семейства псовых.</p>
    </div>
    <div id="tabs-3">
        <p><b>Тигр</b> (<i>лат. Panthera tigris</i>) — крупное хищное млекопитающее семейства кошачьих.</p>
    </div>
    <div id="tabs-4">
        <p><b>Волк</b> (<i>лат. Canis lupus</i>) — хищное млекопитающее семейства псовых.</p>
    </div>
</div>
</body>
</html>
