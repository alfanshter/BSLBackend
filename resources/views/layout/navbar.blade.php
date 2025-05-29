<style>
    .brk-header-mobile__logo a {
    display: flex;
    align-items: center;
    justify-content: center;
}

.brk-header-mobile__logo img {
    max-width: 100%; /* Supaya tidak melebihi kontainer */
    height: auto; /* Menjaga proporsi */
}

@media (max-width: 768px) {
    .brk-header-mobile__logo img {
        max-width: 80%; /* Perkecil di layar kecil */
    }
}

@media (max-width: 480px) {
    .brk-header-mobile__logo img {
        max-width: 60%;
    }
}

</style>

<section>
    <div class="brk-header-mobile">
        <div class="brk-header-mobile__open brk-header-mobile__open_white">
            <span></span>
        </div>
        <div class="brk-header-mobile__logo">
            <a href="#">
                <img class="brk-header-mobile__logo-1 lazyload"
                    src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                    data-src="img/logobimasakti.svg" alt="alt" />
                <img class="brk-header-mobile__logo-2 lazyload"
                    src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                    data-src="img/logobimasakti.svg" alt="alt" />
            </a>
        </div>
    </div>
    <header
        class="brk-header brk-header_style-1 brk-header_color-dark brk-header_skin-1 d-lg-flex flex-column brk-header_not-fixed"
        style="display: none" 
        data-sticky-hide="1" data-brk-library="component__header">
        <div class="brk-header__main-bar bg-white" style="height: 76px">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-lg-2 align-self-lg-center d-none d-lg-block">
                        <div class="text-center">
                            <a href="/" class="brk-header__logo brk-header__item">
                                <img src="img/logobimasakti.svg" alt="" />
                            </a>
                        </div>
                    </div>
                    <div class="col-lg align-self-lg-stretch text-lg-right">
                        <nav class="brk-nav brk-nav_modifier-bold brk-header__item">
                            <ul class="brk-nav__menu">
                                <li>
                                    <a href="/">
                                        <span>Home</span>
                                    </a>
                                </li>
                                <li class="brk-nav__children brk-nav__drop-down-effect">
                                    <a href="/about">
                                        <span>About</span>
                                    </a>
                                    <ul class="brk-nav__sub-menu brk-nav-drop-down font__family-montserrat">
                                        <li class="dd-effect">
                                            <a href="/about">About Us</a>
                                        </li>
                                        <li class="dd-effect">
                                            <a href="/history">History</a>
                                        </li>
                                        <li class="dd-effect">
                                            <a href="/team">Team</a>
                                        </li>
                                        <li class="dd-effect">
                                            <a href="/partners">Partners</a>
                                        </li>
                                        <!-- <li class="dd-effect">
                                            <a href="/testimonials">Testimonials</a>
                                        </li> -->
                                    </ul>
                                </li>
                                <li>
                                    <a href="/projects">
                                        <span>Projects</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="/products">
                                        <span>Products</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="/services">
                                        <span>Services</span>
                                    </a>
                                </li>
                                {{-- <li>
                                        <a href="/news">
                                            <span>News</span>
                                        </a>
                                    </li> --}}
                                <li>
                                    <a href="/contact">
                                        <span>Contact</span>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                   
                </div>
            </div>
        </div>
    </header>
</section>
