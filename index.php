<!DOCTYPE html>
<!--<html manifest="utbmoc.manifest">-->
<html>
    <head>
        <title>MO Checklist</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <link rel="stylesheet" href="style.css" />        
        <link href="https://fonts.googleapis.com/css?family=Maven+Pro:400,900" rel="stylesheet">
        
        <!--Cosmetic-->
        <link rel="icon" href="http://www.utb.edu.bn/favicon.ico" type="image/x-icon">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <link rel="apple-touch-icon" href="touch-icon-iphone-retina.png">
        
        <!--Db-->
        <script src="https://utbmoc.herokuapp.com/pouchdb/5.4.5/pouchdb.min.js"></script>
        <script>
          var db = new PouchDB('my_database');
        </script>
        
    </head>
    <body>
        <div class="moc-sandbox">
            <div class="moc-platform">
                <div class="moc-top">
                    <div class="moc-header">
                        <h2>MO Checklist</h2>
                    </div>
                </div>
                <div class="moc-mid">
                    <div class="moc-banner">
                        <p>Hi! This app will guide you through the process 😀</p>
                        <a href="https://www.dropbox.com/s/f6h3dbvdukyfajl/utbmo2k16_ow_d1.pdf?dl=0">PDF Link (900kB)</a>
                        <input type="text"> Test Box
                    </div>
                    <div class="moc-canvas">
                        <div class="moc-post">
                            <h3>&raquo; Day 1: </h3>
                            <p>
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
                                        
                                    
                                    
                                    <li>
                                        <div class="moc-step">
                                        <h4>
                                            <input type="checkbox" name="moc-step" value="step">
                                            STEP #1 - OPEN Bank Account
                                        </h4>
                                        <h5>Location: ???</h5>
                                        <p>For allowance purposes (applicable to Government Scholarship students only), if you do not have a Bank Account, please go to a bank and open up a new account</p>
                                        <p>If you already have a Bank account <b>OR</b> a Non-government Student, <br>please proceed to <b>Step 2</b></p>
                                        </div>
                                    </li>
                                        
                                        
                                        
                                    <li>
                                        <div class="moc-step">
                                        <h4>
                                            <input type="checkbox" name="moc-step" value="step">
                                            STEP #2 - GET Insurance
                                        </h4>
                                        <h5>Location: GF.30</h5>
                                        <p>All new students are advised to pay for insurance according to their Faculty/School before proceeding to <b>Step 3</b></p>
                                        
                                        <h5>Faculty of Engineering &raquo; Takaful Brunei Keluarga</h5>
                                        <h5>School of Business &amp; School of Computing and Informatics &raquo; Insurans Islam TAIB</h5>                                        
                                        </div>   
                                    </li>
                                        
                                        <li>
                                        <div class="moc-hint"
                                            <p><em>You may either complete STEP 3A or 3B in any order. However, you still have to complete both steps before proceeding to <b>Step 4</b></em></p>
                                        </div>
                                        </li>
                                        
                                    <li>
                                        <div class="moc-step">
                                        <h4>
                                            <input type="checkbox" name="moc-step" value="step">
                                            STEP #3A - CREATE Student ID
                                        </h4>
                                        <h5>Location: GF.31</h5>
                                        <p>To-bring:</p>
                                        <ul>                                            
                                            <li><input type="checkbox" name="moc-tobring3a" value="passphot"> Softcopy of passport-sized Photo</li>
                                        </ul>
                                        </div>
                                    </li>
                                        
                                        
                                        
                                        
                                        
                                    <li>
                                        <div class="moc-step">
                                        <h4>
                                            <input type="checkbox" name="moc-step" value="step">
                                            STEP #3B - REGISTER Course
                                        </h4>
                                        <h5>Location: Teratak Putih</h5>
                                        <p>To-bring:</p>
                                        <ul>
                                            <li><input type="checkbox" name="moc-tobring3b" value="tobring"> <em>Photocopy</em> of Offer Letter</li>
                                            <li><input type="checkbox" name="moc-tobring3b" value="tobring"> Two (2x) Passport-sized photo</li>
                                            <li><input type="checkbox" name="moc-tobring3b" value="tobring"> Two (2x) copies of ID Card</li>
                                            <li><input type="checkbox" name="moc-tobring3b" value="tobring"> Insurance receipt</li>
                                            <li><input type="checkbox" name="moc-tobring3b" value="tobring"> <em>Photocopy</em> of bank account details</li>
                                        </ul>
                                        </div>
                                    </li>
                                        
                                    <li>
                                        <div class="moc-step">
                                        <h4>
                                            <input type="checkbox" name="moc-step" value="step">
                                            STEP #4 - PAY Fees
                                        </h4>
                                        <h5>Location: GF.27/28 &amp; GF.29</h5>
                                        <p>To bring:</p>
                                        <ul>
                                            <li><input type="checkbox" name="moc-tobring4" value="tobring"> IC</li>
                                            <li><input type="checkbox" name="moc-tobring4" value="tobring"> Offer letter</li>
                                            <li><input type="checkbox" name="moc-tobring4" value="tobring"> Money (Cash-in-hand)</li>       
                                        </ul>
                                        </div>
                                    </li>
                                        
                                    <li>
                                        <div class="moc-step">
                                        <h4>
                                            <input type="checkbox" name="moc-step" value="step">
                                            STEP #5 - COLLECT Orientation Pack
                                        </h4>
                                        <h5>Location: Concourse Hall</h5>
                                        <p>To bring/submit:</p>
                                        <ul>
                                            <li>
                                                <input type="checkbox" name="moc-step" value="step"> *Payment receipt (from <b>Step 4</b>)
                                            </li>
                                        </ul>
                                        
                                        <p>Inside the orientation pack, you should have:</p>
                                        <ol>
                                            <li>
                                                <input type="checkbox" name="moc-op" value="shirt">
                                                Official UTB Shirt
                                            </li>
                                            <li>
                                                <input type="checkbox" name="moc-op" value="shirt">
                                                Rumpun UTB Shirt
                                            </li>
                                            <li>
                                                <input type="checkbox" name="moc-op" value="shirt">
                                                UTB Badge
                                            </li>
                                            <li>
                                                <input type="checkbox" name="moc-op" value="shirt">
                                                UTB String bag
                                            </li>
                                            <li>
                                                <input type="checkbox" name="moc-op" value="shirt">
                                                Umbrella
                                            </li>
                                            <li>
                                                <input type="checkbox" name="moc-op" value="shirt">
                                                Pen
                                            </li>
                                            <li>
                                                <input type="checkbox" name="moc-op" value="shirt">
                                                UTB Lanyard
                                            </li>
                                            <li>
                                                <input type="checkbox" name="moc-op" value="shirt">
                                                UTB Notebook*
                                            </li>
                                            <li>
                                                <input type="checkbox" name="moc-op" value="shirt"> 
                                                Car shade
                                            </li>
                                        </ol>
                                        
                                        </div>
                                    </li>
                                        
                        
                        
                        
                                    <li>
                                        <div class="moc-step">
                                        <h4>
                                            <input type="checkbox" name="moc-step" value="step">
                                            STEP #6 - VISIT CCA Booths
                                        </h4>
                                        <h5>Location: Silver Jubilee Court</h5>
                                        <p>Head over to the Silver Jubilee Court and enjoy some astonishing performances from our clubs prepared just for you! Don't forget to sign up for your favorite clubs as well. See you there!</p>
                                        </div>
                                    </li>
                                </ul>
                            </p>
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
    </body>
</html>