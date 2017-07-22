<!DOCTYPE html>
<html manifest="utbmoc.manifest">
<!--<html>-->
    <head>
        <title>Checklist</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <link rel="stylesheet" href="style.css" />        
        <link href="https://fonts.googleapis.com/css?family=Maven+Pro:400,900" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Roboto:400,900" rel="stylesheet">
        
        <!--Cosmetic-->
        <link rel="icon" href="favicon.ico" type="image/x-icon">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <link rel="apple-touch-icon" href="touch-icon-iphone-retina.png">
        <meta name="apple-mobile-web-app-status-bar-style" content="white">
        
        <!--Slider-->
        <script type="text/javascript" src="js/jquery-1.11.3.min.js"></script>
        <script type="text/javascript" src="js/jssor.slider.mini.js"></script>
        <script type="text/javascript" src="js/jssor.params.js"></script>
        <link rel="stylesheet" href="css/jssor.css">        
    </head> 
    
    <!--Location data-->
    <?php
        error_reporting(0);
        if (include("res/moc_data.php"))
            include("res/moc_data.php");
        else
        $moc_loc_s1 = $moc_loc_s2 = $moc_loc_s3a = $moc_loc_s3b = $moc_loc_s4 = $moc_loc_s5 = $moc_loc_s6 = "(Internet connection needed)";
    ?>
    
    <body>        
        <div id="content" class="moc-sandbox">            
            <div class="moc-platform">
                <div class="moc-top">                    
                    <div class="moc-header">                        
                        <a href="#">
                            <h2>                            
                                <img src="touch-icon-iphone-retina.png" alt="MO"/> Checklist
                            </h2>
                        </a>
                    </div>
                </div>
                
                <!--MOC MID (Page Content)-->
                <!--MOC MID-->
                <div id="randomdiv" class="moc-mid">                    
                    <!--AD BANNER-->
                    <!--CANVAS-->
                    <div class="moc-canvas"> 
                    <?php
                    if (empty($_POST["nav"]))
                        $nav = "";
                    else
                        $nav = $_POST["nav"];            

                    switch($nav) {
                        case "":
                            include("mocp-main.php");
                            break;
                        case "Map":
                            include("mocp-map.php");
                            break;
                        default:
                            include("mocp-main.php");
                    }

                    ?>
                        
                    <div class="moc-copyright">
                        <a href="http://www.qwamii.com">
                            <div class="moc-copyright-ihsan"></div>
                        </a>
                        <a href="http://domainbn.tumblr.com">
                            <div class="moc-copyright-domain"></div>
                        </a>
                    </div>

                    <div class="moc-hint moc-disclaimer">
                        <p>Disclaimer: This app is not affiliated directly with Universiti Teknologi Brunei. This app is only intended to help as a reference and a simple checklist for students during <em>Minggu Orientasi 2017</em>.</p>
                    </div>
                        
                    </div>
                </div>
                
                <!--NAV-->
                <div class="moc-bot">
                    <div class="moc-navholder">
                        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                            <button name="nav" value="">Checklist</button>
                            <button name="nav" value="Map">Map</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        
        <!--Cookie-->
        <script src="js/jquery.min.js"></script>
        <script src="js/jquery.cookie.min.js"></script>

        <script>
          $("#checkAll").on("change", function() {
            $(':checkbox').not(this).prop('checked', this.checked);
          });

          $(":checkbox").on("change", function(){
            var checkboxValues = {};
            $(":checkbox").each(function(){
              checkboxValues[this.id] = this.checked;
            });
            $.cookie('checkboxValues', checkboxValues, { expires: 7, path: '/' })
          });

          function repopulateCheckboxes(){
            var checkboxValues = $.cookie('checkboxValues');
            if(checkboxValues){
              Object.keys(checkboxValues).forEach(function(element) {
                var checked = checkboxValues[element];
                $("#" + element).prop('checked', checked);
              });
            }
          }

          $.cookie.json = true;
          repopulateCheckboxes();
        </script>

        <!--Overscroll fix-->
        <script>            
            $('body').on('touchmove', selScrollable, function(e) {
                // Only block default if internal div contents are large enough to scroll
                // Warning: scrollHeight support is not universal. (http://stackoverflow.com/a/15033226/40352)
                if($(this)[0].scrollHeight > $(this).innerHeight()) {
                    e.stopPropagation();
                }
            });
        </script>
    </body>
    
</html>
