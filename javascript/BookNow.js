window.onscroll = function() {scrollFunction()};

function scrollFunction() {
    if (document.body.scrollTop > 10 || document.documentElement.scrollTop > 10) { 
      document.getElementById("imgnav").style.height="70px";
      document.getElementById("imgnav").style.width="70px";
      document.getElementById("imgnav").style.marginTop="-6px";
      document.getElementById("imgnav").style.marginRight="600px";
      document.getElementById("a1").style.fontSize="17px";
      document.getElementById("a2").style.fontSize="17px";
      document.getElementById("a3").style.fontSize="17px";
      document.getElementById("a4").style.fontSize="17px";
      document.getElementById("a1").style.marginTop="0px";    
      document.getElementById("a2").style.marginTop="0px";
      document.getElementById("a3").style.marginTop="0px";
      document.getElementById("a4").style.marginTop="0px";
      document.getElementById("SepNav").style.marginTop="70px";
      document.getElementById("nav1").style.height="70px";
      document.getElementById("navButton").style.fontSize="16px";
      document.getElementById("navButton").style.width="100px";
      document.getElementById("navButton").style.height="38px";
      document.getElementById("navButton").style.marginTop="15px";
    } else {
      document.getElementById("imgnav").style.height="120px";
      document.getElementById("imgnav").style.width="120px";
      document.getElementById("imgnav").style.marginTop="-10px";
      document.getElementById("imgnav").style.marginRight="490px";
      document.getElementById("a1").style.fontSize="20px";
      document.getElementById("a2").style.fontSize="20px";
      document.getElementById("a3").style.fontSize="20px";
      document.getElementById("a4").style.fontSize="20px";
      document.getElementById("a1").style.marginTop="20px";    
      document.getElementById("a2").style.marginTop="20px";
      document.getElementById("a3").style.marginTop="20px";
      document.getElementById("a4").style.marginTop="20px";
      document.getElementById("SepNav").style.marginTop="100px";
      document.getElementById("nav1").style.height="100px";
      document.getElementById("navButton").style.fontSize="18px";
      document.getElementById("navButton").style.width="120px";
      document.getElementById("navButton").style.height="40px";
      document.getElementById("navButton").style.marginTop="40px";
    }
  }