<!DOCTYPE HTML>
<html>
<head>
    <title>Contact</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/forms.css">
    <link rel="stylesheet" type = "text/css" href = "css/cursor.css">
    <link rel="stylesheet" type = "text/css" href = "css/contact_cards.css">

    <script defer src = "js/forms_validator.js"></script>
    <script defer src = "js/app.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Connect to LastFM API -->
    <script type="text/javascript" src="js/last_fm/lastfm.api.cache.js"></script>
    <script type="text/javascript" src="js/last_fm/lastfm.api.js"></script>
    <script type="text/javascript" src="js/last_fm/lastfm.api.md5.js"></script>
    <script type="text/javascript" src="js/last_fm/last_fm_connector.js"></script>

    <style>
        .sub_text {
            opacity: 0; /* Initially hide sub_text */
            text-align: center;
            font-size: 25px;
            color: white;
        }

        @keyframes dropWord {
            0% {
                opacity: 0;
                transform: translateY(-50px);
            }
            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .drop_word {
            display: inline-block;
            animation: dropWord 1s ease-out;
        }

        .delayed_drop_word {
            animation-delay: 1s; /* Longer delay for the second drop effect */
            animation-fill-mode: forwards; /* Keep styles after animation completes */
        }

        .card svg {
            width: 85px;
            height: 85px;
            margin: 0 auto;
        }

    </style>
</head>
<body>

    <!--Navigation Bar-->
    <header class = "nav_main">
      <nav class = "navigation">
        <div id="navbar">
          <a href="home">Home</a>
          <a href="projects">Projects</a>
          <a href="hobbies">Hobbies</a>
          <a href="contact">Contact</a>
        </div>
      </nav>
    </header>

    <!--Script for Mouse Cursos-->
    <div class = "cursor-dot" data-cursor-dot></div>
    <div class = "cursor-outline" data-cursor-outline></div>
    <script src = "js/cursor.js"></script>