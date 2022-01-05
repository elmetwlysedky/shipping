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
                                    <h4 class="font-20">messages Table</h4>

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

        <!-- Card -->
        <div class="card bg-transparent"> </div>



                <div class="contact-header-right d-flex align-items-center justify-content-end mt-3 mt-sm-0">

                    <!-- Delete Mail -->
                    <div class="delete_mail">
                        <a href="#"><img src="/Dashboard/img/svg/delete.svg" alt="" class="svg"></a>
                    </div>
                    <!-- End Delete Mail -->

                    <!-- Pagination -->
                    <div class="pagination style--two d-flex flex-column align-items-center ml-n2">
                        <ul class="list-inline d-inline-flex align-items-center">
                            <li><a href="#">
                                    <img src="/Dashboard/img/svg/left-angle.svg" alt="" class="svg">
                                </a></li>
                            <li><a href="#" class="current">
                                    <img src="/Dashboard/img/svg/right-angle.svg" alt="" class="svg">
                                </a></li>
                        </ul>
                    </div>
                    <!-- End Pagination -->
                </div>
            </div>

            <!-- End Contact Header -->


            <div class="table-responsive">
                <!-- Invoice List Table -->
                <table class="contact-list-table text-nowrap bg-white">
                    <thead>

                        <th>Name <img src="/Dashboard/img/svg/table-down-arrow.svg" alt="" class="svg"></th>
                        <th>Email <img src="/Dashboard/img/svg/table-down-arrow.svg" alt="" class="svg"></th>
                        <th>Phone <img src="/Dashboard/img/svg/table-down-arrow.svg" alt="" class="svg"></th>
                        <th>message <img src="/Dashboard/img/svg/table-down-arrow.svg" alt="" class="svg"></th>
                        <th>sending time <img src="/Dashboard/img/svg/table-down-arrow.svg" alt="" class="svg"></th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>

                    @forelse($contact as $contact)
                    <tr>
                        <td  class="name bold">{{$contact->name}}</td>
                        <td>{{$contact->email}}</td>
                        <td>{{$contact->phone}}</td>
                        <td>{{$contact->message}}</td>
                        <td>{{$contact->created_at->diffForhumans()}}</td>
                        <td class="actions">

                            <span class="contact-edit" data-toggle="modal" data-target="#contactEditModal">
                                <a href="{{route('contact.show',$contact->id)}}">
                                <img src="/Dashboard/img/svg/c-edit.svg" alt="" class="svg">
                                </a>
                            </span>

                            <div class="delete_mail">
                                <form action="{{route('contact.destroy',$contact->id)}}" method="POST"  >
                                    @csrf
                                    @method('DELETE')

                                    <button type="submit"><img src="/Dashboard/img/svg/delete.svg" alt="" class="svg"></button>
                                </form>
                            </div>
                        </td>
                    </tr>
@empty Not Message
@endforelse

                    </tbody>
                </table>
                <!-- End Invoice List Table -->
            </div>
        </div>
        <!-- End Card -->
    </div>
</div>

    <!-- Footer -->
@include('Dashboard.Layouts.footer')
<!-- End Footer -->
</div>
<!-- End wrapper -->
@include('Dashboard.Layouts.footerjs')
</body>

</html>
