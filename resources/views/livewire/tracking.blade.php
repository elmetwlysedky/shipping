<div class="container">


    <div class="row">
        <div class="col-md-12">
                <h6>{{trans('Dashboard/trans_track.enter_shipment_number')}}</h6><br>
                <div id="custom-search-input">
                    <div class="input-group col-md-12">
                        <input type="text"  wire:model="term"class="search-query form-control" placeholder="Search" />
                        <span class="input-group-btn">
                                    <button class="btn btn-danger btn-sm" type="button">
                                        <i class="icofont-search-user  icofont-sm"></i>
                                    </button>
                        </span>
                    </div>
                </div>
        </div><br>

        <div class="col-md-12"><br>
            <div class="table-responsive">


                <table id="mytable" class="table table-bordred table-striped">

                    <thead>

                    <th><input type="checkbox" id="checkall" /></th>
                    <th>{{trans('Dashboard/trans_track.tracking_stage_id')}}</th>
                    <th>{{trans('Dashboard/trans_track.customer_id')}}</th>
                    <th>{{trans('Dashboard/trans_track.full_number')}}</th>
                    <th>{{trans('Dashboard/trans_track.outcomming_date')}}</th>
                    <th>{{trans('Dashboard/trans_track.location_now')}}</th>
                    <th>{{trans('Dashboard/trans_track.desc')}}</th>

                    </thead>
                    <tbody>

                 @foreach($tracking_shipments as $tracking_shipment)
                    <tr>
                        <td><input type="checkbox" class="checkthis" /></td>
                        <td>{{$tracking_shipment->tracking_stages->stage_name}}</td>
                        <td>{{$tracking_shipment->customers->sender_full_name}}</td>
                        <td>{{$tracking_shipment->full_number}}</td>
                        <td>{{$tracking_shipment->outcomming_date}}</td>
                        <td>{{$tracking_shipment->location_now}}</td>
                        <th>{{$tracking_shipment->desc}}</th>
                        </tr>
                 @endforeach



                    </tbody>

                </table>

                <div class="p-4">
                    {{--{{$tracking_shipments->links()}}--}}
                </div>

            </div>

        </div>
    </div>
</div>
