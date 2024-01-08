<?php

?>

<!-- Top Button -->
  <button onClick="topFunction()" id="TOP_Btn" title="Go to top">Top</button>
  <!-- ENDE Top Button -->

<!--PAGE CONTENT End-->
<div class="surrounding-padding-col-low footer-copyright container">
    <div class="container one-thousand-centered-cont">
      <p class="paragraph footer-copyright-text"> © 2020 FOOTBALL ADVICE | derrickbasoah.com</p>
    </div>
  </div>
  <script src="/js/jquery.min.js"></script>
  <script src="/js/simple-lightbox.jquery.min.js"></script>
  <script src="/js/simple-lightbox.js"></script>
  <script src="/js/outofview.js"></script>
  <script src="/js/what-input.min.js"></script>
  <script src="/js/foundation.min.js"></script>
  <script>$(document).foundation();</script>
<!-- SMOOTH SCROLL -->
<script>
	$(function() {
	  $('a.smooth-scroll[href*="#"]:not([href="#"])').click(function() {
	    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
	      var target = $(this.hash);
	      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
	      if (target.length) {
	        $('html,body').animate({
	          scrollTop: target.offset().top
	        }, 1000);
	        return false;
	      }
	    }
	  });
	});


	// When the user scrolls down 20px from the top of the document, show the button
	window.onscroll = function() {scrollFunction()};

	function scrollFunction() {
		//Get the button
		var topbutton = document.getElementById("TOP_Btn");
		if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
		    topbutton.style.display = "block";
		} else {
		    topbutton.style.display = "none";
		}
	}

	// When the user clicks on the button, scroll to the top of the document
	function topFunction() {
	  document.body.scrollTop = 0;
	  document.documentElement.scrollTop = 0;
	}

	//Code for Gallery
	$(document).ready(function(){
	 // Intialize gallery
	 var gallery = $('.gallery a').simpleLightbox();

	});

</script>
<!-- End of SMOOTH SCROLL -->
</body>
<!--BODY End-->

</html>