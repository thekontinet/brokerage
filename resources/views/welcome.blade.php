<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" href="/images/favicon.png" type="image/x-icon" />
    <!-- Theme tittle -->
    <title>DigitMin - Bitcoin & Cryptocurrency HTML Template</title>

    <!-- Theme style CSS -->
    <link href="/css/style.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>


    <!--header-area start-->
	<header>
        <div class="header_area sticky-menu">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-2 col-md-3">
                        <div class="header_logo">
                            <a href="/"><img src="images/logo/logo1.png" alt=""></a>
                        </div>
                    </div>
                    <div class="col-lg-10">
                        <div class="right-btn d-none d-lg-block">
                            @auth()
                                <a class="theme_btn th_btn" href="{{route('dashboard')}}">Dashboard</a>
                            @endauth
                            @guest()
                                <a class="theme_btn th_btn" href="{{route('login')}}">Login</a>
                            @endguest
                        </div>
                        <div class="main-menu ">
                            <nav id="mobile-menu">
                                <ul>
                                    <li><a href="/">Home</a></li>
                                    {{-- <li><a href="#token">Token</a></li> --}}
                                    <li><a href="#features">Features</a></li>
                                    <li><a href="#testimonial">Testimonial</a></li>
                                    <li><a href="#team">Team</a></li>
                                    <li><a href="#faq">Faq</a></li>
                                    {{-- <li><a href="#contact">Contact</a></li> --}}
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <div class="mobile-menu"></div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!--header-area end-->
    <!--banner-area start-->
    <section class="banner_area" id="particles-js">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-6 col-lg-6 col-md-12">
                    <div class="banner_content">
                        <h1 class="wow fadeInLeft animated">Become a better <span>Investor</span><br>
                          Right on the Go with us</h1>
                          <p class="wow fadeInLeft" data-wow-delay="0.2s">Over 1.5 Million investors, join now and start building your porfolio with our flexible and reliable solution.</p>
                          <ul class="btn_list">
                              <li>
                                <a class="theme_btn wow fadeInUp animated" href="{{route('register')}}">
                                <i class="flaticon-user"></i> Register</a>
                            </li>
                              <li>
                                <a class="theme_btn b-btn wow fadeInUp animated" data-wow-delay="0.3s"  href="{{route('login')}}">
                                  <i class="flaticon-lock"></i> Log in
                                </a>
                            </li>
                          </ul>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-12 wow zoomIn animated">
                    <div class="right-ilustrat">
                        <img class="up_animat" src="images/banner/banner_ilustration1.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--banner-area end-->
    <!--our_mission_area start-->
    <section id="about" class="our_mission_area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="title">
                        <h2>We’re on a mission to <br><span>democratize finance</span> for all.</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 wow fadeInUp animated">
                    <div class="mission_text">
                        <h5>How to Get Started</h5>
                        <p>Deposit to your wallet using your prefered exchange platform, choose an investment plan with initial capital. Our system will automatically initiate auto trade on your account based on our supplied data.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp animated" data-wow-delay="0.3s">
                    <div class="mission_text mt_1">
                        <h5>Referral Money</h5>
                        <p>On of the ways to increase your portfolio growth speed is to share your affliate link. 20% of your refered clients investment goes to your bonus account.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp animated" data-wow-delay="0.9s">
                    <div class="mission_text">
                        <h5>How way Pay</h5>
                        <p>Our payment and withdrawal process is fast & flexible. We pay in digital currencies and payment takes not more than 10 minutes</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--our_mission_area end-->
    <!--mining_invest_area start-->
    <section id="token" class="mining_invest_area">
        <div class="shape_area">
            <img class="pulseBig" src="images/invest/round_shap1.png" alt="">
        </div>
        <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-5 col-md-6 wow fadeInUp animated">
                        <div class="mining_text">
                            <div class="title ti_2">
                                <h2>Invest<br>
                                   with <span>Secured & Trusted</span> Platform</h2>
                                <p>We focus on the best asset management and financial concept that you will see in the current industry. Here at Completefxtrader you have total control of your finances and see how everything happens in front of your computer screen. Your consent a top priority<p>
                            </div>
                            <h6>Estimated Weekly Withdrawal</h6>
                            <h3>+10.5k</h3>
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-6">
                        <img src="images/invest/invest_ilust1.png" alt="" class="right_img up_animat">
                    </div>
                </div>
        </div>
    </section>
    <!--mining_invest_area end-->
    <!--start_mining_area start-->
    <section class="start_mining_area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="title">
                        <h2>Mining with top 8 cryptocurrency<br><span>start mining</span></h2>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                @foreach (App\Models\Plan::all() as $plan)
                <div class="col-lg-3 col-md-4 col-sm-6 wow fadeInUp animated">
                    <div class="mining_text">
                        <h3>
                            {{$plan->title}}
                            <small>{{money($plan->price)}}</small>
                            <sup style="font-size: 10px"> /{{$plan->type}}</sup>
                        </h3>

                        <a href="{{route('investments.create', $plan->id)}}">Get Started <i class="fas fa-chevron-right"></i></a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <!--start_mining_area end-->
    <!--popular_feature_area start-->
    <section id="features" class="popular_feature_area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="title">
                        <h2>Why {{config('app.name')}}<br><span>The decision you make today could help you grow your wealth</span></h2>
                    </div>
                </div>
            </div>
            <div class="row feat_active owl-carousel">
                <div class="item wow fadeInUp animated">
                    <div class="feature_box wow fadeInUp animated">
                        <div class="icon_img">
                                <img src="images/feature/feat4.png" alt="">
                        </div>
                        <h5>Platforms</h5>
                        <p>Cutting edge trading technology that provides power, reliability, and mobility<p>
                    </div>
                </div>
                <div class="item wow fadeInUp animated" data-wow-delay="0.3s">
                        <div class="feature_box">
                            <div class="icon_img">
                                <img src="images/feature/feat3.png" alt="">
                            </div>
                            <h5>Safe Trades</h5>
                            <p>Save you from trying to study the market and trading at loss, We take all that pain for you.</p>
                        </div>
                </div>
                <div class="item wow fadeInUp animated" data-wow-delay="0.6s">
                    <div class="feature_box">
                            <div class="icon_img">
                                <img src="images/feature/feat1.png" alt="">
                            </div>
                            <h5>Instant Transaction</h5>
                            <p>You can manage all your assets directly from our platform, and perform instant and transactions.</p>
                    </div>
                </div>
                <div class="item wow fadeInUp animated" data-wow-delay="0.9s">
                    <div class="feature_box">
                            <div class="icon_img">
                                <img src="images/feature/feat2.png" alt="">
                            </div>
                            <h5>Security</h5>
                            <p>We work hard to keep your data safe and secure. We protect your account from unauthorized activity.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--popular_feature_area end-->

    <!--what_say_area start-->
    <section id="testimonial" class="what_say_area">
        <div class="shape_area2">
            <img class="dot_right" src="images/invest/dot_shap2.png" alt="">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="title">
                        <h2>What say<br><span>Our happy investors</span></h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-10 offset-lg-1 wow fadeInUp animated">
                    <div class="client_box">
                        <div class="client_img">
                            <img style="width: 100px; height:100px; object-fit:cover" class="rounded-circle" width='25%' src="/images/avatars/avatar.svg" alt="">
                            <h6>Carlos H. Hammond</h6>
                            <a href="#">Washington</a>
                        </div>
                        <div class="client_text">
                            <div class="icon">
                                <img src="/images/testimonial/q_icon1.png" alt="">
                            </div>
                            <p>All thanks to {{strtolower(config('app.name'))}}. I'm now rolling on financial freedom for some years now. This platform is the best</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 offset-lg-1 wow fadeInUp animated" data-wow-delay=".3s">
                    <div class="client_box">
                        <div class="client_img">
                            <img style="width: 100px; height:100px; object-fit:cover" class="rounded-circle" width='25%' src="/images/avatars/avatar.svg" alt="">
                            <h6>Thaís Dias Costa</h6>
                            <a href="#">Brazil</a>
                        </div>
                        <div class="client_text">
                            <div class="icon">
                                <img src="/images/testimonial/q_icon1.png" alt="">
                            </div>
                            <p>Investing with this platform is one of the best. So easy and flexible </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-10 offset-lg-1 wow fadeInUp animated" data-wow-delay=".3s">
                    <div class="client_box">
                        <div class="client_img">
                            <img style="width: 100px; height:100px; object-fit:cover" class="rounded-circle" width='25%' src="/images/avatars/avatar.svg" alt="">
                            <h6>Sofia Kazakova</h6>
                            <a href="#">Russian</a>
                        </div>
                        <div class="client_text">
                            <div class="icon">
                                <img src="/images/testimonial/q_icon1.png" alt="">
                            </div>
                            <p>This plaatform is nice. The return percentage is so wonderful</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--what_say_area end-->
    <!--make_bitcoin_area start-->
     <section class="mining_invest_area make_bitcoin">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 col-md-6">
                    <div class="mining_text">
                        <div class="title ti_2">
                            <h2>Start Your <span>Investment Journey</span></h2>
                            <p>{{config('app.name')}} makes it easy to get started. Sign up
                                today to start growing your porfolio.</p>
                        </div>
                        <ul class="btn_list">
                            <li><a class="theme_btn popup-youtube" href="{{route('register')}}">
                              Create an account</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-7 col-md-6">
                    <img src="images/invest/mac1.png" alt="" class="right_img up_animat">
                </div>
            </div>
        </div>
    </section>
    <!--make_bitcoin_area end-->
    <!--team_area start-->
     <section id="team" class="team_area">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="title">
                        <h2>We start with a professional<br><span>team member</span></h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6 wow fadeInUp animated">
                    <div class="img_box">
                        <img class="t_list rounded-circle" src="images/avatars/avatar-1.jpg" alt="">
                        <h5>Dementi Aliyev</h5>
                        <span>Manager</span>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp animated" data-wow-delay=".3s">
                    <div class="img_box">
                        <img class="t_list rounded-circle" src="images/avatars/avatar-2.jpg" alt="">
                        <h5>Yaroslav Averyanov</h5>
                        <span>Marketer</span>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp animated" data-wow-delay=".6s">
                    <div class="img_box">
                        <img class="t_list rounded-circle" src="images/avatars/avatar-3.jpg" alt="">
                        <h5>Sergey Bogolyubov</h5>
                        <span>Trader</span>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp animated" data-wow-delay=".9s">
                    <div class="img_box">
                        <img class="t_list rounded-circle" src="images/avatars/avatar-4.jpg" alt="">
                        <h5>Kondrat Bocharov</h5>
                        <span>Team Lead</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--team_area end-->
    <!--faq_area start-->
     <section id="faq" class="faq_area">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="title">
                        <h2>What {{ucfirst(config('app.name'))}}<br><span>FAQ</span></h2>
                    </div>
                </div>
            </div>
            <div class="col-lg-8 offset-lg-2">
                <nav>
                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                      <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true"><h6>Regular questions</h6></a>
                      <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false"><h6>Popular questions</h6></a>
                    </div>
                  </nav>
                  <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active wow fadeInLeft animated" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                        <div class="faq_desc">
                            <h5>What is cryptocurrency ?</h5>
                            <p>Cryptocurrency is a form of payment that can be exchanged online for goods and services. Many companies have issued their own currencies, often called tokens, and these can be traded specifically for the good or service that the company provides. Think of them as you would arcade tokens or casino chips. You'll need to exchange real currency for the cryptocurrency to access the good or service. Cryptocurrencies work using a technology called blockchain. Blockchain is a decentralized technology spread across many computers that manages and records transactions. Part of the appeal of this technology is its security.</p>
                            <h5>How can I start trading ?</h5>
                            <p>You dont have to trade. We have group of expert with great market experience that trade with your funds with a certain percentage return.</p>
                            <h5>How safe is my fund ?</h5>
                            <p>Here at {{config('app.name')}} all invested funds are insured, backed and guaranteed by the Funds Insurance Office(FIO) & The Federal Deposit Insurance Corporation(FDIC) here in the United States. And the world financial group (internationally for foreign investors)</p>
                        </div>
                    </div>
                    <div class="tab-pane fade wow fadeInLeft animated" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                        <div class="faq_desc">
                            <h5>How can i withdraw my investment ?</h5>
                            <p>Withdraw your profit to your wallet and tranfer to your any exchange platform.</p>
                            <h5>Is it safe to leave my profit for a long time without withdrawal ?</h5>
                            <p>Your wallet is secured and safe to save your investments.</p>
                            <h5>How can I Deposit ?</h5>
                            <p>Goto your wallet page in the dashboard and click on DEPOSIT. Enter the amount you want ti deposit and transfer specified amount to the generated address.</p>
                        </div>
                    </div>
                  </div>
            </div>
        </div>
    </section>
    <!--team_area end-->
    <!--footer_area start-->
    <footer id="contact" class="footer_area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6 wow fadeInUp animated">
                    <div class="footer_widget">
                        <a class="fot_logo" href="index.html"><img src="images/logo/fot_logo1.png" alt=""></a>
                        <p>With our secured and reliable platform, we make investment easy and flexible for everyone.</p>
                        <ul class="fot_list">
                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                            <li><a href="#"><i class="fab fa-vimeo-v"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp animated" data-wow-delay=".3s">
                    <div class="footer_widget">
                       <h5>Newsletter</h5>
                       <p>Enter your email to subscribe to our newsletter</p>
                       <div class="input_area">
                           <input type="text" class="form-control" placeholder="Email Address">
                           <button class="theme_btn">Submit</button>
                        </div>
                    </div>
                </div>
                {{-- <div class="col-lg-4 col-md-6 wow fadeInUp animated" data-wow-delay=".6s">
                    <div class="footer_widget">
                        <div class="footer_widget">
                            <h5>Contact us</h5>
                            <ul class="cta_list">
                                <li><a href="#"><i class="flaticon-call"></i> +09 504 5820</a></li>
                                <li><a href="#"><i class="flaticon-envelope"></i> info@domain.com</a></li>
                                <li><a href="#"><i class="flaticon-paper-plane"></i> 124 Unito, 10 Road,
                                    New York, USA</a></li>
                            </ul>
                         </div>
                    </div>
                </div> --}}
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="copy_right wow fadeInUp animated">
                    <a href="/"><i class="fas fa-at"></i> Copyright 2018. <span>{{config('app.name')}}</span></a>
                </div>
            </div>
        </div>
    </footer>
    <!--footer_area end-->


    <!-- Scroll Top Button -->
    <button class="scroll-top">
        <i class="fa fa-angle-double-up"></i>
    </button>

    <!-- Preloader -->
<!--    <div id="preloader"></div>-->

    <!-- jQuery v3.3.1 -->
    <script src="/js/jquery-3.4.1.min.js"></script>
    <!-- Bootstrap v4.0.0 -->
    <script src="/js/popper.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <!-- Extra Plugin -->
    <script src="/vendors/animate-css/wow.min.js"></script>
    <script src="/vendors/magnify-popup/jquery.magnific-popup.min.js"></script>
    <script src="/vendors/particle-js/particles.js"></script>
    <script src="/vendors/particle-js/app.js"></script>
    <script src="/vendors/onePageNav/one-page-nav-min.js"></script>
    <script src="/vendors/meanMenu/jquery.meanmenu.min.js"></script>
    <script src="/vendors/counterup/jquery.waypoints.min.js"></script>
    <script src="/vendors/counterup/jquery.counterup.min.js"></script>
    <script src="/vendors/owl-carousel/owl.carousel.min.js"></script>
    <script src="/vendors/bootstrap-selector/jquery.nice-select.min.js"></script>

    <!-- Theme js / Custom js -->
    <script src="js/theme.js"></script>
</body>
</html>
