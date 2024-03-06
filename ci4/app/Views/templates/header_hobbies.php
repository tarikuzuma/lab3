<!DOCTYPE HTML>
<html>
<head>
    <title><?php echo $title; ?></title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type = "text/css" href = "css/cursor.css">
    <link rel = "stylesheet" type = "text/css" href = "css/projects.css"> 
    <link rel = "stylesheet" type = "text/css" href = "css/style.css"> 

    <link rel = "stylesheet" type = "text/css" href = "css/hobbies.css">
    <link rel="stylesheet" type = "text/css" href = "css/contact_cards.css">
    <link rel="stylesheet" type = "text/css" href = "css/lightbox.min.css">
    <link rel="stylesheet" type = "text/css" href = "css/gallery.css">

    <script defer src = "js/app.js"></script>
    <script defer src = "js/lightbox-plus-jquery.min.js" type="text/javascript"></script>

    <!-- Connect to LastFM API -->
    <script type="text/javascript" src="js/last_fm/lastfm.api.cache.js"></script>
    <script type="text/javascript" src="js/last_fm/lastfm.api.js"></script>
    <script type="text/javascript" src="js/last_fm/lastfm.api.md5.js"></script>
    <script type="text/javascript" src="js/last_fm/last_fm_connector.js"></script>

    <style>
        .card_hobbies svg {
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