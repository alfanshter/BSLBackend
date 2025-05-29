@extends('layout.master')

@section('konten')
<section>
    <div class="breadcrumbs__section breadcrumbs__section-dark bg__style pt-80 pb-130 lazyload"
        data-bg="img/demo_construction/bgabout.png" data-brk-library="component__breadcrumbs_css">
        <div class="brk-base-bg-6 breadcrumb-bg full__size-absolute"></div>
        <h2 class="font__size-40 line__height-46 font__family-montserrat font__weight-ultralight text-center">
            Our <span class="font__weight-bold">Products</span>
        </h2>
        <div class="breadcrumbs__wrapper">
            <div class="container">
                <ol class="breadcrumb font__family-montserrat font__weight-medium font__size-12 letter-spacing-100">
                    <li class="breadcrumb__icon">
                        <a href="#"><i class="fas fa-home"></i></a>
                    </li>
                    <li>
                        <a href="#">Products!</a>
                    </li>
                </ol>
            </div>
        </div>
    </div>
</section>
<h1 class="sr-only">Construction - Products</h1>
<section class="container pt-100 ">

    <div class="container text-center">
        <h1>Professional and Industrial Cleaning Machines</h1>
        <div class="row">
            <div class="col-md-3 item" data-toggle="modal" data-target="#pdfModal" data-pdf="{{ asset('pdf/industrialcleaningmachine.pdf') }}" onclick="setPdfUrl(this)">
                <img src="{{ asset('img/product/cleaningmachine.png') }}" alt="Industrial Cleaning Machine" class="img-fluid">
                <p>Industrial Cleaning Machine</p>
            </div>

            <div class="col-md-3 item" data-toggle="modal" data-target="#pdfModal" data-pdf="{{ asset('pdf/atis.pdf') }}" onclick="setPdfUrl(this)">
                <img src="{{ asset('img/product/atsmanipolatori.png') }}" alt="ATIS manipolatori" class="img-fluid">
                <p>ATIS manipolatori</p>
            </div>

            <div class="col-md-3 item" data-toggle="modal" data-target="#pdfModal" data-pdf="{{ asset('pdf/warehouse.pdf') }}" onclick="setPdfUrl(this)">
                <img src="{{ asset('img/product/racksistem2.png') }}" alt="Automated Warehouse Storage" class="img-fluid">
                <p>Automated Warehouse Storage</p>
            </div>
            <div class="col-md-3 item" data-toggle="modal" data-target="#pdfModal" data-pdf="{{ asset('pdf/edgeboard.pdf') }}" onclick="setPdfUrl(this)">
                <img src="{{ asset('img/product/edgeboard.png') }}" alt="Edge Board Packaging" class="img-fluid">
                <p>Edge Board Packaging</p>
            </div>
            <div class="col-md-3 item" data-toggle="modal" data-target="#pdfModal" data-pdf="{{ asset('pdf/cleaning.pdf') }}" onclick="setPdfUrl(this)">
                <img src="{{ asset('img/product/cleaning.png') }}" alt="Cleaning Solution Equipment" class="img-fluid">
                <p>Cleaning Solution Equipment</p>
            </div>

        </div>
    </div>




</section>
@include('layout.trophy')
<section class="container pt-90 pb-120">
    <div class="font__family-montserrat font__size-36 line__height-42 mb-20 text-center">
        <span class="font__weight-light">Short</span>
        <span class="font__weight-bold">FAQ</span>
    </div>
    <div class="row justify-content-center mb-130">
        <div class="col-xl-6 col-lg-7 col-md-8 col-sm-10 text-center">
            <div class="font__size-16 line__height-28 brk-dark-blur-font-color">Vestibulum fringilla pede sit amet
                augue. In
                turpis. Pellentesque posuere. Praesent turpis. Aenean posuere, tortor sed cursus feugiat.
            </div>
        </div>
    </div>
    <div class="tabs-wrapper maxw-970" data-brk-library="component__steps">
        <div class="steps__wrapper-main steps__wrapper-history">
            <div class="steps__progress"></div>
            <ul class="steps__wrapper tabs" data-tabgroup="tab-group-3">
                <li class="complete"><a href="#tab-3_1">
                        <p class="font__family-open-sans font__weight-bold font__size-14 steps__title">2008 <span
                                class="after"></span></p>
                        <span class="steps__dot"></span>
                    </a></li>
                <li class="complete"><a href="#tab-3_2" class="active">
                        <p class="font__family-open-sans font__weight-bold font__size-14 steps__title">2010 <span
                                class="after"></span></p>
                        <span class="steps__dot"></span>
                    </a></li>
                <li class=""><a href="#tab-3_3">
                        <p class="font__family-open-sans font__weight-bold font__size-14 steps__title">2012 <span
                                class="after"></span></p>
                        <span class="steps__dot"></span>
                    </a></li>
                <li class=""><a href="#tab-3_4">
                        <p class="font__family-open-sans font__weight-bold font__size-14 steps__title">2015 <span
                                class="after"></span></p>
                        <span class="steps__dot"></span>
                    </a></li>
                <li class=""><a href="#tab-3_5">
                        <p class="font__family-open-sans font__weight-bold font__size-14 steps__title">2018 <span
                                class="after"></span></p>
                        <span class="steps__dot"></span>
                    </a></li>
            </ul>
        </div>
        <div id="tab-group-3" class="tabgroup text-lg-left text-center mt-60">
            <div id="tab-3_1">
                <h4 class="font__family-montserrat font__weight-bold font__size-21">2008 Year</h4>
                <p class="font__family-open-sans text-gray-light font__size-15 mt-20">Considered an invitation do
                    introduced sufficient understood instrument it. Of decisively friendship in as collecting at. No
                    affixed be husband ye females brother garrets proceed. Least child who seven happy yet balls young.
                    Discovery sweetness principle discourse shameless bed one excellent. Sentiments of surrounded
                    friendship dispatched connection is he.</p>
            </div>
            <div id="tab-3_2">
                <h4 class="font__family-montserrat font__weight-bold font__size-21">2010 Year</h4>
                <p class="font__family-open-sans text-gray-light font__size-15 mt-20">Led ask possible mistress
                    relation elegance eat likewise debating. By message or am nothing amongst chiefly address. The its
                    enable direct men depend highly. Ham windows sixteen who inquiry fortune demands. Is be upon sang
                    fond must shew. Really boy law county she unable her sister. Feet you off its like like six. Among
                    sex are leave law built now. In built table in an rapid blush. </p>
            </div>
            <div id="tab-3_3">
                <h4 class="font__family-montserrat font__weight-bold font__size-21">2012 Year</h4>
                <p class="font__family-open-sans text-gray-light font__size-15 mt-20">Cottage out enabled was entered
                    greatly prevent message. No procured unlocked an likewise. Dear but what she been over gay felt
                    body. Six principles advantages and use entreaties decisively. Eat met has dwelling unpacked see
                    whatever followed. Court in of leave again as am. Greater sixteen to forming colonel no on be. So an
                    advice hardly barton. He be turned sudden engage manner spirit. </p>
            </div>
            <div id="tab-3_4">
                <h4 class="font__family-montserrat font__weight-bold font__size-21">2015 Year</h4>
                <p class="font__family-open-sans text-gray-light font__size-15 mt-20">Tiled say decay spoil now walls
                    meant house. My mr interest thoughts screened of outweigh removing. Evening society musical besides
                    inhabit ye my. Lose hill well up will he over on. Increasing sufficient everything men him
                    admiration unpleasing sex. Around really his use uneasy longer him man. His our pulled nature elinor
                    talked now for excuse result. Admitted add peculiar get joy doubtful.</p>
            </div>
            <div id="tab-3_5">
                <h4 class="font__family-montserrat font__weight-bold font__size-21">2018 Year</h4>
                <p class="font__family-open-sans text-gray-light font__size-15 mt-20">Eat met has dwelling unpacked see
                    whatever followed. Court in of leave again as am. Greater sixteen to forming colonel no on be. So an
                    advice hardly barton. He be turned sudden engage manner spirit. Tiled say decay spoil now walls
                    meant house. My mr interest thoughts screened of outweigh removing. Evening society musical besides
                    inhabit ye my</p>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="bg__style no-bg-sm pt-40 pb-40 pt-md-0 pb-md-0 position-relative lazyload"
        data-bg="img/demo_construction/1920x430_1.jpg">
        <span class="brk-abs-bg-overlay brk-bg-black position-absolute opacity-80"></span>
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-3">
                    <div class="info-box__wrapper-chess wow fadeInUp text-center mb-40 mb-md-0"
                        data-brk-library="component__info_box">
                        <div class="show-cont overlay__gradient">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 60 60">
                                <path fill="none" stroke="#F39C12" stroke-width="2" stroke-linecap="square"
                                    stroke-miterlimit="10"
                                    d="M20.15,34.19L29.34,25c0,0,1.41,0,3.54,2.12S35,30.66,35,30.66l-9.19,9.19" />
                                <path fill="none" stroke="#34495E" stroke-width="2" stroke-linecap="square"
                                    stroke-miterlimit="10"
                                    d="M-1.06,66.72l-5.66-5.66l26.87-26.87c0,0,1.41,0,3.54,2.12s2.12,3.54,2.12,3.54L-1.06,66.72z" />
                                <path fill="none" stroke="#34495E" stroke-width="2" stroke-linecap="square"
                                    stroke-miterlimit="10"
                                    d="M20.15,34.19L29.34,25c0,0,1.41,0,3.54,2.12S35,30.66,35,30.66l-9.19,9.19" />
                                <path fill="none" stroke="#34495E" stroke-width="2" stroke-linecap="square"
                                    stroke-miterlimit="10"
                                    d="M-1.06,66.72l-5.66-5.66l26.87-26.87c0,0,1.41,0,3.54,2.12s2.12,3.54,2.12,3.54L-1.06,66.72z" />
                                <path fill="none" stroke="#F9BF3B" stroke-width="2" stroke-linecap="square"
                                    stroke-miterlimit="10"
                                    d="M16,22c0,0-0.4-1.2-1.6-2.4C13.2,18.4,12,18,12,18s1.2-0.4,2.4-1.6C15.6,15.2,16,14,16,14s0.4,1.2,1.6,2.4C18.8,17.6,20,18,20,18s-1.2,0.4-2.4,1.6C16.4,20.8,16,22,16,22z" />
                                <path fill="none" stroke="#F9BF3B" stroke-width="2" stroke-linecap="square"
                                    stroke-miterlimit="10"
                                    d="M30,9c0,0-0.1-0.3-0.4-0.6C29.3,8.1,29,8,29,8s0.3-0.1,0.6-0.4C29.9,7.3,30,7,30,7s0.1,0.3,0.4,0.6C30.7,7.9,31,8,31,8s-0.3,0.1-0.6,0.4C30.1,8.7,30,9,30,9z" />
                                <path fill="none" stroke="#F9BF3B" stroke-width="2" stroke-linecap="square"
                                    stroke-miterlimit="10"
                                    d="M44,22c0,0-0.6-1.8-2.4-3.6C39.8,16.6,38,16,38,16s1.8-0.6,3.6-2.4C43.4,11.8,44,10,44,10s0.6,1.8,2.4,3.6C48.2,15.4,50,16,50,16s-1.8,0.6-3.6,2.4C44.6,20.2,44,22,44,22z" />
                                <path fill="none" stroke="#F9BF3B" stroke-width="2" stroke-linecap="square"
                                    stroke-miterlimit="10"
                                    d="M52,31c0,0-0.1-0.3-0.4-0.6C51.3,30.1,51,30,51,30s0.3-0.1,0.6-0.4C51.9,29.3,52,29,52,29s0.1,0.3,0.4,0.6C52.7,29.9,53,30,53,30s-0.3,0.1-0.6,0.4C52.1,30.7,52,31,52,31z" />
                                <path fill="none" stroke="#F9BF3B" stroke-width="2" stroke-linecap="square"
                                    stroke-miterlimit="10"
                                    d="M42,48c0,0-0.4-1.2-1.6-2.4C39.2,44.4,38,44,38,44s1.2-0.4,2.4-1.6C41.6,41.2,42,40,42,40s0.4,1.2,1.6,2.4C44.8,43.6,46,44,46,44s-1.2,0.4-2.4,1.6C42.4,46.8,42,48,42,48z" />
                            </svg>
                            <h3 class="font__family-montserrat font__weight-medium font__size-28">Design</h3>
                            <span class="after bg__style" style="background-image: url(img/224x314_1.jpg);"></span>
                            <span class="overlay_after brk-base-gradient-31 opacity-90"></span>
                        </div>
                        <div class="move-cont">
                            <p class="font__family-open-sans font__size-14">Aenean vulputate eleifend tellus. Aenean
                                leo ligula,
                                porttitor eu, consequat vitae</p>
                            <a href="#"
                                class="btn btn-lg border-radius-30 font__family-open-sans font__weight-bold btn-inside-out">
                                <span class="before">Read More</span>
                                <span class="text">Read More</span>
                                <span class="after">Read More</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="info-box__wrapper-chess bottom wow fadeInDown text-center mb-40 mb-md-0"
                        data-wow-delay="0.1s" data-brk-library="component__info_box">
                        <div class="show-cont overlay__gradient">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 60 60">
                                <path fill="none" stroke="#9CAAB9" stroke-width="2" stroke-linecap="square"
                                    stroke-miterlimit="10"
                                    d="M42,31h1.43l0.35,2.94l2.65,1.1L49,33l2,2l-2.04,2.56l1.1,2.65L53,40.57v2.87l-2.94,0.35l-1.1,2.65L51,49l-2,2l-2.56-2.04l-2.65,1.1L43.43,53h-2.87l-0.35-2.94l-2.65-1.1L35,51l-2-2l2.04-2.56l-1.1-2.65L31,43.43v-2.87l2.94-0.35l1.1-2.65L33,35l2-2l2.56,2.04l2.65-1.1L40.57,31H42zM42,39c-1.66,0-3,1.34-3,3c0,1.66,1.34,3,3,3c1.66,0,3-1.34,3-3C45,40.34,43.66,39,42,39z" />
                                <path fill="none" stroke="#95A5A6" stroke-width="2" stroke-linecap="square"
                                    stroke-miterlimit="10"
                                    d="M23,7h1.04l1.01,4.31l2.02,0.54l3.03-3.23l1.81,1.04l-1.28,4.23l1.48,1.48l4.23-1.28l1.05,1.81l-3.22,3.03l0.54,2.02L39,21.96l0,2.08l-4.31,1.01l-0.54,2.02l3.22,3.03l-1.04,1.81l-4.23-1.28l-1.48,1.48l1.28,4.23l-1.81,1.05l-3.03-3.23l-2.02,0.54L24.04,39l-2.09,0l-1.01-4.31l-2.02-0.54l-3.02,3.23l-1.81-1.04l1.28-4.23l-1.48-1.48L9.66,31.9L8.62,30.1l3.23-3.03l-0.54-2.02L7,24.04l0-2.09l4.31-1.01l0.54-2.02L8.62,15.9l1.04-1.81l4.24,1.28l1.48-1.48L14.1,9.66l1.81-1.04l3.03,3.23l2.02-0.54L21.96,7H23zM23,17c-3.31,0-6,2.68-6,6c0,3.31,2.68,6,6,6c3.31,0,6-2.69,6-6C29,19.68,26.31,17,23,17z" />
                            </svg>
                            <h3 class="font__family-montserrat font__weight-medium font__size-28">Development</h3>
                            <span class="after bg__style" style="background-image: url(img/224x314_2.jpg);"></span>
                            <span class="overlay_after brk-base-gradient-31 opacity-90"></span>
                        </div>
                        <div class="move-cont">
                            <p class="font__family-open-sans font__size-14">Aenean vulputate eleifend tellus. Aenean
                                leo ligula,
                                porttitor eu, consequat vitae</p>
                            <a href="#"
                                class="btn btn-lg border-radius-30 font__family-open-sans font__weight-bold btn-inside-out">
                                <span class="before">Read More</span>
                                <span class="text">Read More</span>
                                <span class="after">Read More</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="info-box__wrapper-chess wow fadeInUp text-center mb-40 mb-md-0" data-wow-delay="0.2s"
                        data-brk-library="component__info_box">
                        <div class="show-cont overlay__gradient">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 60 60">
                                <path fill="none" stroke="#34495E" stroke-width="2" stroke-linecap="square"
                                    stroke-miterlimit="10" d="M52.97,28.91C52.99,29.27,53,29.63,53,30" />
                                <path fill="none" stroke="#34495E" stroke-width="2" stroke-linecap="square"
                                    stroke-miterlimit="10" d="M51.55,21.96c0.26,0.7,0.48,1.4,0.67,2.11" />
                                <path fill="none" stroke="#34495E" stroke-width="2" stroke-linecap="square"
                                    stroke-miterlimit="10" d="M46.84,14.33c0.78,0.83,1.49,1.73,2.14,2.67" />
                                <path fill="none" stroke="#34495E" stroke-width="2" stroke-linecap="square"
                                    stroke-miterlimit="10"
                                    d="M49.8,42.19C45.75,48.75,38.27,53,30,53C17.3,53,7,42.7,7,30C7,17.3,17.3,7,30,7c4.17,0,8.22,1.11,11.78,3.24" />
                                <polyline fill="none" stroke="#34495E" stroke-width="2" stroke-linecap="square"
                                    stroke-miterlimit="10" points="43,41 51,41 51,49" />
                                <line fill="none" stroke="#34495E" stroke-width="2" stroke-linecap="square"
                                    stroke-miterlimit="10" x1="30" y1="31" x2="41"
                                    y2="24" />
                                <line fill="none" stroke="#34495E" stroke-width="2" stroke-linecap="square"
                                    stroke-miterlimit="10" x1="30" y1="31" x2="18"
                                    y2="19" />
                                <path fill="none" stroke="#34495E" stroke-width="3" stroke-linecap="square"
                                    stroke-miterlimit="10" d="M52.97,28.91C52.99,29.27,53,29.63,53,30" />
                                <path fill="none" stroke="#34495E" stroke-width="3" stroke-linecap="square"
                                    stroke-miterlimit="10" d="M51.55,21.96c0.26,0.7,0.48,1.4,0.67,2.11" />
                                <path fill="none" stroke="#34495E" stroke-width="3" stroke-linecap="square"
                                    stroke-miterlimit="10" d="M46.84,14.33c0.78,0.83,1.49,1.73,2.14,2.67" />
                                <path fill="none" stroke="#34495E" stroke-width="3" stroke-linecap="square"
                                    stroke-miterlimit="10"
                                    d="M49.8,42.19C45.75,48.75,38.27,53,30,53C17.3,53,7,42.7,7,30C7,17.3,17.3,7,30,7c4.17,0,8.22,1.11,11.78,3.24" />
                                <polyline fill="none" stroke="#34495E" stroke-width="3" stroke-linecap="square"
                                    stroke-miterlimit="10" points="43,41 51,41 51,49" />
                                <line fill="none" stroke="#34495E" stroke-width="3" stroke-linecap="square"
                                    stroke-miterlimit="10" x1="30" y1="31" x2="41"
                                    y2="24" />
                                <line fill="none" stroke="#34495E" stroke-width="3" stroke-linecap="square"
                                    stroke-miterlimit="10" x1="30" y1="31" x2="18"
                                    y2="19" />
                            </svg>
                            <h3 class="font__family-montserrat font__weight-medium font__size-28">Research</h3>
                            <span class="after bg__style" style="background-image: url(img/224x314_3.jpg);"></span>
                            <span class="overlay_after brk-base-gradient-31 opacity-90"></span>
                        </div>
                        <div class="move-cont">
                            <p class="font__family-open-sans font__size-14">Aenean vulputate eleifend tellus. Aenean
                                leo ligula,
                                porttitor eu, consequat vitae</p>
                            <a href="#"
                                class="btn btn-lg border-radius-30 font__family-open-sans font__weight-bold btn-inside-out">
                                <span class="before">Read More</span>
                                <span class="text">Read More</span>
                                <span class="after">Read More</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="info-box__wrapper-chess bottom wow fadeInDown text-center" data-wow-delay="0.3s"
                        data-brk-library="component__info_box">
                        <div class="show-cont overlay__gradient">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 60 60">
                                <circle fill="none" stroke="#34495E" stroke-width="2" stroke-linecap="square"
                                    stroke-miterlimit="10" cx="15" cy="13" r="6" />
                                <path fill="none" stroke="#e9b995" stroke-width="2" stroke-linecap="square"
                                    stroke-miterlimit="10"
                                    d="M34.33,48.29c-2.92-3.86-6.16-3.47-9.37-5.55c-2.01-1.31-4.43-1.93-6.26-4.11c-1.13-1.35-2.22-3.39-3.77-4.99c-1.25-1.29-2.54-2.87-2.14-3.6c1.71-3.03,5.99,0.36,11.39,5.67c0.09,0.09,0.24-0.1,0.17-0.22c-1-1.73-11-19.05-11-19.05c-2.76-4.78,2.49-7.46,5.2-3l6.9,11.95c0.25,0.41,0.07,0.2,0.1,0.17c0.2-0.13-1.7-4.16,1.28-5.04c3.13-0.92,3.8,3.14,4.02,3.05c0.23-0.1-1.39-3.15,1.92-3.92c1.95-0.45,2.96,1.91,3.17,1.88c0.13-0.02-0.11-2.32,2.01-2.31c2.79,0.01,5.55,5.22,8.29,10.18c1.17,2.11,1.11,6.5,3.61,9.92L34.33,48.29z" />
                                <rect x="40.89" y="34.66" transform="matrix(-0.5 -0.866 0.866 -0.5 24.789 105.6386)"
                                    fill="none" stroke="#2980B9" stroke-width="2" stroke-linecap="square"
                                    stroke-miterlimit="10" width="4" height="22" />
                                <rect x="40.89" y="34.59"
                                    transform="matrix(-0.4999 -0.8661 0.8661 -0.4999 24.8453 105.5295)"
                                    display="inline" fill="none" stroke="#34495E" stroke-width="1"
                                    stroke-linecap="square" stroke-miterlimit="10" width="4" height="22" />
                            </svg>
                            <h3 class="font__family-montserrat font__weight-medium font__size-28">Promotion</h3>
                            <span class="after bg__style" style="background-image: url(img/224x314_4.jpg);"></span>
                            <span class="overlay_after brk-base-gradient-31 opacity-90"></span>
                        </div>
                        <div class="move-cont">
                            <p class="font__family-open-sans font__size-14">Aenean vulputate eleifend tellus. Aenean
                                leo ligula,
                                porttitor eu, consequat vitae</p>
                            <a href="#"
                                class="btn btn-lg border-radius-30 font__family-open-sans font__weight-bold btn-inside-out"
                                data-brk-library="component__button">
                                <span class="before">Read More</span>
                                <span class="text">Read More</span>
                                <span class="after">Read More</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="modal fade" id="pdfModal" tabindex="-1" aria-labelledby="pdfModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content text-center">
            <div class="modal-header">
                <h5 class="modal-title" id="pdfModalLabel">Download PDF</h5>
                <button type="button" id="closeModalBtn" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>Click the button below to download the PDF file.</p>
                <a id="downloadPdfBtn" href="#" class="btn btn-primary" download>Download PDF</a>
            </div>
        </div>
    </div>
</div>



@push('scripts')
<script>
    function setPdfUrl(element) {
        var pdfUrl = element.getAttribute('data-pdf');
        var downloadBtn = document.getElementById('downloadPdfBtn');
        var closeModalBtn = document.getElementById('closeModalBtn'); // Tombol close modal

        // Set URL download
        downloadBtn.setAttribute('href', pdfUrl);

        // Tambahkan event listener untuk menutup modal setelah download
        downloadBtn.addEventListener('click', function() {
            // Tutup modal setelah 500ms (memberi waktu untuk memulai download)
            setTimeout(function() {
                // Gunakan Bootstrap's modal method untuk menutup
                var pdfModal = bootstrap.Modal.getInstance(document.getElementById('pdfModal'));
                pdfModal.hide();

                // Alternatif jika tidak pakai Bootstrap instance:
                // document.getElementById('closeModalBtn').click();
            }, 500);
        });

        // Update judul modal (opsional)
        var itemTitle = element.querySelector('p').textContent;
        document.getElementById('pdfModalLabel').textContent = 'Download ' + itemTitle;
    }
</script>
@endpush



@endsection