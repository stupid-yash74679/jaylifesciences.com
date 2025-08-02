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
                            <h2 class="title">Contact With Us</h2>
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href='/'>Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Contact</li>
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
        <!-- contact-area -->
        <section class="contact__area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="contact-map">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7418.674108891276!2d73.04073995767129!3d21.6117858355496!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be02397bae73735%3A0x28a696a202e3bd4!2sJay%20Lifesciences%20LLP!5e0!3m2!1sen!2sin!4v1711691626335!5m2!1sen!2sin" allowfullscreen loading="lazy"></iframe>
                        </div>
                        <div class="contact__info">
                            <ul class="list-wrap">
                                <li>
                                    <div class="icon">
                                        <i class="flaticon-pin"></i>
                                    </div>
                                    <div class="content">
                                        <h4 class="title">Jay Lifesciences LLP</h4>
                                        <p>{{$basics['factory-address']}}</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <i class="flaticon-phone-call"></i>
                                    </div>
                                    <div class="content">
                                        <h4 class="title">Phone</h4>
                                        <a href="tel:{{$basics['phone-number']}}">{{$basics['phone-number']}}</a>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <i class="flaticon-mail"></i>
                                    </div>
                                    <div class="content">
                                        <h4 class="title">E-mail</h4>
                                        <a href="mailto:{{$basics['email-address']}}">{{$basics['email-address']}}</a><br/>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="contact-map">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14836.631387304951!2d73.0445894!3d21.618772!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be023e690d70849%3A0xf9535ed9560c9300!2sJaychem%20Industries%20(%20A%20Kohinoor%20Group%20Company)!5e0!3m2!1sen!2sin!4v1712619309628!5m2!1sen!2sin" allowfullscreen loading="lazy"></iframe>
                        </div>
                        <div class="contact__info">
                            <ul class="list-wrap">
                                <li>
                                    <div class="icon">
                                        <i class="flaticon-pin"></i>
                                    </div>
                                    <div class="content">
                                        <h4 class="title">Jaychem Industries</h4>
                                        <p>{{$basics['company-address']}}</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <i class="flaticon-phone-call"></i>
                                    </div>
                                    <div class="content">
                                        <h4 class="title">Phone</h4>
                                        <a href="tel:{{$basics['jaychem-phone-number']}}">{{$basics['jaychem-phone-number']}}</a>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <i class="flaticon-mail"></i>
                                    </div>
                                    <div class="content">
                                        <h4 class="title">E-mail</h4>
                                        <a href="mailto:{{$basics['jaychem-email-address']}}">{{$basics['jaychem-email-address']}}</a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row align-items-center mt-50">
                    <div class="col-lg-12">
                        <div class="contact__form-wrap">
                            <h2 class="title">Give Us a Message</h2>
                            <p>Your email address will not be published. Required fields are marked *</p>
                            <form id="contact-form" action="https://apexa-html-demo.netlify.app/assets/mail.php" method="POST">
                                <div class="form-grp">
                                    <textarea name="message" placeholder="Message"></textarea>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-grp">
                                            <input type="text" name="name" placeholder="Name">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-grp">
                                            <input type="email" name="email" placeholder="Email">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-grp">
                                            <input type="number" name="phone" placeholder="Phone">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-grp checkbox-grp">
                                    <input type="checkbox" name="checkbox" id="checkbox">
                                    <label for="checkbox">Save my name, email, and website in this browser for the next time I comment.</label>
                                </div>
                                <button type="submit" class="btn">Submit post</button>
                            </form>
                            <p class="ajax-response mb-0"></p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- contact-area-end -->
        <!-- call-back-area -->
        <section class="call-back-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="call-back-content">
                            <div class="section-title white-title mb-10">
                                <h2 class="title">Request A Call Back</h2>
                            </div>
                            <p>Ever find yourself staring at your computer screen a good consulting slogan to come to mind? Oftentimes.</p>
                            <div class="shape">
                                <img src="assets/img/images/call_back_shape.png" alt="" data-aos="fade-right" data-aos-delay="400">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="call-back-form">
                            <form action="#">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-grp">
                                            <input type="text" placeholder="Name *">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-grp">
                                            <input type="email" placeholder="E-mail *">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-grp">
                                            <input type="number" placeholder="Phone *">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <button type="submit" class="btn">Send Now</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- call-back-area-end -->
    </main>
@endsection
