@extends('Dashboard.Admin.index')

@section('title')
 Create New Dilevery
@endsection


@section('dilevetyJS')
<script>
    function iconsFile() {
        // Change icons in Choose File
        var output = document.getElementById('icons');

        output.src = URL.createObjectURL(event.target.files[0]);
        output.onload = function () {
            URL.revokeObjectURL(output.src) // free memory
        };

    };

    function imgaesFile() {
// Change Images in Choose File
      var output = document.getElementById('imgs');

      output.src = URL.createObjectURL(event.target.files[0]);
      output.onload = function () {
      URL.revokeObjectURL(output.src) // free memory
     };
   
    };


    </script>
@endsection


@section('content')
<div class="col-lg-12">
                            <!-- Base Horizontal Form With Icons -->
                            <div class="form-element py-30 multiple-column">
                                <h4 class="font-20 mb-20">{{trans('Dashboard\delivery.linkCreate')}}</h4>
                                @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
                                <!-- Form -->
                                <form action="{{ route('admin.delivery.store') }}" method="POST" enctype="multipart/form-data">
                                                
                                    <div class="row">
                                        <div class="col-lg-6">
                                        @csrf
                                            <!-- Form Group -->
                                            <div class="form-group">
                                                <label class="font-14 bold mb-2"> {{trans('Dashboard\delivery.arname')}}</label>
                                                <input type="text" name="name[ar]" class="theme-input-style" placeholder="Text Arabic">
                                            </div>
                                            <!-- End Form Group -->
                                            
                                            <!-- Form Group -->
                                            <div class="form-group">
                                                <label class="font-14 bold mb-2"> {{trans('Dashboard\delivery.arDetails')}}</label>
                                                <input type="text" name="details[ar]" class="theme-input-style" placeholder="Text Arabic">
                                            </div>
                                            <!-- End Form Group -->

                                            <!-- Form Group -->
                                            <div class="form-group">
                                                <label class="font-14 bold mb-2">{{trans('Dashboard\delivery.arTitleUp')}}</label>
                                                <input type="text" name="title_main[ar]" class="theme-input-style" placeholder="Text Arabic">
                                            </div>
                                            <!-- End Form Group -->

                                              <!-- Form Group -->
                                              <div class="form-group">
                                                <label class="font-14 bold mb-2">{{trans('Dashboard\delivery.arTitleSup')}}</label>
                                                <input type="text" name="title_sup[ar]" class="theme-input-style" placeholder="Text Arabic">
                                            </div>
                                            <!-- End Form Group -->
                                            
                                     

                                              <!-- Form Group -->
                                            <div class="form-group">
                                            <label for="inputEmail4"> {{trans('Dashboard\delivery.Fileicon')}}</label>
                                            <img id="icons" style="height:200;"   >

                                            </div>
                                               <!-- End Form Group -->
                                            
                                               <!-- Form Group -->
                                        <div class="form-group">      
                                                <input name="icons" type="file" id="image-File" onchange="iconsFile()" accept="image/*" />     
                                        </div>
                                   <!-- End Form Group -->

                                        </div>


                                        <div class="col-lg-6">
                                            <!-- Form Group -->
                                            <div class="form-group">
                                                <label class="font-14 bold mb-2">{{trans('Dashboard\delivery.enname')}}</label>
                                                <input type="text" name="name[en]" class="theme-input-style" placeholder="Text English">
                                            </div>
                                            <!-- End Form Group -->
                                            
                                            <!-- Form Group -->
                                            <div class="form-group">
                                                <label class="font-14 bold mb-2">{{trans('Dashboard\delivery.enDetails')}}</label>
                                                <input type="text" name="details[en]" class="theme-input-style" placeholder="Text English">
                                            </div>
                                            <!-- End Form Group -->

                                             <!-- Form Group -->
                                             <div class="form-group">
                                                <label class="font-14 bold mb-2">{{trans('Dashboard\delivery.enTitleUp')}}</label>
                                                <input type="text" name="title_main[en]" class="theme-input-style" placeholder="Text English">
                                            </div>
                                            <!-- End Form Group -->

                                             <!-- Form Group -->
                                             <div class="form-group">
                                                <label class="font-14 bold mb-2">{{trans('Dashboard\delivery.enTitleSup')}}</label>
                                                <input type="text" name="title_sup[en]" class="theme-input-style" placeholder="Text English">
                                            </div>
                                            <!-- End Form Group -->
                                            
                     

                                              <!-- Form Group -->
                                              <div class="form-group">
                                            <label for="inputEmail4"> {{trans('Dashboard\delivery.Fileimages')}}</label>
                                            <img id="imgs" style="height:200;"   >

                                            </div>
                                               <!-- End Form Group -->
                                            
                                               <!-- Form Group -->
                                        <div class="form-group">
                                               
                                                <input name="imgs" type="file" id="image-File" title="ffffffffffffffff" onchange="imgaesFile()" accept="image/*" />
                                                
    
                                        </div>
                                   <!-- End Form Group -->

                                        </div>

                                        
                                    </div>

                                   

                                    <!-- Form Row -->
                                    <div class="form-row">
                                        <div class="col-12 text-right">
                                            <button type="submit" class="btn long">{{trans('Dashboard\delivery.Supmit')}}</button>
                                        </div>
                                    </div>
                                    <!-- End Form Row -->
                                </form>
                                <!-- End Form -->
                            </div>
                            <!-- End Horizontal Form With Icons -->
                        </div>

@endsection