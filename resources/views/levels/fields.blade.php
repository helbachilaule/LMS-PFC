<div class="modal fade left" id="level-add-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"><i class="fa fa-id-badge" aria-hidden="true"></i></h5>
                <button type="button" class="close"  data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            <!-- Level Field -->
				<div class="form-group col-sm-6">
				    {!! Form::label('level', 'Level:') !!}
				    {!! Form::text('level', null, ['class' => 'form-control','maxlength' => 191,'maxlength' => 191]) !!}
				</div>

				<!-- Course Id Field -->
				<div class="form-group col-sm-6">
				    {!! Form::label('course_id', 'Course Id:') !!}
				    {!! Form::number('course_id', null, ['class' => 'form-control']) !!}
				</div>

				<!-- Level Description Field -->
				<div class="form-group col-sm-12 col-lg-12">
				    {!! Form::label('level_description', 'Level Description:') !!}
				    {!! Form::textarea('level_description', null, ['class' => 'form-control']) !!}
				</div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
                {!!Form::submit('Save Batch',['class' => 'btn btn-success'])!!}
            </div>
        </div>
    </div>
</div>


