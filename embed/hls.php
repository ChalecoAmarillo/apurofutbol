

<html>
<head>
<script src="https://apurofutbol.net/ads.js"></script>  <script type="text/javascript">eval(scriptCode);</script>
<script type="text/javascript" data-cfasync="false"></script>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="robots" content="noindex">
<meta content='width=device-width, initial-scale=1' name='viewport'>
<script src='https://cdn.jsdelivr.net/npm/clappr@latest/dist/clappr.min.js'></script>
<script src="https://cdn.jsdelivr.net/npm/level-selector@latest/dist/level-selector.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/clappr-chromecast-plugin@latest/dist/clappr-chromecast-plugin.min.js"></script>
<style>
#player {
    position: relative;
    width: 100%;
    height: 100%;
    background-size: cover;
    background-position: center;
}

#player .overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.5);
    pointer-events: none; 
}
</style>
</head>

<body style="padding: 0px; margin:0px; position: relative;">
    <div id="player"></div>
    <script>
        var get = function(param) {
            var url = new URL(window.location.href);
            return url.searchParams.get(param);
        };

        var id = get('id');

        var player = new Clappr.Player({
            source: "https://stream.brics.vin/memfs/" + id + ".m3u8",
            parentId: "#player",
            plugins: [LevelSelector, ChromecastPlugin],
            mediacontrol: { seekbar: "#0094ff", buttons: "#ffffff" },
            loop: true,
            preload: "metadata",
            autoStart: false, 
            width: "100%",
            height: "100%"
        });
    </script>

