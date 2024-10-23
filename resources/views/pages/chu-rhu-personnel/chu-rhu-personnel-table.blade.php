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
                <th>Mode of Transaction</th>
                <th>Date of Consultation</th>
                <th>Time</th>
                <th>BP</th>
                <th>Temp</th>
                <th>RR</th>
                <th>HR</th>
                <th>O2 SAT</th>
                <th>PR</th>
                <th>Waist Circumference</th>
                <th>Height</th>
                <th>Weight</th>
                <th>Administered By</th>
                <th>Referred From</th>
                <th>Referred To</th>
                <th>Reason of Referral</th>
                <th>Referred By</th>
                <th>Nature of Visit</th>
                <th>Attending Provider</th>
                <th width="100" class="text-center"> Action </th>
        </thead>
        <tbody>
            @foreach ($personnel as $value)
        @csrf
            <tr>
                <td>{{$value['id']}}</td>
                <td>{{$value['chu_rhu_mode_transact']}}</td>
                <td>{{$value['chu_rhu_date']}}</td>
                <td>{{$value['chu_rhu_time']}}</td>
                <td>{{$value['chu_rhu_bp']}}</td>
                <td>{{$value['chu_rhu_temperature']}}</td>
                <td>{{$value['chu_rhu_rr']}}</td>
                <td>{{$value['chu_rhu_hr']}}</td>
                <td>{{$value['chu_rhu_o2_sat']}}</td>
                <td>{{$value['chu_rhu_pr']}}</td>
                <td>{{$value['chu_rhu_waist_circumference']}}</td>
                <td>{{$value['chu_rhu_height']}}</td>
                <td>{{$value['chu_rhu_weight']}}</td>
                <td>{{$value['chu_rhu_administered_by']}}</td>
                <td>{{$value['chu_rhu_referred_from']}}</td>
                <td>{{$value['chu_rhu_referred_to']}}</td>
                <td>{{$value['chu_rhu_reason_refer']}}</td>
                <td>{{$value['chu_rhu_referred_by']}}</td>
                <td>{{$value['chu_rhu_nature_visit']}}</td>
                <td>{{$value['chu_rhu_attending_provider']}}</td>
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
