@extends('layout.master')

@section('konten')
    <section>
        <div class="breadcrumbs__section breadcrumbs__section-dark bg__style pt-80 pb-130 lazyload"
            data-bg="img/demo_construction/bgabout.png" data-brk-library="component__breadcrumbs_css">
            <div class="brk-base-bg-6 breadcrumb-bg full__size-absolute"></div>
            <h2 class="font__size-40 line__height-46 font__family-montserrat font__weight-ultralight text-center">
                Our <span class="font__weight-bold">History</span>
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
                            <a href="/history" class="opacity-50">History</a>
                        </li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <section class="container mt-100 mb-40 mb-lg-70">
        <h1 class="sr-only">Construction - History</h1>
        <div class="timeline timeline--vertical-squares"
            data-brk-library="component__timelines_css,component__timelines_js">
            <div class="timeline__wrapper">
                <div class="timeline__item">
                    <div class="timeline__box">
                        <span class="before brk-base-bg-gradient-bottom-blue"></span>
                        <div class="timeline__content text-left brk-dark-font-color">
                            <div class="timeline__date">
                                <div
                                    class="font__family-montserrat text-left font__weight-bold font__size-20 brk-black-font-color line__height-h2">
                                    1998, Jan 10
                                </div>
                            </div>
                            <p
                                class="mt-25 text-left font__family-oxygen font__weight-medium font__size-16 letter-spacing--1 line__height-26">
                                APT. BIMA SAKTI LUHUR was originally established on this date. The company began its journey
                                with a vision to provide high-quality services in civil, construction, design, mechanical,
                                and electrical works. This laid the foundation for its future growth and reputation in the
                                industry.
                            </p>
                        </div>
                        <span class="after"><i class="fal fa-archive"></i></span>
                    </div>
                </div>
                <div class="timeline__item">
                    <span class="timeline__active-line"></span>
                    <div class="timeline__box">
                        <span class="before brk-base-bg-gradient-bottom-blue"></span>
                        <div class="timeline__content text-left brk-dark-font-color">
                            <div class="timeline__date">
                                <div
                                    class="font__family-montserrat text-left font__weight-bold font__size-20 brk-black-font-color line__height-h2">
                                    2005, Aug 1
                                </div>
                            </div>
                            <p
                                class="mt-25 text-left font__family-oxygen font__weight-medium font__size-16 letter-spacing--1 line__height-26">
                                PT. BIMA SAKTI LUHUR was formally established under Notarial Deed No. 01 by Rixdmanto
                                Bambang Wibowo, S.H in Surabaya. This marked an important milestone as the company
                                restructured its operations to strengthen its presence in the industry.
                            </p>
                        </div>
                        <span class="after"><i class="fa fa-eyedropper"></i></span>
                    </div>
                </div>
                <div class="timeline__item">
                    <div class="timeline__box">
                        <span class="before brk-base-bg-gradient-bottom-blue"></span>
                        <div class="timeline__content text-left brk-dark-font-color">
                            <div class="timeline__date">
                                <div
                                    class="font__family-montserrat text-left font__weight-bold font__size-20 brk-black-font-color line__height-h2">
                                    2010, Sep 27
                                </div>
                            </div>
                            <p
                                class="mt-25 text-left font__family-oxygen font__weight-medium font__size-16 letter-spacing--1 line__height-26">
                                The company underwent a registration change notarized by Christiana Eka Setyawardhani,
                                S.H. This step was likely taken to adjust the company’s legal or operational status while
                                maintaining its focus on civil, construction, design, mechanical, and electrical projects.
                            </p>
                        </div>
                        <span class="after"><i class="fa fa-fire"></i></span>
                    </div>
                </div>
                <div class="timeline__item">
                    <div class="timeline__box">
                        <span class="before brk-base-bg-gradient-bottom-blue"></span>
                        <div class="timeline__content text-left brk-dark-font-color">
                            <div class="timeline__date">
                                <div
                                    class="font__family-montserrat text-left font__weight-bold font__size-20 brk-black-font-color line__height-h2">
                                    2025, Jan 1
                                </div>
                            </div>
                            <p
                                class="mt-25 text-left font__family-oxygen font__weight-medium font__size-16 letter-spacing--1 line__height-26">
                                The company has grown steadily, completing many major projects and solidifying its reputation in the industry.
                            </p>
                        </div>
                        <span class="after"><i class="fal fa-archive"></i></span>
                    </div>
                </div>
            </div>
            <div class="timeline__progress-bar">
                <a class="btn btn--bg__icon font__family-open-sans font-weight-bold font__size-16 line__height-16"
                    data-brk-library="component__button">
                    <i class="far fa-sync"></i>
                    LOAD MORE
                </a>
            </div>
        </div>
    </section>
@endsection
