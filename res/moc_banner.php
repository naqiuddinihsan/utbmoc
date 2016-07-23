<div class="moc-banner">
            <div id="jssor_1" style="position: relative; margin: 0 auto; top: 0px; left: 0px; width: 1300px; height: 620px; overflow: hidden; visibility: hidden;">
                <!-- Loading Screen -->
                <div data-u="loading" style="position: absolute; top: 0px; left: 0px;">
                    <div style="filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block; top: 0px; left: 0px; width: 100%; height: 100%;"></div>
                    <div style="position:absolute;display:block;background:url("img/loading.gif") no-repeat center center;top:0px;left:0px;width:100%;height:100%;"></div>
                </div>
            <div data-u="slides" style="cursor: default; position: relative; top: 0px; left: 0px; width: 1300px; height: 620px; overflow: hidden;">
<?php
                
                function moc_ldBanner($src,$href) {    
                    echo '<div data-p="225.00" style="display: none;">';
                    if ($href) echo '<a href="'.$href.'">';
                    echo '<img data-u="image" src="'.$src.'" />';
                    if ($href) echo '</a>';
                    echo  '</div>';
                }
    // Banner Contents, they will appear sequentially
        moc_ldBanner("img/UTBMOC_Banner_welcome.jpg");                
        moc_ldBanner("img/UTBMOC_Banner_slack.jpg","http://pmutb.slack.com");
//        moc_ldBanner("img/UTBMOC_Banner_help.jpg");
        // moc_ldBanner("img/UTBMOC_Banner_photocopy.jpg");
        // moc_ldBanner("img/UTBMOC_Banner_passphot.jpg");
?>
                
        </div>
        <!-- Bullet Navigator -->
        <div data-u="navigator" class="jssorb05" style="bottom:16px;right:16px;" data-autocenter="1">
            <div data-u="prototype" style="width:16px;height:16px;"></div>
        </div>
        <!-- Arrow Navigator -->
        <span data-u="arrowleft" class="jssora22l" style="top:0px;left:12px;width:40px;height:58px;" data-autocenter="2"></span>
        <span data-u="arrowright" class="jssora22r" style="top:0px;right:12px;width:40px;height:58px;" data-autocenter="2"></span>
    </div>  
</div>
