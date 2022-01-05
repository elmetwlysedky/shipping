<!DOCTYPE html>
<html lang="zxx">

<head>
   <!-- Page Title -->
   <title>{{trans('Dashboard')}} {{$conv->en_title}}</title>

   <!-- Meta Data -->
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta http-equiv="content-type" content="text/html; charset=utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta name="description" content="">
   <meta name="keywords" content="">

   @include('Dashboard.Layouts.head')
   <link rel="stylesheet" href="/dashboard/fonts/elegant_icons/elegant-icons.css">
</head>

<body>

     <!-- Offcanval Overlay -->
   <div class="offcanvas-overlay"></div>
   <!-- Offcanval Overlay -->

   <!-- Wrapper -->
   <div class="wrapper">

      <!-- Header -->
      @include('Dashboard.Layouts.main-header')
      <!-- End Header -->

      <!-- Main Wrapper -->
      <div class="main-wrapper">
         <!-- Sidebar -->
       @include('Dashboard.Layouts.main-sidebar')
         <!-- End Sidebar -->




  <!-- Main Content -->
  <div class="main-content">
    <div class="container-fluid">


        <div class="form-element py-30 mb-30">
            <h4 class="font-20 mb-4">Default Form Validation</h4>

            <!-- Form -->
            <form class="form-validate-jquery" action="{{route('convention.update',[$conv->id])}}" method="POST" enctype="multipart/form-data">
                @method('PUT')
                @csrf

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
                <!-- Form Row -->
                <div class="form-row mb-20">
                    <label class="font-14 bold">name at english</label>
                    <input type="text" name="title[ar]" class="theme-input-style is-invalid"
                           value="{{$conv->getTranslation('title', 'ar')}}">

                </div>


                <div class="form-row mb-20">
                    <label class="font-14 bold">name at english</label>
                    <input type="text" name="title[en]" class="theme-input-style is-invalid" value="{{$conv->getTranslation('title', 'en')}}">

                </div>
                <!-- End Form Row -->

                <div class="form-row mb-20">
                    <label class="font-14 bold">company</label>
                    <input type="text" name="company" class="theme-input-style is-invalid" value="{{$conv->company}}" >

                </div>

                <div class="form-row mb-20">
                    <label class="font-14 bold">customer</label>
                    <input type="text" name="customer" class="theme-input-style is-invalid" value="{{$conv->customer}}">

                </div>
                <!-- Form Row -->

                <div class="form-row mb-20">
                    <label class="font-14 bold">convention content at english</label>
                    <textarea type="long_text" name="content[en]" class="theme-input-style is-valid" >
                        {{$conv->getTranslation('content', 'en')}}</textarea>

                </div>

                <div class="form-row mb-20">
                    <label class="font-14 bold">convention content at arabic</label>
                    <textarea type="text" name="content[ar]" class="theme-input-style is-valid" >
                        {{$conv->getTranslation('content', 'ar')}}</textarea>

                </div>
                <!-- End Form Row -->
                <div class="form-row mb-5">
                    <label class="font-14 bold">photo</label>
                    <input type="file" name="photo" class="theme-input-style " value="{{$conv->photo}}">

                </div>
                <!-- Form Row -->
                <div class="form-row">
                    <div class="col-12">
                        <button type="submit" class="btn long">update</button>
                    </div>
                </div>
                <!-- End Form Row -->
            </form>
            <!-- End Form -->
        </div>

    </div>
 </div>
 <!-- End Main Content -->
</div>
<!-- End Main Wrapper -->

<!-- Footer -->
@include('Dashboard.Layouts.footer')
<!-- End Footer -->
</div>
<!-- End wrapper -->
@include('Dashboard.Layouts.footerjs')
</body>

</html>

 <!-- Base Horizontal Form -->

<!-- End Horizontal Form -->
