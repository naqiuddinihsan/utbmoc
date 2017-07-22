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
        
        <!--Smooth scroll-->
        <script type="text/javascript">
            // Select all links with hashes
            $('a[href*="#"]')
              // Remove links that don't actually link to anything
              .not('[href="#"]')
              .not('[href="#0"]')
              .click(function(event) {
                // On-page links
                if (
                  location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') 
                  && 
                  location.hostname == this.hostname
                ) {
                  // Figure out element to scroll to
                  var target = $(this.hash);
                  target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                  // Does a scroll target exist?
                  if (target.length) {
                    // Only prevent default if animation is actually gonna happen
                    event.preventDefault();
                    $('html, body').animate({
                      scrollTop: target.offset().top
                    }, 1000, function() {
                      // Callback after animation
                      // Must change focus!
                      var $target = $(target);
                      $target.focus();
                      if ($target.is(":focus")) { // Checking if the target was focused
                        return false;
                      } else {
                        $target.attr('tabindex','-1'); // Adding tabindex for elements not focusable
                        $target.focus(); // Set focus again
                      };
                    });
                  }
                }
              });
        </script>
        
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
                            case "Checklist":
                                include("mocp-main.php");
                                $navsel_cl = "moc-btn-cl-sel";
                                $navsel_map = "moc-btn-maps";
                                break;
                            case "Map":
                                $navsel_cl = "moc-btn-cl";
                                $navsel_map = "moc-btn-maps-sel";
                                include("mocp-map.php");
                                break;
                            default:
                                $navsel_cl = "moc-navselected";
                                $navsel_map = "";
                                include("mocp-main.php");
                        } ?>

                        
                        <div class="moc-copyright">
                            <a href="http://www.instagram.com/qwamii">
                                <div class="moc-copyright-ihsan"></div>
                            </a>
                        </div>
                        <div class="moc-hint moc-disclaimer">
                            <p>Developed by <a href="http://behance.net/naqiuddinihsan">Naqiuddin Ihsan AMJ</a> &copy; 2017</p>
                            <br>
                            <p>Disclaimer: This app is not affiliated directly with Universiti Teknologi Brunei. This app is only intended to help as a reference and a simple checklist for students during <em>Minggu Orientasi 2017 [24-29 July 2017]</em>.</p>
                        </div>
                            
                        

                        </div>
                    </div>
                
                
                <!--NAV-->
                <div class="moc-bot">
                    <div class="moc-navholder">                        
                        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                            <button name="nav" value="Checklist" class="<?php echo $navsel_cl?>">Checklist</button>
                            <button name="nav" value="Map" class="<?php echo $navsel_map?>">Maps</button>                            
                        </form>
                    </div>
                </div>
                <!--END NAV-->
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
