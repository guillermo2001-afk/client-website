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
        '/images/image1.webp',
        '/images/image2.jpg',
        '/images/image3.jpg',
        '/images/image4.jpg',
        '/images/image2.jpg',
        '/images/image3.jpg',
        '/images/image4.jpg',
        '/images/image2.jpg'
      ];

      $.each(images, function(index, src) {
        const image = $('<img>').attr('src', src).css('width', '40%');
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
