    <style>
        /* Custom CSS to style links in the footer */
        footer a {
            text-decoration: none; /* Remove underline */
            color: inherit; /* Inherit color from parent */
            position: relative; /* Ensure relative positioning for pseudo-element */
        }

        footer a::after {
            content: ""; /* Add pseudo-element */
            position: absolute; /* Position the pseudo-element */
            bottom: 0; /* Adjust as needed */
            left: 0; /* Adjust as needed */
            width: 0%; /* Initially no width */
            height: 3px; /* Height of the underline */
            background-color: white; /* Color of the underline */
            transition: all 0.5s; /* Smooth transition effect */
        }

        footer a:hover::after {
            width: 100%; /* Expand the width of the underline on hover */
        }
    </style>
    
    <footer style = "margin-top: 100px; margin-bottom: 50px;">

    <div class = "row">

    <div class = "col">
        <div class = "col">

        <div class = "spotify" style = "width: 669px">
            <div class = "container">
            <div class = "image">
                <img src="assets/spotify.png">
            </div>
                <div class = "texts" 
                style= "position: absolute;
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%);
                justify-content: center;
                text-align: center;">
                <div class = "now">
                    Most Listened Song:
                </div>
                <div id = "most_played_song">
                    <!-- Temporary-->
                    Teddy Picker
                </div>
                <div id = "most_played_author">
                    <!-- Temporary-->
                    by Arctic Monkeys     
                </div>
                </div>
            </div>
        </div>

        </div>
        <div class = "col" style = "padding-left: 40px; padding-top: 30px;">
        2023 . Edwin Gumba 
        </div>
    </div>
    <div class ="col">
        <div class ="col">
        Applications
        </div>
        <div class = "col">
            <a href="https://www.linkedin.com/in/edwin-gumba-jr-1909771b1/">LinkedIn</a>
        </div>
        <div class = "col">
            <a href="https://github.com/tarikuzuma">GitHub</a>
        </div>
        <div class = "col">
            <a href = "#" onclick="openPopup()"> Discord </a>
        </div>
        <script>
            function openPopup() {
                alert("Username: Tarikuzuma ; ID: 730250913196933160");
            }
        </script>
        <div class = "col">
            <a href="https://infosec.exchange/@tarikuzuma">Vlogs</a>
        </div>
    </div>

    <div class = "col">
        <div class = "col">
        Contact
        </div>
        <div class="col">
    <a href="#" onclick="openPopupEmail()"> Emails </a>
    <div id="emailModal" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closePopupEmail()">&times;</span>
            <p>Student Email: edgumba@student.apc.edu.ph</p>
            <p>Work Email: edwinjrgumba@gmail.com</p>
            <p>Personal Email: gumba_win@yahoo.com</p>
        </div>
    </div>
</div>

<style>
    /* Styles for the modal */
    .modal {
        display: none;
        position: fixed;
        z-index: 1;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        overflow: auto;
        background-color: rgba(0, 0, 0, 0.4);
        color: black;
    }
    .modal-content {
        background-color: #b7f5d4;
        margin: 15% auto;
        padding: 20px;
        border: 1px solid #888;
        width: 80%;
    }
    .close {
        color: #aaa;
        float: right;
        font-size: 28px;
        font-weight: bold;
    }
    .close:hover,
    .close:focus {
        color: black;
        text-decoration: none;
        cursor: pointer;
    }
</style>

<script>
    function openPopupEmail() {
        var modal = document.getElementById("emailModal");
        modal.style.display = "block";
    }

    function closePopupEmail() {
        var modal = document.getElementById("emailModal");
        modal.style.display = "none";
    }
</script>
        </div>
    </div>
    </div>

    <hr class = "line">

    </footer>


</body>
</html>