    $(document).ready(function() {
      var rotatingGallery = $('#rotating-gallery');
      var images = rotatingGallery.find('img');
      let currentIndex = 0;

      // Hide all images except the first one initially
      images.not(':first').hide();

      function rotateGallery() {
        images.eq(currentIndex).fadeOut(500, function() { // Fade out the current image
          currentIndex = (currentIndex + 1) % images.length;
          images.eq(currentIndex).fadeIn(500); // Fade in the next image
        });
      }

      setInterval(rotateGallery, 3000); // Increased time interval to 3 seconds

      //css round corners
      images.css('border-radius', '10px');
    });

    $(document).ready(function(){
      // Smooth transition when clicking links
      $('a').click(function(e){
          e.preventDefault(); // Prevent default link behavior
          var href = $(this).attr('href');
          $('body').fadeOut('slow', function(){
              window.location.href = href; // Redirect to the new page
          });
      });
    });

    $(document).ready(function(){
      $('body').hide().fadeIn(1000);
    });
