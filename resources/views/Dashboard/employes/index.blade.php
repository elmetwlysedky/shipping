@extends('Dashboard.Admin.index')



@section('title')
  employes index 
@endsection

<!---dilevetyJS index table --->
@section('dilevetyJS')
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
@endsection


@section('content')
@if ($message = Session::get('errors'))
        <div class="alert alert-success alert-block">
            <button type="button" class="close" data-dismiss="alert">×</button>
                <strong>{{ $message }}</strong>
                
        </div>
        @endif
<div class="col-12">
                            <div class="card mb-30">
                                <div class="card-body pt-30">
                                    <h4 class="font-20 ">{{trans('Dashboard\employe.h4title')}}</h4>
                                    <a  href="{{route('admin.employe.create') }}" class="btn btn-info add-new"><i class="fa fa-plus"></i> {{trans('Dashboard\employe.linkCreate')}}</a>
                                </div>
                                <div class="table-responsive">
                                    <!-- Invoice List Table -->
                                    <table class="text-nowrap table-bordered dh-table">
                                        <thead>
                                            <tr>
                                            <th>{{trans('Dashboard\employe.imgaes')}}</th>
                                                <th >{{trans('Dashboard\employe.name')}}</th>
                                                
                                                <th>{{trans('Dashboard\employe.Country')}}</th>
                                                <th>{{trans('Dashboard\employe.city')}}</th>
                                                
                                                <th>{{trans('Dashboard\employe.Year')}}</th>
                                                <th>{{trans('Dashboard\employe.email')}}</th>
                                                <th>{{trans('Dashboard\employe.phone')}}</th>
                                                <th>{{trans('Dashboard\employe.Status')}}</th>
                                                <th>{{trans('Dashboard\employe.Actions')}}</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                        @foreach($employe as $model)
                                            <tr>
                                            <td>
                                                <img style="width: 50px; height: 50px;" src="{{asset('Dashboard/img/employes/'.$model-> img_url)}}" >
                                            </td>

                                                <td>
                                                    
                                                {{$model-> name}}
                                                
                                            
                                            </td>
                                            
                                             
                                                <td>
                                                {{$model-> Country}}

                                                
                                                
                                                </td>
                                                <td>
                                                {{$model-> city}}
                         
                                                </td>
                                                
                                                <td>{{$model-> age}}</td>
                                                <td>{{$model-> email}}</td>
                                                <td>{{$model-> phone}}</td>
                                               
                                                <td>
                                                <a href="{{ route('admin.employe.activated' , ['id' => $model->id , 'bool' => $model-> is_active ])}}" 
                                                class="btn btn-danger">
                                                @if($model-> is_active == 1)
                                                {{trans('Dashboard\employe.Statusactviated')}}
                                                @else
                                                {{trans('Dashboard\employe.StatusUnactviated')}}
                                                @endif

                                                </a>
                                                </td>
                                                <td>
                                                                                                           
                        <a href="{{route('admin.employe.edit', $model-> id )}}" style="color: #FFC107;" class="Edit" title="{{trans('Dashboard\employe.actionsEdit')}}" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>
                        <a href="{{route('admin.employe.destroy', $model-> id )}}"  style="color: #E34724;" class="delete" title="{{trans('Dashboard\employe.actionsDelete')}}" data-toggle="tooltip"><i class="material-icons">&#xE872;</i></a>

                                                </td>
                                            </tr>
                                           @endforeach

                                        </tbody>
                                    </table>
                                    <!-- End Invoice List Table -->
                                </div>
                            </div>    
                        </div>
                               
@endsection
