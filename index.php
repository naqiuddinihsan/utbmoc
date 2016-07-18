<!DOCTYPE html>
<html>
    <head>
        <title>UMO Checklist</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="style.css" />        
        <link href="https://fonts.googleapis.com/css?family=Roboto:300" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
        <link rel="icon" href="https://www.gstatic.com/images/branding/product/ico/google_fonts_lodp.ico" type="image/x-icon">
    </head>
    <body>
        <div class="scp-dash">
            <div class="scp-top">
                <div class="scp-hdr">
                    <a href="#">
                    <h2>UMO<span>Checklist</span></h2>
                    </a>
                </div>
            </div>
            <div class="scp-mid">
                
                <!--FEED-->
                <div class="scp-feed">
                    <div id="xcore" class="scp-post">
                        <p>magic</p>
                    </div>
                    <div class="scp-post">
                        <h3>Variable Push</h3>
                        <p id="varo">(if it works, this chould change)</p>
                        <button onclick="push()">Push</button>                        
                        
                        <script type="text/javascript">
                            var varo = document.getElementById("varo");
                            var xcore = document.getElementById("xcore");

                            
                            var scppost = "";
                            
                            function push() {
                                varo.innerHTML = "It works!";
                                xcore.innerHTML = "<h3>Title</h3><p>Notification?</p>";
                            }
                        </script>
                    </div>
                    
                    
                                
                    <div class="scp-post">
                        <h3>Geolocation Fetch</h3>
                        <p id="demo"></p>
                        <p>
                            <button onclick="getLocation()">Get Location</button>


                            <script>
                            var x = document.getElementById("demo");

                            function getLocation() {
                                if (navigator.geolocation) {
                                    navigator.geolocation.getCurrentPosition(showPosition);
                                } else {
                                    x.innerHTML = "Geolocation is not supported by this browser.";
                                }
                            }

                            function showPosition(position) {
                                x.innerHTML = "Latitude: " + position.coords.latitude +
                                "<br>Longitude: " + position.coords.longitude;
                            }
                            </script>
                        </p>
                    </div>
            
                <div class="scp-post">
                    <h3>Photo fetch</h3>
                    <p>
                        <input type="file" capture="camera" accept="image/*" id="cameraInput" name="cameraInput">
                    </p>


                </div>
            
                <div class="scp-post">
                    <h3>Title</h3>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                </div>

                <div class="scp-post">
                    <h3>Title</h3>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                </div>
                <!--END FEED-->
            </div>
<!--            <div class="scp-btm"></div>-->
        </div>
    </body>
</html>