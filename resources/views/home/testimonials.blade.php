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
                            <a href="/testimonials" class="opacity-50">Testimonials</a>
                        </li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <h1 class="sr-only">Construction - History</h1>
    <section class="container pt-120 pb-70">
        <div class="text-center font__family-montserrat font__weight-light font__size-36 line__height-42 mb-50">
            Testimonials <span class="font__weight-bold">of Our Clients</span>
        </div>
        <div class="brk-testimonials-dash-four" data-brk-library="component__testimonials,slider__swiper">
            <div class="dash-four-slider swiper-container">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="brk-testimonials-dash-four__item text-center"
                            data-img="img/demo_construction/70x70_2.jpg">
                            <i class="fa fa-quote-right font__size-64"></i>
                            <h4 class="brk-testimonials-dash-four__title font__family-open-sans font__weight-bold">John
                                Davis</h4>
                            <div class="brk-testimonials-dash-four__text font__family-open-sans">As widely expected, Hackitt
                                "PT. BIMA SAKTI LUHUR provided exceptional service for our construction project. The team
                                was professional, timely, and delivered high-quality results. Highly recommended!"
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brk-testimonials-dash-four__item text-center"
                            data-img="img/demo_construction/70x70_1.jpg">
                            <i class="fa fa-quote-right font__size-64"></i>
                            <h4 class="brk-testimonials-dash-four__title font__family-open-sans font__weight-bold">Maria
                                Lopez</h4>
                            <div class="brk-testimonials-dash-four__text font__family-open-sans">The final report by Dame
                                "The company did a great job with the mechanical and electrical work for our new office.
                                Communication could have been better at times, but the end result was excellent!"
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brk-testimonials-dash-four__item text-center"
                            data-img="img/demo_construction/70x70_3.jpg">
                            <i class="fa fa-quote-right font__size-64"></i>
                            <h4 class="brk-testimonials-dash-four__title font__family-open-sans font__weight-bold">Aditya
                                Pratama</h4>
                            <div class="brk-testimonials-dash-four__text font__family-open-sans">"I’m very satisfied with
                                their civil engineering services. The team was very responsive to our needs and ensured the
                                project was completed on schedule. Amazing work!"
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brk-testimonials-dash-four__item text-center"
                            data-img="img/demo_construction/70x70_4.jpg">
                            <i class="fa fa-quote-right font__size-64"></i>
                            <h4 class="brk-testimonials-dash-four__title font__family-open-sans font__weight-bold">Sarah
                                Thompson</h4>
                            <div class="brk-testimonials-dash-four__text font__family-open-sans">"The design and
                                construction team was very skilled and creative. There was a minor delay in the delivery,
                                but the overall outcome exceeded our expectations."</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="dash-four-pagination"></div>
            <div class="brk-testimonials-dash-four__layout lazyload" data-bg="img/1920_174_1.jpg">
                <div class="brk-abs-bg-overlay bg-primary"></div>
            </div>
        </div>
    </section>
    <section class="bg-cover position-relative pt-60 pb-60 lazyload" data-bg="img/demo_construction/1920x800_1.jpg">
        <div class="brk-layer brk-bg-black position-absolute opacity-50"></div>
        <div class="container position-relative brk-z-index-10">
            <div
                class="text-center font__family-montserrat font__weight-light font__size-36 line__height-42 mb-50 text-white">
                Testimonials <span class="font__weight-bold">of Companies</span>
            </div>
            <div class="brk-testimonials-dash-four" data-brk-library="component__testimonials,slider__swiper">
                <div class="dash-four-slider swiper-container">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="brk-testimonials-dash-four__item text-center"
                                data-img="img/demo_construction/70x70_2.jpg">
                                <i class="fa fa-quote-right font__size-64"></i>
                                <h4 class="brk-testimonials-dash-four__title font__family-open-sans font__weight-bold">Ostin
                                    Paterson</h4>
                                <div class="brk-testimonials-dash-four__text font__family-open-sans">As widely expected,
                                    Hackitt has declined to proscribe the use of flammable materials in cladding systems,
                                    despite widespread calls for her to do so. Her report instead says it is for the
                                    construction industry to 'respond to the [building regulations] by shaping detailed
                                    guidance to support the delivery of those outcomes.'</div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="brk-testimonials-dash-four__item text-center"
                                data-img="img/demo_construction/70x70_1.jpg">
                                <i class="fa fa-quote-right font__size-64"></i>
                                <h4 class="brk-testimonials-dash-four__title font__family-open-sans font__weight-bold">Anna
                                    Jonson</h4>
                                <div class="brk-testimonials-dash-four__text font__family-open-sans">The final report by
                                    Dame Judith Hackitt, published this morning, recommends the creation of a new
                                    organisation, made up of Local Authority Building Control (LABC), Fire and Rescue
                                    Authorities (FRAs) and the Health and Safety Executive (HSE), to oversee the approval
                                    and regulation of buildings higher than 10-storeys.</div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="brk-testimonials-dash-four__item text-center"
                                data-img="img/demo_construction/70x70_3.jpg">
                                <i class="fa fa-quote-right font__size-64"></i>
                                <h4 class="brk-testimonials-dash-four__title font__family-open-sans font__weight-bold">
                                    Jacson Mit</h4>
                                <div class="brk-testimonials-dash-four__text font__family-open-sans">The A$11bn (?6.2bn)
                                    Metro Tunnel Project in Melbourne is set to see the creation of a second underground
                                    train route through the central business district and the creation of five new
                                    underground stations.</div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="brk-testimonials-dash-four__item text-center"
                                data-img="img/demo_construction/70x70_4.jpg">
                                <i class="fa fa-quote-right font__size-64"></i>
                                <h4 class="brk-testimonials-dash-four__title font__family-open-sans font__weight-bold">Mike
                                    Paterson</h4>
                                <div class="brk-testimonials-dash-four__text font__family-open-sans">Changes to product
                                    testing, documentation requirements and points at which a building must be approved
                                    safe, could also all have big ramifications on industry.</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="dash-four-pagination"></div>
                <div class="brk-testimonials-dash-four__layout lazyload" data-bg="img/1920_174_1.jpg">
                    <div class="brk-abs-bg-overlay bg-primary"></div>
                </div>
            </div>
        </div>
    </section>
    <section class="container pt-70 pb-90">
        <div class="text-center font__family-montserrat font__weight-light font__size-36 line__height-42 mb-50">
            Testimonials <span class="font__weight-bold">of Our Staff</span>
        </div>
        <div class="brk-testimonials-dash-four" data-brk-library="component__testimonials,slider__swiper">
            <div class="dash-four-slider swiper-container">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="brk-testimonials-dash-four__item text-center"
                            data-img="img/demo_construction/70x70_2.jpg">
                            <i class="fa fa-quote-right font__size-64"></i>
                            <h4 class="brk-testimonials-dash-four__title font__family-open-sans font__weight-bold">Ostin
                                Paterson</h4>
                            <div class="brk-testimonials-dash-four__text font__family-open-sans">As widely expected,
                                Hackitt has declined to proscribe the use of flammable materials in cladding systems,
                                despite widespread calls for her to do so. Her report instead says it is for the
                                construction industry to 'respond to the [building regulations] by shaping detailed guidance
                                to support the delivery of those outcomes.'</div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brk-testimonials-dash-four__item text-center"
                            data-img="img/demo_construction/70x70_1.jpg">
                            <i class="fa fa-quote-right font__size-64"></i>
                            <h4 class="brk-testimonials-dash-four__title font__family-open-sans font__weight-bold">Anna
                                Jonson</h4>
                            <div class="brk-testimonials-dash-four__text font__family-open-sans">The final report by Dame
                                Judith Hackitt, published this morning, recommends the creation of a new organisation, made
                                up of Local Authority Building Control (LABC), Fire and Rescue Authorities (FRAs) and the
                                Health and Safety Executive (HSE), to oversee the approval and regulation of buildings
                                higher than 10-storeys.</div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brk-testimonials-dash-four__item text-center"
                            data-img="img/demo_construction/70x70_3.jpg">
                            <i class="fa fa-quote-right font__size-64"></i>
                            <h4 class="brk-testimonials-dash-four__title font__family-open-sans font__weight-bold">Jacson
                                Mit</h4>
                            <div class="brk-testimonials-dash-four__text font__family-open-sans">The A$11bn (?6.2bn) Metro
                                Tunnel Project in Melbourne is set to see the creation of a second underground train route
                                through the central business district and the creation of five new underground stations.
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brk-testimonials-dash-four__item text-center"
                            data-img="img/demo_construction/70x70_4.jpg">
                            <i class="fa fa-quote-right font__size-64"></i>
                            <h4 class="brk-testimonials-dash-four__title font__family-open-sans font__weight-bold">Mike
                                Paterson</h4>
                            <div class="brk-testimonials-dash-four__text font__family-open-sans">Changes to product
                                testing, documentation requirements and points at which a building must be approved safe,
                                could also all have big ramifications on industry.</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="dash-four-pagination"></div>
            <div class="brk-testimonials-dash-four__layout lazyload" data-bg="img/1920_174_1.jpg">
                <div class="brk-abs-bg-overlay bg-primary"></div>
            </div>
        </div>
    </section>
@endsection
