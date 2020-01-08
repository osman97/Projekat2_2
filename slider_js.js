var slideNumber = 0;
slideShow();

function slideShow() {
	var iterator;
	var slides = document.getElementsByClassName("slide");
	
	for (iterator = 0; iterator < slides.length; iterator++) {
		slides[iterator].style.display = "none";
	}
		
	slideNumber++;
	
	if (slideNumber > slides.length) {
		slideNumber = 1
	}
	
	slides[slideNumber-1].style.display = "inline";
	setTimeout(slideShow, 3000);
}