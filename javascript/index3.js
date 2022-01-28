window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 10 || document.documentElement.scrollTop > 10) { 
    document.getElementById("nav1").style.backgroundColor="rgba(119, 110, 110, 0.755)";
    document.getElementById("imgnav").style.height="80px";
    document.getElementById("imgnav").style.backgroundColor="rgba(0, 0, 0, 0)";
    document.getElementById("imgnav").style.width="80px";
    document.getElementById("imgnav").style.marginTop="-6px";
    document.getElementById("imgnav").style.marginRight="600px";
    document.getElementById("a1").style.fontSize="17px";
    document.getElementById("a2").style.fontSize="17px";
    document.getElementById("a3").style.fontSize="17px";
    document.getElementById("a4").style.fontSize="17px";
    document.getElementById("navButton").style.fontSize="16px";
    document.getElementById("navButton").style.width="100px";
    document.getElementById("navButton").style.height="38px";
    document.getElementById("navButton").style.marginTop="9px";
    document.getElementById("a1").style.marginTop="9px";    
    document.getElementById("a2").style.marginTop="9px";
    document.getElementById("a3").style.marginTop="9px";
    document.getElementById("a4").style.marginTop="9px";
  } else {
    document.getElementById("nav1").style.backgroundColor="rgba(0, 0, 0, 0)";
    document.getElementById("imgnav").style.height="130px";
    document.getElementById("imgnav").style.backgroundColor="rgba(116, 95, 88, 0.399)";
    document.getElementById("imgnav").style.width="130px";
    document.getElementById("imgnav").style.marginTop="-10px";
    document.getElementById("imgnav").style.marginRight="490px";
    document.getElementById("a1").style.fontSize="20px";
    document.getElementById("a2").style.fontSize="20px";
    document.getElementById("a3").style.fontSize="20px";
    document.getElementById("a4").style.fontSize="20px";
    document.getElementById("navButton").style.fontSize="18px";
    document.getElementById("navButton").style.width="120px";
    document.getElementById("navButton").style.height="40px";
    document.getElementById("navButton").style.marginTop="20px";
    document.getElementById("a1").style.marginTop="20px";    
    document.getElementById("a2").style.marginTop="20px";
    document.getElementById("a3").style.marginTop="20px";
    document.getElementById("a4").style.marginTop="20px";
  }
}


var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}
//slides[slideIndex].style.display="block";  

function showSlides(n) {
  var i;
  
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
 
}











