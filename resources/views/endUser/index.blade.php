@extends('endUser.layouts.master')

@section('title')
    الخدمات اللوجستية | Joo - Niche Multi-Purpose HTML Template
@endsection

@section('content')
    <!-- #header-wrap -->
    <div id="header-bottom-wrap" class="is-clearfix">
        <div id="header-bottom" class="site-header-bottom">
            <div id="header-bottom-inner" class="site-header-bottom-inner ">
                <section class="hero slider is-clearfix ">
                    <h2 class="display-none">slider</h2>
                    <div class="rev_slider_wrapper fullscreen-container ">
                        <div id="rev_slider_1" class="rev_slider tp-overflow-hidden fullscreenbanner" data-version="5.4.7" style="display:none">
                            <a href="#welcome" class="slider-scroll-down">scroll down</a>
                            <ul>
                                @foreach($logistics as $model)
                                C:\Users\hp\Desktop\Group2\public\Dashboard\img\delivery
                                <li data-transition="fade" data-thumb="{{asset('Dashboard/img/delivery/'.$model-> icon_url)}}" data-title="{{$model-> name}}" data-param1="{{$model-> details}}" data-param2="{{asset('Dashboard/img/delivery/'.$model->icon_url)}}">
                                    <img alt="Joo - Niche Multi-Purpose HTML Template" class="rev-slidebg" src="{{asset('Dashboard/img/delivery/'.$model-> img_url)}}" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-kenburns="off" data-duration="30000" data-ease="Linear.easeNone"
                                         data-scalestart="100" data-scaleend="115" data-rotatestart="0" data-rotateend="0" data-offsetstart="0 0" data-offsetend="0 0" data-bgparallax="15">
                                    <div class="tp-caption tp-resizeme small_text top" data-x="left" data-hoffset="['-105','-105','0','0']" data-y="center" data-voffset="['-152','-152','-152','-152']" data-width="none" data-height="none" data-whitespace="nowrap" data-type="text"
                                         data-responsive-offset="on" data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1600,"to":"o:1;","delay":800,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"opacity:0;","ease":"nothing"}]'
                                         data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"> {{$model-> name }}</div>
                                    <div class="tp-caption tp-resizeme large_text" data-x="left" data-hoffset="['-105','-105','0','0']" data-y="center" data-voffset="['-56','-56','-56','-56']" data-width="none" data-height="none" data-whitespace="nowrap"
                                         data-type="text" data-responsive-offset="on" data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1600,"to":"o:1;","delay":1200,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"opacity:0;","ease":"nothing"}]'
                                         data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"> {{$model-> title_main}}
                                        <br>{{$model-> title_sup }} </div>
                                    <a class="tp-caption tp-resizeme button is-primary" href="#" data-frames='[{"delay":1600,"speed":2000,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","to":"o:1;","ease":"Power2.easeInOut"},{"delay":"wait","speed":800,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                                       data-x="left" data-hoffset="['-102','-102','0','0']" data-y="center" data-voffset="['82','82','0','0']" data-type="button">
                                        <span>learn More</span>
                                        <span class="icon is-small">
                          <i class="ion-ios-arrow-round-forward"></i>
                        </span>
                                    </a>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                        <!-- .rev_slider -->
                    </div>
                    <!-- .rev_slider_wrapper -->
                </section>
                <!-- .slider -->
            </div>
            <!-- #header-bottom-inner -->
        </div>
        <!-- #header-bottom -->
    </div>
    <!-- #header-bottom-wrap -->
    <!-- import content layouts and modules -->
    <div id="content-main-wrap" class="is-clearfix">
        <div id="content-area" class="site-content-area">
            <div id="content-area-inner" class="site-content-area-inner">
                <!-- import content layouts and modules -->
                <!-- start adding page content -->
                <section id="welcome" class="section welcome-section has-background-primary-light is-clearfix">
                    <div class="container">
                        @isset( $sectionTitle )
                        <p class="heading-title-top has-text-centered">{{$sectionTitle->title_p}}</p>
                        <h1 class="heading-title style-3"> {{$sectionTitle->title_p}} <br>
                           @if(!empty($sectionTitle->title_span))
                        <span class="has-text-primary">{{$sectionTitle->title_span}}</span>
                        @endif
                        </h1>
                        @endisset
                        <br>
                        <br>
                        <div class="blog-list style-2 columns is-variable is-4 is-multiline">
                            <div class="column is-4" data-aos="fade">
                            @isset( $employe )
                                <article class="blog-post">
                                    <figure class="post-image">
                                        <a href="./pages/about.html">

                                            <img alt="Joo - Niche Multi-Purpose HTML Template" src="{{asset('Dashboard/img/employes/'.$employe ->img_url)}}"> </a>
                                    </figure>

                                    <div class="entry-header">
                                        <h2 class="entry-title">
                                            <a href="./pages/about.html">{{$employe-> name}}</a>
                                        </h2>
                                    </div>

                                    <!-- .entry-header -->
                                    <div class="entry-content">
                                        <p>{{$employe-> details}}</p>
                                    </div>
                                    <!-- .entry-content -->
                                    <div class="entry-footer">
                                        <a href="./pages/about.html" class="button">Read More</a>
                                    </div>
                                </article>
                                <!-- .blog-post -->
                                @endisset
                            </div>
                            @foreach($Welcome as $model)
                            <div class="column is-4" data-aos="fade">

                                <article class="blog-post">
                                    <figure class="post-image">
                                        <a href="./pages/about.html">
                                            <img alt="Joo - Niche Multi-Purpose HTML Template" src="{{asset('Dashboard/img/delivery/'.$model ->img_url)}}"> </a>
                                    </figure>
                                    <div class="entry-header">
                                        <h2 class="entry-title">
                                            <a href="./pages/about.html">{{$model->details}}</a>
                                        </h2>
                                    </div>
                                    <!-- .entry-header -->
                                    <div class="entry-content">
                                        <p>{{$model->name}}</p>
                                    </div>
                                    <!-- .entry-content -->
                                    <div class="entry-footer">
                                        <a href="./pages/about.html" class="button">Read More</a>
                                    </div>
                                </article>
                                <!-- .blog-post -->

                            </div>
                            @endforeach
                        </div>
                        <br> </div>
                </section>
                <section id="tracking" class="section tracking-section is-clearfix">
                    <div class="container">
                        <p class="heading-title-top has-text-centered">tracking</p>
                        <h1 class="heading-title style-3">track your shipment</h1>
                        <div class="columns is-mobile is-centered">
                            <div class="column is-10" data-aos="fade-up">
                                <div class="subscribe-form style-1">
                                    <form>
                                        <div class="field has-addons has-addons-centered is-grouped">
                                            <div class="control">
                                                <input class="input" type="text" placeholder="Type your tracking number"> </div>
                                            <div class="control">
                                                <a href="{{url('show_tracking')}}" class="button">
                                                    <span>Track it</span>
                                                    <span class="icon is-small">
                                <i class="icon-target"></i>
                              </span>
                                                </a>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <p class="help"> separate multiple tracking numbers with a space or comma.
                                    <a href="#">Advanced Tracking</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </section>
                <section id="services" class="section services-section has-background-primary-light is-clearfix">
                    <div class="container">
                        <div class="columns is-variable is-multiline is-4">
                            <div class="column is-5-desktop is-12-tablet">
                                <p class="heading-title-top">logistics services</p>
                                <h1 class="heading-title style-3 has-text-left">our special services</h1>
                            </div>
                            <div class="column is-7-desktop is-12-tablet">
                                <p class="heading-title-bottom">Lorem ipsum dolor sit amet, consectetur adipiscing elit Nulla chronocrator accumsan, metus ultrices eleifend gravi.</p>
                            </div>
                        </div>
                        <br>
                        <div class="columns is-variable is-4 is-multiline boxes-style-2">
                            <div class="column is-4" data-aos="fade">
                                <div class="box-item">
                                    <a href="./pages/services.html">
                                        <img alt="Joo - Niche Multi-Purpose HTML Template" src="./assets/images/icons/4.png"> </a>
                                    <h3>
                                        <a href="./pages/services.html">land transport</a>
                                    </h3>
                                    <p>Climatology chronocrator puppysnatch leacher unrived tomentum.</p>
                                    <a href="./pages/services.html" class="button"></a>
                                </div>
                                <!-- .box-item -->
                            </div>
                            <div class="column is-4" data-aos="fade">
                                <div class="box-item">
                                    <a href="./pages/services.html">
                                        <img alt="Joo - Niche Multi-Purpose HTML Template" src="./assets/images/icons/3.png"> </a>
                                    <h3>
                                        <a href="./pages/services.html">ocean freight</a>
                                    </h3>
                                    <p>Climatology chronocrator puppysnatch leacher unrived tomentum.</p>
                                    <a href="./pages/services.html" class="button"></a>
                                </div>
                                <!-- .box-item -->
                            </div>
                            <div class="column is-4" data-aos="fade">
                                <div class="box-item">
                                    <a href="./pages/services.html">
                                        <img alt="Joo - Niche Multi-Purpose HTML Template" src="./assets/images/icons/1.png"> </a>
                                    <h3>
                                        <a href="./pages/services.html">warehousing</a>
                                    </h3>
                                    <p>Climatology chronocrator puppysnatch leacher unrived tomentum.</p>
                                    <a href="./pages/services.html" class="button"></a>
                                </div>
                                <!-- .box-item -->
                            </div>
                            <div class="column is-4" data-aos="fade">
                                <div class="box-item">
                                    <a href="./pages/services.html">
                                        <img alt="Joo - Niche Multi-Purpose HTML Template" src="./assets/images/icons/3.png"> </a>
                                    <h3>
                                        <a href="./pages/services.html">ocean freight</a>
                                    </h3>
                                    <p>Climatology chronocrator puppysnatch leacher unrived tomentum.</p>
                                    <a href="./pages/services.html" class="button"></a>
                                </div>
                                <!-- .box-item -->
                            </div>
                            <div class="column is-4" data-aos="fade">
                                <div class="box-item">
                                    <a href="./pages/services.html">
                                        <img alt="Joo - Niche Multi-Purpose HTML Template" src="./assets/images/icons/4.png"> </a>
                                    <h3>
                                        <a href="./pages/services.html">land transport</a>
                                    </h3>
                                    <p>Climatology chronocrator puppysnatch leacher unrived tomentum.</p>
                                    <a href="./pages/services.html" class="button"></a>
                                </div>
                                <!-- .box-item -->
                            </div>
                            <div class="column is-4" data-aos="fade">
                                <div class="box-item">
                                    <a href="./pages/services.html">
                                        <img alt="Joo - Niche Multi-Purpose HTML Template" src="./assets/images/icons/2.png"> </a>
                                    <h3>
                                        <a href="./pages/services.html">air freight</a>
                                    </h3>
                                    <p>Climatology chronocrator puppysnatch leacher unrived tomentum.</p>
                                    <a href="./pages/services.html" class="button"></a>
                                </div>
                                <!-- .box-item -->
                            </div>
                        </div>
                    </div>
                </section>

                <section class="hero fun-facts is-clearfix">
                    <div class="hero-body">
                        <h2 class="display-none">funfacts</h2>
                        <nav class="level counterup style-5">
                            <div class="level-item has-text-centered">
                                <div>
                                    <p class="title counter">340</p>
                                    <p class="heading">years of experience</p>
                                </div>
                            </div>
                            <div class="level-item has-text-centered">
                                <div>
                                    <p class="title counter">120</p>
                                    <p class="heading">branches over world</p>
                                </div>
                            </div>
                            <div class="level-item has-text-centered">
                                <div>
                                    <p class="title counter">230</p>
                                    <p class="heading">tonnes transported</p>
                                </div>
                            </div>
                            <div class="level-item has-text-centered">
                                <div>
                                    <p class="title counter">110</p>
                                    <p class="heading">countries covered</p>
                                </div>
                            </div>
                        </nav>
                    </div>
                </section>
                <section id="tracking-steps" class="section tracking-steps-section is-clearfix">
                    <div class="container">
                        <p class="heading-title-top has-text-centered">tracking</p>
                        <h1 class="heading-title style-3">how we work</h1>
                        <br>
                        <br>
                        <div class="steps" data-aos="fade-right">
                            <div class="step-item" data-step-id="0">
                                <div class="step-marker"> 1 </div>
                                <div class="step-details">
                                    <p class="step-title">lorem ipsum dolor</p>
                                    <p>Lorem ipsum dolor sit amet nulla varius lectus.</p>
                                </div>
                            </div>
                            <div class="step-item active" data-step-id="1">
                                <div class="step-marker">2</div>
                                <div class="step-details">
                                    <p class="step-title">lorem ipsum dolor</p>
                                    <p>Lorem ipsum dolor sit amet nulla varius lectus.</p>
                                </div>
                            </div>
                            <div class="step-item" data-step-id="2">
                                <div class="step-marker">3</div>
                                <div class="step-details">
                                    <p class="step-title">lorem ipsum dolor</p>
                                    <p>Lorem ipsum dolor sit amet nulla varius lectus.</p>
                                </div>
                            </div>
                            <div class="step-item" data-step-id="3">
                                <div class="step-marker"> 4 </div>
                                <div class="step-details">
                                    <p class="step-title">lorem ipsum dolor</p>
                                    <p>Lorem ipsum dolor sit amet nulla varius lectus.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section id="news" class="section news-section is-clearfix">
                    <div class="container">

                        <div class="blog-list style-2 columns is-variable is-4 is-multiline">
                            @isset($news)
                            <div class="column is-4" data-aos="fade">
                                <div class="blog-post-heading">
                                    <p class="heading-title-top">latest news</p>
                                    <h1 class="heading-title style-3 has-text-left"> {{$news->title}}
                                        <span class="has-text-primary"></span>
                                    </h1>
                                    <p>{{$news->content}}</p>
                                    <a href="./blog/index.html" class="button">Our blog
                                        <span class="icon">
                          <i class="ion-ios-arrow-round-forward"></i>
                        </span>
                                    </a>
                                </div>
                                <!-- .blog-post -->
                            </div>
                            @endisset
                            @isset($convention)
                            <div class="column is-4" data-aos="fade">
                                <article class="blog-post">
                                    <figure class="post-image">
                                        <a href="./blog/single.html">
                                            <img alt="Joo - Niche Multi-Purpose HTML Template" src="/storage/{{$convention->photo}}"> </a>
                                    </figure>
                                    <div class="entry-header">
                                        <div class="post-meta">
                                            <ul>
                                                <li>
                                                    <a href="#">
                                                        <span>{{$convention->created_at->diffForhumans()}}</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <h2 class="entry-title">
                                            <a href="./blog/single.html">{{$convention->title}}</a>
                                        </h2>
                                        <h4>
                                            <a href="./blog/single.html">{{$convention->content}}</a>
                                        </h4>
                                    </div>
                                    <div class="entry-footer">
                                        <a href="./blog/single.html" class="button">Read More</a>
                                    </div>
                                </article>
                                <!-- .blog-post -->
                            </div>
                            @endisset
                            <div class="column is-4" data-aos="fade">
                                <article class="blog-post">
                                    <figure class="post-image">
                                        <a href="./blog/single.html">
                                            <img alt="Joo - Niche Multi-Purpose HTML Template" src="./assets/images/blog/5.png"> </a>
                                    </figure>
                                    <div class="entry-header">
                                        <div class="post-meta">
                                            <ul>
                                                <li>
                                                    <a href="#">
                                                        <span>APRIL 5, 2018</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <h2 class="entry-title">
                                            <a href="./blog/single.html">Self Motivation How To Keep Land Transport</a>
                                        </h2>
                                    </div>
                                    <div class="entry-footer">
                                        <a href="./blog/single.html" class="button">Read More</a>
                                    </div>
                                </article>
                                <!-- .blog-post -->
                            </div>
                        </div>
                    </div>
                </section>
                <section id="testimonials" class="section testimonials-section has-background-primary-light is-clearfix">
                    <div class="container">
                        <p class="heading-title-top has-text-centered">{{ucwords(trans('front/trans_testimonial.testimonial'))}}</p>
                        <h1 class="heading-title style-3">{{ucwords(trans('front/trans_testimonial.clients feedback'))}}</h1>
                        <a href="{{route('endUser.testimonial')}}" class="has-text-centered"><h3 class="text-center">{{ucwords(trans('front/trans_testimonial.Add feedback'))}}</h3></a>
                        <div class="testimonials  owl-carousel dots carousel-items-3 columns-style-1 ">
                            @isset($testimonials)
                                @foreach($testimonials as $item)
                            <div class="testimonials-item">
                                <p>{{$item['description']}}</p>
                                <img alt="Joo - Niche Multi-Purpose HTML Template" src="{{URL::asset('assetsEndUser/assets/images/testimonials/1.png')}}">
                                <h3>{{$item['name']}}
                                </h3>
                            </div>
                                @endforeach
                            @endisset

                        </div>
                    </div>
                </section>
                <section id="quote" class="section quote-section padding-bottom-none is-clearfix">
                    <div class="container">
                        <div class="columns is-variable is-2 is-multiline">
                            <div class="column is-6-desktop is-12-tablet" data-aos="fade">
                                <h1 class="heading-title style-3 has-text-left"> {{ucwords(trans('front/trans_price-order.request a'))}}
                                    <span class="has-text-primary">{{ucwords(trans('front/trans_price-order.quote'))}}</span>
                                </h1>
                                <p class="heading-title-bottom">Lorem ipsum dolor sit amet, consectetur adipiscing elit Nulla chronocrator accumsan, metus ultrices eleifend gravi.</p>
                                <!-- successful form message -->
                                <div class="overhang-message-content is-hidden success">
                      <span class="icon">
                        <i class="ion-md-notifications"></i>
                      </span> Thank You! Your message was sent successfully. </div>
                                <!-- error form message -->
                                <div class="overhang-message-content is-hidden error">
                      <span class="icon">
                        <i class="ion-md-notifications"></i>
                      </span> Oops! Something went wrong, we couldn't send your message. </div>
                                <!-- ajax contact form -->
                                <form accept-charset="UTF-8" action="{{route('admin.priceOrder.store')}}" method="POST">
                                    @csrf
                                    <div class="field is-horizontal">
                                        <div class="field-body">
                                            <div class="field">
                                                <div class="control is-expanded">
                                                    <input class="input" type="text" name="name" placeholder="{{ucwords(trans('front/trans_price-order.Name'))}}" required value="{{old('name')}}">
                                                    @error('name')
                                                    <div class="alert alert-danger my-2" role="alert">{{$message}}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <!-- .field -->
                                            <div class="field">
                                                <div class="control is-expanded">
                                                    <input class="input" type="email" name="email" placeholder="{{ucwords(trans('front/trans_price-order.Email'))}}" required="" value="{{old('email')}}">
                                                    @error('email')
                                                    <div class="alert alert-danger my-2" role="alert">{{$message}}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <!-- .field -->
                                        </div>
                                        <!-- .field-body -->
                                    </div>
                                    <div class="field is-horizontal">
                                        <div class="field-body">
                                            <div class="field">
                                                <div class="control is-expanded">
                                                    <input class="input" type="text" name="address" placeholder="{{ucwords(trans('front/trans_price-order.Address'))}}" required="" value="{{old('address')}}">
                                                    @error('address')
                                                    <div class="alert alert-danger my-2" role="alert">{{$message}}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <!-- .field -->
                                            <div class="field">
                                                <div class="control is-expanded">
                                                    <div class="select">
                                                        <select name="select">
                                                            <option value="air">{{ucwords(trans('front/trans_price-order.Air Freight'))}}</option>
                                                            <option value="land">{{ucwords(trans('front/trans_price-order.Land Transport'))}}</option>
                                                            <option value="sea">{{ucwords(trans('front/trans_price-order.Ocean Freight'))}}</option>
                                                            <option value="storage">{{ucwords(trans('front/trans_price-order.Warehousing'))}}</option>
                                                        </select>
                                                        @error('select')
                                                        <div class="alert alert-danger my-2" role="alert">{{$message}}</div>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <!-- .field -->
                                            </div>
                                            <!-- .field-body -->
                                        </div>
                                    </div>
                                    <div class="field ">
                                        <div class="control is-expanded">
                                            <textarea class="textarea" name="message" placeholder="{{ucwords(trans('front/trans_price-order.Message'))}}" required="">{{old('message')}}</textarea>
                                            @error('message')
                                            <div class="alert alert-danger my-2" role="alert">{{$message}}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="field ">
                                        <div class="control">
                                            <button class="button" type="submit">{{ucwords(trans('front/trans_price-order.request a quote'))}}</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="column is-6-desktop is-12-tablet" data-aos="fade-up" data-aos-delay="600">
                                <br>
                                <br>
                                <br>
                                <br>
                                <img alt="Joo - Niche Multi-Purpose HTML Template" src="{{asset('assetsEndUser/assets/images/global/man.png')}}"> </div>
                        </div>
                    </div>
                </section>
            </div>
            <!-- #content-area-inner -->
        </div>
        <!-- #content-area -->
    </div>
    <!-- #content-main-wrap -->
@endsection
