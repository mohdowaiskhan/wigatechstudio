	<!-- Nav Bar -->
    <div class="dsn-nav-bar">
        <div class="site-header">
            <div class="extend-container">
                <div class="inner-header">
                    <div class="main-logo">
                        <a href="index.html">
                            <img class="dark-logo" src="{{asset('public/assets/img/logo-dark.png')}}" alt="" />
                            <img class="light-logo" src="{{asset('public/assets/img/logo.png')}}" alt="" />
                        </a>
                    </div>
                </div>
                <nav class=" accent-menu main-navigation">
                    <ul class="extend-container">
                        <li>
                            <a href="{{url('/')}}">Home</a>
                        </li>
                        <li class="nav__list-dropdown nav__list-item">
                            <a href="#">Services</a>
                            <ul>
                                <li class="nav__list-item"><a href="slider.html">Animation</a></li>
                                <li class="nav__list-item"><a href="slider2.html">NFT</a></li>
                                <li class="nav__list-item"><a href="slider3.html">Comic</a></li>
                                <li class="nav__list-item"><a href="slider3.html">Branding</a></li>
                            </ul>
                        </li>
                        
                        <li>
                            <a href="{{url('/portfolio')}}">Portfolio</a>
                        </li>

                        <li>
                            <a href="{{url('/about')}}">About</a>
                        </li>
                        <li>
                            <a href="{{url('/contact')}}">Contact</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
      
        <div class="header-top header-top-hamburger">
            <div class="header-container">
                <div class="logo main-logo">
                    <a href="index.html">
                        <img class="dark-logo" src="{{asset('public/assets/img/logo-dark.png')}}" alt="" />
                        <img class="light-logo" src="{{asset('public/assets/img/logo.png')}}" alt="" />
                    </a>
                </div>

                <div class="menu-icon" data-dsn="parallax" data-dsn-move="5">
                    <div class="icon-m">
                        <i class="menu-icon-close fas fa-times"></i>
                        <span class="menu-icon__line menu-icon__line-left"></span>
                        <span class="menu-icon__line"></span>
                        <span class="menu-icon__line menu-icon__line-right"></span>
                    </div>

                    <div class="text-menu">
                        <div class="text-button">Menu</div>
                        <div class="text-open">Open</div>
                        <div class="text-close">Close</div>
                    </div>
                </div>

                <div class="nav">
                    <div class="inner">
                        <div class="nav__content">

                        </div>
                    </div>
                </div>
                <div class="nav-content">
                    <div class="inner-content" style=" background: url(assets/img/ms.png);background-size: cover;">

                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- End Nav Bar -->