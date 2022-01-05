@extends('Dashboard.Layouts.master')
@section('css')
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

                <div class="col-12">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <table id="table_id" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>{{trans('Dashboard\trans_admin_track.shipment_name')}}</th>
                            <th>{{trans('Dashboard\trans_admin_track.tracking_stage_id')}}</th>
                            <th>{{trans('Dashboard\trans_admin_track.customer_id')}}</th>
                            <th>{{trans('Dashboard\trans_admin_track.shipment_num')}}</th>
                            <th>{{trans('Dashboard\trans_admin_track.Processes')}}</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php $i = 0;?>
                        <tr>
                            @foreach($shipments as $shipment)
                                <?php $i++ ;?>
                                <td>{{$i}}</td>
                                <td>{{$shipment->shipment_name}}</td>
                                <td>{{$shipment->tracking_stages->stage_name}}</td>
                                <td>{{$shipment->customers->sender_full_name}}</td>
                                <td>{{$shipment->customers->full_number}}</td>

                                <td>
                                    <button type="button" class="btn btn-warning" data-toggle="modal"
                                            data-target="#Add{{$shipment->id}}"
                                            title=" {{trans('Dashboard\trans_admin_track.Add')}}">{{trans('Dashboard\trans_admin_track.Add')}}</i>
                                    </button>

                                    <div class="modal fade" id="Add{{$shipment->id}}" tabindex="-1" role="dialog"
                                         aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">{{trans('Dashboard\trans_admin_track.Add_to_schedual')}}</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    </button>
                                                </div>
                                                <div class="modal-body">

                                                    <form role="form" action="{{route('admins_tracks.store')}}" method="post">
                                                        @csrf


                                                        <div class="row">
                                                            <div class="col-xs-6 col-sm-6 col-md-6">

                                                                <div class="form-group">
                                                                    <label for="exampleFormControlSelect1">{{trans('Dashboard\trans_admin_track.tracking_stage_id')}}</label>
                                                                    <select class="mdb-select md-form colorful-select " name="tracking_stage_id" id="exampleFormControlSelect1">
                                                                        <option  value="{{$shipment->tracking_stage_id}}" selected>{{$shipment->tracking_stages->stage_name}}</option>
                                                                        @foreach($tracking_stages as $tracking_stage)
                                                                            <option value="{{$tracking_stage->id}}">{{$tracking_stage->stage_name}}</option>
                                                                        @endforeach

                                                                    </select>
                                                                </div>

                                                            </div>

                                                            <div class="col-xs-6 col-sm-6 col-md-6">
                                                                <div class="form-group">
                                                                    <label for="exampleFormControlSelect2">{{trans('Dashboard\trans_admin_track.customer_id')}}</label>
                                                                    <select class="mdb-select md-form colorful-select" name="customer_id" id="exampleFormControlSelect2">
                                                                        <option  value="{{$shipment->customers->id}}">{{$shipment->customers->sender_full_name}}</option>

                                                                    </select>
                                                                </div>


                                                            </div>

                                                        </div>

                                                        <div class="row">
                                                            <div class="col-xs-4 col-sm-4 col-md-4">
                                                                <div class="form-group">
                                                                    <label for="full_number">{{trans('Dashboard\trans_admin_track.full_number')}}</label>
                                                                    <input type="text" name="full_number" value="{{$shipment->customers->full_number}}"class="form-control input-sm" >

                                                                    <input type="hidden" name="id" value="{{$shipment->id}}"class="form-control input-sm" >

                                                                </div>
                                                            </div>
                                                            <div class="col-xs-4 col-sm-4 col-md-4">

                                                                <div class="form-group">
                                                                    <label for="price">{{trans('Dashboard\trans_admin_track.location_now')}}</label>
                                                                    <input type="text" name="location_now" class="form-control input-sm" >
                                                                </div>

                                                            </div>
                                                            <div class="col-xs-4 col-sm-4 col-md-4">

                                                                <div class="form-group">
                                                                    <label for="currency_id">{{trans('Dashboard\trans_admin_track.outcomming_date')}}</label>
                                                                    <input type="date" name="outcomming_date" value="{{ date('Y-m-d H:i:s') }}"class="form-control input-sm" >

                                                                </div>
                                                            </div>

                                                        </div>
                                                        <div class="row">
                                                            <div class="col-xs-12 col-sm-12 col-md-12">
                                                                <div class="form-group">
                                                                    <label for="currency_id">{{trans('Dashboard\trans_admin_track.notes')}}</label>
                                                                    <textarea type="text" name="desc" value=""class="form-control input-sm" ></textarea>

                                                                </div>
                                                            </div>
                                                        </div>





                                                        <div class="modal-footer">
                                                            <button type="submit" class="btn btn-success">{{trans('Dashboard\trans_admin_track.submit')}}</button>

                                                            <button type="button" class="btn btn-default" data-dismiss="modal">{{trans('Dashboard\trans_admin_track.close')}}</button>
                                                        </div>



                                                    </form>
                                                </div>

                                            </div>
                                        </div>
                                    </div>

                                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#delete{{$shipment->id}}"
                                            title=" {{trans('Dashboard\trans_ship.Delete')}}">{{trans('Dashboard\trans_admin_track.delete')}}
                                    </button>
                                    <div class="modal fade" id="delete{{$shipment->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">{{trans('Dashboard\trans_admin_track.refuse_shipment')}}</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">×</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <form role="form" action="{{route('admins_tracks.destroy','$shipment->id')}}" method="post">
                                                        {{method_field('Delete')}}
                                                        @csrf

                                                        <input type="text" name="id" value="{{$shipment->id}}"  >
                                                        <p> This shipment has refused for those reasons</p>
                                                        <textarea type="text" name="desc" value=""class="form-control input-sm" ></textarea>

                                                        <div class="modal-footer">
                                                            <button type="submit" class="btn btn-success">{{trans('Dashboard\trans_admin_track.delete')}}</button>

                                                            <button type="button" class="btn btn-default" data-dismiss="modal">{{trans('Dashboard\trans_admin_track.close')}}</button>
                                                        </div>



                                                    </form>

                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>


    <!-- End Main Content -->
@endsection
@section('js')
    @toastr_js
    @toastr_render
    $(document).ready(function() {
    $('.mdb-select').materialSelect();
    });

    <script  type="text/javascript">
        $(document).ready( function () {
            $('#table_id').DataTable();
        } );

    </script>
@endsection
