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
    <script type="text/javascript" src="js/360player.js"></script>
    <script type="text/javascript">
        soundManager.setup({
            // path to directory containing SM2 SWF
            url: '/swf/'
        });
    </script>
</head>
    <body>

<div class="ui360">
    <div class="ui">
        <canvas class="sm2-canvas"></canvas>
        <span class="sm2-360btn"></span>
        <div class="sm2-timing"></div>
        <div class="sm2-cover"></div>
    </div>
    <a href="music/Cartoon_Boing.mp3"><button>Boing</button></a>
    <a href="music/Cartoon_Cowbell.mp3"><button>Bell</button></a>
    <a href="music/Clang_and_wobble.mp3"><button>Wobble
        </button></a>
</div>

</body>
</html>
