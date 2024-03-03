/* Validates if whatever is put in the form will not be empty.
   Also makes it so that text will be "see more..." if it exceeds over 500 characters. */

   /* USES JQUERY! */


$(document).ready(function() {
    $(".comment_text").each(function() {
        var $comment = $(this);
        if ($comment.text().length > 500) {
            var truncatedText = $comment.text().substring(0, 500);
            var fullText = $comment.text();
            $comment.html(truncatedText + '<span class="see-more">... <a href="#" class="see-more-link">See more</a></span>');

            $comment.on("click", ".see-more-link", function(event) {
                event.preventDefault();
                $comment.html(fullText + ' <span class="see-less"> <a href="#" class="see-less-link">See less</a></span>');
            }).on("click", ".see-less-link", function(event) {
                event.preventDefault();
                $comment.html(truncatedText + ' <span class="see-more">... <a href="#" class="see-more-link">See more</a></span>');
            });
        }
    });
});

$(document).ready(function() {
    // Select the input file element and bind the change event
    $('#input-file').change(function() {
        // Get the selected file
        var selectedFile = this.files[0];
        
        // Check if a file is selected
        if (selectedFile) {
            // Create a FileReader object to read the file
            var reader = new FileReader();
            
            // Define the onload event handler for the FileReader
            reader.onload = function(event) {
                // Set the source of the profile image to the data URL of the selected file
                $('#profile-image').attr('src', event.target.result);
            };
            
            // Read the selected file as a data URL
            reader.readAsDataURL(selectedFile);
        }
    });
});
