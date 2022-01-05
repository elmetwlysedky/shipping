<div>
    @if (!empty($successMessage))
        <div class="alert alert-success" id="success-alert">
            <button type="button" class="close" data-dismiss="alert">x</button>
            {{ $successMessage }}
        </div>
    @endif

    @if ($catchError)
        <div class="alert alert-danger" id="success-danger">
            <button type="button" class="close" data-dismiss="alert">x</button>
            {{ $catchError }}
        </div>
    @endif


    @if($show_table)
        @include('livewire.show_table')
    @else
        <div class="stepwizard">
            <div class="stepwizard-row setup-panel">
                <div class="stepwizard-step">
                    <a href="#step-1" type="button"
                       class="btn btn-circle {{ $currentStep != 1 ? 'btn-default' : "disabled" }}">1</a>
                    <p>{{ trans('Dashboard/trans_ship.Step1') }}</p>
                </div>


                <div class="stepwizard-step">
                    <a href="#step-2" type="button"
                       class="btn btn-circle {{ $currentStep != 2 ? 'btn-default' : 'disabled' }}">2</a>
                    <p>{{ trans('Dashboard/trans_ship.Step2') }}</p>
                </div>
                <div class="stepwizard-step">
                    <a href="#step-3" type="button"
                       class="btn btn-circle {{ $currentStep != 3 ? 'btn-default' : 'disabled' }}"
                       disabled="disabled">3</a>
                    <p>{{ trans('Dashboard/trans_ship.Step3') }}</p>
                </div>
            </div>
        </div>


        @include('livewire.customer_details')
        @include('livewire.shipment_details')


        <div class="row setup-content {{ $currentStep != 3 ? 'displayNone' : '' }}" id="step-3">
            @if ($currentStep != 3)
                <div style="display: none" class="row setup-content" id="step-3">
                    @endif
                    <div class="col-xs-12">
                        <div class="col-md-12"><br><br>

                            <label style="color: red">{{trans('Dashboard\trans_ship.attachement')}}</label>
                            <div class="form-group">
                                <input type="hidden" wire:models="customer_id">

                                <input type="file" wire:model="photos" accept="image/*" multiple >
                            </div>



                            <h3 style="font-family: 'Cairo', sans-serif;">{{trans('Dashboard\trans_ship.attachement')}}</h3><br><br>




                            @if ($updateMode)
                                <button class="btn btn-success btn-sm  pull-right" wire:click="submiteditForm"
                                        type="button">{{ trans('Dashboard\trans_ship.finish') }}</button>
                            @else
                                <button class="btn btn-success btn-sm  pull-right" wire:click="submitForm"
                                        type="button">{{ trans('Dashboard\trans_ship.finish') }}</button>
                            @endif

                            <button class="btn btn-danger btn-sm nextBtn  pull-right" type="button"
                                    wire:click="back(2)">{{ trans('Dashboard\trans_ship.back') }}</button>
                        </div>
                    </div>
                </div>
        </div>
    @endif
</div>

