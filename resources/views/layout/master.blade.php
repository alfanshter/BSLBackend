<!DOCTYPE html>
<html lang="en" data-brk-skin="brk-yellow.css">

<head>
    <title>PT. BIMA SAKTI LUHUR - Engineering, Maintenance & Industrial Solutions</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width,height=device-height,initial-scale=1,maximum-scale=1" />
    <meta name="format-detection" content="telephone=no" />
    <link rel="shortcut icon" href="favicon.ico" />
    <link rel="apple-touch-icon-precomposed" href="{{ asset('favicon.ico') }}" />
    <meta name="theme-color" content="#2775FF" />
    <meta name="keywords" content="Reengineering, Maintenance, Repair, Overhaul, Warehouse, Transportation, Relocation, Fabrication, Installation, Demolition" />
    <meta name="description" content="PT. BIMA SAKTI LUHUR specializes in Reengineering, Maintenance, Relocation, Repair, Fabrication, Warehouse & Transportation Services." />
    <meta property="og:title" content="PT. BIMA SAKTI LUHUR - Engineering, Maintenance & Industrial Solutions" />
    <meta property="og:description" content="We provide Reengineering, Maintenance, Repair, Fabrication, Warehouse & Transportation Services for your industrial needs." />
    <meta property="og:image" content="{{ asset('favicon.ico') }}" />
    <meta property="og:url" content="https://www.bimasaktiluhur.com" />
    <meta property="og:type" content="website" />

    <link rel="stylesheet" id="brk-direction-bootstrap" href="{{ asset('css/assets/bootstrap.css') }}" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css"
        integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" id="brk-skin-color" href="{{ asset('css/skins/brk-yellow.css') }}" />
    <link id="brk-base-color" rel="stylesheet" href="{{ asset('css/skins/brk-base-color.css') }}" />
    <link rel="stylesheet" id="brk-direction-offsets" href="{{ asset('css/assets/offsets.css') }}" />
    <link id="brk-css-min" rel="stylesheet" href="{{ asset('css/assets/styles.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('vendor/revslider/css/settings.css') }}" />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@800&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('css/popup.css') }}" />
    

    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "Organization",
            "name": "PT. BIMA SAKTI LUHUR",
            "url": "{{ url('/') }}",
            "logo": "{{ asset('assets/logo.jpg') }}",
            "description": "We provide Reengineering, Maintenance, Repair, Fabrication, Warehouse & Transportation Services.",
            "address": [{
                    "@type": "PostalAddress",
                    "streetAddress": "Krukah Timur Street. I No.3, Baratajaya, Kec. Gubeng",
                    "addressLocality": "Surabaya",
                    "addressRegion": "East Java",
                    "postalCode": "60284",
                    "addressCountry": "ID"
                },
                {
                    "@type": "PostalAddress",
                    "streetAddress": "Jl. Nangka, Pergudangan Tanrise Southgate Blok A No. 18, Dusun Sruni",
                    "addressLocality": "Sruni",
                    "addressRegion": "East Java",
                    "addressCountry": "ID"
                }
            ],
            "contactPoint": [{
                    "@type": "ContactPoint",
                    "email": "sales@bimasaktiluhur.com",
                    "contactType": "sales"
                },
                {
                    "@type": "ContactPoint",
                    "telephone": "+62 812-3456-7890",
                    "contactType": "customer service"
                }
            ]
        }
    </script>

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

        td {
            font-family: 'Montserrat';
            font-weight: 600;
        }

        .table-responsive {
            overflow-x: auto;
            /* Memungkinkan scroll horizontal */
            overflow-y: visible;
            /* Memastikan overflow vertikal tidak diatur */
        }

        .text-overlay {
            position: absolute;
            bottom: 20px;
            /* Posisi teks sedikit di atas bagian bawah */
            left: 12px;
            /* Posisi teks dari kiri */
            color: white;
            /* Warna teks */
            text-align: left;
            /* Rata kiri */
        }

        .text-on-image {
            position: absolute;
            /* Posisi teks sedikit di atas bagian bawah */
            left: 12px;
            /* Posisi teks dari kiri */
            color: white;
            /* Warna teks */
            text-align: left;
            /* Rata kiri */
        }

        .image-caption {
            position: absolute;
            left: 20px;
            text-align: left;
            /* Memastikan teks tidak melebihi lebar gambar */
        }

        @media (max-width: 767.98px) {
            .image-caption {
                left: 10px;
                /* Sesuaikan untuk layar HP */
            }
        }

        h1 {
            font-size: 1.1rem;
            /* Ukuran font untuk h1 */
            font-weight: bold;
            margin: 0;
            color: white;
            /* Hilangkan margin default */
        }

        h2 {
            font-size: 0.9rem;
            /* Ukuran font untuk h2 */
            font-weight: 400;
            margin: 5px 0 0 0;
            color: white;
            /* Hilangkan margin default */
        }

        @font-face {
            font-family: 'Montserrat';
            src: url('/font/montserrat/Montserrat-bold.ttf') format('truetype');
            font-weight: 700;
            font-style: normal
        }

        @font-face {
            font-family: 'Montserrat';
            src: url('/font/montserrat/Montserrat-Semibold.ttf') format('truetype');
            font-weight: 600;
            font-style: normal
        }

        /* Definisikan font Montserrat Extra Bold */
        @font-face {
            font-family: 'Montserrat';
            src: url('/fonts/montserrat/Montserrat-ExtraBold.ttf') format('truetype');
            font-weight: 800;
            /* Extra Bold */
            font-style: normal;
        }

        .semiboldmontserrat {
            font-family: 'Montserrat';
            font-weight: 600;
            font-style: normal;
        }

        .extraboldmontserrat {
            font-family: 'Montserrat';
            font-weight: 800;
            font-style: normal;
        }

        .boldmontserrat {
            font-family: 'Montserrat';
            font-weight: 700;
            font-style: normal;
        }

        li {
            font-family: 'Montserrat';
            font-weight: 600;
        }

        .ebmont {
            font-family: 'Montserrat';
            font-weight: 800;
        }

        .limabelas {
            font-family: 'Montserrat';
            font-size: 15px;
        }

        .enambelas {
            font-family: 'Montserrat';
            font-size: 16px;
        }

        .tujuhbelas {
            font-family: 'Montserrat';
            font-size: 17px;
        }

        .duapuluhmontserrat {
            font-family: 'Montserrat';
            font-size: 17px;
            font-weight: 700;
        }

        .duaempat {
            font-family: 'Montserrat';
            font-size: 24px;
        }

        .bungkus {
            border: 1px solid black;
        }

        .fade-in {
            opacity: 0;
            /* Awalnya tidak terlihat */
            transform: translateY(20px);
            /* Bergeser sedikit ke bawah */
            transition: opacity 1s ease-in-out, transform 1s ease-in-out;
            /* Animasi */
        }

        .fade-in.visible {
            opacity: 1;
            /* Menjadi terlihat */
            transform: translateY(0);
            /* Posisi normal */
        }


        .timeline-container {
            display: flex;
            align-items: flex-start;
            flex-wrap: wrap;
        }

        .timeline {
            display: flex;
            flex-direction: column;
            flex: 1;
            min-width: 0;
        }

        .timeline-item {
            display: flex;
            align-items: flex-start;
            margin-bottom: 20px;
            flex-wrap: nowrap;
        }

        .timeline-dot {
            width: 12px;
            height: 12px;
            border-radius: 50%;
            margin-right: 12px;
            margin-top: 4px;
            flex-shrink: 0;
        }

        .timeline-text {
            font-size: 15px;
            font-weight: 500;
            word-wrap: break-word;
            word-break: break-word;
            white-space: normal;
            flex: 1;
        }

        .timeline-image {
            max-width: 700px;
            width: 100%;
            height: auto;
            border-radius: 8px;
            margin-left: 40px;
            flex-shrink: 0;
        }

        @media (max-width: 768px) {
            .timeline-container {
                flex-direction: column;
            }

            .timeline-image {
                margin-left: 0;
                margin-top: 20px;
            }
        }


        .item {
            margin-bottom: 50px;
            transition: transform 0.3s ease;
        }

        .item img {
            cursor: pointer;
            width: auto;
            height: 150px;
            transition: transform 0.3s ease;
        }

        .item p {
            font-family: sans-serif;
            font-weight: bold;
            font-size: 14px;
            margin-top: 30px;
        }


        .item:hover {
            transform: scale(1.05);
        }

        .item.active {
            transform: scale(1.2);
            z-index: 10;
            /* Jadi item yang diperbesar berada di atas elemen lain */
        }

        #downloadPdfBtn {
  color: white;          /* teks putih */
  background-color: #007bff; /* biru elegan */
  border: none;
  padding: 10px 20px;
  border-radius: 5px;
  text-decoration: none;
}
#downloadPdfBtn:hover {
  background-color: #0056b3;
}

    </style>

    

</head>
@extends('layout.aos')

<div class="brk-loader">
    <div class="brk-loader__loader"></div>
</div>

@include('layout.navbar')


@yield('konten')


@include('layout.footbar')
<a href="#top" id="toTop"></a>
<script src="{{ asset('js/aos.js') }}"></script>
<script defer="defer" src="{{ asset('js/scripts.min.js') }}"></script>
<script defer="defer" src="{{ asset('vendor/revslider/js/jquery.themepunch.tools.min.js') }}"></script>
<script defer="defer" src="{{ asset('vendor/revslider/js/jquery.themepunch.revolution.min.js') }}"></script>
<script defer="defer" src="{{ asset('vendor/revslider/js/extensions/revolution.extension.actions.min.js') }}"></script>
<script defer="defer" src="{{ asset('vendor/revslider/js/extensions/revolution.extension.layeranimation.min.js') }}">
</script>
<script defer="defer" src="{{ asset('vendor/revslider/js/extensions/revolution.extension.navigation.min.js') }}">
</script>
<script defer="defer" src="{{ asset('vendor/revslider/js/extensions/revolution.extension.slideanims.min.js') }}">
</script>
<script></script>
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
    })();
    /* END OF WRAPPING FUNCTION */
    document.addEventListener("DOMContentLoaded", function() {
        const fadeElements = document.querySelectorAll('.fade-in');

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('visible'); // Tambahkan kelas visible
                }
            });
        });

        fadeElements.forEach(el => observer.observe(el));
    });
</script>
<!-- Script khusus dari halaman lain -->
@stack('scripts')
</html>