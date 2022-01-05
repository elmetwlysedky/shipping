@extends('Dashboard.Admin.index')

@section('title')
 Create New section Welcome
@endsection





@section('content')
<div class="col-lg-12">
                            <!-- Base Horizontal Form With Icons -->
                            <div class="form-element py-30 multiple-column">
                                <h4 class="font-20 mb-20">New Create</h4>
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
                                <form action="{{route('admin.welcome.update')}}" method="POST" enctype="multipart/form-data">
                                                
                                    <div class="row">
                                        <div class="col-lg-6">
                                        @method('PUT')
                                         @csrf    
                                            <!-- Form Group -->
                                            <div class="form-group">
                                            <label class="font-14 bold mb-2">{{trans('Dashboard\WelcomeSection.ar_name_P')}}</label>
                                                <input type="text" name="title_p[ar]" value="{{$welcome->getTranslation('title_p', 'ar')}}" class="theme-input-style" placeholder="Text Arabic">
                                            </div>
                                            <!-- End Form Group -->
                                            
                                            <!-- Form Group -->
                                            <div class="form-group">
                                            <label class="font-14 bold mb-2">{{trans('Dashboard\WelcomeSection.ar_name_h')}}</label>
                                                <input type="text" name="title_h[ar]" value="{{$welcome->getTranslation('title_h', 'ar')}}" class="theme-input-style" placeholder="Text Arabic">
                                            </div>
                                            <!-- End Form Group -->
                                            
                                             <!-- Form Group -->
                                             <div class="form-group">
                                             <label class="font-14 bold mb-2">{{trans('Dashboard\WelcomeSection.ar_name_span')}}</label>
                                                <input type="text" name="title_span[ar]" value="{{$welcome->getTranslation('title_span', 'ar')}}" class="theme-input-style" placeholder="Text Arabic">
                                            </div>
                                            <!-- End Form Group -->
                                            
                                     

       
                                            
                                

                                        </div>


                                        <div class="col-lg-6">
                                            <!-- Form Group -->
                                            <div class="form-group">
                                            <label class="font-14 bold mb-2">{{trans('Dashboard\WelcomeSection.en_name_P')}}</label>
                                                <input type="text" name="title_p[en]" value="{{$welcome->getTranslation('title_p', 'en')}}" class="theme-input-style" placeholder="Text English">
                                            </div>
                                            <!-- End Form Group -->
                                            
                                            <!-- Form Group -->
                                            <div class="form-group">
                                            <label class="font-14 bold mb-2">{{trans('Dashboard\WelcomeSection.en_name_h')}}</label>
                                                <input type="text" name="title_h[en]" value="{{$welcome->getTranslation('title_h', 'en')}}" class="theme-input-style" placeholder="Text English">
                                            </div>
                                            <!-- End Form Group -->

                                              <!-- Form Group -->
                                              <div class="form-group">
                                              <label class="font-14 bold mb-2">{{trans('Dashboard\WelcomeSection.en_name_span')}}</label>
                                                <input type="text" name="title_span[en]" value="{{$welcome->getTranslation('title_span', 'en')}}" class="theme-input-style" placeholder="Text English">
                                            </div>
                                            <!-- End Form Group -->
                                            
                     

                                       

                                        </div>

                                        
                                    </div>

                                   
                                    <input type="hidden" name="welcomeId" value="{{$welcome->id}}" >


                                    <!-- Form Row -->
                                    <div class="form-row">
                                        <div class="col-12 text-right">
                                            <button type="submit" class="btn long">{{trans('Dashboard\WelcomeSection.submitUpdate')}}</button>
                                        </div>
                                    </div>
                                    <!-- End Form Row -->
                                </form>
                                <!-- End Form -->
                            </div>
                            <!-- End Horizontal Form With Icons -->
                        </div>

@endsection