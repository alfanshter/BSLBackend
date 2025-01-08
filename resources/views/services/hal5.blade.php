@extends('layout.master')

@section('konten')
    <section>
        <div class="breadcrumbs__section breadcrumbs__section-dark bg__style pt-80 pb-130 lazyload"
            data-bg="img/demo_construction/services/bghal.png" data-brk-library="component__breadcrumbs_css">
            <div class="brk-base-bg-6 breadcrumb-bg full__size-absolute"></div>
            <h2 class="font__size-30 line__height-46 font__family-montserrat font__weight-ultralight text-center">
                <span class="font__weight-bold">PLANT EQUIPMENT FABRICATION & INSTALLATION</span>
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
            <span class="brk-color-font-service-hal font__weight-semibold line__height-30">BSL can support fabrication and
                installation of Factory equipment refers to the process of designing,
                building and installing factories, facilities, in order to improve factory systems</span>
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
                            <li class="mb-3 text-break font-weight-bold">1. Design And Engineering</li>
                            <li class="mb-3 text-break">&nbsp; &nbsp;Plan, Engineering And Engineering The Plant, <br>
                                &nbsp; &nbsp; Including
                                Layout, Piping, Electrical, And Instrumentation </li>
                            <li class="mb-3 text-break font-weight-bold">2. Fabrication</li>
                            <li class="mb-3 text-break">&nbsp; &nbsp; Producing Plant Components, Such a Tank, <br> &nbsp;
                                &nbsp; Vessels, Piping And Equipment. </li>
                            <li class="mb-3 text-break font-weight-bold">3. Transportation</li>
                            <li class="mb-3 text-break">&nbsp; &nbsp; Moving Fabricated Components To <br> &nbsp; &nbsp; The
                                Installation Site. </li>
                            <li class="mb-3 text-break font-weight-bold">4. Installation</li>
                            <li class="mb-3 text-break">&nbsp; &nbsp; Assembling And Install Plant <br> &nbsp; &nbsp;
                                Components, Connecting, Piping <br> &nbsp; &nbsp; Electrical, And Instrumental.</li>
                            <li class="mb-3 text-break font-weight-bold">5. Testing And Commissioning</li>
                            <li class="mb-3 text-break">&nbsp; &nbsp; Verifying Plant Functionally, Safety, <br> &nbsp;
                                &nbsp; And Performance. </li>
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
                                <img src="{{ asset('img/demo_construction/services/hal5img.png') }}" class="img-fluid"
                                    alt="alt">
                            </a>
                            <a href="#" class="col-6 justify-content-center align-items-center d-flex p-2">
                                <img src="{{ asset('img/demo_construction/services/hal5img2.png') }}" class="img-fluid"
                                    alt="alt">
                            </a>
                            <a href="#" class="col-6 justify-content-center align-items-center d-flex p-2">
                                <img src="{{ asset('img/demo_construction/services/hal5img3.png') }}" class="img-fluid"
                                    alt="alt">
                            </a>
                            <a href="#" class="col-6 justify-content-center align-items-center d-flex p-2">
                                <img src="{{ asset('img/demo_construction/services/hal5img4.png') }}" class="img-fluid"
                                    alt="alt">
                            </a>
                            <div class="col-6 d-flex justify-content-center align-items-center p-2">
                                <div class="bg-light p-3 w-100">
                                    <p class="text-center font__family-montserrat mb-2 font-weight-bold">Experience Man
                                        Power</p>
                                    <ul class="list-unstyled text-start mb-0">
                                        <li>- Welder 6G SMAW</li>
                                        <li>- Working At Height (Lvl 2)</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-6 d-flex justify-content-center align-items-center p-2">
                                <div class="bg-light p-3 w-100">
                                    <p class="text-center font__family-montserrat mb-2 font-weight-bold">Experience Man
                                        Power</p>
                                    <ul class="list-unstyled text-start mb-0">
                                        <li>- Workshop 800 Tons/Years <br> &nbsp; &nbsp;Production Capacity</li>
                                        <li>- Ganty Crane</li>
                                        <li>- Engine Lathe Machine, ETC</li>
                                    </ul>
                                </div>
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
                                <td class="text-break">Coil And Piping System</td>
                                <td class="text-break">PT.Hercules Mas Indonesia (Pandaan)</td>
                                <td>(1998)</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td class="text-break">Pipe Line & Insulation</td>
                                <td class="text-break">PT.Hercules Mas Indonesia (Riau)</td>
                                <td>(2000)</td>
                            </tr>
                            <tr class="table-active">
                                <td>3</td>
                                <td class="text-break">Cane Cutter</td>
                                <td class="text-break">PT.Perkebunan Nusantara XI (Madiun)</td>
                                <td>(2000)</td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td class="text-break">Fire Fighting Suppression System</td>
                                <td class="text-break">PT.Hercules Indonesia (Riau)</td>
                                <td>(2003)</td>
                            </tr>
                            <tr class="table-active">
                                <td>5</td>
                                <td class="text-break">Reengineering Hydrant Truck After Crack Body</td>
                                <td class="text-break">Dinas Pemadam Kebakaran Pemkot Surabaya</td>
                                <td>(2004)</td>
                            </tr>
                            <tr>
                                <td>6</td>
                                <td class="text-break">Pipe Line Air Compressor</td>
                                <td class="text-break">PT.Otsuka Indonesia (Sukabumi)</td>
                                <td>(2005)</td>
                            </tr>
                            <tr class="table-active">
                                <td>7</td>
                                <td class="text-break">Automatic Screen Waste</td>
                                <td class="text-break">Dinas Pengendalian Pemkot (Sby)</td>
                                <td>(2006)</td>
                            </tr>
                            <tr>
                                <td>8</td>
                                <td class="text-break">Round Bar Hitter & Slitter Knife</td>
                                <td class="text-break">PT.Dunia Bintang Wallet (Jakarta)</td>
                                <td>(2012)</td>
                            </tr>
                            <tr class="table-active">
                                <td>9</td>
                                <td class="text-break">Loading Dock Leveler</td>
                                <td class="text-break">PT.Trouw Nutrition Indonesia (Pasuruan)</td>
                                <td>(2020)</td>
                            </tr>
                            <tr>
                                <td>10</td>
                                <td class="text-break">Conical Hopper</td>
                                <td class="text-break">PT.Trouw Nutrition Indonesia (Pasuruan)</td>
                                <td>(2022)</td>
                            </tr>
                            <tr class="table-active">
                                <td>11</td>
                                <td class="text-break">Additional Canopy Rooftop</td>
                                <td class="text-break">PT.Trouw Nutrition Indonesia (Pasuruan)</td>
                                <td>(2022)</td>
                            </tr>
                            <tr>
                                <td>12</td>
                                <td class="text-break">Safety Gate Barrier</td>
                                <td class="text-break">PT.Trouw Nutrition Indonesia (Pasuruan)</td>
                                <td>(2023)</td>
                            </tr>
                            <tr class="table-active">
                                <td>13</td>
                                <td class="text-break">Screw Conveyor</td>
                                <td class="text-break">PT.Greenfields Indonesia (Malang)</td>
                                <td>(2023)</td>
                            </tr>
                            <tr>
                                <td>14</td>
                                <td class="text-break">PDR-F 500 KVA Stabilizer</td>
                                <td class="text-break">PT.Trouw Nutrition Indonesia (Pasuruan)</td>
                                <td>(2023)</td>
                            </tr>
                            <tr class="table-active">
                                <td>15</td>
                                <td class="text-break">Roller Conveyor Knock Down System</td>
                                <td class="text-break">PT.BEC Premix Solutions Indonesia</td>
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
