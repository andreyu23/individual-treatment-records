<div class="py-12 pt-4">
    @if ($errors->any())
    <div class="alert alert-pro alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
    <table class="datatable-init nowrap table">
        <thead>
            <tr>
                <th>#</th>
                <th>Prenatal Outcome</th>
                <th>Name</th>
                <th>Sex</th>
                <th>Birth Length</th>
                <th>Birth Weight</th>
                <th>Prenatal Delivered</th>
                <th>Place of Delivery</th>
                <th>Mode of Delivery</th>
                <th>Attendant at Birth</th>
                <th>Delivery Date</th>
                <th>Delivery Time</th>
                <th>Date Initiated</th>
                <th>Time Initiated Breastfeeding</th>
                <th>Date of Postpartum visit within 25hrs after Delivery</th>
                <th>Date of Postpartum visit within 1 week after Delivery</th>
                <th>Danger Signs (Mother)</th>
                <th>Danger Signs (Baby)</th>
                <th>Date Vitamin A Given</th>
                <th>Date Iron Given</th>
                <th>No. of Iron Given</th>
                <th width="100" class="text-center"> Action </th>
        </thead>
        <tbody>
            @foreach ($postpartum as $value)
        @csrf
            <tr>
                <td>{{$value['id']}}</td>
                <td>{{$value['postpartum_prenatal_outcome']}}</td>
                <td>{{$value['postpartum_child_last_name'] . ', ' . $value['postpartum_child_first_name'] . ' ' . $value['postpartum_child_middle_name']}}</td>
                <td>{{$value['postpartum_child_sex']}}</td>
                <td>{{$value['postpartum_child_length']}}</td>
                <td>{{$value['postpartum_child_weight']}}</td>
                <td>{{$value['postpartum_prenatal_delivered']}}</td>
                <td>{{$value['postpartum_place_delivery']}}</td>
                <td>{{$value['postpartum_mode_delivery']}}</td>
                <td>{{$value['postpartum_attendant']}}</td>
                <td>{{$value['postpartum_delivery_date']}}</td>
                <td>{{$value['postpartum_delivery_time']}}</td>
                <td>{{$value['postpartum_date_initiatied']}}</td>
                <td>{{$value['postpartum_time_breastfeed']}}</td>
                <td>{{$value['postpartum_date_after_day']}}</td>
                <td>{{$value['postpartum_date_after_week']}}</td>
                <td>{{$value['postpartum_danger_mother']}}</td>
                <td>{{$value['postpartum_danger_baby']}}</td>
                <td>{{$value['postpartum_date_vitamin']}}</td>
                <td>{{$value['postpartum_date_iron']}}</td>
                <td>{{$value['postpartum_number_iron']}}</td>
                <td>
                    <button class="btn btn-xs btn-light}">
                        <em class="icon ni ni-edit"> </em>
                    </button>
                        <button type="submit" class="btn btn-xs btn-danger text-white">
                            <em class="icon ni ni-trash"></em>
                        </button>

                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
