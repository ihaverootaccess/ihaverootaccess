<!doctype html>

<html lang="en-US">
    <title>HTML%</title>
    <meta charset="utf-8" width=device-width initial-scale=1.0>
    <head>
    <link href="../site.css" type="text/css" rel="stylesheet">
    </head>

    <body>
        
       <?php include '../side-menu.php';?>
        <div class="two">
        <h1 id="demo">HTML5</h1>
            
        <script src="../site.js"></script>
        
        <button type="button" onclick="playAudio()">Play</button>        
        <button type="button" onclick="pauseAudio()">Pause</button>    
            
            <audio id="myAudio">
            <source src="../Pompi.mp3" type="audio/mpeg"> 
            </audio>
            
        </div>
    </body>
</html>