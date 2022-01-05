@extends('endUser.layouts.master')


@section('content')



    <!-- import content layouts and modules -->
    <div id="content-main-wrap" class="is-clearfix">
        <div id="content-area" class="site-content-area">
            <div id="content-area-inner" class="site-content-area-inner">
                <!-- get-in-touch section -->
                <section class="section get-in-touch contact-page is-clearfix">
                    <div class="container">
                        <h1 class="heading-title style-1">Welcome to office</h1>
                        <br>
                        <br>
                        <!-- .columns -->
                        <br> </div>
                </section>
                <!-- .get-in-touch contact-page -->
                <!-- contact-form section -->
                <section class="section contact-form is-clearfix">
                    <div class="container">
                        <h1 class="heading-title style-1">Get in touch</h1>
                        <br>
                        <br>
                        <!-- successful form message -->
{{--                        <div class="overhang-message-content is-hidden success">--}}
{{--                  <span class="icon">--}}
{{--                    <i class="ion-md-notifications"></i>--}}
{{--                  </span> Thank You! Your message was sent successfully. </div>--}}
{{--                        <!-- error form message -->--}}
{{--                        <div class="overhang-message-content is-hidden error">--}}
{{--                  <span class="icon">--}}
{{--                    <i class="ion-md-notifications"></i>--}}
{{--                  </span> Oops! Something went wrong, we couldn't send your message. </div>--}}
                        <!-- ajax contact form -->
                        <form accept-charset="UTF-8"  action="{{route('endUser.contact.store')}}" method="POST">
                            @csrf
                            <div class="field is-horizontal">
                                <div class="field-body">
                                    <div class="field">
                                        <div class="control is-expanded">
                                            <input class="input" type="text" name="name" placeholder="Your Name" required> </div>
                                    </div>
                                    <!-- .field -->
                                    <div class="field">
                                        <div class="control is-expanded">
                                            <input class="input" type="text" name="subject" placeholder="Your Subject" required> </div>
                                    </div>
                                    <!-- .field -->
                                </div>
                                <!-- .field-body -->
                            </div>
                            <!-- .field -->
                            <div class="field is-horizontal">
                                <div class="field-body">
                                    <div class="field">
                                        <div class="control is-expanded">
                                            <input class="input" type="tel" name="phone" placeholder="Your Phone" required> </div>
                                    </div>
                                    <!-- .field -->
                                    <div class="field">
                                        <div class="control is-expanded">
                                            <input class="input" type="email" name="email" placeholder="Your Email" required> </div>
                                    </div>
                                    <!-- .field -->
                                </div>
                                <!-- .field-body -->
                            </div>
                            <!-- .field -->
                            <div class="field ">
                                <div class="control is-expanded">
                                    <textarea class="textarea" name="message" placeholder="Your Message" required></textarea>
                                </div>
                            </div>
                            <!-- .field -->
                            <div class="field ">
                                <div class="control has-text-centered">
                                    <button class="button" type="submit">Send message</button>
                                </div>
                            </div>
                            <!-- .field -->
                        </form>
                    </div>
                </section>
                <!-- .contact-form -->
                <!-- google-maps section -->
                <section class="hero google-maps is-clearfix">
                    <div>
                        <div>
                            <iframe src="https://snazzymaps.com/embed/129396" width="100%" height="500px" style="border:none;"></iframe>
                        </div>
                    </div>
                </section>
                <!-- .google-maps -->
            </div>
            <!-- #content-area-inner -->
        </div>
        <!-- #content-area -->
    </div>
    <!-- #content-main-wrap -->


@endsection
