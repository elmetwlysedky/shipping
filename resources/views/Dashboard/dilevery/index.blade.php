@extends('Dashboard.Admin.index')



@section('title')
 index dilevery
@endsection

<!---dilevetyJS index table --->
@section('dilevetyJS')
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
@endsection

@section('content')
<div class="col-12">
                        <div class="card mb-30">
                                <div class="card-body">
                                    <div class="d-sm-flex justify-content-between align-items-center">
                                        <h4 class="font-20"> {{trans('Dashboard\delivery.h4title')}} </h4>

                                       
                                    
                                            <!-- Dropdown Button -->
                                          <div class="dropdown-button mt-3 mt-sm-0">
                                          <a href="{{ route('admin.delivery.create')}}" type="button" class="btn s_alert bg-warning-light text-warning mr-3 mr-sm-4 mb-10" id="type-warning"> {{trans('Dashboard\delivery.linkCreate')}}</a>

                                          <a href="{{route('admin.delivery.record')}}" class="btn s_alert bg-info-light text-info mr-3 mr-sm-4 mb-10" id="type-info">{{trans('Dashboard\delivery.linkViewRecord')}}</a>
                                            </div>
                                         </div>
                                         <!-- End Dropdown Button  -->
                                        </div>
                                    </div>
                                </div>
                                @if ($message = Session::get('success'))
                                 <div class="alert alert-success alert-block">
                                 <button type="button" class="close" data-dismiss="alert">×</button>
                                   <strong>{{ $message }}</strong>

                                 </div>
                                       @endif

                                       @if ($message = Session::get('IsActiveSection'))
                                 <div class="alert alert-success alert-block">
                                 <button type="button" class="close" data-dismiss="alert">×</button>
                                   <strong>{{ $message }}</strong>
                                 

                                 </div>
                                       @endif

                                <div class="table-responsive">
                                    <!-- Invoice List Table -->
                                    <table class="text-nowrap bg-white dh-table">
                                        <thead>
                                            <tr>
                                                <th>{{trans('Dashboard\delivery.icon')}}</th>
                                                <th> {{trans('Dashboard\delivery.imgaes')}}</th>
                                                <th>{{trans('Dashboard\delivery.nameServices')}}</th>
                                                <th>{{trans('Dashboard\delivery.details')}}</th>
                                                <th>{{trans('Dashboard\delivery.titleUp')}}</th>
                                                <th>{{trans('Dashboard\delivery.titleSup')}}  </th>
                                                <th>{{trans('Dashboard\delivery.activeUp')}} </th>
                                                <th>{{trans('Dashboard\delivery.activeSup')}} </th>
                                                <th>{{trans('Dashboard\delivery.actions')}}</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                   @foreach($shiments as $model)
                                            <tr>
                                                <td>
                                                  <img  src="{{asset('Dashboard/img/delivery/'.$model-> icon_url)}}" >
                                                </td>

                                                <td>
                                                <img style="width: 50px; height: 50px;" src="{{asset('Dashboard/img/delivery/'.$model-> img_url)}}" >
                                                </td>

                                                <td>
                                                    
                                                {{$model-> name}}

                                                </td>
                                                
                                        
                                                <td>
                                                {{$model-> details}}
                                                </td>

                                                <td>
                                                {{$model-> title_main}}
                                                </td>

                                                <td>
                                                {{$model-> title_sup}}
                                                </td>

                                              <td>
                                            <form action="{{route('admin.delivery.stauts')}}" method="POST" id="From-Status-{{$model-> id}}" >
                                                @csrf
                                                <input type="hidden" name="id" value="{{$model-> id}}" />
                                          
                                               <select style="width:100%" onchange="this.form.submit()" name="is_active">
                                                
                                                <option value="1" {{$model->is_active_limit == 1 ? 'disabled selected' : ''}} >{{trans('Dashboard\delivery.Enable')}}</option>
                                                <option value="0" {{$model->is_active_limit == 0 ? 'disabled selected' : ''}}>{{trans('Dashboard\delivery.Disbale')}}</option>
                                                </select>
                                                  <br>
                                                 <label class="{{$model->is_active_limit == 1 ? 'status-btn completed' :'status-btn un_paid' }}">{{ $model->is_active_limit == 1 ? trans('Dashboard\delivery.IsActive') : trans('Dashboard\delivery.UnActive') }}</label>
                                            </form>
                                                </td>

                                                <td>
                                                   
                                                <form action="{{route('admin.delivery.stautsII')}}" method="POST" id="From-Status-{{$model-> id}}" >
                                                @method('PUT')
                                                @csrf
                                                <input type="hidden" name="id" value="{{$model-> id}}" />
                                          
                                               <select style="width:100%" onchange="this.form.submit()" name="is_active_section">
                                                
                                                <option value="1" {{$model->	is_active_section == 1 ? 'disabled selected' : ''}}>{{trans('Dashboard\delivery.Enable')}}</option>
                                                <option value="0" {{$model->	is_active_section == 0 ? 'disabled selected' : ''}}>{{trans('Dashboard\delivery.Disbale')}}</option>
                                                </select>
                                               <br>
                                               <label class="{{$model->is_active_section == 1 ? 'status-btn completed' :'status-btn un_paid' }}">{{ $model->is_active_section == 1 ? trans('Dashboard\delivery.IsActive') : trans('Dashboard\delivery.UnActive') }}</label>
                                             </form>                                                
                                                </td>
                                                <td>
                                                                                
                        <a href="{{route('admin.delivery.edit',$model->id)}}" style="color: #FFC107;" class="Edit" title="{{trans('Dashboard\delivery.actionsEdit')}}" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>
                        <a href="{{route('admin.delivery.destroy',$model->id)}}"  style="color: #E34724;" class="delete" title="{{trans('Dashboard\delivery.actionsDelete')}}" data-toggle="tooltip"><i class="material-icons">&#xE872;</i></a>
                    
                                                
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
