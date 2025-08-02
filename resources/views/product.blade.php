@extends('layout.main')
@section('meta-content')
    <title>Jay Group of Industries – Premier Pharmaceutical Intermediates & API Manufacturer in India</title>    <meta name="description"
          content="Explore top-tier pharmaceutical intermediates and APIs with Jay Lifesciences LLP, an ISO 9001:2015 certified company in Ankleshwar, Gujarat. Specializing in cGMP compliant manufacturing for global export and local markets, we offer high-quality chemical compounds for leading pharmaceutical applications. Connect with us for innovative and sustainable chemical solutions.">
    <meta name="keywords"
          content="Jay Lifesciences LLP, Pharmaceutical Intermediates, API Manufacturer, cGMP Manufacturing Facility, Pharma Chemical Exporters India, Quality Control Pharma, Dyes Intermediates Manufacturing, Ankleshwar Gujarat, Sustainable Pharma Solutions, Chemical Compound Suppliers, Pharma Intermediates India, Active Pharmaceutical Ingredients, Custom Chemical Services, Bulk Drug Intermediates, Certified Pharma Manufacturer, Pharmaceutical Export India">
@endsection
@section('main-content')
    <main class="fix">
        <!-- breadcrumb-area -->
        <section class="breadcrumb__area breadcrumb__bg" data-background="assets/img/bg/breadcrumb_bg.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="breadcrumb__content">
                            <h2 class="title">{{$productCategory['category-name']}}</h2>
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href='/'>Home</a></li>
                                    <li class="breadcrumb-item"><a href='javascipt:void(0);'>Products</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">{{$productCategory['category-name']}}</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <div class="breadcrumb__shape">
                <img src="assets/img/images/breadcrumb_shape01.png" alt="">
                <img src="assets/img/images/breadcrumb_shape02.png" alt="" class="rightToLeft">
                <img src="assets/img/images/breadcrumb_shape03.png" alt="">
                <img src="assets/img/images/breadcrumb_shape04.png" alt="">
                <img src="assets/img/images/breadcrumb_shape05.png" alt="" class="alltuchtopdown">
            </div>
        </section>
        <!-- breadcrumb-area-end -->
        <!-- services-area -->
        <section class="services__area-seven services__bg-seven" data-background="assets/img/bg/h5_services_bg.jpg">
            <div class="container">
                <div class="row justify-content-center gutter-24">
                    @foreach($productList as $item)
                        <div class="col-xl-3 col-lg-4 col-md-6">
                            <div class="services__item-five">
                                <div class="services__content-five">
                                    <h2 class="title"><a href='https://api.whatsapp.com/send?phone={{$basics['whatsapp-number']}}&text=Hello, I want to know more about {{$item['cas-no']}}'>{{$item['product-name']}}</a></h2>
                                    <p><b>CAS No: </b>{{$item['cas-no']}}</p>
                                    <a class='btn' target="_blank" href='https://api.whatsapp.com/send?phone={{$basics['whatsapp-number']}}&text=Hello, I want to know more about {{$item['cas-no']}}'>Enquire Now</a>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
        </section>
        <!-- services-area-end -->
    </main>
@endsection
