     // JavaScript code for rotating the gallery
     var rotatingGallery = document.getElementById('rotating-gallery');
     var images = rotatingGallery.getElementsByTagName('img');
     let currentIndex = 0;

     // Hide all images except the first one initially
     for (var i = 1; i < images.length; i++) {
       images[i].style.display = 'none';
     }

     function rotateGallery() {
       images[currentIndex].style.display = 'none';
       currentIndex = (currentIndex + 1) % images.length;
       images[currentIndex].style.display = 'block';
     }

     setInterval(rotateGallery, 2000); // time interval change

   