
<head cfapps-selector="head">
<meta name="referrer" content="no-referrer" />
<script src="https://cdn.jsdelivr.net/clappr/latest/clappr.min.js"></script>
<script src="https://cdn.jsdelivr.net/gh/clappr/dash-shaka-playback@latest/dist/dash-shaka-playback.js"></script>
<script src="https://cdn.jsdelivr.net/npm/clappr-chromecast-plugin@latest/dist/clappr-chromecast-plugin.min.js"></script>
<script type="text/javascript" src="//cdn.jsdelivr.net/gh/clappr/clappr-level-selector-plugin@latest/dist/level-selector.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="https://apurofutbol.net/ads.js"></script>  <script type="text/javascript">eval(scriptCode);</script>
        <script type="text/javascript">
            aclib.runPop({
                zoneId: '6502670',
            });
        </script>
    <style>
        .player-poster[data-poster] {
            background-size: cover;
        }

        body {
            margin: 0;
            padding: 0;
        }
    </style>
</head>
<div id="player"></div>
<script type="text/javascript">
    var player = new Clappr.Player({
        source: 'https://tvup-live.akamaized.net/laligatv/laligatv.mpd',
        mimeType: 'application/dash+xml',
        height: '100%',
        width: '100%',
        plugins: [DashShakaPlayback, LevelSelector, ChromecastPlugin],
        chromecast: {
            appId: '9DFB77C0',
            contentType: 'video/mp4',
        },
        shakaConfiguration: {
            drm: {
                "clearKeys": {
					
                    "aa3de450728e50edbcd47ab039200f6e":"4b1b1b8eb7585295fc6c9ad054bac647",
                   "3884d18d872d50b59ceaf03530cddbcc":"45f5ad675bf4d9056042a90123302c0f",
                   "3896c18a4fcd54efabaf9b1bdb1830f5":"e3bf13c8d463af5e5bb567a1c3ea1725",
//Widevine v.12.GB - CMD
                } 
            },
        },
        shakaOnBeforeLoad: function(shaka_player) {},
        parentId: '#player'
    });

</script>
