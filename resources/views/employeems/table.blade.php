<div class="table-responsive">
    <table class="table" id="employeems-table">
        <thead class="bg-success">
            <tr>
                <th>Lastname</th>
        <th>Firstname</th>
        <th>Middlename</th>
        <th>Address</th>
        <th>City Id</th>
        <th>State Id</th>
        <th>Country Id</th>
        <th>Zip</th>
        <th>Age</th>
        <th>Birthdate</th>
        <th>Date Hired</th>
        <th>Department Id</th>
        <th>Division Id</th>
        <th>Picture</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($employeems as $employeems)
            <tr>
                <td>{{ $employeems->lastname }}</td>
            <td>{{ $employeems->firstname }}</td>
            <td>{{ $employeems->middlename }}</td>
            <td>{{ $employeems->address }}</td>
            <td>{{ $employeems->city_id }}</td>
            <td>{{ $employeems->state_id }}</td>
            <td>{{ $employeems->country_id }}</td>
            <td>{{ $employeems->zip }}</td>
            <td>{{ $employeems->age }}</td>
            <td>{{ $employeems->birthdate }}</td>
            <td>{{ $employeems->date_hired }}</td>
            <td>{{ $employeems->department_id }}</td>
            <td>{{ $employeems->division_id }}</td>
            <td>{{ $employeems->picture }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['employeems.destroy', $employeems->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('employeems.show', [$employeems->id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('employeems.edit', [$employeems->id]) }}" class='btn btn-default btn-xs'>
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
