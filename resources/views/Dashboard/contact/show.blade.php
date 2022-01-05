
<!DOCTYPE html>
<html lang="zxx">


<head>
    <!-- Page Title -->
    <title>messages</title>

    <!-- Meta Data -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="keywords" content="">




    @include('Dashboard.Layouts.head')
    <link rel="stylesheet" href="/dashboard/fonts/elegant_icons/elegant-icons.css">
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

        <div class="main-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card mb-30">
                            <div class="card-body">
                                <div class="d-sm-flex justify-content-between align-items-center">
                                    <h4 class="font-20"><td>{{$contact->name}}</h4>

                                    <div class="d-flex flex-wrap">
                                        <!-- Date Picker -->
                                        <div class="dashboard-date style--six ml-20 mt-3 mt-sm-0">
                                   <span class="input-group-addon">
                                      <img src="../../assets/img/svg/calender-color.svg" alt="" class="svg">
                                    </span>

                                            <input type="text" id="default-date" value="28 October 2019"/>
                                        </div>
                                        <!-- End Date Picker -->


                                        <!-- Dropdown Button -->
                                        <div class="dropdown-button mt-3 mt-sm-0">
                                            <button type="button" class="btn style--two orange" data-toggle="dropdown">Download <i class="icofont-simple-down"></i></button>

                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="#">Print</a>
                                                <a class="dropdown-item" href="#">EXL</a>
                                                <a class="dropdown-item" href="#">PDF</a>
                                            </div>
                                        </div>
                                        <!-- End Dropdown Button -->
                                    </div>
                                </div>
                            </div>






<!-- Main Mail -->
<div class="main-mail">
    <div class="d-flex flex-column flex-sm-row border-bottom pb-3">
        <div class="avatar mb-2 mb-sm-0">
            <img src="/Dashboard/img/avatar/m5.png" alt="">
        </div>
        <div class="content">
            <div class="d-flex justify-content-sm-between align-items-sm-center flex-column flex-sm-row">
                <div class="mb-2 mb-sm-0 mr-sm-2">
                    <h4 class="name mt-1 mb-2">{{$contact->name}} <span class="font-14 c4 ml-2">{{$contact->email}}</span></h4>

                    <div class="font-14">

                        <span class="ml-3 c4">at <span class="bold text_color"><td>{{$contact->created_at->diffForhumans()}}</span></span>

                    </div>
                </div>

                <div class="mail-right d-flex align-items-center ml-0">


                    <!-- Replay Mail -->
                    <div class="replay p-0 bg-transparent">
                        <a href="#"><img src="/Dashboard/img/svg/reply.svg" alt="" class="svg"></a>
                    </div>
                    <!-- End Replay Mail -->

                    <!-- Forward Mail -->
                    <div class="forward ml-1 p-0 bg-transparent">
                        <a href="#"><img src="/Dashboard/img/svg/forward.svg" alt="" class="svg"></a>
                    </div>
                    <!-- End Forward Mail -->

                    <!-- Dropdown Button -->
                    <div class="dropdown-button m-0">
                        <a href="#" class="d-flex align-items-center" data-toggle="dropdown">
                            <div class="menu-icon style--two w-14 mr-0">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                        </a>
                        <div class="dropdown-menu">
                            <a href="#">Daily</a>
                            <a href="#">Sort By</a>
                            <a href="#">Monthly</a>
                        </div>
                    </div>
                    <!-- End Dropdown Button -->
                </div>
            </div>

            <div class="mail-body mt-3 mt-sm-2 pl-0 pl-sm-4">
                <td>{{$contact->message}}
            </div>
        </div>
    </div>





</div>
<!-- End Main Mail -->
@include('Dashboard.Layouts.footer')
<!-- End Footer -->
</div>
<!-- End wrapper -->

@include('Dashboard.Layouts.footerjs')
</body>

</html>
