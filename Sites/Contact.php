<!doctype html>

<html lang="en-US">
    <title>Contact</title>
    <meta charset="utf-8" width=device-width initial-scale=1.0>
    <head>
    <link href="../site.css" type="text/css" rel="stylesheet">
    </head>

    <body>
         <?php include '../side-menu.php';?>
        <div class="two">
        <h1>CONTACT</h1>
            <p>Contact us here at : projet_x@gmail.com or visit our site at <br /> www.binaryZambia.co.zm <br /> P.O. Box 33377 Westwood, Lusaka 2nd Street <br /> Cell : +260 977 XXX XXX <br /> +260 955 XXX XXX <br /> +260 966 XXX XXX </p>  
            
            <!--Google Maps Code that I do not know how to write -->
            <div id="map" style="width:100%;height:500px"></div>

            <script>    
                function myMap() {
                var mapCanvas = document.getElementById("map");
                var mapOptions = {
                center: new google.maps.LatLng(51.508742,-0.120850),
                zoom: 5
            };
                var map = new google.maps.Map(mapCanvas, mapOptions);
                }
            </script>

            <script src="https://maps.googleapis.com/maps/api/js?callback=myMap"></script>
                        
        </div>
    </body>
</html>