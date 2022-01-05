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
                            <div class="table-responsive">
                            @include('partials.session')
                            <!-- Invoice List Table -->
                                <table class="text-nowrap invoice-list">
                                    <thead>
                                    <tr>
                                        <th>
                                            <!-- Custom Checkbox -->
                                            <label class="custom-checkbox">
                                                <input type="checkbox">
                                                <span class="checkmark"></span>
                                            </label>
                                            <!-- End Custom Checkbox -->
                                            {{ucfirst(trans('Dashboard/trans_partner.Name'))}} <img src="assets/img/svg/table-up-arrow.svg" alt="" class="svg">
                                        </th>
                                        <th>{{ucfirst(trans('Dashboard/trans_partner.logo'))}} <img src="assets/img/svg/table-down-arrow.svg" alt="" class="svg"></th>
                                        <th>{{ucfirst(trans('Dashboard/trans_partner.link'))}}</th>
                                        <th>{{ucfirst(trans('Dashboard/trans_partner.actions'))}}</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @isset($partners)
                                        @if(count($partners) > 0)
                                            @foreach($partners as $value)
                                                <tr>
                                                    <td>
                                                        <!-- Custom Checkbox -->
                                                        <label class="custom-checkbox">
                                                            <input type="checkbox">
                                                            <span class="checkmark"></span>
                                                        </label>
                                                        <!-- End Custom Checkbox -->
                                                        {{$value['name']}}
                                                    </td>
                                                    <td>
                                                        <div class="member">
                                                            <a href="#"><img src="{{asset('images/partners/'.$value['image'])}}" alt=""></a>
                                                        </div>
                                                    </td>
                                                    <td>{{$value['link']}}</td>

                                                    <td>
                                                        <!-- Dropdown Button -->
                                                        <div class="dropdown-button">
                                                            <a href="#" class="d-flex align-items-center justify-content-end" data-toggle="dropdown">
                                                                <div class="menu-icon mr-0">
                                                                    <span></span>
                                                                    <span></span>
                                                                    <span></span>
                                                                </div>
                                                            </a>
                                                            <div class="dropdown-menu">
                                                                <a href="{{route('admin.partner.edit',$value->id)}}">{{ucfirst(trans('Dashboard/trans_partner.edit'))}}</a>
                                                                <form method="post" action="{{route('admin.partner.destroy')}}">
                                                                    @csrf
                                                                    @method('DELETE')
                                                                    <input type="hidden" name="partner_id" value="{{$value->id}}">
                                                                    <a href="#"><button type="submit" class="btn-dark">{{ucfirst(trans('Dashboard/trans_partner.delete'))}}</button></a>
                                                                </form>

                                                            </div>
                                                        </div>
                                                        <!-- End Dropdown Button -->
                                                    </td>
                                                </tr>
                                            @endforeach
                                        @endif
                                    @endisset


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
