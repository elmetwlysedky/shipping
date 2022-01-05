@extends('Dashboard.Admin.index')

@section('title')
  Dilevery Update
@endsection


@section('dilevetyJS')
<script>
    function iconsFile() {
        // Change icons in Choose File
        var output = document.getElementById('icons');

        output.src = URL.createObjectURL(event.target.files[0]);
        output.onload = function () {
            URL.revokeObjectURL(output.src) // free memory
        }

    }

    function imgaesFile() {
// Change Images in Choose File
      var output = document.getElementById('imgs');

      output.src = URL.createObjectURL(event.target.files[0]);
      output.onload = function () {
      URL.revokeObjectURL(output.src) // free memory
     }
   
    }
 </script>
@endsection


@section('content')
<div class="col-lg-12">
                            <!-- Base Horizontal Form With Icons -->
                            <div class="form-element py-30 multiple-column">
                                <h4 class="font-20 mb-20">{{trans('Dashboard\delivery.updateTitle')}}</h4>
                                @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

@if ($message = Session::get('errors'))
        <div class="alert alert-success alert-block">
            <button type="button" class="close" data-dismiss="alert">×</button>
                <strong>{{ $message }}</strong>
                <a href="{{route('admin.delivery.index')}}" class="btn s_alert bg-info-light text-info mr-3 mr-sm-4 mb-10" id="type-info">back index</a>
        </div>
        @endif
                                <!-- Form -->
                                <form action="{{route('admin.delivery.update')}}" method="POST" enctype="multipart/form-data">
                                @method('PUT')
                                @csrf        
                                 
                                <input type="hidden" name="shipmentId" value="{{$shipments->id}}" >
   
                                    <div class="row">
                                        <div class="col-lg-6">
                                        
                                            <!-- Form Group -->
                                            <div class="form-group">
                                                <label class="font-14 bold mb-2">{{trans('Dashboard\delivery.arname')}}</label>
                                                
                                                <input type="text" name="name[ar]" value="{{ $shipments->getTranslation('name', 'ar') }}" class="theme-input-style" placeholder="Text Arabic">
                                            </div>
                                            <!-- End Form Group -->
                                            
                                            <!-- Form Group -->
                                            <div class="form-group">
                                                <label class="font-14 bold mb-2">{{trans('Dashboard\delivery.arDetails')}}</label>
                                                <input type="text" name="details[ar]" value="{{ $shipments->getTranslation('details', 'ar') }}" class="theme-input-style" placeholder="Text Arabic">
                                            </div>
                                            <!-- End Form Group -->
                                            
                                         
                                            <!-- Form Group -->
                                            <div class="form-group">
                                                <label class="font-14 bold mb-2">{{trans('Dashboard\delivery.arTitleUp')}}</label>
                                                <input type="text" name="title_main[ar]" value="{{ $shipments->getTranslation('title_main', 'ar') }}"  class="theme-input-style" placeholder="Text Arabic">
                                            </div>
                                            <!-- End Form Group -->

                                              <!-- Form Group -->
                                              <div class="form-group">
                                                <label class="font-14 bold mb-2">{{trans('Dashboard\delivery.arTitleSup')}}</label>
                                                <input type="text" name="title_sup[ar]" value="{{ $shipments->getTranslation('title_sup', 'ar') }}" class="theme-input-style" placeholder="Text Arabic">
                                            </div>
                                            <!-- End Form Group -->

                                              <!-- Form Group -->
                                            <div class="form-group">
                                            <label for="inputEmail4"> {{trans('Dashboard\delivery.Fileicon')}}</label>
                                            <img id="icons" style="height:200;"   src="{{asset('Dashboard/img/delivery/'.$shipments-> icon_url)}}"  >

                                            </div>
                                               <!-- End Form Group -->
                                            
                                               <!-- Form Group -->
                                        <div class="form-group">
                                        
                                               
                                                <input name="icons" type="file" id="image-File" onchange="iconsFile()" accept="image/*" />
                                                <input type="hidden" value="{{$shipments-> icon_url}}"  name="icon_url">

    
                                        </div>
                                   <!-- End Form Group -->

                                        </div>


                                        <div class="col-lg-6">
                                            <!-- Form Group -->
                                            <div class="form-group">
                                                <label class="font-14 bold mb-2">{{trans('Dashboard\delivery.enname')}}</label>
                                                
                                                <input type="text" name="name[en]" value="{{ $shipments->getTranslation('name', 'en') }}"   class="theme-input-style" placeholder="Text English">
                                            </div>
                                            <!-- End Form Group -->
                                            
                                            <!-- Form Group -->
                                            <div class="form-group">
                                                <label class="font-14 bold mb-2">{{trans('Dashboard\delivery.enDetails')}}</label>
                                                <input type="text" name="details[en]" value="{{ $shipments->getTranslation('details', 'en') }}"  class="theme-input-style" placeholder="Text English">
                                            </div>
                                            <!-- End Form Group -->
                                            
                                      <!-- Form Group -->
                                      <div class="form-group">
                                                <label class="font-14 bold mb-2">{{trans('Dashboard\delivery.enTitleUp')}}</label>
                                                <input type="text" name="title_main[en]" value="{{ $shipments->getTranslation('title_main', 'en') }}" class="theme-input-style" placeholder="Text English">
                                            </div>
                                            <!-- End Form Group -->

                                             <!-- Form Group -->
                                             <div class="form-group">
                                                <label class="font-14 bold mb-2">{{trans('Dashboard\delivery.enTitleSup')}}</label>
                                                <input type="text" name="title_sup[en]" value="{{ $shipments->getTranslation('title_sup', 'en') }}" class="theme-input-style" placeholder="Text English">
                                            </div>
                                            <!-- End Form Group -->

                                              <!-- Form Group -->
                                              <div class="form-group">
                                            <label for="inputEmail4"> {{trans('Dashboard\delivery.Fileimages')}}</label>
                                           

                                            <img id="imgs"  style="height: 200px;" src="{{asset('Dashboard/img/delivery/'.$shipments-> img_url)}}" >
                                            
                                            </div>
                                               <!-- End Form Group -->
                                            
                                               <!-- Form Group -->
                                        <div class="form-group">
                                        
                                                
                                                <input name="imgs" type="file" id="image-File" onchange="imgaesFile()" accept="image/*" />
                                                <input name="img_url" value="{{$shipments-> img_url}}" type="hidden" />
    
                                        </div>
                                   <!-- End Form Group -->

                                        </div>

                                        
                                    </div>

                                    

                                    <!-- Form Row -->
                                    <div class="form-row">
                                        <div class="col-12 text-right">
                                            <button type="submit" class="btn long">{{trans('Dashboard\delivery.SubmitEdit')}}</button>
                                        </div>
                                    </div>
                                    <!-- End Form Row -->
                                </form>
                                <!-- End Form -->
                            </div>
                            <!-- End Horizontal Form With Icons -->
                        </div>

@endsection