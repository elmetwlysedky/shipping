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
                                <th>{{trans('Dashboard\trans_price.material_type_id')}}</th>
                                <th>{{trans('Dashboard\trans_price.service_type_id')}}</th>
                                <th>{{trans('Dashboard\trans_price.wheight')}}</th>
                                <th>{{trans('Dashboard\trans_price.price')}}</th>
                                <th>{{trans('Dashboard\trans_price.currency_id')}}</th>
                                <th>{{trans('Dashboard\trans_price.Processes')}}</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php $i = 0;?>
                            <tr>
                                @foreach($prices as $price)
                                    <?php $i++ ;?>
                                    <td>{{$i}}</td>
                                    <td>{{$price->shipping_material_types->material_type}}</td>
                                    <td>{{$price->service_types->service_name}}</td>
                                    <td>{{$price->wheight}}</td>
                                    <td>{{$price->price}}</td>
                                    <td>{{$price->currencies->curency_name}}</td>
                                    <td>
                                        <button type="button" class="btn btn-warning" data-toggle="modal"
                                                data-target="#Edit{{$price->id}}"
                                                title=" {{trans('Dashboard\trans_price.Edit')}}"><i class="icofont-edit icofont-1x"></i>
                                        </button>

                                        <div class="modal fade" id="Edit{{$price->id}}" tabindex="-1" role="dialog"
                                             aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">{{trans('Dashboard\trans_price.update_price')}}</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">×</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form role="form" action="{{route('prices.update','test')}}" method="post">
                                                            {{method_field('patch')}}
                                                            @csrf


                                                            <div class="row">
                                                                <div class="col-xs-6 col-sm-6 col-md-6">

                                                                        <div class="form-group">
                                                                            <label for="material_type_id">{{trans('Dashboard\trans_price.material_type_id')}}</label>
                                                                            <select  name="material_type_id">
                                                                                <option  value="{{$price->material_type_id}}">{{$price->shipping_material_types->material_type}}</option>
                                                                                @foreach($material_types as $type)
                                                                                    <option value="{{$type->id}}">{{$type->material_type}}</option>
                                                                                @endforeach


                                                                            </select>
                                                                        </div>

                                                                    </div>

                                                                <div class="col-xs-6 col-sm-6 col-md-6">

                                                                    <div class="form-group">
                                                                        <label for="service_type_id">{{trans('Dashboard\trans_price.service_type_id')}}</label>
                                                                        <select class="form-control" name="service_type_id">
                                                                            <option  value="{{$price->service_type_id}}">{{$price->service_types->service_name}}</option>
                                                                            @foreach($service_types as $service_type)
                                                                                <option value="{{$service_type->id}}">{{$service_type->service_name}}</option>
                                                                            @endforeach


                                                                        </select>
                                                                    </div>


                                                                </div>

                                                            </div>

                                                            <div class="row">
                                                                <div class="col-xs-4 col-sm-4 col-md-4">
                                                                    <div class="form-group">
                                                                        <label for="wheight">{{trans('Dashboard\trans_price.wheight')}}</label>
                                                                        <input type="text" name="wheight" id="Name" value="{{$price->wheight}}">
                                                                        <input type="hidden" name="id"  value="{{$price->id}}">

                                                                    </div>
                                                                </div>
                                                                <div class="col-xs-4 col-sm-4 col-md-4">

                                                                    <div class="form-group">
                                                                        <label for="price">{{trans('Dashboard\trans_price.price')}}</label>
                                                                        <input type="text" name="price" value="{{$price->price}}"class="form-control input-sm" >
                                                                    </div>

                                                                </div>
                                                                <div class="col-xs-4 col-sm-4 col-md-4">

                                                                    <div class="form-group">
                                                                        <label for="currency_id">{{trans('Dashboard\trans_price.currency_id')}}</label>
                                                                        <select class="form-control" name="currency_id">
                                                                            <option  value="{{$price->currency_id}}">{{$price->currencies->curency_name}}</option>
                                                                            @foreach($currencies as $curency)
                                                                                <option value="{{$curency->id}}">{{$curency->curency_name}}</option>
                                                                            @endforeach


                                                                        </select>
                                                                    </div>
                                                                </div>

                                                            </div>


                                                            <div class="row">
                                                                <div class="col-xs-6 col-sm-6 col-md-6">
                                                                    <div class="form-group">
                                                                        <label for="service_type_id">{{trans('Dashboard\trans_price.distance')}}</label>
                                                                        <input type="text" name="distance" value="{{$price->distance}}"
                                                                               class="form-control input-sm" placeholder="">
                                                                    </div>
                                                                </div>

                                                                <div class="col-xs-6 col-sm-6 col-md-6">
                                                                    <div class="form-group">
                                                                        <label for="unit_id">{{trans('Dashboard\trans_price.unit_id')}}</label>
                                                                        <select class="form-control" name="unit_id">
                                                                            <option  value="{{$price->unit_id}}">{{$price->units->unit_name}}</option>
                                                                            @foreach($units as $unit)
                                                                                <option value="{{$unit->id}}">{{$unit->unit_name}}</option>
                                                                            @endforeach


                                                                        </select>
                                                                    </div>
                                                                </div>


                                                            </div>


                                                            <div class="modal-footer">
                                                                <button type="submit" class="btn btn-success">{{trans('Dashboard\trans_price.submit')}}</button>

                                                                <button type="button" class="btn btn-default" data-dismiss="modal">{{trans('Dashboard\trans_price.close')}}</button>
                                                            </div>



                                                        </form>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>

                                        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#delete{{$price->id}}"
                                                title=" {{trans('Dashboard\trans_price.Delete')}}"><i class="icofont-trash icofont-1x "></i>
                                        </button>
                                        <div class="modal fade" id="delete{{$price->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">{{trans('Dashboard\trans_price.delete_price')}}</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">×</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form role="form" action="{{route('prices.destroy','$price->id')}}" method="post">
                                                            {{method_field('Delete')}}
                                                            @csrf
                                                            <input type="hidden" name="id" value="{{$price->id}}"  >
                                                            <p>are u sure u want to delete this {{$price->shipping_material_types->material_type}}</p>




                                                            <div class="modal-footer">
                                                                <button type="submit" class="btn btn-success">{{trans('Dashboard\trans_price.Delete')}}</button>

                                                                <button type="button" class="btn btn-default" data-dismiss="modal">{{trans('Dashboard\trans_price.close')}}</button>
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
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.js"></script>

    <script  type="text/javascript">
        $(document).ready( function () {
            $('#table_id').DataTable();
        } );

    </script>
@endsection
