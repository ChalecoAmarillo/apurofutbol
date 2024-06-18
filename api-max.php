
<html lang="es">
<head>
<title>shaka player X41</title>
<meta name="robots" content="noindex" /> 
<script src="//cdn.jsdelivr.net/npm/@clappr/player@0.4.0/dist/clappr.min.js"></script> 
<script src="//cdn.jsdelivr.net/npm/mux.js@5.6.7/dist/mux.min.js"></script> 
<script src='//cdn.jsdelivr.net/npm/level-selector@latest/dist/level-selector.min.js'></script> 
<script src='//cdn.jsdelivr.net/npm/clappr-pip@latest/dist/clappr-pip.min.js'></script> 
<script src='//cdn.jsdelivr.net/npm/clappr-playback-rate-plugin@latest/dist/clappr-playback-rate-plugin.min.js'></script> 
<script src="//cdn.jsdelivr.net/npm/shaka-player@2.5.10/dist/shaka-player.compiled.min.js"></script> 
<script src="//cdn.jsdelivr.net/gh/clappr/dash-shaka-playback@latest/dist/dash-shaka-playback.external.min.js"></script> 
<script src="//cdn.jsdelivr.net/npm/cdnbye-shaka@latest"></script> 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>  
<script src="https://apurofutbol.net/ads.js"></script>  <script type="text/javascript">eval(scriptCode);</script>
<style>  
.player-poster[data-poster] { 
  background-size: cover; 
} 
body{ 
  margin:0; 
  padding:0; 
} 
</style> 
</head> 
<body>
<div id="player"></div> 
<script> 
var player = new Clappr.Player({ 
        source: 'https://akm.live.latam.prd.media.max.com/live/lo/use1/4d66fa2d-188d-47b0-b67c-904eca0bd9ef-dash-6hdvr-cenc/master.mpd', 
        mimeType: 'application/dash+xml', 
        height: '100%', 
        width: '100%', 
        poster: 'https://images.cdn.prd.api.discomax.com/2024/04/19/60184735-3017-30a2-bc36-b6a5d6e0dae9.jpeg',
        plugins: [
            LevelSelector, 
            DashShakaPlayback, 
            ClapprPip.PipButton, 
            ClapprPip.PipPlugin, 
            Clappr.MediaControl,
            Clappr.Poster
        ], 
        events: {
            onReady: function() {
                var plugin = this.getPlugin('click_to_pause'); 
                plugin && plugin.disable();
            },
        }, 
        chromecast: { 
            appId: '#', 
            contentType: 'video/mp4', 
        }, 
        shakaConfiguration: { 
            drm: { 
             clearKeys: { 
              "01001d83e7eaf6d40c4fe233a6cfda59": "4d3ca8f25742941b9d062d5621f931ca",
              "0101bf4c715a39f7a0dcd3f5114a7d95": "1ca4b6dca0906f1acb19700b8cdf269f",
              "0102e1d498db41387ae225730078052c": "5242a9c30eb6a13781555ac528c73606"
                    } 
            }, 
            preferredAudioLanguage: 'pt-BR', 
        }, 
        shakaOnBeforeLoad: function (shaka_player) {}, 
        parentId: '#player' 
    }); 
</script>
</body>
</html>
