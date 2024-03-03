// spotifyScript.js

/*
    This script is used to connect to the Last.fm API and display the currently playing song.
    It also displays the most played song.

    It utilizes HTML DOM to display the song title and artist name.
*/

console.log('Script started for Spotify.');

var cache = new LastFMCache();
console.log('Cache created.');

// Establish API connection
var lastfm = new LastFM({
    apiKey: '6606088cf99e9971505c3b7d9b94947a',
    apiSecret: '97079b865db1c1cfee6db006ccbf0cf8',
    cache: cache
});

// Display name of the user. Also works for other users. Hi, Lee!
var username = 'Tarikuzuma';

try {
    lastfm.user.getRecentTracks({ user: username, limit: 1 }, {
        success: function (data) {
            console.log('API request successful:', data);

            /* Use data. */
            var nowPlaying = data.recenttracks.track[0];
            var mostRecentTrack = data.recenttracks.track[0];

            if (nowPlaying["@attr"] && nowPlaying["@attr"].nowplaying === "true") {

                // Displays Text of Now Playing Artist.

                // console.log('Now Playing:', nowPlaying.name, 'by', nowPlaying.artist['#text']);
                var now_song = nowPlaying.name;
                var now_artist = nowPlaying.artist['#text'];
                var text_display = now_song + ' by ' + now_artist;

                //17 Max for Song Title

                console.log(text_display);

                if (now_song.length > 17) {
                    console.log('Song title is too long. Marquee activated.');
                    document.getElementById("song_title").innerHTML = '<marquee>' + now_song + '</marquee>';
                } else {
                    document.getElementById("song_title").innerHTML = now_song;
                }

                if (now_artist.length > 15) {
                    console.log('Artist name is too long. Marquee activated.');
                    document.getElementById("song_author").innerHTML = '<marquee>' + 'by '+ now_artist + '</marquee>';
                } else {
                    document.getElementById("song_author").innerHTML = 'by '+ now_artist;
                }

            } else if (mostRecentTrack) {

                // If I'm not listening to anything, displays the most recent track I listened to.

                // console.log('Most Recently Played:', mostRecentTrack.name, 'by', mostRecentTrack.artist['#text']);
                var recent_song = mostRecentTrack.name;
                var recent_artist = mostRecentTrack.artist['#text'];
                var text_display = recent_song + ' by ' + recent_artist;

                console.log(text_display);

                if (recent_song.length > 17) {
                    console.log('Song title is too long. Marquee activated.');
                    document.getElementById("song_title").innerHTML = '<marquee>' + recent_song + '</marquee>';
                } else {
                    document.getElementById("song_title").innerHTML = recent_song;
                }

                if (recent_artist.length > 15) {
                    console.log('Artist name is too long. Marquee activated.');
                    document.getElementById("song_author").innerHTML = '<marquee>' + 'by '+ recent_artist + '</marquee>';
                } else {
                    document.getElementById("song_author").innerHTML = 'by '+ recent_artist;
                }

            } else {
                console.log('An Error Occurred. No recent tracks.');
            }

            // Get most played song
            console.log('Getting most played song.');
            
            if (data.toptracks) {
                console.log('Top Tracking API request successful:', data);

                var top_name = data.toptracks.track[0].name;
                var top_artist = data.toptracks.track[0].artist.name;

                // Log most played track
                console.log('Most Played Track:', top_name, 'by', top_artist);

                // Display most played track
                document.getElementById("most_played_song").innerHTML = top_name;
                document.getElementById("most_played_artist").innerHTML = top_artist;
            } else {
                console.log('An Error Occurred. No top tracks.');
            }
        },
        error: function (code, message) {
            console.error('API request failed:', code, message);
        }
    });
} catch (err) {
    console.error(e);
}

console.log('Script ended.');
