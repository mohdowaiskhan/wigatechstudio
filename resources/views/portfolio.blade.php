@extends('includes.master')
@section('content')

{{-- Start Main Section  --}}
<main class="main-root">
    <div id="dsn-scrollbar">
        <header>
            <div class="container header-hero">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="contenet-hero">
                            <h5>Our WOrk</h5>
                            <h1>portfolio</h1>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <div class="wrapper">
            <div class="root-work">
                <div class="container">
                    <div class="box-title" data-dsn-title="cover">
                        <h2 class="title-cover" data-dsn-grid="move-section" data-dsn-move="-70">Projets</h2>
                    </div>

                    <div class="filterings">
                        <div class="filtering-wrap">
                            <div class="filtering">
                                <div class="selector"></div>
                                <button type="button" data-filter="*" class="active">
                                    All
                                </button>
                                <button type="button" data-filter=".brand">Brand</button>
                                <button type="button" data-filter=".photography">Photography</button>
                                <button type="button" data-filter=".architecture">Architecture</button>
                                <button type="button" data-filter=".video">video</button>

                            </div>
                        </div>
                    </div>

                    <div class="projects-list gallery">
                        <div class="item brand">
                            <a href="project-9.html" class="effect-ajax" data-dsn-ajax="work"
                                data-dsn-grid="move-up">
                                <img class="has-top-bottom" src="{{asset('public/assets/img/project/project9/1.jpg')}}" alt="" />
                                <div class="item-border"></div>
                                <div class="item-info">
                                    <h5 class="cat">Brand</h5>
                                    <h4>Time Tag Watch</h4>
                                    <span><span>Veiw Project</span></span>
                                </div>
                            </a>
                        </div>

                        <div class="item brand">
                            <a href="project-4.html" class="effect-ajax" data-dsn-ajax="work"
                                data-dsn-grid="move-up">
                                <img class="has-top-bottom" src="{{asset('public/assets/img/project/project4/2.jpg')}}" alt="" />
                                <div class="item-border"></div>
                                <div class="item-info">
                                    <h5 class="cat">Brand</h5>
                                    <h4>Under Armour</h4>
                                    <span><span>Veiw Project</span></span>
                                </div>
                            </a>
                        </div>

                        <div class="item photography">
                            <a href="project-3.html" data-dsn-grid="move-up">
                                <img class="has-top-bottom" src="{{asset('public/assets/img/project/project3/1.jpg')}}" alt="" />
                                <div class="item-border"></div>
                                <div class="item-info">
                                    <h5 class="cat">Photography</h5>
                                    <h4>Re Styling</h4>
                                    <span><span>Veiw Project</span></span>
                                </div>
                            </a>
                        </div>

                        <div class="item video">
                            <a href="project-8.html">
                                <img class="hidden" src="{{asset('public/assets/img/project/project8/1.jpg')}}" alt="" />
                                <div data-dsn="video" data-overlay="4" style="height: 80vh">
                                    <video class="has-top-bottom dsn-video" preload="none"
                                        poster="{{asset('public/assets/img/project/project8/1.jpg')}}" autoplay loop muted>
                                        <source src="http://theme.dsngrid.com/video/droow.mp4" type="video/mp4"
                                            type="video/mp4">
                                        <source src="http://theme.dsngrid.com/video/droow.webm" type="video/webm">
                                        Your browser does not support HTML5 video.
                                    </video>
                                </div>
                                <div class="item-border"></div>
                                <div class="item-info">
                                    <h5 class="cat">video</h5>
                                    <h4>Toast 2019 Reel</h4>
                                    <span><span>Veiw Project</span></span>
                                </div>
                            </a>
                        </div>

                        <div class="item photography">
                            <a href="project-7.html" data-dsn-grid="move-up">
                                <img class="has-top-bottom" src="{{asset('public/assets/img/project/project7/1.jpg')}}" alt="" />
                                <div class="item-border"></div>
                                <div class="item-info">
                                    <h5 class="cat">Photography</h5>
                                    <h4>Nile - Kabutha</h4>
                                    <span><span>Veiw Project</span></span>
                                </div>
                            </a>
                        </div>

                        <div class="item photography">
                            <a href="project-6.html" data-dsn-grid="move-up">
                                <img class="has-top-bottom" src="{{asset('public/assets/img/project/project6/1.jpg')}}" alt="" />
                                <div class="item-border"></div>
                                <div class="item-info">
                                    <h5 class="cat">Photography</h5>
                                    <h4>Sleep Walker</h4>
                                    <span><span>Veiw Project</span></span>
                                </div>
                            </a>
                        </div>

                        <div class="item brand">
                            <a href="project-1.html" data-dsn-grid="move-up">
                                <img class="has-top-bottom" src="{{asset('public/assets/img/project/project1/1.jpg')}}" alt="" />
                                <div class="item-border"></div>
                                <div class="item-info">
                                    <h5 class="cat">brand</h5>
                                    <h4>Magista</h4>
                                    <span><span>Veiw Project</span></span>
                                </div>
                            </a>
                        </div>

                        <div class="item photography">
                            <a href="project-2.html" data-dsn-grid="move-up">
                                <img class="has-top-bottom" src="{{asset('public/assets/img/project/project2/1.jpg')}}" alt="" />
                                <div class="item-border"></div>
                                <div class="item-info">
                                    <h5 class="cat">Photography</h5>
                                    <h4>Bastian Bux</h4>
                                    <span><span>Veiw Project</span></span>
                                </div>
                            </a>
                        </div>

                        <div class="item architecture">
                            <a href="project-5.html" data-dsn-grid="move-up">
                                <img class="has-top-bottom" src="{{asset('public/assets/img/project/project5/1.jpg')}}" alt="" />
                                <div class="item-border"></div>
                                <div class="item-info">
                                    <h5 class="cat">Architecture</h5>
                                    <h4>Novara Conic</h4>
                                    <span><span>Veiw Project</span></span>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <section class="contact-up section-margin section-padding">
                <div class="container">
                    <div class="c-wapp">
                        <a href="contact.html" class="effect-ajax">
                            <span class="hiring">
                                We are hiring
                            </span>
                            <span class="career">
                                Dare and contact us immediately!
                            </span>
                        </a>
                    </div>
                </div>
            </section>

        </div>
        <footer>
            <div class="info">
                <div class="contact-footer">
                    <a href="tel:010" class="phone image-zoom" data-dsn="parallax">012.345.6789</a>
                    <a href="#" class="email image-zoom" data-dsn="parallax">info@dsngrid</a>
                </div>
                <div class="copyright-social">
                    <p>© 2019 Design Grid</p>
                    <ul>
                        <li class="image-zoom" data-dsn="parallax"><a href="#" target="_blank">Instagram</a></li>
                        <li class="image-zoom" data-dsn="parallax"><a href="#" target="_blank">Facebook</a></li>
                        <li class="image-zoom" data-dsn="parallax"><a href="#" target="_blank">Linkedin</a></li>
                    </ul>
                </div>
            </div>
        </footer>
    </div>
</main>



{{-- End Main Section  --}}

@endsection