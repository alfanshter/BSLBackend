@extends('layout.master')

@section('konten')
    <section>
        <div class="breadcrumbs__section breadcrumbs__section-dark bg__style pt-80 pb-130 lazyload"
            data-bg="img/demo_construction/services/bghal.png" data-brk-library="component__breadcrumbs_css">
            <div class="brk-base-bg-6 breadcrumb-bg full__size-absolute"></div>
            <h2 class="font__size-30 line__height-46 font__family-montserrat font__weight-ultralight text-center">
                <span class="font__weight-bold">PLANT OPERATION & MAINTENANCE</span>
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
                            <a href="/about" class="opacity-50">PLANT OPERATION & MAINTENANCE</a>
                        </li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <section class="container pt-5">
        <h4 class="font__size-22 font__family-montserrat fade-in">
            <span class="brk-color-font-service-hal font__weight-semibold line__height-30">BSL menyediakan Jasa operasi and
                pemeliharaan (O&M) yang terintegrasi dan terukur serta sumber daya danlayanan selama plant/pabrik
                beroperasi.
                BSL mengoperasikan pabrik untuk mencapai kapasitas desain dengan menerapkan konsep Maintenance Management
                System berbasis Kehandalan untuk mendukung operasi pabrik yang aman, hemat energi,
                efisien, dan ramah lingkungan serta mencegah terjadinya downtime pada produksi.</span>
        </h4>
    </section>

    <div class="container">
        <div class="row">
            <!-- Kolom List (Akan di atas di mobile) -->
            <div class="col-12 col-md-6 order-1">
                <section>
                    <h4 class="font__size-23 font__family-montserrat pt-3">
                        <span class="brk-color-base-dark font__weight-semibold line__height-30" data-aos="fade-down"
                            data-aos-easing="ease-in" data-aos-duration="500">
                            Kapabilitas :</span>
                    </h4>
                    <div class="pt-3">
                        <ul class="list-unstyled">
                            <li class="mb-3 text-break" data-aos="fade-down" data-aos-easing="ease-in"
                                data-aos-duration="500">1. Experience Man Power : <br>
                                <span data-aos="fade-down" data-aos-easing="ease-in" data-aos-duration="500">&nbsp;
                                    &nbsp;BSL's Man Power Are Trained Honesty, <br> &nbsp; &nbsp; Integrity & Have
                                    Good
                                    Safety Behavior</span>
                            </li>
                            <li class="mb-3 text-break" data-aos="fade-down" data-aos-easing="ease-in"
                                data-aos-duration="500">2. Experience Man Power :
                                <br><span data-aos="fade-down" data-aos-easing="ease-in" data-aos-duration="500">-Vibration
                                    Analyzer</span>
                                <br><span data-aos="fade-down" data-aos-easing="ease-in" data-aos-duration="500">-Oli
                                    Analyzer</span>
                                <br><span data-aos="fade-down" data-aos-easing="ease-in" data-aos-duration="500">-Termograph
                                    Analyzer</span>
                                <br><span data-aos="fade-down" data-aos-easing="ease-in" data-aos-duration="500">-Ultrasonic
                                    Expert</span>
                                <br><span data-aos="fade-down" data-aos-easing="ease-in" data-aos-duration="500">-ETC</span>
                            </li>
                        </ul>
                    </div>
                </section>
            </div>

            <!-- Kolom Gambar (Akan di bawah di mobile) -->
            <div class="col-12 col-md-6 order-2">
                <div class="pt-40 pb-40 pl-40 pr-40" data-brk-library="component__portfolio_page-styles">
                    <div class="brk-logos">
                        <div class="row">
                            <a href="#" class="col-6 justify-content-center align-items-center d-flex p-2">
                                <img src="{{ asset('img/demo_construction/services/hal3img.png') }}" class="img-fluid"
                                    alt="alt" data-aos="zoom-in" data-aos-duration="800">
                            </a>
                            <a href="#" class="col-6 justify-content-center align-items-center d-flex p-2">
                                <img src="{{ asset('img/demo_construction/services/hal3img2.png') }}" class="img-fluid"
                                    alt="alt" data-aos="zoom-in" data-aos-duration="800">
                            </a>
                            <a href="#" class="col-6 justify-content-center align-items-center d-flex p-2">
                                <img src="{{ asset('img/demo_construction/services/hal3img3.png') }}" class="img-fluid"
                                    alt="alt" data-aos="zoom-in" data-aos-duration="800">
                            </a>
                            <a href="#" class="col-6 justify-content-center align-items-center d-flex p-2">
                                <img src="{{ asset('img/demo_construction/services/hal3img4.png') }}" class="img-fluid"
                                    alt="alt" data-aos="zoom-in" data-aos-duration="800">
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Kolom Tabel -->
            <div class="col-12 order-3">
                <h4 class="font__size-23 font__family-montserrat pt-3 pb-3">
                    <span class="brk-color-base-dark font__weight-semibold line__height-30" data-aos="fade-right">
                        EXPERIENCE :
                    </span>
                </h4>
                <div class="table-responsive">
                    <table class="table">
                        <thead style="position: sticky; top: 0; z-index: 1; background-color: darkblue; color: white;" data-aos="fade-down">
                            <tr>
                                <th>NO</th>
                                <th>PROJECT</th>
                                <th>CLIENT</th>
                                <th>YEAR</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="table-active" data-aos="fade-right">
                                <td>1</td>
                                <td class="text-break">Maintenance Services Equipment Contract</td>
                                <td class="text-break">PT. Hercules Chemicals Indonesia - Indah Kiat Riau</td>
                                <td>(2002-2010)</td>
                            </tr>
                            <tr data-aos="fade-left">
                                <td>2</td>
                                <td class="text-break">Maintenance Services Equipment Contract</td>
                                <td class="text-break">Dinas Banjir Pemkot & Torishima - SBY</td>
                                <td>(2011)</td>
                            </tr>
                            <tr class="table-active" data-aos="fade-right">
                                <td>3</td>
                                <td class="text-break">Maintenance Services Equipment Contract</td>
                                <td class="text-break">PT.SOLENIS TECHNOLOGIES INDONESIA - Tjiwikimia & Pindo Deli 1</td>
                                <td>(2017-2019)</td>
                            </tr>
                            <tr data-aos="fade-left">
                                <td>4</td>
                                <td class="text-break">Maintenance Services Equipment Contract</td>
                                <td class="text-break">PT.Trow Nutrition Indonesia - Pasuruan</td>
                                <td>(2022-2024)</td>
                            </tr>
                            <tr class="table-active" data-aos="fade-right">
                                <td>5</td>
                                <td class="text-break">Maintenance Services Equipment Contract</td>
                                <td class="text-break">PT.Adm Animal Nutrition Indonesia - Pasruruan</td>
                                <td>(2024-On Going Project)</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    @include('layout.media')
@endsection
