@extends('layout.master')

@section('konten')
    <section>
        <div class="breadcrumbs__section breadcrumbs__section-dark bg__style pt-80 pb-130 lazyload"
            data-bg="img/demo_construction/services/bghal.png" data-brk-library="component__breadcrumbs_css">
            <div class="brk-base-bg-6 breadcrumb-bg full__size-absolute"></div>
            <h2 class="font__size-30 line__height-46 font__family-montserrat font__weight-ultralight text-center">
                <span class="font__weight-bold">PLANT REENGENERING & MODIFICATION</span>
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
                            <a href="/about" class="opacity-50">PLANT REENGENERING & MODIFICATION</a>
                        </li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <section class="container pt-5">
        <h4 class="font__size-22 font__family-montserrat">
            <span class="brk-color-font-service-hal font__weight-semibold line__height-30">BSL dapat membantu pemilik pabrik
                untuk mengoptimalkan kinerja kapasitas pabrik, <br> Memperbaiki
                debottlenecking, memecahkan masalah pabrik dan membuat pabrik anda lebih <br> Efisien serta ramah
                lingkungan</span>
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
                            <li class="mb-2 text-break">1. Studi Kemampuan Dari Konseptual Desain</li>
                            <li class="mb-2 text-break">2. Pengembangan Desain Dari Detail Rekayasa</li>
                            <li class="mb-2 text-break">3. Pengembangan Modifikasi Paket Peralatan</li>
                            <li class="mb-2 text-break">4. Pekerjaan Di Tempat Saat / Modifikasi Installasi</li>
                            <li class="mb-2 text-break">5. Bantuan Engineering Di Kantor Pada Saat Perubahan Di Lapangan 11</li>
                            <li class="mb-2 text-break">6. Modernisasi Pabrik</li>
                            <li class="mb-2 text-break">7. Menerapkan Teknologi Digital Untuk Menggantikan Sistem Kontrol <br>
                                Sementara Untuk Keamanan, Ketersediaan, Kinerja Pabrik Agar <br>
                                Investasi Dapat Kembali </li>
                            <li class="mb-2 text-break">8. Perhitungan Finite Element</li>
                            <li class="mb-2 text-break">9. Perhitungan Keseimbangan Sistem Proses </li>
                            <li class="mb-2 text-break">10. Simulisasi Alur Finite Element</li>
                            <li class="mb-2 text-break">11. Kalkulasi Keadaan Pipa</li>
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
                                <img src="{{ asset('img/demo_construction/services/hal1img.png') }}" class="img-fluid"
                                    alt="alt">
                            </a>
                            <a href="#" class="col-6 justify-content-center align-items-center d-flex p-2">
                                <img src="{{ asset('img/demo_construction/services/hal1img2.png') }}" class="img-fluid"
                                    alt="alt">
                            </a>
                            <a href="#" class="col-6 justify-content-center align-items-center d-flex p-2">
                                <img src="{{ asset('img/demo_construction/services/hal1img3.png') }}" class="img-fluid"
                                    alt="alt">
                            </a>
                            <a href="#" class="col-6 justify-content-center align-items-center d-flex p-2">
                                <img src="{{ asset('img/demo_construction/services/hal1img4.png') }}" class="img-fluid"
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
                                <td class="text-break">Modification Coil Condensate & Insulation</td>
                                <td class="text-break">PT. Hercules Mas Indonesia Pandaan</td>
                                <td>(1998)</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td class="text-break">Rosin & Addyct Storage Tank 1⁄4 MT</td>
                                <td class="text-break">PT. Hercules Mas Indonesia Pekanbaru</td>
                                <td>(2004)</td>
                            </tr>
                            <tr class="table-active">
                                <td>3</td>
                                <td class="text-break">Modification line Buffer Tank to Storage Use PE Pipeline</td>
                                <td class="text-break">PT.SOLENIS TECHNOLOGIES INDONESIA Karawang</td>
                                <td>(2018)</td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td class="text-break">Modification Hopper in Reactor base input</td>
                                <td class="text-break">PT.SOLENIS TECHNOLOGIES IN Karawang</td>
                                <td>(2018)</td>
                            </tr>
                            <tr class="table-active">
                                <td>5</td>
                                <td class="text-break">Reengineering Hydrant Truck After Crack Body</td>
                                <td class="text-break">Dinas Pemadam Kebakaran Pemkot Surabaya</td>
                                <td>(2018)</td>
                            </tr>
                            <tr>
                                <td>6</td>
                                <td class="text-break">Custom Line AHP (Hoist Crane,Platform,Etc)</td>
                                <td class="text-break">PT.TROUW NUTRITION INDO Malang</td>
                                <td>(2021)</td>
                            </tr>
                            <tr class="table-active">
                                <td>7</td>
                                <td class="text-break">Modification Dust Collector Portable</td>
                                <td class="text-break">PT.TROUW NUTRITION INDO Malang</td>
                                <td>(2023)</td>
                            </tr>
                            <tr>
                                <td>8</td>
                                <td class="text-break">Modification Line Softwarer</td>
                                <td class="text-break">PT.ADM ANIMAL NUTRITION Clbitung</td>
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
