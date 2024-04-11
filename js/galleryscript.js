// Load jQuery from CDN or local resource
const jqueryCDN = 'https://code.jquery.com/jquery-3.6.4.min.js';

function loadjQuery() {
  if (typeof jQuery === 'undefined') {
    const script = document.createElement('script');
    script.src = 'js/jquery-3.6.4.min.js';
    script.type = 'text/javascript';
    script.onload = function() {
      mainScript();
    };
    document.head.appendChild(script);
  } else {
    mainScript();
  }
}

function mainScript() {
  // Cache the jQuery selection for the button
  const button = $('button');

  $(document).ready(function() {
    button.on('click', function() {
      const gallery = $('<div>').css({
        display: 'flex',
        flexWrap: 'wrap',
        justifyContent: 'center',
        alignItems: 'center',
        height: '100vh',
        overflow: 'auto',
        display: 'none' // Initially hide the gallery
      });

      const images = [
        'https://guillermo2001.rhody.dev/client-website-version5/images/image1.webp',
        'https://guillermo2001.rhody.dev/client-website-version5/images/image2.jpg',
        'https://guillermo2001.rhody.dev/client-website-version5/images/image3.jpg',
        'https://guillermo2001.rhody.dev/client-website-version5/images/image4.jpg',
        'https://guillermo2001.rhody.dev/client-website-version5/images/image2.jpg',
        'https://guillermo2001.rhody.dev/client-website-version5/images/image3.jpg',
        'https://guillermo2001.rhody.dev/client-website-version5/images/image4.jpg',
        'https://guillermo2001.rhody.dev/client-website-version5/images/image2.jpg'
      ];

      $.each(images, function(index, src) {
        const image = $('<img>').attr('src', src).css({
          
          height: '200px', // Set a fixed height for the images
          borderRadius: '10px' // Add rounded corners
        });
        gallery.append(image);
      });

      const container = $('#gallerycontainer');
      container.css('overflow', 'hidden');
      container.append(gallery);

      // Fade in the gallery
      gallery.fadeIn();

      button.fadeOut();
    });
  });
}

// Check if jQuery is loaded
loadjQuery();
