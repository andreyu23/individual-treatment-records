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
                <th>Gradivity</th>
                <th>Parity</th>
                <th>Term</th>
                <th>Preterm</th>
                <th>Livebirth</th>
                <th>Abortion</th>
                <th>Syphilis Result</th>
                <th>Penicillin</th>
                <th>Schedule of Next Visit</th>
                <th>Fundic Height</th>
                <th>LMP</th>
                <th>EDC</th>
                <th>IRON</th>
                <th>AOG</th>
                <th>TT</th>
                <th>Others</th>
                <th>Fetal Heart Tone</th>
                <th>Prenatal Visits</th>
                <th width="100" class="text-center"> Action </th>
        </thead>
        <tbody>
            @foreach ($prenatal as $value)
        @csrf
            <tr>
                <td>{{$value['id']}}</td>
                <td>{{$value['prenatal_gradivity']}}</td>
                <td>{{$value['prenatal_parity']}}</td>
                <td>{{$value['prenatal_term']}}</td>
                <td>{{$value['prenatal_preterm']}}</td>
                <td>{{$value['prenatal_live_birth']}}</td>
                <td>{{$value['prenatal_abortion']}}</td>
                <td>{{$value['prenatal_syphilis_result']}}</td>
                <td>{{$value['prenatal_penicillin']}}</td>
                <td>{{$value['prenatal_schedule']}}</td>
                <td>{{$value['prenatal_fundic_height']}}</td>
                <td>{{$value['prenatal_lmp']}}</td>
                <td>{{$value['prenatal_edc']}}</td>
                <td>{{$value['prenatal_iron']}}</td>
                <td>{{$value['prenatal_aog']}}</td>
                <td>{{$value['prenatal_tt']}}</td>
                <td>{{$value['prenatal_other']}}</td>
                <td>{{$value['prenatal_fetal_heart']}}</td>
                <td>{{$value['prenatal_visits']}}</td>
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
