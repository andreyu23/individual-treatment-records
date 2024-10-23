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
                <th>Date</th>
                <th>History of Illness</th>
                <th>Physical Exam</th>
                <th>Assessment/Impression</th>
                <th>Treatment/Management Plan</th>
                <th>Schedule of Follow Up</th>
                <th width="100" class="text-center"> Action </th>
        </thead>
        <tbody>
            @foreach ($general as $value)
        @csrf
            <tr>
                <td>{{$value['id']}}</td>
                <td>{{$value['general_date']}}</td>
                <td>{{$value['general_history']}}</td>
                <td>{{$value['general_physical_exam']}}</td>
                <td>{{$value['general_assessment']}}</td>
                <td>{{$value['general_treatment']}}</td>
                <td>{{$value['general_schedule']}}</td>
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