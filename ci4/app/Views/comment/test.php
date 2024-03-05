<?php
                try {
                    $servername = "localhost";
                    $username = "root";
                    $password = "";
                    $dbname = "webprogss221";

                    // $servername = "localhost";
                    // $username = "webprogss221";
                    // $password = "=latHen97";
                    // $dbname = "webprogss221";

                    // Create connection
                    $conn = new mysqli($servername, $username, $password, $dbname);

                    // Check connection
                    if ($conn->connect_error) {
                        throw new Exception("Connection failed: " . $conn->connect_error);
                    }

                    // SQL Query to Get Comment Details
                    $commentDetailsSql = "SELECT * FROM edgumba_myguest  ORDER BY date_posted DESC";
                    $commentDetailsResult = $conn->query($commentDetailsSql);

                    // Check if there are results
                    if ($commentDetailsResult->num_rows > 0) {
                        // Loop through each comment
                        while ($row = $commentDetailsResult->fetch_assoc()) {
                            $user_id = $row["user_id"];
                ?>
                            <div class="comment"> 
                                <div class="image_container">
                                    <?php
                                    // Construct the image path based on user ID
                                    $image_path = "assets/comments_profiles/{$user_id}.png";
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
                                        <?php echo $row["user_name"]; ?>
                                    </div>
                                    <div class="time_posted">
                                        <?php echo $row["date_posted"]; ?>
                                    </div>
                                    <div class="comment_text">
                                        <?php echo $row["comment"]; ?>
                                    </div>
                                </div>
                            </div>
                <?php
                        }
                    } else {
                        echo "0 results for comment details or you didnt make a table did ya?!";
                    }
                } catch (Exception $e) {
                    echo "Error: " . $e->getMessage();
                } finally {
                    // Close the database connection
                    if (isset($conn)) {
                        $conn->close();
                    }
                }
                ?>