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
                <th>A. Heent/Optha</th>
                <th>Other Findings</th>
                <th>B. Chest/Lungs</th>
                <th>Other Findings</th>
                <th>C. Heart/Pulmo</th>
                <th>Other Findings</th>
                <th>D. Abdomen</th>
                <th>Other Findings</th>
                <th>E. Gastrointestinal</th>
                <th>Other Findings</th>
                <th>F. Skeletal System</th>
                <th>G. Endocrine/Nephro</th>
                <th>Other Findings</th>
                <th>H. Genitourinary</th>
                <th>Other Findings</th>
                <th>I. Digital Recital Exaination</th>
                <th>Other Findings</th>
                <th>J. Respiratory</th>
                <th>Other Findings</th>
                <th>K. Skin/Extermities</th>
                <th>Other Findings</th>
                <th>L. Neurological/Psychiatric</th>
                <th>Other Findings</th>
                <th width="100" class="text-center"> Action </th>
        </thead>
        <tbody>
            @foreach ($pertinent as $value)
        @csrf
            <tr>
                <td>{{$value['id']}}</td>
                <td>{{$value['pertinent_heent']}}</td>
                <td>{{$value['pertinent_heent_other']}}</td>
                <td>{{$value['pertinent_chest']}}</td>
                <td>{{$value['pertinent_chest_other']}}</td>
                <td>{{$value['pertinent_heart']}}</td>
                <td>{{$value['pertinent_heart_other']}}</td>
                <td>{{$value['pertinent_abdomen']}}</td>
                <td>{{$value['pertinent_abdomen_other']}}</td>
                <td>{{$value['pertinent_gastrointestinal']}}</td>
                <td>{{$value['pertinent_gastrointestinal_other']}}</td>
                <td>{{$value['pertinent_skeletal']}}</td>
                <td>{{$value['pertinent_endocrine']}}</td>
                <td>{{$value['pertinent_endocrine_other']}}</td>
                <td>{{$value['pertinent_genitourinary']}}</td>
                <td>{{$value['pertinent_genitourinary_other']}}</td>
                <td>{{$value['pertinent_recital_exam']}}</td>
                <td>{{$value['pertinent_recital_exam_other']}}</td>
                <td>{{$value['pertinent_respiratory']}}</td>
                <td>{{$value['pertinent_respiratory_other']}}</td>
                <td>{{$value['pertinent_skin']}}</td>
                <td>{{$value['pertinent_skin_other']}}</td>
                <td>{{$value['pertinent_neurological']}}</td>
                <td>{{$value['pertinent_neurological_other']}}</td>
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
