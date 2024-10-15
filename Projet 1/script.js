$(document).ready(function() {
    // Event listener for buttons on click
    $('.button a').click(function(event) {
      event.preventDefault(); 

      const buttonGo = $(this).attr('href'); 
      // Button animation fade out style
      $(this).animate({ opacity: 0.05 },500, function() {       
        setTimeout(function() {
          window.location.href = buttonGo;
        }, 10); // Redirect after 10ms
      });
    });
  });
