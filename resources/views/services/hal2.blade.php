@extends('layout.master')

@section('konten')
    <section>
        <div class="breadcrumbs__section breadcrumbs__section-dark bg__style pt-80 pb-130 lazyload"
            data-bg="img/demo_construction/services/bghal.png" data-brk-library="component__breadcrumbs_css">
            <div class="brk-base-bg-6 breadcrumb-bg full__size-absolute"></div>
            <h2 class="font__size-30 line__height-46 font__family-montserrat font__weight-ultralight text-center">
                <span class="font__weight-bold">MAINTENANCE, REPAIR & OVERHOUL</span>
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
                            <a href="/about" class="opacity-50">MAINTENANCE, REPAIR & OVERHOUL</a>
                        </li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <section class="container pt-5">
        <h4 class="font__size-22 font__family-montserrat">
            <span class="brk-color-font-service-hal font__weight-semibold line__height-30">Jasa Maintenance, Repair, &
                Overhaul (MRO) BSL berfokus pada perbaikan dan perawatan turbin, generator, pompa, kompresor, blower, motor
                listrik, katup, kelistrikan, dan peralatan instrumen.</span>
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
                        <!-- Row pertama -->
                        <div class="row mb-3">
                            <!-- Kolom pertama -->
                            <div class="col-6">
                                <h5 class="font__size-18 font__family-montserrat font__weight-bold mb-2">ROTATING</h5>
                                <ul class="list-unstyled">
                                    <li>Pumps</li>
                                    <li>Compressor</li>
                                    <li>Reciprocating Compressor</li>
                                    <li>Fan</li>
                                    <li>Blower</li>
                                    <li>Turbines</li>
                                    <li>ETC</li>
                                </ul>
                            </div>
                            <!-- Kolom kedua -->
                            <div class="col-6">
                                <h5 class="font__size-18 font__family-montserrat font__weight-bold mb-2">ELECTRICAL</h5>
                                <ul class="list-unstyled">
                                    <li>Electrical Generators</li>
                                    <li>Electrical Motor</li>
                                    <li>Power Transformer</li>
                                    <li>Control Panel</li>
                                    <li>Gas Circuit Breaker</li>
                                    <li>Switch Gear</li>
                                    <li>Power Cable</li>
                                    <li>ETC</li>
                                </ul>
                            </div>
                        </div>
                        <!-- Row kedua -->
                        <div class="row">
                            <!-- Kolom ketiga -->
                            <div class="col-6">
                                <h5 class="font__size-18 font__family-montserrat font__weight-bold mb-2">STATIC</h5>
                                <ul class="list-unstyled">
                                    <li>Pressure Vessels</li>
                                    <li>Water Tube Boilers</li>
                                    <li>Shell And Tube Boilers</li>
                                    <li>Fire Tube Boilers</li>
                                    <li>Above Ground Storage Tank</li>
                                    <li>Process Piping System</li>
                                    <li>Process Heater</li>
                                    <li>Heat Exchangers</li>
                                    <li>Valve, Pipes & Fitting</li>
                                    <li>ETC</li>
                                </ul>
                            </div>
                            <!-- Kolom keempat -->
                            <div class="col-6">
                                <h5 class="font__size-18 font__family-montserrat font__weight-bold mb-2">INSTRUMENTATION
                                </h5>
                                <ul class="list-unstyled">
                                    <li>DCS</li>
                                    <li>Analyzer</li>
                                    <li>Flow</li>
                                    <li>Level</li>
                                    <li>Pressure</li>
                                    <li>Temperature</li>
                                    <li>Instrument</li>
                                    <li>Control Valves</li>
                                    <li>Metering</li>
                                    <li>ETC</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </section>
            </div>

            <!-- Kolom Gambar (Akan di bawah di mobile) -->
            <div class="col-12 col-md-6 order-2">
                <div class="pt-40 pb-40 pl-40 pr-40" data-brk-library="component__portfolio_page-styles">
                    <div class="brk-logos">
                        <div class="row">
                            <a href="#" class="col-6 justify-content-center align-items-center d-flex p-2">
                                <img src="{{ asset('img/demo_construction/services/hal2img.png') }}" class="img-fluid"
                                    alt="alt">
                            </a>
                            <a href="#" class="col-6 justify-content-center align-items-center d-flex p-2">
                                <img src="{{ asset('img/demo_construction/services/hal2img2.png') }}" class="img-fluid"
                                    alt="alt">
                            </a>
                            <a href="#" class="col-6 offset-3 justify-content-center d-flex p-2">
                                <img src="{{ asset('img/demo_construction/services/hal2img3.png') }}" class="img-fluid"
                                    alt="alt">
                            </a>
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
                                <td class="text-break">MTC PUMP, PANEL & GENSET</td>
                                <td class="text-break">DINAS PENGENDALIAN BANJIR - SBY</td>
                                <td>(2011)</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td class="text-break">REPAIR SRCAPPER BRIDGE PRIMARY</td>
                                <td class="text-break">PT. JABABEKA INFRASTRUKTURE - Cikarang</td>
                                <td>(2012)</td>
                            </tr>
                            <tr class="table-active">
                                <td>3</td>
                                <td class="text-break">OVERHOUL POMPA EBARA</td>
                                <td class="text-break">PT.KEDAWUNG SETIA INDUSTRIAL - SBY</td>
                                <td>(2016)</td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td class="text-break">MTC & REWINDINGS SUBMERSIBLE PUMP, PANEL</td>
                                <td class="text-break">PT.TORISHIMA GUNA ENGINEERING - SBY</td>
                                <td>(2017)</td>
                            </tr>
                            <tr class="table-active">
                                <td>5</td>
                                <td class="text-break">MTC SUBMERSIBLE PUMP 250 Kw</td>
                                <td class="text-break">Dinas PENGENDALIAN BANJIR PEMKOT - SBY</td>
                                <td>(2018)</td>
                            </tr>
                            <tr>
                                <td>6</td>
                                <td class="text-break">MTC SUBMERSIBLE PUMP 75 Kw</td>
                                <td class="text-break">PT.PAKUWON JATI - SBY</td>
                                <td>(2018-2019)</td>
                            </tr>
                            <tr class="table-active">
                                <td>7</td>
                                <td class="text-break">MTC REPAIR HYDRANT TRUCK UNIT</td>
                                <td class="text-break">DINAS PEMADAM KEBAKARAN PEMKOT - SBY </td>
                                <td>(2019-2020)</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    @include('layout.media')
@endsection
