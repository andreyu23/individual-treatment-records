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
                <th>Birth Weight</th>
                <th>Immunization</th>
                <th>Other Immunization</th>
                <th>Date</th>
                <th width="100" class="text-center"> Action </th>
        </thead>
        <tbody>
            @foreach ($child as $value)
        @csrf
            <tr>
                <td>{{$value['id']}}</td>
                <td>{{$value['child_weight']}}</td>
                <td>{{$value['child_immunization']}}</td>
                <td>{{$value['child_immunization_other']}}</td>
                <td>{{$value['child_date']}}</td>
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
