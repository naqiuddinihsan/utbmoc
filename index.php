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
        <link rel="stylesheet" href="css/lightbox.min.css">
        
        <!--Slider-->
        <script type="text/javascript" src="js/jquery-1.11.3.min.js"></script>
        <script type="text/javascript" src="js/jssor.slider.mini.js"></script>
        <script type="text/javascript" src="js/jssor.params.js"></script>
        <link rel="stylesheet" href="css/jssor.css">        
    </head> 
    
    <!--Location data-->
    <?php
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
                
                <!--MOC MID-->
                <div id="randomdiv" class="moc-mid">                    
                    <!--AD BANNER-->                    
                    
                    <!--CANVAS-->
                    <div class="moc-canvas">                        
                        <div class="moc-post">
                            <ul>                                    
                                <!--STEP 1-->
                                <li>
                                    <div class="moc-step">
                                    <h4>
                                        <input type="checkbox" name="moc-step" value="step" id="moc-step1">
                                        <label for="moc-step1">STEP #1 - OPEN Bank Account</label>
                                    </h4>
                                    <h5><div class="moc-ico ico-loc"></div><?php echo $moc_loc_s1;?></h5>
                                    <p>For allowance purposes (applicable to Government Scholarship students only), if you do not have a Bank Account, please go to a bank and open up a new account.</p>
                                    <p>If you already have a Bank account <b>OR</b> a Non-government Student, please proceed to <u>Step 2</u></p>
                                    </div>
                                </li>


                                <!--STEP 2-->    
                                <li>
                                    <div class="moc-step">
                                    <h4>
                                        <input type="checkbox" name="moc-step" value="step" id="moc-step2">
                                        <label for="moc-step2">STEP #2 - GET Insurance</label>
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
                                        <label for="moc-step3a">STEP #3A - CREATE Student ID</label>
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
                                        <label for="moc-step3b">STEP #3B - REGISTER Course</label>
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
                                            <label for="moc-step4">STEP #4 - PAY Fees</label>
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
                                            <label for="moc-step5">STEP #5 - COLLECT Orientation Pack</label>
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
                                        <label for="moc-step6">STEP #6 - VISIT CCA Booths</label>
                                    </h4>
                                    <h5><div class="moc-ico ico-loc"></div><?php echo $moc_loc_s6;?></h5>
                                    <p>Head over to the Silver Jubilee Court and enjoy some astonishing performances from our clubs prepared just for you! Don't forget to sign up for your favorite clubs as well. See you there!</p>
                                    </div>
                                </li>
                            </ul>
                            <div class="moc-copyright-ihsan"></div>
                        </div>                    
                    </div>
                </div>
                <div class="moc-bot"></div>
            </div>
        </div>

        <!-- Lightbox-->
        <script src="js/lightbox-plus-jquery.min.js"></script>

        <!--Cookie-->
<!--
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script src="http://cdn.jsdelivr.net/jquery.cookie/1.4.0/jquery.cookie.min.js"></script>
-->
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