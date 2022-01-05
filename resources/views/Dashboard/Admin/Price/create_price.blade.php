@extends('Dashboard.Layouts.master')
@section('css')
<style>
    .repeater-add-btn{
        margin-bottom: -15px;
    }
    .item-content{
        margin-bottom: 10px;
    }
    .price-footer{
        margin-bottom: -50px;
        padding-top: 20px;
    }
    .form-element{
        padding-bottom: 75px !important;
    }
</style>
@endsection

@section('content')
    <div class="main-content">
        <div class="container-fluid">
            <div class="row">

                <div class="col-12">
                    <!-- Form Element -->
                    <div class="form-element py-30 mb-30">
                        <form action="{{route('prices.store')}}" class="repeater-default" method="POST">

                            @csrf
                            <!-- Repeater Heading -->
                            <div class="repeater-heading">
                                <h4 class="font-20 mb-4"> {{trans('dashboard\trans_price.adding_price')}} ِ</h4>
                            </div>


                                @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                            @endif

                            <!-- Repeater Html Start -->
                            <div data-repeater-list="List_Classes">

                                <!-- Repeater Items -->
                                <div data-repeater-item>
                                    <!-- Repeater Content -->
                                    <div class="item-content align-items-center row mb-15">

                                        <!-- Form Group -->
                                        <div class="form-group col-lg-2">
                                            <label for="title">{{trans('Dashboard\trans_price.material_type_id')}}</label>
                                            <select class=" p-1 my-1 mr-sm-2 form-control" name="material_type_id">
                                                <option selected>...</option>
                                                @foreach($material_types as $type)
                                                    <option value="{{$type->id}}">{{$type->material_type}}</option>
                                                @endforeach
                                            </select>

                                        </div>
                                        <!-- End Form Group -->

                                        <!-- Form Group -->
                                        <div class="form-group col-lg-1">
                                            <label for="title">{{trans('Dashboard/trans_price.whieght')}}</label>
                                            <input type="text" name ="whieght" class="form-control" >
                                        </div>
                                        <!-- End Form Group -->

                                        <!-- Form Group -->
                                        <div class="form-group col-lg-1">
                                            <label for="title">{{trans('Dashboard/trans_price.unit_id')}}</label>
                                            <select class="my-1 mr-sm-2 form-control" name="unit_id">
                                                <option selected>...</option>

                                                @foreach($units as $unit)
                                                    <option value="{{$unit->id}}">{{$unit->unit_name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <!-- End Form Group -->


                                        <!-- Form Group -->
                                        <div class="form-group col-lg-2">
                                            <label for="title">{{trans('Dashboard/trans_price.service_type_id')}}</label>
                                            <select class="my-1 mr-sm-2 form-control" name="service_type_id">
                                                <option selected>...</option>

                                                @foreach($service_types as $service_type)
                                                    <option value="{{$service_type->id}}">{{$service_type->service_name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <!-- End Form Group -->

                                        <div class="form-group col-lg-2">
                                            <label for="title">{{trans('Dashboard/trans_price.distance')}}</label>
                                            <input type="text" name ="distance" class="form-control" >
                                        </div>
                                        <!-- Form Group -->
                                        <div class="form-group col-lg-2">
                                            <label for="inputCompany" class="bold mb-2">{{trans('Dashboard/trans_price.price')}}</label>
                                            <input type="text" class="form-control" id="price" name="price"placeholder="">
                                        </div>
                                        <!-- End Form Group -->
                                        <div class="form-group col-lg-1">
                                            <label for="title">{{trans('Dashboard/trans_price.currency_id')}} </label>

                                            <select class=" my-1 mr-sm-2 form-control" name="currency_id">
                                            <option selected>...</option>
                                            @foreach($currencies as $curency)
                                                <option value="{{$curency->id}}">{{$curency->curency_name}}</option>
                                            @endforeach

                                        </select>
                                        </div>

                                        <!-- Repeater Remove Btn -->
                                        <div class="repeater-remove-btn col-lg-1">
                                            <button data-repeater-delete class="remove-btn">
                                                <img src="{{URL::asset('Dashboard/img/svg/remove.svg')}}" alt="" class="svg">
                                            </button>
                                        </div>



                                    </div>
                                    <hr/>
                                </div>
                                <!-- End Repeater Items -->


                            </div>
                            <!-- Repeater End -->
                            <button data-repeater-create type="button" class="repeater-add-btn btn-circle">
                                <img src="{{URL::asset('Dashboard/img/svg/plus_white.svg')}}" alt="" class="svg">
                            </button>

                                <div class="price-footer" >
                                    <button type="button" class="btn btn-secondary">{{ trans('Dashboard\trans_price.close') }}</button>
                                    <button type="submit"
                                            class="btn btn-success">{{ trans('Dashboard\trans_price.submit') }}</button>
                                </div>
                        </form>
                    </div>
                    <!-- End Form Element -->
                </div>


            </div>
        </div>
    </div>

    <!-- End Main Content -->
@endsection
@section('js')

@endsection
