<div class="table-responsive">
    <table class="table" id="divisions-table">
        <thead class="bg-success">
            <tr>
                <th>Name</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($divisions as $division)
            <tr>
                <td>{{ $division->name }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['divisions.destroy', $division->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('divisions.show', [$division->id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('divisions.edit', [$division->id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-edit"></i>
                        </a>
                        {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
