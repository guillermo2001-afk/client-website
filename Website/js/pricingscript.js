$(document).ready(function() {

    // Select all elements with the class 'price-box'
    var priceBoxes = $('.price-box');

    // Check if at least one or more elements were found
    if (priceBoxes.length > 0) {

        // Loop through each price box element
        priceBoxes.each(function() {

            // Store the original content
            var originalContent = $(this).html();

            // Add a 'mouseover' event listener to each price box
            $(this).on('mouseover', function() {

                // Remove existing text content
                $(this).empty();

                // Create a new element to hold additional information
                var additionalInfo = $('<div></div>');

                // Create a text node with the additional information
                var infoText = $('<p>Contact me for more details!</p>');

                // Append the text node to the new element
                additionalInfo.append(infoText);

                // Append the new element to the price box
                $(this).append(additionalInfo);
            });

            // Add a 'mouseout' event listener to each price box
            $(this).on('mouseout', function() {

                // Remove the additional information element
                var additionalInfo = $(this).find('div');
                if (additionalInfo.length > 0) {
                    additionalInfo.remove();

                    // Restore the original content
                    $(this).html(originalContent);
                }
            });
        });
    }
});

