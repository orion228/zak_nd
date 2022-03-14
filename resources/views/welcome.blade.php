@extends('template.homeTemplate')

@section('title')
    Accueil
@endsection

@section('main')
<div role="main" class="main">
    <section  class="section bg-primary border-0 position-relative z-index-1 py-0 m-0">
        <div class="custom-slider-background overflow-hidden">
            <div class="custom-slider-background-image-stage-outer appear-animation"
                data-appear-animation="maskUp" data-appear-animation-delay="1600">
                <div class="custom-slider-background-image-stage">
                    <div class="custom-slider-background-image-item overlay overlay-show overlay-op-6"
                        style="background-image: url(img/demos/architecture-2/slides/slide-1-1.jpg); background-size: cover; background-position: center;">
                    </div>
                    <div class="custom-slider-background-image-item overlay overlay-show overlay-op-6"
                        style="background-image: url(img/demos/architecture-2/slides/slide-1-2.jpg); background-size: cover; background-position: center;">
                    </div>
                    <div class="custom-slider-background-image-item overlay overlay-show overlay-op-6"
                        style="background-image: url(img/demos/architecture-2/generic/generic-1.jpg); background-size: cover; background-position: center;">
                    </div>
                    <div class="custom-slider-background-image-item overlay overlay-show overlay-op-6"
                        style="background-image: url(img/demos/architecture-2/generic/generic-2.jpg); background-size: cover; background-position: center;">
                    </div>
                </div>
            </div>
            <div class="custom-slider-background-image-stage-outer appear-animation"
                data-appear-animation="maskUp" data-appear-animation-delay="1600">
                <div class="custom-slider-background-image-stage reverse">
                    <div class="custom-slider-background-image-item overlay overlay-show overlay-op-6"
                        style="background-image: url(img/demos/architecture-2/generic/generic-2.jpg); background-size: cover; background-position: center;">
                    </div>
                    <div class="custom-slider-background-image-item overlay overlay-show overlay-op-6"
                        style="background-image: url(img/demos/architecture-2/generic/generic-1.jpg); background-size: cover; background-position: center;">
                    </div>
                    <div class="custom-slider-background-image-item overlay overlay-show overlay-op-6"
                        style="background-image: url(img/demos/architecture-2/slides/slide-1-1.jpg); background-size: cover; background-position: center;">
                    </div>
                    <div class="custom-slider-background-image-item overlay overlay-show overlay-op-6"
                        style="background-image: url(img/demos/architecture-2/slides/slide-1-2.jpg); background-size: cover; background-position: center;">
                    </div>
                </div>
            </div>
        </div>
        <div class="owl-carousel-wrapper appear-animation" data-appear-animation="maskUp"
            data-appear-animation-delay="1600" style="height: 800px;">
            <div id="slider"
                class="owl-carousel dots-inside dots-horizontal-center show-dots-xs custom-dots-position nav-style-1 nav-inside nav-inside-plus nav-light nav-lg nav-font-size-lg mb-0"
                data-plugin-options="{'responsive': {'0': {'items': 1, 'dots': true, 'nav': false}, '479': {'items': 1}, '768': {'items': 1}, '979': {'items': 1}, '1199': {'items': 1, 'nav': true, 'navVerticalOffset': '-100px', 'dots': false}}, 'loop': false, 'autoHeight': false, 'margin': 0, 'dots': true, 'dotsVerticalOffset': '-115px', 'nav': false, 'animateIn': 'fadeIn', 'animateOut': 'fadeOut', 'mouseDrag': false, 'touchDrag': false, 'pullDrag': false, 'autoplay': false, 'autoplayTimeout': 9000, 'autoplayHoverPause': true, 'rewind': true}">

                <div class="position-relative overflow-hidden"
                    data-dynamic-height="['800px','800px','800px','550px','500px']" style="height: 800px;">
                    <div
                        class="container container-lg-custom custom-container-style-2 position-relative z-index-3 h-100 pt-5 mt-5 mt-sm-3">
                        <div class="row align-items-center h-100">
                            <div class="col">
                                <div class="overflow-hidden mb-2 mb-sm-1 mb-md-0">
                                    <h1 class="text-color-light font-weight-black line-height-1 text-10 text-md-13 text-lg-15 ls-0 mb-0 appear-animation"
                                        data-appear-animation="maskUp">Entreprises Avraham-Chayim</h1>
                                </div>
                                <div class="overflow-hidden opacity-8 mb-1">
                                    <h2 class="text-color-light line-height-6 line-height-md-2 text-5 text-md-6 positive-ls-3 mb-0 appear-animation"
                                        data-appear-animation="maskUp" data-appear-animation-delay="250">Pour tous vos travaux de construction, décoration et autres</h2>
                                </div>
                                <div class="overflow-hidden opacity-6 mb-5">
                                    <p class="text-color-light text-3-5 mb-0 appear-animation"
                                        data-appear-animation="maskUp" data-appear-animation-delay="500">N'hésitez pas à contacter les experts</p>
                                </div>
                                <a href="#start" data-hash data-hash-offset="140"
                                    class="btn btn-primary custom-btn-style-1 font-weight-bold text-3 px-5 py-3 appear-animation"
                                    data-appear-animation="fadeInUpShorterPlus"
                                    data-appear-animation-delay="750">Contactez-nous</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="position-relative overflow-hidden"
                    data-dynamic-height="['800px','800px','800px','550px','500px']" style="height: 800px;">
                    <div
                        class="container container-lg-custom custom-container-style-2 position-relative z-index-3 h-100 pt-5 mt-5 mt-sm-3">
                        <div class="row align-items-center justify-content-end h-100">
                            <div class="col text-right">
                                <div class="overflow-hidden mb-2 mb-sm-1 mb-md-0">
                                    <h1 class="text-color-light font-weight-black line-height-1 text-10 text-md-13 text-lg-15 ls-0 mb-0 appear-animation d-none"
                                        data-appear-animation="maskUp">Entreprises Avraham-Chayim</h1>
                                </div>
                                <div class="overflow-hidden opacity-8 mb-1">
                                    <h2 class="text-color-light line-height-6 line-height-md-2 text-5 text-md-6 positive-ls-3 mb-0 appear-animation d-none"
                                        data-appear-animation="maskUp" data-appear-animation-delay="250">Votre maison de demain passe entre nos belles mains </h2>
                                </div>
                                <div class="overflow-hidden opacity-6 mb-5">
                                    <p class="text-color-light text-3-5 mb-0 appear-animation d-none"
                                        data-appear-animation="maskUp" data-appear-animation-delay="500">Nous construisons jusqu'au bout de vos rêves</p>
                                </div>
                                <a href="#start" data-hash data-hash-offset="140"
                                    class="btn btn-primary custom-btn-style-1 custom-btn-style-1-right font-weight-bold text-3 px-5 py-3 appear-animation d-none"
                                    data-appear-animation="fadeInUpShorterPlus"
                                    data-appear-animation-delay="750">Demander un devis</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="position-relative">
        <img src="img/demos/architecture-2/backgrounds/arch-plan-1.jpg"
            class="img-fluid position-absolute top-0 right-0" alt="" />
    </div>
    <div class="custom-page-wrapper">
        <section class="section bg-transparent border-0 position-relative py-0 m-0">
            <div class="container container-lg-custom custom-container-style custom-margin-top">
                <div class="row mb-5">
                    <div class="col">
                        <div class="overflow-hidden">
                            <div class="owl-carousel-wrapper position-relative z-index-1 appear-animation"
                                data-appear-animation="maskUp" data-appear-animation-delay="1000"
                                style="height: 373px;">
                                <div class="owl-carousel owl-theme dots-horizontal-center custom-dots-style-1 mb-0"
                                    data-plugin-options="{'responsive': {'576': {'items': 1}, '768': {'items': 1}, '992': {'items': 2}, '1200': {'items': 3}}, 'margin': 25, 'loop': true, 'nav': false, 'dots': true, 'autoplay': true, 'autoplayTimeout': 7000}">
                                    <div>
                                        <a href="demo-architecture-2-services-detail.html"
                                            class="text-decoration-none">
                                            <div class="card custom-card-style-1 border-radius-0">
                                                <div class="card-body text-center p-5 mb-4">
                                                    <img width="75"
                                                        src="img/demos/architecture-2/icons/house-plant.svg"
                                                        alt="" data-icon
                                                        data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-primary mt-3 mb-4 pb-3'}" />
                                                    <h2
                                                        class="text-color-dark font-weight-bold line-height-1 text-6-5 mb-3">
                                                        Architechture</h2>
                                                    <p class="mb-0">Les matériaux pour construire le monde. </p>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div>
                                        <a href="demo-architecture-2-services-detail.html"
                                            class="text-decoration-none">
                                            <div class="card custom-card-style-1 border-radius-0">
                                                <div class="card-body text-center p-5 mb-4">
                                                    <img width="75"
                                                        src="img/demos/architecture-2/icons/sofa.svg" alt=""
                                                        data-icon
                                                        data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-primary mt-3 mb-4 pb-3'}" />
                                                    <h2
                                                        class="text-color-dark font-weight-bold line-height-1 text-6-5 mb-3">
                                                        Décoration intérieure</h2>
                                                    <p class="mb-0">La beauté prouvée par des spécialistes.</p>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div>
                                        <a href="demo-architecture-2-services-detail.html"
                                            class="text-decoration-none">
                                            <div class="card custom-card-style-1 border-radius-0">
                                                <div class="card-body text-center p-5 mb-4">
                                                    <img width="75"
                                                        src="img/demos/architecture-2/icons/wallpaper.svg"
                                                        alt="" data-icon
                                                        data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-primary mt-3 mb-4 pb-3'}" />
                                                    <h2
                                                        class="text-color-dark font-weight-bold line-height-1 text-6-5 mb-3">
                                                       Décoration éxterieure</h2>
                                                    <p class="mb-0">Des fenêtres ouvertes sur la vie .</p>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div>
                                        <a href="demo-architecture-2-services-detail.html"
                                            class="text-decoration-none">
                                            <div class="card custom-card-style-1 border-radius-0">
                                                <div class="card-body text-center p-5 mb-4">
                                                    <img width="75"
                                                        src="img/demos/architecture-2/icons/house-plant.svg"
                                                        alt="" data-icon
                                                        data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-primary mt-3 mb-4 pb-3'}" />
                                                    <h2
                                                        class="text-color-dark font-weight-bold line-height-1 text-6-5 mb-3">
                                                       Construction de routes</h2>
                                                    <p class="mb-0"> Construire des infrastructures routières d'avenir </p>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="start" class="row align-items-center pb-xl-5 mb-xl-5">
                    <div class="col-9 col-lg-4 col-xl-5 pb-5 pb-lg-0 mb-5 mb-lg-0">
                        <div class="position-relative">
                            <img src="img/demos/architecture-2/backgrounds/arch-plan-2.jpg"
                                class="img-fluid position-absolute left-0 z-index-0 appear-animation" alt=""
                                data-appear-animation="fadeIn" data-appear-animation-delay="850"
                                style="bottom: -168px;" />
                            <div class="overflow-hidden position-relative z-index-1">
                                <img src="img/demos/architecture-2/generic/generic-1.jpg"
                                    class="img-fluid appear-animation" alt="" data-appear-animation="maskLeft"
                                    data-appear-animation-delay="250" />
                            </div>
                            <div class="overflow-hidden position-absolute z-index-2"
                                style="bottom: -75px; right: -17%;">
                                <img src="img/demos/architecture-2/generic/generic-2.jpg"
                                    class="img-fluid appear-animation" alt="" data-appear-animation="maskRight"
                                    data-appear-animation-delay="550" />
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7 col-xl-5 offset-lg-1 pt-5 pt-lg-0">
                        <div class="position-absolute z-index-0 left-0 appear-animation"
                            data-appear-animation="fadeInRightShorter" data-appear-animation-delay="2000"
                            style="top: 190px;">
                            <h2
                                class="text-color-dark custom-stroke-text-effect-1 custom-big-font-size-1 font-weight-black opacity-1 mb-0">
                                YOUR PLACE</h2>
                        </div>
                        <div class="pt-lg-5 pl-lg-5 mt-lg-5">
                            <div class="overflow-hidden mb-2">
                                <h2 class="text-color-default positive-ls-3 line-height-3 text-4 mb-0 appear-animation"
                                    data-appear-animation="maskUp" data-appear-animation-delay="800">Gagnez du temps et de l'argent </h2>
                            </div>
                            <div class="overflow-hidden mb-3">
                                <h3 class="text-transform-none text-color-dark font-weight-black text-10 line-height-2 mb-0 appear-animation"
                                    data-appear-animation="maskUp" data-appear-animation-delay="1000">You need
                                    space for better living.</h3>
                            </div>
                            <div class="appear-animation" data-appear-animation="fadeInUpShorter"
                                data-appear-animation-delay="1200">
                                <img src="img/demos/architecture-2/divider.jpg"
                                    class="img-fluid opacity-5 mb-4" alt="" />
                            </div>
                            <p class="custom-font-tertiary text-5 line-height-4 mb-4 appear-animation"
                                data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1400">Lorem
                                ipsum dolor sit amet, consectetur adipiscing elit. Sed imperdiet libero id nisi
                                euismod, sed porta est consectetur.</p>
                            <p class="text-3-5 pb-3 mb-4 appear-animation"
                                data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1600">
                                Vestibulum auctor felis eget orci semper vestibulum. Pellentesque ultricies nibh
                                gravida, accumsan libero luctus, molestie nunc. In nibh ipsum, blandit id
                                faucibus ac, finibus.</p>
                            <a href="demo-architecture-2-contact.html"
                                class="btn btn-primary custom-btn-style-1 font-weight-bold text-3 px-5 py-3 appear-animation"
                                data-appear-animation="fadeInUpShorter"
                                data-appear-animation-delay="1800">CONTACT US</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row pt-5">
                    <div class="col pt-4">
                        <hr>
                    </div>
                </div>
            </div>
            <div class="container container-lg-custom pb-3">
                <div class="row align-items-center text-center py-5 my-3">
                    <div class="col-sm-4 col-xl-2 mb-5 mb-xl-0">
                        <img src="img/logos/logo-8.png" alt class="img-fluid" style="max-width: 90px;" />
                    </div>
                    <div class="col-sm-4 col-xl-2 mb-5 mb-xl-0">
                        <img src="img/logos/logo-9.png" alt class="img-fluid" style="max-width: 140px;" />
                    </div>
                    <div class="col-sm-4 col-xl-2 mb-5 mb-xl-0">
                        <img src="img/logos/logo-10.png" alt class="img-fluid"
                            style="max-width: 140px;" />
                    </div>
                    <div class="col-sm-4 col-xl-2 mb-5 mb-lg-0">
                        <img src="img/logos/logo-11.png" alt class="img-fluid"
                            style="max-width: 140px;" />
                    </div>
                    <div class="col-sm-4 col-xl-2 mb-5 mb-lg-0">
                        <img src="img/logos/logo-12.png" alt class="img-fluid"
                            style="max-width: 100px;" />
                    </div>
                    <div class="col-sm-4 col-xl-2">
                        <img src="img/logos/logo-13.png" alt class="img-fluid"
                            style="max-width: 100px;" />
                    </div>
                </div>
            </div>

          
        </section>
        <section class="section section-height-3 border-0 m-0">
            <div class="container py-2">
                <div class="row counters counters-sm">
                    <div class="col-sm-6 col-lg-3 mb-5 mb-lg-0">
                        <div class="counter">
                            <strong class="text-color-dark font-weight-bold line-height-1 text-12 mb-2"
                                data-to="15" data-append="+">0</strong>
                            <label
                                class="text-color-default positive-ls-3 font-weight-normal text-3-5 mb-0">YEARS
                                OF EXPERIENCE</label>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3 mb-5 mb-lg-0">
                        <div class="counter">
                            <strong class="text-color-dark font-weight-bold line-height-1 text-12 mb-2"
                                data-to="350" data-append="+">0</strong>
                            <label
                                class="text-color-default positive-ls-3 font-weight-normal text-3-5 mb-0">SATISFIED
                                CLIENTS</label>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3 mb-5 mb-sm-0">
                        <div class="counter">
                            <strong class="text-color-dark font-weight-bold line-height-1 text-12 mb-2"
                                data-to="20" data-append="+">0</strong>
                            <label
                                class="text-color-default positive-ls-3 font-weight-normal text-3-5 mb-0">TEAM
                                MEMBERS</label>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <div class="counter">
                            <strong class="text-color-dark font-weight-bold line-height-1 text-12 mb-2"
                                data-to="45" data-append="+">0</strong>
                            <label
                                class="text-color-default positive-ls-3 font-weight-normal text-3-5 mb-0">AWARDS
                                WINNING</label>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="container container-lg-custom py-4 my-3">
            <div class="lightbox"
                data-plugin-options="{'delegate': 'a', 'type': 'image', 'gallery': {'enabled': true}, 'mainClass': 'mfp-with-zoom', 'zoom': {'enabled': true, 'duration': 300}}">
                <div class="masonry-loader masonry-loader-showing">
                    <div class="masonry row" data-plugin-masonry
                        data-plugin-options="{'layoutMode': 'packery', 'itemSelector': '.masonry-item', 'sortBy': 'original-order'}">
                        <div class="masonry-item no-default-style col-6 overflow-hidden px-0">
                            <a class="d-inline-block custom-img-thumbnail-style-1 img-thumbnail img-thumbnail-no-borders img-thumbnail-hover-icon rounded-0 appear-animation"
                                href="img/demos/architecture-2/generic/generic-5.jpg"
                                data-appear-animation="maskDown" data-appear-animation-delay="500">
                                <img src="img/demos/architecture-2/generic/generic-5.jpg"
                                    class="img-fluid rounded-0" alt="" />
                            </a>
                        </div>
                        <div class="masonry-item no-default-style col-6 col-lg-3 overflow-hidden px-0">
                            <a class="d-inline-block custom-img-thumbnail-style-1 img-thumbnail img-thumbnail-no-borders img-thumbnail-hover-icon rounded-0 appear-animation"
                                href="img/demos/architecture-2/generic/generic-6.jpg"
                                data-appear-animation="maskRight" data-appear-animation-delay="250">
                                <img src="img/demos/architecture-2/generic/generic-6.jpg"
                                    class="img-fluid rounded-0" alt="" />
                            </a>
                        </div>
                        <div class="masonry-item no-default-style col-6 col-lg-3 overflow-hidden px-0">
                            <a class="d-inline-block custom-img-thumbnail-style-1 img-thumbnail img-thumbnail-no-borders img-thumbnail-hover-icon rounded-0 appear-animation"
                                href="img/demos/architecture-2/generic/generic-7.jpg"
                                data-appear-animation="maskLeft" data-appear-animation-delay="750">
                                <img src="img/demos/architecture-2/generic/generic-7.jpg"
                                    class="img-fluid rounded-0" alt="" />
                            </a>
                        </div>
                        <div class="masonry-item no-default-style col-6 overflow-hidden px-0">
                            <a class="d-inline-block custom-img-thumbnail-style-1 img-thumbnail img-thumbnail-no-borders img-thumbnail-hover-icon rounded-0 appear-animation"
                                href="img/demos/architecture-2/generic/generic-10.jpg"
                                data-appear-animation="maskUp" data-appear-animation-delay="500">
                                <img src="img/demos/architecture-2/generic/generic-10.jpg"
                                    class="img-fluid rounded-0" alt="" />
                            </a>
                        </div>
                        <div class="masonry-item no-default-style col-6 col-lg-3 overflow-hidden px-0">
                            <a class="d-inline-block custom-img-thumbnail-style-1 img-thumbnail img-thumbnail-no-borders img-thumbnail-hover-icon rounded-0 appear-animation"
                                href="img/demos/architecture-2/generic/generic-8.jpg"
                                data-appear-animation="maskRight" data-appear-animation-delay="750">
                                <img src="img/demos/architecture-2/generic/generic-8.jpg"
                                    class="img-fluid rounded-0" alt="" />
                            </a>
                        </div>
                        <div class="masonry-item no-default-style col-6 col-lg-3 overflow-hidden px-0">
                            <a class="d-inline-block custom-img-thumbnail-style-1 img-thumbnail img-thumbnail-no-borders img-thumbnail-hover-icon rounded-0 appear-animation"
                                href="img/demos/architecture-2/generic/generic-9.jpg"
                                data-appear-animation="maskLeft" data-appear-animation-delay="250">
                                <img src="img/demos/architecture-2/generic/generic-9.jpg"
                                    class="img-fluid rounded-0" alt="" />
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <section class="section section-height-3 bg-primary border-0 m-0">
            <div class="container container-lg-custom">
                <div class="row align-items-center justify-content-center text-center text-xl-left">
                    <div class="col-md-8 col-xl-9 mb-4 mb-xl-0 appear-animation"
                        data-appear-animation="fadeInRightShorterPlus" data-appear-animation-delay="250">
                        <h2 class="text-color-default font-weight-semibold positive-ls-3 text-4 mb-0">WE'RE
                            HERE TO HELP</h2>
                        <h3
                            class="text-transform-none text-color-light font-weight-black line-height-2 text-9 mb-0">
                            Let's Talk About Your New Project, We Can Do It!</h3>
                    </div>
                    <div class="col-xl-3 text-xl-right appear-animation"
                        data-appear-animation="fadeInRightShorterPlus" data-appear-animation-delay="500">
                        <a href="demo-architecture-2-contact.html"
                            class="btn btn-light custom-btn-style-1 font-weight-bold text-color-dark text-3 px-5 py-3">CONTACT
                            US</a>
                    </div>
                </div>
            </div>
        </section>
        <div class="container container-lg-custom">
            <div class="row py-5 my-5">
                <div class="col-lg-5 col-xl-4 mb-5 mb-lg-0 appear-animation"
                    data-appear-animation="fadeInRightShorterPlus" data-appear-animation-delay="250"
                    data-plugin-options="{'accY': -400}">
                    <div class="position-absolute z-index-0 appear-animation"
                        data-appear-animation="fadeInRightShorter" data-appear-animation-delay="500"
                        style="top: 102px; left: -246px;">
                        <h2
                            class="text-color-dark custom-stroke-text-effect-1 custom-big-font-size-3 font-weight-black opacity-1 mb-0">
                            SOLUTIONS</h2>
                    </div>
                    <h2 class="text-color-default positive-ls-3 line-height-3 text-4 mb-2">COMMON QUESTIONS
                    </h2>
                    <h3
                        class="text-transform-none text-color-dark font-weight-black text-10 line-height-2 mb-4">
                        Frequent Questions</h3>
                    <img src="img/demos/architecture-2/divider.jpg" class="img-fluid opacity-5 mb-4 mt-2"
                        alt="" />
                    <p class="custom-font-tertiary text-5 line-height-4 mb-4 mt-2">Lorem ipsum dolor sit amet,
                        consectetur adipiscing elit. Sed imperdiet libero</p>
                    <p class="text-3-5 pb-2 mb-4">Vestibulum auctor felis eget orci semper vestibulum.
                        Pellentesque ultricies nibh gravida, accumsan libero luctus, molestie nunc.</p>
                    <a href="demo-architecture-2-contact.html"
                        class="btn btn-primary custom-btn-style-1 font-weight-bold text-3 px-5 py-3">CONTACT
                        US</a>
                </div>
                <div class="col-lg-7 col-xl-8 appear-animation" data-appear-animation="fadeInRightShorterPlus"
                    data-appear-animation-delay="500" data-plugin-options="{'accY': -400}">
                    <div class="custom-accordion-style-1 accordion accordion-modern" id="FAQAccordion">
                        <div class="card card-default">
                            <div class="card-header">
                                <h4 class="card-title m-0">
                                    <a class="accordion-toggle text-color-dark font-weight-bold"
                                        data-toggle="collapse" href="#collapseFAQOne">
                                        What does an architect actually do?
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseFAQOne" class="collapse show" data-parent="#FAQAccordion">
                                <div class="card-body pl-4 w-md-75pct">
                                    <p class="mb-0">Cras a elit sit amet leo accumsan volutpat.
                                        Suspendisse hendrerit vehicula leo, vel efficitur felis ultrices non.
                                        Integer aliquet ullamcorper dolor, quis sollicitudin.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card card-default">
                            <div class="card-header">
                                <h4 class="card-title m-0">
                                    <a class="accordion-toggle text-color-dark font-weight-bold"
                                        data-toggle="collapse" href="#collapseFAQTwo">
                                        Why do I need an architect?
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseFAQTwo" class="collapse" data-parent="#FAQAccordion">
                                <div class="card-body pl-4">
                                    <p class="mb-0">Cras a elit sit amet leo accumsan volutpat.
                                        Suspendisse hendrerit vehicula leo, vel efficitur felis ultrices non.
                                        Integer aliquet ullamcorper dolor, quis sollicitudin.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card card-default">
                            <div class="card-header">
                                <h4 class="card-title m-0">
                                    <a class="accordion-toggle text-color-dark font-weight-bold"
                                        data-toggle="collapse" href="#collapseFAQFour">
                                        What's the largest project you've ever worked on?
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseFAQFour" class="collapse" data-parent="#FAQAccordion">
                                <div class="card-body pl-4">
                                    <p class="mb-0">Cras a elit sit amet leo accumsan volutpat.
                                        Suspendisse hendrerit vehicula leo, vel efficitur felis ultrices non.
                                        Integer aliquet ullamcorper dolor, quis sollicitudin.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card card-default">
                            <div class="card-header">
                                <h4 class="card-title m-0">
                                    <a class="accordion-toggle text-color-dark font-weight-bold"
                                        data-toggle="collapse" href="#collapseFAQFive">
                                        What is the structure of your architecture practice?
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseFAQFive" class="collapse" data-parent="#FAQAccordion">
                                <div class="card-body pl-4">
                                    <p class="mb-0">Cras a elit sit amet leo accumsan volutpat.
                                        Suspendisse hendrerit vehicula leo, vel efficitur felis ultrices non.
                                        Integer aliquet ullamcorper dolor, quis sollicitudin.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card card-default">
                            <div class="card-header">
                                <h4 class="card-title m-0">
                                    <a class="accordion-toggle text-color-dark font-weight-bold"
                                        data-toggle="collapse" href="#collapseFAQTSix">
                                        Can you work with clients long distance?
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseFAQTSix" class="collapse" data-parent="#FAQAccordion">
                                <div class="card-body pl-4">
                                    <p class="mb-0">Cras a elit sit amet leo accumsan volutpat.
                                        Suspendisse hendrerit vehicula leo, vel efficitur felis ultrices non.
                                        Integer aliquet ullamcorper dolor, quis sollicitudin.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <hr class="my-0">
            <div class="row py-5 my-5">
                <div class="col-lg-6 col-xl-7 mx-auto mb-5 mb-lg-0 appear-animation"
                    data-appear-animation="fadeInLeftShorterPlus" data-appear-animation-delay="500">
                    <div class="owl-carousel owl-theme nav-style-1 nav-outside nav-font-size-lg custom-nav-grey mb-0"
                        data-plugin-options="{'responsive': {'576': {'items': 1}, '768': {'items': 2}, '992': {'items': 1}, '1200': {'items': 2}}, 'loop': true, 'nav': true, 'dots': false, 'margin': 20}">
                        <div>
                            <div class="card border-radius-0">
                                <img class="card-img-top border-radius-0"
                                    src="img/demos/architecture-2/authors/author-1.jpg" alt="" />
                                <div class="card-body text-center">
                                    <h4 class="card-title font-weight-extra-bold text-color-dark text-5 mb-1">
                                        John Doe</h4>
                                    <h3 class="text-color-default text-3-5 ls-0 font-weight-normal mb-2 pb-1">
                                        CEO & FOUNDER</h3>
                                    <p class="card-text font-weight-light">Lorem ipsum dolor sit amet,
                                        consectetur adipiscing elit. Nunc viverra erat orci, ac auctor...</p>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="card border-radius-0">
                                <img class="card-img-top border-radius-0"
                                    src="img/demos/architecture-2/authors/author-2.jpg" alt="" />
                                <div class="card-body text-center">
                                    <h4 class="card-title font-weight-extra-bold text-color-dark text-5 mb-1">
                                        Janice Doe</h4>
                                    <h3 class="text-color-default text-3-5 ls-0 font-weight-normal mb-2 pb-1">
                                        ARCHITECT</h3>
                                    <p class="card-text font-weight-light">Lorem ipsum dolor sit amet,
                                        consectetur adipiscing elit. Nunc viverra erat orci, ac auctor...</p>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="card border-radius-0">
                                <img class="card-img-top border-radius-0"
                                    src="img/demos/architecture-2/authors/author-1.jpg" alt="" />
                                <div class="card-body text-center">
                                    <h4 class="card-title font-weight-extra-bold text-color-dark text-5 mb-1">
                                        John Doe</h4>
                                    <h3 class="text-color-default text-3-5 ls-0 font-weight-normal mb-2 pb-1">
                                        CEO & FOUNDER</h3>
                                    <p class="card-text font-weight-light">Lorem ipsum dolor sit amet,
                                        consectetur adipiscing elit. Nunc viverra erat orci, ac auctor...</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-xl-4 text-right appear-animation"
                    data-appear-animation="fadeInLeftShorterPlus" data-appear-animation-delay="250">
                    <div class="position-absolute z-index-0 appear-animation"
                        data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="500"
                        style="top: 102px; right: -50px;">
                        <h2
                            class="text-color-dark custom-stroke-text-effect-1 custom-big-font-size-3 font-weight-black opacity-1 mb-0">
                            ARCHLIFE</h2>
                    </div>
                    <h2 class="text-color-default positive-ls-3 line-height-3 text-4 mb-2">THE BEST
                        PROFESSIONALS</h2>
                    <h3
                        class="text-transform-none text-color-dark font-weight-black text-10 line-height-2 mb-4">
                        Meet Our Team</h3>
                    <img src="img/demos/architecture-2/divider.jpg" class="img-fluid opacity-5 mb-4 mt-2"
                        alt="" />
                    <p class="custom-font-tertiary text-5 line-height-4 mb-4 mt-2">Lorem ipsum dolor sit amet,
                        consectetur adipiscing elit. Sed imperdiet libero</p>
                    <p class="text-3-5 pb-3 mb-4">Vestibulum auctor felis eget orci semper vestibulum.
                        Pellentesque ultricies nibh gravida, accumsan libero luctus, molestie nunc.</p>
                    <a href="demo-architecture-2-contact.html"
                        class="btn btn-primary custom-btn-style-1 custom-btn-style-1-right font-weight-bold text-3 px-5 py-3">CONTACT
                        US</a>
                </div>
            </div>
        </div>
        <section class="section parallax bg-transparent border-0 py-0 m-0" data-plugin-parallax
            data-plugin-options="{'speed': 1.5, 'scrollableParallax': true, 'scrollableParallaxMinWidth': 991, 'startOffset': 13, 'cssProperty': 'width', 'cssValueStart': 40, 'cssValueEnd': 100, 'cssValueUnit': 'vw'}">
            <div class="d-flex justify-content-center">
                <div class="scrollable-parallax-wrapper bg-primary overflow-hidden">
                    <div
                        class="container container-lg-custom custom-container-style-3 custom-container-position-1 py-5 my-5 mx-0">
                        <div class="row justify-content-center pt-3 mb-5">
                            <div class="col-sm-8 col-md-12 text-center">
                                <h2 class="text-color-light opacity-6 positive-ls-3 line-height-3 text-4 mb-3">
                                    HAPPY CLIENTS</h2>
                                <h3
                                    class="text-transform-none text-color-light font-weight-black line-height-2 text-10 negative-ls-1 mb-0">
                                    See What Clients Are Saying</h3>
                            </div>
                        </div>
                        <div class="row justify-content-center pb-3">
                            <div class="col-lg-9">
                                <div class="owl-carousel owl-theme nav-style-1 nav-light nav-outside nav-font-size-lg custom-dots-style-1 custom-dots-style-1-light mb-0"
                                    data-plugin-options="{'responsive': {'0': {'items': 1, 'nav': false, 'dots': true}, '576': {'items': 1, 'nav': false, 'dots': true}, '768': {'items': 1, 'nav': false, 'dots': true}, '992': {'items': 1}, '1200': {'items': 1}}, 'loop': false, 'nav': true, 'dots': false}">
                                    <div>
                                        <div
                                            class="testimonial testimonial-style-2 testimonial-with-quotes testimonial-remove-right-quote custom-testimonial-quote mb-0">
                                            <blockquote>
                                                <p
                                                    class="custom-font-secondary text-color-light opacity-8 font-weight-light line-height-6 text-4-5 px-2 px-lg-3 mb-0">
                                                    <em>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                        Sed eget risus porta, tincidunt turpis at, interdum
                                                        tortor. Suspendisse potenti. Lorem ipsum dolor sit amet,
                                                        consectetur adipiscing elit.</em></p>
                                            </blockquote>
                                            <div class="testimonial-author">
                                                <p class="text-color-light font-weight-bold text-4 mb-0">John
                                                    Smith</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div
                                            class="testimonial testimonial-style-2 testimonial-with-quotes testimonial-remove-right-quote custom-testimonial-quote mb-0">
                                            <blockquote>
                                                <p
                                                    class="custom-font-secondary text-color-light opacity-8 font-weight-light line-height-6 text-4-5 px-2 px-lg-3 mb-0">
                                                    <em>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                        Sed eget risus porta, tincidunt turpis at, interdum
                                                        tortor. Suspendisse potenti. Lorem ipsum dolor sit amet,
                                                        consectetur adipiscing elit.</em></p>
                                            </blockquote>
                                            <div class="testimonial-author">
                                                <p class="text-color-light font-weight-bold text-4 mb-0">John
                                                    Smith</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section bg-transparent border-0 position-relative m-0">
            <div class="container container-lg-custom py-5">
                <div class="row">
                    <div class="col text-center">
                        <div class="appear-animation" data-appear-animation="fadeInUpShorter"
                            data-appear-animation-delay="500">
                            <div class="position-absolute transform3dx-n50 left-50pct z-index-0"
                                style="top: 56px;">
                                <h2
                                    class="text-color-dark custom-stroke-text-effect-1 custom-big-font-size-1 font-weight-black opacity-1 mb-0">
                                    WHAT'S HAPPENING</h2>
                            </div>
                        </div>
                        <h2 class="text-color-default positive-ls-3 line-height-3 text-4 mb-2">OUR BLOG</h2>
                        <h3
                            class="text-transform-none text-color-dark font-weight-black text-10 line-height-2 mb-3">
                            Recent News</h3>
                        <img src="img/demos/architecture-2/divider.jpg" class="img-fluid opacity-5 mt-3 mb-5"
                            alt="" />
                    </div>
                </div>
                <div class="row row-gutter-sm">
                    <div class="col-lg-4 mb-4 mb-lg-0">
                        <article>
                            <div class="card border-0 border-radius-0">
                                <div class="card-body bg-color-light-scale-1 p-4 z-index-1">
                                    <a href="demo-architecture-2-blog-post.html">
                                        <img class="card-img-top border-radius-0 hover-effect-2"
                                            src="img/demos/architecture-2/blog/blog-thumb-1.jpg"
                                            alt="Card Image">
                                    </a>
                                    <p class="text-uppercase text-1 mb-3 pt-1 text-color-default">
                                        <time pubdate datetime="2021-01-10">10 Jan 2021</time>
                                        <span class="opacity-3 d-inline-block px-2">|</span>
                                        3 Comments
                                        <span class="opacity-3 d-inline-block px-2">|</span>
                                        John Doe
                                    </p>
                                    <div class="card-body p-0">
                                        <h4 class="card-title mb-3 text-5 font-weight-semibold"><a
                                                class="text-color-dark text-color-hover-primary text-decoration-none font-weight-bold text-3-5"
                                                href="demo-architecture-2-blog-post.html">Lorem ipsum dolor sit
                                                a met</a></h4>
                                        <p class="card-text mb-2">Lorem ipsum dolor sit amet, consectetur
                                            adipiscing elit. Nunc viverra lorem ipsum erat orci, ac auctor...
                                        </p>
                                        <a href="demo-architecture-2-blog-post.html"
                                            class="custom-read-more d-inline-flex align-items-center font-weight-semibold text-3 text-decoration-none pl-0">
                                            READ MORE +
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div>
                    <div class="col-lg-4 mb-4 mb-lg-0">
                        <article>
                            <div class="card border-0 border-radius-0">
                                <div class="card-body bg-color-light-scale-1 p-4 z-index-1">
                                    <a href="demo-architecture-2-blog-post.html">
                                        <img class="card-img-top border-radius-0 hover-effect-2"
                                            src="img/demos/architecture-2/blog/blog-thumb-2.jpg"
                                            alt="Card Image">
                                    </a>
                                    <p class="text-uppercase text-1 mb-3 pt-1 text-color-default">
                                        <time pubdate datetime="2021-01-10">10 Jan 2021</time>
                                        <span class="opacity-3 d-inline-block px-2">|</span>
                                        3 Comments
                                        <span class="opacity-3 d-inline-block px-2">|</span>
                                        John Doe
                                    </p>
                                    <div class="card-body p-0">
                                        <h4 class="card-title mb-3 text-5 font-weight-semibold"><a
                                                class="text-color-dark text-color-hover-primary text-decoration-none font-weight-bold text-3-5"
                                                href="demo-architecture-2-blog-post.html">Lorem ipsum dolor sit
                                                a met</a></h4>
                                        <p class="card-text mb-2">Lorem ipsum dolor sit amet, consectetur
                                            adipiscing elit. Nunc viverra lorem ipsum erat orci, ac auctor...
                                        </p>
                                        <a href="demo-architecture-2-blog-post.html"
                                            class="custom-read-more d-inline-flex align-items-center font-weight-semibold text-3 text-decoration-none pl-0">
                                            READ MORE +
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div>
                    <div class="col-lg-4">
                        <article>
                            <div class="card border-0 border-radius-0">
                                <div class="card-body bg-color-light-scale-1 p-4 z-index-1">
                                    <a href="demo-architecture-2-blog-post.html">
                                        <img class="card-img-top border-radius-0 hover-effect-2"
                                            src="img/demos/architecture-2/blog/blog-thumb-3.jpg"
                                            alt="Card Image">
                                    </a>
                                    <p class="text-uppercase text-1 mb-3 pt-1 text-color-default">
                                        <time pubdate datetime="2021-01-10">10 Jan 2021</time>
                                        <span class="opacity-3 d-inline-block px-2">|</span>
                                        3 Comments
                                        <span class="opacity-3 d-inline-block px-2">|</span>
                                        John Doe
                                    </p>
                                    <div class="card-body p-0">
                                        <h4 class="card-title mb-3 text-5 font-weight-semibold"><a
                                                class="text-color-dark text-color-hover-primary text-decoration-none font-weight-bold text-3-5"
                                                href="demo-architecture-2-blog-post.html">Lorem ipsum dolor sit
                                                a met</a></h4>
                                        <p class="card-text mb-2">Lorem ipsum dolor sit amet, consectetur
                                            adipiscing elit. Nunc viverra lorem ipsum erat orci, ac auctor...
                                        </p>
                                        <a href="demo-architecture-2-blog-post.html"
                                            class="custom-read-more d-inline-flex align-items-center font-weight-semibold text-3 text-decoration-none pl-0">
                                            READ MORE +
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <div class="position-relative" style="margin-top: 50px;">
        <img src="img/demos/architecture-2/backgrounds/arch-plan-3.jpg"
            class="img-fluid position-absolute bottom-0 left-0" alt="" />
    </div>
</div>
@endsection
