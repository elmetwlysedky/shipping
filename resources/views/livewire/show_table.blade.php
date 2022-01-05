
<button class="btn btn-success btn-sm btn-md pull-right" wire:click="showformadd" type="button">{{ trans('Dashboard\trans_ship.add_shipment') }}</button><br><br><br>

        <table id="example" class="table table-striped table-bordered table-condensed table-responsive" style="width:100%">
            <thead>
            <tr>


                <th>#</th>

                <th>{{  trans('Dashboard\trans_ship.email') }}</th>
                <th>{{ trans('Dashboard\trans_ship.sender_full_name') }}</th>

                <th>{{ trans('Dashboard\trans_ship.shipment_name') }}</th>
                <th>{{ trans('Dashboard\trans_ship.price') }}</th>
                <th>{{ trans('Dashboard\trans_ship.amount') }}</th>
                <th>{{ trans('Dashboard\trans_ship.Processes') }}</th>


            </tr>
            </thead>
            <tbody>
            <?php $i=0;?>


            @foreach($shipments_list as $ship)
                <tr>

                    <?php $i++;?>
                    <td> {{$i}}</td>

                    <td>{{ $ship->customers->email }}</td>

                    <td>{{ $ship->customers->sender_full_name }}</td>
                    <td>{{ $ship->shipment_name }}</td>
                    <td>{{ $ship->price }}</td>
                    <td>{{ $ship->amount }}</td>
                    <td>
                        <button wire:click="edit({{ $ship->id }})" title="{{ trans('Dashboard\trans_ship.Edit') }}"
                                class="btn btn-primary btn-sm">{{ trans('Dashboard\trans_ship.Edit') }}</button>
                        <button type="button" class="btn btn-danger btn-sm" wire:click="delete({{ $ship->id }})"
                                title="{{ trans('Dashboard\trans_ship.Delete') }}">{{ trans('Dashboard\trans_ship.Delete') }}</button>
                    </td>

                </tr>
            @endforeach

            </tbody>
            <tfoot>
            <tr>
                <th>#</th>

                <th>{{  trans('Dashboard\trans_ship.email') }}</th>


                <th>{{ trans('Dashboard\trans_ship.sender_full_name') }}</th>



                <th>{{ trans('Dashboard\trans_ship.shipment_name') }}</th>
                <th>{{ trans('Dashboard\trans_ship.price') }}</th>
                <th>{{ trans('Dashboard\trans_ship.amount') }}</th>

                <th>{{ trans('Dashboard\trans_ship.Processes') }}</th>
            </tr>
            </tfoot>
        </table>


