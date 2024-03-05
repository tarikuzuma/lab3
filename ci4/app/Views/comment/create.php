            <div class="comment_form" style = "display: row;">
            
            <?= session()->getFlashdata('error') ?>
            <?= validation_list_errors() ?>

                <form method="post" action="<?php echo site_url('comment'); ?>" enctype="multipart/form-data">
                    <?= csrf_field() ?>
                    <div class="image_container">
                        <label for = "input-file"><img id="profile-image" src="https://picsum.photos/536/354" class="rounded_image"></label>
                        <input class="hide" type="file" accept="image/jpeg, image/png, image/jpg" name="input_file" id="input-file">
                    </div>
                    <div class="comment_container" style = "width: 100%; background-color: white;">
                        <div class="form-group">
                            <label for="username">Username:</label>
                            <input type="text" id="Username" name="user_name" required class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="phonenumber">Phone Number (Optional):</label>
                            <input type="text" id="mobileNumber" name="mobile_number" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="comment_text">Comment:</label>
                            <textarea id="Comment" name="comment" required class="form-control comment_box"></textarea>
                        </div>
                        <button type="submit" name = "comment_submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>