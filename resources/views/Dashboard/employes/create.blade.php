@extends('Dashboard.Admin.index')

@section('title')
 Create New Dilevery
@endsection


@section('dilevetyJS')
<script>
  
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
                                <h4 class="font-20 mb-20">{{trans('Dashboard\employe.linkCreate')}}</h4>
                                <!----------------------------->
                        @if ($errors->any())
                        <div class="alert alert-danger">
                             <ul>
                                @foreach ($errors->all() as $error)
                                 <li>{{ $error }}</li>
                               @endforeach
                             </ul>
                            </div>
                        @endif

<!----------------------------->
      @if ($message = Session::get('errors'))
        <div class="alert alert-success alert-block">
            <button type="button" class="close" data-dismiss="alert">×</button>
                <strong>{{ $message }}</strong>
        </div>
        @endif

                                <!-- Form -->
                                <form action="{{ route('admin.employe.store') }}" method="POST" enctype="multipart/form-data">
                                                
                                    <div class="row">
                                        <div class="col-lg-6">
                                        @csrf
                                            <!-- Form Group -->
                                            <div class="form-group">
                                                <label class="font-14 bold mb-2">{{trans('Dashboard\employe.ar_name')}}</label>
                                                <input type="text" name="name[ar]" class="theme-input-style" >
                                            </div>
                                            <!-- End Form Group -->
                                            
                                            <!-- Form Group -->
                                            <div class="form-group">
                                                <label class="font-14 bold mb-2">{{trans('Dashboard\employe.ar_Details')}}</label>
                                                <input type="text" name="details[ar]" class="theme-input-style" >
                                            </div>
                                            <!-- End Form Group -->
                                             <!-- Form Group -->
                                             <div class="form-group">
                                                <label class="font-14 bold mb-2">{{trans('Dashboard\employe.ar_Country')}}</label>
                                                <input type="text" name="Country[ar]" class="theme-input-style" >
                                            </div>
                                            <!-- End Form Group -->

                                                <!-- Form Group -->
                                                <div class="form-group">
                                                <label class="font-14 bold mb-2">{{trans('Dashboard\employe.ar_City')}}</label>
                                                <input type="text" name="city[ar]" class="theme-input-style" >
                                            </div>
                                            <!-- End Form Group -->

                                             <!-- Form Group -->
                                             <div class="form-group">
                                                <label class="font-14 bold mb-2">{{trans('Dashboard\employe.birth_date')}}</label>
                                                <input type="date"   name="birth_date" class="theme-input-style" >
                                            </div>
                                            <!-- End Form Group -->

                                             <!-- Form Group -->
                                             <div class="form-group">
                                                <label class="font-14 bold mb-2">{{trans('Dashboard\employe.emial')}}</label>
                                                <input type="email" name="email" class="theme-input-style" placeholder="emial">
                                            </div>
                                            <!-- End Form Group -->
                                            
                                            
                                     

                     
                                            
                                  

                                        </div>


                                        <div class="col-lg-6">
                                            <!-- Form Group -->
                                            <div class="form-group">
                                                <label class="font-14 bold mb-2">{{trans('Dashboard\employe.en_name')}}</label>
                                                <input type="text" name="name[en]" class="theme-input-style" >
                                            </div>
                                            <!-- End Form Group -->
                                            
                                            <!-- Form Group -->
                                            <div class="form-group">
                                                <label class="font-14 bold mb-2">{{trans('Dashboard\employe.en_Details')}}</label>
                                                <input type="text" name="details[en]" class="theme-input-style" >
                                            </div>
                                            <!-- End Form Group -->
                                            
                                            <div class="form-group">
                                                <label class="font-14 bold mb-2">{{trans('Dashboard\employe.en_Country')}}</label>
                                                <input type="text" name="Country[en]" class="theme-input-style" >
                                            </div>
                                            <!-- End Form Group -->

                                                <!-- Form Group -->
                                                <div class="form-group">
                                                <label class="font-14 bold mb-2">{{trans('Dashboard\employe.en_City')}}</label>
                                                <input type="text" name="city[en]" class="theme-input-style" >
                                                </div>
                                            <!-- End Form Group -->

                                              <!-- Form Group -->
                                              <div class="form-group">
                                                <label class="font-14 bold mb-2">{{trans('Dashboard\employe.phone')}}</label>
                                                <input type="number" name="phone" class="theme-input-style" >
                                                </div>
                                            <!-- End Form Group -->

                                              <!-- Form Group -->
                                              <div class="form-group">
                                            <label class="font-14 bold mb-2"> {{trans('Dashboard\employe.images')}}</label>
                                            <img id="imgs" style="height:200;"   >

                                            </div>
                                               <!-- End Form Group -->
                                            
                                               <!-- Form Group -->
                                        <div class="form-group">
                                        
                                                
                                                <input name="imgs" type="file" id="image-File" onchange="imgaesFile()" accept="image/*" />
                                                
                                                <input type="hidden" name="img_url">

                                        </div>
                                   <!-- End Form Group -->

                                        </div>

                                        
                                    </div>

                                   

                                    <!-- Form Row -->
                                    <div class="form-row">
                                        <div class="col-12 text-right">
                                            <button type="submit" class="btn long">{{trans('Dashboard\employe.submitCreate')}}</button>
                                        </div>
                                    </div>
                                    <!-- End Form Row -->
                                </form>
                                <!-- End Form -->
                            </div>
                            <!-- End Horizontal Form With Icons -->
                        </div>

@endsection