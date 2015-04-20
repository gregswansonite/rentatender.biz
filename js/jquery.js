$(document).ready(function() {
	function slideImages(imageNumber){
		setTimeout(function() {
			$('#scrollImage').fadeToggle("slow", "linear");
      		setTimeout(function(){	
      			$('#scrollImage').attr("src", "images/bartenders/bart" + imageNumber + "Thumb.jpg");
      		}, 550);
      		setTimeout(function(){	
			$('#scrollImage').fadeToggle("slow", "linear");
      		}, 700);
		}, 5000);
	}	

	image = 2;

	function playSlideShow(){
		slideImages(image);
		image++;
		if (image > 3){image=1;}
		setTimeout(function(){
			playSlideShow();
		}, 5000);
	}
	playSlideShow();

	$("#submitBtn").click(function(){
		alert("Your Message Has Been Sent");
	});
});