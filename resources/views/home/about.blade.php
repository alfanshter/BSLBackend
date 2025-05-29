@extends('layout.master')

@section('konten')
    <div class="main-page">
        <section>
            <div class="breadcrumbs__section breadcrumbs__section-dark bg__style pt-80 pb-130 lazyload"
                data-bg="img/demo_construction/bgabout.png" data-brk-library="component__breadcrumbs_css">
                <div class="brk-base-bg-6 breadcrumb-bg full__size-absolute"></div>
                <h2 class="font__size-40 line__height-46 font__family-montserrat font__weight-ultralight text-center">
                    About <span class="font__weight-bold">Us</span>
                </h2>
                <div class="breadcrumbs__wrapper">
                    <div class="container">
                        <ol
                            class="breadcrumb font__family-montserrat font__weight-medium font__size-12 letter-spacing-100">
                            <li class="breadcrumb__icon">
                                <a href="#"><i class="fas fa-home"></i></a>
                            </li>
                            <li>
                                <a href="#">About!<i class="fas fa-arrow-right"></i></a>
                            </li>
                            <li>
                                <a href="/about" class="opacity-50">About us</a>
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>
        <section class="container mt-110 pb-30">
            <h1 class="sr-only">Construction - About Us</h1>
            <div class="row">
                <div class="col-lg-6">
                    <div class="font__family-montserrat font__size-64 line__height-68 pt-40 text-center text-lg-left">
                        <div class="font__weight-light">From idea to real</div>
                        <div class="font__weight-bold">construction</div>
                    </div>
                    <div class="font__size-16 line__height-28 brk-dark-blur-font-color mt-40 text-center text-lg-left">
                        At PT. BIMA SAKTI LUHUR, we turn visionary concepts into reality by combining innovative design with
                        precise execution. From planning to completion, our team ensures that every project meets rigorous
                        safety and quality standards, delivering reliable and sustainable infrastructure solutions.
                    </div>
                    <div class="progress__wrapper progress__minimal mt-70" data-brk-library="component__progress_bar">
                        <div>
                            <span
                                class="font__family-open-sans font__size-13 font__weight-bold progress__bar-counter hide">99</span>
                        </div>
                        <div class="progress">
                            <div data-valuemax="100" data-valuemin="0" data-valuenow="99" class="progress__bar">
                                <span class="circle"></span>
                            </div>
                        </div>
                        <h5 class="font__family-montserrat font__size-16 font__weight-bold progress__title">
                            Hard Work
                        </h5>
                    </div>
                    <div class="progress__wrapper progress__minimal" data-brk-library="component__progress_bar">
                        <div>
                            <span
                                class="font__family-open-sans font__size-13 font__weight-bold progress__bar-counter hide">99</span>
                        </div>
                        <div class="progress">
                            <div data-valuemax="100" data-valuemin="0" data-valuenow="99" class="progress__bar">
                                <span class="circle"></span>
                            </div>
                        </div>
                        <h5 class="font__family-montserrat font__size-16 font__weight-bold progress__title">
                            Projects Delivery
                        </h5>
                    </div>
                    <div class="progress__wrapper progress__minimal mb-30" data-brk-library="component__progress_bar">
                        <div>
                            <span
                                class="font__family-open-sans font__size-13 font__weight-bold progress__bar-counter hide">99</span>
                        </div>
                        <div class="progress">
                            <div data-valuemax="100" data-valuemin="0" data-valuenow="99" class="progress__bar">
                                <span class="circle"></span>
                            </div>
                        </div>
                        <h5 class="font__family-montserrat font__size-16 font__weight-bold progress__title">
                            Customers Love
                        </h5>
                    </div>
                </div>
                <div class="col-lg-5 offset-lg-1">
                    <img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                        data-src="{{asset('img/about/470x620_1.jpg')}}" alt="alt" class="img-fluid mb-30 lazyload">
                </div>
            </div>
        </section>
        <section>
            <div class="bg-cover bg-norepeat bg-position_center bg-white bg-shaded bg-shaded_dark lazyload pt-70 pb-70"
                data-bg="{{asset('img/about/bgchart.png')}}">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-md-6">
                            <div class="chart__wrapper chart__wrapper_single chart-minimal align-items-center flex-row text-center"
                                data-brk-library="component__progress_circle">
                                <div class="chart mx-auto">
                                    <div class="chart__circle" data-valuenow="99" data-color="#1B25DC"
                                        data-color-end="#868CFF" data-color-back="rgba(255,255,255,.1)">
                                        <span class="font__family-montserrat font__size-21 chart__circle-counter">
                                            <span class="percents">0</span>%</span>
                                        <h5
                                            class="font__family-montserrat font__size-16 font__weight-bold chart__title text-white">
                                            Hard Work</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="chart__wrapper chart__wrapper_single chart-minimal align-items-center flex-row text-center"
                                data-brk-library="component__progress_circle">
                                <div class="chart mx-auto">
                                    <div class="chart__circle" data-valuenow="99" data-color="#1B25DC"
                                        data-color-end="#868CFF" data-color-back="rgba(255,255,255,.1)">
                                        <span class="font__family-montserrat font__size-21 chart__circle-counter">
                                            <span class="percents">0</span>%</span>
                                        <h5
                                            class="font__family-montserrat font__size-16 font__weight-bold chart__title text-white">
                                            Donates</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="chart__wrapper chart__wrapper_single chart-minimal align-items-center flex-row text-center"
                                data-brk-library="component__progress_circle">
                                <div class="chart mx-auto">
                                    <div class="chart__circle" data-valuenow="99" data-color="#1B25DC"
                                        data-color-end="#868CFF" data-color-back="rgba(255,255,255,.1)">
                                        <span class="font__family-montserrat font__size-21 chart__circle-counter">
                                            <span class="percents">0</span>%</span>
                                        <h5
                                            class="font__family-montserrat font__size-16 font__weight-bold chart__title text-white">
                                            Hard Work</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="chart__wrapper chart__wrapper_single chart-minimal align-items-center flex-row text-center"
                                data-brk-library="component__progress_circle">
                                <div class="chart mx-auto">
                                    <div class="chart__circle" data-valuenow="99" data-color="#1B25DC"
                                        data-color-end="#868CFF" data-color-back="rgba(255,255,255,.1)">
                                        <span class="font__family-montserrat font__size-21 chart__circle-counter">
                                            <span class="percents">0</span>%</span>
                                        <h5
                                            class="font__family-montserrat font__size-16 font__weight-bold chart__title text-white">
                                            Donates</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- <section class="brk-bg-light-dark-2 pt-50 pb-80">
            <div class="container mb-60">
                <div class="row align-items-center">
                    <div class="col-xl-3">
                        <div class="maxw-770" data-brk-library="component__title">
                            <div class="text-left">
                                <h4
                                    class="font__family-montserrat highlight-underline line__height-42 font__size-36 font__weight-bold">
                                    <span class="before wow fadeInUp"></span>
                                    <span class="before wow fadeInUp"></span>Founders
                                </h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-9">
                        <div class="font__size-16 line__height-26 brk-dark-blur-font-color mt-30">As widely expected,
                            The success of PT. BIMA SAKTI LUHUR is built on the dedication and vision of its founders, who
                            have laid a strong foundation for innovation and excellence in the construction industry. Each
                            founder brings expertise and leadership to key areas of the company:
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-3 col-md-6 col-12">
                        <article class="brk-team-persone-circle brk-base-box-shadow text-center"
                            data-brk-library="component__team">
                            <div class="brk-team-persone-circle__name-position">
                                <a href="#">
                                    <h4 class="font__family-montserrat font__weight-bold font__size-18">M Alfan Nurdin
                                    </h4>
                                </a>
                                <span
                                    class="font__family-montserrat font__weight-normal font__size-16 line__height-24">President
                                    Director</span>
                            </div>
                            <div class="brk-team-persone-circle__bg lazyload" data-bg="img/demo_construction/alfanshter.png">
                                <span class="brk-team-persone-circle__bg-overlay">
                                    <span class="before brk-base-bg-gradient-90deg"></span>
                                    <svg viewBox="0 0 270 37">
                                        <path d="M270,37H0V0A267.6,267.6,0,0,0,135.53,36.5,267.52,267.52,0,0,0,270,0Z"
                                            fill="rgb(255, 255, 255)" />
                                    </svg>
                                </span>
                                <ul class="brk-team-persone-circle__contacts">
                                    <li>
                                        <i class="fas fa-phone" aria-hidden="true"></i>
                                        <a href="tel:88001234567">8 800 123 45 67</a>
                                    </li>
                                    <li>
                                        <i class="far fa-envelope" aria-hidden="true"></i>
                                        <a href="mailto:admin@gmail.com">admin@gmail.com</a>
                                    </li>
                                    <li>
                                        <i class="fab fa-instagram" aria-hidden="true"></i>
                                        <a href="#">Alfanshter</a>
                                    </li>
                                    <li>
                                        <i class="fab fa-skype" aria-hidden="true"></i>
                                        <a href="#">skype.show</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="brk-team-persone-circle__social-links">
                                <ul>
                                    <li><a href="#"><i class="fab fa-facebook-f" aria-hidden="true"></i></a>
                                    </li>
                                    <li><a href="#"><i class="fab fa-twitter" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fab fa-google-plus-g" aria-hidden="true"></i></a>
                                    </li>
                                    <li><a href="#"><i class="fab fa-linkedin-in" aria-hidden="true"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </article>
                    </div>
                    <div class="col-xl-3 col-md-6 col-12">
                        <article class="brk-team-persone-circle brk-base-box-shadow text-center"
                            data-brk-library="component__team">
                            <div class="brk-team-persone-circle__name-position">
                                <a href="#">
                                    <h4 class="font__family-montserrat font__weight-bold font__size-18">Aris Felani
                                    </h4>
                                </a>
                                <span
                                    class="font__family-montserrat font__weight-normal font__size-16 line__height-24">HRD</span>
                            </div>
                            <div class="brk-team-persone-circle__bg lazyload" data-bg="img/demo_construction/arisfelani.png">
                                <span class="brk-team-persone-circle__bg-overlay">
                                    <span class="before brk-base-bg-gradient-90deg"></span>
                                    <svg viewBox="0 0 270 37">
                                        <path d="M270,37H0V0A267.6,267.6,0,0,0,135.53,36.5,267.52,267.52,0,0,0,270,0Z"
                                            fill="rgb(255, 255, 255)" />
                                    </svg>
                                </span>
                                <ul class="brk-team-persone-circle__contacts">
                                    <li>
                                        <i class="fas fa-phone" aria-hidden="true"></i>
                                        <a href="tel:88001234567">8 800 123 45 67</a>
                                    </li>
                                    <li>
                                        <i class="far fa-envelope" aria-hidden="true"></i>
                                        <a href="mailto:admin@gmail.com">admin@gmail.com</a>
                                    </li>
                                    <li>
                                        <i class="fab fa-instagram" aria-hidden="true"></i>
                                        <a href="#">ArisFelani</a>
                                    </li>
                                    <li>
                                        <i class="fab fa-skype" aria-hidden="true"></i>
                                        <a href="#">skype.show</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="brk-team-persone-circle__social-links">
                                <ul>
                                    <li><a href="#"><i class="fab fa-facebook-f" aria-hidden="true"></i></a>
                                    </li>
                                    <li><a href="#"><i class="fab fa-twitter" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fab fa-google-plus-g" aria-hidden="true"></i></a>
                                    </li>
                                    <li><a href="#"><i class="fab fa-linkedin-in" aria-hidden="true"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </article>
                    </div>
                    <div class="col-xl-3 col-md-6 col-12">
                        <article class="brk-team-persone-circle brk-base-box-shadow text-center"
                            data-brk-library="component__team">
                            <div class="brk-team-persone-circle__name-position">
                                <a href="#">
                                    <h4 class="font__family-montserrat font__weight-bold font__size-18">Ach.Maharudin
                                    </h4>
                                </a>
                                <span
                                    class="font__family-montserrat font__weight-normal font__size-16 line__height-24">Manager
                                    Marketing</span>
                            </div>
                            <div class="brk-team-persone-circle__bg lazyload" data-bg="img/demo_construction/maharudin.png">
                                <span class="brk-team-persone-circle__bg-overlay">
                                    <span class="before brk-base-bg-gradient-90deg"></span>
                                    <svg viewBox="0 0 270 37">
                                        <path d="M270,37H0V0A267.6,267.6,0,0,0,135.53,36.5,267.52,267.52,0,0,0,270,0Z"
                                            fill="rgb(255, 255, 255)" />
                                    </svg>
                                </span>
                                <ul class="brk-team-persone-circle__contacts">
                                    <li>
                                        <i class="fas fa-phone" aria-hidden="true"></i>
                                        <a href="tel:88001234567">8 800 123 45 67</a>
                                    </li>
                                    <li>
                                        <i class="far fa-envelope" aria-hidden="true"></i>
                                        <a href="mailto:admin@gmail.com">admin@gmail.com</a>
                                    </li>
                                    <li>
                                        <i class="fab fa-instagram" aria-hidden="true"></i>
                                        <a href="#">AchMahar</a>
                                    </li>
                                    <li>
                                        <i class="fab fa-skype" aria-hidden="true"></i>
                                        <a href="#">skype.show</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="brk-team-persone-circle__social-links">
                                <ul>
                                    <li><a href="#"><i class="fab fa-facebook-f" aria-hidden="true"></i></a>
                                    </li>
                                    <li><a href="#"><i class="fab fa-twitter" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fab fa-google-plus-g" aria-hidden="true"></i></a>
                                    </li>
                                    <li><a href="#"><i class="fab fa-linkedin-in" aria-hidden="true"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </article>
                    </div>
                    <div class="col-xl-3 col-md-6 col-12">
                        <article class="brk-team-persone-circle brk-base-box-shadow text-center"
                            data-brk-library="component__team">
                            <div class="brk-team-persone-circle__name-position">
                                <a href="#">
                                    <h4 class="font__family-montserrat font__weight-bold font__size-18">Rizki Mahmudi
                                    </h4>
                                </a>
                                <span
                                    class="font__family-montserrat font__weight-normal font__size-16 line__height-24">IT Manager</span>
                            </div>
                            <div class="brk-team-persone-circle__bg lazyload" data-bg="img/demo_construction/rizki.png">
                                <span class="brk-team-persone-circle__bg-overlay">
                                    <span class="before brk-base-bg-gradient-90deg"></span>
                                    <svg viewBox="0 0 270 37">
                                        <path d="M270,37H0V0A267.6,267.6,0,0,0,135.53,36.5,267.52,267.52,0,0,0,270,0Z"
                                            fill="rgb(255, 255, 255)" />
                                    </svg>
                                </span>
                                <ul class="brk-team-persone-circle__contacts">
                                    <li>
                                        <i class="fas fa-phone" aria-hidden="true"></i>
                                        <a href="tel:88001234567">8 800 123 45 67</a>
                                    </li>
                                    <li>
                                        <i class="far fa-envelope" aria-hidden="true"></i>
                                        <a href="mailto:admin@gmail.com">admin@gmail.com</a>
                                    </li>
                                    <li>
                                        <i class="fab fa-instagram" aria-hidden="true"></i>
                                        <a href="#">RizkiMah</a>
                                    </li>
                                    <li>
                                        <i class="fab fa-skype" aria-hidden="true"></i>
                                        <a href="#">skype.show</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="brk-team-persone-circle__social-links">
                                <ul>
                                    <li><a href="#"><i class="fab fa-facebook-f" aria-hidden="true"></i></a>
                                    </li>
                                    <li><a href="#"><i class="fab fa-twitter" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fab fa-google-plus-g" aria-hidden="true"></i></a>
                                    </li>
                                    <li><a href="#"><i class="fab fa-linkedin-in" aria-hidden="true"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </article>
                    </div>
                </div>
            </div>
        </section> -->
        <section class="container pt-70 pb-80 text-center text-xl-left">
            <div class="row">
                <div class="col-xl-3">
                    <div class="font__family-montserrat font__size-36 line__height-42 mb-30">
                        <div class="font__weight-light">Our Great</div>
                        <div class="font__weight-bold">Partners</div>
                    </div>
                    <p class="font__size-16 line__height-28 brk-dark-font-color mb-30">At PT. BIMA SAKTI LUHUR,<br>our
                        success
                        is built on strong partnerships with trusted clients, suppliers, and stakeholders. Together, we
                        deliver exceptional results in civil, construction, design, mechanical, and electrical works. These
                        collaborations have been the cornerstone of our journey, driving innovation and ensuring the highest
                        quality in every project we undertake.</p>
                    <a href="/partners"
                        class="btn btn-inside-out btn-md btn-icon-abs border-radius-25 font__family-open-sans font__weight-bold m-0"
                        data-brk-library="component__button">
                        <span class="before">View partner page</span><span class="text">Open partner page</span><span
                            class="after">View partner page</span>
                    </a>
                </div>
                <div class="col-xl-9">
                    <div class="row">
                        <div class="col-xl-4 pt-15 pb-15"><a href="#" class="logo-set"
                                data-brk-library="component__widgets">
                                <img class="logo-set__img lazyload"
                                    src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                    data-src="img/tjiwi.svg" alt="alt">
                            </a></div>
                        <div class="col-xl-4 pt-15 pb-15"><a href="#" class="logo-set"
                                data-brk-library="component__widgets">
                                <img class="logo-set__img lazyload"
                                    src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                    data-src="img/pindo.svg" alt="alt">
                            </a></div>
                        <div class="col-xl-4 pt-15 pb-15"><a href="#" class="logo-set"
                                data-brk-library="component__widgets">
                                <img class="logo-set__img lazyload"
                                    src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                    data-src="img/indah.svg" alt="alt">
                            </a></div>
                        <div class="col-xl-4 pt-15 pb-15"><a href="#" class="logo-set"
                                data-brk-library="component__widgets">
                                <img class="logo-set__img lazyload"
                                    src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                    data-src="img/ptpn.svg" alt="alt">
                            </a></div>
                        <div class="col-xl-4 pt-15 pb-15"><a href="#" class="logo-set"
                                data-brk-library="component__widgets">
                                <img class="logo-set__img lazyload"
                                    src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                    data-src="img/pakuwon.svg" alt="alt">
                            </a></div>
                        <div class="col-xl-4 pt-15 pb-15"><a href="#" class="logo-set"
                                data-brk-library="component__widgets">
                                <img class="logo-set__img lazyload"
                                    src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                    data-src="img/greenfields.svg" alt="alt">
                            </a></div>
                        <div class="col-xl-4 pt-15 pb-15"><a href="#" class="logo-set"
                                data-brk-library="component__widgets">
                                <img class="logo-set__img lazyload"
                                    src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                    data-src="img/otsuka.svg" alt="alt">
                            </a></div>
                        <div class="col-xl-4 pt-15 pb-15"><a href="#" class="logo-set"
                                data-brk-library="component__widgets">
                                <img class="logo-set__img lazyload"
                                    src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                    data-src="img/sidomuncul.svg" alt="alt">
                            </a></div>
                        <div class="col-xl-4 pt-15 pb-15"><a href="#" class="logo-set"
                                data-brk-library="component__widgets">
                                <img class="logo-set__img lazyload"
                                    src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                    data-src="img/kemira.svg" alt="alt">
                            </a></div>
                    </div>
                </div>
            </div>
        </section>
        @include('layout.media')
    </div>
@endsection
