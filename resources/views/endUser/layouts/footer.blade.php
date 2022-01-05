<div id="footer-top-wrap" class="is-clearfix">
    <div id="footer-top" class="site-footer-top">
        <div id="footer-top-inner" class="site-footer-top-inner ">
            <section class="hero clients-section is-clearfix">
                <div class="container">
                    <div class="columns is-variable is-4 is-multiline">
                        <div class="column is-2-desktop is-12-tablet">
                            <h1 class="heading-title style-3 has-text-left">{{ucwords(trans('Dashboard/trans_partner.partner'))}}</h1>
                        </div>
                        <div class="column is-10-desktop is-12-tablet">
                            <nav class="clients-list level  owl-carousel no-dots carousel-items-5">
                                @isset($partners)
                                    @foreach($partners as $item)
                                <div class="client-item has-text-centered level-item">
                                    <a href="{{$item['link']}}" target="_blank">
                                        <img alt="{{$item['name']}}" src="{{URL::asset('images/partners/'.$item['image'])}}"> </a>
                                </div>
                                    @endforeach
                                @endisset
                            </nav>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <!-- #footer-top-inner -->
    </div>
    <!-- #footer-top -->
</div>
<!-- #footer-top-wrap -->
<div id="footer-wrap" class="is-clearfix">
    <footer id="footer" class="site-footer">
        <div id="footer-inner" class="site-footer-inner container">
            <div class="columns is-variable is-6 is-multiline">
                <div class="column is-4">
                    <div class="widget widget-html">
                        <div class="textwidget">
                            <div id="footer-logo" class="site-logo ">
                                @isset($infos)
                                    @foreach($infos as $info)
                                <a href="{{route('endUser.index')}}">
                                    <img alt="Joo - Niche Multi-Purpose HTML Template" src="{{URL::asset('images/info-site/'.$info['logo'])}}">
                                    <span class="logo-text">{{$info['title']}}</span>
                                </a>
                                    @endforeach
                                @endisset
                            </div>
                            <!-- #footer-logo -->
                            <br>
                            <p>The main component of a healthy environment for self esteem is that it needs be nurturing. It should provide unconditional warmth.</p>
                            <div class="footer-social-links ">
                                <ul>
                                    @isset($infos)
                                        @foreach($infos as $info)
                                    <li>
                                        <a href="{{$info['facebook_url']}}" target="_blank">
                            <span class="icon">
                              <i class="fab fa-facebook-f"></i>
                            </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{$info['twitter_url']}}" target="_blank">
                            <span class="icon">
                              <i class="fab fa-twitter"></i>
                            </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{$info['linkedin_url']}}" target="_blank">
                            <span class="icon">
                              <i class="fab fa-linkedin-in"></i>
                            </span>
                                        </a>
                                    </li>
                                        @endforeach
                                    @endisset
                                </ul>
                            </div>
                        </div>
                        <!-- .textwidget -->
                    </div>
                </div>
                <!-- .column -->
                <div class="column">
                    <div class="widget widget-links">
                        <h3 class="widget-title ">services</h3>
                        <ul>
                            <li>
                                <a href="./index.html">Air freight</a>
                            </li>
                            <li>
                                <a href="./index.html">sea freight</a>
                            </li>
                            <li>
                                <a href="./index.html">land transport</a>
                            </li>
                            <li>
                                <a href="./index.html">groupage</a>
                            </li>
                            <li>
                                <a href="./index.html">consultancy</a>
                            </li>
                        </ul>
                    </div>
                    <!-- .widget -->
                </div>
                <!-- .column -->
                <div class="column">
                    <div class="widget widget-links">
                        <h3 class="widget-title ">information</h3>
                        <ul>
                            <li>
                                <a href="./index.html">Warehousing</a>
                            </li>
                            <li>
                                <a href="./index.html">Ocean Freight</a>
                            </li>
                            <li>
                                <a href="./index.html">Air freight</a>
                            </li>
                            <li>
                                <a href="./index.html">land transport</a>
                            </li>
                            <li>
                                <a href="./index.html">groupage</a>
                            </li>
                        </ul>
                    </div>
                    <!-- .widget -->
                </div>

            </div>
            <!-- .columns -->
        </div>
        <!-- #footer-inner -->
    </footer>
    <!-- #footer -->
</div>
<!-- #footer-wrap -->
<div id="footer-bottom-wrap" class="is-clearfix">
    <div id="footer-bottom" class="site-footer-bottom">
        <div id="footer-bottom-inner" class="site-footer-bottom-inner ">
            <section class="section footer-bottom-content">
                <div class="container">
                    <h2 class="display-none">footer</h2>
                    <div class="level">
                        <div class="level-left">
                    <span class="footer-copyright">
                      <a href='/'>JOO</a> ©
                      <span class='current-year'></span> Logistics. All Rights Reserved. </span>
                        </div>
                        <!-- .level-left -->
                        <div class="level-right">
                            <div class="nav-wrap">
                                <nav class="main-navigation right">
                                    <ul class="menu">
                                        <li>
                                            <a href="./pages/about.html">about</a>
                                        </li>
                                        <li>
                                            <a href="./pages/services.html">services</a>
                                        </li>
                                        <li>
                                            <a href="./pages/pricing.html">pricing</a>
                                        </li>
                                        <li>
                                            <a href="./pages/sitemap.html">sitemap</a>
                                        </li>
                                        <li>
                                            <a href="./pages/contact.html">contact</a>
                                        </li>
                                    </ul>
                                </nav>
                                <!-- #site-navigation -->
                            </div>
                            <!-- #nav-wrap -->
                        </div>
                        <!-- .level-right -->
                    </div>
                    <!-- .level -->
                </div>
            </section>
            <!-- .footer-bottom-content -->
        </div>
        <!-- #footer-bottom-inner -->
    </div>
    <!-- #footer-bottom -->
</div>
<!-- #footer-bottom-wrap -->
<!-- show floating buttons -->
<div class="floating_buttons is-animate">
    <a href="javascript:void(0);" class="float" id="menu-share">
          <span class="icon">
            <i class="icon-settings"></i>
          </span>
    </a>
    <ul>
        <li>
            <a href="{{url('/ar')}}" target="_blank" class="tooltip is-tooltip-left" data-tooltip="RTL VERSION">
              <span class="icon">
                <i class="icon-refresh"></i>
              </span>
            </a>
        </li>
        <li>
            <a href="https://t.me/" target="_blank" class="tooltip is-tooltip-left" data-tooltip="LIVE CHAT">
              <span class="icon">
                <i class="icon-paper-plane"></i>
              </span>
            </a>
        </li>
    </ul>
</div>
<div id="quickviewDemos" class="quickview">
    <div class="quickview-header">
        <p class="title">Niche Templates</p>
        <span class="delete" data-dismiss="quickview"></span>
    </div>
    <div class="quickview-body">
        <div class="quickview-block">
            <div class="image-hover effect-5">
                <div class="columns is-variable is-multiline is-2">
                    <div class="column is-6">
                        <figure>
                            <img alt="Joo - Niche Multi-Purpose HTML Template" src="./assets/images/portfolio//demos/creative-1.png">
                            <figcaption>
                                <h5>Creative 01</h5>
                                <a href="https://themes.jozoor.com/html/joo/creative/01/" target="_blank">View more</a>
                            </figcaption>
                        </figure>
                    </div>
                    <div class="column is-6">
                        <figure>
                            <img alt="Joo - Niche Multi-Purpose HTML Template" src="./assets/images/portfolio//demos/corporate-1.png">
                            <figcaption>
                                <h5>Corporate 01</h5>
                                <a href="https://themes.jozoor.com/html/joo/corporate/01/" target="_blank">View more</a>
                            </figcaption>
                        </figure>
                    </div>
                    <div class="column is-6">
                        <figure>
                            <img alt="Joo - Niche Multi-Purpose HTML Template" src="./assets/images/portfolio//demos/entertainment-2.png">
                            <figcaption>
                                <h5>Burger Restaurant</h5>
                                <a href="https://themes.jozoor.com/html/joo/entertainment/02/" target="_blank">View more</a>
                            </figcaption>
                        </figure>
                    </div>
                    <div class="column is-6">
                        <figure>
                            <img alt="Joo - Niche Multi-Purpose HTML Template" src="./assets/images/portfolio//demos/wedding-1.png">
                            <figcaption>
                                <h5>Wedding</h5>
                                <a href="https://themes.jozoor.com/html/joo/wedding/01/" target="_blank">View more</a>
                            </figcaption>
                        </figure>
                    </div>
                    <div class="column is-6">
                        <figure>
                            <img alt="Joo - Niche Multi-Purpose HTML Template" src="./assets/images/portfolio//demos/corporate-2.png">
                            <figcaption>
                                <h5>Corporate 02</h5>
                                <a href="https://themes.jozoor.com/html/joo/corporate/02/" target="_blank">View more</a>
                            </figcaption>
                        </figure>
                    </div>
                    <div class="column is-6">
                        <figure>
                            <img alt="Joo - Niche Multi-Purpose HTML Template" src="./assets/images/portfolio//demos/entertainment-3.png">
                            <figcaption>
                                <h5>Barber Shop</h5>
                                <a href="https://themes.jozoor.com/html/joo/entertainment/03/" target="_blank">View more</a>
                            </figcaption>
                        </figure>
                    </div>
                    <div class="column is-6 is-active">
                        <figure>
                            <img alt="Joo - Niche Multi-Purpose HTML Template" src="./assets/images/portfolio//demos/corporate-3.png">
                            <span class="tag menu-mark is-primary">active</span>
                            <figcaption>
                                <h5>Logistics Cargo</h5>
                            </figcaption>
                        </figure>
                    </div>
                    <div class="column is-6">
                        <figure>
                            <img alt="Joo - Niche Multi-Purpose HTML Template" src="./assets/images/portfolio//demos/entertainment-1.png">
                            <figcaption>
                                <h5>Restaurant 01</h5>
                                <a href="https://themes.jozoor.com/html/joo/entertainment/01/" target="_blank">View more</a>
                            </figcaption>
                        </figure>
                    </div>
                    <div class="column is-6">
                        <figure>
                            <img alt="Joo - Niche Multi-Purpose HTML Template" src="./assets/images/portfolio//demos/wedding-2.png">
                            <figcaption>
                                <h5>Wedding Planner</h5>
                                <a href="https://themes.jozoor.com/html/joo/wedding/02/" target="_blank">View more</a>
                            </figcaption>
                        </figure>
                    </div>
                    <div class="column is-6">
                        <figure>
                            <img alt="Joo - Niche Multi-Purpose HTML Template" src="./assets/images/portfolio//demos/corporate-4.png">
                            <figcaption>
                                <h5>Logistics Cargo 02</h5>
                                <a href="https://themes.jozoor.com/html/joo/corporate/04/" target="_blank">View more</a>
                            </figcaption>
                        </figure>
                    </div>
                    <div class="column is-6">
                        <figure>
                            <img alt="Joo - Niche Multi-Purpose HTML Template" src="./assets/images/portfolio//demos/creative-2.png">
                            <figcaption>
                                <h5>Creative 02</h5>
                                <a href="https://themes.jozoor.com/html/joo/creative/02/" target="_blank">View more</a>
                            </figcaption>
                        </figure>
                    </div>
                    <div class="column is-6">
                        <figure>
                            <img alt="Joo - Niche Multi-Purpose HTML Template" src="./assets/images/portfolio//demos/wedding-3.png">
                            <figcaption>
                                <h5>Bridal Dresses</h5>
                                <a href="https://themes.jozoor.com/html/joo/wedding/03/" target="_blank">View more</a>
                            </figcaption>
                        </figure>
                    </div>
                    <div class="column is-6">
                        <figure>
                            <img alt="Joo - Niche Multi-Purpose HTML Template" src="./assets/images/portfolio//demos/specialty-1.png">
                            <figcaption>
                                <h5>Coming Soon </h5>
                                <a href="https://themes.jozoor.com/html/joo/specialty/01/" target="_blank">View more</a>
                            </figcaption>
                        </figure>
                    </div>
                    <div class="column is-6">
                        <figure>
                            <img alt="Joo - Niche Multi-Purpose HTML Template" src="./assets/images/portfolio//demos/creative-3.png">
                            <figcaption>
                                <h5>Creative 03</h5>
                                <a href="https://themes.jozoor.com/html/joo/creative/03/" target="_blank">View more</a>
                            </figcaption>
                        </figure>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<!-- #site-wrap -->
<script src="{{URL::asset('assetsEndUser/assets/js/vendor.min.js?v=1557446391092')}}"></script>
<script src="{{URL::asset('assetsEndUser/assets/js/scripts.min.js?v=1557446391092')}}"></script>
<script src="{{URL::asset('assetsEndUser/assets/js/custom.js?v=1557446391092')}}"></script>
@yield('js')
