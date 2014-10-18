<?php
global $model;
$nav_bar = new NavBar();
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title><?= SITE_NAME ?> | <?= $model->title->text ?></title>
    <link rel="shortcut icon" type="image/x-icon" href="<?= IMAGES ?>branding/favicon.ico">
    <link href="<?= STYLES ?>main.css" rel="stylesheet" type="text/css">
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/swfobject/2.2/swfobject.js"></script>
    <script src="<?= SCRIPTS ?>swfobject_modified.js" type="text/javascript"></script>
</head>

<body onLoad="MM_preloadImages('<?= IMAGES ?>navBar/nav_on.png')">
<div class="wrapper">
    <div class="branding">
        <div class="title"></div>
        <img src="<?= IMAGES ?>branding/mainHeader_mobile.png" class="mobile_title" />
        <div class="splash">
            <object id="FlashID" classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" width="400" height="85">
                <param name="movie" value="<?= IMAGES ?>branding/TOP.swf" />
                <param name="quality" value="high" />
                <param name="wmode" value="opaque" />
                <param name="swfversion" value="6.0.65.0" />
                <!-- This param tag prompts users with Flash Player 6.0 r65 and higher to download the latest version of Flash Player. Delete it if you don't want users to see the prompt. -->
                <param name="expressinstall" value="/Scripts/expressInstall.swf" />
                <!-- Next object tag is for non-IE browsers. So hide it from IE using IECC. -->
                <!--[if !IE]>-->
                <object type="application/x-shockwave-flash" data="<?= IMAGES ?>branding/TOP.swf" width="325" height="69">
                    <!--<![endif]-->
                    <param name="quality" value="high" />
                    <param name="wmode" value="opaque" />
                    <param name="swfversion" value="6.0.65.0" />
                    <param name="expressinstall" value="/Scripts/expressInstall.swf" />
                    <!-- The browser displays the following alternative content for users with Flash Player 6.0 and older. -->
                    <img src="<?= IMAGES ?>branding/splash.png" />
                    <!--[if !IE]>-->
                </object>
                <!--<![endif]-->
            </object>
        </div>
        <button class="menu" onclick="$('.navBar').toggle()">
            <span>&#9776;</span>
        </button>
        <script type="text/javascript">
            swfobject.registerObject("FlashID");
        </script>
    </div>
    <div class="leftCol">
        <div class="leftLogo"></div>
        <ul class="navBar">
            <?= $nav_bar->to_html(); ?>
        </ul>
<!--        <div class="leftBottom">-->
<!--            <h6>Website Design<br /> and Production by <a href="http://www.xepps.com" target="_blank">xepps.com</a></h6>-->
<!--        </div>-->
    </div>
    <div class="content">
        <div class="contentTop"></div>
        <div class="contentMid">
            <div class="contentMain">
                <?php if (isset($model->title->image)): ?>
                <img class="page_image" alt="<?= $model->title->text ?>" src="<?= IMAGES.$model->title->image ?>" />
                <?php endif; ?>
                <div class="pageContent">
                    <?php include(PAGE_CONTENT.$model->content.'.php'); ?>
                </div>
                <div class="nav_arrows clear">
                    <?php if (isset($model->navigation->previous)): ?>
                    <a href="<?= SITE_URL.$model->navigation->previous ?>"><img src="<?= IMAGES ?>branding/prevArrow.png" width="180" height="60" alt="Next Page" /></a>
                    <?php endif; ?>

                    <?php if (isset($model->navigation->next)): ?>
                    <a href="<?= SITE_URL.$model->navigation->next ?>"><img src="<?= IMAGES ?>branding/nextArrow.png" width="180" height="60" alt="Next Page" /></a>
                    <?php endif; ?>
                </div>
                <hr />
                <div class="contact-table">
                    <table cellspacing="2" cellpadding="2" align="center" class="text style3 large">
                        <tr>
                            <td width="44%" align="left" valign="top"><? ContactBox::email_me() ?></td>
                            <td width="12%" align="center" valign="middle">OR</td>
                            <td width="44%" align="right" valign="top"><? ContactBox::call_me() ?></td>
                        </tr>
                        <tr>
                            <td width="44%" align="left" valign="top"><? ContactBox::write_to_me() ?></td>
                            <td width="12%" align="center" valign="middle">OR</td>
                            <td width="44%" align="right" valign="top"><? ContactBox::share_me() ?></td>
                        </tr>
                    </table>
                    <div class="small">
                        <? ContactBox::email_me() ?>
                        <? ContactBox::call_me() ?>
                        <? ContactBox::write_to_me() ?>
                        <? ContactBox::share_me() ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="contentBottom"></div>
    </div>
    <script src="<?= SCRIPTS ?>imageSwaps.js" type="text/javascript"></script>
    <script src="<?= SCRIPTS ?>formValidator.js" type="text/javascript"></script>
    <script type="text/javascript">

        var _gaq = _gaq || [];
        _gaq.push(['_setAccount', 'UA-24274409-1']);
        _gaq.push(['_trackPageview']);

        (function() {
            var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
            ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
            var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
        })();

    </script>
</body>
</html>