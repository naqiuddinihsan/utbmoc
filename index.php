<!DOCTYPE html>

<html manifest="utbmoc.manifest">
<!--<html>-->
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
<!--
                    <div class="moc-banner">
                        <p>Hi! This app will guide you through the process 😀</p>
                        <a href="https://www.dropbox.com/s/f6h3dbvdukyfajl/utbmo2k16_ow_d1.pdf?dl=0">PDF Link (900kB)</a>
                    </div>
-->
                    <div class="moc-canvas">
                        <div class="moc-post">
                            <h3>&raquo; Day 1: "UTB Starter Pack" &laquo;</h3>
                                <ul>                                    
                                    <li>
                                        <div class="moc-step">
                                        <h4>
                                            <input type="checkbox" name="moc-step" value="step" checked="checked">
                                            STEP #0 - Come to Uni
                                        </h4>
                                        <p></p>
                                        </div>
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
                                            <li><input type="checkbox" name="moc-tobring3a" value="passphot" id="moc-s3a1"> Softcopy of passport-sized Photo</li>
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
                                            <li><input type="checkbox" name="moc-tobring3b" value="tobring" id="moc-s3b1"> <em>Photocopy</em> of Offer Letter</li>
                                            <li><input type="checkbox" name="moc-tobring3b" value="tobring" id="moc-s3b2"> Two (2x) Passport-sized photo</li>
                                            <li><input type="checkbox" name="moc-tobring3b" value="tobring" id="moc-s3b3"> Two (2x) copies of ID Card</li>
                                            <li><input type="checkbox" name="moc-tobring3b" value="tobring" id="moc-s3b4"> Insurance receipt</li>
                                            <li><input type="checkbox" name="moc-tobring3b" value="tobring" id="moc-s3b5"> <em>Photocopy</em> of bank account details</li>
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
                                            <li><input type="checkbox" name="moc-tobring4" value="tobring" id="moc-s41"> IC</li>
                                            <li><input type="checkbox" name="moc-tobring4" value="tobring" id="moc-s42"> Offer letter</li>
                                            <li><input type="checkbox" name="moc-tobring4" value="tobring" id="moc-s43"> Money (Cash-in-hand)</li>       
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
                                                <input type="checkbox" name="moc-step" value="step" id="moc-51"> *Payment receipt (from <u>Step 4</u>)
                                            </li>
                                        </ul>
                                        
                                        <p>Inside the orientation pack, you should have:</p>
                                        <ol>
                                            <li>
                                                <input type="checkbox" name="moc-op" value="shirt" id="moc-op1">
                                                Official UTB Shirt
                                            </li>
                                            <li>
                                                <input type="checkbox" name="moc-op" value="shirt" id="moc-op2">
                                                Rumpun UTB Shirt
                                            </li>
                                            <li>
                                                <input type="checkbox" name="moc-op" value="shirt" id="moc-op3">
                                                UTB Badge
                                            </li>
                                            <li>
                                                <input type="checkbox" name="moc-op" value="shirt" id="moc-op4">
                                                UTB String bag
                                            </li>
                                            <li>
                                                <input type="checkbox" name="moc-op" value="shirt" id="moc-op5">
                                                Umbrella
                                            </li>
                                            <li>
                                                <input type="checkbox" name="moc-op" value="shirt" id="moc-op6">
                                                Pen
                                            </li>
                                            <li>
                                                <input type="checkbox" name="moc-op" value="shirt" id="moc-op7">
                                                UTB Lanyard
                                            </li>
                                            <li>
                                                <input type="checkbox" name="moc-op" value="shirt" id="moc-op8">
                                                UTB Notebook
                                            </li>
                                            <li>
                                                <input type="checkbox" name="moc-op" value="shirt" id="moc-op9"> 
                                                Car shade
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
                                <img src="nqdi.png" alt="Naqiuddin Ihsan Amj" />
                        </center>
                        </div>
                        
<!--
                        <div class="moc-post">
                            <h3>&raquo; Day 2</h3>
                            <p></p>
                        </div>
                        <div class="moc-post">
                            <h3>&raquo; Day 3</h3>
                            <p></p>
                        </div>
                        <div class="moc-post">
                            <h3>&raquo; Day 4</h3>
                            <p></p>
                        </div>
-->
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
    </body>
</html>