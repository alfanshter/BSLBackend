@extends('layout.master')

@section('konten')
    <section>
        <div class="breadcrumbs__section breadcrumbs__section-dark bg__style pt-80 pb-130 lazyload"
            data-bg="img/demo_construction/services/bghal.png" data-brk-library="component__breadcrumbs_css">
            <div class="brk-base-bg-6 breadcrumb-bg full__size-absolute"></div>
            <h2 class="font__size-30 line__height-46 font__family-montserrat font__weight-ultralight text-center">
                <span class="font__weight-bold">WAREHOUSE SOLUTION</span>
            </h2>
            <div class="breadcrumbs__wrapper pb-5">
                <div class="container">
                    <ol class="breadcrumb font__family-montserrat font__weight-medium font__size-12 letter-spacing-100">
                        <li class="breadcrumb__icon">
                            <a href="#"><i class="fas fa-home"></i></a>
                        </li>
                        <li>
                            <a href="/products">Products!<i class="fas fa-arrow-right"></i></a>
                        </li>
                        <li>
                            <a href="/products-warehouse-solution" class="opacity-50">WAREHOUSE SOLUTION</a>
                        </li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <div class="container">
        <div class="row mt-5 mb-5">
            <div class="col">
                <img src="{{ asset('img/demo_construction/services/hal8img.png') }}" alt="">
            </div>
        </div>
    </div>

    @include('layout.media')
@endsection
