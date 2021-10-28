<div class="table-responsive">
    <table class="table" id="employeeSalaries-table">
        <thead class="bg-success">
            <tr>
                <th>Employee Id</th>
        <th>Salary</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($employeeSalaries as $employeeSalary)
            <tr>
                <td>{{ $employeeSalary->employee_id }}</td>
            <td>{{ $employeeSalary->salary }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['employeeSalaries.destroy', $employeeSalary->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('employeeSalaries.show', [$employeeSalary->id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('employeeSalaries.edit', [$employeeSalary->id]) }}" class='btn btn-default btn-xs'>
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
