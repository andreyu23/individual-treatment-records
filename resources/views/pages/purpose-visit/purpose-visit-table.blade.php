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
                <th>Type of Consultation/Purpose of Visit</th>
                <th>Chief Complaints</th>
                <th>Other Complaints</th>
                <th width="100" class="text-center"> Action </th>
        </thead>
        <tbody>
            @foreach ($visit as $value)
        @csrf
            <tr>
                <td>{{$value['id']}}</td>
                <td>{{$value['purpose_visit_type']}}</td>
                <td>{{$value['purpose_visit_chief_complaints']}}</td>
                <td>{{$value['purpose_visit_other_complaints']}}</td>
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
