
@extends('Dashboard.Layouts.master')
@section('css')
    @livewireStyles
    @toastr_css
    <style>
        .dataTables_filter{
            margin-bottom: 10px;
            padding-bottom: 10px;
            float: right;
        }
    </style>

@endsection

@section('content')
    <div class="main-content">
        <div class="container-fluid">
            <div class="row">

                <div class="col-xl-12">
                    <!-- Card -->
                    <div class="card">

                        <div class="card-body">
                            <div class="title-content mb-4 mb-sm-0">
                                <h4 class="mb-4">{{trans('Dashboard\trans_ship.shipment_process')}}</h4>
                                <p>{{trans('Dashboard\trans_ship.add_shipment')}}<br><br><br>
                            </div>
                            <livewire:shipping />

                        </div>

                    </div>

                </div>
                <!-- End Card -->
            </div>
        </div>
    </div>
    </div>

    <!-- End Main Content -->
@endsection
@section('js')
    @livewireScripts
    @toastr_js


    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.js"></script>

    <script  type="text/javascript">
        $(document).ready( function () {
            $('#example').DataTable();
        } );

    </script>

@endsection
