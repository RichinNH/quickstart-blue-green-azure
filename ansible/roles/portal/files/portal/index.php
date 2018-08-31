<!DOCTYPE html>
<?php include('config.inc.php'); ?>
<html>
    <head>
	<link rel="icon" href="https://www.barracuda.com/assets/img/layout/logo/favicon.png" type="image/x-icon" />
	<link rel="shortcut icon" href="https://www.barracuda.com/assets/img/layout/logo/favicon.png" />
        <link rel="stylesheet" href="css/metro-bootstrap.min.css">
        <link rel="stylesheet" href="css/base.css">
        <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
        <script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
        <script src="js/metro.min.js"></script>
        <script src="js/start-screen.js"></script>
    </head>
    <body class="metro">
        <div class="tile-area tile-area-dark" style="background-image: url(images/2.png);">
      <h1 class="tile-area-title fg-white">Start - <?php echo DEPLOYMENTCOLOR; ?></h1>

            <div class="tile-group two">
                <a class="tile double bg-grayDark live" data-role="live-tile" data-effect="slideUpDown" data-click="transform" href="https://www.barracuda.com/programs/cloudready" target="_blank">
                    <div class="tile-content">
                        <img style="width: 230px; padding-top: 20px; margin: 10px;" src="images/barracuda2.png" />
                    </div>
                    <div class="tile-content bg-darkblue">
                        <img style="width: 230px; margin: 10px;" src="https://www.barracuda.com/assets/img/sections/programs/bridgetocloud/cr_logo_light.svg" alt="Barracuda Cloud Ready logo" class="hidden-sm-down">    
                    </div>
                </a>
                <a class="tile" href="https://www.barracuda.com/products/webapplicationfirewall/models/5" target="_blank">
                    <div class="tile-content">
                        <img src="images/bwf.svg" />
                    </div>
                </a> <!-- end tile -->
                <a class="tile" href="https://www.barracuda.com/products/nextgenfirewall_f/models/5" target="_blank">
                    <div class="tile-content">
                        <img src="images/cgf.svg" />
                    </div>
                </a> <!-- end tile -->
                <a class="tile" href="https://www.barracuda.com/products/emailsecuritygateway/models/5" target="_blank">
                    <div class="tile-content">
                        <img src="images/bsf.svg" />
                    </div>
                </a> <!-- end tile -->
                <a class="tile" href="https://www.barracuda.com/application/office365" target="_blank">
                    <div class="tile-content">
                        <img src="images/ess.svg" />
                    </div>
                </a> <!-- end tile -->
            </div> <!-- tile-group -->
            <div class="tile-group two">
                <a class="tile bg-grayLight" href="https://az-colors.cudalab.eu/" target="_blank">
                    <div class="tile-content">
                        <div class="text-right padding10">
                            <h3 class="fg-white no-margin">Colors</h1>
                            <p class="fg-white">demo</p>
                        </div>
                    </div>
                </a> <!-- end tile -->
                <a class="tile bg-grayLight" href="https://az-dvwa.cudalab.eu/" target="_blank">
                    <div class="tile-content">
                        <div class="text-right padding10">
                            <h3 class="fg-white no-margin">DVWA</h1>
                            <p class="fg-white">demo</p>
                        </div>
                    </div>
                </a> <!-- end tile -->
                <a class="tile bg-grayLight" href="https://az-badstore.cudalab.eu" target="_blank">
                    <div class="tile-content">
                        <div class="text-right padding10">
                            <h3 class="fg-white no-margin">Badstore</h1>
                            <p class="fg-white">demo</p>
                        </div>
                    </div>
                </a> <!-- end tile -->
                <a class="tile bg-grayLight" data-click="transform">
                    <div class="tile-content">
                        <div class="text-right padding10">
                            <h3 class="fg-white no-margin"></h1>
                            <p class="fg-white"></p>
                        </div>
                    </div>
                </a> <!-- end tile -->
                <a class="tile bg-grayLight" href="https://azure.cudalab.eu:8443/" target="_blank">
                    <div class="tile-content">
                        <div class="text-right padding10">
                            <h3 class="fg-white no-margin">WAF</h1>
                            <p class="fg-white">management</p>
                        </div>
                    </div>
                </a> <!-- end tile -->
                <a class="tile bg-grayLight" target="_blank">
                    <div class="tile-content">
                        <div class="text-right padding10">
                            <h3 class="fg-white no-margin"></h1>
                            <p class="fg-white"></p>
                        </div>
                    </div>
                </a> <!-- end tile -->
            </div> <!-- tile-group -->
            <div class="tile-group two">
                <a class="tile double double-vertical" href="https://www.barracuda.com/azure" target="_blank">
                    <div class="tile-content image">
                        <img src="images/azure.png">
                    </div>
                </a> <!-- end tile -->
                <a class="tile double bg-grayDark" href="https://campus.barracuda.com/" target="_blank">
                    <div class="tile-content">
                        <div class="text-right padding10">
                            <p class="fg-white">
                                Barracuda Campus <br/><br/>
                                Documentation, <br/>Training and <br/>Certification
                            </p>
                        </div>
                    </div>
                </a> <!-- end tile -->
            </div> <!-- tile-group -->
        </div> <!-- tile-area -->
    </body>
</html>
