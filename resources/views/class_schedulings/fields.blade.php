<!--<div class="modal fade left" id="add-classschedule-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" style="width: 90%">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close"  data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title">Horario</h4>
            </div>
           <!- <input type="hidden" name="active" id="active" value="1"> 
            <div class="panel-body" style="border-bottom: 1px solid #ccc; ">
                <div class="form-group">
                <div class="row"></div>-->


<div class="modal fade left" id="horario-add-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-notify modal-ms modal-right modal-success" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"><i class="fa fa-id-badge" aria-hidden="true">Add new</i></h5>
                <button type="button" class="close"  data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title">Horario</h4>
            </div>
            <div class="modal-body">
<!-- Course Id Field -->
<div class="form-group col-sm-4">
    <select class="form-control" name="course_id" id="course_id">
        <option value="">Selecione o Curso</option>
        @foreach($course as $cs)
        <option value="{{$cs->course_id}}">{{$cs->course_name}}</option>
        @endforeach
    </select>
</div>
<!-- Class Id Field -->
<div class="form-group col-sm-4">
    <select class="form-control" name="class_id" id="class_id">
        <option value="">Selecione a turma</option>
        @foreach($class as $cla)
        <option value="{{$cla->class_id}}">{{$cla->class_name}}</option>
        @endforeach
    </select>
</div>
<!-- Level Id Field -->
<div class="form-group col-sm-4">
   <select class="form-control" name="level_id" id="level_id">
        <option value="">Select Level</option>
        @foreach($level as $lev)
        <option value="{{$lev->level_id}}">{{$lev->level}}</option>
        @endforeach 
    </select>
</div>

<!-- Shift Id Field -->
<div class="form-group col-sm-4">
    <select class="form-control" name="shift_id" id="shift_id">
        <option value="">Select Shift</option>
        @foreach($shift as $shi)
        <option value="{{$shi->shift_id}}">{{$shi->shift}}</option>
        @endforeach
    </select>
</div>

<!-- Classroom Id Field -->
<div class="form-group col-sm-4">
    <select class="form-control" name="classroom_id" id="classroom_id">
        <option value="">Selecione a sala</option>
        @foreach($classroom as $room)
        <option value="{{$room->classroom_id}}">{{$room->classroom_name}}_{{$room->classroom_code}}</option>
        @endforeach
    </select>
</div>

<!-- Batch Id Field -->
<div class="form-group col-sm-4">
    <select class="form-control" name="batch_id" id="batch_id">
        <option value="">Select Batch</option>
       @foreach($batch as $btc)
        <option value="{{$btc->batch_id}}">{{$btc->batch}}</option>
        @endforeach
    </select>
</div>

<!-- Day Id Field -->
<div class="form-group col-sm-4">
    <select class="form-control" name="day_id" id="day_id">
        <option value="">Select Day</option>
        @foreach($day as $dy)
        <option value="{{$dy->day_id}}">{{$dy->name}}</option>
        @endforeach
    </select>
</div>

<!-- Time Id Field -->
<div class="form-group col-sm-4">
    <select class="form-control" name="time_id" id="time_id">
        <option value="">Select Time</option>
        @foreach($time as $tm)
        <option value="{{$tm->time_id}}">{{$tm->time}}</option>
        @endforeach
    </select>
</div>

<!-- Semester Id Field -->
<div class="form-group col-sm-4">
    <select class="form-control" name="semester_id" id="semester_id">
        <option value="">Select Semester</option>
        @foreach($semesters as $smt)
        <option value="{{$smt->semester_id}}">{{$smt->semester_name}}</option>
        @endforeach    </select>
</div>
<!--
section('scripts')
<script type="text/javascript">
$('#course_id').on('change', function(e){
    console.log(e);
    var course_if = e.target.value;
        $('#level_id').empty();
        $.get('DynamicLevel?course_id='+ course_id, function(data){
             console.log(data);
        $.each(data, function(index, lev) {
            $('#level_id').append('<option value"'+lev.level_id+'">'+lev.level+'</option')
            
        });
        })
})
</script>
endsection
 Start Time Field 
<div class="form-group col-sm-6">
        <label>Start Date</label>
        <input type="text" class="form-control" name="start_time" id="start_time">
    
</div>
section('scripts')
    <script type="text/javascript">
        $('#start_time').datetimepicker({
            format: 'YYYY-MM-DD', 
            useCurrent: false
        })
    </script>
    endsection

End Time Field 
<div class="form-group col-sm-6">
    <label>Start Date</label>
        <input type="text" class="form-control" name="end_time" id="end_time">
    
</div>
section('scripts')
    <script type="text/javascript">
        $('#end_time').datetimepicker({
            format: 'YYYY-MM-DD', 
            useCurrent: false
        })
    </script>
    endsection-->

<!-- Status Field -->
<div class="form-group col-sm-6">
    {!! Form::label('status', 'Status:') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('status', 0) !!}
        {!! Form::checkbox('status', '1', null) !!}
    </label>
</div>


    </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
                {!!Form::submit('Save Horario',['class' => 'btn btn-success'])!!}
            </div>
        </div>
    </div>
</div>
