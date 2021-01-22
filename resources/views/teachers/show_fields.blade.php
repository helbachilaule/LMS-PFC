<div">
    <!-- First Name Field -->
    <div class="form-group col-12">
    {!! Form::label('full_name', 'First Name:') !!}
    <p>{{ $teacher->full_name }}</p>
    </div>

    <!-- Gender Field -->
    <div class="form-group col-12">
        {!! Form::label('gender', 'Gender:') !!}
        <p>{{ $teacher->gender }}</p>
    </div>
<!-- Phone Field -->
    <div class="form-group col-12">
        {!! Form::label('phone', 'Phone:') !!}
        <p>{{ $teacher->phone }}</p>
    </div>
    <!-- Email Field -->
    <div class="form-group col-12">
        {!! Form::label('email', 'Email:') !!}
        <p>{{ $teacher->email }}</p>
    </div>

    

    <!-- Address Field -->
    <div class="form-group col-12">
        {!! Form::label('address', 'Address:') !!}
        <p>{{ $teacher->address }}</p>
    </div>
</div>






