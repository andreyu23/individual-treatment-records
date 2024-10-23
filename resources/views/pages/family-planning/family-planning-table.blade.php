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
                <th>Type of Client</th>
                <th>Method</th>
                <th>Reason</th>
                <th>Schedule of Next Visit</th>
                <th width="100" class="text-center"> Action </th>
        </thead>
        <tbody>
            @foreach ($family as $value)
        @csrf
            <tr>
                <td>{{$value['id']}}</td>
                <td>{{$value['fam_client_type']}}</td>
                <td>{{$value['fam_method']}}</td>
                <td>{{$value['fam_reason']}}</td>
                <td>{{$value['fam_schedule']}}</td>
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
