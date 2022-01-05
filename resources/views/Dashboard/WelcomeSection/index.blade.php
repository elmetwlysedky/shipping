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
                                    <h4 class="font-20 ">{{trans('Dashboard\WelcomeSection.h4title')}}</h4>
                                    <a  href="{{route('admin.welcome.create')}}" class="btn btn-info add-new"><i class="fa fa-plus"></i> {{trans('Dashboard\WelcomeSection.linkCreate')}}</a>
                                </div>
                                <div class="table-responsive">
                                    <!-- Invoice List Table -->
                                    <table class="text-nowrap table-bordered dh-table">
                                        <thead>
                                            <tr>
                                            <th>{{trans('Dashboard\WelcomeSection.name_P')}}</th>
                                   
                                            
                                                <th>{{trans('Dashboard\WelcomeSection.name_h')}}</th>
                                                <th>{{trans('Dashboard\WelcomeSection.name_span')}}</th>
                                                <th>{{trans('Dashboard\WelcomeSection.status')}}</th>
                                                <th>{{trans('Dashboard\WelcomeSection.Actions')}}</th>
                                                
                                            </tr>
                                        </thead>
                                        <tbody>

                                      @foreach($welcome as $model)
                                            <tr>
                                                <td>
                                                {{$model->title_p}}
                                               
                                                </td>
                                                <td>
                                                {{$model->title_h}}
                                              
                                                </td>
                                             
                                                <td>
                                                {{$model->title_span}}
                                                 
                                                </td>
                                                <td>
                                                <a href="{{ route('admin.welcome.activated' , ['id' => $model->id , 'bool' => $model-> is_active ])}}" 
                                                class="btn btn-danger">
                                             
                                             @if($model-> is_active == 1)
                                             {{trans('Dashboard\WelcomeSection.Statusactivated')}}
                                                @else
                                                {{trans('Dashboard\WelcomeSection.StatusUnactviated')}}
                                                @endif
                                                </a>
                                                </td>
                                                <td>
                                                                                                           
                        <a href="{{route('admin.welcome.edit' , $model-> id)}}" style="color: #FFC107;" class="Edit" title="{{trans('Dashboard\WelcomeSection.actionsEdit')}}" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>
                        <a href="{{route('admin.welcome.destroy' , $model-> id)}}"  style="color: #E34724;" class="delete" title="{{trans('Dashboard\WelcomeSection.actionsDelete')}}" data-toggle="tooltip"><i class="material-icons">&#xE872;</i></a>

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
