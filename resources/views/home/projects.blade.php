@extends('layout.master')

@section('konten')
    <section>
        <div class="breadcrumbs__section breadcrumbs__section-dark bg__style pt-80 pb-130 lazyload"
            data-bg="img/demo_construction/bgabout.png" data-brk-library="component__breadcrumbs_css">
            <div class="brk-base-bg-6 breadcrumb-bg full__size-absolute"></div>
            <h2 class="font__size-40 line__height-46 font__family-montserrat font__weight-ultralight text-center">
                Realized <span class="font__weight-bold">Projects</span>
            </h2>
            <div class="breadcrumbs__wrapper">
                <div class="container">
                    <ol
                        class="breadcrumb font__family-montserrat font__weight-medium font__size-12 letter-spacing-100">
                        <li class="breadcrumb__icon">
                            <a href="#"><i class="fas fa-home"></i></a>
                        </li>
                        <li>
                            <a href="#">Projects!</a>
                        </li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <h1 class="sr-only">Construction - Projects</h1>
    <section class="pt-100 pb-70">
        <div class="brk-shop-grid-filter">
            <ul class="brk-shop-grid-filter__button brk-shop-grid-filter__button_style-1"
                data-brk-library="component__shop_grid_filter">
                <li class="checked" data-filter="*">
                    <div class="brk-shop-grid-filter__button-text">
                        <i class="fal fa-th"></i>
                        All
                    </div>
                    <span class="before brk-base-bg-gradient-14"></span>
                </li>
                <li data-filter=".projects">
                    <div class="brk-shop-grid-filter__button-text">
                        Projects
                    </div>
                    <span class="before brk-base-bg-gradient-14"></span>
                </li>
                <li data-filter=".construction">
                    <div class="brk-shop-grid-filter__button-text">
                        Construction
                    </div>
                    <span class="before brk-base-bg-gradient-14"></span>
                </li>
                <li data-filter=".repair">
                    <div class="brk-shop-grid-filter__button-text">
                        Repair
                    </div>
                    <span class="before brk-base-bg-gradient-14"></span>
                </li>
            </ul>
            <div class="container">
                <div class="brk-shop-grid-filter__items row">
                    <div class="col-xl-4 pt-15 pb-15 brk-shop-grid-filter__item projects construction">
                        <div class="post-filmstrip brk-base-box-shadow lazyload"
                            data-bg="img/demo_construction/370x370_1.jpg"
                            data-brk-library="component__content_slider,fancybox,anime">
                            <div class="post-filmstrip__overlay brk-base-bg-gradient-50deg"></div>
                            <div class="post-filmstrip__content text-center">
                                <h3 class="font__family-montserrat font__weight-semibold font__size-21 line__height-24">
                                    The development will deliver 39 new buildings
                                </h3>
                                <div class="post-filmstrip__excerpt font__family-open-sans font__size-16 line__height-26">
                                    The practices Wickside project will deliver 475 homes and 300 jobs on a 2.9ha former
                                    waste transfer site at Hackney Wick.
                                </div>
                                <div class="links">
                                    <a href="#" class="links__permalink bg-white-20">
                                        <i class="fas fa-link"></i>
                                    </a>
                                    <a href="img/demo_construction/370x370_1.jpg" class="links__view fancybox">
                                        <i class="fas fa-search"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 pt-15 pb-15 brk-shop-grid-filter__item construction repair">
                        <div class="post-filmstrip brk-base-box-shadow lazyload"
                            data-bg="img/demo_construction/370x370_2.jpg"
                            data-brk-library="component__content_slider,fancybox,anime">
                            <div class="post-filmstrip__overlay brk-base-bg-gradient-50deg"></div>
                            <div class="post-filmstrip__content text-center">
                                <h3 class="font__family-montserrat font__weight-semibold font__size-21 line__height-24">
                                    BUJ Architects and Ash Sakula Architects
                                </h3>
                                <div class="post-filmstrip__excerpt font__family-open-sans font__size-16 line__height-26">
                                    Olympic Park that falls under the remit of the London Legacy Development Corporation.
                                </div>
                                <div class="links">
                                    <a href="#" class="links__permalink bg-white-20">
                                        <i class="fas fa-link"></i>
                                    </a>
                                    <a href="img/demo_construction/370x370_2.jpg" class="links__view fancybox">
                                        <i class="fas fa-search"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 pt-15 pb-15 brk-shop-grid-filter__item projects">
                        <div class="post-filmstrip brk-base-box-shadow lazyload"
                            data-bg="img/demo_construction/370x370_3.jpg"
                            data-brk-library="component__content_slider,fancybox,anime">
                            <div class="post-filmstrip__overlay brk-base-bg-gradient-50deg"></div>
                            <div class="post-filmstrip__content text-center">
                                <h3 class="font__family-montserrat font__weight-semibold font__size-21 line__height-24">
                                    Wickside project will deliver
                                </h3>
                                <div class="post-filmstrip__excerpt font__family-open-sans font__size-16 line__height-26">
                                    The practices’ Wickside project will deliver 475 homes and 300 jobs on a 2.9ha former
                                    waste transfer site at Hackney Wick.
                                </div>
                                <div class="links">
                                    <a href="#" class="links__permalink bg-white-20">
                                        <i class="fas fa-link"></i>
                                    </a>
                                    <a href="img/demo_construction/370x370_3.jpg" class="links__view fancybox">
                                        <i class="fas fa-search"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 pt-15 pb-15 brk-shop-grid-filter__item repair">
                        <div class="post-filmstrip brk-base-box-shadow lazyload"
                            data-bg="img/demo_construction/370x370_4.jpg"
                            data-brk-library="component__content_slider,fancybox,anime">
                            <div class="post-filmstrip__overlay brk-base-bg-gradient-50deg"></div>
                            <div class="post-filmstrip__content text-center">
                                <h3 class="font__family-montserrat font__weight-semibold font__size-21 line__height-24">
                                    The final report by Dame Judith Hackitt
                                </h3>
                                <div class="post-filmstrip__excerpt font__family-open-sans font__size-16 line__height-26">
                                    Fire and Rescue Authorities (FRAs) and the Health and Safety Executive (HSE), to oversee
                                    the approval and regulation of buildings higher than 10-storeys.
                                </div>
                                <div class="links">
                                    <a href="#" class="links__permalink bg-white-20">
                                        <i class="fas fa-link"></i>
                                    </a>
                                    <a href="img/demo_construction/370x370_4.jpg" class="links__view fancybox">
                                        <i class="fas fa-search"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 pt-15 pb-15 brk-shop-grid-filter__item projects repair">
                        <div class="post-filmstrip brk-base-box-shadow lazyload"
                            data-bg="img/demo_construction/370x370_5.jpg"
                            data-brk-library="component__content_slider,fancybox,anime">
                            <div class="post-filmstrip__overlay brk-base-bg-gradient-50deg"></div>
                            <div class="post-filmstrip__content text-center">
                                <h3 class="font__family-montserrat font__weight-semibold font__size-21 line__height-24">
                                    As widely expected, Hackitt has declined to proscribe
                                </h3>
                                <div class="post-filmstrip__excerpt font__family-open-sans font__size-16 line__height-26">
                                    Her report instead says it is for the construction industry to 'respond to the [building
                                    regulations] by shaping detailed guidance.'
                                </div>
                                <div class="links">
                                    <a href="#" class="links__permalink bg-white-20">
                                        <i class="fas fa-link"></i>
                                    </a>
                                    <a href="img/demo_construction/370x370_5.jpg" class="links__view fancybox">
                                        <i class="fas fa-search"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 pt-15 pb-15 brk-shop-grid-filter__item projects">
                        <div class="post-filmstrip brk-base-box-shadow lazyload"
                            data-bg="img/demo_construction/370x370_6.jpg"
                            data-brk-library="component__content_slider,fancybox,anime">
                            <div class="post-filmstrip__overlay brk-base-bg-gradient-50deg"></div>
                            <div class="post-filmstrip__content text-center">
                                <h3 class="font__family-montserrat font__weight-semibold font__size-21 line__height-24">
                                    Aquatic: Stock Photography from Under The Sea
                                </h3>
                                <div class="post-filmstrip__excerpt font__family-open-sans font__size-16 line__height-26">
                                    Deep below the ocean's surface there is a vibrant, vast ecosystem full of life: a rich
                                    diversity of marine life.
                                </div>
                                <div class="links">
                                    <a href="#" class="links__permalink bg-white-20">
                                        <i class="fas fa-link"></i>
                                    </a>
                                    <a href="img/demo_construction/370x370_6.jpg" class="links__view fancybox">
                                        <i class="fas fa-search"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 pt-15 pb-15 brk-shop-grid-filter__item construction repair">
                        <div class="post-filmstrip brk-base-box-shadow lazyload"
                            data-bg="img/demo_construction/370x370_7.jpg"
                            data-brk-library="component__content_slider,fancybox,anime">
                            <div class="post-filmstrip__overlay brk-base-bg-gradient-50deg"></div>
                            <div class="post-filmstrip__content text-center">
                                <h3 class="font__family-montserrat font__weight-semibold font__size-21 line__height-24">
                                    Changes to product testing
                                </h3>
                                <div class="post-filmstrip__excerpt font__family-open-sans font__size-16 line__height-26">
                                    Changes to product testing, documentation requirements and points at which a building
                                    must be approved safe, could also all have big ramifications on industry.
                                </div>
                                <div class="links">
                                    <a href="#" class="links__permalink bg-white-20">
                                        <i class="fas fa-link"></i>
                                    </a>
                                    <a href="img/demo_construction/370x370_7.jpg" class="links__view fancybox">
                                        <i class="fas fa-search"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 pt-15 pb-15 brk-shop-grid-filter__item repair">
                        <div class="post-filmstrip brk-base-box-shadow lazyload"
                            data-bg="img/demo_construction/370x370_8.jpg"
                            data-brk-library="component__content_slider,fancybox,anime">
                            <div class="post-filmstrip__overlay brk-base-bg-gradient-50deg"></div>
                            <div class="post-filmstrip__content text-center">
                                <h3 class="font__family-montserrat font__weight-semibold font__size-21 line__height-24">
                                    Dame Judith Hackitt’s
                                </h3>
                                <div class="post-filmstrip__excerpt font__family-open-sans font__size-16 line__height-26">
                                    Final report has made a number of recommendations that will have significant
                                    implications for the construction industry if or when they are passed into law.
                                </div>
                                <div class="links">
                                    <a href="#" class="links__permalink bg-white-20">
                                        <i class="fas fa-link"></i>
                                    </a>
                                    <a href="img/demo_construction/370x370_8.jpg" class="links__view fancybox">
                                        <i class="fas fa-search"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 pt-15 pb-15 brk-shop-grid-filter__item construction">
                        <div class="post-filmstrip brk-base-box-shadow lazyload"
                            data-bg="img/demo_construction/370x370_9.jpg"
                            data-brk-library="component__content_slider,fancybox,anime">
                            <div class="post-filmstrip__overlay brk-base-bg-gradient-50deg"></div>
                            <div class="post-filmstrip__content text-center">
                                <h3 class="font__family-montserrat font__weight-semibold font__size-21 line__height-24">
                                    The team carrying out the job will be a 50:50
                                </h3>
                                <div class="post-filmstrip__excerpt font__family-open-sans font__size-16 line__height-26">
                                    Joint venture between Keller and ground engineering and foundation works specialist
                                    Intrafor, which is part of Bouygues Construction.
                                </div>
                                <div class="links">
                                    <a href="#" class="links__permalink bg-white-20">
                                        <i class="fas fa-link"></i>
                                    </a>
                                    <a href="img/demo_construction/370x370_9.jpg" class="links__view fancybox">
                                        <i class="fas fa-search"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-center pt-60">
            <a href="#" class="icon__btn icon__btn-anim icon__btn-md icon__btn-invert"
                data-brk-library="component__button">
                <span class="before"></span>
                <i class="fas fa-sync" aria-hidden="true"></i>
                <span class="after"></span>
                <span class="bg"></span>
            </a>
        </div>
    </section>
@endsection
