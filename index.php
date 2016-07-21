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
        
        <!--Litebox-->
        <link rel="stylesheet" href="/css/lightbox.min.css">
        
        <!--Slider-->
        <script type="text/javascript" src="js/jquery-1.11.3.min.js"></script>
        <script type="text/javascript" src="js/jssor.slider.mini.js"></script>
        <script type="text/javascript" src="js/jssor.params.js"></script>
        <link rel="stylesheet" href="/css/jssor.css">        
    </head> 
    
    <!--Location data-->
    <?php
        if (include("/res/moc_data.php"))
            include("/res/moc_data.php");
        else
        $moc_loc_s1 = $moc_loc_s2 = $moc_loc_s3a = $moc_loc_s3b = $moc_loc_s4 = $moc_loc_s5 = $moc_loc_s6 = "(Internet connection needed)";
    ?>
    
    <body>        
        <div id="content" class="moc-sandbox">            
            <div class="moc-platform">
                <div class="moc-top">                    
                    <?php include ('/res/moc_header.php'); ?>
                </div>
                
                <!--MOC MID-->
                <div id="randomdiv" class="moc-mid">                    
                    <!--AD BANNER-->
                    <?php include ('/res/moc_banner.php'); ?>
                    
                    <!--CANVAS-->
                    <?php include ('/res/moc_canvas.php'); ?>
                </div>
                <div class="moc-bot"></div>
            </div>
        </div>

        <!-- Lightbox-->
        <script src="/js/lightbox-plus-jquery.min.js"></script>

        <!--AJAX Refresher-->
        <script>
            $(function() {
              $("#refresh").click(function(evt) {
                 $("#randomdiv").load("index.php")
                 evt.preventDefault();
              })
            })
        </script>

        <!--Cookie-->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script src="http://cdn.jsdelivr.net/jquery.cookie/1.4.0/jquery.cookie.min.js"></script>

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