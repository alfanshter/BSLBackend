@extends('layout.master')

@section('konten')
    <section>
        <div class="breadcrumbs__section breadcrumbs__section-dark bg__style pt-80 pb-130 lazyload"
            data-bg="img/demo_construction/services/bghal.png" data-brk-library="component__breadcrumbs_css">
            <div class="brk-base-bg-6 breadcrumb-bg full__size-absolute"></div>
            <h2 class="font__size-30 line__height-46 font__family-montserrat font__weight-ultralight text-center">
                <span class="font__weight-bold">WAREHOUSE & TRANSPORTATION SERVICE</span>
            </h2>
            <div class="breadcrumbs__wrapper pb-5">
                <div class="container">
                    <ol class="breadcrumb font__family-montserrat font__weight-medium font__size-12 letter-spacing-100">
                        <li class="breadcrumb__icon">
                            <a href="#"><i class="fas fa-home"></i></a>
                        </li>
                        <li>
                            <a href="/services">Services!<i class="fas fa-arrow-right"></i></a>
                        </li>
                        <li>
                            <a href="/about" class="opacity-50">WAREHOUSE & TRANSPORTATION SERVICE</a>
                        </li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <section class="container pt-5">
        <h4 class="font__size-22 font__family-montserrat">
            <span class="brk-color-font-service-hal font__weight-semibold line__height-30">BSL can support factory owners in
                making packaging machines with modern systems and low maintenance
                costs that can be used for the implementation of powders, liquids, and pastes.</span>
        </h4>
    </section>

    <div class="container">
        <div class="row">
            <!-- Kolom List (Akan di atas di mobile) -->
            <div class="col-12 col-md-6 order-md-2 order-1">
                <section>
                    <h4 class="font__size-23 font__family-montserrat pt-3">
                        <span class="brk-color-base-dark font__weight-semibold line__height-30">
                            Machine Maker Capabillities :</span>
                    </h4>
                    <div class="pt-3">
                        <ul class="list-unstyled">
                            <li class="font__size-18 font__weight-bold mb-3">
                                1. Vertical Machine
                            </li>
                            <li class="font__size-18 font__weight-bold mb-3">
                                2. Horizontal Machine
                            </li>
                        </ul>
                    </div>
                </section>
            </div>

            <!-- Kolom Tabel -->
            <div class="col-12 col-md-6 order-md-3 order-2">
                <h4 class="font__size-23 font__family-montserrat pt-3 pb-3">
                    <span class="brk-color-base-dark font__weight-semibold line__height-30">
                        EXPERIENCE :
                    </span>
                </h4>
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead style="position: sticky; top: 0; z-index: 1; background-color: darkblue; color: white;">
                            <tr>
                                <th>NO</th>
                                <th>PROJECT</th>
                                <th>CLIENT</th>
                                <th>YEAR</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="table-active">
                                <td>1</td>
                                <td>Repacking Jumbo Bag To Sack Bag & Tote Bin IBC To Drum</td>
                                <td>PT.Ashland Asia - PT.Hercules Chemical Indonesia</td>
                                <td>(2010-2011)</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Repacking Jumbo Bag To Sack Bag</td>
                                <td>PT.Trouw Nutrition Indonesia</td>
                                <td>(2013)</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Kolom Gambar -->
            <div class="col-12 order-3 mt-4">
                <div class="row">
                    <div class="col-12 col-sm-6 mb-3">
                        <img src="{{ asset('img/demo_construction/services/hal7img.png') }}" alt="alt" class="img-fluid">
                    </div>
                    <div class="col-12 col-sm-6 mb-3">
                        <img src="{{ asset('img/demo_construction/services/hal7img2.png') }}" alt="alt" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('layout.media')
@endsection
