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
      document.getElementById("nav1").style.backgroundColor="rgba(119, 110, 110, 0.755)";
      document.getElementById("BigSep").style.display="block";
      document.getElementById("nav1").style.zIndex="-999";  
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
      document.getElementById("nav1").style.backgroundColor="rgba(119, 110, 110, 0)";
      document.getElementById("BigSep").style.display="none";  
      document.getElementById("nav1").style.zIndex="-999";  
    }
  }