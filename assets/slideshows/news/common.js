// JavaScript Document

function MM_swapImgRestore() { //v3.0
    var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
}

function MM_preloadImages() { //v3.0
    var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
        var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
            if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}

function MM_findObj(n, d) { //v4.01
    var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
        d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
    if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
    for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
    if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_swapImage() { //v3.0
    var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
        if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
}

var uagent = navigator.userAgent.toLowerCase();
var deviceAndroid = "android";

//**************************
// Detects if the current device is an Android OS-based device.
function DetectAndroid()
{
    if (uagent.search(deviceAndroid) > -1)
        return true;
    else
        return false;
}


//**************************
// Detects if the current device is an Android OS-based device and
//   the browser is based on WebKit.
function DetectAndroidWebKit()
{
    if (DetectAndroid())
    {
        if (DetectWebkit())
            return true;
        else
            return false;
    }
    else
        return false;
}

$(function() {

    // This sets the width and the height of each slide.
    // Slide width is set to the width of the div, and height was guessed.
    slideWidth = 280;
    slideHeight = 160;
    paused = 0;

    // These variables are constructed to work out where we are in the show
    slides = $('.slide');
    numberOfSlides = slides.length;
    currentPosition = 0;

    // This hides a scroll bar if there is one present
    $('#slideshow').css('overflow', 'hidden');

    // This wraps the slides in another div, and also makes sure the slides are the right constraints
    slides.wrapAll('<div id="slideInner"></div>')
        .css({'height' : slideHeight, 'width' : slideWidth});

    // This sets the constraints to contain all the slides in the right sized div
    $('#slideInner').css({'width' : slideWidth * numberOfSlides, 'height' : slideHeight, 'margin-left' : '0'});
    if(DetectAndroid() || DetectAndroidWebKit())
    {
        $('#myytplayer').css({'visibility' : 'hidden'});
    }

});

// This function should move the slide down one slide
function downSwitch(noPause) {
    currentPosition += 1; // add one to the current position
    if(!noPause)
        paused = 1;

    // if the slide is at the end of the show, put it back to the start
    if (currentPosition == numberOfSlides)
    {
        currentPosition = 0;
    }
    // This is the transition. It moves the margin of the top up by the height of one slide
    $('#slideInner').animate({'margin-left' : slideWidth*(-currentPosition)}, 800);
    if(DetectAndroid() || DetectAndroidWebKit())
    {
        if(currentPosition == 1)
            $('#myytplayer').css({'visibility' : 'visible'});
        else
            $('#myytplayer').css({'visibility' : 'hidden'});
    }

    if (ytplayer)
        if(!noChange)
            ytplayer.pauseVideo();
};

function upSwitch() { // see the down switch function. this does the inverse
    currentPosition -= 1;
    paused = 1;

    if (currentPosition == '-1')
    {
        currentPosition = (numberOfSlides -1);
    }
    $('#slideInner').animate({'margin-left' : slideWidth*(-currentPosition)}, 800);
    if(DetectAndroid() || DetectAndroidWebKit())
    {
        if(currentPosition == 1)
            $('#myytplayer').css({'visibility' : 'visible'});
        else
            $('#myytplayer').css({'visibility' : 'hidden'});
    }
    if (ytplayer)
        if(!noChange)
            ytplayer.pauseVideo();
};

function play() {
    if(!paused) {
        downSwitch(1)
        if (ytplayer)
            if(!noChange)
                ytplayer.pauseVideo();
    }
}

function pause() {

    if(paused == 0) {
        paused = 1;
    }
    else {
        paused = 0;
    }
    if (ytplayer)
        if(!noChange)
            ytplayer.pauseVideo();
}

function onYouTubePlayerReady(playerId) {
    ytplayer = document.getElementById("myytplayer");
    ytplayer.addEventListener("onStateChange", "onytplayerStateChange");
}

function onytplayerStateChange(newState) {
    if(newState == "1" || newState == "3")
        paused = 1;
    noChange = 0;
    if(newState == "0")
        paused = 0;
    noChange = 0;
    if(newState == -1)
        noChange = 1;
}

setInterval(play, 5000);
