@extends('Dashboard.Layouts.master')
@section('css')

@endsection

@section('content')
    <div class="main-content">
    <div class="container-fluid">
    <div class="row">

        <div class="col-xl-12">
        <!-- Card -->
            <div class="card">
            <div class="card-body">
            <div class="d-flex justify-content-start justify-content-sm-between align-items-start align-items-sm-center flex-column flex-sm-row mb-sm-n3">
                <div class="title-content mb-4 mb-sm-0">
                    <h4 class="mb-2">title-page</h4>
                    <p>Page content goes here<br><br><br></p>

                    <div class="card vertical-step-wizard">
                        <!-- Form -->
                        <form action="#">
                            <h4 class="font-20 mb-30 mt-30 mx-3 mx-sm-4">Vertical Form Wizard</h4>

                            <div id="example-vertical">
                                <h3>User Details</h3>
                                <section>
                                    <!-- User Details -->
                                    <div class="card-body pt-0">
                                        <h4 class="font-20 mb-20">User Details</h4>

                                        <div class="row">
                                            <div class="col-lg-6">
                                                <!-- Form Group -->
                                                <div class="form-group">
                                                    <label class="font-14 bold mb-2">First Name</label>
                                                    <input type="text" class="theme-input-style" placeholder="Type Your First Name" required>
                                                </div>
                                                <!-- End Form Group -->

                                                <!-- Form Group -->
                                                <div class="form-group">
                                                    <label class="font-14 bold mb-2">Email</label>
                                                    <input type="email" class="theme-input-style" placeholder="Your Email Address">
                                                </div>
                                                <!-- End Form Group -->

                                                <!-- Form Group -->
                                                <div class="form-group">
                                                    <label class="font-14 bold mb-2">Age</label>
                                                    <input type="text" class="theme-input-style style--five" placeholder="24">
                                                </div>
                                                <!-- End Form Group -->
                                            </div>

                                            <div class="col-lg-6">
                                                <!-- Form Group -->
                                                <div class="form-group">
                                                    <label class="font-14 bold mb-2">Last Name</label>
                                                    <input type="text" class="theme-input-style" placeholder="Type Your Last Name">
                                                </div>
                                                <!-- End Form Group -->

                                                <!-- Form Group -->
                                                <div class="form-group">
                                                    <label class="font-14 bold mb-2">Phone</label>
                                                    <input type="text" class="theme-input-style" placeholder="Phone">
                                                </div>
                                                <!-- End Form Group -->

                                                <!-- Form Group -->
                                                <div class="form-group">
                                                    <label class="font-14 bold mb-2">Gender</label>

                                                    <div class="d-flex align-items-center">
                                                        <div class="d-flex align-items-center ml-5">
                                                            <!-- Custom Radio -->
                                                            <div class="custom-radio ml-3">
                                                                <input type="radio" id="male3" name="gender-group3">
                                                                <label for="male3"></label>
                                                            </div>
                                                            <!-- End Custom Radio -->

                                                            <label for="male">Male</label>
                                                        </div>

                                                        <div class="d-flex align-items-center">
                                                            <!-- Custom Radio -->
                                                            <div class="custom-radio ml-3">
                                                                <input type="radio" id="female3" name="gender-group3">
                                                                <label for="female3"></label>
                                                            </div>
                                                            <!-- End Custom Radio -->

                                                            <label for="female">Female</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End Form Group -->
                                            </div>
                                        </div>

                                    </div>
                                    <!-- End User Details -->
                                </section>
                                <h3>Address</h3>
                                <section>
                                    <!-- Address-->
                                    <div class="card-body pt-0">
                                        <h4 class="font-20 mb-20">Address</h4>

                                        <div class="row">
                                            <div class="col-lg-6">
                                                <!-- Form Group -->
                                                <div class="form-group">
                                                    <label class="font-14 bold mb-2">Address 01</label>
                                                    <input type="text" class="theme-input-style" placeholder="Melbourne 3000, VIC, Australia">
                                                </div>
                                                <!-- End Form Group -->

                                                <!-- Form Group -->
                                                <div class="form-group">
                                                    <label class="font-14 bold mb-2">City</label>
                                                    <input type="text" class="theme-input-style" placeholder="Dhaka">
                                                </div>
                                                <!-- End Form Group -->

                                                <!-- Form Group -->
                                                <div class="form-group">
                                                    <label class="font-14 bold mb-2">Postcode</label>
                                                    <input type="text" class="theme-input-style" placeholder="2456">
                                                </div>
                                                <!-- End Form Group -->
                                            </div>

                                            <div class="col-lg-6">
                                                <!-- Form Group -->
                                                <div class="form-group">
                                                    <label class="font-14 bold mb-2">Address 02</label>
                                                    <input type="text" class="theme-input-style" placeholder="Melbourne 3000, VIC, Australia">
                                                </div>
                                                <!-- End Form Group -->

                                                <!-- Form Group -->
                                                <div class="form-group">
                                                    <label class="font-14 bold mb-2">State</label>
                                                    <input type="text" class="theme-input-style" placeholder="VICA">
                                                </div>
                                                <!-- End Form Group -->

                                                <!-- Form Group -->
                                                <div class="form-group">
                                                    <label class="font-14 bold mb-2">Country</label>
                                                    <select class="form-control">
                                                        <option value="bangladesh">Bangladesh</option>
                                                        <option value="india">India</option>
                                                        <option value="pakistan">Pakistan</option>
                                                        <option value="nepal">Nepal</option>
                                                        <option value="vhutan">Vhutan</option>
                                                    </select>
                                                </div>
                                                <!-- End Form Group -->
                                            </div>
                                        </div>

                                    </div>
                                    <!-- End Address -->
                                </section>
                                <h3>Review & Submit</h3>
                                <section>
                                    <!-- Review-->
                                    <div class="card-body pt-0">
                                        <h4 class="font-20 mb-20">Review</h4>

                                        <div class="row">
                                            <div class="col-lg-6">
                                                <!-- Form Group -->
                                                <div class="review-list mb-20">
                                                    <span class="font-14 bold c4 ml-4">Name</span>
                                                    <span class="black">Abrilay Khatun</span>
                                                </div>
                                                <!-- End Form Group -->

                                                <!-- Form Group -->
                                                <div class="review-list mb-20">
                                                    <span class="font-14 bold c4 ml-4">Email</span>
                                                    <span class="black">username@email.com</span>
                                                </div>
                                                <!-- End Form Group -->

                                                <!-- Form Group -->
                                                <div class="review-list mb-20">
                                                    <span class="font-14 bold c4 ml-4">Phone</span>
                                                    <span class="black">+25 6987 4521</span>
                                                </div>
                                                <!-- End Form Group -->
                                            </div>

                                            <div class="col-lg-6">
                                                <!-- Form Group -->
                                                <div class="review-list mb-20">
                                                    <span class="font-14 bold c4 ml-4">Age</span>
                                                    <span class="black">24</span>
                                                </div>
                                                <!-- End Form Group -->

                                                <!-- Form Group -->
                                                <div class="review-list mb-20">
                                                    <span class="font-14 bold c4 ml-4">Gender</span>
                                                    <span class="black">Male</span>
                                                </div>
                                                <!-- End Form Group -->

                                                <!-- Form Group -->
                                                <div class="review-list mb-20">
                                                    <span class="font-14 bold c4 ml-4">Address</span>
                                                    <span class="black">Melbourne 3000, VIC, Australia</span>
                                                </div>
                                                <!-- End Form Group -->
                                            </div>
                                        </div>

                                    </div>
                                    <!-- End Review -->
                                </section>
                                <h3>Complete</h3>
                                <section>
                                    <div class="step-done">
                                        <div class="">
                                            <span class="btn-circle done"><i class="icofont-check"></i></span>
                                            <h2 class="text_color font-30 mb-20">Done Successfully!</h2>
                                            <p>Integer ac interdum lacus. Nunc porta semper lacus a varius. Pellentesque habitant morbi tristique senectus.</p>
                                        </div>
                                    </div>
                                </section>
                            </div>

                        </form>
                        <!-- End Form -->
                    </div>


                </div>


            </div>

            </div>

            </div>
        <!-- End Card -->
        </div>
    </div>
    </div>
    </div>

    <!-- End Main Content -->
@endsection
@section('js')

@endsection
