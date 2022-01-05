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
                            <h4 class="font-20 mb-30">{{ucwords(trans('Dashboard/trans_partner.partner'))}}</h4>
                        @include('partials.session')
                        <!-- Form -->
                            <form action="{{route('admin.partner.update')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                                @method('PUt')
                                <input type="hidden" name="partner_id" value="{{$partner['id']}}">
                            <!-- Form Row -->
                                <div class="form-row mb-20">
                                    <div class="col-sm-4">
                                        <label class="font-14 bold">{{ucwords(trans('Dashboard/trans_partner.Name En'))}}</label>
                                    </div>
                                    <div class="col-sm-8">
                                        <input type="text" class="theme-input-style" placeholder="{{ucwords(trans('Dashboard/trans_partner.Name En'))}}" name="en_name" value="{{$partner->getTranslation('name', 'en')}}">
                                        @error('en_name')
                                        <div class="alert alert-danger my-2" role="alert">{{$message}}</div>
                                        @enderror
                                    </div>
                                </div>
                                <!-- End Form Row -->

                                <!-- Form Row -->
                                <div class="form-row mb-20">
                                    <div class="col-sm-4">
                                        <label class="font-14 bold">{{ucwords(trans('Dashboard/trans_partner.Name Ar'))}}</label>
                                    </div>
                                    <div class="col-sm-8">
                                        <input type="text" class="theme-input-style" placeholder="{{ucwords(trans('Dashboard/trans_partner.Name Ar'))}}" name="ar_name" value="{{$partner->getTranslation('name', 'ar')}}">
                                        @error('ar_name')
                                        <div class="alert alert-danger my-2" role="alert">{{$message}}</div>
                                        @enderror
                                    </div>
                                </div>
                                <!-- End Form Row -->

                                <!-- Form Row -->
                                <div class="form-row mb-20">
                                    <div class="col-sm-4">
                                        <label class="font-14 bold">{{ucwords(trans('Dashboard/trans_partner.link'))}}</label>
                                    </div>
                                    <div class="col-sm-8">
                                        <input type="url" class="theme-input-style" placeholder="{{ucwords(trans('Dashboard/trans_partner.link'))}}" name="link" value="{{$partner['link']}}">
                                        @error('link')
                                        <div class="alert alert-danger my-2" role="alert">{{$message}}</div>
                                        @enderror
                                    </div>
                                </div>
                                <!-- End Form Row -->

                                <!-- Form Row -->
                                <div class="form-row mb-20">
                                    <div class="col-sm-4">
                                        <label class="font-14 bold">{{ucwords(trans('Dashboard/trans_partner.upload'))}}</label>
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
                                <div class="form-row">
                                    <div class="col-12 text-right">
                                        <button type="submit" class="btn long">{{ucwords(trans('Dashboard/trans_partner.update'))}}</button>
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
