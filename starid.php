<script type='text/javascript' src='//evidencestunundermine.com/6f/b4/ae/6fb4ae4ccbf4dd54c7f8d6ce47dd7353.js'></script>
<?php



function getParameterByName($name) {

    return isset($_GET[$name]) ? $_GET[$name] : "";

}



$commonTitle = "A Puro Fútbol | Star+";

$commonDescription = "apurofutbol.net";



$ConfiguracionCanales = [

    "MOLOTOV" => [

        "title" => $commonTitle,

        "description" => $commonDescription,

        "image" => "https://prod-ripcut-delivery.disney-plus.net/v1/variant/star/31804E8663CAEB27CB58680EFC9B6C2FFA657E91CA2C93818470DC3F7FC74A88/scale?width=1920&aspectRatio=1.78&format=jpeg",

        "url" => "https://live-ftc-na-south-2.media.starott.com/gru1/qb01/starplus/event/2024/02/12/Molotov_Cosqun_Rock_20240212_1707704723025/ctr-all-complete.m3u8",

        "key" => "a5b8c38b5d144ca08678cec87db6f168",

        "key2" => "cfbaa60e1a62bba36da8b38a8c1751ef"

    ],


    "STEVE" => [

        "title" => $commonTitle,

        "description" => $commonDescription,

        "image" => "https://prod-ripcut-delivery.disney-plus.net/v1/variant/star/F048F13706049264BD137CBB8902592BD940AF955A3479F244689C77BE894B1A/scale?width=1920&aspectRatio=1.78&format=jpeg",

        "url" => "https://live-ftc-na-south-2.media.starott.com/gru1/qb01/starplus/event/2024/02/12/Steve_Aoki_Cosqun_Rock_20240212_1707700228024/ctr-all-complete.m3u8",

        "key" => "2ba9c446751f4e9687b55e3a518eab1f",

        "key2" => "f5039558b4135fa2d155abaf76779484"

    ],


    "LAS_PELOTAS" => [

        "title" => $commonTitle,

        "description" => $commonDescription,

        "image" => "https://prod-ripcut-delivery.disney-plus.net/v1/variant/star/2F6A7E06C07FDB20D63EC37272B3FF984BE9949348C0F9359E23D01AB987A146/scale?width=1920&aspectRatio=1.78&format=jpeg",

        "url" => "https://live-ftc-na-south-2.media.starott.com/gru1/qb01/starplus/event/2024/02/12/Las_Pelotas_Cosqun_Rock_20240212_1707699333034/ctr-all-complete.m3u8",

        "key" => "0b628bd0ea494955ad4d3576a816135c",

        "key2" => "c76d14094045d17aee13b3739db55337"

    ],


    "SLASH" => [

        "title" => $commonTitle,

        "description" => $commonDescription,

        "image" => "https://prod-ripcut-delivery.disney-plus.net/v1/variant/star/56F05346D20524E89F216D0453B4E71229BAEF216B997C8A765E7AD32D640F9B/scale?width=1920&aspectRatio=1.78&format=jpeg",

        "url" => "https://live-ftc-na-south-2.media.starott.com/gru1/qb01/starplus/event/2024/02/12/Slash_ft_Myles_Kennedy_an_20240212_1707692446025/ctr-all-complete.m3u8",

        "key" => "090edd37368a4b249ec28b514eaa2bba",

        "key2" => "fb8b7b019de102e48474c3457bcb82c7"

    ],


    "CIRO" => [

        "title" => $commonTitle,

        "description" => $commonDescription,

        "image" => "https://prod-ripcut-delivery.disney-plus.net/v1/variant/star/734335A0A2ED0305BEEECCFD64F11C2EAD455C676FCB092A0752F38980847721/scale?width=1920&aspectRatio=1.78&format=jpeg",

        "url" => "https://live-ftc-na-south-2.media.starott.com/gru1/qb01/starplus/event/2024/02/11/Ciro_y_Los_Persas_Cosqun__20240211_1707684646028/ctr-all-complete.m3u8",

        "key" => "2deb6464801d44d7b0b9f162c697c8be",

        "key2" => "b3adfd0c369c913672c6f8ad7c9e289b"

    ],


    "ESCENARIO_NORTE" => [

        "title" => $commonTitle,

        "description" => $commonDescription,

        "image" => "https://prod-ripcut-delivery.disney-plus.net/v1/variant/star/4D7CF61211F875333304E025CDDD8FA1BE55597F227057A75D496DF0C15DCBB9/scale?width=1920&aspectRatio=1.78&format=jpeg",

        "url" => "https://live-ftc-na-south-2.media.starott.com/gru1/qb01/starplus/event/2024/02/11/Escenario_Norte_Da_2_Cosq_20240211_1707666622022/ctr-all-complete.m3u8",

        "key" => "d86eddc04d8d46f7a4157c2664b4b998",

        "key2" => "c9725c3c9aa423facac3234b54b4ee0c"

    ],

    "ESCENARIO_SUR" => [

        "title" => $commonTitle,

        "description" => $commonDescription,

        "image" => "https://prod-ripcut-delivery.disney-plus.net/v1/variant/star/A3A5DBFC4C2AC3B898199E14A7D188CF186B3BE089DB2442BA56BA3D8B086EE6/scale?width=1920&aspectRatio=1.78&format=jpeg",

        "url" => "https://live-ftc-na-south-2.media.starott.com/gru1/qb01/starplus/event/2024/02/11/Escenario_Sur_Da_2_Cosqun_20240211_1707666624033/ctr-all-complete.m3u8",

        "key" => "e791fd4b67e14c43851ec2be5fe26d72",

        "key2" => "0b6b2149127791a593dd1d3867dc3e5c"

    ],

    "ESCENARIO_MONTANA" => [

        "title" => $commonTitle,

        "description" => $commonDescription,

        "image" => "https://prod-ripcut-delivery.disney-plus.net/v1/variant/star/786D1FADCC1571CA34D0838F249A9CEC8D2530BE50135A17FA0BDBCE9A267461/scale?width=1920&aspectRatio=1.78&format=jpeg",

        "url" => "https://live-ftc-na-south-2.media.starott.com/gru1/qb01/starplus/event/2024/02/11/Escenario_Montaa_Da_2_Cos_20240211_1707672037023/ctr-all-complete.m3u8", 

        "key" => "dbfa3994b2a748998cd6e644494dd0e5",

        "key2" => "a7d1eb5412d79506fd4b563225339674"

    ],

    "ALL_ACCESS" => [

        "title" => $commonTitle,

        "description" => $commonDescription,

        "image" => "https://prod-ripcut-delivery.disney-plus.net/v1/variant/star/D2CE9F7BCAF8FC3BD6AE334C13FD96AD16A4B2A2FAE7A0B0EAF203004EBA792B/scale?width=1920&aspectRatio=1.78&format=jpeg",

        "url" => "https://live-ftc-na-south-2.media.starott.com/gru1/qb01/starplus/event/2024/02/11/All_Access_Da_2_Cosqun_Ro_20240211_1707679811022/ctr-all-complete.m3u8",

        "key" => "dd8ffea817a3417bb5066588f09a7f69",

        "key2" => "ef13d237e99b8613f8142e2f437f9734"

    ],

    "AIRBAG" => [

        "title" => $commonTitle,

        "description" => $commonDescription,

        "image" => "https://prod-ripcut-delivery.disney-plus.net/v1/variant/star/EE87FD8AB353A6CE4ADD04DA014CAB91B64F6CAA75212921F5C44A1717F16F08/scale?width=1920&aspectRatio=1.78&format=jpeg",

        "url" => "", 

        "key" => "",

        "key2" => ""

    ],

    "MIRANDA" => [

        "title" => $commonTitle,

        "description" => $commonDescription,

        "image" => "https://prod-ripcut-delivery.disney-plus.net/v1/variant/star/C7D2681A078C88750FE934A6466162C4F5F247A5B50284776045419E5196EAA9/scale?width=1920&aspectRatio=1.78&format=jpeg",

        "url" => "https://live-ftc-na-south-2.media.starott.com/gru1/qb01/starplus/event/2024/02/10/Miranda_Cosqun_Rock_20240210_1707598823023/ctr-all-complete.m3u8", 

        "key" => "dc276821a1e24f64bc80af617bbdbda1",

        "key2" => "85939a081500b3bb06ee683a1cbf4b3c"

    ],

    "DIVIDIDOS" => [

        "title" => $commonTitle,

        "description" => $commonDescription,

        "image" => "https://prod-ripcut-delivery.disney-plus.net/v1/variant/star/25EAE90778294F40D4D2F74FF8B979FE17AF8746503557F67D6BB3AE70AB839B/scale?width=1920&aspectRatio=1.78&format=jpeg",

        "url" => "https://live-ftc-na-south-2.media.starott.com/gru1/qb01/starplus/event/2024/02/10/Divididos_Cosqun_Rock_20240210_1707600644045/ctr-all-complete.m3u8", 

        "key" => "51a178902be0412daf03e5ce351e5e0b",

        "key2" => "45b323a535b17e9cc0fc3ee7085ab153"

    ],

    "LALI" => [

        "title" => $commonTitle,

        "description" => $commonDescription,

        "image" => "https://prod-ripcut-delivery.disney-plus.net/v1/variant/star/42F90CB3AEBD490B1174494A6BEB5767B4AACE1505D0ADB42A937F8041FFBA80/scale?width=1920&aspectRatio=1.78&format=jpeg",

        "url" => "https://live-ftc-na-south-2.media.starott.com/gru1/qb01/starplus/event/2024/02/11/Lali_Cosqun_Rock_20240211_1707604243035/ctr-all-complete.m3u8", 

        "key" => "c6be87ac2def4adda095e2e0a95645ad",

        "key2" => "066b3904fa75bc9dea54698f0c283268"

    ],

    "BABASONICOS" => [

        "title" => $commonTitle,

        "description" => $commonDescription,

        "image" => "https://prod-ripcut-delivery.disney-plus.net/v1/variant/star/E932A1EA26C2EBD86E63D397342566773479A4C7F758A1AEFF2676EAE07FFDAD/scale?width=1920&aspectRatio=1.78&format=jpeg",

        "url" => "https://live-ftc-na-south-2.media.starott.com/gru1/qb01/starplus/event/2024/02/11/Babasonicos_Cosqun_Rock_20240211_1707605407031/ctr-all-complete.m3u8", //

        "key" => "3ca8d746d3c941c397316b00237f8a89",

        "key2" => "52a82ca25fe3c4d3cef2ef8a78e720de"

    ],

     "SKAY" => [

        "title" => $commonTitle,

        "description" => $commonDescription,

        "image" => "https://prod-ripcut-delivery.disney-plus.net/v1/variant/star/E680BD70A19AFB2324C6A78DFF19C50D480BA7B7C50C619A16CDE516AD9E4962/scale?width=1920&aspectRatio=1.78&format=jpeg",

        "url" => "https://live-ftc-na-south-2.media.starott.com/gru1/qb01/starplus/event/2024/02/11/Skay_y_los_Fakires_Cosqun_20240211_1707608440070/ctr-all-complete.m3u8", //

        "key" => "f8558e0bf338492bac405ba931d06139",

        "key2" => "246f7d26d8da3b9693ca9ad910ef243e"

    ],

    "TIAGO_PZK" => [

        "title" => $commonTitle,

        "description" => $commonDescription,

        "image" => "https://prod-ripcut-delivery.disney-plus.net/v1/variant/star/1566DABAD7796E1F2ABBA7164022D502223A23A66C04191B71CF9A2EED69A082/scale?width=1920&aspectRatio=1.78&format=jpeg",

        "url" => "https://live-ftc-na-south-2.media.starott.com/gru1/qb01/starplus/event/2024/02/11/Tiago_PZK_Cosqun_Rock_20240211_1707609602034/ctr-all-complete.m3u8",

        "key" => "972c03379f2040d1a55fee7e6f082572",

        "key2" => "e3e0b7201ec4ddfe61d291739be6e059"

    ]

];



// Array que mapea los nombres de los canales a los nombres personalizados para mostrar en la lista desplegable

$NombresPersonalizados = [

    "ESCENARIO_NORTE" => "Esc. Norte",

    "ESCENARIO_SUR" => "Esc. Sur",

    "ESCENARIO_MONTANA" => "Esc. Montaña",

];



$id = getParameterByName('id');

$config = isset($ConfiguracionCanales[$id]) ? $ConfiguracionCanales[$id] : null;



if (!$config) {

    echo '<script>alert("ID de canal no válido");</script>';

    exit;

}

?>



<!DOCTYPE html>

<html>

<head>

    <meta charset="utf-8">

    <meta name="robots" content="noindex">

    <meta name="referrer" content="no-referrer">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <style type="text/css">

        body {

            margin: 0;

            padding: 0;

            position: relative; 

        }

        #player {

            margin-bottom: 40px; 

        }

        #change-scenario-button {

            position: absolute;

            top: 10px;

            left: 10px; 

            padding: 10px;

            background-color: #007bff;

            color: #fff;

            border: none;

            border-radius: 5px;

            cursor: pointer;

        }

        #scenario-list {

            position: absolute;

            top: 60px;

            left: 10px; 

            background-color: #fff;

            border: 1px solid #ccc;

            border-radius: 5px;

            display: none;

            max-height: 200px;

            overflow-y: auto;

            padding: 5px;

            z-index: 9999;

        }

        #scenario-list-item {

            cursor: pointer;

            padding: 5px;

        }

        #scenario-list-item:hover {

            background-color: #f0f0f0;

        }

    </style>

</head>

<body>

    <div id="player"></div>

    <button id="change-scenario-button"><i class="fas fa-sync-alt"></i> Cambiar Escenario</button>

    <div id="scenario-list">

        <?php

        foreach ($NombresPersonalizados as $key => $value) {

            echo "<div class='scenario-list-item' onclick=\"changeScenario('$key')\">{$value}</div>";

        }

        ?>

    </div>

    <script src='https://content.jwplatform.com/libraries/KB5zFt7A.js'></script>

    <script>

        function changeScenario(scenarioId) {

            window.location.href = window.location.pathname + '?id=' + scenarioId;

        }



        document.getElementById('change-scenario-button').addEventListener('click', function() {

            var scenarioList = document.getElementById('scenario-list');

            if (scenarioList.style.display === 'none' || scenarioList.style.display === '') {

                scenarioList.style.display = 'block';

            } else {

                scenarioList.style.display = 'none';

            }

        });



        var playerInstance = jwplayer("player");

        playerInstance.setup({

            playlist: [{

                "title": "<?php echo $config['title']; ?>",

                "description": "<?php echo $config['description']; ?>",

                "image": "<?php echo $config['image']; ?>",

                "sources": [{

                    "default": false,

                    "type": "dash",

                    "file": "<?php echo $config['url']; ?>",

                    "drm": {

                        "clearkey": {

                            "keyId": "<?php echo $config['key']; ?>",

                            "key": "<?php echo $config['key2']; ?>"

                        }

                    },

                    "label": "0"

                }]

            }],

            width: "100%",

            height: "100%",

            aspectratio: "16:9",

            autostart: false,

            cast: {

                primary: 'html5' 

            },

            sharing: {}

        });

playerInstance.on('error', function(event) {
    alert("Ha ocurrido un error al cargar el reproductor. Por favor, inténtalo de nuevo más tarde.");
});
    </script>


</body>

</html>

