
<header class="header white-bg fixed-top d-flex align-content-center flex-wrap">
    <!-- Logo -->
    <div class="logo">
        <a href="index.blade.php" class="default-logo"><img src="{{URL::asset('Dashboard/img/logo.png')}}" alt=""></a>
        <a href="index.blade.php" class="mobile-logo"><img src="{{URL::asset('Dashboard/img/mobile-logo.png')}}"alt=""></a>
    </div>
    <!-- End Logo -->

    <!-- Main Header -->
    <div class="main-header">
        <div class="container-fluid">
            <div class="row justify-content-between">
                <div class="col-3 col-lg-1 col-xl-4">
                    <!-- Header Left -->
                    <div class="main-header-left h-100 d-flex align-items-center">
                        <!-- Main Header User -->
                        <div class="main-header-user">
                            <a href="#" class="d-flex align-items-center" data-toggle="dropdown">
                                <div class="menu-icon">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </div>

                                <div class="user-profile d-xl-flex align-items-center d-none">
                                    <!-- User Avatar -->
                                    <div class="user-avatar">
                                        <img src="{{URL::asset('Dashboard/img/avatar/user.png')}}" alt="">
                                    </div>
                                    <!-- End User Avatar -->

                                    <!-- User Info -->
                                    <div class="user-info">
                                        <h4 class="user-name"></h4>
                                        <p class="user-email"></p>
                                    </div>
                                    <!-- End User Info -->
                                </div>
                            </a>
                            <div class="dropdown-menu">
                                <a href="#">My Profile</a>
                                <a href="#">task</a>
                                <a href="#">Settings</a>

                                @if(Auth::guard('admin')->check())
                                    <form method="POST" action="{{ route('logout.admin') }}">
                                        @csrf
                                        <a href="route('logout.admin')" onclick="event.preventDefault();
                                        this.closest('form').submit();">{{trans('Dashboard\trans_main_header.Log_Out')}}</a>
                                    </form>

                                        @elseif(auth::guard('web')->check())
                                            <form method="POST" action="{{ route('logout') }}">
                                                @csrf
                                                <a href="route('logout')" onclick="event.preventDefault();
                                        this.closest('form').submit();">{{trans('Dashboard\trans_main_header.Log_Out')}}</a>
                                            </form>

                                                @elseif(Auth::guard('driver')->check())
                                                    <form method="POST" action="{{ route('logout.driver') }}">
                                                        @csrf
                                                        <a href="route('logout.driver')" onclick="event.preventDefault();

                                                        this.closest('form').submit();">{{trans('Dashboard\trans_main_header.Log_Out')}}</a>

                                                    </form>
                                                        @elseif(Auth::guard('scanner')->check())
                                                            <form method="POST" action="{{ route('logout.scanner') }}">
                                                                @csrf
                                                                <a href="route('logout.scanner')" onclick="event.preventDefault();
                                        this.closest('form').submit();">{{trans('Dashboard\trans_main_header.Log_Out')}}</a>
                                                            </form>

                                                                @elseif(Auth::guard('warehousing_officer')->check())
                                                                    <form method="POST" action="{{ route('logout.warehouse') }}">
                                                                        @csrf
                                                                        <a href="route('logout.warehouse')" onclick="event.preventDefault();
                                        this.closest('form').submit();">{{trans('Dashboard\trans_main_header.Log_Out')}}</a>
                                                @endif
                                </form>

                            </div>
                        </div>
                        <!-- End Main Header User -->

                        <!-- Main Header Menu -->
                        <div class="main-header-menu d-block d-lg-none">
                            <div class="header-toogle-menu">
                                <!-- <i class="icofont-navigation-menu"></i> -->
                                <img src="Dashboard/img/menu.png" alt="">
                            </div>
                        </div>
                        <!-- End Main Header Menu -->
                    </div>
                    <!-- End Header Left -->
                </div>
                <div class="col-9 col-lg-11 col-xl-8">
                    <!-- Header Right -->
                    <div class="main-header-right d-flex justify-content-end">
                        <ul class="nav">
                            <li class="ml-0">
                            <!-- Main Header Language -->
                            <div class="main-header-language">
                            <a href="#" data-toggle="dropdown">
                            <img src="{{asset('Dashboard/img/svg/globe-icon.svg')}}" alt="">
                            </a>
                                <!--- Start DropMenu Language --->
                                <div class="dropdown-menu style--three">
                                    @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)

                                        <a rel="alternate" hreflang="{{ $localeCode }}"
                                           href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                                            @if($properties['native']=="English")
                                                <span><img src="{{asset('Dashboard/img/flag/f1.png')}}" alt=""></span>
                                                <strong>{{trans('Dashboard\trans_main_header.English')}}</strong>
                                            @elseif($properties['native']=="العربية")
                                                <span><img src="{{asset('Dashboard/img/flag/f2.png')}}" alt=""></span>
                                                <strong>{{trans('Dashboard\trans_main_header.Arabic')}}</strong>
                                            @endif
                                        </a>
                                    @endforeach
                                </div>
                                <!--- End DropMenu Language --->


                            </div>
                            <!-- End Main Header Language -->
                            </li>
                            {{--<li class="ml-0 d-none d-lg-flex">--}}
                                {{--<!-- Main Header Print -->--}}
                                {{--<div class="main-header-print">--}}
                                    {{--<a href="#">--}}
                                        {{--<img src="{{URL::asset('Dashboard/img/svg/print-icon.svg')}}" alt="">--}}
                                    {{--</a>--}}
                                {{--</div>--}}
                                {{--<!-- End Main Header Print -->--}}
                            {{--</li>--}}
                            <li class="d-none d-lg-flex">
                                <!-- Main Header Time -->
                                <div class="main-header-date-time text-right">
                                    <h3 class="time">
                                        <span id="hours">21</span>
                                        <span id="point">:</span>
                                        <span id="min">06</span>
                                    </h3>
                                    <span class="date"><span id="date">Tue, 12 October 2019</span></span>
                                </div>
                                <!-- End Main Header Time -->
                            </li>
                            <li class="d-none d-lg-flex">
                                <!-- Main Header Button -->
                                {{--<div class="main-header-btn ml-md-1">--}}
                                    {{--<a href="#" class="btn">Pending Tasks</a>--}}
                                {{--</div>--}}
                                <!-- End Main Header Button -->
                            </li>
                            <li class="order-2 order-sm-0">
                                <!-- Main Header Search -->
                                <div class="main-header-search">
                                    <form action="#" class="search-form">
                                        <div class="theme-input-group header-search">
                                            <input type="text" class="theme-input-style" placeholder="Search Here">

                                            <button type="submit"><img src="{{URL::asset('Dashboard/img/svg/search-icon.svg')}}" alt=""
                                                                       class="svg"></button>
                                        </div>
                                    </form>
                                </div>
                                <!-- End Main Header Search -->




                            </li>
                            <li>

                                @if(auth()->guard('admin')->user())
                                <!-- Main Header Messages Contact-->
                                <div class="main-header-message">
                                    <a href="#" class="header-icon notification-icon" data-toggle="dropdown">

                                        <span class="count" data-bg-img="{{URL::asset('Dashboard/img/count-bg.png')}}">

                              {{auth()->guard('admin')->user()->unreadNotifications->where('type','App\Notifications\Add_contact')->count()}}

                                        </span>

                                        <img src="{{URL::asset('Dashboard/img/svg/message-icon.svg')}}" alt="" class="svg">
                                    </a>
                                    <div class="dropdown-menu">
                                        <!-- Dropdown Header -->
                                        <div class="dropdown-header d-flex align-items-center justify-content-between">
                                            <h5>
                                                {{auth()->guard('admin')->user()->unreadNotifications->where('type','App\Notifications\Add_contact')->count()}} {{trans('Dashboard\notification_massage.Unread_messages')}}</h5>
                                            <a href="{{route('mark_read_contact')}}" class="text-mute d-inline-block">{{trans('Dashboard\notification_massage.Clear_all')}}</a>
                                        </div>
                                        <!-- End Dropdown Header -->

                                        @foreach(auth()->guard('admin')->user()->unreadNotifications as $notification)
                                       @isset($notification->data['id_contact'])
                                        <div class="dropdown-body">
                                            <!-- Item Single -->

                                            <a href="{{route('contact.show',$notification->data['id_contact'])}}" class="item-single d-flex media align-items-center">

                                                <div class="content media-body">
                                                    <div class="d-flex align-items-center mb-2">
                                                        <h6 class="name">{{ $notification->data['name_contact'] }}</h6>
                                                        <p class="time">{{ $notification->created_at->diffForhumans() }}</p>
                                                    </div>
                                                    <p class="main-text">{{ $notification->data['title_contact'] }}</p>
                                                </div>
                                            </a>

                                            <!-- End Item Single -->
                                        </div>
                                        @endisset
                                    @endforeach



                                        <!-- End Dropdown Body -->
                                    </div>
                                </div>


                                @endif
                                <!-- End Main Header Messages -->
                            </li>
                            <li>

                                <!-- Main Header Notification Shipments-->
                            @if(auth()->guard('admin')->user())

                                    <div class="main-header-notification">
                                        <a href="#" class="header-icon notification-icon" data-toggle="dropdown">

                                            <span class="count" data-bg-img="{{URL::asset('Dashboard/img/count-bg.png')}}">
                                                {{auth()->guard('admin')->user()->unreadNotifications->where('type','App\Notifications\Add_shipment')->count()}}
                                            </span>

                                            <img src="{{URL::asset('Dashboard/img/svg/notification-icon.svg')}}" alt="" class="svg">
                                        </a>
                                        <div class="dropdown-menu style--two">
                                            <!-- Dropdown Header -->
                                            <div class="dropdown-header d-flex align-items-center justify-content-between">
                                                <h5>{{auth()->guard('admin')->user()->unreadNotifications->where('type','App\Notifications\Add_shipment')->count()}} {{trans('Dashboard\notification_massage.Unread_messages')}}</h5>
                                                <a href="{{route('mark_read_shipments')}}" class="text-mute d-inline-block">{{trans('Dashboard\notification_massage.Clear_all')}}</a>
                                            </div>
                                            <!-- End Dropdown Header -->

                                        @foreach(auth()->guard('admin')->user()->unreadNotifications as $notification)
                                            <!-- Dropdown Body -->
                                                @isset($notification->data['title_shipment'])
                                            <div class="dropdown-body">
                                                <!-- Item Single -->
                                                <a href="{{route('show_shipment', $notification->data['id_shipment'] )}}" class="item-single d-flex align-items-center">
                                                    <div class="content">
                                                        <div class="mb-2">
                                                            <p class="time">{{ $notification->created_at->diffForhumans() }}</p>
                                                        </div>
                                                        <p class="main-text">{{ $notification->data['title_shipment'] }}</p>
                                                    </div>
                                                </a>
                                                <!-- End Item Single -->

                                            </div>
                                            @endisset
                                        @endforeach


                                            <!-- End Dropdown Body -->
                                        </div>
                                    </div>

                            @endif
                                <!-- End Main Header Notification -->
                            </li>



                            <li>

                                <!-- Main Header Notification Shipments-Scanner-->
                                @if(auth()->guard('scanner')->user())

                                    <div class="main-header-notification">
                                        <a href="#" class="header-icon notification-icon" data-toggle="dropdown">

                                            <span class="count" data-bg-img="{{URL::asset('Dashboard/img/count-bg.png')}}">
                                                {{auth()->guard('scanner')->user()->unreadNotifications->where('type','App\Notifications\send_scanner')->count()}}
                                            </span>

                                            <img src="{{URL::asset('Dashboard/img/svg/notification-icon.svg')}}" alt="" class="svg">
                                        </a>
                                        <div class="dropdown-menu style--two">
                                            <!-- Dropdown Header -->
                                            <div class="dropdown-header d-flex align-items-center justify-content-between">
                                                <h5>{{auth()->guard('scanner')->user()->unreadNotifications->where('type','App\Notifications\send_scanner')->count()}} {{trans('Dashboard\notification_massage.Unread_messages')}}</h5>
                                                <a href="{{route('mark_read_scanner')}}" class="text-mute d-inline-block">{{trans('Dashboard\notification_massage.Clear_all')}}</a>
                                            </div>
                                            <!-- End Dropdown Header -->

                                        @foreach(auth()->guard('scanner')->user()->unreadNotifications as $notification)
                                            <!-- Dropdown Body -->
                                                @isset($notification->data['title_track'])
                                                    <div class="dropdown-body">
                                                        <!-- Item Single -->
                                                        <a href="" class="item-single d-flex align-items-center">
                                                            <div class="content">
                                                                <div class="mb-2">
                                                                    <p class="time">{{ $notification->created_at->diffForhumans() }}</p>
                                                                </div>
                                                                <p class="main-text">{{ $notification->data['title_track'] }}</p>
                                                            </div>
                                                        </a>
                                                        <!-- End Item Single -->

                                                    </div>
                                            @endisset
                                        @endforeach


                                        <!-- End Dropdown Body -->
                                        </div>
                                    </div>

                            @endif
                            <!-- End Main Header Notification -->
                            </li>













                            <li>

                                <!-- Main Header Notification Price-order -->
                                @if(auth()->guard('admin')->user())

                                    <div class="main-header-notification">
                                        <a href="" class="header-icon notification-icon" data-toggle="dropdown">

                                            <span class="count" data-bg-img="{{URL::asset('Dashboard/img/count-bg.png')}}">
                                                {{auth()->guard('admin')->user()->unreadNotifications->where('type','App\Notifications\Add_OrderPrice')->count()}}
                                            </span>

                                            <img src="{{URL::asset('Dashboard/img/svg/mobile-payment.png')}}" alt="" class="svg">
                                        </a>
                                        <div class="dropdown-menu style--two">
                                            <!-- Dropdown Header -->
                                            <div class="dropdown-header d-flex align-items-center justify-content-between">
                                                <h5>{{auth()->guard('admin')->user()->unreadNotifications->where('type','App\Notifications\Add_OrderPrice')->count()}} {{trans('Dashboard\notification_massage.Unread_messages')}}</h5>
                                                <a href="{{route('mark_read_priceOrder')}}" class="text-mute d-inline-block">{{trans('Dashboard\notification_massage.Clear_all')}}</a>

                                            </div>
                                            <!-- End Dropdown Header -->

                                        @foreach(auth()->guard('admin')->user()->unreadNotifications as $notification)
                                            <!-- Dropdown Body -->
                                                @isset($notification->data['title_priceOrder'])
                                                    <div class="dropdown-body">
                                                        <!-- Item Single -->
                                                        <a href="{{route('admin.priceOrder.show',  $notification->data['id_priceOrder'])}}" class="item-single d-flex align-items-center">
                                                            <div class="content">
                                                                <div class="mb-2">
                                                                    <p class="time">{{ $notification->created_at->diffForhumans() }}</p>
                                                                </div>
                                                                <p class="main-text">{{ $notification->data['title_priceOrder'] }}</p>
                                                            </div>
                                                        </a>
                                                        <!-- End Item Single -->

                                                    </div>
                                            @endisset
                                        @endforeach


                                        <!-- End Dropdown Body -->
                                        </div>
                                    </div>

                            @endif
                            <!-- End Main Header Notification -->
                            </li>
                        </ul>
                    </div>
                    <!-- End Header Right -->
                </div>
            </div>
        </div>
    </div>
    <!-- End Main Header -->
</header>
