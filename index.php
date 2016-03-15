<?php
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8">
     <link rel="stylesheet" href="css/style.css" type="text/css">
    <script type="text/javascript" src="js/main.js"></script>
    <title>Soundboard</title>
    <script src="script/soundmanager2.js"></script>
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <script type="text/javascript" src="js/360player.js"></script>
    <script type="text/javascript">
        soundManager.setup({
            // path to directory containing SM2 SWF
            url: '/swf/'
        });
    </script>
</head>
    <body>
    <div class="row">
        <div class="col-sm-4" style="text-align: center; margin-top: 3%">
            <a href="music/Cartoon_Cowbell.mp3" class="myButton">bell</a>
        </div>
        <div class="col-sm-4" style="text-align: center; margin-top: 3%">
            <a href="music/Cartoon_Boing.mp3" class="myButton">Boing</a>
        </div>
        <div class="col-sm-4" style="text-align: center; margin-top: 3%">
            <a href="music/Clang_and_wobble.mp3" class="myButton">Clang</a>
        </div>
    </div>
</body>
</html>
