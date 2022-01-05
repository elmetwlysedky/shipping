<div id="header-top-wrap" class="is-clearfix">
    <div id="header-top" class="site-header-top">
        <div id="header-top-inner" class="site-header-top-inner container">
            <div class="level">
                <div class="level-left">
                    <ul class="topbar-info ">
                        @isset($infos)
                            @foreach($infos as $info)
                        <li>
                            <a href="#">
                      <span class="icon">
                        <i class="icon-clock"></i>
                      </span> {{$info['day']}} | {{$info['open_time']}} - {{$info['close_time']}} </a>
                        </li>
                        <li>
                            <a href="mailto:{{$info['email']}}">
                      <span class="icon">
                        <i class="icon-envelope"></i>
                      </span> {{$info['email']}} </a>
                        </li>
                        <li>
                            <a href="tel:{{$info['phone']}}">
                      <span class="icon">
                        <i class="icon-phone"></i>
                      </span> {{$info['phone']}} </a>
                        </li>
                            @endforeach
                        @endisset
                    </ul>
                </div>
                <!-- .level-left -->
                <div class="level-right">
                    <ul class="header-menu-icons social">
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
                    <!-- .header-menu-icons -->
                    <!--- Start DropMenu Language --->
                    <div class="nav-menu-dropdown style-2 on-click">
                        @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)

                            <a rel="alternate" hreflang="{{ $localeCode }}"
                               href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                                @if($properties['native']=="English")
                                    <span class="flag-icon flag-icon-gb"></span>
                                @elseif($properties['native']=="العربية")
                                    <span class="flag-icon flag-icon-eg"></span>
                                @endif
                            </a>
                        @endforeach
                    </div>

                </div>
                <!-- .level-right -->
            </div>
            <!-- .level -->
        </div>
        <!-- #header-top-inner -->
    </div>
    <!-- #header-top -->
</div>
<!-- #header-top-wrap -->
<div id="header-wrap" class="is-clearfix">
    <header id="header" class="site-header">
        <div id="header-inner" class="site-header-inner container">
            <div class="level">
                <div class="level-left">
                    <div id="header-logo" class="site-logo ">
                        <div id="logo-inner" class="site-logo-inner">
                            @isset($infos)
                                @foreach($infos as $info)
                            <a href="{{route('endUser.index')}}">
                                <img alt="Joo - Niche Multi-Purpose HTML Template" src="{{URL::asset('images/info-site/'.$info['logo'])}}">
                                <span class="logo-text">{{$info['title']}}</span>
                            </a>
                                @endforeach
                            @endisset
                        </div>
                        <!-- #logo-inner -->
                    </div>
                    <!-- #header-logo -->
                </div>
                <!-- .level-left -->
                <div class="level-right">
                    <div class="nav-wrap">
                        <nav class="main-navigation right">
                            <ul class="menu">
                                <li class="mega-menu niche-templates active">
                                    <a href="{{route('endUser.index')}}">{{trans('front/home.home')}}</a>
                                    <ul>
                                        <li>
                                            <div class="image-hover effect-5">
                                                <figure>
                                                    <img alt="Joo - Niche Multi-Purpose HTML Template" src="{{URL::asset('assetsEndUser/assets/images/portfolio//demos/creative-1.png')}}">
                                                    <figcaption>
                                                        <h5>Creative 01</h5>
                                                        <a href="https://themes.jozoor.com/html/joo/creative/01/" target="_blank">View more</a>
                                                    </figcaption>
                                                </figure>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="image-hover effect-5">
                                                <figure>
                                                    <img alt="Joo - Niche Multi-Purpose HTML Template" src="{{URL::asset('assetsEndUser/assets/images/portfolio//demos/corporate-1.png')}}">
                                                    <figcaption>
                                                        <h5>Corporate 01</h5>
                                                        <a href="https://themes.jozoor.com/html/joo/corporate/01/" target="_blank">View more</a>
                                                    </figcaption>
                                                </figure>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="image-hover effect-5">
                                                <figure>
                                                    <img alt="Joo - Niche Multi-Purpose HTML Template" src="{{URL::asset('assetsEndUser/assets/images/portfolio//demos/entertainment-2.png')}}">
                                                    <figcaption>
                                                        <h5>Burger Restaurant</h5>
                                                        <a href="https://themes.jozoor.com/html/joo/entertainment/02/" target="_blank">View more</a>
                                                    </figcaption>
                                                </figure>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="image-hover effect-5">
                                                <figure>
                                                    <img alt="Joo - Niche Multi-Purpose HTML Template" src="{{URL::asset('assetsEndUser/assets/images/portfolio//demos/wedding-1.png')}}">
                                                    <figcaption>
                                                        <h5>Wedding</h5>
                                                        <a href="https://themes.jozoor.com/html/joo/wedding/01/" target="_blank">View more</a>
                                                    </figcaption>
                                                </figure>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="image-hover effect-5">
                                                <figure>
                                                    <img alt="Joo - Niche Multi-Purpose HTML Template" src="{{URL::asset('assetsEndUser/assets/images/portfolio//demos/corporate-2.png')}}">
                                                    <figcaption>
                                                        <h5>Corporate 02</h5>
                                                        <a href="https://themes.jozoor.com/html/joo/corporate/02/" target="_blank">View more</a>
                                                    </figcaption>
                                                </figure>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="image-hover effect-5">
                                                <figure>
                                                    <img alt="Joo - Niche Multi-Purpose HTML Template" src="{{URL::asset('assetsEndUser/assets/images/portfolio//demos/entertainment-3.png')}}">
                                                    <figcaption>
                                                        <h5>Barber Shop</h5>
                                                        <a href="https://themes.jozoor.com/html/joo/entertainment/03/" target="_blank">View more</a>
                                                    </figcaption>
                                                </figure>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="image-hover effect-5 is-active">
                                                <figure>
                                                    <img alt="Joo - Niche Multi-Purpose HTML Template" src="{{URL::asset('assetsEndUser/assets/images/portfolio//demos/corporate-3.png')}}">
                                                    <span class="tag menu-mark is-primary">active</span>
                                                    <figcaption>
                                                        <h5>Logistics Cargo</h5>
                                                    </figcaption>
                                                </figure>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="image-hover effect-5">
                                                <figure>
                                                    <img alt="Joo - Niche Multi-Purpose HTML Template" src="{{URL::asset('assetsEndUser/assets/images/portfolio//demos/entertainment-1.png')}}">
                                                    <figcaption>
                                                        <h5>Restaurant 01</h5>
                                                        <a href="https://themes.jozoor.com/html/joo/entertainment/01/" target="_blank">View more</a>
                                                    </figcaption>
                                                </figure>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="image-hover effect-5">
                                                <figure>
                                                    <img alt="Joo - Niche Multi-Purpose HTML Template" src="{{URL::asset('assetsEndUser/assets/images/portfolio//demos/wedding-2.png')}}">
                                                    <figcaption>
                                                        <h5>Wedding Planner</h5>
                                                        <a href="https://themes.jozoor.com/html/joo/wedding/02/" target="_blank">View more</a>
                                                    </figcaption>
                                                </figure>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="image-hover effect-5">
                                                <figure>
                                                    <img alt="Joo - Niche Multi-Purpose HTML Template" src="{{URL::asset('assetsEndUser/assets/images/portfolio//demos/corporate-4.png')}}">
                                                    <figcaption>
                                                        <h5>Logistics Cargo 02</h5>
                                                        <a href="https://themes.jozoor.com/html/joo/corporate/04/" target="_blank">View more</a>
                                                    </figcaption>
                                                </figure>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="image-hover effect-5">
                                                <figure>
                                                    <img alt="Joo - Niche Multi-Purpose HTML Template" src="{{URL::asset('assetsEndUser/assets/images/portfolio//demos/creative-2.png')}}">
                                                    <figcaption>
                                                        <h5>Creative 02</h5>
                                                        <a href="https://themes.jozoor.com/html/joo/creative/02/" target="_blank">View more</a>
                                                    </figcaption>
                                                </figure>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="image-hover effect-5">
                                                <figure>
                                                    <img alt="Joo - Niche Multi-Purpose HTML Template" src="{{URL::asset('assetsEndUser/assets/images/portfolio//demos/wedding-3.png')}}">
                                                    <figcaption>
                                                        <h5>Bridal Dresses</h5>
                                                        <a href="https://themes.jozoor.com/html/joo/wedding/03/" target="_blank">View more</a>
                                                    </figcaption>
                                                </figure>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="image-hover effect-5">
                                                <figure>
                                                    <img alt="Joo - Niche Multi-Purpose HTML Template" src="{{URL::asset('assetsEndUser/assets/images/portfolio//demos/creative-3.png')}}">
                                                    <figcaption>
                                                        <h5>Creative 03</h5>
                                                        <a href="https://themes.jozoor.com/html/joo/creative/03/" target="_blank">View more</a>
                                                    </figcaption>
                                                </figure>
                                            </div>
                                        </li>
                                        <li>')}}
                                            <div class="image-hover effect-5">
                                                <figure>
                                                    <img alt="Joo - Niche Multi-Purpose HTML Template" src="{{URL::asset('assetsEndUser/assets/images/portfolio//demos/specialty-1.png')}}">
                                                    <figcaption>
                                                        <h5>Coming Soon </h5>
                                                        <a href="https://themes.jozoor.com/html/joo/specialty/01/" target="_blank">View more</a>
                                                    </figcaption>
                                                </figure>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="./features/index.html">{{trans('Dashboard\delivery.logisticeServices')}}</a>
                                    @isset($All_delivery)

                                    <ul>
                                        @foreach($All_delivery as $logistic)
                                        <li>
                                            <a href="javascript:void(0);">{{$logistic->name}}
                                                <span class="tag menu-mark is-secondary">wow</span>
                                            </a>

                                        </li>
                                        @endforeach

                                    </ul>


                                    @endisset
                                </li>
                                <li>
                                    <a href="{{route('login')}}">{{trans('Dashboard\trans_login.LogIn')}}</a>

                                </li>
                                <li>
                                    <a href="{{route('register.user')}}">{{trans('Dashboard\trans_register.Register')}}</a>

                                </li>

                                <li class="mega-menu">

                                    <a href="./elements/index.html">elements</a>
                                    <ul>
                                        <li>
                                            <a href="./elements/index.html">elements</a>
                                            <ul>
                                                <li>
                                                    <a href="./elements/latest-news.html">latest news</a>
                                                </li>
                                                <li>
                                                    <a href="./elements/accordions.html">accordions</a>
                                                </li>
                                                <li>
                                                    <a href="./elements/breadcrumbs.html">breadcrumbs</a>
                                                </li>
                                                <li>
                                                    <a href="./elements/counters.html">counters</a>
                                                </li>
                                                <li>
                                                    <a href="./elements/subscribe.html">subscribe</a>
                                                </li>
                                                <li>
                                                    <a href="./elements/pageloader.html">page-loader</a>
                                                </li>
                                                <li>
                                                    <a href="./elements/notification.html">notification</a>
                                                </li>
                                                <li>
                                                    <a href="./elements/modal.html">modal</a>
                                                </li>
                                                <li>
                                                    <a href="./elements/backgrounds-types.html">backgrounds types</a>
                                                </li>
                                                <li>
                                                    <a href="./elements/carousel-slider.html">carousel slider</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="./elements/index.html">elements</a>
                                            <ul>
                                                <li>
                                                    <a href="./elements/team.html">team</a>
                                                </li>
                                                <li>
                                                    <a href="./elements/tabs.html">tabs</a>
                                                </li>
                                                <li>
                                                    <a href="./elements/pagination.html">pagination</a>
                                                </li>
                                                <li>
                                                    <a href="./elements/pricing-tables.html">pricing tables</a>
                                                </li>
                                                <li>
                                                    <a href="./elements/testimonials.html">testimonials</a>
                                                </li>
                                                <li>
                                                    <a href="./elements/progress-bars.html">progress bars</a>
                                                </li>
                                                <li>
                                                    <a href="./elements/card.html">card</a>
                                                </li>
                                                <li>
                                                    <a href="./elements/tables.html">tables</a>
                                                </li>
                                                <li>
                                                    <a href="./elements/google-map.html">google map</a>
                                                </li>
                                                <li>
                                                    <a href="./elements/animations.html">animations</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="./elements/index.html">elements</a>
                                            <ul>
                                                <li>
                                                    <a href="./elements/recent-work.html">recent work</a>
                                                </li>
                                                <li>
                                                    <a href="./elements/lists.html">lists</a>
                                                </li>
                                                <li>
                                                    <a href="./elements/dividers.html">dividers</a>
                                                </li>
                                                <li>
                                                    <a href="./elements/heading.html">heading</a>
                                                </li>
                                                <li>
                                                    <a href="./elements/clients.html">clients</a>
                                                </li>
                                                <li>
                                                    <a href="./elements/calendar.html">calendar</a>
                                                </li>
                                                <li>
                                                    <a href="./elements/dropdown.html">dropdown</a>
                                                </li>
                                                <li>
                                                    <a href="./elements/code-highlight.html">code highlight</a>
                                                </li>
                                                <li>
                                                    <a href="./elements/ratings.html">ratings</a>
                                                </li>
                                                <li>
                                                    <a href="./elements/notify-bars-alerts.html">notify bars &amp; alerts</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="./elements/index.html">elements</a>
                                            <ul>
                                                <li>
                                                    <a href="./elements/lightboxes.html">lightboxes</a>
                                                </li>
                                                <li>
                                                    <a href="./elements/icons.html">icons</a>
                                                </li>
                                                <li>
                                                    <a href="./elements/tags.html">tags</a>
                                                </li>
                                                <li>
                                                    <a href="./elements/icon-boxes.html">icon boxes</a>
                                                </li>
                                                <li>
                                                    <a href="./elements/blockquotes.html">blockquotes</a>
                                                </li>
                                                <li>
                                                    <a href="./elements/timeline.html">timeline</a>
                                                </li>
                                                <li>
                                                    <a href="./elements/menu.html">navigation menu</a>
                                                </li>
                                                <li>
                                                    <a href="./elements/quickview.html">quickview</a>
                                                </li>
                                                <li>
                                                    <a href="./elements/image-hover.html">image hover</a>
                                                </li>
                                                <li>
                                                    <a href="./elements/animated-typing.html">animated typing</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="./elements/index.html">elements</a>
                                            <ul>
                                                <li>
                                                    <a href="./elements/instagram.html">instagram</a>
                                                </li>
                                                <li>
                                                    <a href="./elements/buttons.html">buttons</a>
                                                </li>
                                                <li>
                                                    <a href="./elements/badges.html">badges</a>
                                                </li>
                                                <li>
                                                    <a href="./elements/call-to-action.html">call to action</a>
                                                </li>
                                                <li>
                                                    <a href="./elements/typography.html">typography</a>
                                                </li>
                                                <li>
                                                    <a href="./elements/box.html">box</a>
                                                </li>
                                                <li>
                                                    <a href="./elements/message.html">message</a>
                                                </li>
                                                <li>
                                                    <a href="./elements/steps.html">steps</a>
                                                </li>
                                                <li>
                                                    <a href="./elements/countdown.html">countdown</a>
                                                </li>
                                                <li>
                                                    <a href="./elements/charts.html">charts</a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="mega-menu">

                                    <a href="{{route('endUser.contact.create')}}">{{trans('front/home.contact')}}</a>
                                </li>
                            </ul>
                        </nav>
                        <!-- #site-navigation -->
                    </div>
                    <!-- #nav-wrap -->
                    <ul class="header-menu-icons default ">
                        <li class="dropdown-search-form search-style-2">
                            <a href="javascript:void(0);">
                      <span class="icon">
                        <i class="icon-magnifier"></i>
                      </span>
                            </a>
                            <ul>
                                <li class="header widget-form">
                                    <form>
                                        <div class="field">
                                            <div class="control is-expanded">
                                                <input class="input" type="text" placeholder="Search...">
                                                <button type="submit" class="button">
                                <span class="icon">
                                  <i class="icon-magnifier"></i>
                                </span>
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </li>
                            </ul>
                        </li>
                    </ul>
                    <!-- .header-menu-icons -->
                    <a href="#quote" class="button is-white">{{trans('Dashboard\delivery.get_a_quote')}}</a>
                    <div class="modal search-form-overlay">
                        <div class="modal-background"></div>
                        <div class="modal-content">
                            <form class="widget-form">
                                <div class="field">
                                    <div class="control is-expanded">
                                        <input class="input" type="text" placeholder="Search...">
                                        <button type="submit" class="button">
                            <span class="icon">
                              <i class="icon-magnifier"></i>
                            </span>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <button class="modal-close is-large" aria-label="close"></button>
                    </div>
                    <!-- .modal.search-form-overlay -->
                </div>
                <!-- .level-right -->
            </div>
            <!-- .level -->
        </div>
        <!-- #header-inner -->
    </header>
    <!-- #header -->
</div>
