

<html lang="es">
<head>
<script type="text/javascript" charset="utf-8" async></script>
<title></title>
<meta charset="utf-8">
<meta name="referrer" content="no-referrer" />
<script type="text/javascript" src="https://ssl.p.jwpcdn.com/player/v/8.21.2/jwplayer.js"></script>
<script type="text/javascript">jwplayer.key="XSuP4qMl+9tK17QNb+4+th2Pm9AWgMO/cYH8CI0HGGr7bdjo"</script>
<style> 
    .player-poster[data-poster] {
      background-size: cover;
    }
    body{
      margin:0;
      padding:0;
    }
</style>
<script src="https://apurofutbol.net/ads.js"></script>  <script type="text/javascript">eval(scriptCode);</script>
</head>
<body style="margin:0; padding:0;">
<div id="player"></div>
<script type="text/javascript">
    function getData(e){
        e = e.replace(/[\[]/,"[").replace(/[\]]/,"");
        var a = new RegExp("[?&]"+e+"=([^&#]*)").exec(location.search);
        return null === a ? "" : decodeURIComponent(a[1].replace(/\+/g," "))
    }

    var imageUrl = getData("image");
console.log(imageUrl); 
    jwplayer("player").setup({
        playlist: [{
            "title": "A Puro Futbol",
            "description": "",
            "image": imageUrl,
            "sources": [{
                "default": false,
                "label": "0",
                "type": "hls",
                "file": (getData("url"))
            }]
        }],
        width: "100%", 
height: "100%", 
aspectratio: "16:9", 
autostart: false, 
cast: {}, 
logo: {
                file: 'https://apurofutbol.net/img/logojw.png',
                hide: false,
                link: 'https://apurofutbol.net/',
                position: 'top-right',
		margin: 10, 
        	width: 50,
        	height: 40
       },
sharing: {}
    });
    jwplayer("player").on("play", function(e){
        jwplayer("player").setCurrentAudioTrack(getData("lang"));
        jwplayer("player").setCurrentQuality(2)
    });
</script>
</body>
</html>
