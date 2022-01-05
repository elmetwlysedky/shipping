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

                    <div class="col-12">
                        <div class="card mb-30">
                            <div class="card-body">
                                <div class="d-sm-flex justify-content-between align-items-center">
                                    <h4 class="font-20">{{ucwords(trans('Dashboard/trans_testimonials.Message'))}}</h4>

                                    <div class="d-flex flex-wrap">
                                        <!-- Date Picker -->
                                        <div class="dashboard-date style--six ml-20 mt-3 mt-sm-0">
                                               <span class="input-group-addon">
                                                  <img src="{{URL::asset('assetsEndUser/assets/img/svg/calender-color.svg')}}" alt="" class="svg">
                                                </span>

                                            <input type="text" id="default-date" value="{{date('D, d-m-Y')}}"/>
                                        </div>
                                        <!-- End Date Picker -->

                                    </div>
                                </div>
                            </div>
                            <div class="table-responsive">
                                <!-- Invoice List Table -->
                                <table class="text-nowrap bg-white dh-table">
                                    <thead>
                                    <tr>
                                        <th>{{ucwords(trans('Dashboard/trans_testimonials.Name'))}} <img src="{{URL::asset('assetsEndUser/assets/img/svg/table-down-arrow.svg')}}" alt="" class="svg"></th>
                                        <th>{{ucwords(trans('Dashboard/trans_testimonials.email'))}} <img src="{{URL::asset('assetsEndUser/assets/img/svg/table-down-arrow.svg')}}" alt="" class="svg"></th>
                                        <th>{{ucwords(trans('Dashboard/trans_testimonials.Message'))}} <img src="{{URL::asset('assetsEndUser/assets/img/svg/table-down-arrow.svg')}}" alt="" class="svg"></th>
                                        <th>{{ucwords(trans('Dashboard/trans_testimonials.Approve'))}} <img src="{{URL::asset('assetsEndUser/assets/img/svg/table-down-arrow.svg')}}" alt="" class="svg"></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>{{$testimonial->name}}</td>
                                        <td>{{$testimonial->email}}</td>
                                        <td>{{$testimonial->description}}</td>
                                        <td>
                                            <form method="post" action="{{route('admin.testimonial.update')}}">
                                                @csrf
                                                @method('PUT')
                                                <input type="hidden" name="testimonial_id" value="{{$testimonial->id}}">
                                                <button type="submit" class="status-btn completed">{{ucwords(trans('Dashboard/trans_testimonials.Approve'))}}</button>
                                            </form>

                                        </td>
                                    </tr>

                                    </tbody>
                                </table>
                                <!-- End Invoice List Table -->
                            </div>
                        </div>
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
