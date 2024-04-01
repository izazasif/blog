
               <!-- Main Header -->
<header class="main-header header-style-one">

<!-- Header Upper -->
<div class="header-upper">
    <div class="inner-container clearfix">
        <!--Logo-->
        <div class="logo-box">
            <div class="logo"><a href="/" title="Miaki Logo"><img
                        src="{{ url('/') }}/web/images/mlogo/mlogo6.png" id="thm-logo" alt="Miaki Logo"
                        title="Miaki Logo"></a>
            </div>
        </div>
        <div class="nav-outer clearfix">
            <!--Mobile Navigation Toggler-->
            <div class="mobile-nav-toggler"><span class="icon flaticon-menu-2"></span><span
                    class="txt">Menu</span></div>

            <!-- Main Menu -->
            <nav class="main-menu navbar-expand-md navbar-light">
                <div class="collapse navbar-collapse show clearfix" id="navbarSupportedContent">
                    <ul class="navigation clearfix">
                        
                        <li class="{{ request()->routeIs('/') ? 'current' : '' }}">
                          
                        </li>
                        <li class="dropdown">
                            <a class="icon-container" >About &#160 <i class="fa fa-caret-down"></i></a>
                            
                            <ul>
                                <li class="{{ request()->routeIs('about_us') ? 'current' : '' }}"><a href="{{route('about_us')}}">About Us</a></li>
                                <li class="{{ request()->routeIs('our_leadership_team') ? 'current' : '' }}"><a href="{{route('our_leadership_team')}}">Our Team </a></li>
                                <li class="{{ request()->routeIs('newsroom') ? 'current' : '' }}"><a href="{{route('newsroom')}}">Events </a></li>
                                <!-- <li class="{{ request()->routeIs('miaki_career') ? 'current' : '' }}"><a href="{{route('miaki_career')}}">Career </a></li> -->
                            </ul>
                        </li>

                       

                        <li class="{{ request()->routeIs('services') ? 'current' : '' }}">
                            <a href="{{route('services')}}" >Services</a>
                            <!-- <ul>
                                <li><a href="website-web-development.html">Website Development</a></li>
                            </ul> -->
                        </li>

                        <li class="{{ request()->routeIs('portfolio') ? 'current' : '' }}">
                            <a href="{{route('portfolio')}}">Portfolio</a>
                            <!-- <ul>
                                <li><a href="website-clients.html">Clients</a></li>
                                <li><a href="website-testimonials.html">Testimonials</a></li>
                            </ul> -->
                        </li>
                    
                        <!-- <li class="dropdown"><a href="website-blog.html">Blog</a></li> -->
                        <!-- <li class="dropdown"><a href="website-contact.html">Contact</a></li> -->
                        <li class="{{ request()->routeIs('contact') ? 'current' : '' }}"><a href="{{route('contact')}}">Contact</a></li>
                        <!-- <li><a href="website-history.html">History</a></li> -->
                        <li class="{{ request()->routeIs('blog') ? 'current' : '' }}">
                            <a href="{{route('blog')}}">Blogs</a>
                          
                        </li>
                        <!-- <li class="dropdown">
                            <a class="icon-container" >About &#160 <i class="fa fa-caret-down"></i></a>
                            
                            <ul>
                                <li class="{{ request()->routeIs('about_us') ? 'current' : '' }}"><a href="{{route('about_us')}}">About Us</a></li>
                                <li class="{{ request()->routeIs('our_leadership_team') ? 'current' : '' }}"><a href="{{route('our_leadership_team')}}">Our Team </a></li>
                                <li class="{{ request()->routeIs('newsroom') ? 'current' : '' }}"><a href="{{route('newsroom')}}">Events </a></li>
                                <li class="{{ request()->routeIs('miaki_career') ? 'current' : '' }}"><a href="{{route('miaki_career')}}">Career </a></li>
                            </ul>
                        </li> -->
                        <li class="{{ request()->routeIs('miaki_career') ? 'current' : '' }}">
                            <a href="{{route('miaki_career')}}" >Career</a>
                            <!-- <ul>
                                <li><a href="website-web-development.html">Website Development</a></li>
                            </ul> -->
                        </li>
                    </ul>
                </div>
            </nav>
        </div>

        <div class="other-links clearfix">

            <div class="link-box">
                <div class="call-us">
                    <a class="link" href="tel:01759692020">
                        <span class="icon"></span>
                        <span class="sub-text">Call Anytime</span>
                        <span class="number">+88 0184 3900 056</span>
                    </a>
                </div>
            </div>
        </div>

    </div>
</div>
<!--End Header Upper-->


</header>
<!-- End Main Header -->

<!--Mobile Menu-->
<div class="side-menu__block">


<div class="side-menu__block-overlay custom-cursor__overlay">
    <div class="cursor"></div>
    <div class="cursor-follower"></div>
</div><!-- /.side-menu__block-overlay -->
<div class="side-menu__block-inner ">
    <div class="side-menu__top justify-content-end">

        <a href="#" class="side-menu__toggler side-menu__close-btn"><img src="{{ url('/') }}/web/images/icons/close-1-1.png"
                alt=""></a>
    </div><!-- /.side-menu__top -->


    <nav class="mobile-nav__container">
        <!-- content is loading via js -->
    </nav>
    <div class="side-menu__sep"></div><!-- /.side-menu__sep -->
    <div class="side-menu__content">
        
        <p><a href="mailto:info@miaki.co">info@miaki.co</a> <br> <a href="tel:8801843900056">+88 0184 3900 056</a></p>
        <!-- <div class="side-menu__social">
            <a href="#"><i class="fab fa-facebook-square"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
            <a href="#"><i class="fab fa-pinterest-p"></i></a>
        </div> -->
    </div><!-- /.side-menu__content -->
</div><!-- /.side-menu__block-inner -->
</div><!-- /.side-menu__block -->