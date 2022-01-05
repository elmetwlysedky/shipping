@extends('endUser.layouts.master')


@section('content')
    <section id="quote" class="section quote-section padding-bottom-none is-clearfix">
        <div class="container">
            <div class="columns is-variable is-2 is-multiline">
                <div class="column is-6-desktop is-12-tablet" data-aos="fade">
                    <h1 class="heading-title style-3 has-text-left"> {{ucwords(trans('front/trans_price-order.request a'))}}
                        <span class="has-text-primary">{{ucwords(trans('front/trans_price-order.quote'))}}</span>
                    </h1>
                    <p class="heading-title-bottom">Lorem ipsum dolor sit amet, consectetur adipiscing elit Nulla chronocrator accumsan, metus ultrices eleifend gravi.</p>
                    <!-- successful form message -->
                    <div class="overhang-message-content is-hidden success">
                      <span class="icon">
                        <i class="ion-md-notifications"></i>
                      </span> Thank You! Your message was sent successfully. </div>
                    <!-- error form message -->
                    <div class="overhang-message-content is-hidden error">
                      <span class="icon">
                        <i class="ion-md-notifications"></i>
                      </span> Oops! Something went wrong, we couldn't send your message. </div>
                    <!-- ajax contact form -->
                    <form accept-charset="UTF-8" action="{{route('priceOrder.store')}}" method="POST">
                        @csrf
                        <div class="field is-horizontal">
                            <div class="field-body">
                                <div class="field">
                                    <div class="control is-expanded">
                                        <input class="input" type="text" name="name" placeholder="{{ucwords(trans('front/trans_price-order.Name'))}}" required value="{{old('name')}}">
                                        @error('name')
                                        <div class="alert alert-danger my-2" role="alert">{{$message}}</div>
                                        @enderror
                                    </div>
                                </div>
                                <!-- .field -->
                                <div class="field">
                                    <div class="control is-expanded">
                                        <input class="input" type="email" name="email" placeholder="{{ucwords(trans('front/trans_price-order.Email'))}}" required="" value="{{old('email')}}">
                                        @error('email')
                                        <div class="alert alert-danger my-2" role="alert">{{$message}}</div>
                                        @enderror
                                    </div>
                                </div>
                                <!-- .field -->
                            </div>
                            <!-- .field-body -->
                        </div>
                        <div class="field is-horizontal">
                            <div class="field-body">
                                <div class="field">
                                    <div class="control is-expanded">
                                        <input class="input" type="text" name="address" placeholder="{{ucwords(trans('front/trans_price-order.Address'))}}" required="" value="{{old('address')}}">
                                        @error('address')
                                        <div class="alert alert-danger my-2" role="alert">{{$message}}</div>
                                        @enderror
                                    </div>
                                </div>
                                <!-- .field -->
                                <div class="field">
                                    <div class="control is-expanded">
                                        <div class="select">
                                            <select name="select">
                                                <option value="air">{{ucwords(trans('front/trans_price-order.Air Freight'))}}</option>
                                                <option value="land">{{ucwords(trans('front/trans_price-order.Land Transport'))}}</option>
                                                <option value="sea">{{ucwords(trans('front/trans_price-order.Ocean Freight'))}}</option>
                                                <option value="storage">{{ucwords(trans('front/trans_price-order.Warehousing'))}}</option>
                                            </select>
                                            @error('select')
                                            <div class="alert alert-danger my-2" role="alert">{{$message}}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <!-- .field -->
                                </div>
                                <!-- .field-body -->
                            </div>
                        </div>
                        <div class="field ">
                            <div class="control is-expanded">
                                <textarea class="textarea" name="message" placeholder="{{ucwords(trans('front/trans_price-order.Message'))}}" required="">{{old('message')}}</textarea>
                                @error('message')
                                <div class="alert alert-danger my-2" role="alert">{{$message}}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="field ">
                            <div class="control">
                                <button class="button" type="submit">{{ucwords(trans('front/trans_price-order.request a quote'))}}</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="column is-6-desktop is-12-tablet" data-aos="fade-up" data-aos-delay="600">
                    <br>
                    <br>
                    <br>
                    <br>
                    <img alt="Joo - Niche Multi-Purpose HTML Template" src="{{asset('assetsEndUser/assets/images/global/man.png')}}"> </div>
            </div>
        </div>
    </section>
@endsection
