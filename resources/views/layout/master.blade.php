<!DOCTYPE html>
<html lang="en" data-brk-skin="brk-yellow.css">

<head>
    <title>PT.BIMA SAKTI LUHUR</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width,height=device-height,initial-scale=1,maximum-scale=1" />
    <meta name="format-detection" content="telephone=no" />
    <link rel="shortcut icon" href="favicon.ico" />
    <link rel="apple-touch-icon-precomposed" href="favicon.ico" />
    <meta name="theme-color" content="#2775FF" />
    <meta name="keywords" content="themeforest, theme, html, template" />
    <meta name="description" content="themeforest, theme, html, template" />
    <link rel="stylesheet" id="brk-direction-bootstrap" href="css/assets/bootstrap.css" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css"
        integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous" />
    <link rel="stylesheet" id="brk-skin-color" href="css/skins/brk-yellow.css" />
    <link id="brk-base-color" rel="stylesheet" href="css/skins/brk-base-color.css" />
    <link rel="stylesheet" id="brk-direction-offsets" href="css/assets/offsets.css" />
    <link id="brk-css-min" rel="stylesheet" href="css/assets/styles.min.css" />
    <link rel="stylesheet" href="vendor/revslider/css/settings.css" />

    <style>
        .hebe.tp-bullets:before {
            content: " ";
            position: absolute;
            width: 100%;
            height: 100%;
            background: transparent;
            padding: 10px;
            margin-left: -10px;
            margin-top: -10px;
            box-sizing: content-box;
        }

        .hebe .tp-bullet {
            width: 3px;
            height: 3px;
            position: absolute;
            background: rgba(255, 255, 255, 1);
            cursor: pointer;
            border: 5px solid rgba(0, 0, 0, 1);
            border-radius: 50%;
            box-sizing: content-box;
            -webkit-perspective: 400px;
            perspective: 400px;
            -webkit-transform: translatez(0.01px);
            transform: translatez(0.01px);
            transition: all 0.3s;
        }

        .hebe .tp-bullet:hover,
        .hebe .tp-bullet.selected {
            background: rgba(0, 0, 0, 1);
            border-color: rgba(255, 255, 255, 1);
        }

        .hebe .tp-bullet-image {
            position: absolute;
            width: 70px;
            height: 70px;
            background-position: center center;
            background-size: cover;
            visibility: hidden;
            opacity: 0;
            bottom: 3px;
            transition: all 0.3s;
            -webkit-transform-style: flat;
            transform-style: flat;
            perspective: 600px;
            -webkit-perspective: 600px;
            transform: scale(0) translateX(-50%) translateY(0%);
            -webkit-transform: scale(0) translateX(-50%) translateY(0%);
            transform-origin: 0% 100%;
            -webkit-transform-origin: 0% 100%;
            margin-bottom: 15px;
            border-radius: 6px;
        }

        .hebe .tp-bullet:hover .tp-bullet-image {
            display: block;
            opacity: 1;
            transform: scale(1) translateX(-50%) translateY(0%);
            -webkit-transform: scale(1) translateX(-50%) translateY(0%);
            visibility: visible;
        }

        .hebe.nav-dir-vertical .tp-bullet-image {
            bottom: auto;
            margin-right: 15px;
            margin-bottom: 0px;
            right: 3px;
            transform: scale(0) translateX(0px) translateY(-50%);
            -webkit-transform: scale(0) translateX(0px) translateY(-50%);
            transform-origin: 100% 0%;
            -webkit-transform-origin: 100% 0%;
        }

        .hebe.nav-dir-vertical .tp-bullet:hover .tp-bullet-image {
            transform: scale(1) translateX(0px) translateY(-50%);
            -webkit-transform: scale(1) translateX(0px) translateY(-50%);
        }

        .hebe.nav-dir-vertical.nav-pos-hor-left .tp-bullet-image {
            bottom: auto;
            margin-left: 15px;
            margin-bottom: 0px;
            left: 3px;
            transform: scale(0) translateX(0px) translateY(-50%);
            -webkit-transform: scale(0) translateX(0px) translateY(-50%);
            transform-origin: 0% 0%;
            -webkit-transform-origin: 0% 0%;
        }

        .hebe.nav-dir-vertical.nav-pos-hor-left .tp-bullet:hover .tp-bullet-image {
            transform: scale(1) translateX(0px) translateY(-50%);
            -webkit-transform: scale(1) translateX(0px) translateY(-50%);
        }

        .hebe.nav-pos-ver-top.nav-dir-horizontal .tp-bullet-image {
            bottom: auto;
            top: 3px;
            transform: scale(0) translateX(-50%) translateY(0%);
            -webkit-transform: scale(0) translateX(-50%) translateY(0%);
            transform-origin: 0% 0%;
            -webkit-transform-origin: 0% 0%;
            margin-top: 15px;
            margin-bottom: 0px;
        }

        .hebe.nav-pos-ver-top.nav-dir-horizontal .tp-bullet:hover .tp-bullet-image {
            transform: scale(1) translateX(-50%) translateY(0%);
            -webkit-transform: scale(1) translateX(-50%) translateY(0%);
        }
    </style>
    <style>
        .brk-hosted-video {
            margin-top: -60px;
        }

        .brk-hosted-video::before {
            padding-top: 70%;
        }
    </style>

</head>

<div class="brk-loader">
    <div class="brk-loader__loader"></div>
</div>

@include('layout.navbar')


@yield('konten')



@include('layout.footbar')
<a href="#top" id="toTop"></a>
<script defer="defer" src="js/scripts.min.js"></script>
<script defer="defer" src="vendor/revslider/js/jquery.themepunch.tools.min.js"></script>
<script defer="defer" src="vendor/revslider/js/jquery.themepunch.revolution.min.js"></script>
<script defer="defer" src="vendor/revslider/js/extensions/revolution.extension.actions.min.js"></script>
<script defer="defer" src="vendor/revslider/js/extensions/revolution.extension.layeranimation.min.js"></script>
<script defer="defer" src="vendor/revslider/js/extensions/revolution.extension.navigation.min.js"></script>
<script defer="defer" src="vendor/revslider/js/extensions/revolution.extension.slideanims.min.js"></script>
<script>
    var revapi23, tpj;
    (function() {
        if (!/loaded|interactive|complete/.test(document.readyState))
            document.addEventListener("DOMContentLoaded", onLoad);
        else onLoad();

        function onLoad() {
            if (tpj === undefined) {
                tpj = jQuery;
                if ("off" == "on") tpj.noConflict();
            }
            if (tpj("#rev_slider_23_1").revolution == undefined) {
                revslider_showDoubleJqueryError("#rev_slider_23_1");
            } else {
                revapi23 = tpj("#rev_slider_23_1")
                    .show()
                    .revolution({
                        sliderType: "standard",
                        jsFileLocation: "vendor/revslider/js/",
                        sliderLayout: "fullscreen",
                        dottedOverlay: "none",
                        delay: 6000,
                        navigation: {
                            keyboardNavigation: "off",
                            keyboard_direction: "horizontal",
                            mouseScrollNavigation: "off",
                            mouseScrollReverse: "default",
                            onHoverStop: "off",
                            arrows: {
                                style: "gyges",
                                enable: true,
                                hide_onmobile: true,
                                hide_under: 992,
                                hide_onleave: true,
                                hide_delay: 200,
                                hide_delay_mobile: 1200,
                                tmp: "",
                                left: {
                                    h_align: "left",
                                    v_align: "center",
                                    h_offset: 20,
                                    v_offset: 0,
                                },
                                right: {
                                    h_align: "right",
                                    v_align: "center",
                                    h_offset: 20,
                                    v_offset: 0,
                                },
                            },
                            bullets: {
                                enable: true,
                                hide_onmobile: false,
                                hide_over: 992,
                                style: "hebe",
                                hide_onleave: false,
                                direction: "horizontal",
                                h_align: "center",
                                v_align: "bottom",
                                h_offset: 0,
                                v_offset: 20,
                                space: 5,
                                tmp: '<span class="tp-bullet-image"></span>',
                            },
                        },
                        responsiveLevels: [1240, 1024, 778, 480],
                        visibilityLevels: [1240, 1024, 778, 480],
                        gridwidth: [1200, 992, 768, 576],
                        gridheight: [868, 768, 960, 720],
                        lazyType: "none",
                        minHeight: "860",
                        shadow: 0,
                        spinner: "spinner0",
                        stopLoop: "off",
                        stopAfterLoops: -1,
                        stopAtSlide: -1,
                        shuffle: "off",
                        autoHeight: "off",
                        fullScreenAutoWidth: "off",
                        fullScreenAlignForce: "off",
                        fullScreenOffsetContainer: "",
                        fullScreenOffset: "",
                        disableProgressBar: "on",
                        hideThumbsOnMobile: "off",
                        hideSliderAtLimit: 0,
                        hideCaptionAtLimit: 0,
                        hideAllCaptionAtLilmit: 0,
                        debugMode: false,
                        fallbacks: {
                            simplifyAll: "off",
                            nextSlideOnWindowFocus: "off",
                            disableFocusListener: false,
                        },
                    });
            } /* END OF revapi call */
        } /* END OF ON LOAD FUNCTION */
    })(); /* END OF WRAPPING FUNCTION */
</script>

</html>
