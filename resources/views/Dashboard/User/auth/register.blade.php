@extends('Dashboard.Layouts.master2')
@section('css')
    <style>
        .registerform {
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
                    <div class="col-xl-8">
                            <h4 class="mb-5 font-20">Welcome To Dashmin</h4>
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
                                <option value="" disabled selected>{{trans('Dashboard\trans_register.Choose_Register_Method')}}</option>
                                <option value="user">{{trans('Dashboard\trans_register.RegisterAsUser')}}</option>
                                <option value="admin">{{trans('Dashboard\trans_register.RegisterAsAdmin')}}</option>
                                 <option value="scanner">{{trans('Dashboard\trans_register.RegisterAsScanner')}}</option>
                                <option value="driver">{{trans('Dashboard\trans_register.RegisterAsDriver')}}</option>
                                <option value="warehouse">{{trans('Dashboard\trans_register.RegisterAsWarehouse')}}</option>

                            </select>

                            <div class="registerform" id="user">
                                <p class="mb-5 font-20">{{trans('Dashboard\trans_register.Register_as_user')}} </p>
                            <form method="POST" action="{{ route('register.user') }}">
                                @csrf
                                <div class="row">
                                    <div class="col-lg-8">
                                        <!-- Form Group -->
                                        <div class="form-group mb-20">
                                            <label for="f_name" class="mb-2 font-14 bold black">{{trans('Dashboard\trans_register.name')}}</label>

                                            {{--<x-label for="name" :value="{{trans('Dashboard\trans_register.RegisterAsUser')}}" />--}}

                                            <x-input id="name" class="block mt-1 w-full" type="text" name="name" value="" required autofocus />
                                            {{--<label for="f_name" class="mb-2 font-14 bold black">First Name</label>--}}
                                            {{--<input type="text" id="f_name" class="theme-input-style" placeholder="First Name">--}}
                                        </div>
                                        <!-- End Form Group -->
                                    </div>
                                </div>
                                       <div class="row">
                                    <div class="col-lg-8">
                                        <!-- Form Group -->
                                        <div class="form-group mb-20">
                                            <label for="l_name" class="mb-2 font-14 bold black">{{trans('Dashboard\trans_register.email')}}</label>
                                            <input type="email" name="email" class="theme-input-style" placeholder="Email">
                                        </div>
                                        <!-- End Form Group -->
                                    </div>
                                    </div>


                                        <div class="row">
                                    <div class="col-lg-8">
                                        <!-- Form Group -->
                                        <div class="form-group mb-20">
                                            <label for="password" class="mb-2 font-14 bold black">{{trans('Dashboard\trans_register.password')}}</label>


                                            <x-input id="password" class="block mt-1 w-full"
                                                     type="password"
                                                     name="password"
                                                     required autocomplete="new-password" />
                                        </div>
                                        <!-- End Form Group -->
                                    </div>
                                        </div>
                                        <div class="row">
                                       <div class="col-lg-8">
                                        <!-- Form Group -->
                                        <div class="form-group mb-20">
                                            <label for="r_password" class="mb-2 font-14 bold black">{{trans('Dashboard\trans_register.retype_password')}}</label>
                                            {{--<input type="password" id="r_password" class="theme-input-style" placeholder="Password">--}}

                                            {{--<x-label for="password_confirmation" :value="__('Confirm Password')" />--}}

                                            <x-input id="password_confirmation" class="block mt-1 w-full"
                                                     type="password"
                                                     name="password_confirmation" required />
                                        </div>
                                        <!-- End Form Group -->
                                    </div>

                                    </div>
                                     <div class="d-flex align-items-center pt-4">
                                    {{--<button type="submit" class="btn long ml-20">Register</button>--}}
                                    {{--<span class="font-12 d-block"><a href="login.html" class="bold">Log In</a>,If you already have an account.</span>--}}


                                    <div class="flex items-center justify-end mt-4">
                                        <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                                            {{ __('Already registered?') }}
                                        </a>

                                        <x-button class="ml-4">
                                            {{ trans('Dashboard\trans_register.Register')}}
                                        </x-button>
                                    </div>
                                    </div>
                            </form>


                            </div>

                            <div class="registerform" id="admin">
                                <p class="mb-5 font-20">{{trans('Dashboard\trans_register.Register_as_admin')}}</p>
                                <form method="POST" action="{{ route('register.admin') }}">
                                    @csrf
                                    <div class="row">
                                        <div class="col-lg-8">
                                            <!-- Form Group -->
                                            <div class="form-group mb-20">
                                                <label for="f_name" class="mb-2 font-14 bold black">{{trans('Dashboard\trans_register.name')}}</label>

                                                {{--<x-label for="name" :value="{{trans('Dashboard\trans_register.RegisterAsUser')}}" />--}}

                                                <x-input id="name" class="block mt-1 w-full" type="text" name="name" value="" required autofocus />
                                                {{--<label for="f_name" class="mb-2 font-14 bold black">First Name</label>--}}
                                                {{--<input type="text" id="f_name" class="theme-input-style" placeholder="First Name">--}}
                                            </div>
                                            <!-- End Form Group -->
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-8">
                                            <!-- Form Group -->
                                            <div class="form-group mb-20">
                                                <label for="l_name" class="mb-2 font-14 bold black">{{trans('Dashboard\trans_register.email')}}</label>
                                                <input type="email" name="email" class="theme-input-style" placeholder="Email">
                                            </div>
                                            <!-- End Form Group -->
                                        </div>
                                    </div>


                                    <div class="row">
                                        <div class="col-lg-8">
                                            <!-- Form Group -->
                                            <div class="form-group mb-20">
                                                <label for="password" class="mb-2 font-14 bold black">{{trans('Dashboard\trans_register.password')}}</label>


                                                <x-input id="password" class="block mt-1 w-full"
                                                         type="password"
                                                         name="password"
                                                         required autocomplete="new-password" />
                                            </div>
                                            <!-- End Form Group -->
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-8">
                                            <!-- Form Group -->
                                            <div class="form-group mb-20">
                                                <label for="r_password" class="mb-2 font-14 bold black">{{trans('Dashboard\trans_register.retype_password')}}</label>
                                                {{--<input type="password" id="r_password" class="theme-input-style" placeholder="Password">--}}

                                                {{--<x-label for="password_confirmation" :value="__('Confirm Password')" />--}}

                                                <x-input id="password_confirmation" class="block mt-1 w-full"
                                                         type="password"
                                                         name="password_confirmation" required />
                                            </div>
                                            <!-- End Form Group -->
                                        </div>

                                    </div>
                                    <div class="d-flex align-items-center pt-4">
                                        {{--<button type="submit" class="btn long ml-20">Register</button>--}}
                                        {{--<span class="font-12 d-block"><a href="login.html" class="bold">Log In</a>,If you already have an account.</span>--}}


                                        <div class="flex items-center justify-end mt-4">
                                            <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                                               {{ trans('Dashboard\trans_register.Already_registered')}}?
                                            </a>

                                            <x-button class="ml-4">
                                                {{ trans('Dashboard\trans_register.Register')}}
                                            </x-button>
                                        </div>
                                    </div>
                                </form>

                            </div>

                           <div class="registerform" id="scanner">
                            <p class="mb-5 font-20">{{trans('Dashboard\trans_register.RegisterAsScanner')}}</p>
                            <form method="POST" action="{{ route('register.scanner') }}">
                                @csrf
                                <div class="row">
                                    <div class="col-lg-8">
                                        <!-- Form Group -->
                                        <div class="form-group mb-20">
                                            <label for="f_name" class="mb-2 font-14 bold black">{{trans('Dashboard\trans_register.name')}}</label>

                                            {{--<x-label for="name" :value="{{trans('Dashboard\trans_register.RegisterAsUser')}}" />--}}

                                            <x-input id="name" class="block mt-1 w-full" type="text" name="name" value="" required autofocus />
                                            {{--<label for="f_name" class="mb-2 font-14 bold black">First Name</label>--}}
                                            {{--<input type="text" id="f_name" class="theme-input-style" placeholder="First Name">--}}
                                        </div>
                                        <!-- End Form Group -->
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-8">
                                        <!-- Form Group -->
                                        <div class="form-group mb-20">
                                            <label for="l_name" class="mb-2 font-14 bold black">{{trans('Dashboard\trans_register.email')}}</label>
                                            <input type="email" name="email" class="theme-input-style" placeholder="Email">
                                        </div>
                                        <!-- End Form Group -->
                                    </div>
                                </div>


                                <div class="row">
                                    <div class="col-lg-8">
                                        <!-- Form Group -->
                                        <div class="form-group mb-20">
                                            <label for="password" class="mb-2 font-14 bold black">{{trans('Dashboard\trans_register.password')}}</label>


                                            <x-input id="password" class="block mt-1 w-full"
                                                     type="password"
                                                     name="password"
                                                     required autocomplete="new-password" />
                                        </div>
                                        <!-- End Form Group -->
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-8">
                                        <!-- Form Group -->
                                        <div class="form-group mb-20">
                                            <label for="r_password" class="mb-2 font-14 bold black">{{trans('Dashboard\trans_register.retype_password')}}</label>
                                            {{--<input type="password" id="r_password" class="theme-input-style" placeholder="Password">--}}

                                            {{--<x-label for="password_confirmation" :value="__('Confirm Password')" />--}}

                                            <x-input id="password_confirmation" class="block mt-1 w-full"
                                                     type="password"
                                                     name="password_confirmation" required />
                                        </div>
                                        <!-- End Form Group -->
                                    </div>

                                </div>
                                <div class="d-flex align-items-center pt-4">
                                    {{--<button type="submit" class="btn long ml-20">Register</button>--}}
                                    {{--<span class="font-12 d-block"><a href="login.html" class="bold">Log In</a>,If you already have an account.</span>--}}


                                    <div class="flex items-center justify-end mt-4">
                                        <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                                       {{trans('Dashboard\trans_register.Already_registered')}}?
                                        </a>

                                        <x-button class="ml-4">
                                           {{trans('Dashboard\trans_register.Register')}}
                                        </x-button>
                                    </div>
                                </div>
                            </form>



                        </div>

                        <div class="registerform" id="driver">
                            <p class="mb-5 font-20">{{trans('Dashboard\trans_register.RegisterAsDriver')}} </p>
                            <form method="POST" action="{{ route('register.driver') }}">
                                @csrf
                                <div class="row">
                                    <div class="col-lg-8">
                                        <!-- Form Group -->
                                        <div class="form-group mb-20">
                                            <label for="f_name" class="mb-2 font-14 bold black">{{trans('Dashboard\trans_register.name')}}</label>

                                            {{--<x-label for="name" :value="{{trans('Dashboard\trans_register.RegisterAsUser')}}" />--}}

                                            <x-input id="name" class="block mt-1 w-full" type="text" name="name" value="" required autofocus />
                                            {{--<label for="f_name" class="mb-2 font-14 bold black">First Name</label>--}}
                                            {{--<input type="text" id="f_name" class="theme-input-style" placeholder="First Name">--}}
                                        </div>
                                        <!-- End Form Group -->
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-8">
                                        <!-- Form Group -->
                                        <div class="form-group mb-20">
                                            <label for="l_name" class="mb-2 font-14 bold black">{{trans('Dashboard\trans_register.email')}}</label>
                                            <input type="email" name="email" class="theme-input-style" placeholder="Email">
                                        </div>
                                        <!-- End Form Group -->
                                    </div>
                                </div>


                                <div class="row">
                                    <div class="col-lg-8">
                                        <!-- Form Group -->
                                        <div class="form-group mb-20">
                                            <label for="password" class="mb-2 font-14 bold black">{{trans('Dashboard\trans_register.password')}}</label>


                                            <x-input id="password" class="block mt-1 w-full"
                                                     type="password"
                                                     name="password"
                                                     required autocomplete="new-password" />
                                        </div>
                                        <!-- End Form Group -->
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-8">
                                        <!-- Form Group -->
                                        <div class="form-group mb-20">
                                            <label for="r_password" class="mb-2 font-14 bold black">{{trans('Dashboard\trans_register.retype_password')}}</label>
                                            {{--<input type="password" id="r_password" class="theme-input-style" placeholder="Password">--}}

                                            {{--<x-label for="password_confirmation" :value="__('Confirm Password')" />--}}

                                            <x-input id="password_confirmation" class="block mt-1 w-full"
                                                     type="password"
                                                     name="password_confirmation" required />
                                        </div>
                                        <!-- End Form Group -->
                                    </div>

                                </div>
                                <div class="d-flex align-items-center pt-4">
                                    {{--<button type="submit" class="btn long ml-20">Register</button>--}}
                                    {{--<span class="font-12 d-block"><a href="login.html" class="bold">Log In</a>,If you already have an account.</span>--}}


                                    <div class="flex items-center justify-end mt-4">
                                        <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                                         {{trans('Dashboard\trans_register.Already_registered')}}?
                                        </a>

                                        <x-button class="ml-4">
                                        {{trans('Dashboard\trans_register.Register')}}
                                        </x-button>
                                    </div>
                                </div>
                            </form>


                        </div>

                        <div class="registerform" id="warehouse">
                            <p class="mb-5 font-20">{{trans('Dashboard\trans_register.RegisterAsWarehouse')}} </p>
                            <form method="POST" action="{{ route('register.warehouse') }}">
                                @csrf
                                <div class="row">
                                    <div class="col-lg-8">
                                        <!-- Form Group -->
                                        <div class="form-group mb-20">
                                            <label for="f_name" class="mb-2 font-14 bold black">{{trans('Dashboard\trans_register.name')}}</label>

                                            {{--<x-label for="name" :value="{{trans('Dashboard\trans_register.RegisterAsUser')}}" />--}}

                                            <x-input id="name" class="block mt-1 w-full" type="text" name="name" value="" required autofocus />
                                            {{--<label for="f_name" class="mb-2 font-14 bold black">First Name</label>--}}
                                            {{--<input type="text" id="f_name" class="theme-input-style" placeholder="First Name">--}}
                                        </div>
                                        <!-- End Form Group -->
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-8">
                                        <!-- Form Group -->
                                        <div class="form-group mb-20">
                                            <label for="l_name" class="mb-2 font-14 bold black">{{trans('Dashboard\trans_register.email')}}</label>
                                            <input type="email" name="email" class="theme-input-style" placeholder="Email">
                                        </div>
                                        <!-- End Form Group -->
                                    </div>
                                </div>


                                <div class="row">
                                    <div class="col-lg-8">
                                        <!-- Form Group -->
                                        <div class="form-group mb-20">
                                            <label for="password" class="mb-2 font-14 bold black">{{trans('Dashboard\trans_register.password')}}</label>


                                            <x-input id="password" class="block mt-1 w-full"
                                                     type="password"
                                                     name="password"
                                                     required autocomplete="new-password" />
                                        </div>
                                        <!-- End Form Group -->
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-8">
                                        <!-- Form Group -->
                                        <div class="form-group mb-20">
                                            <label for="r_password" class="mb-2 font-14 bold black">{{trans('Dashboard\trans_register.retype_password')}}</label>
                                            {{--<input type="password" id="r_password" class="theme-input-style" placeholder="Password">--}}

                                            {{--<x-label for="password_confirmation" :value="__('Confirm Password')" />--}}

                                            <x-input id="password_confirmation" class="block mt-1 w-full"
                                                     type="password"
                                                     name="password_confirmation" required />
                                        </div>
                                        <!-- End Form Group -->
                                    </div>

                                </div>
                                <div class="d-flex align-items-center pt-4">
                                    {{--<button type="submit" class="btn long ml-20">Register</button>--}}
                                    {{--<span class="font-12 d-block"><a href="login.html" class="bold">Log In</a>,If you already have an account.</span>--}}


                                    <div class="flex items-center justify-end mt-4">
                                        <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                                         {{trans('Dashboard\trans_register.Already_registered')}}?
                                        </a>

                                        <x-button class="ml-4">
                                            {{trans('Dashboard\trans_register.Register')}}
                                        </x-button>
                                    </div>
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
            $('.registerform').each(function () {
                MyId === $(this).attr('id') ? $(this).show() : $(this).hide();
            });


        });
    </script>

@endsection