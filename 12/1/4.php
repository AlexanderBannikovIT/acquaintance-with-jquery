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
<ul>
        <li>Пункт Списка1</li>
        <li>Пункт Списка2</li>
        <li>Пункт Списка3</li>
        <li>Пункт Списка4</li>
        <li>Пункт Списка5</li>
    </ul>
</body>
<script>
    $(document).ready(function(){
        $("ul").sortable({
                containment:"parent",
                axis:"y"
            });
    })
</script>
</html>