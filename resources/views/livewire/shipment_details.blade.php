@if($currentStep == 2)
        <div class="col-xs-12">
            <div class="col-md-12">
                <br>

                <div class="form-row">
                    <div class="col col-6 mb-2">
                        <label for="title">{{trans('Dashboard/trans_ship.shipment_name_ar')}}</label>
                        <input type="text" wire:model="shipment_name_ar" class="form-control">
                        <input type="hidden" wire:model="customer_id" class="form-control">
                        @error('shipment_name_ar')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="col col-6 mb-2">
                        <label for="title">{{trans('Dashboard/trans_ship.shipment_name_en')}}</label>
                        <input type="text" wire:model="shipment_name_en" class="form-control">
                        @error('shipment_name_en')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="form-row">
                    <div class="col col-4 mb-2">
                        <label for="title">{{trans('Dashboard\trans_ship.type_id')}}</label>
                        <select class=" p-1 my-1 mr-sm-2 form-control" wire:model="type_id">
                                <option selected>{{trans('Dashboard\trans_ship.Choose')}}</option>
                                @foreach($material_types as $type)
                                    <option value="{{$type->id}}">{{$type->material_type}}</option>
                                @endforeach
                        </select>
                            @error('type_id')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                    </div>


                    <div class="col col-4 mb-2">
                        <label for="title">{{trans('Dashboard/trans_ship.whieght')}}</label>
                        <input type="text" wire:model="whieght" class="form-control">
                        @error('whieght')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="col col-4 mb-2">
                        <label for="title">{{trans('Dashboard/trans_ship.unit_id')}}</label>
                        <select class="my-1 mr-sm-2 form-control" wire:model="unit_id">
                                <option selected>{{trans('Dashboard\trans_ship.Choose')}}...</option>

                                @foreach($units_types as $unit)
                                    <option value="{{$unit->id}}">{{$unit->unit_name}}</option>
                                @endforeach
                            </select>
                            @error('unit_id')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                    </div>
                </div>


                <div class="form-row">
                    <div class="col col-2 mb-2">
                        <label for="title">{{trans('Dashboard\trans_ship.amount')}}</label>
                        <input type="text" wire:model="amount" class="form-control">
                        @error('amount')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="col col-2 mb-2">
                        <label for="title">{{trans('Dashboard\trans_ship.price')}}</label>
                        <input type="text" wire:model="price" class="form-control" disabled="disabled">

                        @error('price')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="col col-2 mb-2">
                        <label for="title">{{trans('Dashboard\trans_ship.currency_id')}}</label>
                        <select class=" my-1 mr-sm-2 form-control" wire:model="currency_id">
                                <option selected>{{trans('Dashboard\trans_ship.Choose')}}...</option>
                                @foreach($currencies as $curency)
                                    <option value="{{$curency->id}}">{{$curency->curency_name}}</option>
                                @endforeach

                            </select>
                            @error('currency_id')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                    </div>
                </div>
                <div class="form-row">

                    <div class="col col-3 mb-2">
                        <label for="inputState">{{trans('Dashboard/trans_ship.sender_date')}}</label>
                        <input type="date" wire:model="sender_date" class="form-control">
                        @error('sender_date')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class=" col col-3 mb-2">
                        <label for="inputZip">{{trans('Dashboard/trans_ship.expected_recived_date')}}</label>
                        <input type="date" wire:model="expected_recived_date" class="form-control">
                        @error('expected_recived_date')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>


                </div>


                <div class="form-row">

                    <div class="col col-4 mb-2">
                        <label for="title">{{trans('Dashboard\trans_ship.service_type_id')}}</label>
                        <select class=" p-1 my-1 mr-sm-2 form-control" wire:model="service_type_id">
                            <option selected></option>
                            @foreach($service_types as $service_type)
                                <option value="{{$service_type->id}}">{{$service_type->service_name}}</option>
                            @endforeach
                        </select>
                        @error('service_type_id')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="col col-4 mb-2">


                        <label for="title">{{trans('Dashboard/trans_track.tracking_stage_id')}}</label>

                        <label for="title">{{trans('Dashboard\trans_ship.tracking_stage_id')}}</label>

                        <select class="my-1 mr-sm-2 form-control" wire:model="tracking_stage_id">
                            <option selected>{{trans('Dashboard\trans_ship.Choose')}}</option>
                            @foreach($tracking_stages as $tracking_stage)
                                <option value="{{$tracking_stage->id}}">{{$tracking_stage->stage_name}}</option>
                            @endforeach
                        </select>
                        @error('unit_id')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="col col-4 mb-2">
                        <div class="form-group">
                            <label for="address_address">{{trans('Dashboard\trans_ship.Address')}}</label>
                            <input type="text" id="address-input" wire:model="address_address"
                                   class="form-control map-input">
                            <input type="hidden" wire:model="address_latitude" id="address-latitude" value="0"/>
                            <input type="hidden" wire:model="address_longitude" id="address-longitude" value="0"/>
                        </div>
                    </div>



                </div>


                @if($updateMode)
                    <button class="btn btn-success btn-sm nextBtn btn-lg pull-right" type="button"
                            wire:click="SecondStepEdit">{{trans('Dashboard\trans_ship.Next')}}</button>
                @else
                    <button class="btn btn-success btn-sm nextBtn btn-lg pull-right" type="button"
                            wire:click="secondStepSubmit">{{trans('Dashboard\trans_ship.Next')}}</button>
                @endif

                <button class="btn btn-danger btn-sm nextBtn btn-lg pull-right" type="button" wire:click="back(1)">
                    {{trans('Dashboard\trans_ship.back')}}
                </button>
                <br>
            </div>
        </div>
    </div>
@endif
