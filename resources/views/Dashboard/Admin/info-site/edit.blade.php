<!DOCTYPE html>
<html lang="zxx">

<head>
    <!-- Page Title -->
    <title>Dashmin - Admin</title>

    <!-- Meta Data -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="keywords" content="">

    @include('Dashboard.Layouts.head')
</head>

<body>

<!-- Offcanval Overlay -->
<div class="offcanvas-overlay"></div>
<!-- Offcanval Overlay -->

<!-- Wrapper -->
<div class="wrapper">

    <!-- Header -->
@include('Dashboard.Layouts.main-header')
<!-- End Header -->

    <!-- Main Wrapper -->
    <div class="main-wrapper">
        <!-- Sidebar -->
    @include('Dashboard.Layouts.main-sidebar')
    <!-- End Sidebar -->

        <!-- Main Content -->
        <div class="main-content">
            <div class="container-fluid">
                <div class="row">

                    <div class="col-lg-6">
                        <!-- Base Horizontal Form -->
                        <div class="form-element py-30 mb-30">
                            <h4 class="font-20 mb-30">{{ucwords(trans('Dashboard/trans_info_site.info site'))}}</h4>
                        @include('partials.session')
                        <!-- Form -->
                            <form action="{{route('admin.info-site.update')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                                <input type="hidden" name="info_id" value="{{$info['id']}}">
                            <!-- Form Row -->
                                <div class="form-row mb-20">
                                    <div class="col-sm-4">
                                        <label class="font-14 bold">{{ucwords(trans('Dashboard/trans_info_site.Title En'))}}</label>
                                    </div>
                                    <div class="col-sm-8">
                                        <input type="text" class="theme-input-style" placeholder="{{ucwords(trans('Dashboard/trans_info_site.Title En'))}}" name="en_title" value="{{$info->getTranslation('title','en')}}">
                                        @error('en_title')
                                        <div class="alert alert-danger my-2" role="alert">{{$message}}</div>
                                        @enderror
                                    </div>
                                </div>
                                <!-- End Form Row -->

                                <!-- Form Row -->
                                <div class="form-row mb-20">
                                    <div class="col-sm-4">
                                        <label class="font-14 bold">{{ucwords(trans('Dashboard/trans_info_site.Title Ar'))}}</label>
                                    </div>
                                    <div class="col-sm-8">
                                        <input type="text" class="theme-input-style" placeholder="{{ucwords(trans('Dashboard/trans_info_site.Title Ar'))}}" name="ar_title" value="{{$info->getTranslation('title','ar')}}">
                                        @error('ar_title')
                                        <div class="alert alert-danger my-2" role="alert">{{$message}}</div>
                                        @enderror
                                    </div>
                                </div>
                                <!-- End Form Row -->

                                <!-- Form Row -->
                                <div class="form-row mb-20">
                                    <div class="col-sm-4">
                                        <label class="font-14 bold">{{ucwords(trans('Dashboard/trans_info_site.email'))}}</label>
                                    </div>
                                    <div class="col-sm-8">
                                        <input type="email" class="theme-input-style" placeholder="{{ucwords(trans('Dashboard/trans_info_site.email'))}}" name="email" value="{{$info['email']}}">
                                        @error('email')
                                        <div class="alert alert-danger my-2" role="alert">{{$message}}</div>
                                        @enderror
                                    </div>
                                </div>
                                <!-- End Form Row -->

                                <!-- Form Row -->
                                <div class="form-row mb-20">
                                    <div class="col-sm-4">
                                        <label class="font-14 bold">{{ucwords(trans('Dashboard/trans_info_site.upload'))}}</label>
                                    </div>
                                    <div class="col-sm-8">
                                        <input type="file" class="theme-input-style" name="logo">
                                        @error('logo')
                                        <div class="alert alert-danger my-2" role="alert">{{$message}}</div>
                                        @enderror
                                    </div>
                                </div>
                                <!-- End Form Row -->

                                <!-- Form Row -->
                                <div class="form-row mb-20">
                                    <div class="col-sm-4">
                                        <label class="font-14 bold">{{ucwords(trans('Dashboard/trans_info_site.phone'))}}</label>
                                    </div>
                                    <div class="col-sm-8">
                                        <input type="number" class="theme-input-style" placeholder="{{ucwords(trans('Dashboard/trans_info_site.phone'))}}" name="phone" value="{{$info['phone']}}">
                                        @error('phone')
                                        <div class="alert alert-danger my-2" role="alert">{{$message}}</div>
                                        @enderror
                                    </div>
                                </div>
                                <!-- End Form Row -->

                                <!-- Form Row -->
                                <div class="form-row mb-20">
                                    <div class="col-sm-4">
                                        <label class="font-14 bold">{{ucwords(trans('Dashboard/trans_info_site.Day En'))}}</label>
                                    </div>
                                    <div class="col-sm-8">
                                        <input type="text" class="theme-input-style" placeholder="{{ucwords(trans('Dashboard/trans_info_site.Day En'))}}" name="en_day" value="{{$info->getTranslation('day','en')}}">
                                        @error('en_day')
                                        <div class="alert alert-danger my-2" role="alert">{{$message}}</div>
                                        @enderror
                                    </div>
                                </div>
                                <!-- End Form Row -->

                                <!-- Form Row -->
                                <div class="form-row mb-20">
                                    <div class="col-sm-4">
                                        <label class="font-14 bold">{{ucwords(trans('Dashboard/trans_info_site.Day Ar'))}}</label>
                                    </div>
                                    <div class="col-sm-8">
                                        <input type="text" class="theme-input-style" placeholder="{{ucwords(trans('Dashboard/trans_info_site.Day Ar'))}}" name="ar_day" value="{{$info->getTranslation('day','ar')}}">
                                        @error('ar_day')
                                        <div class="alert alert-danger my-2" role="alert">{{$message}}</div>
                                        @enderror
                                    </div>
                                </div>
                                <!-- End Form Row -->

                                <!-- Form Row -->
                                <div class="form-row mb-20">
                                    <div class="col-sm-4">
                                        <label class="font-14 bold">{{ucwords(trans('Dashboard/trans_info_site.open_time'))}}</label>
                                    </div>
                                    <div class="col-sm-8">
                                        <input type="text" class="theme-input-style" placeholder="{{ucwords(trans('Dashboard/trans_info_site.open_time'))}}" name="open_time" value="{{$info['open_time']}}">
                                        @error('open_time')
                                        <div class="alert alert-danger my-2" role="alert">{{$message}}</div>
                                        @enderror
                                    </div>
                                </div>
                                <!-- End Form Row -->

                                <!-- Form Row -->
                                <div class="form-row mb-20">
                                    <div class="col-sm-4">
                                        <label class="font-14 bold">{{ucwords(trans('Dashboard/trans_info_site.close_time'))}}</label>
                                    </div>
                                    <div class="col-sm-8">
                                        <input type="text" class="theme-input-style" placeholder="{{ucwords(trans('Dashboard/trans_info_site.close_time'))}}" name="close_time" value="{{$info['close_time']}}">
                                        @error('close_time')
                                        <div class="alert alert-danger my-2" role="alert">{{$message}}</div>
                                        @enderror
                                    </div>
                                </div>
                                <!-- End Form Row -->

                                <!-- Form Row -->
                                <div class="form-row mb-20">
                                    <div class="col-sm-4">
                                        <label class="font-14 bold">{{ucwords(trans('Dashboard/trans_info_site.facebook_url'))}}</label>
                                    </div>
                                    <div class="col-sm-8">
                                        <input type="text" class="theme-input-style" placeholder="{{ucwords(trans('Dashboard/trans_info_site.facebook_url'))}}" name="facebook_url" value="{{$info['facebook_url']}}">
                                        @error('facebook_url')
                                        <div class="alert alert-danger my-2" role="alert">{{$message}}</div>
                                        @enderror
                                    </div>
                                </div>
                                <!-- End Form Row -->

                                <!-- Form Row -->
                                <div class="form-row mb-20">
                                    <div class="col-sm-4">
                                        <label class="font-14 bold">{{ucwords(trans('Dashboard/trans_info_site.twitter_url'))}}</label>
                                    </div>
                                    <div class="col-sm-8">
                                        <input type="text" class="theme-input-style" placeholder="{{ucwords(trans('Dashboard/trans_info_site.twitter_url'))}}" name="twitter_url" value="{{$info['twitter_url']}}">
                                        @error('twitter_url')
                                        <div class="alert alert-danger my-2" role="alert">{{$message}}</div>
                                        @enderror
                                    </div>

                                </div>
                                <!-- End Form Row -->

                                <!-- Form Row -->
                                <div class="form-row mb-20">
                                    <div class="col-sm-4">
                                        <label class="font-14 bold">{{ucwords(trans('Dashboard/trans_info_site.linkedin_url'))}}</label>
                                    </div>
                                    <div class="col-sm-8">
                                        <input type="text" class="theme-input-style"  name="linkedin_url" placeholder="{{ucwords(trans('Dashboard/trans_info_site.linkedin_url'))}}" value="{{$info['linkedin_url']}}">
                                        @error('linkedin_url')
                                        <div class="alert alert-danger my-2" role="alert">{{$message}}</div>
                                        @enderror
                                    </div>

                                </div>
                                <!-- End Form Row -->



                                <!-- Form Row -->
                                <div class="form-row">
                                    <div class="col-12 text-right">
                                        <button type="submit" class="btn long">{{ucwords(trans('Dashboard/trans_info_site.update'))}}</button>
                                    </div>
                                </div>
                                <!-- End Form Row -->
                            </form>
                            <!-- End Form -->
                        </div>
                        <!-- End Horizontal Form -->
                    </div>

                </div>

            </div>
        </div>
        <!-- End Main Content -->
    </div>
    <!-- End Main Wrapper -->

    <!-- Footer -->
@include('Dashboard.Layouts.footer')
<!-- End Footer -->
</div>
<!-- End wrapper -->
@include('Dashboard.Layouts.footerjs')
</body>

</html>
