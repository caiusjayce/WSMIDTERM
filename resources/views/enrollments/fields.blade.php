<!-- Firstname Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Firstname', 'Firstname:') !!}
    {!! Form::text('Firstname', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Lastname Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Lastname', 'Lastname:') !!}
    {!! Form::text('Lastname', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Mi Field -->
<div class="form-group col-sm-6">
    {!! Form::label('MI', 'Mi:') !!}
    {!! Form::text('MI', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Course Field -->
<div class="form-group col-sm-6">
    {!! Form::label('course', 'Course:') !!}
    {!! Form::text('course', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Year Field -->
<div class="form-group col-sm-6">
    {!! Form::label('year', 'Year:') !!}
    {!! Form::number('year', null, ['class' => 'form-control']) !!}
</div>

<!-- Date Of Birth Field -->
<div class="form-group col-sm-6">
    {!! Form::label('date of birth', 'Date Of Birth:') !!}
    {!! Form::text('date of birth', null, ['class' => 'form-control','id'=>'date of birth']) !!}
</div>

@push('page_scripts')
    <script type="text/javascript">
        $('#date of birth').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: true,
            sideBySide: true
        })
    </script>
@endpush

<!-- Current Address Field -->
<div class="form-group col-sm-6">
    {!! Form::label('current address', 'Current Address:') !!}
    {!! Form::text('current address', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Email Address Field -->
<div class="form-group col-sm-6">
    {!! Form::label('email address', 'Email Address:') !!}
    {!! Form::text('email address', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Phone Number Field -->
<div class="form-group col-sm-6">
    {!! Form::label('phone number', 'Phone Number:') !!}
    {!! Form::number('phone number', null, ['class' => 'form-control']) !!}
</div>