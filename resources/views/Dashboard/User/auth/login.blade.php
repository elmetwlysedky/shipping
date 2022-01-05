@extends('Dashboard.Layouts.master2')
@section('css')
    <style>
        .loginform {
            display: none;
        }
        .card{
            margin: auto;
        }
    </style>
@endsection
@section('content')

    <div class="mn-vh-100 d-flex align-items-center">
        <div class="container">
            <!-- Card -->
            <div class="card justify-content-center auth-card">
                <div class="row justify-content-center">
                    <div class="col-xl-7 col-lg-9">
                        <h4 class="mb-5 font-20">{{trans('Dashboard\trans_login.welcom_back')}}</h4>

                        {{--validation--}}


                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        {{--end validation--}}
                        <select class="browser-default custom-select custom-select-lg mb-xl-4" id="selectChooser">
                            <option value="" disabled selected>{{trans('Dashboard\trans_login.Choose_Login_Method')}}</option>
                            <option value="user">{{trans('Dashboard\trans_login.loginAsUser')}}</option>
                            <option value="admin">{{trans('Dashboard\trans_login.loginAsAdmin')}}</option>
                            <option value="driver">{{trans('Dashboard\trans_login.loginAsDriver')}}</option>
                            <option value="scanner">{{trans('Dashboard\trans_login.loginAsScanner')}}</option>
                            <option value="warehouse">{{trans('Dashboard\trans_login.loginAsWarehouse')}}</option>

                        </select>

                        <div class="loginform" id="user">
                            <p class="mb-5 font-20">Login As User </p>
                            <form method="POST" action="{{ route('login.user') }}">
                            @csrf
                            <!-- Form Group -->
                                <div class="form-group mb-20">
                                    <label for="email" class="mb-2 font-14 bold black">{{trans('Dashboard\trans_login.Email_Address')}}</label>
                                    <input type="email" id="email" class="theme-input-style"
                                           name="email" :value="old('email')" required autofocus>

                                </div>
                                <!-- End Form Group -->

                                <!-- Form Group -->
                                <div class="form-group mb-20">
                                    <label for="password" class="mb-2 font-14 bold black">{{trans('Dashboard\trans_login.password')}}</label>
                                    <input type="password" id="password" class="theme-input-style" name="password"
                                           required autocomplete="current-password" placeholder="********">


                                </div>
                                <!-- End Form Group -->

                                <div class="d-flex justify-content-between mb-20">
                                    <div class="d-flex align-items-center">
                                        <!-- Custom Checkbox -->
                                        <label class="custom-checkbox position-relative ml-2">
                                            <input id="remember_me" type="checkbox" name="remember">
                                            <span class="checkmark"></span>
                                        </label>
                                        <!-- End Custom Checkbox -->

                                        <label for="checkbox" class="font-14">{{trans('Dashboard\trans_login.Remember_Me')}}</label>
                                    </div>

                                    <a href="forget-pass.html" class="font-12 text_color">{{trans('Dashboard\trans_login.Forgot_Password')}}?</a>
                                    @if (Route::has('password.request'))
                                        <a class="underline text-sm text-gray-600 hover:text-gray-900"
                                           href="{{ route('password.request') }}">
                                            {{--{{ __('Forgot your password?') }}--}}
                                            {{trans('Dashboard\trans_login.Forgot_Password')}}?
                                        </a>
                                    @endif
                                </div>



                                <div class="d-flex align-items-center">
                                    <button type="submit" class="btn long ml-20">{{trans('Dashboard\trans_login.LogIn')}}</button>

                                    <span class="font-12 d-block m-5"><a href="register.blade.php" class="bold">{{trans('Dashboard\trans_login.SignUp')}}</a>,{{trans('Dashboard\trans_login.If_you_have_no_account')}}.</span>
                                </div>
                            </form>
                        </div>


                        <div class="loginform" id="admin">
                            <p class="mb-5 font-20">{{trans('Dashboard\trans_login.LoginAsAdmin')}} </p>
                            <form method="POST" action="{{ route('login.admin') }}">
                            @csrf
                            <!-- Form Group -->
                                <div class="form-group mb-20">
                                    <label for="email" class="mb-2 font-14 bold black">{{trans('Dashboard\trans_login.Email_Address')}}</label>
                                    <input type="email" id="email" class="theme-input-style"
                                           name="email" :value="old('email')" required autofocus>

                                </div>
                                <!-- End Form Group -->

                                <!-- Form Group -->
                                <div class="form-group mb-20">
                                    <label for="password" class="mb-2 font-14 bold black">{{trans('Dashboard\trans_login.password')}}</label>
                                    <input type="password" id="password" class="theme-input-style" name="password"
                                           required autocomplete="current-password" >


                                </div>
                                <!-- End Form Group -->

                                <div class="d-flex justify-content-between mb-20">
                                    <div class="d-flex align-items-center">
                                        <!-- Custom Checkbox -->
                                        <label class="custom-checkbox position-relative ml-2">
                                            <input id="remember_me" type="checkbox" name="remember">
                                            <span class="checkmark"></span>
                                        </label>
                                        <!-- End Custom Checkbox -->

                                        <label for="checkbox" class="font-14"> {{trans('Dashboard\trans_login.Remember_Me')}}</label>
                                    </div>

                                    <a href="forget-pass.html" class="font-12 text_color">{{trans('Dashboard\trans_login.Forgot_Password')}}?</a>
                                    @if (Route::has('password.request'))
                                        <a class="underline text-sm text-gray-600 hover:text-gray-900"
                                           href="{{ route('password.request') }}">
                                           {{trans('Dashboard\trans_login.Forgot_Password')}}?
                                        </a>
                                    @endif
                                </div>



                                <div class="d-flex align-items-center">
                                    <button type="submit" class="btn long ml-20">{{trans('Dashboard\trans_login.LogIn')}}</button>
                                    <span class="font-12 d-block m-5"><a href="register.blade.php" class="bold">{{trans('Dashboard\trans_login.SignUp')}}</a>,{{trans('Dashboard\trans_login.If_you_have_no_account')}}.</span>
                                </div>
                            </form>
                        </div>


                        <div class="loginform" id="driver">
                            <p class="mb-5 font-20"> {{trans('Dashboard\trans_login.LoginAsDriver')}} </p>
                            <form method="POST" action="{{ route('login.driver') }}">
                            @csrf
                            <!-- Form Group -->
                                <div class="form-group mb-20">
                                    <label for="email" class="mb-2 font-14 bold black">{{trans('Dashboard\trans_login.Email_Address')}}</label>
                                    <input type="email" id="email" class="theme-input-style"
                                           name="email" :value="driver@gmail.com" required autofocus>

                                </div>
                                <!-- End Form Group -->

                                <!-- Form Group -->
                                <div class="form-group mb-20">
                                    <label for="password" class="mb-2 font-14 bold black">{{trans('Dashboard\trans_login.password')}}</label>
                                    <input type="password" id="password" class="theme-input-style" name="password"
                                           required autocomplete="12345678" placeholder="">


                                </div>
                                <!-- End Form Group -->

                                <div class="d-flex justify-content-between mb-20">
                                    <div class="d-flex align-items-center">
                                        <!-- Custom Checkbox -->
                                        <label class="custom-checkbox position-relative ml-2">
                                            <input id="remember_me" type="checkbox" name="remember">
                                            <span class="checkmark"></span>
                                        </label>
                                        <!-- End Custom Checkbox -->

                                        <label for="checkbox" class="font-14">{{trans('Dashboard\trans_login.Remember_Me')}}</label>
                                    </div>

                                    <a href="forget-pass.html" class="font-12 text_color">{{trans('Dashboard\trans_login.Forgot_Password')}}?</a>
                                    @if (Route::has('password.request'))
                                        <a class="underline text-sm text-gray-600 hover:text-gray-900"
                                           href="{{ route('password.request') }}">
                                            {{--{{ __('Forgot your password?') }}--}}
                                            {{trans('Dashboard\trans_login.Forgot_Password')}}?
                                        </a>
                                    @endif
                                </div>



                                <div class="d-flex align-items-center">
                                    <button type="submit" class="btn long ml-20">{{trans('Dashboard\trans_login.LogIn')}}</button>
                                    <span class="font-12 d-block m-5"><a href="register.blade.php" class="bold">{{trans('Dashboard\trans_login.SignUp')}}</a>,{{trans('Dashboard\trans_login.If_you_have_no_account')}}.</span>
                                </div>
                            </form>
                        </div>


                        <div class="loginform" id="scanner">
                            <p class="mb-5 font-20">{{trans('Dashboard\trans_login.LoginAsScanner')}}</p>
                            <form method="POST" action="{{ route('login.scanner') }}">
                            @csrf
                            <!-- Form Group -->
                                <div class="form-group mb-20">
                                    <label for="email" class="mb-2 font-14 bold black">{{trans('Dashboard\trans_login.Email_Address')}}</label>
                                    <input type="email" id="email" class="theme-input-style"
                                           name="email" :value="old('email')" required autofocus>

                                </div>
                                <!-- End Form Group -->

                                <!-- Form Group -->
                                <div class="form-group mb-20">
                                    <label for="password" class="mb-2 font-14 bold black">{{trans('Dashboard\trans_login.password')}}</label>
                                    <input type="password" id="password" class="theme-input-style" name="password"
                                           required autocomplete="current-password" >


                                </div>
                                <!-- End Form Group -->

                                <div class="d-flex justify-content-between mb-20">
                                    <div class="d-flex align-items-center">
                                        <!-- Custom Checkbox -->
                                        <label class="custom-checkbox position-relative ml-2">
                                            <input id="remember_me" type="checkbox" name="remember">
                                            <span class="checkmark"></span>
                                        </label>
                                        <!-- End Custom Checkbox -->

                                        <label for="checkbox" class="font-14"> {{trans('Dashboard\trans_login.Remember_Me')}}</label>
                                    </div>

                                    <a href="forget-pass.html" class="font-12 text_color">{{trans('Dashboard\trans_login.Forgot_Password')}}?</a>
                                    @if (Route::has('password.request'))
                                        <a class="underline text-sm text-gray-600 hover:text-gray-900"
                                           href="{{ route('password.request') }}">
                                            {{trans('Dashboard\trans_login.Forgot_Password')}}?
                                        </a>
                                    @endif
                                </div>



                                <div class="d-flex align-items-center">
                                    <button type="submit" class="btn long ml-20">{{trans('Dashboard\trans_login.LogIn')}}</button>
                                    <span class="font-12 d-block m-5"><a href="register.blade.php" class="bold">{{trans('Dashboard\trans_login.SignUp')}}</a>,{{trans('Dashboard\trans_login.If_you_have_no_account')}}.</span>
                                </div>
                            </form>
                        </div>

                        <div class="loginform" id="warehouse">
                            <p class="mb-5 font-20">{{trans('Dashboard\trans_login.LoginAsWarehouse')}} </p>
                            <form method="POST" action="{{ route('login.warehouse') }}">
                            @csrf
                            <!-- Form Group -->
                                <div class="form-group mb-20">
                                    <label for="email" class="mb-2 font-14 bold black">{{trans('Dashboard\trans_login.Email_Address')}}</label>
                                    <input type="email" id="email" class="theme-input-style"
                                           name="email" :value="old('email')" required autofocus>

                                </div>
                                <!-- End Form Group -->

                                <!-- Form Group -->
                                <div class="form-group mb-20">
                                    <label for="password" class="mb-2 font-14 bold black">{{trans('Dashboard\trans_login.password')}}</label>
                                    <input type="password" id="password" class="theme-input-style" name="password"
                                           required autocomplete="current-password" >


                                </div>
                                <!-- End Form Group -->

                                <div class="d-flex justify-content-between mb-20">
                                    <div class="d-flex align-items-center">
                                        <!-- Custom Checkbox -->
                                        <label class="custom-checkbox position-relative ml-2">
                                            <input id="remember_me" type="checkbox" name="remember">
                                            <span class="checkmark"></span>
                                        </label>
                                        <!-- End Custom Checkbox -->

                                        <label for="checkbox" class="font-14"> {{trans('Dashboard\trans_login.Remember_Me')}}</label>
                                    </div>

                                    <a href="forget-pass.html" class="font-12 text_color">{{trans('Dashboard\trans_login.Forgot_Password')}}?</a>
                                    @if (Route::has('password.request'))
                                        <a class="underline text-sm text-gray-600 hover:text-gray-900"
                                           href="{{ route('password.request') }}">
                                            {{trans('Dashboard\trans_login.Forgot_Password')}}?
                                        </a>
                                    @endif
                                </div>



                                <div class="d-flex align-items-center">
                                    <button type="submit" class="btn long ml-20">{{trans('Dashboard\trans_login.LogIn')}}</button>
                                    <span class="font-12 d-block m-5"><a href="register.blade.php" class="bold">{{trans('Dashboard\trans_login.SignUp')}}</a>,{{trans('Dashboard\trans_login.If_you_have_no_account')}}.</span>
                                </div>
                            </form>
                        </div>



                    </div>
                </div>
            </div>
            <!-- End Card -->
        </div>
    </div>


@endsection
@section('js')
    <script>

        $('#selectChooser').change(function () {
            var MyId = $(this).val();
            $('.loginform').each(function () {
                MyId === $(this).attr('id') ? $(this).show() : $(this).hide();
            });


        });
    </script>

@endsection