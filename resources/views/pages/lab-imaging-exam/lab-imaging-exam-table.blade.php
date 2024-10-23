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
                <th>Random Blood Sugar</th>
                <th>CBC w/ Platelent Count</th>
                <th>Chest X-Ray</th>
                <th>Creatine</th>
                <th>Electrocardiogram (ECG)</th>
                <th>Fasting Blood Sugar</th>
                <th>Fecal Occult Blood</th>
                <th>Fecalysis</th>
                <th>HbA1c</th>
                <th>Lipid Profile</th>
                <th>Oral Glucose Tolerance Test</th>
                <th>Pap Smear</th>
                <th>PPD Test(Tuberculosis)</th>
                <th>Sputum Microscopy</th>
                <th>Urinalysis</th>
                <th>Others</th>
                <th width="100" class="text-center"> Action </th>
        </thead>
        <tbody>
            @foreach ($lab as $value)
        @csrf
            <tr>
                <td>{{$value['id']}}</td>
                <td>{{$value['lab_random_blood']}}</td>
                <td>{{$value['lab_cbc_platelet']}}</td>
                <td>{{$value['lab_chest_xray']}}</td>
                <td>{{$value['lab_creatine']}}</td>
                <td>{{$value['lab_elctrocardiogram']}}</td>
                <td>{{$value['lab_fasting_blood']}}</td>
                <td>{{$value['lab_occult_blood']}}</td>
                <td>{{$value['lab_fecalysis']}}</td>
                <td>{{$value['lab_hba']}}</td>
                <td>{{$value['lab_lipid_profile']}}</td>
                <td>{{$value['lab_oral_glucose']}}</td>
                <td>{{$value['lab_pap_smear']}}</td>
                <td>{{$value['lab_ppd_test']}}</td>
                <td>{{$value['lab_sputum_microscopy']}}</td>
                <td>{{$value['lab_urinalysis']}}</td>
                <td>{{$value['lab_others']}}</td>
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
