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
        <ul class="brk-shop-grid-filter__button brk-shop-grid-filter__button_style-1 p-1"
            data-brk-library="component__shop_grid_filter">
            <li class="checked" data-filter="*">
                <div class="brk-shop-grid-filter__button-text">
                    <i class="fal fa-th"></i>
                    All
                </div>
                <span class="before brk-base-bg-gradient-14"></span>
            </li>
            <li data-filter=".prm">
                <div class="brk-shop-grid-filter__button-text">
                    Reengineering & Modification
                </div>
                <span class="before brk-base-bg-gradient-14"></span>
            </li>
            <li data-filter=".drr">
                <div class="brk-shop-grid-filter__button-text">
                    Demolotion, Relocation & Reactivation
                </div>
                <span class="before brk-base-bg-gradient-14"></span>
            </li>
            <li data-filter=".mro">
                <div class="brk-shop-grid-filter__button-text">
                    Maintenance, Repair & Overhoul
                </div>
                <span class="before brk-base-bg-gradient-14"></span>
            </li>
            <li data-filter=".om">
                <div class="brk-shop-grid-filter__button-text">
                    Operation & Maintenance
                </div>
                <span class="before brk-base-bg-gradient-14"></span>
            </li>
            <li data-filter=".efi">
                <div class="brk-shop-grid-filter__button-text">
                    Equipment Facribation & Installation
                </div>
                <span class="before brk-base-bg-gradient-14"></span>
            </li>
            <li data-filter=".machinemarker">
                <div class="brk-shop-grid-filter__button-text">
                    Machine Marker
                </div>
                <span class="before brk-base-bg-gradient-14"></span>
            </li>
            <li data-filter=".repair">
                <div class="brk-shop-grid-filter__button-text">
                    Warehouse & Transportation Services
                </div>
                <span class="before brk-base-bg-gradient-14"></span>
            </li>
        </ul>
        <div class="container">
            <div class="brk-shop-grid-filter__items row">
                <div class="col-xl-4 pt-15 pb-15 brk-shop-grid-filter__item projects prm">
                    <div class="post-filmstrip brk-gallery-card_shadow lazyload"
                        data-bg="{{asset('img/prm/prm1.jpg')}}"
                        data-brk-library="component__content_slider,fancybox,anime">
                        
                        
                    </div>
                </div>
                <div class="col-xl-4 pt-15 pb-15 brk-shop-grid-filter__item projects prm">
                    <div class="post-filmstrip brk-gallery-card_shadow lazyload"
                        data-bg="{{asset('img/prm/prm2.jpg')}}"
                        data-brk-library="component__content_slider,fancybox,anime">
                        
                        
                    </div>
                </div>
                <div class="col-xl-4 pt-15 pb-15 brk-shop-grid-filter__item projects prm">
                    <div class="post-filmstrip brk-gallery-card_shadow lazyload"
                        data-bg="{{asset('img/prm/prm3.jpg')}}"
                        data-brk-library="component__content_slider,fancybox,anime">
                        
                        
                    </div>
                </div>
                <div class="col-xl-4 pt-15 pb-15 brk-shop-grid-filter__item projects prm">
                    <div class="post-filmstrip brk-gallery-card_shadow lazyload"
                        data-bg="{{asset('img/prm/prm4.jpg')}}"
                        data-brk-library="component__content_slider,fancybox,anime">
                        
                        
                    </div>
                </div>

                <div class="col-xl-4 pt-15 pb-15 brk-shop-grid-filter__item projects prm">
                    <div class="post-filmstrip brk-gallery-card_shadow lazyload"
                        data-bg="{{asset('img/prm/prm4.jpg')}}"
                        data-brk-library="component__content_slider,fancybox,anime">
                        
                        
                    </div>
                </div>
                <div class="col-xl-4 pt-15 pb-15 brk-shop-grid-filter__item projects mro">
                    <div class="post-filmstrip brk-gallery-card_shadow lazyload"
                        data-bg="{{asset('img/projects/mro/mro1.jpg')}}"
                        data-brk-library="component__content_slider,fancybox,anime">
                        
                        
                    </div>
                </div>
                <div class="col-xl-4 pt-15 pb-15 brk-shop-grid-filter__item projects mro">
                    <div class="post-filmstrip brk-gallery-card_shadow lazyload"
                        data-bg="{{asset('img/projects/mro/mro2.jpg')}}"
                        data-brk-library="component__content_slider,fancybox,anime">
                        
                        
                    </div>
                </div>
                <div class="col-xl-4 pt-15 pb-15 brk-shop-grid-filter__item projects mro">
                    <div class="post-filmstrip brk-gallery-card_shadow lazyload"
                        data-bg="{{asset('img/projects/mro/mro3.jpg')}}"
                        data-brk-library="component__content_slider,fancybox,anime">
                        
                        
                    </div>
                </div>
                <div class="col-xl-4 pt-15 pb-15 brk-shop-grid-filter__item projects mro">
                    <div class="post-filmstrip brk-gallery-card_shadow lazyload"
                        data-bg="{{asset('img/projects/mro/mro4.jpg')}}"
                        data-brk-library="component__content_slider,fancybox,anime">
                        
                        
                    </div>
                </div>

                <div class="col-xl-4 pt-15 pb-15 brk-shop-grid-filter__item construction machinemarker">
                    <div class="post-filmstrip brk-gallery-card_shadow lazyload"
                        data-bg="{{asset('img/projects/mm/mm1.jpg')}}"
                        data-brk-library="component__content_slider,fancybox,anime">
                        
                        
                    </div>
                </div>
                <div class="col-xl-4 pt-15 pb-15 brk-shop-grid-filter__item construction machinemarker">
                    <div class="post-filmstrip brk-gallery-card_shadow lazyload"
                        data-bg="{{asset('img/projects/mm/mm2.jpg')}}"
                        data-brk-library="component__content_slider,fancybox,anime">
                        
                        
                    </div>
                </div>
                <div class="col-xl-4 pt-15 pb-15 brk-shop-grid-filter__item construction machinemarker">
                    <div class="post-filmstrip brk-gallery-card_shadow lazyload"
                        data-bg="{{asset('img/projects/mm/mm3.jpg')}}"
                        data-brk-library="component__content_slider,fancybox,anime">
                       
                    </div>
                </div>

                <div class="col-xl-4 pt-15 pb-15 brk-shop-grid-filter__item construction efi">
                    <div class="post-filmstrip brk-gallery-card_shadow lazyload"
                        data-bg="{{asset('img/projects/efi/ef1.jpg')}}"
                        data-brk-library="component__content_slider,fancybox,anime">

                    </div>
                </div>
                <div class="col-xl-4 pt-15 pb-15 brk-shop-grid-filter__item construction efi">
                    <div class="post-filmstrip brk-gallery-card_shadow lazyload"
                        data-bg="{{asset('img/projects/efi/ef2.jpg')}}"
                        data-brk-library="component__content_slider,fancybox,anime">

                    </div>
                </div>

                <div class="col-xl-4 pt-15 pb-15 brk-shop-grid-filter__item construction efi">
                    <div class="post-filmstrip brk-gallery-card_shadow lazyload"
                        data-bg="{{asset('img/projects/efi/ef3.jpg')}}"
                        data-brk-library="component__content_slider,fancybox,anime">

                    </div>
                </div>

                <div class="col-xl-4 pt-15 pb-15 brk-shop-grid-filter__item construction efi">
                    <div class="post-filmstrip brk-gallery-card_shadow lazyload"
                        data-bg="{{asset('img/projects/efi/ef4.jpg')}}"
                        data-brk-library="component__gallery,fancybox,anime">

                    </div>
                </div>
            
                <div class="col-xl-4 pt-15 pb-15 brk-shop-grid-filter__item construction efi">
                    <div class="post-filmstrip brk-gallery-card_shadow lazyload"
                        data-bg="{{asset('img/projects/efi/ef5.jpg')}}"
                        data-brk-library="component__gallery,fancybox,anime">

                    </div>
                </div>

                <div class="col-xl-4 pt-15 pb-15 brk-shop-grid-filter__item construction drr">
                    <div class="post-filmstrip brk-gallery-card_shadow lazyload"
                        data-bg="{{asset('img/projects/drr/drr1.jpg')}}"
                        data-brk-library="component__gallery,fancybox,anime">

                    </div>
                </div>

                <div class="col-xl-4 pt-15 pb-15 brk-shop-grid-filter__item construction drr">
                    <div class="post-filmstrip brk-gallery-card_shadow lazyload"
                        data-bg="{{asset('img/projects/drr/drr2.jpg')}}"
                        data-brk-library="component__gallery,fancybox,anime">

                    </div>
                </div>

                <div class="col-xl-4 pt-15 pb-15 brk-shop-grid-filter__item construction drr">
                    <div class="post-filmstrip brk-gallery-card_shadow lazyload"
                        data-bg="{{asset('img/projects/drr/drr3.jpg')}}"
                        data-brk-library="component__gallery,fancybox,anime">

                    </div>
                </div>

                <div class="col-xl-4 pt-15 pb-15 brk-shop-grid-filter__item construction drr">
                    <div class="post-filmstrip brk-gallery-card_shadow lazyload"
                        data-bg="{{asset('img/projects/drr/drr4.jpg')}}"
                        data-brk-library="component__gallery,fancybox,anime">

                    </div>
                </div>

             


                <div class="col-xl-4 pt-15 pb-15 brk-shop-grid-filter__item construction om">
                    <div class="post-filmstrip brk-gallery-card_shadow lazyload"
                        data-bg="{{asset('img/projects/om/om1.jpg')}}"
                        data-brk-library="component__gallery,fancybox,anime">

                    </div>
                </div>
                <div class="col-xl-4 pt-15 pb-15 brk-shop-grid-filter__item construction om">
                    <div class="post-filmstrip brk-gallery-card_shadow lazyload"
                        data-bg="{{asset('img/projects/om/om2.jpg')}}"
                        data-brk-library="component__gallery,fancybox,anime">

                    </div>
                </div>

                <div class="col-xl-4 pt-15 pb-15 brk-shop-grid-filter__item construction om">
                    <div class="post-filmstrip brk-gallery-card_shadow lazyload"
                        data-bg="{{asset('img/projects/om/om3.jpg')}}"
                        data-brk-library="component__gallery,fancybox,anime">

                    </div>
                </div>

                <div class="col-xl-4 pt-15 pb-15 brk-shop-grid-filter__item construction om">
                    <div class="post-filmstrip brk-gallery-card_shadow lazyload"
                        data-bg="{{asset('img/projects/om/om4.jpg')}}"
                        data-brk-library="component__gallery,fancybox,anime">

                    </div>
                </div>
                <div class="col-xl-4 pt-15 pb-15 brk-shop-grid-filter__item construction om">
                    <div class="post-filmstrip brk-gallery-card_shadow lazyload"
                        data-bg="{{asset('img/projects/om/om5.jpg')}}"
                        data-brk-library="component__gallery,fancybox,anime">

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