<script language="javascript" type="text/javascript" src="<?= SLIDESHOWS ?>news/common.js"></script>
<link rel="stylesheet" type="text/css" href="<?= SLIDESHOWS ?>news/styling.css"/>

<div class="slideshowContainer">
    <div class="slideshowControls">
    <table cellpadding="0" cellspacing="0" border="0">
    	<tr>
    		<td><button onclick="upSwitch()" ><img src="<?= SLIDESHOWS ?>news/images/back.png" /></button></td>
        	<td><button onclick="pause()" ><img src="<?= SLIDESHOWS ?>news/images/pause.png" /></button></td>
        	<td><button onclick="downSwitch()" ><img src="<?= SLIDESHOWS ?>news/images/forward.png" /></button></td>
        </tr>
    </table>
    </div>
    <div class="slideshow">
    	<div class="slide">
        	<center>
        		<img src="<?= IMAGES ?>/home/AlJolly4.png" alt="Al Jolly" />
            </center>
        </div>
        <div class="slide">
          <div id="ytapiplayer" style="background:url(<?= SLIDESHOWS ?>news/images/starz.png) no-repeat;">
            <h3 align="center">Recent News: 
            <br />
            <a href="<?= SITE_URL ?>Safeguarding">Safeguarding Magic Show</a></h3>
            <p align="center">This innovative and proven project introduces Primary School children to sensitive but relevant subjects such as 'personal safety', 'stranger danger' and 'peer pressure' by way of a specially designed Magic Show.</p>
          <br />
          </div>

		  <script type="text/javascript">
        
            var params = { allowScriptAccess: "always" };
            var atts = { id: "myytplayer" };
            swfobject.embedSWF("http://www.youtube.com/e/my4DaSoMdSM?enablejsapi=1&playerapiid=ytplayer",
                               "ytapiplayer", "279", "187", "8", null, null, params, atts);
        
          </script>
        </div>
        <div class="slide">
        		<img src="<?= IMAGES ?>home/AlJolly2.png" alt="Al Jolly" align="center"/>
        </div>
        <div class="slide">
            <div align="center"><br /><br />
            <img src="<?= IMAGES ?>branding/test_speack_open.gif" ><span class="style3">I am eternally grateful for your kindness and professionalism!</span><img src="<?= IMAGES ?>branding/test_speack_Close.gif" class="close-speech"><br />
            <span class="style5">Beverley Taylor - Community Fundrasier</span></div>
        </div>
        <div class="slide">
        	<center>
        		<img src="<?= IMAGES ?>home/AlJolly3.png" alt="Al Jolly" />
            </center>
        </div>
        <div class="slide">
            <div align="center"><br />
            <img src="<?= IMAGES ?>branding/test_speack_open.gif" /><span class="style3">Just a brief note to say a really big '<strong>THANK YOU</strong>' for your entertainment at our birthday. All the children and their parents have commented on what a wonderful time they had.</span><img src="<?= IMAGES ?>branding/test_speack_Close.gif" class="close-speech" /><br />
            <span class="style5">from all the Newton family</span></div>
        </div>
    </div>
</div>
