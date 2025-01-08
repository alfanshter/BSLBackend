@extends('layout.master')

@section('konten')
    <section>
        <div class="breadcrumbs__section breadcrumbs__section-dark bg__style pt-80 pb-130 lazyload"
            data-bg="img/demo_construction/services/bghal.png" data-brk-library="component__breadcrumbs_css">
            <div class="brk-base-bg-6 breadcrumb-bg full__size-absolute"></div>
            <h2 class="font__size-30 line__height-46 font__family-montserrat font__weight-ultralight text-center">
                <span class="font__weight-bold">MACHINE MAKER</span>
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
                            <a href="/about" class="opacity-50">MACHINE MAKER</a>
                        </li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <section class="container pt-5">
        <h4 class="font__size-22 font__family-montserrat">
            <span class="brk-color-font-service-hal font__weight-semibold line__height-30">BSL can support Warehouse and
                transportation services are crucial components of logistics and supply chain management for increased
                efficiency, cost reduction, improved customer service, increased supply chain visibility, scalability,
                flexibility, risk management in your factory.</span>
        </h4>
    </section>

    <div class="container">
        <div class="row">
            <!-- Kolom List (Akan di atas di mobile) -->
            <div class="col-12 col-md-6 order-1">
                <section>
                    <h4 class="font__size-23 font__family-montserrat pt-3">
                        <span class="brk-color-base-dark font__weight-semibold line__height-30">
                            Kapabilitas :</span>
                    </h4>
                    <div class="pt-3">
                        <ul class="list-unstyled">
                            <li class="mb-3 text-break font-weight-bold">1. Storage</li>
                            <li class="mb-3 text-break">&nbsp; &nbsp;Secure, Climate-Controlled Facilities <br> &nbsp;
                                &nbsp; For Inventory Storage. </li>
                            <li class="mb-3 text-break font-weight-bold">2. Inventory Management</li>
                            <li class="mb-3 text-break">&nbsp; &nbsp; Tracking, Monitoring, And Reporting <br> &nbsp; &nbsp;
                                Inventory Levels. </li>
                            <li class="mb-3 text-break font-weight-bold">3. Order Fulfillment</li>
                            <li class="mb-3 text-break">&nbsp; &nbsp; Picking, Packing And Shipping Orders. </li>
                            <li class="mb-3 text-break font-weight-bold">4. Cross-Docking</li>
                            <li class="mb-3 text-break">&nbsp; &nbsp; Transferring Goods From Incoming <br> &nbsp; &nbsp; To
                                Outgoing Transportation.</li>
                            <li class="mb-3 text-break font-weight-bold">5. Value-Add Services</li>
                            <li class="mb-3 text-break">&nbsp; &nbsp; Labeling, Re-Packaging, Assembly, And Kitting. </li>
                        </ul>
                        <div>
                            <!-- Judul di Tengah Atas -->
                            <p class="font__size-18 font__family-montserrat text-center pt-3 pb-3 font-weight-bold">
                                <span class="brk-color-font-service-hal font__weight-semibold line__height-30">
                                    Transportation Services Capabilities
                                </span>
                            </p>

                            <span class="font__size-15 font__family-montserrat bungkus d-inline-block mb-2">
                                Full Truck (TL): Fully Loaded Truck
                            </span>
                            <span class="font__size-15 font__family-montserrat bungkus d-inline-block">
                                Less Than Truckload (LTL): Smaller Shipment Combined With Other Loads.
                            </span>
                        </div>
                    </div>
                </section>
            </div>

            <div class="col-12 col-md-6 order-2">
                <div class="pt-40 pb-40 pl-40 pr-40" data-brk-library="component__portfolio_page-styles">
                    <div class="brk-logos">
                        <!-- Gambar 1 (Atas) -->
                        <div class="row">
                            <div class="col-12 justify-content-center align-items-center d-flex p-2">
                                <img src="{{ asset('img/demo_construction/services/hal6img.png') }}" class="img-fluid"
                                    alt="alt">
                            </div>
                        </div>
                        <!-- Gambar 2 (Bawah) -->
                        <div class="row">
                            <div class="col-12 justify-content-center align-items-center d-flex p-2">
                                <img src="{{ asset('img/demo_construction/services/hal6img2.png') }}" class="img-fluid"
                                    alt="alt">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Kolom Tabel -->
            <div class="col-12 order-3">
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
                                <td class="text-break">Horizontal Packaging Machine</td>
                                <td class="text-break">PT.Farmasi Sido Muncul</td>
                                <td>(2008)</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td class="text-break">Horizontal Packaging Machine</td>
                                <td class="text-break">PT.Bintang Dunia Wallet</td>
                                <td>(2008)</td>
                            </tr>
                            <tr class="table-active">
                                <td>3</td>
                                <td class="text-break">Packaging Machine F051P</td>
                                <td class="text-break">PT.Rajawali Nusantara Indo</td>
                                <td>(2012)</td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td class="text-break">Cup Sealer Machine 4x2 Line</td>
                                <td class="text-break">PDAM Jember</td>
                                <td>(2012)</td>
                            </tr>
                            <tr class="table-active">
                                <td>5</td>
                                <td class="text-break">Vertical Packaging Machine Modif Single Augher & Wigher</td>
                                <td class="text-break">PT. Saritama Food Processing</td>
                                <td>(2012)</td>
                            </tr>
                            <tr>
                                <td>6</td>
                                <td class="text-break">Inline Filling</td>
                                <td class="text-break">PT.Cheil Jedang</td>
                                <td>(2024)</td>
                            </tr>
                            <tr class="table-active">
                                <td>7</td>
                                <td class="text-break">1 Line (Auger Filler, Belt Feeding Semi Automatic Conveyor, Screw
                                    Conveyor)</td>
                                <td class="text-break">PT.Seelindo Sejahteratama </td>
                                <td>(2024)</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    @include('layout.media')
@endsection
