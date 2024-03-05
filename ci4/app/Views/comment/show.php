<?php foreach ($comments as $comment): ?>
<div class="comment"> 
    <div class="image_container">
        <?php
        // Construct the image path based on user ID
        $image_path = "assets/comments_profiles/{$comment['user_id']}.png";
        echo $image_path;
        // Check if the image file exists
        if (file_exists($image_path)) {
            echo "<img src=\"$image_path\" class=\"rounded_image\">";
        } else {
            // If no image is found, display a default image
            echo "<img src=\"https://picsum.photos/536/354\" class=\"rounded_image\">";
        }
        ?>
    </div>
    <div class="comment_container">
        <div class="username">
            <?= $comment['user_name']; ?>
        </div>
        <div class="time_posted">
            <?= $comment['date_posted']; ?>
        </div>
        <div class="comment_text">
            <?= $comment['comment']; ?>
        </div>
    </div>
</div>
<?php endforeach; ?>