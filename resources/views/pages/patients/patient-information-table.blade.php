
<div class="py-12 pt-4">

    <table class="datatable-init nowrap table">
        <thead>
            <tr>
                <th>#</th>
                <th>PHIC PIN</th>
                <th>Name</th>
                <th>Extension</th>
                <th>Age</th>
                <th>Residential Address</th>
                <th width="100" class="text-center"> Action </th>
        </thead>
        <tbody>
            @foreach ($patient as $value)
        @csrf
            <tr>
                <td>{{$value['id']}}</td>
                <td>{{$value['patient_phic_pin']}}</td>
                <td>{{$value['patient_last_name'] . ', '. $value['patient_first_name'] . ' ' . $value['patient_middle_name']}}</td>
                <td>{{$value['patient_extension']}}</td>
                <td>{{$value['patient_age']}}</td>
                <td>{{$value['patient_resident_add']}}</td>
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
