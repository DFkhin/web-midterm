<!-- Lastname Field -->
<div class="form-group col-sm-6">
    {!! Form::label('lastname', 'Lastname:') !!}
    {!! Form::text('lastname', null, ['class' => 'form-control','maxlength' => 60,'maxlength' => 60]) !!}
</div>

<!-- Firstname Field -->
<div class="form-group col-sm-6">
    {!! Form::label('firstname', 'Firstname:') !!}
    {!! Form::text('firstname', null, ['class' => 'form-control','maxlength' => 60,'maxlength' => 60]) !!}
</div>

<!-- Middlename Field -->
<div class="form-group col-sm-6">
    {!! Form::label('middlename', 'Middlename:') !!}
    {!! Form::text('middlename', null, ['class' => 'form-control','maxlength' => 60,'maxlength' => 60]) !!}
</div>

<!-- Address Field -->
<div class="form-group col-sm-6">
    {!! Form::label('address', 'Address:') !!}
    {!! Form::text('address', null, ['class' => 'form-control','maxlength' => 120,'maxlength' => 120]) !!}
</div>

<!-- City Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('city_id', 'City Id:') !!}
    {!! Form::number('city_id', null, ['class' => 'form-control']) !!}
</div>

<!-- State Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('state_id', 'State Id:') !!}
    {!! Form::number('state_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Country Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('country_id', 'Country Id:') !!}
    {!! Form::number('country_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Zip Field -->
<div class="form-group col-sm-6">
    {!! Form::label('zip', 'Zip:') !!}
    {!! Form::text('zip', null, ['class' => 'form-control','maxlength' => 10,'maxlength' => 10]) !!}
</div>

<!-- Age Field -->
<div class="form-group col-sm-6">
    {!! Form::label('age', 'Age:') !!}
    {!! Form::number('age', null, ['class' => 'form-control']) !!}
</div>

<!-- Birthdate Field -->
<div class="form-group col-sm-6">
    {!! Form::label('birthdate', 'Birthdate:') !!}
    {!! Form::text('birthdate', null, ['class' => 'form-control','id'=>'birthdate']) !!}
</div>

@push('page_scripts')
    <script type="text/javascript">
        $('#birthdate').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: true,
            sideBySide: true
        })
    </script>
@endpush

<!-- Date Hired Field -->
<div class="form-group col-sm-6">
    {!! Form::label('date_hired', 'Date Hired:') !!}
    {!! Form::text('date_hired', null, ['class' => 'form-control','id'=>'date_hired']) !!}
</div>

@push('page_scripts')
    <script type="text/javascript">
        $('#date_hired').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: true,
            sideBySide: true
        })
    </script>
@endpush

<!-- Department Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('department_id', 'Department Id:') !!}
    {!! Form::number('department_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Division Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('division_id', 'Division Id:') !!}
    {!! Form::number('division_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Picture Field -->
<div class="form-group col-sm-6">
    {!! Form::label('picture', 'Picture:') !!}
    {!! Form::text('picture', null, ['class' => 'form-control','maxlength' => 60,'maxlength' => 60]) !!}
</div>