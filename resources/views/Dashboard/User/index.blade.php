<!DOCTYPE html>
<html lang="zxx">

<head>
   <!-- Page Title -->
   <title>Dashmin - User</title>

   <!-- Meta Data -->
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta http-equiv="content-type" content="text/html; charset=utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta name="description" content="">
   <meta name="keywords" content="">

   @include('Dashboard.Layouts.head')

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
               <div class="row">

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