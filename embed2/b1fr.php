
<html lang="es"> 
<meta name="robots" content="noindex" /> 
<script src="//cdn.jsdelivr.net/npm/@clappr/player@0.4.0/dist/clappr.min.js"></script> 
<script src="//cdn.jsdelivr.net/npm/mux.js@5.6.7/dist/mux.min.js"></script> 
<script src='//cdn.jsdelivr.net/npm/level-selector@latest/dist/level-selector.min.js'></script> 
<script src='//cdn.jsdelivr.net/npm/clappr-chromecast-plugin@latest/dist/clappr-chromecast-plugin.min.js'></script> 
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
<div id="player"></div> 
<script> 
var player = new Clappr.Player({ 
        source: 'https://api-proxad.dc2.oqee.net/playlist/v1/live/966/1/live.mpd', 
        mimeType: 'application/dash+xml', 
        height: '100%', 
        width: '100%', 
        plugins: [LevelSelector, DashShakaPlayback, ChromecastPlugin, ClapprPip.PipButton, ClapprPip.PipPlugin, Clappr.MediaControl], 
        events: {onReady: function() {var plugin = this.getPlugin('click_to_pause'); plugin && plugin.disable();},}, 
        chromecast: { 
            appId: '9DFB77C0', 
            contentType: 'video/mp4', 
        }, 
        shakaConfiguration: { 
            drm: { 
            clearKeys: { 
                    '2c63c3841b90c2cbf115969dcf7111c5': 'b71df119f99ee7127e77a5398d25801e', 
                    '23d8a81145e82d61f5f3392412280539': '59bffb3f557fec6503fe6f76a68881a2', 
                    '031cceee282ae56c56b9845e0f033ed0': '8a6f5f484864c58136998c031320f4f6',
                    'c6d2565cf58686b549484b9c0d63d3b8': '7f4e3c60aee9daa5f62b82bdf1810bd3',
                    'f1ef72b5d59db20324351e7b5bd04d80': '8046395b5dc5d565b1691ba87bc497b9'
                } 
            }, 
            preferredAudioLanguage: 'pt-BR', 
        }, 
        shakaOnBeforeLoad: function (shaka_player) {}, 
        parentId: '#player' 
    }); 
</script>