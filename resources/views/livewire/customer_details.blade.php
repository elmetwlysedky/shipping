@if($currentStep == 1)

        <div class="col-xs-12">
            <div class="col-md-12">
                <br>
                <div class="form-row">
                    <div class="col mb-2">
                        <label for="title">{{trans('Dashboard/trans_ship.email')}}</label>
                        <input type="email" wire:model="email"  class="form-control" value="{{auth()->user()->email}}">
                        @error('email')
                        <div class="alert alert-danger">{{ $message}}</div>
                        @enderror
                    </div>
                    <div class="col mb-2">
                        <label for="title">{{trans('Dashboard/trans_ship.password')}}</label>
                        <input type="password" wire:model="password" class="form-control" >
                        <input type="hidden" wire:model="customer_id" class="form-control">
                        @error('Password')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col mb-2">
                        <label for="title">{{trans('Dashboard/trans_ship.series_id')}}</label>
                        <select class=" p-1 my-1 mr-SM-2 form-control" wire:model="series_id">
                            <option selected>{{trans('Dashboard/trans_ship.Choose')}}</option>
                            @foreach($seriess as $series)

                                <option value="{{$series->id}}">{{$series->prefix}}</option>

                            @endforeach



                        </select>
                        @error('series_id')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="form-row">
                    <div class="col mb-2">
                        <label for="title">{{trans('Dashboard/trans_ship.sender_full_name_ar')}}</label>
                        <input type="text" wire:model="sender_full_name_ar" class="form-control" >
                        @error('sender_full_name_ar')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col mb-2">
                        <label for="title">{{trans('Dashboard/trans_ship.sender_full_name_en')}}</label>
                        <input type="text" wire:model="sender_full_name_en" class="form-control">
                        @error('sender_full_name_en')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col mb-2">
                        <label for="inputCity">{{trans('Dashboard/trans_ship.sender_mother_name_ar')}}</label>
                        <input type="text" wire:model="sender_mother_name_ar" class="form-control">
                        @error('sender_mother_name_ar')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col mb-2">
                        <label for="inputCity">{{trans('Dashboard/trans_ship.sender_mother_name_en')}}</label>
                        <input type="text" wire:model="sender_mother_name_en" class="form-control">
                        @error('sender_mother_name_en')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

                </div>

                <div class="form-row">
                    <div class="col mb-2">
                        <label for="title">{{trans('Dashboard/trans_ship.sender_national_id')}}</label>
                        <input type="text" wire:model="sender_national_id" class="form-control" >
                        @error('sender_national_id')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col mb-2">
                        <label for="title">{{trans('Dashboard/trans_ship.sender_phone')}}</label>
                        <input type="text" wire:model="sender_phone" class="form-control" >
                        @error('sender_phone')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

                </div>

                <div class="form-row">

                    <div class="col mb-2">
                        <label for="title">{{trans('Dashboard/trans_ship.reciver_national_id')}}</label>
                        <input type="text" wire:model="reciver_national_id" class="form-control">
                        @error('reciver_national_id')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="col mb-2">
                        <label for="title">{{trans('Dashboard/trans_ship.reciver_phone')}}</label>
                        <input type="text" wire:model="reciver_phone" class="form-control">
                        @error('reciver_phone')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="form-row">
                    <div class="col mb-2">
                        <label for="inputState">{{trans('Dashboard/trans_ship.reciver_full_name_ar')}}</label>
                        <input type="text" wire:model="reciver_full_name_ar" class="form-control">
                        @error('reciver_full_name_ar')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col mb-2">
                        <label for="inputState">{{trans('Dashboard/trans_ship.reciver_full_name_en')}}</label>
                        <input type="text" wire:model="reciver_full_name_en" class="form-control">
                        @error('reciver_full_name_en')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class=" col mb-2">
                        <label for="inputZip">{{trans('Dashboard/trans_ship.reciver_mother_name_ar')}}</label>
                        <input type="text" wire:model="reciver_mother_name_ar" class="form-control">
                        @error('reciver_mother_name_ar')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class=" col mb-2">
                        <label for="inputZip">{{trans('Dashboard/trans_ship.reciver_mother_name_en')}}</label>
                        <input type="text" wire:model="reciver_mother_name_en" class="form-control">
                        @error('reciver_mother_name_en')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>


                </div>


                <div class="form-row">
                    <div class="col mb-2">
                        <label for="title">{{trans('Dashboard/trans_ship.address_sender')}}</label>
                        <textarea class="form-control" wire:model="address_sender" id="exampleFormControlTextarea1" rows="4"></textarea>

                        @error('address_sender')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col mb-2">
                    <label for="title">{{trans('Dashboard/trans_ship.address_reciver')}}</label>
                    <textarea class="form-control" wire:model="address_reciver" id="exampleFormControlTextarea1" rows="4"></textarea>

                    @error('address_reciver')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

                </div>
            @if ($updateMode)
                    <button class="btn btn-success btn-sm nextBtn btn-lg pull-right" wire:click="firstStepSubmit_edit"
                            type="button">{{trans('Dashboard\trans_ship.Next')}}
                    </button>




    @else
                    <button class="btn btn-success btn-sm nextBtn btn-lg pull-right" wire:click = "firstStepSubmit"
                            type="button">{{trans('Dashboard\trans_ship.Next')}}
                    </button>

             @endif
            </div>
        </div>

@endif
