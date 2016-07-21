<!DOCTYPE html>
<!--<html manifest="utbmoc.manifest">-->
<html>
    <head>
        <title>MO Checklist</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <link rel="stylesheet" href="style.css" />        
        <link href="https://fonts.googleapis.com/css?family=Maven+Pro:400,900" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Roboto:400,900" rel="stylesheet">
        
        <!--Cosmetic-->
        <link rel="icon" href="http://www.utb.edu.bn/favicon.ico" type="image/x-icon">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <link rel="apple-touch-icon" href="touch-icon-iphone-retina.png">
        <meta name="apple-mobile-web-app-status-bar-style" content="white">
        
        <!--Slider-->
        <script type="text/javascript" src="js/jquery-1.11.3.min.js"></script>
        <script type="text/javascript" src="js/jssor.slider.mini.js"></script>
        <script>
            jQuery(document).ready(function ($) {

                var jssor_1_SlideoTransitions = [
                  [{b:5500,d:3000,o:-1,r:240,e:{r:2}}],
                  [{b:-1,d:1,o:-1,c:{x:51.0,t:-51.0}},{b:0,d:1000,o:1,c:{x:-51.0,t:51.0},e:{o:7,c:{x:7,t:7}}}],
                  [{b:-1,d:1,o:-1,sX:9,sY:9},{b:1000,d:1000,o:1,sX:-9,sY:-9,e:{sX:2,sY:2}}],
                  [{b:-1,d:1,o:-1,r:-180,sX:9,sY:9},{b:2000,d:1000,o:1,r:180,sX:-9,sY:-9,e:{r:2,sX:2,sY:2}}],
                  [{b:-1,d:1,o:-1},{b:3000,d:2000,y:180,o:1,e:{y:16}}],
                  [{b:-1,d:1,o:-1,r:-150},{b:7500,d:1600,o:1,r:150,e:{r:3}}],
                  [{b:10000,d:2000,x:-379,e:{x:7}}],
                  [{b:10000,d:2000,x:-379,e:{x:7}}],
                  [{b:-1,d:1,o:-1,r:288,sX:9,sY:9},{b:9100,d:900,x:-1400,y:-660,o:1,r:-288,sX:-9,sY:-9,e:{r:6}},{b:10000,d:1600,x:-200,o:-1,e:{x:16}}]
                ];

                var jssor_1_options = {
                  $AutoPlay: true,
                  $SlideDuration: 800,
                  $SlideEasing: $Jease$.$OutQuint,
                  $CaptionSliderOptions: {
                    $Class: $JssorCaptionSlideo$,
                    $Transitions: jssor_1_SlideoTransitions
                  },
                  $ArrowNavigatorOptions: {
                    $Class: $JssorArrowNavigator$
                  },
                  $BulletNavigatorOptions: {
                    $Class: $JssorBulletNavigator$
                  }
                };

                var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);

                //responsive code begin
                //you can remove responsive code if you don't want the slider scales while window resizing
                function ScaleSlider() {
                    var refSize = jssor_1_slider.$Elmt.parentNode.clientWidth;
                    if (refSize) {
                        refSize = Math.min(refSize, 1920);
                        jssor_1_slider.$ScaleWidth(refSize);
                    }
                    else {
                        window.setTimeout(ScaleSlider, 30);
                    }
                }
                ScaleSlider();
                $(window).bind("load", ScaleSlider);
                $(window).bind("resize", ScaleSlider);
                $(window).bind("orientationchange", ScaleSlider);
                //responsive code end
            });
        </script>
        <link rel="stylesheet" href="/css/lightbox.min.css">
        
        <style>
            /* jssor slider bullet navigator skin 05 css */
            /*
            .jssorb05 div           (normal)
            .jssorb05 div:hover     (normal mouseover)
            .jssorb05 .av           (active)
            .jssorb05 .av:hover     (active mouseover)
            .jssorb05 .dn           (mousedown)
            */
            .jssorb05 {
                position: absolute;
            }
            .jssorb05 div, .jssorb05 div:hover, .jssorb05 .av {
                position: absolute;
                /* size of bullet elment */
                width: 16px;
                height: 16px;
                background: url('img/b05.png') no-repeat;
                overflow: hidden;
                cursor: pointer;
            }
            .jssorb05 div { background-position: -7px -7px; }
            .jssorb05 div:hover, .jssorb05 .av:hover { background-position: -37px -7px; }
            .jssorb05 .av { background-position: -67px -7px; }
            .jssorb05 .dn, .jssorb05 .dn:hover { background-position: -97px -7px; }

            /* jssor slider arrow navigator skin 22 css */
            /*
            .jssora22l                  (normal)
            .jssora22r                  (normal)
            .jssora22l:hover            (normal mouseover)
            .jssora22r:hover            (normal mouseover)
            .jssora22l.jssora22ldn      (mousedown)
            .jssora22r.jssora22rdn      (mousedown)
            */
            .jssora22l, .jssora22r {
                display: block;
                position: absolute;
                /* size of arrow element */
                width: 40px;
                height: 58px;
                cursor: pointer;
                background: url('img/a22.png') center center no-repeat;
                overflow: hidden;
            }
            .jssora22l { background-position: -10px -31px; }
            .jssora22r { background-position: -70px -31px; }
            .jssora22l:hover { background-position: -130px -31px; }
            .jssora22r:hover { background-position: -190px -31px; }
            .jssora22l.jssora22ldn { background-position: -250px -31px; }
            .jssora22r.jssora22rdn { background-position: -310px -31px; }
        </style>    
    </head>
    <?php
        if (include("moc_data.php"))
            include("moc_data.php");
        else
        $moc_loc_s1 = $moc_loc_s2 = $moc_loc_s3a = $moc_loc_s3b = $moc_loc_s4 = $moc_loc_s5 = $moc_loc_s6 = "(Internet connection needed)";
    ?>
    <body>
        <div class="moc-sandbox">
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
                <div class="moc-mid">
                    
                    <!--AD BANNER-->
                    <div class="moc-banner">                        
                        <div id="jssor_1" style="position: relative; margin: 0 auto; top: 0px; left: 0px; width: 1300px; height: 620px; overflow: hidden; visibility: hidden;">
                            <!-- Loading Screen -->
                            <div data-u="loading" style="position: absolute; top: 0px; left: 0px;">
                                <div style="filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block; top: 0px; left: 0px; width: 100%; height: 100%;"></div>
                                <div style="position:absolute;display:block;background:url('img/loading.gif') no-repeat center center;top:0px;left:0px;width:100%;height:100%;"></div>
                            </div>
                            
                            <!--SLIDES-->
                            <div data-u="slides" style="cursor: default; position: relative; top: 0px; left: 0px; width: 1300px; height: 620px; overflow: hidden;">
                                <div data-p="225.00" style="display: none;">
                                    <a href="http://pmutb.slack.com" target="_blank">
                                        <img data-u="image" src="img/UTBMOC_Banner_slack.jpg" />
                                    </a>
                                </div>                                
                                <div data-p="225.00" style="display: none;">                                    
                                        <img data-u="image" src="img/UTBMOC_Banner_help.jpg" />
                                </div>
                                <div data-p="225.00" style="display: none;">                                    
                                        <img data-u="image" src="img/UTBMOC_Banner_welcome.jpg" />
                                </div>
                                <div data-p="225.00" style="display: none;">
                                    <a href="img/UTBMOC_Banner_photocopy.jpg" data-lightbox="map">
                                        <img data-u="image" src="img/UTBMOC_Banner_photocopy.jpg" />
                                    </a>
                                </div>
                                <div data-p="225.00" style="display: none;">                                    
                                        <img data-u="image" src="img/UTBMOC_Banner_passphot.jpg" />
                                </div>
                                
                            </div>
                            <!-- Bullet Navigator -->
                            <div data-u="navigator" class="jssorb05" style="bottom:16px;right:16px;" data-autocenter="1">
                                <!-- bullet navigator item prototype -->
                                <div data-u="prototype" style="width:16px;height:16px;"></div>
                            </div>
                            <!-- Arrow Navigator -->
<!--
                            <span data-u="arrowleft" class="jssora22l" style="top:0px;left:12px;width:40px;height:58px;" data-autocenter="2"></span>
                            <span data-u="arrowright" class="jssora22r" style="top:0px;right:12px;width:40px;height:58px;" data-autocenter="2"></span>
-->
                        </div>  
                    </div>
                    
                    <!--CANVAS-->
                    <div class="moc-canvas">
                        <div class="moc-post">
                            <h3>&raquo; Day 1: Registration &laquo;</h3>
                                <ul>                                    
                                    <li>
<!--
                                        <div class="moc-step">
                                        <h4>
                                            <input type="checkbox" name="moc-step" value="step" checked="checked">
                                            STEP #0 - Come to Uni
                                        </h4>
                                        <p></p>
                                        </div>
-->
                                    </li>
                                        
                                    
                                    <!--STEP 1-->
                                    <li>
                                        <div class="moc-step">
                                        <h4>
                                            <input type="checkbox" name="moc-step" value="step" id="moc-step1">
                                            STEP #1 - OPEN Bank Account
                                        </h4>
                                        <h5><div class="moc-ico ico-loc"></div><?php echo $moc_loc_s1;?></h5>
                                        <p>For allowance purposes (applicable to Government Scholarship students only), if you do not have a Bank Account, please go to a bank and open up a new account</p>
                                        <p>If you already have a Bank account <b>OR</b> a Non-government Student, <br>please proceed to <u>Step 2</u></p>
                                        </div>
                                    </li>
                                        
                                        
                                    <!--STEP 2-->    
                                    <li>
                                        <div class="moc-step">
                                        <h4>
                                            <input type="checkbox" name="moc-step" value="step" id="moc-step2">
                                            STEP #2 - GET Insurance
                                        </h4>
                                        <h5><div class="moc-ico ico-loc"></div><?php echo $moc_loc_s2;?></h5>
                                        <p>All new students are advised to pay for insurance according to their Faculty/School before proceeding to <u>Step 3</u></p>
                                            <hr>
                                        <h6># Faculty of Engineering &raquo; Takaful Brunei Keluarga</h6>
                                        <h6># School of Business &amp; School of Computing and Informatics &raquo; Insurans Islam TAIB</h6>
                                        </div>   
                                    </li>
                                        
                                        <li>
                                        <div class="moc-hint"
                                            <p><em>You may either complete STEP 3A or 3B in any order. However, you still have to complete both steps before proceeding to <u>Step 4</u></em></p>
                                        </div>
                                        </li>
                                    
                                    <!--STEP 3a-->
                                    <li>
                                        <div class="moc-step">
                                        <h4>
                                            <input type="checkbox" name="moc-step" value="step" id="moc-step3a">
                                            STEP #3A - CREATE Student ID
                                        </h4>
                                        <h5><div class="moc-ico ico-loc"></div><?php echo $moc_loc_s3a;?></h5>
                                        <p>To bring:</p>
                                        <ul>                                            
                                            <li><input type="checkbox" name="moc-tobring3a" value="passphot" id="moc-s3a1"> 📷 Softcopy of passport-sized Photo</li>
                                        </ul>
                                        </div>
                                    </li>
                                        
                                    <!--STEP 3b-->    
                                    <li>
                                        <div class="moc-step">
                                        <h4>
                                            <input type="checkbox" name="moc-step" value="step" id="moc-step3b">
                                            STEP #3B - REGISTER Course
                                        </h4>
                                        <h5><div class="moc-ico ico-loc"></div><?php echo $moc_loc_s3b;?></h5>
                                        <p>To bring:</p>
                                        <ul>
                                            <li><input type="checkbox" name="moc-tobring3b" value="tobring" id="moc-s3b1"> 📄 Photocopy of Offer Letter</li>
                                            <li><input type="checkbox" name="moc-tobring3b" value="tobring" id="moc-s3b2"> 📷💿 Two (2x) Passport-sized photo AND CD containing softcopy</li>
                                            <li><input type="checkbox" name="moc-tobring3b" value="tobring" id="moc-s3b3"> 📑 Two (2x) copies of ID Card</li>
                                            <li><input type="checkbox" name="moc-tobring3b" value="tobring" id="moc-s3b4"> 🔖 Insurance receipt</li>
                                            <li><input type="checkbox" name="moc-tobring3b" value="tobring" id="moc-s3b5"> 📑 Photocopy of bank account details (for government scholarship students only)</li>
                                        </ul>
                                        </div>
                                    </li>
                                    
                                    <!--STEP 4-->
                                    <li>
                                        <div class="moc-step">
                                            <h4>
                                                <input type="checkbox" name="moc-step" value="step" id="moc-step4">
                                                STEP #4 - PAY Fees
                                            </h4>
                                            <h5><div class="moc-ico ico-loc"></div><?php echo $moc_loc_s4;?></h5>
                                            <p>To bring:</p>
                                            <ul>
                                                <li><input type="checkbox" name="moc-tobring4" value="tobring" id="moc-s41"> 🎫 IC</li>
                                                <li><input type="checkbox" name="moc-tobring4" value="tobring" id="moc-s42"> 📄 Offer letter</li>
                                                <li><input type="checkbox" name="moc-tobring4" value="tobring" id="moc-s43"> 💵 Money (Cash-in-hand)</li>       
                                            </ul>
                                            <hr>
                                            <p>What &amp; where to Pay:</p>
                                            <h6>ORIENTATION PACK ($80)</h6>
                                            <ul>
                                                <li># Applies to ALL Students (including fee paying students)</li>
                                                <li># Counter 1, 2 and 3</li>
                                            </ul>
                                            <h6>PMUTB Fund ($180 / $240)</h6>
                                            <ul>
                                                <li># Applies to non-part time Students</li>
                                                <li># Counter 1, 2 and 3</li>
                                            </ul>
                                            <h6>Fee Paying Students</h6>
                                            <ul>
                                                <li># Counter 4</li>
                                            </ul>
                                        </div>
                                    </li>
                                    
                    
                                    <!--STEP 5-->
                                    <li>
                                        <div class="moc-step">
                                            <h4>
                                                <input type="checkbox" name="moc-step" value="step" id="moc-step5">
                                                STEP #5 - COLLECT Orientation Pack
                                            </h4>
                                            <h5><div class="moc-ico ico-loc"></div><?php echo $moc_loc_s5;?></h5>
                                            <p>To bring/submit:</p>
                                            <ul>
                                                <li>
                                                    <input type="checkbox" name="moc-step" value="step" id="moc-51"> 
                                                    *🔖 Payment receipt (from <u>Step 4</u>)
                                                </li>
                                            </ul>

                                            <p>Inside the orientation pack, you should have:</p>
                                            <ol>
                                                <li>
                                                    <input type="checkbox" name="moc-op" value="shirt" id="moc-op1">
                                                    <div class="moc-gly ico-utbshirt"></div>Official UTB Shirt
                                                </li>
                                                <li>
                                                    <input type="checkbox" name="moc-op" value="shirt" id="moc-op2">
                                                    <div class="moc-gly ico-utbshirt"></div>Rumpun UTB Shirt
                                                </li>
                                                <li>
                                                    <input type="checkbox" name="moc-op" value="shirt" id="moc-op3">
                                                    <div class="moc-gly ico-utbshirt"></div>UTB Badge
                                                </li>
                                                <li>
                                                    <input type="checkbox" name="moc-op" value="shirt" id="moc-op4">
                                                    <div class="moc-gly ico-utbshirt"></div>UTB String bag
                                                </li>
                                                <li>
                                                    <input type="checkbox" name="moc-op" value="shirt" id="moc-op5">
                                                    <div class="moc-gly ico-utbshirt"></div>Umbrella
                                                </li>
                                                <li>
                                                    <input type="checkbox" name="moc-op" value="shirt" id="moc-op6">
                                                    <div class="moc-gly ico-utbshirt"></div>Pen
                                                </li>
                                                <li>
                                                    <input type="checkbox" name="moc-op" value="shirt" id="moc-op7">
                                                    <div class="moc-gly ico-utbshirt"></div>UTB Lanyard
                                                </li>
                                                <li>
                                                    <input type="checkbox" name="moc-op" value="shirt" id="moc-op8">
                                                    <div class="moc-gly ico-utbshirt"></div>UTB Notebook
                                                </li>
                                                <li>
                                                    <input type="checkbox" name="moc-op" value="shirt" id="moc-op9"> 
                                                    <div class="moc-gly ico-utbshirt"></div>Car shade
                                                </li>
                                            </ol>                                        
                                        </div>
                                    </li>
                    
                                    <!--STEP 6-->
                                    <li>
                                        <div class="moc-step">
                                        <h4>
                                            <input type="checkbox" name="moc-step" value="step" id="moc-step6">
                                            STEP #6 - VISIT CCA Booths
                                        </h4>
                                        <h5><div class="moc-ico ico-loc"></div><?php echo $moc_loc_s6;?></h5>
                                        <p>Head over to the Silver Jubilee Court and enjoy some astonishing performances from our clubs prepared just for you! Don't forget to sign up for your favorite clubs as well. See you there!</p>
                                        </div>
                                    </li>
                                </ul>
                        <center>
                            <a href="http://behance.net/naqiuddinihsan" target="_blank">
                                <img src="nqdi.png" alt="Naqiuddin Ihsan Amj" />
                            </a>
                        </center>
                        </div>                    
                    </div>
                </div>
                <div class="moc-bot"></div>
            </div>
        </div>

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
        <script>
            
            $('body').on('touchmove', selScrollable, function(e) {
                // Only block default if internal div contents are large enough to scroll
                // Warning: scrollHeight support is not universal. (http://stackoverflow.com/a/15033226/40352)
                if($(this)[0].scrollHeight > $(this).innerHeight()) {
                    e.stopPropagation();
                }
            });
        </script>
        <script src="/js/lightbox-plus-jquery.min.js"></script>
    </body>
</html>