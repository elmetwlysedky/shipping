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
                            <div class="card-body pt-30">
                                <h4 class="font-20 ">{{ucwords(trans('Dashboard/trans_price_order.View ALl Messages'))}}</h4>
                            </div>
                            <div class="table-responsive">
                                @include('partials.session')
                                <!-- Invoice List Table -->
                                <table class="text-nowrap table-bordered dh-table">
                                    <thead>
                                    <tr>
                                        <th>{{ucwords(trans('Dashboard/trans_price_order.Name'))}}</th>
                                        <th>{{ucwords(trans('Dashboard/trans_price_order.email'))}}</th>
                                        <th>{{ucwords(trans('Dashboard/trans_price_order.status'))}}</th>
                                        <th>{{ucwords(trans('Dashboard/trans_price_order.view'))}}</th>
                                        <th>{{ucwords(trans('Dashboard/trans_price_order.actions'))}}</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @isset($messages)
                                        @if(count($messages) > 0)
                                            @foreach($messages as $message)
                                                <tr>
                                                    <td>{{$message->name}}</td>
                                                    <td>{{$message->email}}</td>
                                                    <td class="text-center">
                                                        @if($message->is_read == 0)
                                                            <button type="button" class="status-btn on_hold">{{ucwords(trans('Dashboard/trans_price_order.OnHold'))}}</button>
                                                        @else
                                                            <button type="button" class="status-btn completed">{{ucwords(trans('Dashboard/trans_price_order.Approved'))}}</button>
                                                        @endif
                                                    </td>
                                                    <td><a href="{{route('admin.priceOrder.show', $message->id)}}" class="details-btn">{{ucwords(trans('Dashboard/trans_price_order.View Details'))}} <i class="icofont-arrow-right"></i></a></td>
                                                    <td>
                                                        <form method="post" action="{{route('admin.priceOrder.destroy')}}">
                                                            @csrf
                                                            @method('DELETE')
                                                            <input type="hidden" name="message_id" value="{{$message->id}}">
                                                            <a href="#"><button type="submit" class="status-btn un_paid">{{ucwords(trans('Dashboard/trans_price_order.delete'))}}</button></a>
                                                        </form>
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
