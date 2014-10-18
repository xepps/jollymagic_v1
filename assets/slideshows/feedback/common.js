// JavaScript Document

$(function() {
	
	// This sets the width and the height of each slide. 
	// Slide width is set to the width of the div, and height was guessed.
	slideWidth = 220;
	slideHeight = 140;
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
	$('#slideInner').css({'width' : slideWidth, 'height' : slideHeight * numberOfSlides, 'margin-top' : '0'});
	
});
	
// This function should move the slide down one slide
function play() {
	currentPosition += 1; // add one to the current position
	
	// if the slide is at the end of the show, put it back to the start
	if (currentPosition == numberOfSlides)
	{
		currentPosition = 0;
	}
	
	// This is the transition. It moves the margin of the top up by the height of one slide
	$('#slideInner').animate({'margin-top' : slideHeight*(-currentPosition)}, 800);	
};

setInterval(play, 6000);
