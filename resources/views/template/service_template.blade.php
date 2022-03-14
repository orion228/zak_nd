@extends('template.homeTemplate')



@section('main')
    <div role="main" class="main">

        @yield('main_services')
    </div>


    <div role="main" class="main">
        <section
            class="custom-page-header-1 page-header page-header-modern page-header-lg bg-primary border-0 z-index-1 my-0">
            <div class="custom-page-header-1-wrapper overflow-hidden">
                <div class="custom-bg-grey-1 py-5 appear-animation" data-appear-animation="maskUp"
                    data-appear-animation-delay="800">
                    <div class="container py-3 my-3">
                        <div class="row">
                            <div class="col-md-12 align-self-center p-static text-center">
                                <div class="overflow-hidden mb-2">
                                    <h1 class="font-weight-black text-12 mb-0 appear-animation"
                                        data-appear-animation="maskUp" data-appear-animation-delay="1200">Services</h1>
                                </div>
                            </div>
                            <div class="col-md-12 align-self-center">
                                <div class="overflow-hidden">
                                    <ul class="custom-breadcrumb-style-1 breadcrumb breadcrumb-light custom-font-secondary d-block text-center custom-ls-1 text-5 appear-animation"
                                        data-appear-animation="maskUp" data-appear-animation-delay="1450">
                                        <li class="text-transform-none"><a href="demo-architecture-2.html"
                                                class="text-decoration-none">Nos Services</a></li>
                                        <li class="text-transform-none active"> @yield('service') </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="custom-page-wrapper pt-5 pb-1">
            <div class="spacer py-4 my-5"></div>
            <div class="container container-lg-custom">
                <div class="row">
                    <div class="col-lg-8 col-xl-9 order-1 order-lg-2">

                        @yield('service_main')

                        <h2 class="text-color-default font-weight-semibold positive-ls-3 text-4 mb-0">Demander un devis pour votre projet de @yield('service')</h2>
                                              <form class="contact-form custom-form-style-1 appear-animation"
                            action="https://www.okler.net/previews/porto/8.3.0/php/contact-form.php" method="POST"
                            data-appear-animation="fadeInUpShorter" data-appear-animation-delay="2800">
                            <div class="contact-form-success alert alert-success d-none mt-4">
                                <strong>Success!</strong> Your message has been sent to us.
                            </div>
                            <div class="contact-form-error alert alert-danger d-none mt-4">
                                <strong>Error!</strong> There was an error sending your message.
                                <span class="mail-error-message text-1 d-block"></span>
                            </div>
                            <div class="form-row">
                                <div class="form-group col mb-3">
                                    <input type="text" value="" data-msg-required="Svp entré votre nom." maxlength="100"
                                        class="form-control border-radius-0" name="name" id="name" required
                                        placeholder="Nom et prenom *">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col mb-3">
                                    <input type="email" value="" data-msg-required="Please enter your email address."
                                        data-msg-email="Please enter a valid email address." maxlength="100"
                                        class="form-control border-radius-0" name="email" id="email" required
                                        placeholder="E-mail *">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col mb-3">
                                    <input type="text" value="" data-msg-required="Please enter your phone number."
                                        maxlength="100" class="form-control border-radius-0" name="phone" id="phone"
                                        required placeholder="Tel *">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col mb-4">
                                    <textarea maxlength="5000" data-msg-required="Please enter your message." rows="5" class="form-control border-radius-0"
                                        name="message" id="message" required placeholder="Exprimer votre bésoin *"></textarea>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col mb-4">
                                    <button type="submit"
                                        class="btn btn-primary custom-btn-style-1 font-weight-bold text-3 px-5 py-3"
                                        data-loading-text="Loading...">ENVOYER</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-lg-6 col-xl-3 order-2 order-lg-1">
                        <aside class="sidebar" data-plugin-sticky
                            data-plugin-options="{'minWidth': 991, 'containerSelector': '.container', 'padding': {'top': 120}}">
                            <div class="pb-3 mb-8">
                                <div class="card rounded-0 appear-animation" data-appear-animation="fadeInUpShorter"
                                    data-appear-animation-delay="2300">
                                    <div style="background-color: #6d4a5e; color: white" class="card-body px-6 py-5">
                                        <ul class="list list-unstyled mb-0">
                                            <li class="mb-4">
                                                <strong class="custom-font-secondary  text-5">
                                                    <a style="color: white"
                                                        class=" custom-link-effect-1  text-decoration-none ">Nos
                                                        services</a>
                                                </strong>
                                            </li>
                                            <li class="mb-4">
                                                <strong class="custom-font-secondary  text-5">
                                                    <a style="color: white" href="{{route('architechture')}}"
                                                        class="  {{ Request::is('architechture') ? 'active' : '' }} custom-link-effect-1  text-decoration-none">Architechture</a>
                                                </strong>
                                            </li>
                                            <li class="mb-4">
                                                <strong class="custom-font-secondary  text-5">
                                                    <a href="{{route('big')}}" style="color: white"
                                                        class="  {{ Request::is('big') ? 'active' : '' }} custom-link-effect-1  text-decoration-none">Gros oeuvres</a>
                                                </strong>
                                            </li>


                                            <li class="mb-4">
                                                <strong class="custom-font-secondary  text-5">
                                                    <a style="color: white" href="{{route('decoration')}}"
                                                        class="  {{ Request::is('decoration') ? 'active' : '' }} custom-link-effect-1 text-decoration-none">Décoration
                                                        intérieure</a>
                                                </strong>
                                            </li>

                                            <li class="mb-4">
                                                <strong class="custom-font-secondary  text-5">
                                                    <a style="color: white" href="{{route('road')}}"
                                                        class="  {{ Request::is('road') ? 'active' : '' }} custom-link-effect-1 text-decoration-none">Construction des
                                                        routes</a>
                                                </strong>
                                            </li>
                                            <li class="mb-0">
                                                <strong class="custom-font-secondary  text-5">
                                                    <a style="color: white" href="{{route('auther_services')}}"
                                                        class="  {{ Request::is('auther_services') ? 'active' : '' }} custom-link-effect-1 text-decoration-none">Autres</a>
                                                </strong>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                        </aside>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
