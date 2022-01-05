<!DOCTYPE html>
<html lang="zxx">

<head>
   <!-- Page Title -->
   <title>NEWS</title>

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
        <div class="row">
            <div class="col-12">
                <div class="card mb-30">
                    <div class="card-body">
                        <div class="d-sm-flex justify-content-between align-items-center">
                            <h4 class="font-20">News Table</h4>

                            <div class="d-flex flex-wrap">
                                <!-- Date Picker -->
                                <div class="dashboard-date style--six ml-20 mt-3 mt-sm-0">
                                   <span class="input-group-addon">
                                      <img src="../../assets/img/svg/calender-color.svg" alt="" class="svg">
                                    </span>

                                   <input type="text" id="default-date" value="28 October 2019"/>
                                </div>
                                <!-- End Date Picker -->


                                <!-- Dropdown Button -->
                              <div class="dropdown-button mt-3 mt-sm-0">
                                <button type="button" class="btn style--two orange" data-toggle="dropdown">Download <i class="icofont-simple-down"></i></button>

                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="#">Print</a>
                                    <a class="dropdown-item" href="#">EXL</a>
                                    <a class="dropdown-item" href="#">PDF</a>
                                </div>
                             </div>
                             <!-- End Dropdown Button -->
                            </div>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <!-- Invoice List Table -->
                        <table class="text-nowrap bg-white dh-table">
                            <thead>
                                <tr>
                                    <th>{{trans('Dashboard\news.Title news')}} <img src="/dashboard/img/svg/table-down-arrow.svg" alt="" class="svg"></th>
                                    <th>{{trans('Dashboard\news.content news')}} <img src="/dashboard/img/svg/table-down-arrow.svg" alt="" class="svg"></th>
                                    <th>{{trans('Dashboard\news.photo')}} <img src="/dashboard/img/svg/table-down-arrow.svg" alt="" class="svg"></th>
                                    <th>{{trans('Dashboard\news.time news')}} <img src="/dashboard/img/svg/table-down-arrow.svg" alt="" class="svg"></th>
                                    <th>{{trans('Dashboard\news.actions')}}</th>

                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($news as $news )


                                <tr>
                                    <td>{{$news->title}}</td>
                                    <td>{{$news->content}}</td>
                                    <td ><img src="/storage/{{$news->photo}}" style="width: 50px;height: 50px"></td>
                                    <td>{{$news->created_at->diffForhumans()}}</td>
                                    <td>

                                        <!-- Icon edit-->
                                        <div class="icon">
                                        <a href="{{route('news.edit',$news->id)}}" ><i class="icon_pencil-edit"></i></a>
                                        </div>
                                        <!-- End Icon -->
                                         <!-- Icon add home -->
                                         <div class="icon">
                                         <a href="{{route('news.show',$news->id)}}" ><i class="icon_house_alt"></i></a>
                                         </div> <!-- End Icon -->
                                          <!-- Icon -->
                                          <div class="icon">
                                          <form action="{{route('news.destroy',$news->id)}}" method="POST"  >
                                            @csrf
                                            @method('DELETE')

                                            <button type="submit"><i class="icon_trash_alt"></i></button>
                                         </form>
                                          </div>

                                        <!-- End Icon -->

                                    </td>
                                </tr>

                                @empty

                                @endforelse
                            </tbody>
                        </table>
                        <!-- End Invoice List Table -->
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
